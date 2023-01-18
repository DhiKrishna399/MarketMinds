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
        <div class="fixed left-0 inset-y-0 p-2 w-1/6 flex flex-col justify-between text-center h-screen text-gray-700 bg-[#9ba3eb1f]">
            <div class="flex flex-col text-xl">
                <div class="p-2.5 mt-1 flex items-center rounded-md">
                    <i class="bi bi-app-indicator px-2 py-1 bg-blue-600 rounded-md"></i>
                    <h1 class="text-[30px]  ml-3 text-xl font-bold">MarketMinds.ai</h1>
                </div>

                <!--Products + Items in SideBar -->
                <hr class="my-2 text-gray-600">
                <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300">
                    <span class="text-[24px] ml-4">Services</span>
                </div>
                <hr class="my-2 text-gray-600">
                <div
                    id="facebook_services"
                    class="flex flex-col items-start"
                >
                    <div
                        id="facebook_services_button"
                        onClick="handleServiceSelectorClick('facebook_services', true)"
                        class="flex items-center w-full rounded-lg px-4 duration-300 cursor-pointer p-2.5 mt-2 hover:bg-[#9BA3EB] text-xl"
                    >
                        <i class="bi bi-facebook text-blue-500 flex"></i>
                        <span class="ml-4">Facebook</span>
                    </div>
                    <div
                        id="facebook_services_options"
                        class="flex flex-col justify-evenly w-full h-0 ml-5 overflow-y-hidden transition-all expandable rounded-bl border-l-2 border-[#9BA3EB]"
                    >
                        <span
                            id="facebook_services_opt_1"
                            value="service_name_here"
                            class="flex py-1 px-3 mr-5 ml-4 rounded cursor-pointer hover:bg-[#9ba3eba6] transition-all"
                            onClick="handleServiceSelectorClick('facebook_services_opt_1', false, 'facebook_services')"
                        >Service-1</span>
                        <span class="flex py-1 px-3 mr-5 ml-4 rounded cursor-pointer hover:bg-[#9ba3eba6] transition-all">Service-2</span>
                        <span class="flex py-1 px-3 mr-5 ml-4 rounded cursor-pointer hover:bg-[#9ba3eba6] transition-all">Service-3</span>
                        <span class="flex py-1 px-3 mr-5 ml-4 rounded cursor-pointer hover:bg-[#9ba3eba6] transition-all">Service-4</span>
                    </div>
                </div>
                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-[#9BA3EB]">
                    <i class="bi bi-instagram bg-clip-text text-transparent bg-gradient-to-br
                     from-[#7935ab] via-[#df0a2d] to-[#e8cf00]"></i>
                    <span class="text-[16px] ml-4">Instagram</span>
                </div>

                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-[#9BA3EB]">
                    <i class="bi bi-medium"></i>
                    <span class="text-[16px] ml-4">Medium</span>
                </div>

                <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-[#9BA3EB]">
                    <i class="bi bi-reddit text-orange-600"></i>
                    <span class="text-[16px] ml-4">Reddit</span>
                </div>

                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-[#9BA3EB]">
                    <i class="bi bi-tiktok"></i>
                    <span class="text-[16px] ml-4">TikTok</span>
                </div>

                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-[#9BA3EB]">
                    <i class="bi bi-twitter text-blue-500"></i>
                    <span class="text-[16px] ml-4">Twitter</span>
                </div>

                <div
                    class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-[#9BA3EB]">
                    <i class="bi bi-youtube text-red-500"></i>
                    <span class="text-[15px] ml-4">YouTube</span>
                </div>
            </div>
            <div class="flex justify-between items-center mb-6 mx-3">

                <div class="flex items-center justify-center">
                <button id="dropdownTopButton" data-dropdown-toggle="dropdownTop" data-dropdown-placement="top" class="mr-3 mb-3 md:mb-0 text-black bg-gray-700 hover:bg-gray-800 hover: text-white focus:ring-4 focus:outline--none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center" type="button">KN <svg class="w-4 h-4 ml-2" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path></svg></button>
                <!-- Dropdown menu -->
                <div id="dropdownTop" class="z-10 hidden bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownTopButton">
                      <li>
                        <a href="dashboard" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                      </li>
                      <li>
                        <a href="settings/plans" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Plans</a>
                      </li>
                      <li>
                        <a href="settings" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                      </li>
                      <li>
                        <form action="/logout" method="POST">
	                            {{ csrf_field() }}
	                            <button type="submit" class="py-2 px-4 text-black bg-danger inline-flex"><i class="fa fa-power-off mr-2"></i> Logout</button>
	                    </form>
                      </li>
                    </ul>
                </div>
                    <span id="account_name_sidebar">Kolin</span>
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

    function handleSignOutClick() {
        console.log("The 'Sign Out' button has been clicked, look for 'handleSignOutClick()' function in script of sidebar code to finish implementation.")
    }

    function handleServiceSelectorClick(elementId, expand, parentId = null) {
        if (expand) {
            const btn = document.getElementById(elementId + "_button");
            const section = document.getElementById(elementId + "_options");
            if (section.classList.contains("h-0")) {
                btn.classList.replace("hover:bg-[#9BA3EB]", "bg-[#9BA3EB]");
                section.classList.replace("h-0", "h-44");
            }
            else {
                btn.classList.replace("bg-[#9BA3EB]", "hover:bg-[#9BA3EB]");
                section.classList.replace("h-44", "h-0");
            }
        } else {
            console.log(document.getElementById(elementId).value);
        }
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