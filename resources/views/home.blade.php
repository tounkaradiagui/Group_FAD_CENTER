<x-app-layout>
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        @forelse ($posts as $post )
            <x-post-items :post="$post"></x-post-items>
        @empty
            <h1 class="text-center text-3xl font-bold">No posts available</h1>
        @endforelse

        <!-- Pagination -->
        {{$posts->links()}}

    </section>
</x-app-layout>
