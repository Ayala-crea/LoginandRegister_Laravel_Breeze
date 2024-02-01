<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIAW AUGG STORE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rethink+Sans:ital,wght@0,400;0,700;1,500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <script src="https://unpkg.com/feather-icons"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        @layer utilities {
            .content-auto {
                content-visibility: visible;
            }
        }
    </style>
</head>

<body>
    <!--nav-->
    <nav class="navbar">
        <a href="#" class="navbar-logo">KANTIN<span> KAMPOES.</span></a>

        <div class="navbar-nav">
            <!-- Add the following code for Log in/Register -->
            @if (Route::has('login'))
                <div class="hidden md:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="ml-4 text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif
            <!-- End of Log in/Register code -->
        </div>
    </nav>

    <!-- Setelah Nav -->
    <section class="aftern" id="home">
        <img class="h-auto max-w-full  transition-all  transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0 "
            src = "https://images.unsplash.com/photo-1538334421852-687c439c92f4?q=80&w=1770&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
            alt="image description">
        <figcaption class="absolute font-weight: 400">
            <main class="caption">
                <h1> A NEW FACE IN THE <span>CANTEEN</span> FIELD</h1>
                <p></p>

            </main>
        </figcaption>
    </section>


    <section class="text-gray-600 body-font">
        <section
            class="bg-center bg-no-repeat bg-[url('https://images.unsplash.com/photo-1597773150796-e5c14ebecbf5?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-gray-900 bg-blend-multiply">
            <div class="px-4 mx-auto max-w-screen-xl text-center py-10 lg:py-">
                <h1 class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-white md:text-3xl lg:text-5xl">
                    Kenapa Harus Memilih Kantin Kampoes?</h1>
                <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Kantin ini menyajikan
                    berbagai macam menu makanan dan minuman yang kekinian, dengan harga yang terjangkau.
                    Kantin ini menggunakan teknologi digital untuk pemesanan dan pembayaran, sehingga lebih praktis dan
                    efisien.</p>
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                    <div class="container px-5  mx-auto">
                        <div class="flex flex-wrap -m-4">
                            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                <a class="block relative h-48 rounded overflow-hidden">
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                        src="https://img.freepik.com/free-vector/fight-virus-concept_52683-36505.jpg?w=996&t=st=1703096814~exp=1703097414~hmac=63176375dc0be6dcccdc8f41655aa1cf29789012c3a89fc574f00f3025207121">
                                </a>
                                <div class="mt-4">
                                    <h3 class="text-base text-gray-1000 font-bold text-center">HIGIENIS</h3>
                                </div>
                            </div>
                            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                <a class="block relative h-48 rounded overflow-hidden">
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                        src="https://img.freepik.com/free-vector/tiny-male-female-characters-standing-near-arrow-down-showing-percentage-decrease-financial-reduction-flat-vector-illustration-low-rate-special-offer-loan-discount-price-concept_74855-22568.jpg?w=900&t=st=1703096971~exp=1703097571~hmac=6fc16b0ea7c5f1de4771300ea087d734459f907abd7a56b48c8246e250492130">
                                </a>
                                <div class="mt-4">
                                    <h3 class="text-base text-gray-1000 font-bold text-center">HARGA TERJANGKAU</h3>
                                </div>
                            </div>
                            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                <a class="block relative h-48 rounded overflow-hidden">
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                        src="https://img.freepik.com/free-vector/cashback-concept-with-smartphone-coins_23-2148459055.jpg?w=996&t=st=1703097056~exp=1703097656~hmac=d14f258c0952b5a2475ffb02c6becc6932dfddf45a6bbb7fe249218b67f24ae3">
                                </a>
                                <div class="mt-4">
                                    <h3 class="text-base text-gray-1000 font-bold text-center">PEMBAYARAN ONLINE</h3>
                                </div>
                            </div>
                            <div class="lg:w-1/4 md:w-1/2 p-4 w-full">
                                <a class="block relative h-48 rounded overflow-hidden">
                                    <img alt="ecommerce" class="object-cover object-center w-full h-full block"
                                        src="https://img.freepik.com/free-vector/messages-concept-illustration_114360-583.jpg?w=740&t=st=1703097128~exp=1703097728~hmac=1d797a60ad615af1a70993c7cece1ddd62c922af291d1b5f6156c7d9977a52a7">
                                </a>
                                <div class="mt-4">
                                    <h3 class="text-base text-gray-1000 font-bold text-center">BISA DIPESAN</h3>
                                </div>
                            </div>

                        </div>
                    </div>
        </section>

        <figure class="max-w-screen-md mx-auto text-center">
            <section
                class="bg-center bg-no-repeat bg-[url('https://images.unsplash.com/photo-1597773150796-e5c14ebecbf5?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-gray-900 bg-blend-multiply">
                <svg class="w-10 h-10 mx-auto mb-3 text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="currentColor" viewBox="0 0 18 14">
                    <path
                        d="M6 0H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3H2a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Zm10 0h-4a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h4v1a3 3 0 0 1-3 3h-1a1 1 0 0 0 0 2h1a5.006 5.006 0 0 0 5-5V2a2 2 0 0 0-2-2Z" />
                </svg>
                <blockquote>
                    <p class="text-2xl italic font-medium text-gray-400">"Kualitas dan teknologi adalah dua hal yang
                        tidak dapat dipisahkan. Teknologi dapat membantu meningkatkan kualitas, dan kualitas dapat
                        membantu teknologi menjadi lebih efektif."</p>
                </blockquote>
                <figcaption class="flex items-center justify-center mt-6 space-x-3 rtl:space-x-reverse">
        
                    <div class="flex items-center divide-x-2 rtl:divide-x-reverse divide-gray-500">
                        <cite class="pe-3 font-medium text-gray-300">Muhammad Qinthar</cite>
                        <cite class="ps-3 text-sm text-gray-500">CEO at Kantin Kampoes.</cite>
                    </div>
                </figcaption>
        </figure>

        <div class="px-4 mx-auto max-w-screen-xl text-center py-24">
            <section
                class="bg-center bg-no-repeat bg-[url('https://images.unsplash.com/photo-1597773150796-e5c14ebecbf5?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-gray-900 bg-blend-multiply">
                <h1
                    class="mb-4 text-3xl font-extrabold tracking-tight leading-none text-white md:text-3xl lg:text-4xl padding-top">
                    TEMUKAN KAMI</h1>
                <div class="flex flex-col space-y-2 sm:flex-row sm:justify-center sm:space-y-1">
                    <div class="row">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126693.57846419746!2d107.78890013776288!3d-7.105785776214335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68b789c9645aaf%3A0x401e8f1fc28c920!2sKec.%20Leles%2C%20Kabupaten%20Garut%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1703008403145!5m2!1sid!2sid"
                            width="850" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>


                    <!-- component -->
                    <div class="max-w-screen-xl space-y-8 overflow-hidden ">
                    </div>
            </section>




            <!-- Footer 2 -->
            <br>
            <br>
            <br>
            <div class="w-full  flex items-center justify-center bg-black">
                <div class="md:w-2/3 w-full px-4 text-white ">
                    <div class="w-full text-5xl font-bold">
                        <h1 class="w-full ">Mari Lebih Dekat Dengan Kami</h1>
                    </div>
                    <div class="flex mt-8  md:justify-between">
                        <p class="w-full md:w-2/3 text-gray-400"></p>
                        <div class="w-44 pt-6 md:pt-0">



                        </div>
                    </div>
                    <div class="p-10">
                        <!--Card 1-->
                        <div class=" w-full lg:max-w-full lg:flex">
                            <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                                style="background-image: url({{asset('images/qinthar.jpg')}})" title="Mountain">
                            </div>
                            <div
                                class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                <div class="mb-8">
                                    <p class="text-sm text-gray-600 flex items-center">

                                    </p>
                                    <div class="text-gray-900 font-bold text-xl mb-2">Muhammad Qinthar</div>
                                    <p class="text-gray-700 text-base">Saya Muhammad Qinthar, Saya Sedang Melanjutkan
                                        Jenjang D4 Teknik Informatika, Di Universitas Logistik & Bisnis international.
                                        Asal saya Dari Kota Garut, Jawa barat. Hobi saya bermain Futsal dan Menyanyi</p>
                                </div>
                                <div class="flex items-center">
                                    <div class="text-sm">
                                        <p class="text-gray-900 leading-none">President Director</p>
                                        <p class="text-gray-600"></p>
                                        <div class="text-sm">
                                            <p class="text-gray-900 leading-none"></p>
                                            <p class="text-gray-600"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="p-10">
                            <!--Card 1-->
                            <div class=" w-full lg:max-w-full lg:flex">
                                <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden"
                                    style="background-image: url({{asset('images/alfian.jpg')}})" title="Mountain">
                                </div>
                                <div
                                    class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
                                    <div class="mb-8">
                                        <div class="text-gray-900 font-bold text-xl mb-2">Alfian Benardo Rusli</div>
                                        <p class="text-gray-700 text-base"> Saya Alfian Benardo Rusli, Saya Sedang
                                            Melanjutkan Jenjang D4 Teknik Informatika, Di Universitas Logistik & Bisnis
                                            international. Asal saya Dari Kota Subang, Jawa barat. Hobi saya bermain
                                            Bola dan Berenang</p>
                                    </div>
                                    <div class="flex items-center">

                                        <div class="text-sm">
                                            <p class="text-gray-900 leading-none">Director</p>
                                            <p class="text-gray-600"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- footer -->
                        <footer class="bg-black">
                            <div class="mx-auto max-w-screen-xl px-4 pb-8 pt-16 sm:px-6 lg:px-8 lg:pt-24">
                                <div class="text-center">
                                    <h2 class="text-3xl font-extrabold text-white-900 sm:text-5xl">This Is New Era Of
                                        Canteen</h2>

                                    <p class="mx-auto mt-4 max-w-sm text-gray-500">
                                    </p>

                                    <a href="{{ route('register') }}"
                                        class="mt-8 inline-block rounded-full border border-indigo-600 px-12 py-3 text-sm font-medium text-indigo-600 hover:bg-indigo-600 hover:text-white focus:outline-none focus:ring active:bg-indigo-500">
                                        Get Started
                                    </a>
                                </div>

                                <div
                                    class="mt-10 border-t border-gray- pt-8 sm:flex sm:items-center sm:justify-between lg:mt-10">
                                    <ul class="mt-8 flex justify-center gap-6 sm:mt-0 lg:justify-end">
                                        <li>
                                            <a href="https://www.facebook.com/login/device-based/regular/login/?login_attempt=1&lwv=120&lwc=1348092"
                                                rel="noreferrer" target="_blank"
                                                class="text-gray-700 transition hover:opacity-75">
                                                <span class="sr-only">Facebook</span>

                                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"
                                                    aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://www.instagram.com/qintharalmaliki" rel="noreferrer"
                                                target="_blank" class="text-gray-700 transition hover:opacity-75">
                                                <span class="sr-only">Instagram</span>

                                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"
                                                    aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </li>

                                        <li>
                                            <a href="https://github.com/qintharganteng" rel="noreferrer"
                                                target="_blank" class="text-gray-700 transition hover:opacity-75">
                                                <span class="sr-only">GitHub</span>

                                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24"
                                                    aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </footer>



                    </div>

    </section>
    <script>
        feather.replace();
    </script>
    <script src="{{ asset('script.js') }}"></script>
</body>

</html>
