
@props(['post'])

<article class="bg-white rounded-lg border border-gray-200 p-5">
    <div class="flex items-start justify-between gap-4">
        <h2 class="text-xl font-semibold">
            <a href="{{ route('posts.show', $post['slug']) }}" class="hover:text-indigo-600">
                {{ $post['title'] }}
            </a>
        </h2>

        @if ($post['featured'])
            <x-alert type="info">À la une</x-alert>
        @endif
    </div>

    <p class="mt-2 text-gray-600">{{ $post['excerpt'] }}</p>

    <div class="mt-4 text-sm text-gray-500">
        Par {{ $post['author'] }} · {{ $post['date'] }}
    </div>

    <a href="{{ route('posts.show', $post['slug']) }}" class="inline-block mt-4 text-indigo-600 hover:underline">
        Lire l'article →
    </a>
</article>
