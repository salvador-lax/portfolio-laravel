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

        <section id="jobs" class="flex flex-col justify-center items-center mt-20 mx-5 scroll-m-20">
            <p>rem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus accumsan est vel turpis facilisis, in
                lacinia
                augue aliquam. Sed aliquet convallis ante, quis sodales libero mollis eu. Cras aliquam tellus in sem
                porttitor, eget consequat dolor laoreet. Nunc interdum blandit pharetra. Duis id sapien nec eros commodo
                dignissim. Nunc iaculis suscipit tellus, ut sodales eros rutrum id. Vestibulum interdum nisl id quam
                porta,
                a varius odio blandit. Curabitur ultricies sagittis sem nec varius. Vivamus eleifend elit ante, quis
                feugiat
                ex ultricies a. Etiam vel auctor libero. Nunc ac viverra elit, vulputate semper tellus. Aliquam et
                feugiat
                elit, vel scelerisque nulla. Nunc at tincidunt elit, et facilisis mi. Maecenas id leo sagittis, pretium
                urna
                ut, fringilla ex. Curabitur nec gravida eros, sed pretium tortor.

                Morbi elementum pharetra leo quis gravida. Pellentesque et purus sed justo hendrerit maximus nec in
                massa.
                Vivamus sollicitudin sit amet neque et consequat. Duis id aliquam ante. Nunc vitae justo mi. Class
                aptent
                taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis nec metus eu ante
                ullamcorper auctor in ac quam. Praesent sodales purus ac tincidunt ultrices. Donec id diam nec ex
                interdum
                tincidunt. Phasellus elementum convallis vehicula. Aliquam eu neque arcu. Donec a sollicitudin massa, at
                posuere turpis.

                In vulputate ex et sollicitudin fringilla. Nulla facilisi. Etiam ut massa et dolor tincidunt hendrerit
                vehicula in tellus. Nunc bibendum est accumsan, efficitur felis sed, congue arcu. Donec aliquet, nunc eu
                facilisis euismod, eros risus varius sapien, ut interdum mauris nisi non orci. Nam et dui ac nisi
                ultricies
                placerat sodales eu felis. Curabitur interdum arcu ipsum, vel pretium diam cursus congue. Aenean quis
                lacus
                eu felis mattis commodo eget quis tellus.

                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc est
                magna,
                vulputate quis diam vitae, condimentum porttitor odio. Curabitur vel urna vitae massa molestie mattis.
                Vivamus pretium risus enim, et maximus tortor luctus rutrum. Interdum et malesuada fames ac ante ipsum
                primis in faucibus. Mauris nec massa pulvinar, porta turpis eget, aliquet sem. Fusce et tortor id ligula
                lacinia placerat. Nullam vitae dapibus metus. Donec egestas eu diam a sollicitudin. Fusce placerat risus
                vel
                orci suscipit, ac posuere ex condimentum. Maecenas varius et velit ut hendrerit. Etiam et arcu
                malesuada,
                consequat dolor nec, sollicitudin massa. Quisque ac odio at odio posuere rutrum eu in turpis.

                Mauris et risus a ligula consectetur dignissim. Proin congue a massa vitae luctus. Duis ullamcorper
                pretium
                ex, rhoncus vulputate tortor. Nunc dignissim ultricies dolor at varius. Duis laoreet est sit amet massa
                efficitur, id maximus justo feugiat. Ut vitae venenatis tortor, vitae efficitur mauris. Praesent tempor
                lacus blandit malesuada viverra. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices
                posuere
                cubilia curae; Aenean imperdiet nulla in tristique facilisis. Morbi tempus ligula felis, in faucibus
                nunc
                pharetra eu. Duis vitae vehicula augue. Donec dignissim mi commodo, iaculis lectus at, venenatis tortor.
                Quisque porta mauris ac diam sagittis, quis hendrerit turpis maximus.

                Pellentesque scelerisque sapien nec augue tempus, a auctor risus euismod. Nulla ac massa elementum nulla
                vulputate facilisis non eu ex. Sed ac ornare erat. Aliquam ut dolor at nibh efficitur volutpat. Praesent
                dignissim fringilla aliquet. Proin rhoncus condimentum purus in congue. Suspendisse ultricies ligula
                velit,
                et imperdiet elit hendrerit ac. Aenean ut fermentum velit, et interdum magna. Morbi in porttitor ante.
                Suspendisse lobortis odio sed tempus porttitor. Vestibulum ante ipsum primis in faucibus orci luctus et
                ultrices posuere cubilia curae; Maecenas at felis eu quam porta ultrices vitae tincidunt ante. Nam nulla
                quam, convallis nec lacinia in, tempor eu risus. Vestibulum ante ipsum primis in faucibus orci luctus et
                ultrices posuere cubilia curae; Phasellus quis fringilla augue. Vivamus ut imperdiet nisi.

                Duis est ipsum, consectetur in ullamcorper vel, feugiat ac leo. Proin nunc ante, tempor sed risus sit
                amet,
                imperdiet egestas augue. Pellentesque placerat vel mi at sagittis. Cras at lacus scelerisque, sagittis
                magna
                sit amet, varius tellus. Vestibulum ut ante iaculis, hendrerit neque eu, imperdiet elit. Maecenas
                interdum
                massa vel nisl commodo tristique id quis nisl. Sed malesuada viverra mi sed vehicula.

                Fusce cursus vel sapien sit amet tempor. Donec arcu arcu, porttitor vel dictum congue, tempus eu metus.
                In
                id mattis ante. Cras sed magna euismod, convallis urna nec, accumsan felis. Donec et iaculis neque.
                Interdum
                et malesuada fames ac ante ipsum primis in faucibus. Proin ultricies venenatis ipsum, sed tempus enim
                sodales ut. In arcu velit, maximus sed volutpat id, pharetra ac quam. Quisque dictum ultricies massa in
                consectetur. Donec non vehicula purus. Vestibulum arcu dolor, interdum ut elit sit amet, placerat
                convallis
                nunc. Cras quis ullamcorper mi, ut rutrum sem.

                Aliquam aliquam euismod leo, vel iaculis enim pellentesque vel. Sed interdum lectus a velit placerat
                scelerisque. Nullam pellentesque, sem sit amet gravida varius, nisl velit aliquam velit, vitae congue
                lectus
                sapien non odio. Nam maximus posuere enim at luctus. Vestibulum bibendum, mauris ut commodo scelerisque,
                eros urna placerat magna, sit amet commodo odio eros in diam. Proin nec elit maximus, semper sapien a,
                molestie nibh. Pellentesque et orci faucibus turpis ultrices eleifend nec in metus. Nullam a velit vitae
                mauris suscipit efficitur.

                Aenean posuere varius nisl, ut fermentum est sollicitudin vel. Proin ac tortor non nisi varius vulputate
                in
                id risus. Morbi vitae ipsum et lectus lacinia lobortis. Curabitur sed congue lorem, vel facilisis ante.
                Sed
                viverra eleifend justo sed pellentesque. Aliquam erat volutpat. Mauris aliquam scelerisque ipsum, nec
                interdum leo vehicula eu. Vivamus lobortis elementum libero. Quisque facilisis quam id erat luctus
                blandit.
                Aliquam accumsan, justo sit amet dapibus vestibulum, lacus urna volutpat mauris, sit amet ornare purus
                tortor sit amet enim.</p>
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

            <form method="POST" action="{{ route('contactRequest') }}" class="flex flex-col gap-4 child:grid">
                @csrf

                @if (Session::has('sent'))
                    <p class="mb-4 font-bold text-lg">Tu solicitud de contacto ha sido enviada</p>
                @endif

                <label>
                    Email:
                    @error('email')
                        <span class="alert alert-danger">El email no es valido</span>
                    @enderror
                    <input name="email" type="email" value="{{ old('email') }}" class="rounded-sm text-black">
                </label>

                <label>
                    Telefono:
                    @error('phone')
                        <span class="alert alert-danger">El telefono no es valido</span>
                    @enderror
                    <input name="phone" type="tel" value="{{ old('phone') }}" class="rounded-sm text-black">
                </label>

                <label>
                    Mensaje (opcional):
                    @error('message')
                        <span class="alert alert-danger">El contenido de su mensaje no debe superar los 1000 caracteres</span>
                    @enderror
                    <textarea name="message" maxlength="1000" class="rounded-sm text-black">{{ old('message') }}</textarea>
                </label>

                <button type="submit"
                    class="bg-white hover:bg-slate-100 text-black w-fit p-1 mx-auto rounded font-bold">
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
