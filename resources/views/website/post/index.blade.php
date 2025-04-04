<x-app :title="$title">
    <div class="max-w-[1240px] px-4 mx-auto text-center">
        <h1 class="text-[36px]">Посты</h1>
        <div x-data="{
            openModal: false,
            activePost: null,
            showPost(post) {
                this.activePost = post;
                this.openModal = true;
            }
        }" class="grid grid-cols-2 md:grid-cols-3 gap-5 relative">
            @foreach ($posts as $post)
            <div class="overflow-hidden rounded-xl bg-white shadow-lg transition-all hover:shadow-xl dark:bg-gray-800">
                <div class="px-3 pt-1.5 flex flex-col-reverse">
                    <span
                        class="text-[18px] text-white inline-flex items-center rounded-full-100 px-3 py-1 text-sm font-semibold">
                        {{ $post->name }}</span>
                    <span
                    class="text-[22px] text-white inline-flex items-center rounded-full-100 px-3 py-1 text-sm font-semibold">
                    {{ $post->post_category->name}}</span>
                </div>

                <div class="px-3 py-2">
                    <h3 class="text-xl font-bold text-gray-800 dark:text-white">{{ $post->title }}</h3>
                </div>

                <div class="px-3 pb-2">
                    <p class="line-clamp-3 text-gray-600 dark:text-gray-300">
                        {{Str::limit($post->content, 25) }}
                    </p>
                </div>

                <div class="flex items-center justify-center">
                    <img src="{{ $post->image ? url('storage', $post->image) : url('storage/404.png') }}" alt="{{ $post->name }}"
                    class="object-cover">
                </div>

                <div class="border-t border-gray-100 px-3 py-2 dark:border-gray-700">
                    <a href="#" @click="showPost({
                            id: {{ $post->id }},
                            title: ' {{ addslashes($post->name) }} ',
                            content: ` {{ addslashes($post->content) }} `
                        })"
                        class="text-sm font-medium text-blue-600 hover:text-blue-800 dark:text-blue-400 dark:hover:text-blue-300">
                        Читать далее →
                    </a>
                </div>
            </div>

            @endforeach

            <div x-show="openModal" @click.away="openModal = false"
                class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50" x-transition>
                <div @click.stop class="bg-white rounded-lg shadow-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-4">
                            <h3 x-text="activePost?.title" class="text-2xl font-bold"></h3>
                            <button @click="openModal = false" class="text-gray-500 hover:text-gray-700 text-[24px]">
                                ✕
                            </button>
                        </div>
                        <div class="prose max-w-none" x-html="activePost?.content"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app>
