<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>VAV Customs | Home</title>

        <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        {{-- <div class="bg-gray-50 dark:bg-black dark:text-white/50"> --}}
            <livewire:welcome.navigation />
            <!-- HERO -->
            <section class="w-full bg-center bg-cover bg-fixed" style="background-image: url({{ asset('images/hero-bg.png') }});">
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
            <!-- OUR WORK -->
            <section class="pt-28 px-10 max-w-screen-2xl mx-auto z-0">
                <h2 class="text-center text-4xl text-zinc-800 font-bold">Custom Work</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-10">
                <div class="relative">
                    <img class="h-full" src="{{ asset('images/grid-images/table1.jpg') }}" />
                    <h3 class="text-zinc-100 text-xl font-semibold bg-zinc-800 px-4 py-2 absolute bottom-0 left-0">Furniture</h3>
                </div>
                <div class="relative">
                    <img class="h-full" src="{{ asset('images/grid-images/cutting1.jpg') }}" />
                    <h3 class="text-zinc-100 text-xl font-semibold bg-zinc-800 px-4 py-2 absolute bottom-0 left-0">CNC Projects</h3>
                </div>
                <div class="relative">
                    <img class="h-full" src="{{ asset('images/grid-images/vanity1.jpg') }}" />
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
                    <a class="inline-block text-lg font-semibold mt-6 px-10 py-3 border-2 border-zinc-800 hover:bg-zinc-800 hover:text-zinc-100 rounded-sm transition-all duration-200" href="the-shop.html">Read More</a>
                </div>
                </div>
            </section>
            <!-- WHAT WE PROVIDE/THE SHOP -->
            <section class="py-28 mt-28 px-10 mx-auto bg-fixed" style="background-color: #f4f4f5; background-image: url('https://www.transparenttextures.com/patterns/retina-wood.png');">
                <div class="max-w-screen-2xl mx-auto">
                    <h2 class="text-center text-4xl text-zinc-800 font-bold">What We Provide</h2>
                    <div class="flex flex-wrap gap-6 justify-around mt-12">
                    <div class="flex flex-col text-center w-full md:w-1/2 lg:w-1/4">
                        <i class="las la-tools bg-zinc-800 flex flex-col items-center justify-center text-3xl w-16 h-16 rounded-full mx-auto text-[#c6ac8f]"></i>
                        <div class="mt-3">
                        <h3 class="text-2xl font-bold">One-of-a-Kind</h3>
                        <p class="text-xl leading-tight text-stone-700">Custom one-of-a-kind wood pieces. Select from one of our pre-made pieces, or message us to create your dream item.</p>
                        </div>
                    </div>
                    <div class="flex flex-col text-center w-full md:w-1/2 lg:w-1/4">
                        <i class="las la-sort-amount-up bg-zinc-800 flex flex-col items-center justify-center text-3xl w-16 h-16 rounded-full mx-auto text-[#c6ac8f]"></i>
                        <div class="mt-3">
                        <h3 class="text-2xl font-bold">High Quality</h3>
                        <p class="text-xl leading-tight text-stone-700">High quality products require high quality materials. We source only the best raw materials to create our products.</p>
                        </div>
                    </div>
                    <div class="flex flex-col text-center w-full md:w-1/2 lg:w-1/4">
                        <i class="las la-users-cog bg-zinc-800 flex flex-col items-center justify-center text-3xl w-16 h-16 rounded-full mx-auto text-[#c6ac8f]"></i>
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
                <div class="grid grid-cols-2 items-center">
                <div class="text-center">
                    <h2 class="text-2xl text-zinc-800 font-bold">Want to see what goes on behind the scenes?</h2>
                    <p class="text-xl">See the shop setup, what tools I use, and what I recommend to get started!</p>
                </div>
                <div class="justify-self-center">
                    <a class="text-xl font-semibold px-20 py-5 bg-[#c6ac8f] hover:bg-[#d1bda5] transition-all duration-200" href="the-shop.html">Check out The Shop!</a>
                </div>
                </div>
            </div>
            <!-- PROJECT GALLERY -->
            <div class="mt-28 py-28 px-8 bg-fixed" style="background-color: #f4f4f5;
            background-image: url('https://www.transparenttextures.com/patterns/retina-wood.png');">
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
                <div class="grid grid-cols-2 items-center">
                    <div class="text-center">
                        <h2 class="text-3xl text-zinc-800 font-bold">Have a custom project in mind?</h2>
                        <p class="text-xl">Let us know how we can help!</p>
                    </div>
                    <div class="justify-self-center">
                        <a class="text-xl font-semibold px-20 py-5 bg-[#c6ac8f] hover:bg-[#d1bda5] transition-all duration-200" href="custom-build.html">Custom Build</a>
                    </div>
                </div>
            </section>
            <!-- FOOTER -->
            <footer class="bg-zinc-800 text-zinc-100 text-center py-40">
                <h2 class="text-4xl font-bold">Let's make your dream item</h2>
                <div class="flex flex-wrap gap-6 justify-center mt-10">
                    <i class="lab la-facebook-f text-5xl"></i>
                    <i class="lab la-instagram text-5xl"></i>
                    <i class="las la-at text-5xl"></i>
                </div>
            </footer>
        {{-- </div> --}}
        <livewire:store.cart />
    </body>
</html>
