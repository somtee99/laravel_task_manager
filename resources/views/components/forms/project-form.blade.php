<form method="POST" action="{{ url('projects/create') }}">
    @csrf

    <!-- Project Name -->
    <div>
        <x-label for="name" value="Project Name" />

        <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus />
    </div>

    <div class="flex items-center justify-end mt-4">
        <!-- Create Project Button -->
        <x-button class="ml-3">
            Create Project
        </x-button>
    </div>
    
</form>