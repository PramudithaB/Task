<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Tasks') }}
            </h2>
            <a href="{{ route('tasks.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create Task
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @foreach ($tasks as $task)
                        <div class="mb-4 p-4 border rounded {{ $task->status === 'done' ? 'bg-green-50' : 'bg-white' }}">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-semibold">{{ $task->title }}</h3>
                                <div class="flex space-x-2">
                                    <a href="{{ route('tasks.edit', $task) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                                    <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure?')">Delete</button>
                                    </form>
                                </div>
                            </div>
                            <p class="mt-2">{{ $task->description }}</p>
                            <div class="mt-2 text-sm text-gray-500">
                                Status: {{ ucfirst($task->status) }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-app-layout>