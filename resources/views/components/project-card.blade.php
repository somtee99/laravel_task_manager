<x-card>
    <h6 class="text-sm text-gray-600">
        Project Name
    </h6>

    <a class="ml-auto" href="{{ url('tasks/'.$project->id) }}">
        <h6 class="text-lg text-gray-900 hover:text-gray-400">
            {{ $project->name }}
        </h6>
    </a>

    <div class ="flex justify-end mt-1">
        <a href="{{ url('tasks/'. $project->id. '/add') }}">
            <x-button>
                Add Task
            </x-button>
        </a>    
        <a class="ml-2" href="{{ url('tasks/'.$project->id) }}">
            <x-button>
                View Tasks
            </x-button>
        </a>
    </div>
    
</x-card>