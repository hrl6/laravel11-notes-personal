<x-layout>
    <div class="flex-1 sm:flex-none sm:max-w-[500px]">
        <div class="flex items-center gap-4 mb-6">
            <a href="{{ route('note.index') }}" class="hover:text-gray-600 transition-colors">
                <x-icons.arrow-left />
            </a>
            <h1 class="text-2xl font-semibold text-gray-800">Note: {{ $note->created_at }}</h1>
        </div>
        
        <!-- buttons -->
        <div class="flex items-center gap-4 pb-4">
            <a
                href="{{ route('note.edit', $note) }}"
                class="btn__shadow-2 px-4 py-2 bg-gray-200 text-gray-700 dark:bg-gray-700 dark:text-gray-200 rounded-[16px] hover:bg-gray-300 dark:hover:bg-gray-600 transition-colors">
                Edit
            </a>
            <form action=" {{ route('note.destroy', $note)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn__shadow-2 px-4 py-2  bg-red-600 text-white rounded-[16px] hover:bg-opacity-90 hover:bg-red-700 transition-colors">
                    Delete
                </button>
            </form>
        </div>
        
        <div>
            <p>{{ $note->note }}</p>
        </div>
    </div>
</x-layout>
