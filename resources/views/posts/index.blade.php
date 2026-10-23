<x-layout :title="$heading">
    <div class="space-y-6">
        <h1 class="text-3xl font-bold">{{ $heading }}</h1>

        @forelse ($posts as $post)
            <x-post-card :post="$post" />
        @empty
            <p class="text-gray-600">Aucun article pour le moment.</p>
        @endforelse
    </div>
</x-layout>