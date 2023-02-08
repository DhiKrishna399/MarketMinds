<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
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


<body class="bg-[#f3f3f3] font-[Poppins]">
    <div class="flex">
        <!--Start of Sidebar code -->
        <div class="fixed left-0 inset-y-0 p-2 w-1/6 flex flex-col justify-between text-center h-screen text-gray-700 bg-white">
            <div class="flex flex-col text-xl overflow-y-auto overflow-x-hidden">
                <div class="p-2.5 mt-1 flex items-center rounded-md">
                    <i class="bi bi-app-indicator px-2 py-1 bg-gradient-to-tr from-green-500 via-teal-400 to-emerald-500 rounded-md"></i>
                    <h1 class="text-2xl ml-3 font-bold">WordZilla</h1>
                </div>

                <!--Products + Items in SideBar -->
                <hr class="my-2 text-gray-600">
                <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300">
                    <span class="text-[24px] ml-4">Services</span>
                </div>
                <hr class="my-2 text-gray-600">
                <div id="serviceMenu" class="flex flex-col text-xl overflow-y-auto overflow-x-hidden space-y-6 pt-6"></div>
            </div>
            <div class="sticky bottom-0 left-0 z-10 bg-white flex justify-between items-center py-4 px-3 w-full h-18">
                <div class="absolute inset-0 bg-[#9ba3eb1f] -z-10"></div>
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
    <script type="module">
        import serviceMap from './serviceMap.js'
        function populateServiceMenu() {
            let menu = document.getElementById("serviceMenu");
            let keys = Object.keys(serviceMap);
            let temp = ``;
            keys.forEach((key, i) => (
                temp +=
                `<div
                    id={${key.toLowerCase()}}
                    class="flex flex-col items-start cursor-pointer justify-center"
                    onClick="expandService('${key.toLowerCase()}')"
                >
                    <div class="flex items-center">
                        <i class="bi bi-${key.toLowerCase()} ${serviceMap[key].iconColorClass} px-3 rounded-md"></i>
                        <span class="text-black">${key}</span>
                    </div>
                    <div id="${key.toLowerCase() + "-dropdown"}" class="flex flex-col text-lg space-y-4 mt-4 ml-6 items-start justify-center expandable h-0 overflow-hidden">
                        ${populateServiceOptions(serviceMap[key].services)}
                    </div>
                </div>`
                )
            );
            menu.innerHTML = temp;
            }
        populateServiceMenu();
    </script>
    <script>
        function setBorderColorAndCharCount() {
            let length = document.getElementById('productDescription').value.length
            let prodTextField = document.getElementById('productDescription')
            let result = ""
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

        function populateServiceOptions(services) {
            let temp = ``;
            services.forEach((service, j) => (
                temp += `<button id="${service.name}" onClick="handleServiceSelectorClick('${service.name}', '${service.prettyName}')">
                    ${service.prettyName}
                </button>`
            ))
            return temp;
        }

        function expandService(name, size = "h-16") {
            const section = document.getElementById(name + "-dropdown");
            if (section.classList.contains("h-0")) section.classList.replace("h-0", size);
            else section.classList.replace(size, "h-0");
        }

        function handleServiceSelectorClick(serviceName, servicePrettyName) {
            const activeServiceSelector = document.getElementById("active_service");
            activeServiceSelector.setAttribute("data-active-service", serviceName);
            activeServiceSelector.innerHTML = servicePrettyName;
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