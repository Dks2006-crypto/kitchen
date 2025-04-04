<x-app>
    <x-container>
        <div class="flex justify-center">
            <div class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <img class="object-cover w-full max-w-48 rounded-lg md:rounded-t-lg md:h-auto md:w-72 md:rounded-none md:rounded-s-lg" src="{{ $post->image ? url('storage', $post->image) : url('storage/404.png') }}" alt="">
                <div class="flex flex-col justify-between p-4 leading-normal">
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->name }}</h2>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400" id="content">{!! $post->content !!}</p>
                </div>
            </div>
        </div>
    </x-container>
</x-app>



