<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
    @foreach ($jobs as $job)
        <div class="p-6 bg-gray-50 border border-gray-200 rounded-xl shadow hover:shadow-lg transition duration-300">
            <h2 class="text-xl font-semibold text-indigo-700 hover:text-purple-600 transition">
                {{ $job->title }}
            </h2>
            <p class="text-gray-600 mt-2">
                {{ $job->salary }}
            </p>
            <p class="text-sm text-gray-500 mt-1">
                Employer ID: {{ $job->employer_id }}
            </p>
            <a href="{{ route('jobs.show', $job) }}" 
            class="mt-3 inline-block text-sm font-medium text-white bg-gradient-to-r from-indigo-600 to-purple-600 px-4 py-2 rounded-lg shadow hover:from-purple-600 hover:to-indigo-600 transition">
            View Details
            </a>
        </div>
    @endforeach
</div>

</x-layout>
