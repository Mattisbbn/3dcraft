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

            <section class="bg-white py-20">
                <h2 class="text-4xl font-bold text-center mb-10">Nos services d'impression 3D</h2>
                <div class="flex flex-col lg:flex-row align-center justify-center gap-6 w-9/12 m-auto">
                    <x-card class="lg:w-1/3  ">
                        <i class="fa-solid fa-cube text-blue-ribbon-600 text-3xl mb-3"></i>
                        <h3 class="text-2xl font-bold">Prototypage Rapide</h3>
                        <p class="text-gray-600 mt-2">Réalisez vos prototypes rapidement avec une précision professionnelle.</p>
                    </x-card>
                    <x-card class="lg:w-1/3">
                        <i class="fa-solid fa-wand-magic-sparkles text-blue-ribbon-600 text-3xl mb-3"></i>
                        <h3 class="text-2xl font-bold">Objets Personnalisés</h3>
                        <p class="text-gray-600 mt-2">Créez des objets uniques selon vos spécifications exactes.</p>
                    </x-card>
                    <x-card class="lg:w-1/3">
                        <i class="fa-solid fa-industry text-blue-ribbon-600 text-3xl mb-3"></i>
                        <h3 class="text-2xl font-bold">Production en série</h3>
                        <p class="text-gray-600 mt-2">Production de petites séries avec une qualité constante.</p>
                    </x-card>
                </div>
            </section>


            <section class="py-20">
                <h2 class="text-4xl font-bold text-center mb-10">Comment ça marche</h2>
                <ul class="flex flex-col lg:flex-row align-center justify-center gap-6 w-9/12 m-auto">
                    <li class="flex flex-col items-center">
                        <i class="fa-solid fa-upload text-white bg-blue-ribbon-600 rounded-full p-4 text-2xl mb-3"></i>
                        <h3 class="text-2xl font-bold text-center mb-2">1. Envoyez votre fichier</h3>
                        <p class="text-center text-gray-500 font-semibold">Uploadez votre modèle 3D au format STL, OBJ ou autres</p>
                    </li>
                    <li class="flex flex-col items-center">
                        <i class="fa-solid fa-calculator text-white bg-blue-ribbon-600 rounded-full p-4 text-2xl mb-3"></i>
                        <h3 class="text-2xl font-bold text-center mb-2">2. Recevez un devis</h3>
                        <p class="text-center text-gray-500 font-semibold">Obtenez instantanément un prix pour votre projet</p>
                    </li>
                    <li class="flex flex-col items-center">
                        <i class="fa-solid fa-industry text-white bg-blue-ribbon-600 rounded-full p-4 text-2xl mb-3"></i>
                        <h3 class="text-2xl font-bold text-center mb-2">3. Production</h3>
                        <p class="text-center text-gray-500 font-semibold">Nous imprimons votre modèle avec précision</p>
                    </li>
                    <li class="flex flex-col items-center">
                        <i class="fa-solid fa-truck text-white bg-blue-ribbon-600 rounded-full p-4 text-2xl mb-3"></i>
                        <h3 class="text-2xl font-bold text-center mb-2">4. Livraison</h3>
                        <p class="text-center text-gray-500 font-semibold">Réception de votre commande en toute sécurité</p>
                    </li>
                </ul>
            </section>


            <section class="bg-white py-20">
                <h2 class="text-4xl font-bold text-center mb-10">Nos réalisations</h2>
                <div class="flex flex-col lg:flex-row align-center justify-center gap-6 w-9/12 m-auto">
                    <div class="lg:w-1/3 bg-white shadow-md rounded-xl">
                        <img src="{{ asset('img/home-example-1.jpg') }}" alt="Prototypage Rapide" class="w-full h-64 object-cover rounded-t-xl">
                        <div class="p-4">
                            <h3 class="text-2xl font-bold">Prototypage Rapide</h3>
                            <p class="text-gray-600 mt-2">Réalisez vos prototypes rapidement avec une précision professionnelle.</p>
                        </div>
                    </div>
                    <div class="lg:w-1/3 bg-white shadow-md rounded-xl">
                        <img src="{{ asset('img/home-example-2.jpg') }}" alt="Objets Personnalisés" class="w-full h-64 object-cover rounded-t-xl">
                        <div class="p-4">
                            <h3 class="text-2xl font-bold">Objets Personnalisés</h3>
                            <p class="text-gray-600 mt-2">Créez des objets uniques selon vos spécifications exactes.</p>
                        </div>
                    </div>
                    <div class="lg:w-1/3 bg-white shadow-md rounded-xl">
                        <img src="{{ asset('img/home-example-3.jpg') }}" alt="Production en série" class="w-full h-64 object-cover rounded-t-xl">
                        <div class="p-4">
                            <h3 class="text-2xl font-bold">Production en série</h3>
                            <p class="text-gray-600 mt-2">Production de petites séries avec une qualité constante.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-blue-ribbon-50 py-20">
                <h2 class="text-4xl font-bold text-center mb-10">Demandez votre devis</h2>
                <form class="w-9/12 m-auto bg-white p-6 rounded-xl shadow-md" action="">
                    <label for="name">Nom complet</label>
                    <input type="text" placeholder="Nom" class="w-full p-4 border border-gray-300 rounded-md mb-4">
                    <label for="email">Email</label>
                    <input type="email" placeholder="Email" class="w-full p-4 border border-gray-300 rounded-md mb-4">
                    <label for="phone">Téléphone</label>
                    <input type="tel" placeholder="Téléphone" class="w-full p-4 border border-gray-300 rounded-md mb-4">
                    <label for="message">Message</label>
                    <textarea placeholder="Message" class="w-full p-4 border border-gray-300 rounded-md mb-4"></textarea>
                    <button type="submit" class="w-full p-4 bg-blue-ribbon-600 text-white rounded-md">Envoyer</button>

                </form>
            </section>












        </main>



    </x-guest-layout>
<x-footer/>
