@extends('theme::layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Demonic Undesirable Parrot</title>
    
    <link rel="shortcut icon" type="image/x-icon" href="data:image/svg+xml,&lt;svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22&gt;&lt;text y=%22.9em%22 font-size=%2290%22&gt;🦉&lt;/text&gt;&lt;/svg&gt;">

    <style>/* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.container{width:100%}@media (min-width: 640px){.container{max-width:640px}}@media (min-width: 768px){.container{max-width:768px}}@media (min-width: 1024px){.container{max-width:1024px}}@media (min-width: 1280px){.container{max-width:1280px}}@media (min-width: 1536px){.container{max-width:1536px}}.fixed{position:fixed}.absolute{position:absolute}.relative{position:relative}.inset-0{top:0px;right:0px;bottom:0px;left:0px}.bottom-0{bottom:0px}.right-0{right:0px}.left-1\/2{left:50%}.left-0{left:0px}.top-0{top:0px}.top-1\/2{top:50%}.top-24{top:6rem}.z-50{z-index:50}.z-10{z-index:10}.z-20{z-index:20}.z-40{z-index:40}.z-30{z-index:30}.z-0{z-index:0}.col-span-full{grid-column:1 / -1}.col-span-3{grid-column:span 3 / span 3}.col-span-1{grid-column:span 1 / span 1}.col-span-2{grid-column:span 2 / span 2}.row-span-2{grid-row:span 2 / span 2}.mx-auto{margin-left:auto;margin-right:auto}.my-3{margin-top:0.75rem;margin-bottom:0.75rem}.my-10{margin-top:2.5rem;margin-bottom:2.5rem}.my-12{margin-top:3rem;margin-bottom:3rem}.my-4{margin-top:1rem;margin-bottom:1rem}.mb-3{margin-bottom:0.75rem}.-mr-20{margin-right:-5rem}.-mt-1{margin-top:-0.25rem}.mt-4{margin-top:1rem}.mt-3{margin-top:0.75rem}.-ml-0{margin-left:-0px}.mt-1{margin-top:0.25rem}.mr-1{margin-right:0.25rem}.ml-2{margin-left:0.5rem}.mt-10{margin-top:2.5rem}.-mt-12{margin-top:-3rem}.-mr-12{margin-right:-3rem}.-mt-10{margin-top:-2.5rem}.-ml-10{margin-left:-2.5rem}.mb-8{margin-bottom:2rem}.mt-2{margin-top:0.5rem}.ml-3{margin-left:0.75rem}.mr-3{margin-right:0.75rem}.mb-2{margin-bottom:0.5rem}.mb-6{margin-bottom:1.5rem}.-mt-2{margin-top:-0.5rem}.mt-5{margin-top:1.25rem}.box-content{box-sizing:content-box}.block{display:block}.flex{display:flex}.grid{display:grid}.hidden{display:none}.h-full{height:100%}.h-10{height:2.5rem}.h-4{height:1rem}.h-1\.5{height:0.375rem}.h-5{height:1.25rem}.h-6{height:1.5rem}.h-9{height:2.25rem}.h-32{height:8rem}.h-20{height:5rem}.h-auto{height:auto}.h-2{height:0.5rem}.h-0\.5{height:0.125rem}.h-8{height:2rem}.h-1{height:0.25rem}.h-0{height:0px}.min-h-screen{min-height:100vh}.w-full{width:100%}.w-10{width:2.5rem}.w-4{width:1rem}.w-1\/2{width:50%}.w-32{width:8rem}.w-auto{width:auto}.w-6{width:1.5rem}.w-5{width:1.25rem}.w-9{width:2.25rem}.w-20{width:5rem}.w-3{width:0.75rem}.w-3\/4{width:75%}.w-8{width:2rem}.max-w-7xl{max-width:80rem}.max-w-sm{max-width:24rem}.max-w-4xl{max-width:56rem}.flex-1{flex:1 1 0%}.flex-shrink-0{flex-shrink:0}.-translate-y-1\/2{--tw-translate-y:-50%;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.translate-y-1{--tw-translate-y:0.25rem;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.translate-y-0{--tw-translate-y:0px;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.rotate-6{--tw-rotate:6deg;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.transform{transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.cursor-pointer{cursor:pointer}.select-none{-webkit-user-select:none;user-select:none}.appearance-none{-webkit-appearance:none;appearance:none}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-start{justify-content:flex-start}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.gap-8{gap:2rem}.gap-10{gap:2.5rem}.space-y-2 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(0.5rem * var(--tw-space-y-reverse))}.space-x-1 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(0.25rem * var(--tw-space-x-reverse));margin-left:calc(0.25rem * calc(1 - var(--tw-space-x-reverse)))}.space-x-4 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(1rem * var(--tw-space-x-reverse));margin-left:calc(1rem * calc(1 - var(--tw-space-x-reverse)))}.space-y-8 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(2rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(2rem * var(--tw-space-y-reverse))}.space-y-5 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(1.25rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(1.25rem * var(--tw-space-y-reverse))}.space-x-6 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(1.5rem * var(--tw-space-x-reverse));margin-left:calc(1.5rem * calc(1 - var(--tw-space-x-reverse)))}.space-y-12 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(3rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(3rem * var(--tw-space-y-reverse))}.divide-x-0 > :not([hidden]) ~ :not([hidden]){--tw-divide-x-reverse:0;border-right-width:calc(0px * var(--tw-divide-x-reverse));border-left-width:calc(0px * calc(1 - var(--tw-divide-x-reverse)))}.divide-gray-800 > :not([hidden]) ~ :not([hidden]){--tw-divide-opacity:1;border-color:rgb(31 41 55 / var(--tw-divide-opacity))}.overflow-hidden{overflow:hidden}.overflow-x-hidden{overflow-x:hidden}.rounded{border-radius:0.25rem}.rounded-xl{border-radius:0.75rem}.rounded-lg{border-radius:0.5rem}.rounded-md{border-radius:0.375rem}.rounded-full{border-radius:9999px}.border{border-width:1px}.border-2{border-width:2px}.border-t{border-top-width:1px}.border-solid{border-style:solid}.border-gray-800{--tw-border-opacity:1;border-color:rgb(31 41 55 / var(--tw-border-opacity))}.border-transparent{border-color:transparent}.border-gray-700{--tw-border-opacity:1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.border-gray-200{--tw-border-opacity:1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-indigo-500{--tw-border-opacity:1;border-color:rgb(99 102 241 / var(--tw-border-opacity))}.border-gray-100{--tw-border-opacity:1;border-color:rgb(243 244 246 / var(--tw-border-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.bg-green-400{--tw-bg-opacity:1;background-color:rgb(74 222 128 / var(--tw-bg-opacity))}.bg-red-500{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.bg-yellow-400{--tw-bg-opacity:1;background-color:rgb(250 204 21 / var(--tw-bg-opacity))}.bg-indigo-500{--tw-bg-opacity:1;background-color:rgb(99 102 241 / var(--tw-bg-opacity))}.bg-pink-400{--tw-bg-opacity:1;background-color:rgb(244 114 182 / var(--tw-bg-opacity))}.bg-transparent{background-color:transparent}.bg-blue-600{--tw-bg-opacity:1;background-color:rgb(37 99 235 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-black{--tw-bg-opacity:1;background-color:rgb(0 0 0 / var(--tw-bg-opacity))}.bg-gray-800{--tw-bg-opacity:1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.bg-gray-700{--tw-bg-opacity:1;background-color:rgb(55 65 81 / var(--tw-bg-opacity))}.bg-blue-500{--tw-bg-opacity:1;background-color:rgb(59 130 246 / var(--tw-bg-opacity))}.bg-opacity-25{--tw-bg-opacity:0.25}.bg-opacity-10{--tw-bg-opacity:0.1}.bg-opacity-100{--tw-bg-opacity:1}.bg-none{background-image:none}.bg-gradient-to-tr{background-image:linear-gradient(to top right, var(--tw-gradient-stops))}.bg-gradient-to-tl{background-image:linear-gradient(to top left, var(--tw-gradient-stops))}.bg-gradient-to-br{background-image:linear-gradient(to bottom right, var(--tw-gradient-stops))}.bg-gradient-to-b{background-image:linear-gradient(to bottom, var(--tw-gradient-stops))}.bg-gradient-to-r{background-image:linear-gradient(to right, var(--tw-gradient-stops))}.from-gray-900{--tw-gradient-from:#111827;--tw-gradient-to:rgb(17 24 39 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.from-gray-800{--tw-gradient-from:#1f2937;--tw-gradient-to:rgb(31 41 55 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.from-transparent{--tw-gradient-from:transparent;--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.from-indigo-500{--tw-gradient-from:#6366f1;--tw-gradient-to:rgb(99 102 241 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.from-yellow-500{--tw-gradient-from:#eab308;--tw-gradient-to:rgb(234 179 8 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-gray-900{--tw-gradient-to:rgb(17 24 39 / 0);--tw-gradient-stops:var(--tw-gradient-from), #111827, var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.to-black{--tw-gradient-to:#000}.to-gray-900{--tw-gradient-to:#111827}.to-red-500{--tw-gradient-to:#ef4444}.fill-current{fill:currentColor}.object-cover{object-fit:cover}.object-center{object-position:center}.p-3{padding:0.75rem}.p-10{padding:2.5rem}.px-10{padding-left:2.5rem;padding-right:2.5rem}.py-3{padding-top:0.75rem;padding-bottom:0.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-5{padding-left:1.25rem;padding-right:1.25rem}.py-16{padding-top:4rem;padding-bottom:4rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-7{padding-top:1.75rem;padding-bottom:1.75rem}.px-2{padding-left:0.5rem;padding-right:0.5rem}.py-1{padding-top:0.25rem;padding-bottom:0.25rem}.py-12{padding-top:3rem;padding-bottom:3rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-8{padding-left:2rem;padding-right:2rem}.px-3{padding-left:0.75rem;padding-right:0.75rem}.py-20{padding-top:5rem;padding-bottom:5rem}.py-8{padding-top:2rem;padding-bottom:2rem}.pb-10{padding-bottom:2.5rem}.pt-6{padding-top:1.5rem}.pr-0{padding-right:0px}.pr-5{padding-right:1.25rem}.pt-20{padding-top:5rem}.pb-32{padding-bottom:8rem}.pb-14{padding-bottom:3.5rem}.pt-10{padding-top:2.5rem}.text-left{text-align:left}.text-center{text-align:center}.align-middle{vertical-align:middle}.text-lg{font-size:1.125rem;line-height:1.75rem}.text-base{font-size:1rem;line-height:1.5rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-5xl{font-size:3rem;line-height:1}.text-xs{font-size:0.75rem;line-height:1rem}.text-4xl{font-size:2.25rem;line-height:2.5rem}.text-2xl{font-size:1.5rem;line-height:2rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-3xl{font-size:1.875rem;line-height:2.25rem}.font-semibold{font-weight:600}.font-normal{font-weight:400}.font-bold{font-weight:700}.font-black{font-weight:900}.font-medium{font-weight:500}.uppercase{text-transform:uppercase}.capitalize{text-transform:capitalize}.leading-5{line-height:1.25rem}.leading-none{line-height:1}.leading-normal{line-height:1.5}.tracking-widest{letter-spacing:0.1em}.tracking-tighter{letter-spacing:-0.05em}.tracking-tight{letter-spacing:-0.025em}.tracking-wider{letter-spacing:0.05em}.text-gray-200{--tw-text-opacity:1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-red-500{--tw-text-opacity:1;color:rgb(239 68 68 / var(--tw-text-opacity))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity:1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-blue-500{--tw-text-opacity:1;color:rgb(59 130 246 / var(--tw-text-opacity))}.text-blue-200{--tw-text-opacity:1;color:rgb(191 219 254 / var(--tw-text-opacity))}.text-blue-400{--tw-text-opacity:1;color:rgb(96 165 250 / var(--tw-text-opacity))}.text-blue-600{--tw-text-opacity:1;color:rgb(37 99 235 / var(--tw-text-opacity))}.text-indigo-500{--tw-text-opacity:1;color:rgb(99 102 241 / var(--tw-text-opacity))}.text-indigo-900{--tw-text-opacity:1;color:rgb(49 46 129 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-100{--tw-text-opacity:1;color:rgb(243 244 246 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-green-400{--tw-text-opacity:1;color:rgb(74 222 128 / var(--tw-text-opacity))}.text-gray-800{--tw-text-opacity:1;color:rgb(31 41 55 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-indigo-600{--tw-text-opacity:1;color:rgb(79 70 229 / var(--tw-text-opacity))}.no-underline{-webkit-text-decoration-line:none;text-decoration-line:none}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.opacity-100{opacity:1}.opacity-10{opacity:0.1}.opacity-25{opacity:0.25}.opacity-50{opacity:0.5}.opacity-70{opacity:0.7}.opacity-30{opacity:0.3}.opacity-0{opacity:0}.shadow-xl{--tw-shadow:0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 20px 25px -5px var(--tw-shadow-color), 0 8px 10px -6px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-lg{--tw-shadow:0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);--tw-shadow-colored:0 10px 15px -3px var(--tw-shadow-color), 0 4px 6px -4px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.ring-black{--tw-ring-opacity:1;--tw-ring-color:rgb(0 0 0 / var(--tw-ring-opacity))}.ring-opacity-5{--tw-ring-opacity:0.05}.transition{transition-property:color, background-color, border-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-text-decoration-color, -webkit-backdrop-filter;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.duration-100{transition-duration:100ms}.duration-150{transition-duration:150ms}.duration-500{transition-duration:500ms}.duration-200{transition-duration:200ms}.ease-out{transition-timing-function:cubic-bezier(0, 0, 0.2, 1)}.ease-in-out{transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1)}.ease-in{transition-timing-function:cubic-bezier(0.4, 0, 1, 1)}.focus-within\:border-blue-700:focus-within{--tw-border-opacity:1;border-color:rgb(29 78 216 / var(--tw-border-opacity))}.focus-within\:bg-blue-700:focus-within{--tw-bg-opacity:1;background-color:rgb(29 78 216 / var(--tw-bg-opacity))}.hover\:border-blue-700:hover{--tw-border-opacity:1;border-color:rgb(29 78 216 / var(--tw-border-opacity))}.hover\:bg-gray-800:hover{--tw-bg-opacity:1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.hover\:bg-gray-900:hover{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.hover\:bg-blue-700:hover{--tw-bg-opacity:1;background-color:rgb(29 78 216 / var(--tw-bg-opacity))}.hover\:text-gray-100:hover{--tw-text-opacity:1;color:rgb(243 244 246 / var(--tw-text-opacity))}.hover\:text-gray-200:hover{--tw-text-opacity:1;color:rgb(229 231 235 / var(--tw-text-opacity))}.hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.hover\:underline:hover{-webkit-text-decoration-line:underline;text-decoration-line:underline}.focus\:text-gray-100:focus{--tw-text-opacity:1;color:rgb(243 244 246 / var(--tw-text-opacity))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.group:hover .group-hover\:scale-110{--tw-scale-x:1.1;--tw-scale-y:1.1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.group:hover .group-hover\:opacity-100{opacity:1}@media (min-width: 640px){.sm\:order-last{order:9999}.sm\:col-span-1{grid-column:span 1 / span 1}.sm\:row-start-2{grid-row-start:2}.sm\:row-start-4{grid-row-start:4}.sm\:row-start-6{grid-row-start:6}.sm\:row-start-1{grid-row-start:1}.sm\:row-start-3{grid-row-start:3}.sm\:row-start-5{grid-row-start:5}.sm\:mb-0{margin-bottom:0px}.sm\:-mb-32{margin-bottom:-8rem}.sm\:w-auto{width:auto}.sm\:w-1\/2{width:50%}.sm\:max-w-3xl{max-width:48rem}.sm\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.sm\:flex-row{flex-direction:row}.sm\:pt-24{padding-top:6rem}.sm\:pb-32{padding-bottom:8rem}.sm\:pr-8{padding-right:2rem}.sm\:pr-4{padding-right:1rem}.sm\:pr-16{padding-right:4rem}.sm\:pl-16{padding-left:4rem}.sm\:text-left{text-align:left}.sm\:text-3xl{font-size:1.875rem;line-height:2.25rem}.sm\:text-4xl{font-size:2.25rem;line-height:2.5rem}}@media (min-width: 768px){.md\:col-span-1{grid-column:span 1 / span 1}.md\:col-start-1{grid-column-start:1}.md\:col-start-2{grid-column-start:2}.md\:col-start-3{grid-column-start:3}.md\:row-start-3{grid-row-start:3}.md\:row-start-5{grid-row-start:5}.md\:row-start-2{grid-row-start:2}.md\:row-start-4{grid-row-start:4}.md\:row-start-1{grid-row-start:1}.md\:mx-0{margin-left:0px;margin-right:0px}.md\:mt-0{margin-top:0px}.md\:-mb-24{margin-bottom:-6rem}.md\:mb-2{margin-bottom:0.5rem}.md\:mb-0{margin-bottom:0px}.md\:block{display:block}.md\:flex{display:flex}.md\:hidden{display:none}.md\:w-96{width:24rem}.md\:w-48{width:12rem}.md\:w-1\/2{width:50%}.md\:w-3\/4{width:75%}.md\:w-5\/12{width:41.666667%}.md\:w-7\/12{width:58.333333%}.md\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.md\:flex-row{flex-direction:row}.md\:items-center{align-items:center}.md\:justify-center{justify-content:center}.md\:justify-between{justify-content:space-between}.md\:space-x-6 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(1.5rem * var(--tw-space-x-reverse));margin-left:calc(1.5rem * calc(1 - var(--tw-space-x-reverse)))}.md\:space-y-0 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(0px * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(0px * var(--tw-space-y-reverse))}.md\:space-x-3 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(0.75rem * var(--tw-space-x-reverse));margin-left:calc(0.75rem * calc(1 - var(--tw-space-x-reverse)))}.md\:divide-x > :not([hidden]) ~ :not([hidden]){--tw-divide-x-reverse:0;border-right-width:calc(1px * var(--tw-divide-x-reverse));border-left-width:calc(1px * calc(1 - var(--tw-divide-x-reverse)))}.md\:bg-gray-800{--tw-bg-opacity:1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.md\:py-3{padding-top:0.75rem;padding-bottom:0.75rem}.md\:px-8{padding-left:2rem;padding-right:2rem}.md\:py-20{padding-top:5rem;padding-bottom:5rem}.md\:px-0{padding-left:0px;padding-right:0px}.md\:pb-6{padding-bottom:1.5rem}.md\:pr-3{padding-right:0.75rem}.md\:pt-32{padding-top:8rem}.md\:pb-40{padding-bottom:10rem}.md\:pr-12{padding-right:3rem}.md\:text-left{text-align:left}.md\:text-center{text-align:center}.md\:text-xl{font-size:1.25rem;line-height:1.75rem}.md\:text-sm{font-size:0.875rem;line-height:1.25rem}.md\:text-2xl{font-size:1.5rem;line-height:2rem}.md\:text-5xl{font-size:3rem;line-height:1}.md\:text-4xl{font-size:2.25rem;line-height:2.5rem}.md\:font-medium{font-weight:500}.md\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}}@media (min-width: 1024px){.lg\:absolute{position:absolute}.lg\:left-1\/2{left:50%}.lg\:col-span-2{grid-column:span 2 / span 2}.lg\:-ml-48{margin-left:-12rem}.lg\:-ml-24{margin-left:-6rem}.lg\:-mb-36{margin-bottom:-9rem}.lg\:grid-cols-12{grid-template-columns:repeat(12, minmax(0, 1fr))}.lg\:gap-20{gap:5rem}.lg\:space-x-10 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(2.5rem * var(--tw-space-x-reverse));margin-left:calc(2.5rem * calc(1 - var(--tw-space-x-reverse)))}.lg\:space-x-3 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(0.75rem * var(--tw-space-x-reverse));margin-left:calc(0.75rem * calc(1 - var(--tw-space-x-reverse)))}.lg\:space-x-8 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(2rem * var(--tw-space-x-reverse));margin-left:calc(2rem * calc(1 - var(--tw-space-x-reverse)))}.lg\:divide-x-0 > :not([hidden]) ~ :not([hidden]){--tw-divide-x-reverse:0;border-right-width:calc(0px * var(--tw-divide-x-reverse));border-left-width:calc(0px * calc(1 - var(--tw-divide-x-reverse)))}.lg\:rounded-lg{border-radius:0.5rem}.lg\:pr-0{padding-right:0px}.lg\:text-6xl{font-size:3.75rem;line-height:1}.lg\:text-xl{font-size:1.25rem;line-height:1.75rem}.lg\:text-3xl{font-size:1.875rem;line-height:2.25rem}.lg\:opacity-80{opacity:0.8}}@media (min-width: 1280px){.xl\:col-start-2{grid-column-start:2}.xl\:col-start-3{grid-column-start:3}.xl\:col-start-4{grid-column-start:4}.xl\:row-start-2{grid-row-start:2}.xl\:row-start-4{grid-row-start:4}.xl\:row-start-1{grid-row-start:1}.xl\:row-start-3{grid-row-start:3}.xl\:-mb-28{margin-bottom:-7rem}.xl\:grid-cols-4{grid-template-columns:repeat(4, minmax(0, 1fr))}.xl\:space-x-16 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(4rem * var(--tw-space-x-reverse));margin-left:calc(4rem * calc(1 - var(--tw-space-x-reverse)))}.xl\:px-12{padding-left:3rem;padding-right:3rem}.xl\:pr-20{padding-right:5rem}.xl\:text-7xl{font-size:4.5rem;line-height:1}}</style>    <link rel="stylesheet" href="">
</head>
<body>
    <section class="relative overflow-hidden" data-tails-scripts="//unpkg.com/alpinejs">

    <div class="flex">
        <div class="flex-1 h-1.5 bg-green-400"></div>
        <div class="flex-1 h-1.5 bg-red-500"></div>
        <div class="flex-1 h-1.5 bg-yellow-400"></div>
        <div class="flex-1 h-1.5 bg-indigo-500"></div>
        <div class="flex-1 h-1.5 bg-pink-400"></div>
    </div>

    <!-- Background Layer -->
    <div class="absolute z-10 w-1/2 h-full bg-gradient-to-tr from-gray-900 via-gray-900 to-black">
        <div class="absolute right-0 w-32 h-full -mr-20 transform bg-white bg-opacity-25 opacity-10 rotate-6"></div>
    </div>
    <div class="absolute z-20 w-1/2 h-full bg-gradient-to-tl left-1/2 from-gray-900 via-gray-900 to-black">
        <div class="absolute left-0 w-full h-full bg-white opacity-25 bg-opacity-10"></div>
    </div>
    <!-- End Background Layer -->

    <nav x-data="{ mobile: false }" class="relative z-40 px-10 pt-6 mx-auto md:pb-6 max-w-7xl md:flex md:justify-between md:items-center">
        <div class="relative z-20 flex items-center justify-between">
            <div>
                <a href="#_" class="text-lg font-semibold text-white md:text-xl">
                    <svg class="w-auto h-5 -mt-1 text-white fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 115 50"><defs></defs><path fill-rule="nonzero" d="M.41 44.531c0-.097.005-.23.015-.395.01-.166.034-.45.073-.85.04-.4.098-.947.176-1.64.078-.694.195-1.607.351-2.74l2.49-19.13H0l.674-2.901 3.574-1.377c.39-.371.781-.854 1.172-1.45.39-.596.776-1.245 1.157-1.948.381-.704.742-1.436 1.084-2.198.342-.761.66-1.494.952-2.197h4.307l-.967 7.647h6.797l-.645 4.423h-6.709L8.965 37.764a61.138 61.138 0 00-.352 2.666 18.603 18.603 0 00-.117 1.904c0 .937.161 1.592.483 1.963.323.371.923.557 1.802.557.371 0 .791-.054 1.26-.162a11.004 11.004 0 002.783-1.054c.45-.244.85-.503 1.201-.777l.645 2.315c-.39.469-.933.971-1.626 1.509a14.356 14.356 0 01-2.432 1.494c-.927.459-1.958.84-3.09 1.142a13.788 13.788 0 01-3.575.454 8.546 8.546 0 01-2.08-.249 4.623 4.623 0 01-1.772-.864c-.518-.41-.928-.952-1.23-1.626-.303-.674-.455-1.509-.455-2.505zm20.098-7.236c0-1.719.19-3.462.571-5.23.381-1.767.942-3.471 1.685-5.112a23.316 23.316 0 012.768-4.614 19.204 19.204 0 013.838-3.765 17.989 17.989 0 014.863-2.534c1.788-.615 3.746-.923 5.874-.923 1.094 0 2.227.122 3.399.366 1.172.245 2.197.503 3.076.777l4.014-1.143-3.809 27.95c-.098.8-.034 1.371.19 1.713.225.342.503.513.836.513.273 0 .615-.088 1.025-.264.41-.175.957-.537 1.64-1.084l.88 1.875c-.137.235-.42.572-.85 1.011-.43.44-.967.879-1.612 1.318a10.7 10.7 0 01-2.24 1.143 7.744 7.744 0 01-2.77.483c-1.366 0-2.46-.322-3.28-.966-.82-.645-1.202-1.641-1.143-2.989l-.234-.38a17.32 17.32 0 01-1.729 1.61c-.645.528-1.338.992-2.08 1.392-.742.4-1.543.723-2.402.967a9.925 9.925 0 01-2.725.366c-1.738 0-3.228-.322-4.468-.966a8.414 8.414 0 01-3.047-2.652c-.79-1.123-1.367-2.446-1.728-3.97-.362-1.523-.542-3.154-.542-4.892zm12.568 7.793c.567 0 1.133-.103 1.7-.308a7.645 7.645 0 001.64-.835 10.88 10.88 0 001.494-1.2c.469-.45.908-.91 1.319-1.378l2.93-22.002a6.166 6.166 0 00-1.363-.322 12.166 12.166 0 00-1.48-.088c-1.27 0-2.412.264-3.427.791a9.02 9.02 0 00-2.696 2.153 13.305 13.305 0 00-1.992 3.15 23.552 23.552 0 00-1.347 3.764 29.267 29.267 0 00-.777 4.043 32.962 32.962 0 00-.249 3.94c0 2.618.357 4.654 1.07 6.11.712 1.454 1.772 2.182 3.178 2.182zm24.346.527c.137-1.172.322-2.593.557-4.262.234-1.67.502-3.555.805-5.655.303-2.1.63-4.4.982-6.9.351-2.5.722-5.155 1.113-7.968l-3.78-1.7.47-2.49 10.458-1.523 1.553.703-3.896 27.246c-.215 1.485.068 2.227.85 2.227.331 0 .712-.117 1.142-.352.43-.234 1.015-.664 1.758-1.289l.85 1.905c-.157.214-.455.556-.894 1.025-.44.469-1.001.938-1.685 1.406-.684.469-1.48.884-2.388 1.245-.908.362-1.919.542-3.032.542-1.7 0-2.973-.356-3.823-1.069-.85-.713-1.196-1.743-1.04-3.09zm8.877-36.27a3.703 3.703 0 01-1.597-.35 4.504 4.504 0 01-1.318-.938c-.381-.391-.679-.84-.894-1.348a4.02 4.02 0 01-.322-1.582 5.47 5.47 0 01.425-1.992 5.172 5.172 0 011.07-1.626c.448-.46.98-.825 1.596-1.099A4.885 4.885 0 0167.266 0c.683 0 1.294.112 1.83.337.538.225.997.527 1.378.908.38.381.669.816.864 1.304.195.488.293.996.293 1.523a6.395 6.395 0 01-.381 2.022 4.746 4.746 0 01-1.04 1.684 5.076 5.076 0 01-1.67 1.143c-.654.283-1.401.425-2.241.425zm9.756 36.475c0-.312.024-.693.073-1.142.049-.45.093-.82.132-1.114l5.185-37.793-3.75-1.26.586-2.43L88.331.85l1.464.79-5.625 41.426c-.098.684-.078 1.226.059 1.626.136.4.4.601.79.601.294 0 .645-.103 1.055-.308.41-.205 1.026-.64 1.846-1.303l.85 1.875c-.137.214-.42.556-.85 1.025-.43.469-.977.938-1.64 1.406-.665.469-1.436.884-2.315 1.245-.88.362-1.846.542-2.9.542a8.334 8.334 0 01-1.963-.22 4.66 4.66 0 01-1.582-.688 3.386 3.386 0 01-1.07-1.216c-.263-.498-.395-1.108-.395-1.83zm15.527 2.051l1.26-5.244c.312.273.732.576 1.26.908.527.332 1.132.645 1.816.938.684.293 1.426.537 2.227.732.8.195 1.64.293 2.52.293.565 0 1.156-.054 1.772-.161a4.938 4.938 0 001.67-.6 3.573 3.573 0 001.23-1.216c.322-.518.483-1.177.483-1.978 0-.684-.136-1.318-.41-1.904a7.19 7.19 0 00-1.113-1.685 13.066 13.066 0 00-1.67-1.582 44.345 44.345 0 00-2.08-1.567c-.606-.43-1.25-.952-1.934-1.568a13.21 13.21 0 01-1.904-2.153 11.898 11.898 0 01-1.45-2.754c-.381-1.016-.572-2.148-.572-3.398 0-1.465.318-2.798.953-4a9.531 9.531 0 012.636-3.105c1.123-.869 2.461-1.538 4.014-2.007 1.553-.468 3.237-.703 5.054-.703.8 0 1.596.034 2.387.103.791.068 1.529.156 2.212.263.684.108 1.285.225 1.802.352.518.127.903.249 1.157.366l-1.2 5.537c-.138-.176-.382-.41-.733-.703a7.497 7.497 0 00-1.348-.864 10.425 10.425 0 00-1.875-.733 8.243 8.243 0 00-2.314-.307c-.606 0-1.202.063-1.787.19a4.927 4.927 0 00-1.582.63c-.47.293-.85.67-1.143 1.128-.293.46-.46 1.03-.498 1.714a4.54 4.54 0 00.278 1.89c.225.595.557 1.167.996 1.713.44.547.972 1.09 1.597 1.626a40.865 40.865 0 002.11 1.685c.8.606 1.572 1.235 2.314 1.89a13.727 13.727 0 011.977 2.153c.577.781 1.04 1.65 1.392 2.607.352.957.527 2.051.527 3.282 0 1.699-.356 3.178-1.07 4.438a9.732 9.732 0 01-2.856 3.164c-1.19.85-2.573 1.485-4.145 1.905-1.572.42-3.208.63-4.907.63-.918 0-1.856-.06-2.813-.176a27.8 27.8 0 01-2.68-.454c-.83-.186-1.563-.391-2.198-.616-.634-.224-1.089-.444-1.362-.659z" class=""></path></svg>
                </a>
            </div>

            <!-- Mobile menu button -->
            <div @click="mobile = !mobile" class="flex md:hidden">
                <button type="button" class="text-gray-200 hover:text-gray-100 focus:outline-none focus:text-gray-100" aria-label="toggle menu">
                    <svg viewBox="0 0 24 24" class="w-6 h-6 fill-current">
                        <path fill-rule="evenodd" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z">
                        </path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div :class="{ 'hidden' : !mobile, 'flex': mobile }" class="left-0 z-10 items-center justify-center w-full font-semibold select-none md:flex lg:absolute hidden">
            <div class="flex flex-col justify-center w-full mt-4 space-y-2 md:mt-0 md:flex-row md:space-x-6 lg:space-x-10 xl:space-x-16 md:space-y-0">
                <div x-data="{ isOpen: false }" @mouseenter="isOpen = true" @mouseleave="isOpen = false" class="relative py-3">
                    <div class="relative z-10 flex items-center space-x-1 text-gray-300 cursor-pointer lg:space-x-3 hover:text-gray-100 focus:outline-none">
                        <span class="">Product</span>
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </div>

                    <div x-show="isOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute left-0 z-20 z-30 w-full p-3 mt-3 -ml-0 space-y-2 overflow-hidden transform shadow-lg bg-gradient-to-br from-gray-800 to-gray-900 lg:left-1/2 lg:-ml-48 md:w-96 rounded-xl ring-1 ring-black ring-opacity-5" data-rounded="rounded-xl" data-rounded-max="rounded-full" style="display: none;">

                        <a href="#_" class="block px-4 py-3 pr-0 text-base text-gray-200 cursor-pointer hover:bg-gray-900 rounded-xl hover:text-gray-100" data-rounded="rounded-xl">
                            <span class="flex items-start space-x-1 md:space-x-3">
                                <svg class="flex-shrink-0 mt-1 text-blue-500 w-9 h-9" data-primary="blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z"></path>
                                </svg>
                                <span class="flex flex-col">
                                    <span class="">Drag'n Drop</span>
                                    <span class="text-sm font-normal text-gray-300">Simple drag'n drop tailwind page creator.</span>
                                </span>
                            </span>
                        </a>
                        <a href="#_" class="block px-4 py-3 pr-0 text-base text-gray-200 cursor-pointer hover:bg-gray-900 rounded-xl hover:text-gray-100" data-rounded="rounded-xl">
                            <span class="flex items-start space-x-4">
                                <svg class="flex-shrink-0 mt-1 text-blue-500 w-9 h-9" data-primary="blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                </svg>
                                <span class="flex flex-col">
                                    <span class="">Premium Tools</span>
                                    <span class="text-sm font-normal text-gray-300">Gain access to the ultimate set of tools.</span>
                                </span>
                            </span>
                        </a>
                        <a href="#_" class="block px-4 py-3 pr-0 text-base text-gray-200 cursor-pointer hover:bg-gray-900 rounded-xl hover:text-gray-100" data-rounded="rounded-xl">
                            <span class="flex items-start space-x-4">
                                <svg class="flex-shrink-0 mt-1 text-blue-500 w-9 h-9" data-primary="blue-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                                </svg>
                                <span class="flex flex-col">
                                    <span class="">Community</span>
                                    <span class="text-sm font-normal text-gray-300">A community of creators like yourself.</span>
                                </span>
                            </span>
                        </a>
                    </div>
                </div>
                <a href="#_" class="py-3 text-gray-300 hover:text-gray-100 hover:underline">Pricing</a>
                <div x-data="{ isOpen: false }" @mouseenter="isOpen = true" @mouseleave="isOpen = false" class="relative py-3">
                    <div class="relative z-10 flex items-center space-x-1 text-gray-300 cursor-pointer lg:space-x-3 hover:text-gray-200 focus:outline-none">
                        <span class="">Features</span>
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" class=""></path>
                        </svg>
                    </div>

                    <div x-show="isOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute left-0 z-20 z-30 w-full p-3 mt-3 -ml-0 space-y-2 overflow-hidden transform shadow-lg bg-gradient-to-br from-gray-800 to-gray-900 lg:left-1/2 lg:-ml-24 md:w-48 rounded-xl ring-1 ring-black ring-opacity-5" data-rounded="rounded-xl" data-rounded-max="rounded-full" style="display: none;">

                        <a href="#_" class="block px-4 py-3 text-sm text-gray-200 capitalize cursor-pointer hover:bg-gray-900 rounded-xl hover:text-gray-200" data-rounded="rounded-xl">
                            Design Faster
                        </a>
                        <a href="#_" class="block px-4 py-3 text-sm text-gray-200 capitalize hover:bg-gray-900 rounded-xl hover:text-gray-200" data-rounded="rounded-xl">
                            Easily Export
                        </a>
                        <a href="#_" class="block px-4 py-3 text-sm text-gray-200 capitalize hover:bg-gray-900 rounded-xl hover:text-gray-200" data-rounded="rounded-xl">
                            Unlimited Combos
                        </a>
                        <a href="#_" class="block px-4 py-3 text-sm text-gray-200 capitalize hover:bg-gray-900 rounded-xl hover:text-gray-200" data-rounded="rounded-xl">
                            And More
                        </a>
                    </div>
                </div>
                <div x-data="{ isOpen: false }" @mouseenter="isOpen = true" @mouseleave="isOpen = false" class="relative py-3">
                    <div class="relative z-10 flex items-center space-x-1 text-gray-300 cursor-pointer lg:space-x-3 hover:text-gray-100 focus:outline-none">
                        <span class="">Resources</span>
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                        </svg>
                    </div>

                    <div x-show="isOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 translate-y-1" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 translate-y-1" class="absolute left-0 z-20 z-30 w-full p-3 mt-3 -ml-0 space-y-2 overflow-hidden transform shadow-lg bg-gradient-to-br from-gray-800 to-gray-900 lg:-ml-24 lg:left-1/2 md:w-48 rounded-xl ring-1 ring-black ring-opacity-5" data-rounded="rounded-xl" data-rounded-max="rounded-full" style="display: none;">

                        <a href="#_" class="block px-4 py-3 text-sm text-gray-200 capitalize cursor-pointer hover:bg-gray-900 rounded-xl hover:text-gray-100" data-rounded="rounded-xl">
                            About Us
                        </a>
                        <a href="#_" class="block px-4 py-3 text-sm text-gray-200 capitalize hover:bg-gray-900 rounded-xl hover:text-gray-100" data-rounded="rounded-xl">
                            Press Release
                        </a>
                        <a href="#_" class="block px-4 py-3 text-sm text-gray-200 capitalize hover:bg-gray-900 rounded-xl hover:text-gray-100" data-rounded="rounded-xl">
                            Contact Us
                        </a>
                        <a href="#_" class="block px-4 py-3 text-sm text-gray-200 capitalize hover:bg-gray-900 rounded-xl hover:text-gray-100" data-rounded="rounded-xl">
                            Our Blog
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div :class="{ 'flex' : mobile, 'hidden md:flex' : !mobile }" class="relative z-20 flex-col justify-center pr-5 mt-4 space-y-8 md:pr-3 lg:pr-0 md:flex-row md:space-y-0 md:items-center md:space-x-6 md:mt-0 hidden md:flex">
            <a class="flex-shrink-0 font-semibold text-gray-200 hover:underline" href="login">Sign in</a>

            <a href="register" class="flex-shrink-0 w-auto text-base font-semibold leading-5 text-left text-gray-200 capitalize bg-transparent rounded-lg md:text-sm md:py-3 md:px-8 md:font-medium md:text-center md:text-white md:bg-gray-800 md:mx-0" data-rounded="" data-primary="gray-900">
                Sign up
            </a>
        </div>
    </nav>


    <div class="relative z-30 flex flex-col px-10 pt-20 pb-32 mx-auto md:flex-row sm:pt-24 sm:pb-32 md:pt-32 md:pb-40 max-w-7xl">
        <div class="flex flex-col items-start justify-center w-full space-y-8 md:w-1/2 sm:pr-8 xl:pr-20">
            <h1 class="text-5xl font-bold text-white lg:text-6xl xl:text-7xl">Get more leads, get more sales.</h1>
            <p class="text-base text-blue-200 lg:text-xl">Start building the a landing page that converts your visitors into leads and your leads into customers. Use our templates to help your app grow.</p>
            <a href="#_" class="flex items-center w-full px-5 py-3 mb-3 mr-1 text-base font-semibold text-white no-underline align-middle bg-blue-600 border border-transparent border-solid rounded-md cursor-pointer select-none sm:mb-0 sm:w-auto hover:bg-blue-700 hover:border-blue-700 hover:text-white focus-within:bg-blue-700 focus-within:border-blue-700" data-rounded="rounded-md" data-primary="blue-600">
                Get Started Today
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" class=""></path></svg>
            </a>
        </div>
        <div class="relative flex items-center justify-center w-full mt-10 md:mt-0 md:w-1/2">
            <svg class="absolute top-0 right-0 z-0 hidden w-32 h-32 -mt-12 -mr-12 text-blue-400 fill-current md:block" data-primary="yellow-500" viewBox="0 0 91 91" xmlns="http://www.w3.org/2000/svg"><g stroke="none" stroke-width="1" fill-rule="evenodd"><g fill-rule="nonzero"><g><g><circle cx="3.261" cy="3.445" r="2.72" class=""></circle><circle cx="15.296" cy="3.445" r="2.719"></circle><circle cx="27.333" cy="3.445" r="2.72" class=""></circle><circle cx="39.369" cy="3.445" r="2.72"></circle><circle cx="51.405" cy="3.445" r="2.72" class=""></circle><circle cx="63.441" cy="3.445" r="2.72"></circle><circle cx="75.479" cy="3.445" r="2.72" class=""></circle><circle cx="87.514" cy="3.445" r="2.719"></circle></g><g transform="translate(0 12)"><circle cx="3.261" cy="3.525" r="2.72" class=""></circle><circle cx="15.296" cy="3.525" r="2.719" class=""></circle><circle cx="27.333" cy="3.525" r="2.72" class=""></circle><circle cx="39.369" cy="3.525" r="2.72" class=""></circle><circle cx="51.405" cy="3.525" r="2.72"></circle><circle cx="63.441" cy="3.525" r="2.72"></circle><circle cx="75.479" cy="3.525" r="2.72"></circle><circle cx="87.514" cy="3.525" r="2.719" class=""></circle></g><g transform="translate(0 24)"><circle cx="3.261" cy="3.605" r="2.72" class=""></circle><circle cx="15.296" cy="3.605" r="2.719"></circle><circle cx="27.333" cy="3.605" r="2.72" class=""></circle><circle cx="39.369" cy="3.605" r="2.72"></circle><circle cx="51.405" cy="3.605" r="2.72"></circle><circle cx="63.441" cy="3.605" r="2.72"></circle><circle cx="75.479" cy="3.605" r="2.72" class=""></circle><circle cx="87.514" cy="3.605" r="2.719"></circle></g><g transform="translate(0 36)"><circle cx="3.261" cy="3.686" r="2.72"></circle><circle cx="15.296" cy="3.686" r="2.719"></circle><circle cx="27.333" cy="3.686" r="2.72"></circle><circle cx="39.369" cy="3.686" r="2.72"></circle><circle cx="51.405" cy="3.686" r="2.72"></circle><circle cx="63.441" cy="3.686" r="2.72"></circle><circle cx="75.479" cy="3.686" r="2.72"></circle><circle cx="87.514" cy="3.686" r="2.719"></circle></g><g transform="translate(0 49)"><circle cx="3.261" cy="2.767" r="2.72"></circle><circle cx="15.296" cy="2.767" r="2.719"></circle><circle cx="27.333" cy="2.767" r="2.72"></circle><circle cx="39.369" cy="2.767" r="2.72"></circle><circle cx="51.405" cy="2.767" r="2.72"></circle><circle cx="63.441" cy="2.767" r="2.72" class=""></circle><circle cx="75.479" cy="2.767" r="2.72"></circle><circle cx="87.514" cy="2.767" r="2.719"></circle></g><g transform="translate(0 61)"><circle cx="3.261" cy="2.846" r="2.72"></circle><circle cx="15.296" cy="2.846" r="2.719"></circle><circle cx="27.333" cy="2.846" r="2.72"></circle><circle cx="39.369" cy="2.846" r="2.72"></circle><circle cx="51.405" cy="2.846" r="2.72"></circle><circle cx="63.441" cy="2.846" r="2.72"></circle><circle cx="75.479" cy="2.846" r="2.72"></circle><circle cx="87.514" cy="2.846" r="2.719" class=""></circle></g><g transform="translate(0 73)"><circle cx="3.261" cy="2.926" r="2.72"></circle><circle cx="15.296" cy="2.926" r="2.719"></circle><circle cx="27.333" cy="2.926" r="2.72"></circle><circle cx="39.369" cy="2.926" r="2.72"></circle><circle cx="51.405" cy="2.926" r="2.72"></circle><circle cx="63.441" cy="2.926" r="2.72" class=""></circle><circle cx="75.479" cy="2.926" r="2.72"></circle><circle cx="87.514" cy="2.926" r="2.719" class=""></circle></g><g transform="translate(0 85)"><circle cx="3.261" cy="3.006" r="2.72"></circle><circle cx="15.296" cy="3.006" r="2.719"></circle><circle cx="27.333" cy="3.006" r="2.72"></circle><circle cx="39.369" cy="3.006" r="2.72"></circle><circle cx="51.405" cy="3.006" r="2.72"></circle><circle cx="63.441" cy="3.006" r="2.72"></circle><circle cx="75.479" cy="3.006" r="2.72"></circle><circle cx="87.514" cy="3.006" r="2.719" class=""></circle></g></g></g></g></svg>
            <div class="relative cursor-pointer group">
                <div class="absolute flex items-center justify-center w-20 h-20 -mt-10 -ml-10 transition duration-150 ease-in-out transform bg-white bg-opacity-100 rounded-full top-1/2 left-1/2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-3 h-auto text-blue-600 fill-current" viewBox="0 0 36 50"><defs></defs><path fill-rule="nonzero" d="M3.167.376A2.001 2.001 0 000 2v46a2.001 2.001 0 003.167 1.624l32-23a2 2 0 000-3.248l-32-23z"></path></svg>
                </div>
                <img src="https://cdn.devdojo.com/tails/images/j4pVmAHrsBEZTW9qvnqmy1WFW8aLkL9DR68pECCR.jpg" class="rounded-lg">
            </div>
        </div>
    </div>


    <div class="absolute bottom-0 left-0 z-20 w-full h-full overflow-x-hidden opacity-50 bg-gradient-to-b from-transparent via-transparent to-black"></div>

</section><section class="py-20 bg-white">
    <div class="flex flex-col px-8 mx-auto space-y-12 max-w-7xl xl:px-12">
        <div class="relative">
            <h2 class="w-full text-3xl font-bold text-center sm:text-4xl md:text-5xl">How It Works</h2>
            <p class="w-full py-8 mx-auto -mt-2 text-lg text-center text-gray-700 intro sm:max-w-3xl">Got something you want to make an ad for? We're here to help, here's how.</p><div>Tie in use case example here</div><p></p>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                <img class="rounded-lg shadow-xl" src="https://cdn.devdojo.com/images/december2020/dashboard-011.png" alt="" data-rounded="rounded-lg" data-rounded-max="rounded-full">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left text-indigo-600 uppercase" data-primary="indigo-600">Drag-n-drop design</p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">Design Made Easy</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left">Crafting your user experience has never been easier, with our intuitive drag'n drop interface you will be creating beatiful designs in no time.</p>
            </div>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12">
                <img class="rounded-lg shadow-xl" src="https://cdn.devdojo.com/images/december2020/dashboard-04.png" alt="" data-rounded="rounded-lg" data-rounded-max="rounded-full">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pl-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left text-indigo-600 uppercase" data-primary="indigo-600">know your data</p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">Optimized For Conversions</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left">Backed by data, these templates have been crafted for ultimate optimization. Now, converting your visitors into customers is easier than ever before.</p>
            </div>
        </div>
        <div class="flex flex-col mb-8 animated fadeIn sm:flex-row">
            <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                <img class="rounded-lg shadow-xl" src="https://cdn.devdojo.com/images/december2020/dashboard-03.png" alt="" data-rounded="rounded-lg" data-rounded-max="rounded-full">
            </div>
            <div class="flex flex-col justify-center mt-5 mb-8 md:mt-0 sm:w-1/2 md:w-7/12 sm:pr-16">
                <p class="mb-2 text-sm font-semibold leading-none text-left text-indigo-600 uppercase" data-primary="indigo-600">Easy to customize</p>
                <h3 class="mt-2 text-2xl sm:text-left md:text-4xl">Make It Your Own</h3>
                <p class="mt-5 text-lg text-gray-700 text md:text-left">All templates and components are fully customizable. You can use these templates to tell your personal story and convey your message.</p>
            </div>
        </div>

    </div>
</section><section class="relative px-10 py-16 overflow-hidden bg-gray-100">
    <img class="absolute left-0 z-0 w-3/4 transform -translate-y-1/2 opacity-70 top-1/2" src="https://cdn.devdojo.com/tails/images/gradient-blob.svg">
    <img class="absolute left-0 z-0 object-cover object-center w-full h-full opacity-50 top-24" src="https://cdn.devdojo.com/tails/images/swirl-white.svg">
    <div class="container relative z-10 px-4 mx-auto">
        <div class="w-full mb-8 sm:w-1/2 md:w-3/4 sm:pr-4 md:pr-12 sm:-mb-32 md:-mb-24 lg:-mb-36 xl:-mb-28">
            <h2 class="tracking-widest text-indigo-500 uppercase">Features</h2>
            <p class="my-3 text-5xl font-bold tracking-tighter text-indigo-900 lg:text-6xl">Product Use Cases</p>
            <p class="max-w-sm text-lg text-gray-500">Check out our awesome features including a beautiful dashboard, member management, integrations center, and much more.</p>
        </div>

        <div class="grid w-full grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4">
            <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-1 sm:row-start-2 md:row-start-3">
                <a href="#_" class="relative flex flex-col items-start justify-end w-full h-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                    <div class="absolute inset-0 w-full h-full">
                        <div class="absolute bottom-0 left-0 z-10 w-full h-full opacity-30 bg-gradient-to-b from-transparent to-gray-900"></div>
                        <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/beautiful-dashboard.jpeg" alt="">
                    </div>
                    <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                        <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-indigo-500 rounded-md">Pro</span>
                        <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">Beautiful Dashboard</h4>
                    </div>
                </a>
            </div>
            <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-1 xl:col-start-2 sm:row-start-4 md:row-start-5 xl:row-start-2">
                <a href="#_" class="relative flex flex-col items-start justify-end w-full h-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                    <div class="absolute inset-0 w-full h-full">
                        <div class="absolute bottom-0 left-0 z-10 w-full h-full opacity-30 bg-gradient-to-b from-transparent to-gray-900"></div>
                        <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/member-management.jpeg" alt="">
                    </div>
                    <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                        <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-indigo-500 rounded-md">Pro</span>
                        <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">Member Management</h4>
                    </div>
                </a>
            </div>
            <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-2 xl:col-start-2 sm:row-start-6 md:row-start-2 xl:row-start-4">
                <a href="#_" class="relative flex flex-col items-start justify-end w-full h-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                    <div class="absolute inset-0 w-full h-full">
                        <div class="absolute bottom-0 left-0 z-10 w-full h-full opacity-30 bg-gradient-to-b from-transparent to-gray-900"></div>
                        <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/custom-navigation.jpeg" alt="">
                    </div>
                    <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                        <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-indigo-500 rounded-md">Pro</span>
                        <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">Custom Navigation</h4>
                    </div>
                </a>
            </div>
            <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-2 xl:col-start-3 sm:row-start-1 md:row-start-4 xl:row-start-1">
                <a href="#_" class="relative flex flex-col items-start justify-end w-full h-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                    <div class="absolute inset-0 w-full h-full">
                        <div class="absolute bottom-0 left-0 z-10 w-full h-full opacity-30 bg-gradient-to-b from-transparent to-gray-900"></div>
                        <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/integration-center.jpeg" alt="">
                    </div>
                    <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                        <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-indigo-500 rounded-md">Pro</span>
                        <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">Facebook Ads</h4>
                    </div>
                </a>
            </div>
            <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-3 xl:col-start-3 sm:row-start-3 md:row-start-1 xl:row-start-3">
                <a href="#_" class="relative flex flex-col items-start justify-end w-full h-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                    <div class="absolute inset-0 w-full h-full">
                        <div class="absolute bottom-0 left-0 z-10 w-full h-full opacity-30 bg-gradient-to-b from-transparent to-gray-900"></div>
                        <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/design-handoff.jpeg" alt="">
                    </div>
                    <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                        <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-indigo-500 rounded-md">Pro</span>
                        <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">TikTok</h4>
                    <div class="tails-hover-element">div</div></div>
                </a>
            </div>
            <div class="row-span-2 col-span-full sm:col-span-1 md:col-start-3 xl:col-start-4 sm:row-start-5 md:row-start-3 xl:row-start-2">
                <a href="#_" class="relative flex flex-col items-start justify-end w-full h-full overflow-hidden bg-black shadow-lg rounded-xl group" style="aspect-ratio: 1/1;">
                    <div class="absolute inset-0 w-full h-full">
                        <div class="absolute bottom-0 left-0 z-10 w-full h-full bg-gradient-to-b from-transparent to-gray-900 opacity-30"></div>
                        <img class="absolute inset-0 object-cover object-center w-full h-full transition duration-500 lg:opacity-80 group-hover:opacity-100 group-hover:scale-110" src="https://cdn.devdojo.com/images/september2021/3rd-party-modules.jpeg" alt="">
                    </div>
                    <div class="relative z-10 flex flex-col items-start justify-start w-full px-6 py-7">
                        <span class="px-2 py-1 mb-3 text-xs font-semibold tracking-tight text-white uppercase bg-indigo-500 rounded-md">Pro</span>
                        <h4 class="text-4xl font-bold tracking-tight text-gray-100 sm:text-3xl md:text-2xl lg:text-3xl">Instagram Reels</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section><section class="py-12 bg-gray-800 md:py-20 bg-gradient-to-b from-gray-800 to-black">

    <div class="max-w-4xl px-10 mx-auto text-left md:text-center pb-14 md:px-0">
      <h2 class="text-4xl font-bold text-white md:text-5xl">Simple, Transparent Pricing.</h2>
      <p class="mt-2 text-lg text-gray-400">Simple pricing to fit your needs. Pricing for companies of any size.</p>
    </div>
    @include('theme::partials.plans')

    <p class="w-full my-8 text-left text-gray-500 sm:my-10 sm:text-center">All plans are fully configurable in the Admin Area.</p>

    </div>

</section><section class="w-full bg-white">
    <div class="px-8 py-12 mx-auto max-w-7xl">
        <div class="grid grid-cols-2 gap-10 mb-3 md:grid-cols-3 lg:grid-cols-12 lg:gap-20">
            <div class="col-span-3">
                <a href="#_" class="text-xl font-black leading-none text-gray-900 select-none logo">tails.</a>
                <p class="my-4 text-xs leading-normal text-gray-500">
                    Beautifully hand-crafted components to help you build amazing pages.
                </p>
            </div>
            <nav class="col-span-1 md:col-span-1 lg:col-span-2">
                <p class="mb-3 text-xs font-semibold tracking-wider text-gray-400 uppercase">Product</p>
                <a href="#" class="flex mb-3 text-sm font-medium text-gray-500 transition hover:text-gray-700 md:mb-2 hover:text-primary">Features</a>
                <a href="#" class="flex mb-3 text-sm font-medium text-gray-500 transition hover:text-gray-700 md:mb-2 hover:text-primary">Integrations</a>
                <a href="#" class="flex mb-3 text-sm font-medium text-gray-500 transition hover:text-gray-700 md:mb-2 hover:text-primary">Documentation</a>
                <a href="#" class="flex mb-3 text-sm font-medium text-gray-500 transition hover:text-gray-700 md:mb-2 hover:text-primary">FAQs</a>
                <a href="#" class="flex mb-3 text-sm font-medium text-gray-500 transition hover:text-gray-700 md:mb-2 hover:text-primary">Pricing</a>
            </nav>
            <nav class="col-span-1 md:col-span-1 lg:col-span-2">
                <p class="mb-3 text-xs font-semibold tracking-wider text-gray-400 uppercase">About</p>
                <a href="#" class="flex mb-3 text-sm font-medium text-gray-500 transition hover:text-gray-700 md:mb-2 hover:text-primary">Our Story</a>
                <a href="#" class="flex mb-3 text-sm font-medium text-gray-500 transition hover:text-gray-700 md:mb-2 hover:text-primary">Company</a>
                <a href="#" class="flex mb-3 text-sm font-medium text-gray-500 transition hover:text-gray-700 md:mb-2 hover:text-primary">Privacy</a>
                <a href="#" class="flex mb-3 text-sm font-medium text-gray-500 transition hover:text-gray-700 md:mb-2 hover:text-primary">Blog</a>
            </nav>
            <nav class="col-span-2 md:col-span-1 lg:col-span-2">
                <p class="mb-3 text-xs font-semibold tracking-wider text-gray-400 uppercase">Contact</p>
                <a href="#" class="flex mb-3 text-sm font-medium text-gray-500 transition hover:text-gray-700 md:mb-2 hover:text-primary">Advertising</a>
                <a href="#" class="flex mb-3 text-sm font-medium text-gray-500 transition hover:text-gray-700 md:mb-2 hover:text-primary">Press</a>
                <a href="#" class="flex mb-3 text-sm font-medium text-gray-500 transition hover:text-gray-700 md:mb-2 hover:text-primary">Email</a>
                <a href="#" class="flex mb-3 text-sm font-medium text-gray-500 transition hover:text-gray-700 md:mb-2 hover:text-primary">Partners</a>
                <a href="#" class="flex mb-3 text-sm font-medium text-gray-500 transition hover:text-gray-700 md:mb-2 hover:text-primary">Jobs</a>
            </nav>
            <div class="col-span-3">
                <p class="mb-3 text-xs font-semibold tracking-wider text-gray-400 uppercase">SUBSCRIBE TO OUR NEWSLETTER</p>
                <form action="#" class="mb-2">
                    <div class="relative flex items-center overflow-hidden border border-gray-200 rounded-lg" data-rounded="rounded-lg">
                        <input class="w-full px-3 py-2 text-base leading-normal transition duration-150 ease-in-out bg-white appearance-none focus:outline-none" type="email" placeholder="Enter your email" />
                        <button class="px-3 py-2 text-xs text-sm font-medium text-center text-white no-underline bg-indigo-500 border-2 border-indigo-500" data-primary="indigo-500" type="submit">Subscribe</button>
                    </div>
                </form>
                <p class="text-xs leading-normal text-gray-500">Get the latest updates and news about our service.</p>
            </div>
        </div>
        <div class="flex flex-col items-start justify-between pt-10 mt-10 border-t border-gray-100 md:flex-row md:items-center">
            <p class="mb-6 text-sm text-left text-gray-600 md:mb-0">&copy; Copyright 2021 Tails. All Rights Reserved.</p>
            <div class="flex items-start justify-start space-x-6 md:items-center md:justify-center">
                <a href="#_" class="text-sm text-gray-600 transition hover:text-primary">Terms</a>
                <a href="#_" class="text-sm text-gray-600 transition hover:text-primary">Privacy</a>
            </div>
        </div>
    </div>
</section>

    <script src="//unpkg.com/alpinejs" defer></script>
</body>
</html>


@endsection
