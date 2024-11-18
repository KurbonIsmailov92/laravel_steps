<x-layout>
    <x-slot:heading>
        Post
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{$post['title']}}</h2>
    <p>
        Text is: {{$post['body']}}
    </p>
</x-layout>

