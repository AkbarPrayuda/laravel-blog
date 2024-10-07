<x-layouts.authenticated>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="bg-white py-6 sm:py-12">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div
                class="mx-auto grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16  border-gray-200  lg:mx-0 lg:max-w-none lg:grid-cols-3">
                @foreach ($posts as $post)
                    <x-article :title="$post->title" :body="$post->body" :author="$post->user->name" :username="$post->user->username" :slug="$post->slug"
                        :createdAt="$post->created_at" />
                @endforeach
            </div>
            <div class="w-full flex justify-center mt-2">
                {{ $posts->links('pagination::tailwind') }}

            </div>
        </div>
    </div>
</x-layouts.authenticated>
