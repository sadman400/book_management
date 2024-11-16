<x-layout>

    <h1 class="text-5xl text-center text-white font-bold mb-12">Explore Our Collection</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
        @foreach ($books as $book)
            <div class="bg-gray-800 rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition-transform duration-300 ease-in-out group overflow-hidden">

                <div class="relative">
                    <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->title }}" class="w-full h-60 object-cover rounded-t-xl group-hover:opacity-80 transition-opacity duration-300">
                    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-b from-gray-900/60 to-transparent rounded-t-xl"></div>
                </div>

                <div class="p-6">
                    <h2 class="text-2xl font-bold text-white mb-2 group-hover:text-teal-400 transition-colors duration-300">
                        {{ $book->title }}
                    </h2>
                    <p class="text-gray-400 text-sm mb-4 group-hover:text-gray-300 transition-colors duration-300">
                        {{ Str::limit($book->description, 120) }}
                    </p>

                    <div class="flex justify-between text-gray-300 mb-4">
                        <p class="text-[13px]"><span class="text-[14px] text-gray-300">Author:</span> {{ $book->author->name }}</p>
                        <p class="text-[13px]"><span class="text-[14px] text-gray-300">Category:</span> {{ $book->category->name }}</p>
                    </div>

                    <div class="flex justify-between items-center">
                        <a href="{{ route('books.show', $book->id) }}" class="w-full py-2 px-4 text-center bg-teal-600 text-white font-bold rounded-lg hover:bg-teal-500 transition-all duration-200">
                            View Details
                        </a>
                    </div>

                    <div class="flex justify-between gap-4 mt-3">
                        <form action="{{ route('books.edit', $book->id) }}" method="get" class="w-1/2">
                            @csrf
                            <button type="submit" class="w-full py-2 px-4 bg-gray-700 text-white font-bold rounded-lg hover:bg-gray-600 transition-all duration-200">
                                Edit
                            </button>
                        </form>

                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="w-1/2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="w-full py-2 px-4 bg-red-600 text-white font-bold rounded-lg hover:bg-red-500 transition-all duration-200">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-layout>
