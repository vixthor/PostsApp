<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Posts Page') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-dark-brown p-2 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-4">
                    <br/>
                    <h2 class="text-3xl bold">{{ $post->title }}</h2>
                    <p class="text-lg ml-3 thin">
                        {{ $post->body }}
                    </p>
                    <hr />
                    <h4 class="text-3xl mt-2 underline">Comments</h4>
                    @include('posts.commentsDisplay', ['comments' => $post->comments, 'post_id' => $post->id])
                    <hr/>
                    <h4 class="">Add comment</h4>
                    <form method="post" action="{{ route('comments.store'   ) }}">
                        @csrf
                        <div class="form-group">
                            <textarea class="rounded-lg p-2" name="body"></textarea>
                            <input type="hidden" name="post_id" value="{{ $post->id }}" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="bg-white hover:bg-biege text-black font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" value="Add Comment" />
                        </div>
                    </form>
                </div>
            </div>
    </div>
</x-app-layout>
