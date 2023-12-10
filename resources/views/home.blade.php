<x-app-layout>
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        @forelse ($posts as $post )
            <x-post-items :post="$post"></x-post-items>
        @empty
            <h1 class="text-center text-3xl font-bold">No posts available</h1>
        @endforelse

        <!-- Pagination -->
        <div class="flex items-center py-8">
            <a href="#" class="h-10 w-10 bg-blue-800 hover:bg-blue-600 font-semibold text-white text-sm flex items-center justify-center">1</a>
            <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:bg-blue-600 hover:text-white text-sm flex items-center justify-center">2</a>
            <a href="#" class="h-10 w-10 font-semibold text-gray-800 hover:text-gray-900 text-sm flex items-center justify-center ml-3">Next <i class="fas fa-arrow-right ml-2"></i></a>
        </div>

    </section>
</x-app-layout>