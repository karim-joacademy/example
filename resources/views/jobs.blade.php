<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>

    <div class="space-y-4">
        @foreach ($jobs as $job)
            <a href="/jobs/{{$job['id']}}" class="block px-4 py-6 border border-gray-400 rounded-lg">
                <i class="font-bold text-blue-500 block">{{$job->employer['name']}}</i>
                <strong>{{$job['title']}}: </strong>Pays {{$job['salary']}} per year.
            </a>
        @endforeach
    </div>

</x-layout>
