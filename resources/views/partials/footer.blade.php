<footer class="shadow bg-black mt-10">
    <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
        <div class="sm:flex sm:items-center sm:justify-between">
            <a href="{{ route('home') }}" class="flex items-center mb-4 sm:mb-0">
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-white">Barta</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium sm:mb-0 text-gray-100">
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">About</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="#" class="mr-4 hover:underline md:mr-6">Licensing</a>
                </li>
                <li>
                    <a href="#" class="hover:underline">Contact</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 sm:mx-auto border-gray-700 lg:my-8" />
        <span class="block text-sm sm:text-center text-gray-200">© <span x-data
                x-text="new Date().getFullYear()"></span>
            <a href="{{ route('home') }}" class="hover:underline">Barta</a>. All Rights
            Reserved.</span>
    </div>
</footer>