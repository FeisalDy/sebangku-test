<div class="bg-white border rounded-sm shadow-lg col-span-full dark:bg-slate-800 border-slate-200 dark:border-slate-700">
    <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
        <h2 class="font-semibold text-slate-800 dark:text-slate-100">Latest Products</h2>
    </header>
    <div class="p-3">

        <!-- Table -->
        <div class="overflow-x-auto ">
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
                        <th>
                            <div class="font-semibold text-center">Action</div>
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
                        <td class="p-2">
                            <div class="flex justify-center gap-2">
                                <!-- Detail SVG Icon -->
                                <a href="#">
                                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <title>Detail</title>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9ZM11 12C11 11.4477 11.4477 11 12 11C12.5523 11 13 11.4477 13 12C13 12.5523 12.5523 13 12 13C11.4477 13 11 12.5523 11 12Z" fill="#e089ec"></path>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.83 11.2807C19.542 7.15186 15.8122 5 12 5C8.18777 5 4.45796 7.15186 2.17003 11.2807C1.94637 11.6844 1.94361 12.1821 2.16029 12.5876C4.41183 16.8013 8.1628 19 12 19C15.8372 19 19.5882 16.8013 21.8397 12.5876C22.0564 12.1821 22.0536 11.6844 21.83 11.2807ZM12 17C9.06097 17 6.04052 15.3724 4.09173 11.9487C6.06862 8.59614 9.07319 7 12 7C14.9268 7 17.9314 8.59614 19.9083 11.9487C17.9595 15.3724 14.939 17 12 17Z" fill="#e089ec"></path>
                                        </g>
                                    </svg>
                                </a>

                                <!-- Edit SVG Icon -->
                                <a href="#">

                                    <svg width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <title>Edit</title>
                                            <path d="M21.2799 6.40005L11.7399 15.94C10.7899 16.89 7.96987 17.33 7.33987 16.7C6.70987 16.07 7.13987 13.25 8.08987 12.3L17.6399 2.75002C17.8754 2.49308 18.1605 2.28654 18.4781 2.14284C18.7956 1.99914 19.139 1.92124 19.4875 1.9139C19.8359 1.90657 20.1823 1.96991 20.5056 2.10012C20.8289 2.23033 21.1225 2.42473 21.3686 2.67153C21.6147 2.91833 21.8083 3.21243 21.9376 3.53609C22.0669 3.85976 22.1294 4.20626 22.1211 4.55471C22.1128 4.90316 22.0339 5.24635 21.8894 5.5635C21.7448 5.88065 21.5375 6.16524 21.2799 6.40005V6.40005Z" stroke="#5367fd" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                            <path d="M11 4H6C4.93913 4 3.92178 4.42142 3.17163 5.17157C2.42149 5.92172 2 6.93913 2 8V18C2 19.0609 2.42149 20.0783 3.17163 20.8284C3.92178 21.5786 4.93913 22 6 22H17C19.21 22 20 20.2 20 18V13" stroke="#5367fd" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </g>
                                    </svg>
                                </a>

                                <!-- Delete SVG Icon -->
                                <a href="#">

                                    <svg width="30px" height="30px" viewBox="-2.1 -2.1 25.20 25.20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" transform="matrix(1, 0, 0, 1, 0, 0)">
                                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round" stroke="#CCCCCC" stroke-width="0.33599999999999997"></g>
                                        <g id="SVGRepo_iconCarrier">
                                            <title>Delete</title>
                                            <g id="Page-1" stroke-width="0.00021000000000000004" fill="none" fill-rule="evenodd">
                                                <g id="Dribbble-Light-Preview" transform="translate(-179.000000, -360.000000)" fill="#cc0000">
                                                    <g id="icons" transform="translate(56.000000, 160.000000)">
                                                        <path d="M130.35,216 L132.45,216 L132.45,208 L130.35,208 L130.35,216 Z M134.55,216 L136.65,216 L136.65,208 L134.55,208 L134.55,216 Z M128.25,218 L138.75,218 L138.75,206 L128.25,206 L128.25,218 Z M130.35,204 L136.65,204 L136.65,202 L130.35,202 L130.35,204 Z M138.75,204 L138.75,200 L128.25,200 L128.25,204 L123,204 L123,206 L126.15,206 L126.15,220 L140.85,220 L140.85,206 L144,206 L144,204 L138.75,204 Z" id="delete-[#000000]"> </path>
                                                    </g>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                                <!-- Text for context (e.g., Details, Edit, Delete) -->
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
            @if ($products->hasPages())
            <div class="flex flex-col items-end py-2">
                {!! $products->links('vendor.pagination.tailwind') !!}
            </div>
            @endif
        </div>
    </div>
</div>