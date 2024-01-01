<x-app-layout>

    <div class="container py-8 mx-auto">
        <!-- <h1 class="mb-4 text-4xl font-bold">Welcome to Our Store</h1> -->

        <x-.home.carousel :products="$latestProducts" />
        <div class="my-6"></div>
        <div class="grid grid-cols-2 gap-4 md:grid-cols-3 lg:grid-cols-4">
            @foreach($activeProducts as $product)
            <!-- Your card layout -->
            <x-.home.card :product="$product" />
            <!-- ... -->
            @endforeach
        </div>

        <!-- <div class="flex justify-center mt-4">
            {{ $activeProducts->links() }}
        </div> -->
        @if ($activeProducts->hasPages())
        <div class="flex justify-end mt-4">
            {!! $activeProducts->links('vendor.pagination.simple-tailwind') !!}
        </div>
        @endif


    </div>

    <!-- Include scripts for carousel functionality -->
</x-app-layout>