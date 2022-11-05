@extends('theme::layouts.main')

<!--Dashboard Text Fields Code -->
<div class="flex flex-col w-full items-center">
            <span class="flex w-full text-6xl text-gray-200 font-semibold justify-center"> Social Media Template </span>
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
                        class="resize-none bg-gray-50 border border-gray-300 text-gray-900 rounded-lg block w-full h-[180px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white"
                        placeholder="e.g Marketminds is a robust AI powered software that helps you create ideas for your business!"></textarea>
                        <p> Word Count: <span id="count">0/1000</span>
                </div>
                
                <div for="tone_dropdown">
                    <label for="product_description"
                        class="block mb-2 text-xl font-medium text-gray-900 dark:text-gray-300">
                        Choose a tone</label>
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
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Happy &#128516</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sad &#128532</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Excited</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Informative &#1236</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex flex-col items-center w-2/5 pt-20">
                <button class="bg-indigo-600 hover:bg-indigo-200 text-white font-bold py-2 px-4 rounded-full w-4/5 items-center"> Generate </button>
            </div>
        </div>




