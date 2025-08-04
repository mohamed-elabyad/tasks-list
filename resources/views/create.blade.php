<x-layout>
    <x-heading>Add Task</x-heading>

    <form method="POST" action="{{route('tasks.store')}}">
        @csrf
        <div class="mb-4">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" @class(['border-red-500' => $errors->has('title')])
            value="{{old('title')}}">
            <x-error message="title" />
        </div>

        <div class="mb-4">
            <label for="description">Description</label>
            <textarea name="description" id="description"  @class(['border-red-500' => $errors->has('description')])
                rows="3">{{old('description')}}</textarea>
            <x-error message="description" />
        </div>
        <div class="mb-4">
            <label for="long_description">Long Description</label>
            <textarea name="long_description" id="long_description" @class(['border-red-500' => $errors->has('long_description')])
                rows="7">{{old('long_description')}}</textarea>
            <x-error message="long_description" />
        </div>

        <div class="flex items-center gap-2">
            <x-button>Create</x-button>

            <x-a href="{{ route('tasks.index') }}" >Cancel</x-a>
        </div>
    </form>
</x-layout>
