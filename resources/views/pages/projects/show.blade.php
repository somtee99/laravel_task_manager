<x-guest-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dashboard
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200 justify-end">
                    <h2 class="font-bold text-xl text-gray-800 leading-tight">
                        Projects
                    </h2>
                    <a class ="flex justify-end" href="{{ url('projects/add') }}">
                        <x-button>
                            New Project
                        </x-button>
                    </a>   
                </div>
                
                @if(count($projects))
                    @foreach($projects as $project)
                        <x-project-card :project="$project"/>
                    @endforeach
                @else
                    <h2 class="py-12 font-semibold text-center text-md text-gray-500 leading-tight">
                        No Project Available. Click "New Project" to Get Started.
                    </h2>
                @endif

            </div>
        </div>
    </div>
</x-guest-layout>