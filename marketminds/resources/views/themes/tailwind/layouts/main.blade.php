<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <title>
        {{ setting('site.title', 'Laravel Wave') . ' - ' . setting('site.description', 'The Software as a Service Starter Kit built on Laravel & Voyager') }}
    </title>


    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"> <!-- † -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="url" content="{{ url('/') }}">


    <link rel="icon" href="{{ setting('site.favicon', '/wave/favicon.png') }}" type="image/x-icon">

    <!-- Styles -->
    <link href="{{ asset('themes/' . $theme->folder . '/css/app.css') }}" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/@themesberg/flowbite@latest/dist/flowbite.bundle.js"></script>
    <!-- <script src="./tailwind3.js"></script> -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>


<body class="bg-gray-200 font-[Poppins]">
    <div class="flex">
        <!--Start of Sidebar code -->
        <div class="p-2 w-[350px] text-center bg-indigo-600 h-screen">
            <div class="text-gray-100 text-xl">
                <div class="p-2.5 mt-1 flex items-center rounded-md ">
                    <i class="bi bi-app-indicator px-2 py-1 bg-blue-600 rounded-md"></i>
                    <h1 class="text-[30px]  ml-3 text-xl text-gray-200 font-bold">MarketMinds.ai</h1>
                </div>

                <!--Products + Items in SideBar -->
                <hr class="my-2 text-gray-600">
                <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300">
                    <i class="bi bi-list"></i>
                    <span class="text-[24px] ml-4 text-gray-200">Products</span>
                </div>
                <hr class="my-2 text-gray-600">
                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                    <i class="bi bi-facebook"></i>
                    <span class="text-[16px] ml-4 text-gray-200">Facebook</span>
                </div>
                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                    <i class="bi bi-instagram"></i>
                    <span class="text-[16px] ml-4 text-gray-200">Instagram</span>
                </div>

                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                    <i class="bi bi-medium"></i>
                    <span class="text-[16px] ml-4 text-gray-200">Medium</span>
                </div>

                <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:text-black">
                    <i class="bi bi-reddit"></i>
                    <span class="text-[16px] ml-4 text-gray-200">Reddit</span>
                </div>

                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                    <i class="bi bi-tiktok"></i>
                    <span class="text-[16px] ml-4 text-gray-200">TikTok</span>
                </div>

                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                    <i class="bi bi-twitter"></i>
                    <span class="text-[16px] ml-4 text-gray-200">Twitter</span>
                </div>

                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                    <i class="bi bi-youtube"></i>
                    <span class="text-[15px] ml-4 text-gray-200">YouTube</span>
                </div>
            </div>
        </div>

        <!--Dashboard Text Fields Code -->
        <div class="flex flex-col w-4/5 items-center">
            <div class="text-[60px] text-indigo-600 font-semibold text-center"> Social Media Template </div>
            <hr class="my-8 h-px bg-gray-200 border-0 dark:bg-gray-700">
            <div class="flex flex-col w-3/5 space-y-10">
                <div>
                    <label for="product_name" class="block mb-2 text-xl font-medium text-gray-900 dark:text-gray-300">
                        What is the name of your product?</label>
                    <input type="text" id="productName"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-indigo-600 focus:border-indigo-600 block w-full h-[60px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="e.g Apple, Samsung, Marketminds" required>
                </div>

                <div>
                    <label for="product_description"
                        class="block mb-2 text-xl font-medium text-gray-900 dark:text-black">
                        Describe your product to us! </label>
                    <textarea id="productDescription" rows="6"
                        oninput="setBorderColorAndCharCount()"
                        class="resize-none text-justify bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-l block w-full h-[180px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        placeholder="e.g Marketminds is a robust AI powered software that helps you create ideas for your business!"></textarea>
                        <p> Word Count: <span id="count">0/1000</span>
                </div>
                
                <div for="tone_dropdown">
                    <label for="product_description"
                        class="block mb-2 text-xl font-medium text-gray-900 dark:text-gray-300">
                        Choose a tone 😀</label>
                    <button id="dropdownDefault" data-dropdown-toggle="dropdown"
                        class="text-white bg-indigo-600 hover:bg-indigo-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center dark:focus:ring-blue-800"
                        type="button">Dropdown button <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="none"
                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdown"
                        class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                        data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom"
                        style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Happy</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sad</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Excited</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Informative</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center w-2/5 pt-20">
                <button class="bg-indigo-600 hover:bg-indigo-200 text-white font-bold py-2 px-4 rounded-full w-4/5 items-center"> Generate </button>
            </div>
        </div>
    </div>

    <script>
     function setBorderColorAndCharCount() {
        var length = document.getElementById('productDescription').value.length
        var prodTextField = document.getElementById('productDescription')
        var result = ""
        if (length == 0) {
            prodTextField.style.borderColor = 'gray'
        } else if (length > 0 && length < 25) {
            prodTextField.style.borderColor = 'yellow'
        } else if (length >= 25 && length < 1000) {
            prodTextField.style.borderColor = 'green'
        } else {
            prodTextField.style.borderColor = 'red'
        }
        document.getElementById("count").innerHTML = length + "/1000"
    }
   
    </script>

    @livewireScripts
    @include('theme::partials.toast')
    @if(session('message'))
    <script>
    setTimeout(function() {
        popToast("{{ session('message_type') }}", "{{ session('message') }}");
    }, 10);
    </script>
    @endif
    @waveCheckout

</body>

</html>