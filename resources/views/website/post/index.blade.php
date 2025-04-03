<x-app :title="$title">
    <div class="max-w-[1240px] px-4 mx-auto text-center">
        <h1 class="text-[36px]">Посты</h1>
        <div class="grid grid-cols-3 gap-5">
            @foreach ($posts as $post)
            <div class="overflow-hidden rounded-xl bg-white shadow-lg transition-all hover:shadow-xl dark:bg-gray-800">
                <div class="px-3 pt-6">
                    <span
                        class="text-[24px] text-white inline-flex items-center rounded-full-100 px-3 py-1 text-sm font-semibold">
                        {{ $post->category_post_id->name }}
                    </span>
                </div>

                <div class="px-3 py-2">
                    <h3 class="text-xl font-bold text-gray-800 dark:text-white">{{ $post->title }}</h3>
                </div>

                <div class="px-3 pb-2">
                    <p class="line-clamp-3 text-gray-600 dark:text-gray-300">
                        {{ $post->excerpt ?? Str::limit($post->content, 150) }}
                    </p>
                </div>

                <div class="border-t border-gray-100 px-3 py-4 dark:border-gray-700">
                    <a href="#"
                        class="text-sm font-medium text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                        Читать далее →
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</x-app>
