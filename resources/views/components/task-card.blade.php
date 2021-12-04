<x-card>
    <h6 class="text-sm text-gray-600 hover:text-gray-900">
        @if($task->priority == 0)
            Task (No Priority)
        @else
            Task {{ $task->priority }}
        @endif
    </h6>
    {{ $task->name }}

</x-card>