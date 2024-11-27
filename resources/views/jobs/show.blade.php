<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <div class="font-bold block px-4 py-6 border border-gray-200 rounded-lg bg-white text-sm">
        <h2 class="font-bold text-lg">{{$job->title}}</h2>
        <p>This job pays {{$job->salary}} per year.</p>
        <p>
            Tags:
            @foreach ($job->tags as $tag)
                {{ $tag->name }},
            @endforeach
        </p>

    </div>

    <p class="mt-6">
        <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
    </p>


</x-layout>

