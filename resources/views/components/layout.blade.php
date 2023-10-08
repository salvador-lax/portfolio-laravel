<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Salvador Lax Herrera</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-black text-gray-200 w-2/4 mx-auto my-2.5">
    <nav>
        <ol class="flex justify-evenly">
            <li>
                <a href="{{ route('index') }}" >
                    Index
                </a>
            </li>

            <li>
                <a href="{{ route('about') }}">
                    About
                </a>
            </li>

            <li>
                <a href="{{ route('jobs') }}">
                    Jobs
                </a>
            </li>
        </ol>
    </nav>

    <section>
        {{ $slot }}
    </section>
</body>

</html>
