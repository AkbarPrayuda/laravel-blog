<div class="max-w-4xl mx-auto mt-8 bg-white shadow-lg rounded-lg overflow-hidden">
    <img class="w-full h-64 fit-cover object-cover"
        src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
        alt="{{ $post->title }}">
    <div class="px-6 py-4">
        <h1 class="text-3xl font-bold text-gray-800 mb-2">{{ $post->title }}</h1>
        <p class="text-sm text-gray-600 mb-4">
            Posted on {{ $post->created_at->format('F d, Y') }} by {{ $post->name }}
        </p>
        <div class="prose max-w-none">
            {!! $post->body !!}
        </div>
    </div>
</div>
