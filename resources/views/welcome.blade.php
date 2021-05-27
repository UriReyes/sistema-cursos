<x-app-layout>
    <section class="bg-cover" style="background-image: url({{ asset('img/home/home2.jpg') }})">
        <div class="w-full h-full bg-black bg-opacity-30">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8 py-36">
                    <h1 class="text-4xl font-bold text-white">Domina la tecnología web con Coders Free</h1>
                    <p class="mt-2 mb-4 text-lg text-white">En Coders Free encontrarás cursos, manuales y artículos que
                        te
                        ayudarán a convertirte en un profesional del desarrollador web</p>
                    <!-- component -->
                    <!-- This is an example component -->
                    <div class="relative pt-2 mx-auto text-gray-600">
                        <input
                            class="w-full h-10 px-5 pr-16 text-sm bg-white border-2 border-gray-300 rounded-lg focus:outline-none"
                            type="search" name="search" placeholder="Buscar">
                        <!-- component -->
                        <button type="submit"
                            class="absolute top-0 right-0 px-4 py-2 mt-2 font-bold text-white bg-blue-700 rounded hover:bg-blue-dark">
                            Buscar
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mt-24">
        <h1 class="mb-6 text-3xl text-center text-gray-600 uppercase">Contenido</h1>
        <div
            class="grid grid-cols-1 px-4 mx-auto gap-x-6 gap-y-8 max-w-7xl sm:px-6 lg:px-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            <article>
                <figure>
                    <img class="object-cover w-full rounded-xl h-36"
                        src="https://source.unsplash.com/random/1280x720?sig=1" alt="image">
                    <header class="mt-2">
                        <h1 class="text-xl text-center text-gray-700">Cursos y Proyectos</h1>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui,
                            ipsum?</p>
                    </header>
                </figure>
            </article>
            <article>
                <figure>
                    <img class="object-cover w-full rounded-xl h-36"
                        src="https://source.unsplash.com/random/1280x720?sig=2" alt="image">
                    <header class="mt-2">
                        <h1 class="text-xl text-center text-gray-700">Manual de Laravel</h1>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui,
                            ipsum?</p>
                    </header>
                </figure>
            </article>
            <article>
                <figure>
                    <img class="object-cover w-full rounded-xl h-36"
                        src="https://source.unsplash.com/random/1280x720?sig=3" alt="image">
                    <header class="mt-2">
                        <h1 class="text-xl text-center text-gray-700">Blog</h1>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui,
                            ipsum?</p>
                    </header>
                </figure>
            </article>
            <article>
                <figure>
                    <img class="object-cover w-full rounded-xl h-36"
                        src="https://source.unsplash.com/random/1280x720?sig=4" alt="image">
                    <header class="mt-2">
                        <h1 class="text-xl text-center text-gray-700">Desarrollo Web</h1>
                        <p class="text-sm text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui,
                            ipsum?</p>
                    </header>
                </figure>
            </article>
        </div>
    </section>
</x-app-layout>
