<x-head/>
    <x-guest-layout>
        <x-header/>

        <main class="bg-blue-ribbon-50">
            <section class="h-[90vh] w-11/12 m-auto flex flex-col lg:flex-row items-center justify-center">
                <div class="flex flex-col w-11/12 lg:w-2/5 lg:me-10 mb-10 lg:mb-0  lg:mt-0">
                    <h1 class="text-4xl lg:text-5xl xl:text-6xl font-bold">Impression 3D Personnalisée Pour Vos Projets</h1>
                    <p class="mt-6 text-xl text-gray-500">Obtenez un devis instantané pour vos projets d'impression 3D. Service professionnel, rapide et sur mesure.</p>
                    <div class="flex mt-6">
                        <x-primary-link href="/" class="me-3">Demander un devis</x-primary-link>
                        <x-secondary-link href="/" class="p-4">Voir nos réalisations</x-secondary-link>
                    </div>

                </div>
                <div class="flex w-8/12 lg:w-2/5 lg:me-10 ">
                    <img class=" object-cover rounded-xl shadow-2xl " src="{{ asset('img/home-picture.jpg') }}" alt="3DCraft">
                </div>
            </section>
        </main>



    </x-guest-layout>
<x-footer/>