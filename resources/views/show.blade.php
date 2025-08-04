<x-layout>
    <x-heading>{{$task->title}}</x-heading>

    <x-success />

    <div class="mb-4">
        <x-a href="{{ route('tasks.index') }}">← Go back to the task list!</x-a>
    </div>

    <p class="mb-4 text-slate-700">{{$task->description}}</p>

    @if ($task->long_description)
        <p class="mb-4 text-slate-700">{{$task->long_description}}</p>
    @endif

    <p class="mb-4 text-sm text-slate-500">Created {{ $task->created_at->diffForHumans() }} • Updated
    {{ $task->updated_at->diffForHumans() }}</p>

    <p class="mb-4">
        @if ($task->completed)
            <span class="font-medium text-green-500">Completed</span>
        @else
            <span class="font-medium text-red-500">Not completed</span>
        @endif
    </p>

    <div class="flex gap-2">
        <x-a href="{{ route('tasks.edit', ['task' => $task]) }}" class="btn">Edit</x-a>

        <form method="POST" action="{{route('tasks.toggle-complete', ['task' => $task->id])}}">
            @csrf
            @method('PATCH')

            <x-button>
                Mark as {{$task->complete ? 'Not Completed' : 'Completed'}}
            </x-button>
        </form>



        <form method="POST" action="{{route('tasks.destroy', ['task'=> $task->id])}}">
            @csrf
            @method('DELETE')

            <x-button>Delete</x-button>
        </form>
    </div>
</x-layout>
