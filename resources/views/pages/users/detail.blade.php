<x-app-layout>
    <div class="w-full px-4 py-8 mx-auto sm:px-6 lg:px-8 max-w-9xl">


        <div class="grid grid-cols-12 gap-6">

            <x-users.detail :user="$user" />

        </div>
    </div>
</x-app-layout>