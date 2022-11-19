@extends('theme::layouts.main')

<!--Dashboard Text Fields Code -->
<div class="fixed inset-y-0 right-0 w-5/6 items-center place-self-end overflow-y-auto">
    <meta charset=utf-8 />
    <div class="flex flex-col justify-start items-center w-full">
        <div class="flex rounded-b-xl bg-gradient-to-r from-[#9BA3EB] via-[#bf9beb] to-[#9bebe3] w-4/5 py-16">
            <span class="flex w-full text-6xl text-gray-200 font-semibold justify-center">
                Social Media Template
            </span>
        </div>
        <hr class="my-8 h-px bg-gray-200 border-0 dark:bg-gray-700"/>
        <div class="flex flex-col w-3/5 space-y-6 items-center">
            <div class="flex flex-col items-center w-full">
                <div class="flex items-center space-x-3 mb-3 w-7/12">
                    <div class="flex w-10 h-10 rounded-full bg-[#9BA3EB] items-center justify-center text-2xl">
                        1
                    </div>
                    <label for="product_name" class="flex text-xl font-medium text-gray-900 dark:text-gray-300">
                        What is the name of your product?
                    </label>
                </div>
                <input
                    type="text" id="productName"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-[#9BA3EB] focus:border-[#9BA3EB] block w-7/12 h-[60px] p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-[#9BA3EB] dark:focus:border-[#9BA3EB]"
                    placeholder="e.g Apple, Samsung, Marketminds" required
                />
            </div>
            <div class="flex w-full flex-col items-center">
                <div class="flex items-center space-x-3 mb-3 w-7/12">
                    <div class="flex w-10 h-10 rounded-full bg-[#9BA3EB] items-center justify-center text-2xl">
                        2
                    </div>
                    <label for="product_description"
                        class="block text-xl font-medium text-gray-900 dark:text-black">
                        Describe your product to us!
                    </label>
                </div>
                <div class="relative flex h-[180px] w-7/12 rounded-lg">
                    <textarea
                        id="productDescription"
                        maxlength=1000
                        rows="6"
                        oninput="setBorderColorAndCharCount()"
                        class="absolute inset-0 resize-none bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:m-0.5 p-2.5"
                        placeholder="e.g Marketminds is a robust AI powered software that helps you create ideas for your business!"
                    ></textarea>
                </div>
                <div class="flex w-7/12 text-sm text-gray-800 justify-end pt-0.5"><p> character count: <span id="count">0/1000</span></div>
            </div>
            <div for="tone_dropdown" class="flex justify-center w-7/12">
                <div class="flex items-center space-x-3 mb-3 w-full">
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
        <div class="flex flex-col items-center w-1/5 pt-10">
            <button
                id="generateButton"
                class="bg-[#9BA3EB] shadow-md hover:shadow-xl transform hover:-translate-y-1 disabled:hover:shadow-md disabled:hover:translate-y-0 disabled:bg-gray-300 text-white text-lg py-2 px-4 rounded-lg w-4/5 items-center transition-all"
                onClick="handleSubmission()"
            >
                Generate
            </button>
        </div>
    </div>
    <div id="resultsList" class="hidden flex-col w-full justify-center space-y-8 items-center pb-8 pt-28"></div>
</div>
<script type="text/javascript">
    function handleSubmission() {

        const name = document.getElementById("productName").value;
        const desc = document.getElementById("productDescription").value;
        const tone = document.getElementById("toneDisplay").value;
        
        if (name.length > 0 && desc.length > 0 && tone !== undefined) {
            document.getElementById("generateButton").disabled = true;
            sendRequest(name, desc, tone);
        } else {
            // alert("Please fill in all of the fields...");
            // console.log("\ud83d\ude02\ud83d\ude02\ud83d\ude02");
        }
    }

    function sendRequest(name, desc, tone) {

        let key = "enter API key here.";
        // ----------------------------------
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
            const parsedRes = req.response.replaceAll('"', '').replaceAll('[', '').replaceAll(']', '').split(',');
            populateResults(parsedRes);
        })
        req.addEventListener("error", () => {
            console.log(req.response);
        })
        // -------------------------------------
        req.setRequestHeader("Content-Type", "application/json");
        // ---set loading screen----------------
        const resScreen = document.getElementById("resultsList");
        const loadingLines = [
            "Let me think about it...",
            "Firing up the artificial neurons...",
            "Looking for a pen...",
            "Assembling a focus group...",
            "Asking Copy.ai..."
        ]
        let loadingScreen = `
            <div class="flex flex-col items-center justify-center space-y-10">
                <div class="lds-grid">
                    <div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div>
                </div>
                <div class="flex font-bold text-3xl bg-clip-text bg-gradient-to-r from-[#9BA3EB] to-[#bf9beb] text-transparent">
                    ${loadingLines[Math.floor(Math.random() * loadingLines.length)]}
                </div>
            </div>
        `
        resScreen.innerHTML = loadingScreen;
        resScreen.classList.replace("hidden", "flex");
        resScreen.scrollIntoView({behavior: "smooth"});
        // -------------------------------------
        req.send(data);
    }

    function handleToneSelect(prettyTone, tone) {
        const toneButton = document.getElementById("toneDisplay");
        toneButton.value = tone;
        toneButton.innerHTML = prettyTone;
    }

    function populateResults(list) {
        const resScreen = document.getElementById("resultsList");
        resScreen.innerHTML = null;
        for (let i = 0; i < list.length; i++) {
        resScreen.innerHTML += `
            <div class="flex flex-col justify-start w-1/2">
                <div id="result-${i}" class="flex w-full bg-[#ebedfb] rounded opacity-0 py-3 px-5 transition-all mb-1">
                    ${parseEmoji(list[i])}
                </div>
                <div class="flex w-full justify-between">
                    <button
                        id="copyButton-${i}"
                        class="flex rounded w-max border-2 border-[#9ba3eb50] hover:bg-[#9ba3eb50] py-2 px-6 ml-6 transition-all mt-4"
                        onClick="copyToClipboard('${list[i]}', ${i})"
                    >
                        Copy
                    </button>
                    <span class="flex text-sm text-gray-800">${parseEmoji(list[i]).split(" ").length} words | ${parseEmoji(list[i]).length} characters</span>
                </div>
            </div>
            <hr class="h-0.5 w-1/2 bg-gray-200">
        `
        }

        for (let j = 0; j < list.length; j++) {
            document.getElementById(`result-${j}`).classList.replace("opacity-0", "opacity-100");
        }
        document.getElementById("generateButton").disabled = false;
    }

    function parseEmoji(input) {
        let out = "";
        for(let i = 0; i < input.length; i++) {
            if(input[i] === '\\') {
                if (input[i+5] !== ' ') {
                    // out+=input[i];
                    // out+=input.substr(i+1, 6);
                    i+=5;
                }
                else {
                    // out+=`\u${input.substr(i+2, 4)}`;
                    i+=4;
                }
            }
            else{
                out+=input[i];
            }
        }
        console.log(out);
        return(out);
    }

    function copyToClipboard(target, index) {
        navigator.clipboard.writeText(target);
        const btn = document.getElementById(`copyButton-${index}`);
        btn.innerHTML = "Copied!";
        setTimeout(() => {
            btn.innerHTML = "Copy";
        }, 3000);
    }
</script>



