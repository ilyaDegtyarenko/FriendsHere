<?php

namespace App\Http\Controllers\Initial;

use App\Http\Controllers\Controller;

class BlockController extends Controller
{
    /**
     * Returns page for blocked user.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\View\View
     */
    public function index()
    {
        if (!session()->exists('user')) {
            return redirect()->route('home');
        }
        return view('pages.initial.block');
    }
}
