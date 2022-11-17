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
            <h1>Website Deret Bilangan</h1>
        </div>
    </header>
    <div class="content">
        <form action="" method="post" class="m-3 p-6 border rounded-lg">
            @csrf
            <div class="">
                <h1 class="pr-[25px] lg:text-start text-center mb-6 font-semibold">** Masukkan bilangan yang akan dihitung **</h1>
                <div class="flex items-center mb-3">
                    <h1 class="pr-[44px]">Input Bilangan 1</h1>
                    <input class="border rounded-md w-24 p-1" type="number" name="bil1" required />
                </div>
                <div class="flex items-center mb-3">
                    <h1 class="pr-[44px]">Input Bilangan 2</h1>
                    <input class="border rounded-md w-24 p-1" type="number" name="bil2" required />
                </div>
                <div class="flex items-center mb-3">
                    <h1 class="pr-[25px]">Input Jumlah Index</h1>
                    <input class="border rounded-md w-24 p-1" type="number" name="jumlah" required />
                </div>
                <button
                    class="mt-3 cursor-pointer px-4 py-2 text-base text-white bg-blue-500 rounded-md hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">
                    Cek Hasil
                </button>
                <a href="/"
                    class="mt-3 cursor-pointer px-4 py-2.5 text-base text-white bg-red-500 rounded-md hover:shadow-lg hover:opacity-50 transition duration-300 ease-in-out">Reset</a>
            </div>
        </form>
        <div class="m-3 p-6 border rounded-lg shadow-lg">
            <h1 class="font-bold text-xl">Hasil Deret Bilangan</h1>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-auto">
                    <div class="py-4 inline-block min-w-full sm:px-6">
                        <div class="overflow-hidden">
                            <table class="min-w-full text-center border">
                                <thead class="border-b bg-blue-500">
                                    <tr>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            Index
                                        </th>
                                        <th scope="col" class="text-sm font-medium text-white px-6 py-4">
                                            Nilai
                                        </th>
                                    </tr>
                                </thead class="border-b">
                                <tbody>
                                    @foreach ($deret as $key => $val)
                                        <tr class="bg-white border-b">
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                {{ $key }}</td>
                                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                                {{ $val }}</td>
                                        </tr class="bg-white border-b">
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="w-auto mt-24 border-t border-slate-500 bg-slate-800">
            <div class="flex items-center justify-center mb-5 mt-5">
                <a href="https://github.com/odetv/variabel-aritmatika" target="_blank"
                    class="w-9 h-9 mr-3 rounded-full flex justify-center items-center border border-white text-white transition duration-300 ease-in-out hover:bg-primary hover:opacity-50">
                    <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <title>GitHub</title>
                        <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
                    </svg>
                </a>
            </div>
            <p class="text-[0.65rem] text-slate-300 text-center">Copyright ©2022 Trivili | All Rights Reserved.</p>
            <p class="text-[0.65rem] text-slate-500 text-center pb-5">Develop by 🤎odetv</p>
        </div>
    </footer>
</body>

</html>
