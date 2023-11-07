<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salvador Lax Herrera</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-gray-200 lg:w-2/4 mx-auto my-2.5">
    <nav class="sticky top-0">
        <ol class="flex justify-evenly text-xl">
            <li>
                <a href="{{ route('info') }}">
                    Info
                </a>
            </li>

            <li>
                <a href="{{ route('jobs') }}">
                    Jobs
                </a>
            </li>
        </ol>
    </nav>

    <section class="flex flex-col justify-center items-center my-10 mx-5">
        {{ $slot }}
    </section>

    @if (!Route::is('contact'))
        <section class="fixed bottom-0 right-0 m-4 lg:mx-0 lg:mb-2 lg:w-1/4">
            <a href="{{ route('contact') }}">
                <i title="Mail" class="ri-mail-fill text-4xl"></i>
            </a>
        </section>
    @endif

    <footer>
        <section class="flex justify-center text-5xl">
            <a href="https://www.linkedin.com/in/salvador-lax-herrera-b65831213/" target="_blank">
                <i title="Linkedin" class="ri-linkedin-box-fill"></i>
            </a>

            <a href="https://github.com/salvador-lax" target="_blank">
                <i title="GitHub" class="ri-github-fill"></i>
            </a>
        </section>
    </footer>
</body>

</html>
