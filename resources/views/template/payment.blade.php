<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Efico - Registration</title>
    <link rel="stylesheet" href="{{ asset('template/assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/form.css') }}">
</head>
<body>
    <div class="top__bg flex col">
        <header class="flex row">
            <div class="logo flex col">
                <img src="{{ asset('template/assets/img/efico_logo.svg') }}" alt="">
                <p>your education will make sense</p>
            </div>
            <nav id="nav" class="flex row">
                 <div id="nav-icon">
                            <div></div>
                            <div></div>
                            <div></div>
                </div>
                <ul class="flex row">
                    <li>
                        <a href="/">home</a>
                    </li>
                    <li>
                        <a href="/about">about</a>
                    </li>
                    <li>
                        <a href="/contact">contact us</a>
                    </li>
                    <li>
                        <a href="/services">services</a>
                    </li>
                    <li>
                        <a href="/news">news</a>
                    </li>
                    <li>
                        <a href="/faqs">faqs</a>
                    </li>
                </ul>
            </nav>
        </header>
        <main class="flex row">
            <div class="form-layout flex row">
                <div class="left flex col">
                <div class="content flex col">
                    <h1>
                        Lorem Ipsum
                    </h1>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut magni illo voluptas optio odio nulla deleniti cumque laboriosam neque. Quidem iure dicta ut eos praesentium eum corporis eligendi itaque placeat!
                    </p>
                </div>
                </div>
                <form action="/training/register" class="right" method="POST">
                    @csrf
                    <fieldset>
                        <div class="fields-container flex col">
                                <legend>Register</legend>
                            <div class="field flex col">
                                <label for="full_name">Full name</label>
                                <input type="text" name="full_name" id="full_name" required>     
                            </div>
                            <div class="field flex col">
                                    <label for="email">Email address</label>
                                    <input type="email" name="email" id="full_name" required>     
                             </div>
                             <div class="field flex col">
                                    <label for="training">Training</label>
                                    <select name="training" id="training">
                                        <option value=""></option>
                                        @foreach($trainings as $training)
                                            <option value="{{ $training->id }}">{{ $training->name }}</option>
                                        @endforeach
                                    </select>     
                             </div>
                             <button type="submit">Register</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </main>
    </div>
    <footer class="flex row">
        <ul>
            <h1>quick links</h1>
            <li>about us</li>
            <li>newsletter
            <li>
        </ul>
        <ul>
            <h1>services</h1>
            <li>Career talks</li>
            <li>internship</li>
            <li>scholarship</li>
        </ul>
        <ul class="flex col follow">
            <h1>follow us</h1>
            <div class="flex row">
                <li>
                    <a href="twitter-link"><img src="{{ asset('template/assets/img/twitter.svg') }}" alt=""></a>
                </li>
                <li>
                    <a href="twitter-link"><img src="{{ asset('template/assets/img/ig.svg') }}" alt=""></a>
                </li>
                <li>
                    <a href="twitter-link"><img src="{{ asset('template/assets/img/fb.svg') }}" alt=""></a>
                </li>
                <li>
                    <a href="twitter-link"><img src="{{ asset('template/assets/img/youtube.svg') }}" alt=""></a>
                </li>
                <li>
                    <a href="twitter-link"><img src="{{ asset('template/assets/img/linkedin.svg') }}" alt=""></a>
                </li>
            </div>
        </ul>
    </footer>
    <script src="{{ asset('template/assets/js/index.js') }}"></script>
</body>
</html>