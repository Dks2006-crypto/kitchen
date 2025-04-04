<header class="bg-white shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex-shrink-0">
                <a href="#" class="flex items-center">
                    <span class="ml-2 text-xl font-bold text-gray-900">Coocks</span>
                </a>
            </div>

            <nav class="hidden md:flex space-x-8">
                <a href="#" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium">Главная</a>
                <a href="#" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium">О нас</a>
                <a href="#" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium">Услуги</a>
                <a href="#" class="text-gray-900 hover:text-blue-600 px-3 py-2 text-sm font-medium">Контакты</a>
            </nav>

            <div class="md:hidden">
                <button @click="isOpen = !isOpen" type="button"
                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-900 hover:text-blue-600 focus:outline-none"
                    aria-expanded="false">
                    <span class="sr-only">Открыть меню</span>

                    <svg x-show="!isOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                    <svg x-show="isOpen" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>

        <div x-show="isOpen" x-cloak class="md:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <a href="#"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">Главная</a>
                <a href="#"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">О нас</a>
                <a href="#"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">Услуги</a>
                <a href="#"
                    class="block px-3 py-2 rounded-md text-base font-medium text-gray-900 hover:bg-gray-100">Контакты</a>
            </div>
        </div>
    </div>
</header>
<style>
    [x-cloak] {
        display: none !important;
    }
</style>
