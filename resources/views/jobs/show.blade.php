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

    <div class="sm:flex sm:justify-between">
        <p class="mt-1">
            <x-button href="/jobs" class="text-red-500">Go Back</x-button>
        </p>
        <p class="mt-1">
            <x-button href="/jobs/{{$job->id}}/edit">Edit Job</x-button>
        </p>

    </div>


</x-layout>

