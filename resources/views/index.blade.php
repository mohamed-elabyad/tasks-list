<x-layout>
    <x-heading>The List of Tasks</x-heading>

    <x-success />

    <nav class="mb-4">
        <x-a href="{{ route('tasks.create') }}">Add Task!</x-a>
    </nav>

    @forelse ($tasks as $task)
        <div>
            <x-a href="{{ route('tasks.show', ['task' => $task->id]) }}"
            @class(['line-through' => $task->completed])>{{ $task->title }}</x-a>
        </div>
    @empty
        <div>There are no Tasks!</div>
    @endforelse

    @if ($tasks->count())
        <nav class="mt-4">
            {{$tasks->links()}}
        </nav>
    @endif
</x-layout>
