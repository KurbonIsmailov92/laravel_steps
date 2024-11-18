<x-layout>
    <x-slot:heading>
        Post Listings
    </x-slot:heading>
    @foreach($posts as $post)
        <ul>
            <li>
                <a href="/posts/{{ $post['id'] }}" class="text-blue-900 hover:underline">
                    <strong>{{$post['title']}}</strong>
                </a>
            </li>
        </ul>
    @endforeach
</x-layout>

