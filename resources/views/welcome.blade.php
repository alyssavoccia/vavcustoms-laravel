<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VAV Customs | Home</title>

        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <livewire:welcome.navigation />
        <!-- HERO -->
        <section class="w-full bg-center bg-cover md:bg-fixed" style="background-image: url({{ asset('images/hero-bg.png') }});">
            <div class="flex items-center justify-center w-full h-screen bg-zinc-900 bg-opacity-50">
                <div class="text-center">
                <div class="container px-4 mx-auto">
                    <div class="max-w-4xl mx-auto text-center">
                    <img src="{{ asset('images/VAV-Customs-Logo-Hero.png') }}" alt="VAV Customs Logo" />
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!-- CUSTOM WORK -->
        <section class="pt-28 px-10 max-w-screen-2xl mx-auto z-0">
            <h2 class="text-center text-4xl text-zinc-800 font-bold">Custom Work</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
            <div class="relative">
                <img class="w-full h-auto" src="{{ asset('images/grid-images/table1.jpg') }}" />
                <h3 class="text-zinc-100 text-xl font-semibold bg-zinc-800 px-4 py-2 absolute bottom-0 left-0">Furniture</h3>
            </div>
            <div class="relative">
                <img class="w-full h-auto" src="{{ asset('images/grid-images/cutting1.jpg') }}" />
                <h3 class="text-zinc-100 text-xl font-semibold bg-zinc-800 px-4 py-2 absolute bottom-0 left-0">CNC Projects</h3>
            </div>
            <div class="relative">
                <img class="w-full h-auto" src="{{ asset('images/grid-images/vanity1.jpg') }}" />
                <h3 class="text-zinc-100 text-xl font-semibold bg-zinc-800 px-4 py-2 absolute bottom-0 left-0">Cabinets/Vanities</h3>
            </div>
            </div>
        </section>
        <!-- ABOUT -->
        <section class="pt-28 px-10 max-w-screen-2xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 items-center">
                <div class="grid grid-cols-4 grid-rows-1 relative">
                    <img class="w-full col-[1/4] row-[1]" src="{{ asset('images/about-me.jpg') }}" alt="">
                    <img class="col-[3/-1] row-[1] w-full z-[1] pt-16" src="{{ asset('images/about-me2.jpg') }}" alt="">
                </div>
                <div>
                    <h2 class="text-4xl text-zinc-800 font-bold">Hey, I'm Vince</h2>
                    <p class="text-xl text-stone-700 leading-relaxed mt-3">Meet Vince, a skilled woodworker with over 20 years of experience in the trade. When not bringing his creative visions to life through woodworking, he can be found out on the boat, enjoying a peaceful day of fishing. With a passion for both the art of woodworking and the great outdoors, Vince brings a unique perspective to each of his projects.</p>
                    <a wire:navigate href="#" class="inline-block w-auto px-6 py-2 mt-4 font-medium text-zinc-800 text-md transition duration-300 border border-zinc-800 rounded lg:w-auto hover:text-white hover:bg-zinc-800 focus:outline-none focus:bg-zinc-800">Read More</a>
                    {{-- <a class="inline-block text-lg font-semibold mt-6 px-10 py-3 border-2 border-zinc-800 hover:bg-zinc-800 hover:text-zinc-100 rounded-sm transition-all duration-200" href="the-shop.html">Read More</a> --}}
                </div>
            </div>
        </section>
        <!-- WHAT WE PROVIDE/THE SHOP -->
        <section class="py-28 mt-28 px-10 mx-auto bg-fixed" style="background-color: #f4f4f5; background-image: url('https://www.transparenttextures.com/patterns/retina-wood.png');">
            <div class="max-w-screen-2xl mx-auto">
                <h2 class="text-center text-4xl text-zinc-800 font-bold">What We Provide</h2>
                <div class="flex flex-wrap gap-6 justify-around mt-12">
                    <div class="flex flex-col text-center w-full md:w-1/2 lg:w-1/4">
                        <svg class="bg-zinc-800 flex flex-col items-center justify-center p-3 size-16 rounded-full mx-auto text-stone-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                        </svg>                          
                        <div class="mt-3">
                            <h3 class="text-2xl font-bold">One-of-a-Kind</h3>
                            <p class="text-xl leading-tight text-stone-700">Custom one-of-a-kind wood pieces. Select from one of our pre-made pieces, or message us to create your dream item.</p>
                        </div>
                    </div>
                    <div class="flex flex-col text-center w-full md:w-1/2 lg:w-1/4">
                        <svg class="bg-zinc-800 flex flex-col items-center justify-center p-3 size-16 rounded-full mx-auto text-stone-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18 9 11.25l4.306 4.306a11.95 11.95 0 0 1 5.814-5.518l2.74-1.22m0 0-5.94-2.281m5.94 2.28-2.28 5.941" />
                        </svg>                          
                        <div class="mt-3">
                            <h3 class="text-2xl font-bold">High Quality</h3>
                            <p class="text-xl leading-tight text-stone-700">High quality products require high quality materials. We source only the best raw materials to create our products.</p>
                        </div>
                    </div>
                    <div class="flex flex-col text-center w-full md:w-1/2 lg:w-1/4">
                        <svg class="bg-zinc-800 flex flex-col items-center justify-center p-3 size-16 rounded-full mx-auto text-stone-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                        </svg>                          
                        <div class="mt-3">
                            <h3 class="text-2xl font-bold">Customer Service</h3>
                            <p class="text-xl leading-tight text-stone-700">Customer service you can count on. This is an investment and we want to ensure that you are getting your dream piece.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- THE SHOP -->
        <div class="pt-28 px-10 max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center">
                <div class="text-center">
                    <h2 class="text-2xl text-zinc-800 font-bold">Want to see what goes on behind the scenes?</h2>
                    <p class="text-xl">See the shop setup, what tools I use, and what I recommend to get started!</p>
                </div>
                <div class="justify-self-center">
                <a wire:navigate href="#" class="inline-block w-full px-10 py-3 mt-4 font-medium text-white text-lg transition duration-300 bg-stone-500 rounded lg:w-auto hover:bg-stone-600 focus:outline-none focus:bg-stone-600">Check out The Shop!</a>
                {{-- <a class="text-xl font-semibold px-20 py-5 bg-[#c6ac8f] hover:bg-[#d1bda5] transition-all duration-200" href="the-shop.html">Check out The Shop!</a> --}}
                </div>
            </div>
        </div>
        <!-- PROJECT GALLERY -->
        <div class="mt-28 py-28 px-8 bg-fixed" style="background-color: #f4f4f5; background-image: url('https://www.transparenttextures.com/patterns/retina-wood.png');">
            <h2 class="text-center text-4xl text-zinc-800 font-bold">Project Gallery</h2>
            <div class="mt-10 columns-1 md:columns-2 lg:columns-3 gap-8">
                <div class="relative">
                    <img class="w-full mb-8 aspect-video" src="{{ asset('images/grid-images/shelf2.jpg') }}" alt="Wood Shelf">
                    <p class="text-zinc-100 text-lg font-semibold bg-zinc-800 px-4 py-2 absolute bottom-0 left-0">Kitchen Shelf</p>
                </div>
                <div class="relative">
                    <img class="w-full mb-8 aspect-square" src="{{ asset('images/grid-images/vanity1.jpg') }}" alt="Bathroom Vanity">
                    <p class="text-zinc-100 text-lg font-semibold bg-zinc-800 px-4 py-2 absolute bottom-0 left-0">Bathroom Vanity</p>
                </div>
                <div class="relative">
                    <img class="w-full mb-8 aspect-video" src="{{ asset('images/grid-images/table1.jpg') }}" alt="Coffee Table">
                    <p class="text-zinc-100 text-lg font-semibold bg-zinc-800 px-4 py-2 absolute bottom-0 left-0">Coffee Table</p>
                </div>
                <div class="relative">
                    <img class="w-full mb-8 aspect-square" src="{{ asset('images/grid-images/mirror1.jpg') }}" alt="Bathroom Mirror">
                    <p class="text-zinc-100 text-lg font-semibold bg-zinc-800 px-4 py-2 absolute bottom-0 left-0">Bathroom Mirror</p>
                </div>
                <div class="relative">
                    <img class="w-full mb-8 aspect-video" src="{{ asset('images/grid-images/cutting1.jpg') }}" alt="Cutting Board">
                    <p class="text-zinc-100 text-lg font-semibold bg-zinc-800 px-4 py-2 absolute bottom-0 left-0">Cutting Board</p>
                </div>
                <div class="relative">
                    <img class="w-full mb-8 aspect-square" src="{{ asset('images/grid-images/bathroom1.jpg') }}" alt="Bathroom Mirror & Vanity">
                    <p class="text-zinc-100 text-lg font-semibold bg-zinc-800 px-4 py-2 absolute bottom-0 left-0">Bathroom Mirror & Vanity</p>
                </div>
                <div class="relative">
                    <img class="w-full mb-8 aspect-video" src="{{ asset('images/grid-images/step1.jpg') }}" alt="Step Stool">
                    <p class="text-zinc-100 text-lg font-semibold bg-zinc-800 px-4 py-2 absolute bottom-0 left-0">Step Stool</p>
                </div>
                <div class="relative">
                    <img class="w-full mb-8 aspect-square" src="{{ asset('images/grid-images/bathroom2.jpeg') }}" alt="Bathroom Towel Holder, Mirror, & Vanity">
                    <p class="text-zinc-100 text-lg font-semibold bg-zinc-800 px-4 py-2 absolute bottom-0 left-0">Bathroom Towel Holder, Mirror, & Vanity</p>
                </div>
                <div class="relative">
                    <img class="w-full mb-8 aspect-video" src="{{ asset('images/grid-images/shelf4.jpg') }}" alt="Close up of Shelf">
                    <p class="text-zinc-100 text-lg font-semibold bg-zinc-800 px-4 py-2 absolute bottom-0 left-0">Kitchen Shelf</p>
                </div>
            </div>
        </div>
        <!-- CUSTOM BUILD CTA -->
        <section class="py-28 px-10 max-w-5xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center">
                <div class="text-center">
                    <h2 class="text-3xl text-zinc-800 font-bold">Have a custom project in mind?</h2>
                    <p class="text-xl">Let us know how we can help!</p>
                </div>
                <div class="justify-self-center">
                    <a wire:navigate href="#" class="inline-block w-full px-10 py-3 mt-4 font-medium text-white text-lg transition duration-300 bg-stone-500 rounded lg:w-auto hover:bg-stone-600 focus:outline-none focus:bg-stone-600">Custom Build</a>
                    {{-- <a class="text-xl font-semibold px-20 py-5 bg-[#c6ac8f] hover:bg-[#d1bda5] transition-all duration-200" href="custom-build.html">Custom Build</a> --}}
                </div>
            </div>
        </section>
        <!-- FOOTER -->
        <footer class="bg-zinc-800 text-zinc-100 text-center py-40">
            <h2 class="text-4xl font-bold">Let's make your dream item</h2>
            <div class="flex flex-wrap gap-6 justify-center mt-10">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-instagram"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-at-sign"><circle cx="12" cy="12" r="4"/><path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-4 8"/></svg>
            </div>
        </footer>
        <livewire:store.cart />
    </body>
</html>