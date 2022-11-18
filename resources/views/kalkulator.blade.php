<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <header>
        <div class="m-6 mt-10 mb-10 text-center font-bold text-3xl uppercase">
            <h1>Perhitungan Kalkulator</h1>
        </div>
    </header>
    <div class="content">
        <div class="flex justify-center">
            <div class="flex mr-2">
                <a href="/kalkulator"
                    class="mt-3 cursor-pointer px-4 py-2.5 text-base text-white bg-red-500 rounded-md hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">
                    Reset
                </a>
            </div>
            <div class="flex mr-2">
                <a href="/"
                    class="mt-3 cursor-pointer px-4 py-2.5 text-base text-white bg-slate-800 rounded-md hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">
                    Kembali
                </a>
            </div>
        </div>
        <div class="m-6 mt-10 text-center font-semibold text-base">
            <h1>Maaf, untuk saat ini kalkulator tidak dapat digunakan. Terimakasih</h1>
        </div>
        <div class="mt-12 w-full mx-auto rounded-xl bg-gray-100 shadow-xl text-gray-800 relative overflow-hidden"
                    style="max-width:300px">
                    <div class="w-full h-40 bg-gradient-to-b from-gray-800 to-gray-700 flex items-end text-right">
                        <div class="w-full py-5 px-6 text-6xl text-white font-thin" type="number" name="hasil">0</div>
                    </div>
                    <div class="w-full bg-gradient-to-b from-indigo-400 to-indigo-500">
                        <div class="flex w-full">
                            <div class="w-1/4 border-r border-b border-indigo-400">
                                <button
                                    class="w-full h-16 outline-none focus:outline-none hover:bg-indigo-700 hover:bg-opacity-20 text-white text-opacity-50 text-xl font-light">C</button>
                            </div>
                            <div class="w-1/4 border-r border-b border-indigo-400">
                                <button
                                    class="w-full h-16 outline-none focus:outline-none hover:bg-indigo-700 hover:bg-opacity-20 text-white text-opacity-50 text-xl font-light">+/-</button>
                            </div>
                            <div class="w-1/4 border-r border-b border-indigo-400">
                                <button
                                    class="w-full h-16 outline-none focus:outline-none hover:bg-indigo-700 hover:bg-opacity-20 text-white text-opacity-50 text-xl font-light">%</button>
                            </div>
                            <div class="w-1/4 border-r border-b border-indigo-400">
                                <button
                                    class="w-full h-16 outline-none focus:outline-none bg-indigo-700 bg-opacity-10 hover:bg-opacity-20 text-white text-2xl font-light">÷</button>
                            </div>
                        </div>
                        <div class="flex w-full">
                            <div class="w-1/4 border-r border-b border-indigo-400">
                                <button
                                    class="w-full h-16 outline-none focus:outline-none hover:bg-indigo-700 hover:bg-opacity-20 text-white text-xl font-light" type="number" name="bil">7</button>
                            </div>
                            <div class="w-1/4 border-r border-b border-indigo-400">
                                <button
                                    class="w-full h-16 outline-none focus:outline-none hover:bg-indigo-700 hover:bg-opacity-20 text-white text-xl font-light">8</button>
                            </div>
                            <div class="w-1/4 border-r border-b border-indigo-400">
                                <button
                                    class="w-full h-16 outline-none focus:outline-none hover:bg-indigo-700 hover:bg-opacity-20 text-white text-xl font-light">9</button>
                            </div>
                            <div class="w-1/4 border-r border-b border-indigo-400">
                                <button
                                    class="w-full h-16 outline-none focus:outline-none bg-indigo-700 bg-opacity-10 hover:bg-opacity-20 text-white text-xl font-light">⨉</button>
                            </div>
                        </div>
                        <div class="flex w-full">
                            <div class="w-1/4 border-r border-b border-indigo-400">
                                <button
                                    class="w-full h-16 outline-none focus:outline-none hover:bg-indigo-700 hover:bg-opacity-20 text-white text-xl font-light">4</button>
                            </div>
                            <div class="w-1/4 border-r border-b border-indigo-400">
                                <button
                                    class="w-full h-16 outline-none focus:outline-none hover:bg-indigo-700 hover:bg-opacity-20 text-white text-xl font-light">5</button>
                            </div>
                            <div class="w-1/4 border-r border-b border-indigo-400">
                                <button
                                    class="w-full h-16 outline-none focus:outline-none hover:bg-indigo-700 hover:bg-opacity-20 text-white text-xl font-light">6</button>
                            </div>
                            <div class="w-1/4 border-r border-b border-indigo-400">
                                <button
                                    class="w-full h-16 outline-none focus:outline-none bg-indigo-700 bg-opacity-10 hover:bg-opacity-20 text-white text-xl font-light">-</button>
                            </div>
                        </div>
                        <div class="flex w-full">
                            <div class="w-1/4 border-r border-b border-indigo-400">
                                <button
                                    class="w-full h-16 outline-none focus:outline-none hover:bg-indigo-700 hover:bg-opacity-20 text-white text-xl font-light">1</button>
                            </div>
                            <div class="w-1/4 border-r border-b border-indigo-400">
                                <button
                                    class="w-full h-16 outline-none focus:outline-none hover:bg-indigo-700 hover:bg-opacity-20 text-white text-xl font-light">2</button>
                            </div>
                            <div class="w-1/4 border-r border-b border-indigo-400">
                                <button
                                    class="w-full h-16 outline-none focus:outline-none hover:bg-indigo-700 hover:bg-opacity-20 text-white text-xl font-light">3</button>
                            </div>
                            <div class="w-1/4 border-r border-b border-indigo-400">
                                <button
                                    class="w-full h-16 outline-none focus:outline-none bg-indigo-700 bg-opacity-10 hover:bg-opacity-20 text-white text-xl font-light">+</button>
                            </div>
                        </div>
                        <div class="flex w-full">
                            <div class="w-1/4 border-r border-indigo-400">
                                <button
                                    class="w-full h-16 outline-none focus:outline-none hover:bg-indigo-700 hover:bg-opacity-20 text-white text-xl font-light">0</button>
                            </div>
                            <div class="w-1/4 border-r border-indigo-400">
                                <button
                                    class="w-full h-16 outline-none focus:outline-none hover:bg-indigo-700 hover:bg-opacity-20 text-white text-xl font-light">.</button>
                            </div>
                            <div class="w-2/4 border-r border-indigo-400">
                                <button
                                    class="w-full h-16 outline-none focus:outline-none bg-indigo-700 bg-opacity-30 hover:bg-opacity-40 text-white text-xl font-light">=</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> 
        </div> 
    </div>
    <footer>
        <div class="w-auto mt-24 border-t border-slate-500 bg-slate-800">
            <div class="flex items-center justify-center mb-5 mt-5">
                <a href="https://github.com/odetv/deret-aritmatika-laravel" target="_blank"
                    class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-white text-white transition duration-300 ease-in-out hover:bg-primary hover:opacity-50">
                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <title>GitHub</title>
                        <path
                            d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                    </svg>
                </a>
            </div>
            <p class="text-[0.65rem] text-slate-300 text-center">Copyright ©2022 | All Rights Reserved.</p>
            <p class="text-[0.65rem] text-slate-500 text-center pb-5">Develop by 🤎odetv</p>
        </div>
    </footer>
</body>

</html>
