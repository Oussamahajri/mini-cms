<x-layout :title="$post['title']">
    <article class="bg-white rounded-lg border border-gray-200 p-6">
        <h1 class="text-3xl font-bold">
            {{ $post['title'] }}
        </h1>

        <p class="mt-3 text-gray-600">
            Par {{ $post['author'] }} · {{ $post['date'] }}
        </p>

        <div class="mt-6 space-y-4">
            @foreach ($post['body'] as $paragraph)
                <p>{{ $paragraph }}</p>
            @endforeach
        </div>

        <a href="{{ route('posts.index') }}"
           class="inline-block mt-6 text-indigo-600 hover:underline">
            ← Retour aux articles
        </a>
    </article>
</x-layout>