<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/fav.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.12.1/css/pro.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <title>dashboard</title>
</head>

<body class="bg-gray-100">


    <!-- start navbar -->
    <div
        class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white p-6 border-b border-gray-300">

        <!-- logo -->
        <div class="flex-none w-56 flex flex-row items-center">
            <strong class="capitalize ml-1 flex-1">KANTIN KAMPOES.</strong>

            <button id="sliderBtn" class="flex-none text-right text-gray-900 hidden md:block">
                <i class="fad fa-list-ul"></i>
            </button>
        </div>
        <!-- end logo -->

        <!-- navbar content toggle -->
        <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
            <i class="fad fa-chevron-double-down"></i>
        </button>
        <!-- end navbar content toggle -->

        <!-- navbar content -->
        <div id="navbar"
            class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center">
            <!-- left -->
            <div
                class="text-gray-600 md:w-full md:flex md:flex-row md:justify-evenly md:pb-10 md:mb-10 md:border-b md:border-gray-200">
                <h3>The New Face In The Canteen Field</h3>
            </div>
            <!-- end left -->

            <!-- right -->
            <div class="flex flex-row-reverse items-center">

                <!-- user -->
                <div class="dropdown relative md:static">

                    <button class="menu-btn focus:outline-none focus:shadow-outline flex flex-wrap items-center">
                        <div class="w-8 h-8 overflow-hidden rounded-full">
                            <img class="w-full h-full object-cover" src="img/user.svg">
                        </div>

                        <div class="ml-2 capitalize flex ">
                            <h1 class="text-sm text-gray-800 font-semibold m-0 p-0 leading-none">moeSaid</h1>
                            <i class="fad fa-chevron-down ml-2 text-xs leading-none"></i>
                        </div>
                    </button>

                    <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

                    <div
                        class="text-gray-500 menu hidden md:mt-10 md:w-full rounded bg-white shadow-md absolute z-20 right-0 w-40 mt-5 py-2 animated faster">

                        <!--
            <!-- end item -->

                        <hr>

                        <!-- item -->
                        <a class="px-4 py-2 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 hover:text-gray-900 transition-all duration-300 ease-in-out"
                            href="#">
                            <i class="fad fa-user-times text-xs mr-1"></i>
                            log out
                        </a>
                        <!-- end item -->

                    </div>
                </div>
                <!-- end user -->

                <!-- notifcation -->
                <div class="dropdown relative mr-5 md:static">
                    <div
                        class="menu hidden rounded bg-white md:right-0 md:w-full shadow-md absolute z-20 right-0 w-84 mt-5 py-2 animated faster">
                        <!-- top -->
                        <div
                            class="px-4 py-2 flex flex-row justify-between items-center capitalize font-semibold text-sm">
                            <h1>notifications</h1>
                            <div class="bg-teal-100 border border-teal-200 text-teal-500 text-xs rounded px-1">
                                <strong>5</strong>
                            </div>
                        </div>
                        <hr>
                        <!-- end top -->

                        <!-- body -->

                        <!-- item -->
                        <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                            href="#">

                            <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                                <i class="fad fa-birthday-cake text-sm"></i>
                            </div>

                            <div class="flex-1 flex flex-rowbg-green-100">
                                <div class="flex-1">
                                    <h1 class="text-sm font-semibold">poll..</h1>
                                    <p class="text-xs text-gray-500">text here also</p>
                                </div>
                                <div class="text-right text-xs text-gray-500">
                                    <p>4 min ago</p>
                                </div>
                            </div>

                        </a>
                        <hr>
                        <!-- end item -->

                        <!-- item -->
                        <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                            href="#">

                            <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                                <i class="fad fa-user-circle text-sm"></i>
                            </div>

                            <div class="flex-1 flex flex-rowbg-green-100">
                                <div class="flex-1">
                                    <h1 class="text-sm font-semibold">mohamed..</h1>
                                    <p class="text-xs text-gray-500">text here also</p>
                                </div>
                                <div class="text-right text-xs text-gray-500">
                                    <p>78 min ago</p>
                                </div>
                            </div>

                        </a>
                        <hr>
                        <!-- end item -->

                        <!-- item -->
                        <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                            href="#">

                            <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                                <i class="fad fa-images text-sm"></i>
                            </div>

                            <div class="flex-1 flex flex-rowbg-green-100">
                                <div class="flex-1">
                                    <h1 class="text-sm font-semibold">new imag..</h1>
                                    <p class="text-xs text-gray-500">text here also</p>
                                </div>
                                <div class="text-right text-xs text-gray-500">
                                    <p>65 min ago</p>
                                </div>
                            </div>

                        </a>
                        <hr>
                        <!-- end item -->

                        <!-- item -->
                        <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                            href="#">

                            <div class="px-3 py-2 rounded mr-3 bg-gray-100 border border-gray-300">
                                <i class="fad fa-alarm-exclamation text-sm"></i>
                            </div>

                            <div class="flex-1 flex flex-rowbg-green-100">
                                <div class="flex-1">
                                    <h1 class="text-sm font-semibold">time is up..</h1>
                                    <p class="text-xs text-gray-500">text here also</p>
                                </div>
                                <div class="text-right text-xs text-gray-500">
                                    <p>1 min ago</p>
                                </div>
                            </div>

                        </a>
                        <!-- end item -->


                        <!-- end body -->

                        <!-- bottom -->
                        <hr>
                        <div class="px-4 py-2 mt-2">
                            <a href="#"
                                class="border border-gray-300 block text-center text-xs uppercase rounded p-1 hover:text-teal-500 transition-all ease-in-out duration-500">
                                view all
                            </a>
                        </div>
                        <!-- end bottom -->
                    </div>
                </div>
                <!-- end notifcation -->

                <!-- messages -->
                <div class="dropdown relative mr-5 md:static">

                    <button class="hidden fixed top-0 left-0 z-10 w-full h-full menu-overflow"></button>

                    <div
                        class="menu hidden md:w-full md:right-0 rounded bg-white shadow-md absolute z-20 right-0 w-84 mt-5 py-2 animated faster">
                        <!-- top -->
                        <div
                            class="px-4 py-2 flex flex-row justify-between items-center capitalize font-semibold text-sm">
                            <h1>messages</h1>
                            <div class="bg-teal-100 border border-teal-200 text-teal-500 text-xs rounded px-1">
                                <strong>3</strong>
                            </div>
                        </div>
                        <hr>
                        <!-- end top -->

                        <!-- body -->

                        <!-- item -->
                        <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                            href="#">

                            <div class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-100 border border-gray-300">
                                <img class="w-full h-full object-cover" src="img/user1.jpg" alt="">
                            </div>

                            <div class="flex-1 flex flex-rowbg-green-100">
                                <div class="flex-1">
                                    <h1 class="text-sm font-semibold">mohamed said</h1>
                                    <p class="text-xs text-gray-500">yeah i know</p>
                                </div>
                                <div class="text-right text-xs text-gray-500">
                                    <p>4 min ago</p>
                                </div>
                            </div>

                        </a>
                        <hr>
                        <!-- end item -->

                        <!-- item -->
                        <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                            href="#">

                            <div
                                class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-100 border border-gray-300">
                                <img class="w-full h-full object-cover" src="img/user2.jpg" alt="">
                            </div>

                            <div class="flex-1 flex flex-rowbg-green-100">
                                <div class="flex-1">
                                    <h1 class="text-sm font-semibold">sull goldmen</h1>
                                    <p class="text-xs text-gray-500">for sure</p>
                                </div>
                                <div class="text-right text-xs text-gray-500">
                                    <p>1 day ago</p>
                                </div>
                            </div>

                        </a>
                        <hr>
                        <!-- end item -->

                        <!-- item -->
                        <a class="flex flex-row items-center justify-start px-4 py-4 block capitalize font-medium text-sm tracking-wide bg-white hover:bg-gray-200 transition-all duration-300 ease-in-out"
                            href="#">

                            <div
                                class="w-10 h-10 rounded-full overflow-hidden mr-3 bg-gray-100 border border-gray-300">
                                <img class="w-full h-full object-cover" src="img/user3.jpg" alt="">
                            </div>

                            <div class="flex-1 flex flex-rowbg-green-100">
                                <div class="flex-1">
                                    <h1 class="text-sm font-semibold">mick</h1>
                                    <p class="text-xs text-gray-500">is typing ....</p>
                                </div>
                                <div class="text-right text-xs text-gray-500">
                                    <p>31 feb</p>
                                </div>
                            </div>

                        </a>
                        <!-- end item -->


                        <!-- end body -->

                        <!-- bottom -->
                        <hr>
                        <div class="px-4 py-2 mt-2">
                            <a href="#"
                                class="border border-gray-300 block text-center text-xs uppercase rounded p-1 hover:text-teal-500 transition-all ease-in-out duration-500">
                                view all
                            </a>
                        </div>
                        <!-- end bottom -->
                    </div>
                </div>
                <!-- end messages -->


            </div>
            <!-- end right -->
        </div>
        <!-- end navbar content -->

    </div>
    <!-- end navbar -->


    <!-- strat wrapper -->
    <div class="h-screen flex flex-row flex-wrap">

        <!-- start sidebar -->
        <div id="sideBar"
            class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-6 flex-none w-64 md:-ml-64 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">


            <!-- sidebar content -->
            <div class="flex flex-col">

                <!-- sidebar toggle -->
                <div class="text-right hidden md:block mb-4">
                    <button id="sideBarHideBtn">
                        <i class="fad fa-times-circle"></i>
                    </button>
                </div>
                <!-- end sidebar toggle -->

                <p class="uppercase text-xs text-gray-600 mb-4 tracking-wider">Data Penjualan Menu</p>

                <!-- link -->
                <a href=""
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-chart-pie text-xs mr-2"></i>
                    HOT MENU
                </a>
               <a href=""
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    
                </a>
               <a href=""
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    
                </a>
                <!-- end link -->

                <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">DATA UTAMA</p>

                <!-- end link -->

                <!-- link -->
                <a href=""
                    class="mb-3 capitalize font-medium text-sm hover:text-teal-600 transition ease-in-out duration-500">
                    <i class="fad fa-comments text-xs mr-2"></i>
                    OUR TEAM
                </a>

            </div>
            <!-- end sidebar content -->

        </div>
        <!-- end sidbar -->

        <!-- strat content -->
        <div class="grid grid-cols-2 gap-4 ">
            <div class="relative flex flex-col text-gray-700 bg-black shadow-md bg-clip-border rounded-xl w-96 mr-20">
                <div class="relative mx-4 mt-4 overflow-hidden text-white-700 bg-white bg-clip-border rounded-xl h-96">
                    <img src="{{ asset('img/cotomakasar.jpg') }}"
                        alt="card-image" class="object-cover w-full h-full" />
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            COTO MAKASSAR
                        </p>
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            RP15.000
                        </p>
                    </div>
                    <p class="block font-sans text-sm antialiased font-bold leading-normal text-white-700 opacity-75">
                        SOTO ASAL MAKASSAR DENGAN KUAH CREAMY DAN NASI PUTIH HANGAT
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <button
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-white-900/10 hover:shadow-white-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-white text-black shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"             
                    type="button">
                        TAMBAH
                    </button>
                    <button
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-white-900/10 hover:shadow-white-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-white text-black shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"             
                    type="button">
                        RESEP
                    </button>
                </div>
            </div>
            <div class="relative flex flex-col text-gray-700 bg-black shadow-md bg-clip-border rounded-xl w-96">
                <div class="relative mx-4 mt-4 overflow-hidden text-white-700 bg-white bg-clip-border rounded-xl h-96">
                    <img src="{{ asset('img/ayambakarmadu.jpg') }}"
                        alt="card-image" class="object-cover w-full h-full" />
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            AYAM BAKAR MADU
                        </p>
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            RP25.000
                        </p>
                    </div>
                    <p class="block font-sans text-sm antialiased font-bold leading-normal text-white-700 opacity-75">
                        AYAM BAKAR DENGAN CITARASA MADU YANG MANIS
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <button
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-white-900/10 hover:shadow-white-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-white text-black shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"                        type="button">
                        TAMBAH
                    </button>
                    <button
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-white-900/10 hover:shadow-white-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-white text-black shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"                        type="button">
                        RESEP
                    </button>
                </div>
            </div>
            <div class="relative flex flex-col text-gray-700 bg-black shadow-md bg-clip-border rounded-xl w-96 mr-20">
                <div class="relative mx-4 mt-4 overflow-hidden text-white-700 bg-white bg-clip-border rounded-xl h-96">
                    <img src="{{ asset('img/sate.jpg') }}"
                        alt="card-image" class="object-cover w-full h-full" />
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            SATE MARANGGI
                        </p>
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            RP20.000
                        </p>
                    </div>
                    <p class="block font-sans text-sm antialiased font-bold leading-normal text-white-700 opacity-75">
                        CITA RASA SATE MARANGGI DENGAN KENIKMATAN BUMBU KACANG SPESIAL
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <button
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-white-900/10 hover:shadow-white-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-white text-black shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"                        type="button">
                        TAMBAH
                    </button>
                    <button
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-white-900/10 hover:shadow-white-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-white text-black shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"                        type="button">
                        RESEP
                    </button>
                </div>
            </div>
            <div class="relative flex flex-col text-gray-700 bg-black shadow-md bg-clip-border rounded-xl w-96 mr-20">
                <div class="relative mx-4 mt-4 overflow-hidden text-white-700 bg-white bg-clip-border rounded-xl h-96">
                    <img src="{{ asset('img/sop.jpg') }}"
                        alt="card-image" class="object-cover w-full h-full" />
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            SOP IGA
                        </p>
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            RP10.000
                        </p>
                    </div>
                    <p class="block font-sans text-sm antialiased font-bold leading-normal text-white-700 opacity-75">
                        SOP IGA DENGAN KUAH KHAS KANTIN KAMPOES
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <button
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-white-900/10 hover:shadow-white-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-white text-black shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"                        type="button">
                        TAMBAH
                    </button>
                    <button
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-white-900/10 hover:shadow-white-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-white text-black shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"                        type="button">
                        RESEP
                    </button>
                </div>
            </div>
            <div class="relative flex flex-col text-gray-700 bg-black shadow-md bg-clip-border rounded-xl w-96 mr-20">
                <div class="relative mx-4 mt-4 overflow-hidden text-white-700 bg-white bg-clip-border rounded-xl h-96">
                    <img src="{{ asset('img/spagetti.jpg') }}"
                        alt="card-image" class="object-cover w-full h-full" />
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            SPAGETTI
                        </p>
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            RP15.000
                        </p>
                    </div>
                    <p class="block font-sans text-sm antialiased font-bold leading-normal text-white-700 opacity-75">
                        SPAGETTI DENGAN CITARASA MANTAP
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <button
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-white-900/10 hover:shadow-white-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-white text-black shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"                        type="button">
                        TAMBAH
                    </button>
                    <button
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-white-900/10 hover:shadow-white-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-white text-black shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"                        type="button">
                        RESEP
                    </button>
                </div>
            </div>
            <div class="relative flex flex-col text-gray-700 bg-black shadow-md bg-clip-border rounded-xl w-96 mr-20">
                <div class="relative mx-4 mt-4 overflow-hidden text-white-700 bg-white bg-clip-border rounded-xl h-96">
                    <img src="{{ asset('img/seblak.jpg') }}"
                        alt="card-image" class="object-cover w-full h-full" />
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            SEBLAK BANDUNG
                        </p>
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            RP20.000
                        </p>
                    </div>
                    <p class="block font-sans text-sm antialiased font-bold leading-normal text-white-700 opacity-75">
                        SEBLAK KHAS BANDUNG CITARASA RAJA
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <button
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-white-900/10 hover:shadow-white-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-white text-black shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"                        type="button">
                        TAMBAH
                    </button>
                    <button
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-white-900/10 hover:shadow-white-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-white text-black shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"                        type="button">
                        RESEP
                    </button>
                </div>
            </div>

            {{-- MINUMAN --}}
            <div class="relative flex flex-col text-gray-700 bg-black shadow-md bg-clip-border rounded-xl w-96 mr-20">
                <div class="relative mx-4 mt-4 overflow-hidden text-white-700 bg-white bg-clip-border rounded-xl h-96">
                    <img src="{{ asset('img/lemontea.jpg') }}"
                        alt="card-image" class="object-cover w-full h-full" />
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            LEMON TEA
                        </p>
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            RP5.000
                        </p>
                    </div>
                    <p class="block font-sans text-sm antialiased font-bold leading-normal text-white-700 opacity-75">
                        TEH DENGAN LEMON YANG SEGAAR
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <button
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-white-900/10 hover:shadow-white-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-white text-black shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"                        type="button">
                        TAMBAH
                    </button>
                </div>
            </div>

            <div class="relative flex flex-col text-gray-700 bg-black shadow-md bg-clip-border rounded-xl w-96 mr-20">
                <div class="relative mx-4 mt-4 overflow-hidden text-white-700 bg-white bg-clip-border rounded-xl h-96">
                    <img src="{{ asset('img/thaitea.jpg') }}"
                        alt="card-image" class="object-cover w-full h-full" />
                </div>
                <div class="p-6">
                    <div class="flex items-center justify-between mb-2">
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            THAI TEA
                        </p>
                        <p
                            class="block font-sans text-base antialiased font-medium leading-relaxed text-blue-gray-900">
                            RP8.000
                        </p>
                    </div>
                    <p class="block font-sans text-sm antialiased font-bold leading-normal text-white-700 opacity-75">
                        THAI TEA DENGAN CITARASA ORIGINAL
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <button
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg shadow-white-900/10 hover:shadow-white-900/20 focus:opacity-[0.85] active:opacity-[0.85] active:shadow-none block w-full bg-white text-black shadow-none hover:scale-105 hover:shadow-none focus:scale-105 focus:shadow-none active:scale-100"                        type="button">
                        TAMBAH
                    </button>
                </div>
            </div>
        </div>

    </div>
    <!-- end wrapper -->

    <!-- script -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <!-- end script -->

</body>

</html>
