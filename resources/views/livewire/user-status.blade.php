<div class="bg-white border rounded-sm shadow-lg col-span-full dark:bg-slate-800 border-slate-200 dark:border-slate-700">
    <div class="bg-white border rounded-sm shadow-lg col-span-full dark:bg-slate-800 border-slate-200 dark:border-slate-700">
        <header class="flex items-center justify-between px-5 py-4 border-b border-slate-100 dark:border-slate-700">
            <h2 class="font-semibold text-slate-800 dark:text-slate-100">Users</h2>
        </header>

        <div class="p-3 ">

            <div class="overflow-x-auto ">
                <table class="w-full table-auto dark:text-slate-300">
                    <thead class="text-xs uppercase rounded-sm text-slate-400 dark:text-slate-500 bg-slate-50 dark:bg-slate-700 dark:bg-opacity-50">
                        <tr>
                            <th class="p-2">
                                <div class="font-semibold text-left">Name</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">Email</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">Phone</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">Status</div>
                            </th>
                            <th class="p-2">
                                <div class="font-semibold text-center">Action</div>
                            </th>
                        </tr>
                    </thead>
                    <tbody class="text-sm font-medium divide-y divide-slate-100 dark:divide-slate-700">
                        @foreach($users as $user)
                        <tr>
                            <td class="p-2">
                                <div class="text-left">
                                    {{$user->name}}
                                </div>
                            </td>
                            <td class="p-2">
                                <div class="text-center">{{$user->email}}</div>
                            </td>
                            <td class="p-2">
                                <div class="text-center">{{$user->phone}}</div>
                            </td>
                            <td class="p-2">
                                <div class="text-center">
                                    <select class="form-select" wire:change="updateStatus({{ $user->id }}, $event.target.value)">
                                        <option value="1" {{ $user->active === 1 ? 'selected' : '' }}>Active</option>
                                        <option value="0" {{ $user->active === 0 ? 'selected' : '' }}>Inactive</option>
                                    </select>
                                </div>
                            </td>
                            <td class="p-2">
                                <div class="flex justify-center gap-2">
                                    <!-- Detail SVG Icon -->
                                    <a href="{{ route('users.show', ['user' => $user->id]) }}">
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
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>