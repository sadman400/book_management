<x-layout>

    <div class="mb-6">
        <a href="{{ route('books.index') }}" class="bg-gray-800 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded transition duration-300">Back</a>
    </div>

    <div class="flex flex-col md:flex-row gap-6">
        <img src="{{ asset('storage/' . $book->image) }}" alt="{{ $book->title }}" class="w-full md:w-1/2 h-96 object-cover rounded-lg group-hover:opacity-80 transition-opacity duration-300">

        <div class="flex flex-col justify-between gap-6">

            <div>
                <h2 class="text-4xl font-semibold text-white group-hover:text-teal-400 transition-colors duration-300">{{ $book->title }}</h2>
                <div class="flex gap-3 mt-2">
                    <span class="bg-gray-800 p-2 rounded-lg text-white hover:text-teal-400 transition-colors duration-300">{{ $book->author->name }}</span>
                    <span class="bg-gray-800 p-2 rounded-lg text-white hover:text-teal-400 transition-colors duration-300">{{ $book->category->name }}</span>
                </div>
                <p class="text-lg text-white mt-8">{{ $book->description }}</p>
            </div>
        </div>
    </div>

</x-layout>
