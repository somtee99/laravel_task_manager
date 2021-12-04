<form method="POST" action="{{ url('tasks/create') }}">
    @csrf

    <div class="flex items-center justify-end mt-4">
        <!-- Create Task Button -->
        <x-button class="ml-3">
            Add Task
        </x-button>
    </div>

    <!-- Task Name -->
    <div>
        <x-label for="name" value="Task Name" />

        <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
    </div>

    <!-- Project -->
    <div class="mt-4">
        <x-label for="project_id" value="Select Project" />
        
        <select name="project_id" class="block mt-1 w-full rounded-md shadow-sm border-gray-300" id="project_id" required>
        @foreach($projects as $project_model)
            @if($project->id == $project_model->id)
                <option value="{{ $project->id }}" selected>{{ $project_model->name }}</option>
            @else
                <option value="{{ $project->id }}">{{ $project_model->name }}</option>
            @endif
        @endforeach 
    </div>

</form>