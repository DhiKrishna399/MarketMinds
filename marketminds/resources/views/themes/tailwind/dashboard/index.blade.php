@extends('theme::layouts.main')

<!--Dashboard Text Fields Code -->
<div class="fixed inset-y-0 right-0 w-5/6 items-center place-self-end">
    <div class="flex flex-col justify-center items-center w-full">
        <div class="flex rounded-b-xl bg-gradient-to-r from-[#9BA3EB] via-[#bf9beb] to-[#9bebe3] w-4/5 py-16">
            <span class="flex w-full text-6xl text-gray-200 font-semibold justify-center">
                Social Media Template
            </span>
        </div>
        <hr class="my-8 h-px bg-gray-200 border-0 dark:bg-gray-700"/>
        <div class="flex flex-col w-3/5 space-y-16">
            <div>
                <div class="flex items-center space-x-3 mb-3">
                    <div class="flex w-10 h-10 rounded-full bg-[#9BA3EB] items-center justify-center text-2xl">
                        1
                    </div>
                    <label for="product_name" class="flex text-xl font-medium text-gray-900 dark:text-gray-300">
                        What is the name of your product?
                    </label>
                </div>
                <input
                    type="text" id="productName"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-[#9BA3EB] focus:border-[#9BA3EB] block w-full h-[60px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#9BA3EB] dark:focus:border-[#9BA3EB]"
                    placeholder="e.g Apple, Samsung, Marketminds" required
                />
            </div>

            <div>
                <div class="flex items-center space-x-3 mb-3">
                    <div class="flex w-10 h-10 rounded-full bg-[#9BA3EB] items-center justify-center text-2xl">
                        2
                    </div>
                    <label for="product_description"
                        class="block text-xl font-medium text-gray-900 dark:text-black">
                        Describe your product to us!
                    </label>
                </div>
                <div class="relative flex h-[180px] w-full bg-gradient-to-r from-[#9BA3EB] via-[#bf9beb] to-[#9bebe3] rounded-lg">
                    <textarea id="productDescription" rows="6"
                        class="absolute inset-0 resize-none bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:m-0.5 p-2.5"
                        placeholder="e.g Marketminds is a robust AI powered software that helps you create ideas for your business!"
                    ></textarea>
                </div>
                <p> Word Count: <span id="count">0/1000</span>
            </div>
            <div for="tone_dropdown">
                <div class="flex items-center space-x-3 mb-3">
                    <div class="flex w-10 h-10 rounded-full bg-[#9BA3EB] items-center justify-center text-2xl">
                        3
                    </div>
                    <button id="toneButton" data-dropdown-toggle="tone-dropdown"
                    class="bg-gray-200 hover:bg-[#9BA3EB] font-medium rounded-lg px-4 py-2.5 text-center inline-flex items-center"
                    type="button">
                        <span id="toneDisplay">Choose your tone</span>
                        <svg
                        class="ml-2 w-4 h-4" aria-hidden="true" fill="none"
                        stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                        </svg>
                    </button>
                </div>
                <!-- Dropdown menu -->
                <div id="tone-dropdown"
                    class="hidden z-10 w-44 bg-white rounded divide-y divide-[#9BA3EB] shadow dark:bg-gray-700"
                    data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom"
                    style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 10px);">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="toneButton">
                        <li
                            class="block py-2 px-4 hover:bg-[#9BA3EB]"
                            onClick="handleToneSelect('Happy &#128516', 'happy')"
                        >
                            Happy &#128516
                        </li>
                        <li
                            class="block py-2 px-4 hover:bg-[#9BA3EB]"
                            onClick="handleToneSelect('Sad &#128532', 'sad')"
                        >
                            Sad &#128532
                        </li>
                        <li
                            class="block py-2 px-4 hover:bg-[#9BA3EB]"
                            onClick="handleToneSelect('Excited', 'excited')"
                        >
                            Excited
                        </li>
                        <li
                            class="block py-2 px-4 hover:bg-[#9BA3EB]"
                            onClick="handleToneSelect('Informative', 'informative')"
                        >
                            Informative
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="flex flex-col items-center w-1/5 pt-20">
            <button
                class="bg-[#9BA3EB] shadow-md hover:shadow-xl transform hover:-translate-y-1 text-white text-lg py-2 px-4 rounded-lg w-4/5 items-center transition-all"
                onClick="handleSubmission()"
            >
                Generate
            </button>
        </div>
    </div>
</div>
<script type="text/javascript">
    function handleSubmission() {
        const name = document.getElementById("productName").value;
        const desc = document.getElementById("productDescription").value;
        const tone = document.getElementById("toneDisplay").value;
        console.log(tone);
        
        if (name.length > 0 && desc.length > 0 && tone !== undefined) {
            sendRequest(name, desc, tone);
        } else {
            alert("Please fill in all of the fields...");
        }
    }

    function sendRequest(name, desc, tone) {
        const url = "https://uqhzvj5rr9.execute-api.us-east-1.amazonaws.com/default/gpt_ad_service";
        let req = new XMLHttpRequest();
        const data = JSON.stringify({
            "Product": name,
            "Description": desc,
            "Tone": tone,
            "Language": "English",
            "Service": "tiktok_title_service"
        });
        req.open("POST", url);
        // -------------------------------------
        req.addEventListener("load", () => {
            console.log(req.response);
        })
        req.addEventListener("error", () => {
            console.log(req.response);
        })
        // -------------------------------------
        req.setRequestHeader("Content-Type", "application/json");
        req.send(data);
    }

    function handleToneSelect(prettyTone, tone) {
        const toneButton = document.getElementById("toneDisplay");
        toneButton.value = tone;
        toneButton.innerHTML = prettyTone;
    }
</script>



