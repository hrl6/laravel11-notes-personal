<x-app-layout>
    <div class="flex-1 sm:flex-none sm:w-[500px] py-6">
        <h1 class="text-2xl font-semibold text-gray-800 mb-6">Create New Note</h1>

        <form action="{{ route('note.store') }}" method="POST" class="space-y-4">
            @csrf
            <!-- textarea -->
            <div>
                <textarea
                    name="note"
                    rows="6"
                    placeholder="Write your note here..."
                    class="w-full p-4 rounded-[16px] border border-gray-300 focus:outline-none focus:ring focus:ring-blue-300"
                ></textarea>
            </div>

            <!-- buttons -->
            <div class="flex items-center justify-between">
                <a
                    href="{{ route('note.index') }}"
                    class="btn__shadow-2 px-4 py-2 bg-gray-200 text-gray-700 rounded-[16px] hover:bg-gray-300 transition-colors">
                    Cancel
                </a>
                <button
                    type="submit"
                    class="btn__shadow-2 px-4 py-2 bg-tertiary text-textlight rounded-[16px] hover:bg-opacity-90 transition-colors"
                >
                    Submit
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
