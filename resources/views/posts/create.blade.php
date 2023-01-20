<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark-brown overflow-hidden shadow-sm sm:rounded-lg">
                <div class="">
    <div class="">
        <div class="col-md-8">
            <div class="">
                <div class="text-4xl underline mt-2 p-3">Create Post</div>
                <div class="p-3">
                    <form method="post" action="{{ route('posts.store') }}">
                        <div class="flex items-center">
                            @csrf
                            <label class="label mr-3 font-bold">Post Title: </label>
                            <input type="text" name="title" class="rounded-lg p-2 my-2" required/>
                        </div>
                        <div class="flex items-center">
                            <label class="label mr-3 font-bold">Post Body: </label>
                            <textarea name="body" rows="10" cols="30" class=" rounded-lg p-2 my-2" required></textarea>
                        </div>
                        <div class="">
                            <input type="submit" class="bg-white  text-black hover:bg-biege  py-2 px-4 rounded" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</x-app-layout>
