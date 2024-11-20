<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class="font-bold text-lg">{{$job['title']}}</h2>
    <p>
        This job pays {{$job['salary']}} per year.
    </p>
    <p>
        <strong>Employer is:</strong> {{$job->employer->name}}.
    </p>
    <p>
        Tags:
        @foreach ($job->tags as $tag)
            {{ $tag->name }},
        @endforeach
    </p>
</x-layout>

