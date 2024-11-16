<x-layout>

    <h1 class="text-4xl text-center text-white mb-10">Explore Our Collection</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
        @foreach ($books as $book)
            <div class="bg-gray-900 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 ease-in-out group">
                <div class="relative mb-6">
                    <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->title }}" class="w-full h-56 object-cover rounded-t-lg group-hover:opacity-80 transition-opacity duration-300">
                    <div class="absolute top-0 left-0 w-full h-full bg-black opacity-40 rounded-t-lg group-hover:opacity-50 transition-opacity duration-300"></div>
                </div>

                <h2 class="text-xl font-semibold text-white mb-2 px-6 group-hover:text-teal-400 transition-colors duration-300">{{ $book->title }}</h2>

                <p class="text-gray-400 text-sm mb-4 px-6 group-hover:text-gray-300 transition-colors duration-300">{{ Str::limit($book->description, 100) }}</p>

                <div class="flex justify-between text-gray-300 text-sm px-6 mb-4">
                    <p><strong>Author:</strong> {{ $book->author->name }}</p>
                    <p><strong>Category:</strong> {{ $book->category->name }}</p>
                </div>

                <div class="mt-4 px-6 pb-3">
                    <a href="{{ route('books.show', $book->id) }}" class="w-full inline-block py-2 px-4 text-center bg-teal-600 text-white font-bold rounded-lg hover:bg-teal-500 transition duration-200">
                        View Details
                    </a>
                </div>
                <div class="flex justify-between items-center gap-2 px-6 pb-3">
                    <form action="{{route('books.edit', $book->id)}}" method="get" class="mt-0">
                        @csrf
                        <button type="submit" class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg transition duration-200">
                            Edit
                        </button>
                    </form>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="mt-0">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-700 hover:bg-red-600 text-white font-bold py-2 px-4 rounded-lg transition duration-200">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

</x-layout>

