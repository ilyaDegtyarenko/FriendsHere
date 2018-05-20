<?php

namespace App\Http\Classes\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Http\Traits\Helpers\Tools\BugReportHelper;

class SocialAuthClass
{
    use BugReportHelper;

    /**
     * Social client provider.
     *
     * @var string
     */
    protected $provider;

    /**
     * SocialAuthClass constructor.
     */
    public function __construct()
    {
        if (!request('provider')) {
            self::bugReport(request(), 'Empty provider');
            return redirect()->route('login')->with('error', trans('messages.social_auth_unavailable'));
        } else {
            $this->provider = (string)request('provider');
        }
    }

    /**
     * Handling response and making authorization.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handle()
    {
        if (in_array($this->provider, config('services.active-providers'))) {

            /*Refresh session*/
            Auth::logout();
            Session::flush();
            Session::regenerate();

            /*Trying to connect with client provider*/
            try {
                $data = \SocialAuth::driver($this->provider)->stateless()->user();
            } catch (\Exception $exception) {
                self::bugReport(request(), $exception->getMessage() ?? 'Empty message');
                return redirect()->route('login')->with('error', trans('messages.auth.social_auth_unavailable'));
            }

            $userData = (object)[
                'name' => $data->name ?? null,
                'email' => $data->email ?? null,
                'avatar' => $data->avatar_original ?? $data->avatar ?? null,
            ];

            /*User search*/
            $user = User::where('email', $userData->email);

            /*Making authorization*/
            if ($user->exists()) {
                Auth::loginUsingId($user->first()->id, true);
            } else {
                $user = User::create([
                    'name' => $userData->name,
                    'email' => $userData->email,
                    'password' => Hash::make(time() . str_random(20) . rand(1000, 9999)),
                    'remember_token' => str_random(10) . rand(100, 999),
                    'avatar' => $userData->avatar,
                    'ip' => request()->ip() ?? null,
                ]);

                Auth::loginUsingId($user->id, true);
            }
        } else {
            self::bugReport(request(), json_encode([$this->provider, config('services.active-providers')]));
            return redirect()->route('login')->with('error', trans('messages.auth.social_auth_unavailable'));
        }

        return redirect()->route('index')->with('message', trans('messages.auth.successful_auth', ['name' => $userData->name]));
    }
}