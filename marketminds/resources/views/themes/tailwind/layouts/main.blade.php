<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <!-- <title>
        {{ setting('site.title', 'Laravel Wave') . ' - ' . setting('site.description', 'The Software as a Service Starter Kit built on Laravel & Voyager') }}
    </title> -->
    <title>
        MarketMind
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


<body class="bg-white font-[Poppins]">
    <div class="flex">
        <!--Start of Sidebar code -->
        <div class="fixed left-0 inset-y-0 p-2 w-[350px] text-center h-screen text-gray-700">
            <div class="text-xl">
                <div class="p-2.5 mt-1 flex items-center rounded-md">
                    <i class="bi bi-app-indicator px-2 py-1 bg-blue-600 rounded-md"></i>
                    <h1 class="text-[30px]  ml-3 text-xl font-bold">MarketMinds.ai</h1>
                </div>

                <!--Products + Items in SideBar -->
                <hr class="my-2 text-gray-600">
                <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300">
                    <i class="bi bi-list"></i>
                    <span class="text-[24px] ml-4">Products</span>
                </div>
                <hr class="my-2 text-gray-600">
                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                    <i class="bi bi-facebook"></i>
                    <span class="text-[16px] ml-4">Facebook</span>
                </div>
                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                    <i class="bi bi-instagram"></i>
                    <span class="text-[16px] ml-4">Instagram</span>
                </div>

                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                    <i class="bi bi-medium"></i>
                    <span class="text-[16px] ml-4">Medium</span>
                </div>

                <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:text-black">
                    <i class="bi bi-reddit"></i>
                    <span class="text-[16px] ml-4">Reddit</span>
                </div>

                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                    <i class="bi bi-tiktok"></i>
                    <span class="text-[16px] ml-4">TikTok</span>
                </div>

                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                    <i class="bi bi-twitter"></i>
                    <span class="text-[16px] ml-4">Twitter</span>
                </div>

                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                    <i class="bi bi-youtube"></i>
                    <span class="text-[15px] ml-4">YouTube</span>
                </div>
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