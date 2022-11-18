<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex flex-col h-screen justify-center items-center m-3">
        <div class="p-4 flex font-semibold text-blue-500 text-center items-center justify-center">
            <span class="animate-waving-hand text-6xl">👋🏻</span>
        </div>
        <div class="text-center text-blue-500">
            <h1 class="font-bold text-4xl pb-6">Hai, mari coba menghitung!</h1>
            <h1>Silahkan pilih perhitungan dibawah ini.</h1>
        </div>
        <div class="flex space-x-2 justify-center mt-6">
            <div>
              <button type="button" class="inline-block px-6 py-2 border-2 border-blue-600 text-blue-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"><a href="/deret">Deret Bilangan</a></button>
              <button type="button" class="inline-block px-6 py-2 border-2 border-green-500 text-green-500 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"><a href="/secant">Secant Method</a></button>
              <button type="button" class="inline-block px-6 py-2 border-2 border-red-600 text-red-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"><a href="/kalkulator">Kalkulator</a></button>
            </div>
        </div>
    </div>
    <footer>
        <div class="w-auto bg-white">
            <div class="flex items-center justify-center mb-5">
                <a href="https://github.com/odetv/deret-aritmatika-laravel" target="_blank"
                    class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-slate-700 text-slate-700 transition duration-300 ease-in-out hover:bg-primary hover:opacity-50">
                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <title>GitHub</title>
                        <path
                            d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                    </svg>
                </a>
            </div>
            <p class="text-[0.65rem] text-slate-500 text-center">Copyright ©2022 | All Rights Reserved.</p>
            <p class="text-[0.65rem] text-slate-500 text-center pb-5">Develop by 🤎odetv</p>
        </div>
    </footer>
</body>

</html>
