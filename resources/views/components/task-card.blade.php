<x-card>
    <h6 class="text-sm text-gray-600 hover:text-gray-900">
        Task {{ $task->priority }}
    </h6>
    {{ $task->name }}

</x-card>