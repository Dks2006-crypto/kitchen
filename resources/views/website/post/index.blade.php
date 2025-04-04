<x-app :title="$title">
    @livewire('category-posts')
</x-app>

{{-- @click="showPost({
    id: {{ $post->id }},
    title: ' {{ addslashes($post->name) }} ',
    content: ` {{ addslashes($post->content) }} `
}) --}}
