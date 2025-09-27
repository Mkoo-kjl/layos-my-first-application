<x-layout>
    <x-slot:heading>Jobs Page
    </x-slot:heading>


    <div class="space-y-4">
        @forelse ($jobs as $job)
            <div class="p-4 bg-white border border-gray-200 rounded-lg shadow-sm">
                <h3 class="text-lg font-bold text-gray-900 leading-tight mb-1">
                    {{ $job->title }}
                </h3>

                <div class="flex justify-between items-center text-sm text-gray-600 mb-3">
                    <p class="font-medium text-indigo-600">
                        {{ $job->employer->name }}
                    </p>
                    <p class="font-semibold text-green-700">
                        {{ $job->salary ?? 'Competitive' }}
                    </p>
                </div>

                <div class="text-right">
                    <a
                        href="/jobs/{{ $job->id }}"
                        class="inline-block px-4 py-1.5 bg-indigo-500 text-white text-xs font-medium rounded-md hover:bg-indigo-600 transition duration-150"
                    >
                        View Details
                    </a>
                </div>
            </div>
        @empty
            <div class="p-6 bg-yellow-50 border border-yellow-200 text-center rounded-lg">
                <p class="text-md text-yellow-800 font-medium">
                    No jobs are currently postssed.
                </p>
            </div>
        @endforelse
    </div>


    @if (isset($jobs) && method_exists($jobs, 'links'))
        <div class="mt-8">
            {{ $jobs->links() }}
        </div>
    @endif

</x-layout>