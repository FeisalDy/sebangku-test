<div class="bg-white border rounded-sm shadow-lg col-span-full dark:bg-slate-800 border-slate-200 dark:border-slate-700">
    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100">Latest Products</h2>
    </header>
    <div class="p-3">

        <!-- Table -->
        <div class="overflow-x-auto">
            <table class="w-full table-auto dark:text-slate-300">
                <!-- Table header -->
                <thead class="text-xs uppercase rounded-sm text-slate-400 dark:text-slate-500 bg-slate-50 dark:bg-slate-700 dark:bg-opacity-50">
                    <tr>
                        <th class="p-2">
                            <div class="font-semibold text-left">Image</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Name</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Prices</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Status</div>
                        </th>
                        <!-- <th class="p-2">
                            <div class="font-semibold text-center">Sales</div>
                        </th>
                        <th class="p-2">
                            <div class="font-semibold text-center">Conversion</div>
                        </th> -->
                    </tr>
                </thead>
                <!-- Table body -->
                <tbody class="text-sm font-medium divide-y divide-slate-100 dark:divide-slate-700">
                    <!-- Row -->
                    @foreach($products as $product)
                    <tr>
                        <td class="p-2">
                            <div class="text-left">
                                @if($product->image && file_exists(public_path($product->image)))
                                <img src="{{ asset($product->image) }}" alt="Product Image" style="max-width: 100px; max-height: 100px;">
                                @else
                                <img src="https://via.placeholder.com/100x100" alt="Default Image" style="max-width: 100px; max-height: 100px;">
                                @endif
                            </div>
                        </td>
                        <td class="p-2">
                            <div class="text-center">{{$product->name}}</div>
                        </td>
                        <td class="p-2">
                            <div class="text-center text-emerald-500">Rp. {{$product->price}}</div>
                        </td>
                        <td class="p-2">
                            <div class="text-center">{{$product->status}}</div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>