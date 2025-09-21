<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-3">
@foreach ($jobs as $job)
    <div class="p-6 bg-white border border-gray-200 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 relative group">
        <h2 class="text-xl font-bold text-gray-900 leading-tight mb-1">
            {{ $job->title }}
        </h2>
        <p class="text-sm font-medium text-gray-500 mb-2">at {{ $job->employer->name }}</p>
        <p class="text-lg font-semibold text-gray-800">
            {{ $job->salary }}
        </p>
        
        <a href="{{ route('jobs.show', $job) }}" 
           class="mt-4 inline-block text-sm font-medium text-white bg-indigo-600 px-4 py-2 rounded-lg shadow-lg 
                  hover:bg-indigo-700 transition duration-300 transform scale-100 group-hover:scale-105">
            View Details
        </a>

        <!-- Optional: A nice visual touch for the hover state -->
        <div class="absolute inset-0 bg-gradient-to-t from-indigo-500 to-transparent opacity-0 group-hover:opacity-10 transition-opacity duration-300 rounded-xl pointer-events-none"></div>
    </div>
@endforeach
    
</x-layout>