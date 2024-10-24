<x-layout>
    <!--- Section 1 --->
    <section>
        <div class="hero h-[100vh] lg:h-[570px]" style="background-image: url(img/ship.svg)">
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="g-0 hero-content m-0 flex-col justify-center p-0 lg:mt-[6px] lg:flex-row-reverse">
                <img class="hidden lg:block" src="img/beig.svg" />
                <div class="flex flex-col items-center justify-center space-x-5 text-center lg:h-[334px] lg:w-[900px]">
                    <h1 class="mb-5 p-2 text-5xl font-bold text-white"><span class="text-secondary">Track</span> Your
                        Parcel,
                        Anytime,
                        Anywhere</h1>
                    <button class="btn btn-accent h-[60px] w-[290px] text-[1.25rem] leading-[1.85rem]">Track
                        Your
                        Shipping Now</button>
                </div>
            </div>
        </div>
    </section>

    <!--- Section 2 --->
    <section>
        <div class="hero min-h-screen bg-base-200">
            <div class="hero-content m-10 flex flex-col items-center justify-between lg:flex-row-reverse">
                <div class="flex w-full justify-center lg:w-1/2 lg:justify-end">
                    <img src="img/img1.svg" class="max-w-full rounded-lg shadow-2xl" />
                </div>
                <!-- Text Content -->
                <div class="w-full text-center lg:w-1/2 lg:text-left">
                    <h1 class="text-4xl font-bold text-secondary">
                        Real-Time <span class="font-semibold text-base-content">Tracking for Ultimate Peace of
                            Mind</span>
                    </h1>
                    <p class="py-6 text-justify text-custom">
                        Imagine the ability to track your most valuable shipments—no guesswork, no waiting. Our advanced
                        technology provides live updates for ultimate peace of mind. Whether it’s a premium product or
                        an
                        important document, we've got you covered. With <span class="font-semibold text-yellow-500">BEIG
                            Logistics</span>, you’ll always know where your package is, whether it's across the city or
                        halfway around the world.
                    </p>
                    <div class="flex justify-center">
                        <button class="btn btn-accent h-[60px] w-[290px] px-0 text-[1.25rem] leading-[1.85rem]">
                            Track Your Shipping Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--- Section 3 --->
    <section>
        <div class="bg-white py-12 text-center">
            <h2 class="text-4xl font-bold text-gray-800">
                Why Choose <span class="text-yellow-500">BEIG Logistics</span>
            </h2>

            <div class="m-[100px] mt-8 grid grid-cols-1 gap-8 md:grid-cols-3">
                <!-- Global Coverage -->
                <div class="flex items-center space-x-4">
                    <img src="img/globe-home.svg" alt="Global Coverage" class="h-16" />
                    <div class="text-left">
                        <h3 class="text-xl font-bold text-gray-800">Global Coverage</h3>
                        <p class="mt-2 text-gray-600">
                            No matter how remote, we track your parcel <span class="text-yellow-500">anywhere</span>,
                            anytime.
                        </p>
                    </div>
                </div>

                <!-- Real-Time Updates -->
                <div class="flex items-center space-x-4">
                    <img src="img/realtime-home.svg" alt="Real-Time Updates" class="h-16" />
                    <div class="text-left">
                        <h3 class="text-xl font-bold text-gray-800">Real-Time Updates</h3>
                        <p class="mt-2 text-gray-600">
                            Stay <span class="text-yellow-500">updated</span> on where your parcel is from the moment it
                            is
                            picked up until it reaches your doorstep.
                        </p>
                    </div>
                </div>

                <!-- Seamless User Experience. -->
                <div class="flex items-center space-x-4">
                    <img src="img/star-home.svg" alt="Seamless User Experience" class="h-16" />
                    <div class="text-left">
                        <h3 class="text-xl font-bold text-gray-800">Seamless User Experience</h3>
                        <p class="mt-2 text-gray-600">
                            Our <span class="text-yellow-500">user-friendly</span> interface makes tracking your package
                            easier.
                        </p>
                    </div>
                </div>
            </div>

            <p class="mt-8 text-xl text-gray-600">
                Let <span class="text-yellow-500">BEIG Logistics</span> handle your most valuable shipment.
            </p>
        </div>
    </section>
    <!--- Section 4 --->

    <section>
        <div class="hero min-h-screen bg-base-200">
            <div class="hero-content flex flex-col items-center lg:flex-row lg:items-center lg:justify-between">
                <div class="flex w-full justify-center lg:w-1/2 lg:max-w-sm">
                    <img src="img/delivery-home.svg" class="w-3/4 lg:w-full" alt="Delivery truck icon" />
                </div>
                <div class="w-full lg:w-1/2">
                    <!-- Title -->
                    <h2 class="mb-4 text-3xl font-bold">Secure, Fast, and Reliable Delivery</h2>

                    <!-- Paragraph -->
                    <p class="py-6 text-custom text-gray-700">
                        We understand that when you're shipping valuable items, every detail matters.
                        That's why our <span class="font-semibold text-yellow-500">secure</span> and
                        <span class="font-semibold text-yellow-500">reliable</span> delivery ensures
                        your parcel gets where it needs to go, on time, every time. No more worrying about
                        the unknown. With us, your package is not just moving—it's being monitored in
                        real-time by you.
                    </p>
                </div>
            </div>
        </div>
    </section>

</x-layout>
