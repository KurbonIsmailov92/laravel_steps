<x-layout>
    <x-slot:heading>
        Job Listings
    </x-slot:heading>
    <div class="space-y-2">
        @foreach($jobs as $job)
            <ul>
                <li>
                    <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg hover:underline bg-white">
                        <div class="font-bold text-blue-500 text-sm">
                            {{$job->employer->name}}.
                        </div>
                        <strong>{{$job['title']}}</strong>
                    </a>
                </li>
            </ul>
        @endforeach
        <div>
            {{$jobs->links()}}
        </div>
    </div>
</x-layout>

