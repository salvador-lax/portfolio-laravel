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

<body class="bg-black text-gray-200">
    <header class="fixed top-0 z-10 w-full mt-2">
        <nav class="w-fit mx-auto">
            <ol class="flex justify-center gap-8 text-xl font-bold">
                <li>
                    <a href="/#jobs">
                        Trabajos
                    </a>
                </li>

                <li>
                    <a href="/#about">
                        Proyectos
                    </a>
                </li>

                <li>
                    <a href="/#contact">
                        Contacto
                    </a>
                </li>
            </ol>
        </nav>
    </header>

    <main class="lg:w-2/4 mx-auto">
        <section class="flex flex-col justify-center mt-32 mb-16 mx-5 max-w-xl">
            <div class="flex items-center gap-4 mb-4">
                <img src="{{ asset('img/profile-pic.webp') }}" alt="Foto de Perfil" class="rounded-full size-16">
                <p>
                    Abierto a ofertas
                </p>
            </div>

            <h1 class="text-4xl text-bold mb-4">Hola, soy Salvador Lax</h1>

            <p class="text-xl">
                Mas de 1 año de experiencia. Desarrollador Full-Stack en Cádiz, España. Especializado en desarrollo
                Back-End en aplicaciones de gestion de contenido.
            </p>
        </section>

        <section id="jobs" class="flex flex-col justify-center mt-20 mx-5 scroll-m-20">
            <h2 class="text-3xl mb-3">
                Experiencia Laboral
            </h2>

            @foreach ($jobs as $company => ['puesto' => $puesto, 'duracion' => $duracion, 'apuntes' => $apuntes])
                <article class="flex flex-col lg:flex-row mb-6">
                    <div class="lg:w-1/3">
                        <h3>
                            {{ $puesto }}
                        </h3>
                        <h4>
                            {{ $company }}
                        </h4>
                        <p>
                            {{ $duracion }}
                        </p>
                    </div>

                    <div class="lg:w-2/3 mt-2 lg:mt-0">
                        @foreach ($apuntes as $apunte)
                            <p>
                                {{ $apunte }}
                            </p>
                        @endforeach
                    </div>
                </article>
            @endforeach
        </section>

        <section id="about" class="flex flex-col justify-center items-center mt-20 mx-5 scroll-m-20">
            <p>
                Etiam id lobortis urna. Integer fringilla ipsum et elit mattis auctor. Fusce convallis elementum sapien
                quis
                ullamcorper. In vehicula nibh mollis fringilla pellentesque. Integer in tincidunt diam, eu tempus augue.
                Praesent faucibus, mauris vel congue pellentesque, justo odio ultrices ante, et mattis mauris tellus ut
                risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer vitae lectus vehicula, ultricies
                odio vitae, vehicula magna. Donec rhoncus nunc ac sapien rhoncus, nec dapibus erat scelerisque. Maecenas
                ut
                risus lobortis, fringilla sem eget, tincidunt purus. Maecenas malesuada quis ex nec facilisis. Proin
                egestas
                scelerisque magna.

                Etiam luctus arcu libero. Maecenas dapibus, leo tincidunt mollis ornare, augue mauris aliquet ante, at
                vestibulum nibh felis sagittis nulla. Mauris eget sapien varius, convallis purus ut, venenatis neque.
                Sed
                erat mi, efficitur sit amet mauris a, aliquet auctor felis. Sed vitae consectetur mi. Class aptent
                taciti
                sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla egestas risus a velit
                viverra,
                ut euismod sem sagittis. Vivamus imperdiet non lacus quis fringilla. Morbi viverra neque sit amet dictum
                egestas. Phasellus pellentesque quam at pulvinar luctus.

                Phasellus ultricies sem ac mi sollicitudin viverra. Fusce et placerat metus. Curabitur at turpis ac
                justo
                placerat interdum. Cras mattis fermentum ligula, non iaculis nulla. Ut elit neque, pellentesque sed leo
                ut,
                iaculis tincidunt justo. Sed urna quam, bibendum et rutrum ac, porta et odio. Sed lacinia auctor neque
                non
                interdum. Cras quis suscipit ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed elit
                magna,
                rhoncus quis malesuada ut, malesuada nec tortor. Praesent nec odio urna. Morbi id dui odio. Praesent
                efficitur eleifend lectus, nec egestas magna tincidunt vel. Donec ut elit id dui pellentesque pulvinar.
                Maecenas tincidunt, turpis a sodales malesuada, libero felis porttitor arcu, sit amet sollicitudin
                mauris
                odio non tellus.

                Suspendisse venenatis dictum odio et interdum. Nullam pulvinar, tortor sed iaculis porttitor, purus
                risus
                molestie sapien, commodo consequat nisl quam nec lacus. Pellentesque et mi velit. Donec justo sapien,
                lacinia id dictum at, elementum non lorem. Sed ac scelerisque sem. Quisque rutrum enim et facilisis
                vestibulum. Ut pharetra tellus eget gravida iaculis. Sed vel ante luctus, vestibulum odio sed, luctus
                nulla.
                Etiam vulputate nibh turpis. In tincidunt sed velit pulvinar varius.

                Aenean scelerisque nisi odio, quis faucibus lorem viverra id. Fusce condimentum ante nec est fermentum,
                nec
                elementum quam varius. Vestibulum quis libero ornare, pulvinar metus ac, dictum dolor. Morbi rhoncus
                nibh
                eros, et laoreet lorem tempor vel. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla
                malesuada
                ullamcorper bibendum. Fusce molestie porttitor risus, nec convallis mauris lacinia eget. Praesent
                commodo
                lorem vel euismod luctus. Integer vulputate est ac dui suscipit tempor. Praesent fringilla ligula a
                pharetra
                iaculis. Vestibulum gravida mattis neque sit amet dignissim. Nunc blandit velit quis ultricies
                elementum.
                Maecenas eu est porttitor, condimentum ex a, venenatis ipsum. Morbi at massa purus. Duis at ipsum eu
                magna
                tincidunt mollis et in arcu.

                Pellentesque bibendum cursus urna, a accumsan magna pretium at. Curabitur quis gravida diam.
                Pellentesque
                habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Morbi consequat
                tincidunt
                bibendum. Sed non ante nec leo congue pretium a id velit. Ut pellentesque leo a sem imperdiet tincidunt.
                Fusce tellus dui, interdum in metus id, egestas egestas nisi. Sed tincidunt odio ut metus dignissim, et
                ultricies lacus aliquam. Suspendisse vestibulum justo quis molestie sodales. Morbi elit arcu,
                scelerisque a
                vulputate nec, tincidunt vitae nunc. Proin luctus quam est, sed dapibus ipsum sodales ac. Donec vel
                elementum quam. Phasellus interdum pulvinar orci et facilisis. Aenean vehicula diam quis ligula
                accumsan,
                sed aliquet dui gravida. In ac augue augue. Aliquam ac tempor erat, sed hendrerit augue.

                Integer sit amet placerat elit. In pellentesque fringilla tellus aliquet ornare. Curabitur lacus arcu,
                pretium a felis non, porta ultricies elit. Integer euismod turpis non scelerisque euismod. Aenean vitae
                massa sodales, vulputate orci eu, tempor nibh. Cras finibus augue a commodo mattis. Sed malesuada eros
                justo, sit amet hendrerit eros feugiat ac. Vivamus mauris dui, suscipit id rhoncus id, suscipit eu orci.
                Mauris ac tincidunt purus. Donec varius sem dui, sit amet efficitur nulla fermentum non. Etiam et sem
                mattis, semper enim id, ullamcorper enim. Cras non gravida velit, vel congue sapien. Nam ex nisl,
                tincidunt
                at augue eu, tincidunt commodo sem. Duis ex mauris, imperdiet id molestie non, tristique fringilla nisl.
                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Phasellus et
                eleifend tellus.

                Aliquam erat volutpat. Morbi elementum scelerisque metus, at aliquam orci maximus sed. Nullam libero
                felis,
                fermentum quis auctor ac, consequat sed erat. Morbi ultrices libero sed euismod tristique. Nulla
                facilisi.
                Mauris tincidunt gravida quam sed aliquam. Sed ultricies convallis nisl, nec viverra purus gravida vel.
                Proin a neque sapien. Donec eleifend ullamcorper leo sit amet euismod. Nullam pellentesque metus dictum
                tellus commodo commodo. Praesent non libero at elit vulputate feugiat. Donec id quam vitae felis
                imperdiet
                pharetra. Nullam sollicitudin fringilla sodales. Nulla vitae fringilla urna. Suspendisse sit amet nibh
                porttitor, laoreet metus sed, ullamcorper tellus.

                Proin nec gravida leo, a blandit orci. Vivamus tincidunt diam ut ligula feugiat scelerisque. Phasellus
                tempor, nibh a congue laoreet, nulla leo aliquam sapien, a interdum nibh urna eu lacus. Aliquam sit amet
                rhoncus nunc. Suspendisse imperdiet scelerisque arcu, vel sollicitudin quam facilisis a. Duis vestibulum
                massa a quam ultrices iaculis. Pellentesque tempus leo sed nisl placerat, quis mattis urna tempor.

                Cras blandit dui eu ipsum volutpat auctor. Nullam bibendum dolor bibendum nisi aliquam, eu pretium magna
                interdum. Integer fringilla scelerisque facilisis. Maecenas id nulla ipsum. Aliquam ultrices lectus
                nibh,
                sed vehicula orci gravida non. Fusce faucibus lorem mi, quis porttitor urna euismod vel. Duis in quam
                mauris. Cras sed erat dignissim felis faucibus commodo. Fusce iaculis elit sed odio finibus, vel
                malesuada
                libero faucibus. In hac habitasse platea dictumst.
            </p>
        </section>

        <section id="contact" class="flex flex-col justify-center items-center mt-20 mx-5 scroll-m-20">
            <h2 class="text-3xl mb-8">
                Contactame
            </h2>

            <form method="POST" action="{{ route('contactRequest') }}"
                class="flex flex-col gap-4 w-full max-w-xs child:grid">
                @csrf

                @if (Session::has('sent'))
                    <p class="mb-4 font-bold text-lg">Tu solicitud de contacto ha sido enviada</p>
                @endif

                <label>
                    Email:
                    @error('email')
                        <span class="alert alert-danger">El email no es valido</span>
                    @enderror
                    <input name="email" type="email" value="{{ old('email') }}" class="rounded-sm text-black p-3">
                </label>

                <label>
                    Telefono:
                    @error('phone')
                        <span class="alert alert-danger">El telefono no es valido</span>
                    @enderror
                    <input name="phone" type="tel" value="{{ old('phone') }}" class="rounded-sm text-black p-3">
                </label>

                <label>
                    Mensaje (opcional):
                    @error('message')
                        <span class="alert alert-danger">
                            El contenido de su mensaje no debe superar los 1000 caracteres
                        </span>
                    @enderror
                    <textarea name="message" maxlength="1000" class="rounded-sm text-black p-3">{{ old('message') }}</textarea>
                </label>

                <button type="submit"
                    class="bg-white hover:bg-slate-100 text-black px-5 py-2 mx-auto rounded font-bold">
                    Enviar
                </button>
            </form>
        </section>
    </main>

    <footer class="mt-20 mb-4">
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
