<nav class="border-gray-200 bg-whip-500 dark:bg-gray-800 dark:border-gray-700">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="{{ asset('logo.png') }}" class="h-12" alt="Logo MTsN" />
            <div class="flex flex-col text-sm text-gray-700 font-semibold hover:ring-celadon-500">
                <span>Madrasah Tsamawiyah Negeri 1</span>
                <span>Kota Lahat</span>
            </div>
        </a>
        <button data-collapse-toggle="navbar-solid-bg" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm ring-celadon-500 rounded-lg md:hidden hover:border-2 hover:boring-celadon-500 focus:outline-none focus:ring-2 focus:ring-celadon-500 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-solid-bg" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
            <ul class="flex flex-col font-medium mt-4 rounded-lg bg-gray-50 md:space-x-3 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
                <li>
                    <a href="#" class="block py-1 px-4 rounded-md text-white bg-celadon-500" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="#" class="block py-1 px-4 text-gray-900 hover:text-celadon-500">Profile</a>
                </li>
                <li>
                    <a href="#" class="block py-1 px-4 text-gray-900 hover:text-celadon-500">Layanan</a>
                </li>
                <li>
                    <a href="#" class="block py-1 px-4 text-gray-900 hover:text-celadon-500">Galeri</a>
                </li>
                <li>
                    <a href="#" class="block py-1 px-4 text-gray-900 hover:text-celadon-500">Kelulusan</a>
                </li>
                <li>
                    <a href="#" class="block py-1 px-4 text-gray-900 hover:text-celadon-500">PPDB</a>
                </li>
                <li>
                    <a href="#" class="block py-1 px-4 text-gray-900 hover:text-celadon-500">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
