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
                        {{ $project->name }}'s Tasks
                    </h2>
                    <div class ="flex justify-end mt-2">
                        <a href="{{ url('projects') }}">
                            <x-button>
                                Back
                            </x-button>
                        </a> 
                        <a class="ml-auto" href="{{ url('tasks/'. $project->id. '/add') }}">
                            <x-button>
                                Add Task
                            </x-button>
                        </a>    
                    </div>
                      
                </div>
                
                <ul class="list-group shadow-lg connectedSortable" id="item-drag-drop">
                    @foreach($tasks as $task)
                        <li class="list-group-item" item-id="{{ $task->id }}">
                            <x-task-card :task="$task"/>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
    </div>
</x-guest-layout>