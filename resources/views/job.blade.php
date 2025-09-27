<x-layout>
    <x-slot:heading>
        Job Details
    </x-slot:heading>

    <p class="mb-4">
        <a href="/jobs" class="text-white hover:text-gray-200 font-medium hover:underline transition">
            &larr; Back to Jobs List
        </a>
    </p>
    
    <div class="p-6 bg-white border border-gray-200 rounded-xl shadow-md">
        
        <h2 class="font-bold text-2xl text-gray-800 mb-1">{{ $job['title'] }}</h2>
        <p class="text-md text-gray-600 mb-4">{{ $job->employer->name }}</p>

        <p class="text-xl font-semibold text-green-600 mb-4">
            Pays {{ $job['salary'] }} per year.
        </p>
        
        <h3 class="font-semibold text-lg border-t pt-4 mt-4">Description</h3>
        <p class="mt-2 text-gray-700">{{ $job['description'] }}</p>

        <div class="mt-6 pt-4 border-t flex justify-end">
            <a href="/jobs/{{ $job['id'] }}/apply" 
               class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded-lg shadow transition duration-150 ease-in-out">
                Apply Now &rarr;
            </a>
        </div>
    </div>

</x-layout>