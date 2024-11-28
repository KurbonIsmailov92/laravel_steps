<x-layout>
    <x-slot:heading>
        Post
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{$post['title']}}</h2>
    <p>
        {{$post['body']}}
    </p>

    <p>
        <strong> Comments: </strong>
        @foreach ($post->comments as $comment)
            {{ $comment->content }}
        @endforeach
    </p>
    <div class="sm:flex sm:justify-between">
        <p class="mt-1">
            <x-button href="/posts" class="text-red-500">Go Back</x-button>
        </p>
        <p class="mt-1">
            <x-button href="/posts/{{$post->id}}/edit">Edit Post</x-button>
        </p>

    </div>
</x-layout>

