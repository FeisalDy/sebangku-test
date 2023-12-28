<div class="bg-white border rounded-sm shadow-lg col-span-full dark:bg-slate-800 border-slate-200 dark:border-slate-700">
    <!-- <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
        <h2 class="text-lg font-bold text-slate-800 dark:text-slate-100">{{ucfirst($product->name)}}</h2>
    </header> -->
    <div class="grid grid-cols-12">
        <div class="p-3 col-span-full md:col-span-8">
            @if($product->image && file_exists(public_path('storage/' . $product->image)))
            <img src="{{ asset('storage/' . $product->image) }}" alt="Product Image" class="object-cover h-[500px]">
            @else
            <img src="https://via.placeholder.com/500x500" alt="Default Image" class="object-cover" style="max-width: 100px; max-height: 100px;">
            @endif
        </div>
        <div class="p-3 m-4 rounded-sm col-span-full md:col-span-4">
            <div class="bg-white border rounded-sm shadow-lg col-span-full xl:col-span-6 dark:bg-slate-800 border-slate-200 dark:border-slate-700">
                <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                    <h2 class="font-semibold text-slate-800 dark:text-slate-100">Detail</h2>
                </header>
                <div class="p-3">
                    <div>

                        <ul class="my-1">
                            <li class="px-2">
                                <div class="flex items-center py-2 text-sm border-b grow border-slate-100 dark:border-slate-700">
                                    <div class="flex justify-between grow">
                                        <div class="self-center"><a class="text-lg font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white">{{ucfirst($product->name)}}</a></div>
                                    </div>
                                </div>
                            </li>
                            <li class="px-2">
                                <div class="flex items-center py-2 text-sm border-b grow border-slate-100 dark:border-slate-700">
                                    <div class="flex justify-between grow">
                                        <div class="self-center"><a class="text-lg font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white">Rp {{$product->price}}</a></div>
                                    </div>
                                </div>
                            </li>
                            <li class="px-2">
                                <div class="flex items-center py-2 text-sm border-b grow border-slate-100 dark:border-slate-700">
                                    <div class="flex justify-between grow">
                                        <div class="self-center">
                                            <!-- <a class="text-lg font-medium text-slate-800 hover:text-slate-900 dark:text-slate-100 dark:hover:text-white">{{ucfirst($product->status)}}</a> -->
                                            <a class="text-lg font-medium 
                                            @if($product->status === 'available')
                                                text-emerald-500  dark:text-emerald-400
                                            @else
                                                text-red-500  dark:text-red-400 
                                            @endif">
                                                {{ ucfirst($product->status) }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>