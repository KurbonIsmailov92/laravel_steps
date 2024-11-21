<x-layout>
    <x-slot:heading>
        Post Listings
    </x-slot:heading>
    <div class="space-y-2">
    @foreach($posts as $post)
        <ul>
            <li>
                <a href="/posts/{{ $post['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg hover:underline bg-white">
                    <div class="font-bold text-blue-500 text-sm">
                        {{$post->user->first_name}} {{$post->user->last_name}}
                    </div>
                    <strong>{{$post['title']}}</strong>
                </a>
            </li>
        </ul>
    @endforeach
        <div class="bg-white border border-gray-200 rounded-lg">
            {{$posts->links()}}
        </div>
    </div>
</x-layout>

