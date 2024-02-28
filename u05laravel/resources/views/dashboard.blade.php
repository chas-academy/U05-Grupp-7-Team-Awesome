<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="">
                <div class="">


                    <div class="flex items-center justify-center mt-8">
                        <div class="max-w-lg w-full bg-white p-8 rounded-md shadow-lg">
                            <h1 class="text-4xl font-bold text-black mb-4">Welcome to Film World</h1>

                            <p class="text-lg text-black">
                                Explore the captivating world of cinema, where storytelling transcends borders. Immerse yourself in the
                                enchanting films of Japan, known for their unique cultural perspectives and artistic brilliance. Or venture
                                into the dynamic world of American cinema, where Hollywood creates cinematic magic that captivates audiences
                                around the globe.
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center justify-center mt-8">
                        <div class="max-w-lg w-full bg-white p-8 rounded-md shadow-lg">
                            <h1 class="text-4xl font-bold text-black mb-4">As a registered user, you can do things like</h1>


                            <ul class="list-disc pl-6 mb-6">


                                <li class="mb-2">Rate movies and share your feedback</li>

                                <li class="mb-2">Discover and explore top-rated movies</li>

                                <li class="mb-2">Build your own list of favorite movies</li>



                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>