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
</x-layout>

