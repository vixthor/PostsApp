<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts Page') }}
        </h2>
    </x-slot>     
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark-brown overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 text-gray-900">
                     <div class="text-2xl">
                    <h1 class="my-3 text-bold text-4xl underline">Manage Posts</h1>
                    <table class="table-auto my-3   w-full">
                        <div class="my-3">
                            <a href="{{ route('posts.create') }}" class="bg-white  text-black hover:bg-biege  py-2 px-4 rounded">Create Post<a>
                        </div>
                        <thead>
                        </thead>
                        <tbody class="">
                        @foreach($posts as $post)
                        <tr class="m-4">
                            
                            <div class="">
                                <td class="px-4 py-2 border border-black">{{ $post->title }}</td>
                            <td class="px-4 py-2 border border-black">{{ $post->body }}</td>
                            <td>
                            </div>
                                <a href="{{ route('posts.show', $post->id) }}" class=" rounded-3xl px-4 py-2 mx-4 text-black bg-white hover:bg-biege">View Post</a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
        
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>  
        <div class="container">
            <div class="row justify-content-center">
               
            </div>
        </div>
</x-app-layout>

