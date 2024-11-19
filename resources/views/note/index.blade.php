<x-app-layout>
    <div class="w-full max-w-4xl mx-auto py-6">
        <div class="flex flex-col gap-6">
            <!-- New Note Button -->
            <div class="flex justify-end">
                <a href="{{ route('note.create') }}" 
                   class="btn__shadow inline-block px-6 py-3 bg-tertiary text-textlight rounded-[16px] hover:bg-opacity-90 transition-colors">
                    New Note
                </a>
            </div>

            <!-- Notes Grid -->
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($notes as $note)
                    <div class="bg-boxlight rounded-[32px] shadow-[0px_2px_3px_-1px_rgba(0,0,0,0.1),0px_1px_0px_0px_rgba(25,28,33,0.02),0px_0px_0px_1px_rgba(25,28,33,0.08)] p-6 flex flex-col">
                        <div class="prose max-w-none mb-4 flex-1">
                            {{ Str::words($note->note, 30) }}
                        </div>
                        
                        <div class="flex gap-3 justify-between">
                            <a href="{{ route('note.show', $note) }}" 
                               class="btn__shadow-2 px-4 py-2 bg-secondary text-white rounded-[16px] hover:bg-opacity-80 transition-colors">
                                View
                            </a>
                            <a href="{{ route('note.edit', $note) }}" 
                               class="btn__shadow-2 px-4 py-2 bg-gray-200 text-gray-700 rounded-[16px] hover:bg-gray-300 transition-colors">
                                Edit
                            </a>
                            <form action="{{ route('note.destroy', $note) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn__shadow-2 px-4 py-2 bg-red-600 text-white rounded-[16px] hover:bg-red-700 transition-colors">
                                    Delete
                                </button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $notes->links() }}
        </div>
    </div>
</x-app-layout>