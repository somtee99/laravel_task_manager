<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo"></x-slot>

        <!-- Create Task Form -->
        <x-task-form :project="$project"/>

    </x-auth-card>
</x-guest-layout>
