<div class="bg-white border rounded-sm shadow-lg col-span-full dark:bg-slate-800 border-slate-200 dark:border-slate-700">
    <div class="grid grid-cols-12">
        <div class="p-3 m-4 rounded-sm col-span-full md:col-span-4">
            <div class="bg-white border rounded-sm shadow-lg col-span-full xl:col-span-6 dark:bg-slate-800 border-slate-200 dark:border-slate-700">
                <header class="px-5 py-4 border-b border-slate-100 dark:border-slate-700">
                    <h2 class="font-semibold text-slate-800 dark:text-slate-100">Detail</h2>
                </header>
                <div class="p-3">
                    <div>
                        <table class="w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2 font-semibold text-left">Field</th>
                                    <th class="px-4 py-2 font-semibold text-left">Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="px-4 py-2 font-semibold">Name</td>
                                    <td class="px-4 py-2">{{ ucfirst($user->name) }}</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 font-semibold">Email</td>
                                    <td class="px-4 py-2">{{ $user->email }}</td>
                                </tr>
                                <!-- Add other attributes in a similar manner -->
                                <tr>
                                    <td class="px-4 py-2 font-semibold">Phone</td>
                                    <td class="px-4 py-2">{{ $user->phone }}</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 font-semibold">Role</td>
                                    <td class="px-4 py-2">{{ $user->role }}</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2 font-semibold">Status</td>
                                    <td class="px-4 py-2">
                                        <span class="@if($user->active === 1) text-emerald-500 dark:text-emerald-400 @else text-red-500 dark:text-red-400 @endif">
                                            @if($user->active === 1)
                                            Active
                                            @else
                                            Inactive
                                            @endif
                                        </span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>