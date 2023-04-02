<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <!-- Styles -->
        <link rel="stylesheet" href="./css/app.css">
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">

            <form class="max-w-7xl mx-auto p-6 lg:p-8">
                @csrf
                <div class="justify-center w-full flex">
                    <h1 class="dark:text-white dark:uppercase text-xl block">My neighborhood</h1>
                </div>
                <div class="flex justify-center">
                    <svg fill="#ffffff" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="80px" height="80px" viewBox="0 0 209.19 209.19" xml:space="preserve"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g> <g> <path d="M62.615,77.431l41.196-20.237l42.828,20.273c0.719,0.339,1.465,0.498,2.211,0.498c1.94,0,3.799-1.094,4.688-2.962 c1.222-2.592,0.116-5.685-2.471-6.906l-12.717-6.021v-4.437c0-3.304-2.317-5.985-5.181-5.985c-2.725,0-4.942,2.443-5.141,5.537 l-22.053-10.439c-1.427-0.672-3.083-0.666-4.503,0.033L58.035,68.128c-2.565,1.261-3.623,4.366-2.365,6.935 C56.941,77.642,60.05,78.698,62.615,77.431z"></path> <path d="M197.595,100.406c-1.529-0.683-3.381,0.134-4.271,1.815l-9.739-11.365c-0.63-0.736-1.558-1.141-2.526-1.11l-29.673,1.083 c-1.752,0.063-3.125,1.542-3.06,3.293c0.059,1.759,1.536,3.126,3.289,3.06l28.144-1.023l18.911,22.073 c0.318,0.369,0.697,0.646,1.115,0.832c1.085,0.489,2.402,0.342,3.367-0.482c1.335-1.146,1.485-3.152,0.346-4.483l-5.615-6.557 l1.111-2.485C199.82,103.206,199.197,101.121,197.595,100.406z"></path> <path d="M8.145,119.06c0.417-0.188,0.799-0.462,1.114-0.832l18.909-22.072l28.144,1.023c1.752,0.067,3.23-1.3,3.291-3.059 c0.063-1.752-1.304-3.23-3.06-3.294l-29.675-1.083c-0.967-0.031-1.899,0.375-2.525,1.11l-9.74,11.365 c-0.89-1.679-2.739-2.499-4.267-1.816c-1.605,0.715-2.233,2.799-1.405,4.647l1.11,2.485l-5.611,6.56 c-1.146,1.331-0.989,3.337,0.348,4.483C5.741,119.402,7.058,119.549,8.145,119.06z"></path> <path d="M182.316,140.859c0.653-0.52,1.204-1.177,1.563-1.988l10.062-22.514l-15.526-17.804l-23.911,0.76l-9.846,22.027 c-0.619,1.39-0.876,2.762-0.797,3.863c-2.57-0.615-5.106-1.153-7.57-1.608c1.273-1.522,2.067-3.449,2.067-5.588V77.814 l-34.949-16.163L68.33,78.687v39.319c0,2.539,0.558,4.798,1.434,6.393c-1.896,0.387-3.845,0.835-5.814,1.311 c0.228-1.167,0.046-2.737-0.683-4.374l-9.844-22.026l-23.913-0.76l-15.528,17.804l10.064,22.515 c0.392,0.88,1.004,1.581,1.73,2.111C16.464,146.591,7.59,153.75,0,162.932h112.114c-2.313-5.373-7.791-13.213-20.809-18.442 c-13.211-5.308-14.101-21.401-14.104-21.439v-22.973c0-0.958,0.77-1.729,1.726-1.729h15.332c0.955,0,1.728,0.773,1.728,1.729 v20.991c-0.01,0.041-1.696,5.705,17.951,15.396c11.311,5.574,8.966,18.743,6.372,26.471h88.881 C200.668,153.707,191.555,146.5,182.316,140.859z M29.966,136.531l-5.282-11.82l5.32-2.375l5.282,11.812L29.966,136.531z M37.755,133.05l-5.284-11.82l5.323-2.379l5.28,11.817L37.755,133.05z M48.668,130.248l-5.376-12.029 c-0.238-0.537,0-1.163,0.534-1.403l8.584-3.839c0.534-0.236,1.16,0.003,1.398,0.54l5.934,13.274 C56.122,127.769,52.414,128.916,48.668,130.248z M114.094,118.468h-9.501V97.367h9.501V118.468z M127.996,118.468h-9.5V97.367h9.5 V118.468z M164.64,118.218l-5.209,11.652c-3.736-1.369-7.429-2.529-11.046-3.515l5.735-12.84c0.239-0.537,0.869-0.78,1.403-0.54 l8.582,3.839C164.64,117.055,164.879,117.681,164.64,118.218z M164.856,130.671l5.28-11.816l5.325,2.378l-5.284,11.82 L164.856,130.671z M172.641,134.152l5.284-11.813l5.317,2.375l-5.28,11.82L172.641,134.152z"></path> </g> </g> </g></svg>
                </div>

                <div class="mt-16">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">House Model 1</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Choose a model for the model house n°1, the color and the number of houses
                                </p>
                                <div id="MyHouse1" class="mt-4 flex-col gap-4">
                                    <div class="chooseModel flex gap-4 place-content-evenly justify-center items-center">
                                        <div class="mx-3 flex cursor-pointer">
                                            <input class="flex cursor-pointer" type="radio" name="model1" value="1" checked>
                                                <?php echo file_get_contents('./img/house1.svg', true); ?>
                                            </input>
                                        </div>
                                        <div class="mx-3 flex cursor-pointer">
                                            <input class="flex cursor-pointer" type="radio" name="model1" value="2">
                                                <?php echo file_get_contents('./img/house3.svg', true); ?>
                                            </input>
                                        </div>
                                    </div>
                                    <div class="mt-4 grid grid-rows-3 gap-4 justify-items-center">
                                        <div class="">
                                            <input class="w-10" type="color" id="head" name="colorModel1" value="{{ $colorModel1 }}"/>
                                            <label class="ml-4 dark:text-white">Houses's color</label>
                                        </div>
                                        <div class="w-auto">
                                            <input class="w-10 text-center" min="0" max="100" type="number" id="head" name="numberModel1" value="{{ $numberModel1 }}"/>
                                            <label class="ml-4 dark:text-white">Number of houses</label>
                                        </div>
                                        <div class="w-auto">
                                            <input class="w-10 text-center" min="64" max="200" type="number" id="head" name="sizeModel1" value="{{ $sizeModel1 }}"/>
                                            <label class="ml-4 dark:text-white">size of houses</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex motion-safe:hover:scale-[1.01] transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">
                            <div>

                                <h2 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">House Model 2</h2>

                                <p class="mt-4 text-gray-500 dark:text-gray-400 text-sm leading-relaxed">
                                    Choose a model for the model house n°2, the color and the number of houses
                                </p>
                                <div id="MyHouse2" class="mt-4 flex-col gap-4">
                                    <div class="chooseModel flex gap-4 place-content-evenly justify-center items-center">
                                        <div class="mx-3 flex cursor-pointer">
                                            <input class="flex" type="radio" name="model2" value="1" checked>
                                                <?php echo file_get_contents('./img/house1.svg', true); ?>
                                            </input>
                                        </div>
                                        <div class="mx-3 flex cursor-pointer">
                                            <input class="flex" type="radio" name="model2" value="2">
                                                <?php echo file_get_contents('./img/house3.svg', true); ?>
                                            </input>
                                        </div>
                                    </div>
                                    <div class="mt-4 grid grid-rows-3 gap-4 justify-items-center">
                                        <div class="flex">
                                            <input class="w-10" type="color" id="head" name="colorModel2" value="{{ $colorModel2 }}"/>
                                            <label class="ml-4 dark:text-white">Houses's color</label>
                                        </div>
                                        <div class="flex">
                                            <input class="w-10 text-center" min="0" max="100" type="number" id="head" name="numberModel2" value="{{ $numberModel2 }}"/>
                                            <label class="ml-4 dark:text-white">Number of houses</label>
                                        </div>
                                        <div class="flex">
                                            <input class="w-10 text-center" min="64" max="200" type="number" id="head" name="sizeModel2" value="{{ $sizeModel2 }}"/>
                                            <label class="ml-4 dark:text-white">size of houses</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="flex justify-center mt-16 px-0">
                    <button class="favorite styled dark:text-black bg-white rounded px-6 w-auto"
                            type="submit" formmethod="post">
                        Generate
                    </button>
                </div>

                <div class="flex justify-center mt-16 px-0">
                    <button class=" mt-5 favorite styled dark:text-black bg-white rounded px-6 w-auto"
                            type="button" onClick="reddify()">
                        Reddify
                    </button>
                </div>
                <div id="Neighborhoods" class="mt-16 h-fit grid grid-flow-col auto-cols-auto grid-rows-5 justify-items-center">
                    <?php echo $batch1; ?>
                    <?php echo $batch2; ?>
                </div>
            </form>
        </div>
    </body>
<script>
    function reddify()
    {
        document.getElementById("Neighborhoods").classList.add("force-red");;
    }
</script>

</html>