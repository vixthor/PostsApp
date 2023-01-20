<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark-brown overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 flex justify-between">
                    <div>
                        {{ __("You're logged in!") }}
                    </div>
                    <div> <a href="{{ route('posts.create') }}"class="bg-white  text-black hover:bg-biege  py-2 px-5 rounded-3xl">Create Your FIrst Post</a></div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
