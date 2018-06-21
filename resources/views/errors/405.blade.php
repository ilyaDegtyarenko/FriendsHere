<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} - {{ trans('errors.error') }} 405</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:300,400&subset=cyrillic,cyrillic-ext'>
    <style>
        body {
            margin: 0;
            font-family: "Roboto", sans-serif;
        }

        .overlay {
            background: #f9f9f9;
            max-width: 100%;
            height: 100%;
            opacity: 1;
            z-index: 2;
        }

        .container {
            overflow: hidden;
            position: relative;
            z-index: 1;
            background: no-repeat center center;
            background-size: cover;
            margin: 0 auto;
            -webkit-animation: glitch 2s step-end infinite;
            -moz-animation: glitch 2s step-end infinite;
            animation: glitch 2s step-end infinite;
        }

        .container #glitch-container {
            padding: 0;
            z-index: 3;
            position: absolute;
            top: 50%;
            left: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            -o-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .container #glitch-container h1 {
            font-size: 6rem;
            font-weight: 700;
            font-family: 'Source Sans Pro', sans-serif;
            margin: 0;
            color: rgba(0, 0, 0, .8);
            letter-spacing: .8px;
            text-transform: uppercase;
            text-align: center;
        }

        .container #glitch-container h3 {
            font-size: 1.3rem;
            font-weight: 400;
            font-family: 'Source Sans Pro', sans-serif;
            margin: 0;
            color: rgba(0, 0, 0, .8);
            letter-spacing: .8px;
            text-align: center;
            -webkit-animation: crashedText 1.5s infinite linear alternate-reverse;
            -moz-animation: crashedText 1.5s infinite linear alternate-reverse;
            -o-animation: crashedText 1.5s infinite linear alternate-reverse;
            animation: crashedText 1.5s infinite linear alternate-reverse;
        }

        @media only screen and (min-width: 567px) {
            .container #glitch-container h1 {
                font-size: 15rem;
            }
        }

        .glitch:before,
        .glitch:after {
            content: attr(data-text);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .glitch::before {
            left: 2px;
            text-shadow: -1px 0 rgba(245, 28, 0, .5);
            clip: rect(424px, 450px, 516px, 0);
            -webkit-animation: glitchText 2s infinite linear alternate-reverse;
            -moz-animation: glitchText 2s infinite linear alternate-reverse;
            -o-animation: glitchText 2s infinite linear alternate-reverse;
            animation: glitchText 2s infinite linear alternate-reverse;
        }

        .glitch::after {
            left: -2px;
            text-shadow: -1px 0 rgba(41, 0, 6, .9);
            clip: rect(424px, 450px, 526px, 0);
            -webkit-animation: glitchText2 2s infinite linear alternate-reverse;
            -moz-animation: glitchText2 2s infinite linear alternate-reverse;
            -o-animation: glitchText2 2s infinite linear alternate-reverse;
            animation: glitchText2 2s infinite linear alternate-reverse;
        }

        .offset-wrapper {
            position: absolute;
            left: 30px;
            top: 30px;
        }

        .offset {
            -webkit-box-shadow: 0.3em 0.3em 0 0 rgba(0, 0, 0, .25),
            inset 0.3em 0.3em 0 0 rgba(0, 0, 0, .25);
            -moz-box-shadow: 0.3em 0.3em 0 0 rgba(0, 0, 0, .25),
            inset 0.3em 0.3em 0 0 rgba(0, 0, 0, .25);
            box-shadow: 0.3em 0.3em 0 0 rgba(0, 0, 0, .25),
            inset 0.3em 0.3em 0 0 rgba(0, 0, 0, .25);

        }

        .offset:hover, .offset:focus {
            cursor: pointer;
            -webkit-box-shadow: 0 0 0 0 rgba(0, 0, 0, .8),
            inset 6em 3.5em 0 0 rgba(0, 0, 0, .8);
            -moz-box-shadow: 0 0 0 0 rgba(0, 0, 0, .8),
            inset 6em 3.5em 0 0 rgba(0, 0, 0, .9);
            box-shadow: 0 0 0 0 rgba(0, 0, 0, .9),
            inset 6em 3.5em 0 0 rgba(0, 0, 0, .9);
        }

        button {
            color: rgba(0, 0, 0, .75);
            transition: 0.25s;
        }

        button:hover, button:focus {
            color: #f9f9f9;
        }

        button {
            background: none;
            border: 4px solid rgba(0, 0, 0, .8);
            font: inherit;
            line-height: 1;
            margin: 0.5em;
            padding: 1em 2em;
        }

        @-webkit-keyframes glitchText2 {
            0% {
                clip: rect(412px, 9999px, 237px, 0);
            }
            10% {
                clip: rect(323px, 9999px, 234px, 0);
            }
            20% {
                clip: rect(8px, 9999px, 811px, 0);
            }
            30% {
                clip: rect(435px, 9999px, 217px, 0);
            }
            40% {
                clip: rect(921px, 9999px, 147px, 0);
            }
            50% {
                clip: rect(274px, 9999px, 284px, 0);
            }
            60% {
                clip: rect(46px, 9999px, 621px, 0);
            }
            70% {
                clip: rect(19px, 9999px, 123px, 0);
            }
            80% {
                clip: rect(629px, 9999px, 432px, 0);
            }
            90% {
                clip: rect(4px, 9999px, 343px, 0);
            }
            100% {
                clip: rect(121px, 9999px, 11px, 0);
            }
        }

        @-o-keyframes glitchText2 {
            0% {
                clip: rect(412px, 9999px, 237px, 0);
            }
            10% {
                clip: rect(323px, 9999px, 234px, 0);
            }
            20% {
                clip: rect(8px, 9999px, 811px, 0);
            }
            30% {
                clip: rect(435px, 9999px, 217px, 0);
            }
            40% {
                clip: rect(921px, 9999px, 147px, 0);
            }
            50% {
                clip: rect(274px, 9999px, 284px, 0);
            }
            60% {
                clip: rect(46px, 9999px, 621px, 0);
            }
            70% {
                clip: rect(19px, 9999px, 123px, 0);
            }
            80% {
                clip: rect(629px, 9999px, 432px, 0);
            }
            90% {
                clip: rect(4px, 9999px, 343px, 0);
            }
            100% {
                clip: rect(121px, 9999px, 11px, 0);
            }
        }

        @keyframes glitchText2 {
            0% {
                clip: rect(412px, 9999px, 237px, 0);
            }
            10% {
                clip: rect(323px, 9999px, 234px, 0);
            }
            20% {
                clip: rect(8px, 9999px, 811px, 0);
            }
            30% {
                clip: rect(435px, 9999px, 217px, 0);
            }
            40% {
                clip: rect(921px, 9999px, 147px, 0);
            }
            50% {
                clip: rect(274px, 9999px, 284px, 0);
            }
            60% {
                clip: rect(46px, 9999px, 621px, 0);
            }
            70% {
                clip: rect(19px, 9999px, 123px, 0);
            }
            80% {
                clip: rect(629px, 9999px, 432px, 0);
            }
            90% {
                clip: rect(4px, 9999px, 343px, 0);
            }
            100% {
                clip: rect(121px, 9999px, 11px, 0);
            }
        }

        @-webkit-keyframes glitchText {
            0% {
                clip: rect(125px, 9999px, 1px, 0);
            }
            10% {
                clip: rect(120px, 9999px, 322px, 0);
            }
            20% {
                clip: rect(58px, 9999px, 235px, 0);
            }
            30% {
                clip: rect(30px, 9999px, 7px, 0);
            }
            40% {
                clip: rect(126px, 9999px, 528px, 0);
            }
            50% {
                clip: rect(42px, 9999px, 96px, 0);
            }
            60% {
                clip: rect(247px, 9999px, 620px, 0);
            }
            70% {
                clip: rect(728px, 9999px, 517px, 0);
            }
            80% {
                clip: rect(15px, 9999px, 66px, 0);
            }
            90% {
                clip: rect(923px, 9999px, 204px, 0);
            }
            100% {
                clip: rect(62px, 9999px, 6px, 0);
            }
        }

        @-o-keyframes glitchText {
            0% {
                clip: rect(125px, 9999px, 1px, 0);
            }
            10% {
                clip: rect(120px, 9999px, 322px, 0);
            }
            20% {
                clip: rect(58px, 9999px, 235px, 0);
            }
            30% {
                clip: rect(30px, 9999px, 7px, 0);
            }
            40% {
                clip: rect(126px, 9999px, 528px, 0);
            }
            50% {
                clip: rect(42px, 9999px, 96px, 0);
            }
            60% {
                clip: rect(247px, 9999px, 620px, 0);
            }
            70% {
                clip: rect(728px, 9999px, 517px, 0);
            }
            80% {
                clip: rect(15px, 9999px, 66px, 0);
            }
            90% {
                clip: rect(923px, 9999px, 204px, 0);
            }
            100% {
                clip: rect(62px, 9999px, 6px, 0);
            }
        }

        @keyframes glitchText {
            0% {
                clip: rect(125px, 9999px, 1px, 0);
            }
            10% {
                clip: rect(120px, 9999px, 322px, 0);
            }
            20% {
                clip: rect(58px, 9999px, 235px, 0);
            }
            30% {
                clip: rect(30px, 9999px, 7px, 0);
            }
            40% {
                clip: rect(126px, 9999px, 528px, 0);
            }
            50% {
                clip: rect(42px, 9999px, 96px, 0);
            }
            60% {
                clip: rect(247px, 9999px, 620px, 0);
            }
            70% {
                clip: rect(728px, 9999px, 517px, 0);
            }
            80% {
                clip: rect(15px, 9999px, 66px, 0);
            }
            90% {
                clip: rect(923px, 9999px, 204px, 0);
            }
            100% {
                clip: rect(62px, 9999px, 6px, 0);
            }
        }

        @-moz-keyframes crashedText {
            10% {
                -moz-transform: skewX(-9deg);
                opacity: 1;
            }
            10.1% {
                -moz-transform: skewX(0deg);
                opacity: 1;
            }
            50% {
                opacity: 1;
            }
            50.001% {
                opacity: .8;
            }
            52.999% {
                opacity: .1;
            }
            53% {
                -moz-transform: skewX(4deg);
                opacity: 1;
            }
            53.1% {
                -moz-transform: skewX(2deg);
                opacity: 1;
            }
            90% {
                -moz-transform: skewX(5deg);
                opacity: .8;
            }
            90.2% {
                -moz-transform: skewX(3deg);
                opacity: 1;
            }
        }

        @-webkit-keyframes crashedText {
            10% {
                -webkit-transform: skewX(-9deg);
                opacity: 1;
            }
            10.1% {
                -webkit-transform: skewX(0deg);
                opacity: 1;
            }
            50% {
                opacity: 1;
            }
            50.001% {
                opacity: .8;
            }
            52.999% {
                opacity: .1;
            }
            53% {
                -webkit-transform: skewX(4deg);
                opacity: 1;
            }
            53.1% {
                -webkit-transform: skewX(2deg);
                opacity: 1;
            }
            90% {
                -webkit-transform: skewX(5deg);
                opacity: .8;
            }
            90.2% {
                -webkit-transform: skewX(3deg);
                opacity: 1;
            }
        }

        @-o-keyframes crashedText {
            10% {
                -o-transform: skewX(-9deg);
                opacity: 1;
            }
            10.1% {
                -o-transform: skewX(0deg);
                opacity: 1;
            }
            50% {
                opacity: 1;
            }
            50.001% {
                opacity: .8;
            }
            52.999% {
                opacity: .1;
            }
            53% {
                -o-transform: skewX(4deg);
                opacity: 1;
            }
            53.1% {
                -o-transform: skewX(2deg);
                opacity: 1;
            }
            90% {
                -o-transform: skewX(5deg);
                opacity: .8;
            }
            90.2% {
                -o-transform: skewX(3deg);
                opacity: 1;
            }
        }

        @keyframes crashedText {
            10% {
                transform: skewX(-9deg);
                opacity: 1;
            }
            10.1% {
                transform: skewX(0deg);
                opacity: 1;
            }
            50% {
                opacity: 1;
            }
            50.001% {
                opacity: .8;
            }
            52.999% {
                opacity: .1;
            }
            53% {
                transform: skewX(4deg);
                opacity: 1;
            }
            53.1% {
                transform: skewX(2deg);
                opacity: 1;
            }
            90% {
                transform: skewX(5deg);
                opacity: .8;
            }
            90.2% {
                transform: skewX(3deg);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="overlay">
            <a href='{{ url('') }}'>
                <div class='offset-wrapper'>
                    <button class="offset">{{ trans('errors.home') }}</button>
                </div>
            </a>
            <div id='glitch-container'>
                <h1 class="glitch" data-text="405">405</h1>
                @isset($message)
                    <h3>{{ $message }}</h3>
                @elseif(isset($exception) && $exception->getMessage())
                    <h3>{{ $exception->getMessage() }}</h3>
                @else
                    <h3>{{ trans('errors.default_message.405') }}</h3>
                @endisset
            </div>
        </div>
    </div>
</body>
</html>
