<x-layout>

    <h1 class="text-3xl text-center mb-6 text-white">Create Book</h1>

    <div class="max-w-sm mx-auto p-4 rounded-lg border border-gray-700 bg-gray-900 shadow-lg">
        <form action="{{route('books.store')}}" method="post" class="space-y-4" enctype="multipart/form-data">
            @csrf

            <div class="space-y-2">
                <label for="title" class="block text-base font-medium text-slate-300">Title</label>
                <input type="text" name="title" value="{{old('title')}}" id="title" class="mt-1 block w-full p-3 border border-gray-700 rounded-lg bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-black">
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="description" class="block text-base font-medium text-slate-300">Description</label>
                <textarea name="description" id="description" rows="4" class="mt-1 block w-full p-3 border border-gray-700 rounded-lg bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-black"></textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="publication_year" class="block text-base font-medium text-slate-300">Publication Year</label>
                <input type="date" name="publication_year" value="{{old('publication_year')}}" id="publication_year" class="mt-1 block w-full p-3 border border-gray-700 rounded-lg bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-black">
                @error('publication_year')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="author_id" class="block text-base font-medium text-slate-300">Author</label>
                <select name="author_id" id="author_id" class="mt-1 block w-full p-3 border border-gray-700 rounded-lg bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-black">
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
                @error('author_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="category_id" class="block text-base font-medium text-slate-300">Category</label>
                <select name="category_id" id="category_id" class="mt-1 block w-full p-3 border border-gray-700 rounded-lg bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-black">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="image" class="block text-base font-medium text-slate-300">Image</label>
                <input type="file" name="image" id="image" class="mt-1 block w-full p-3 border border-gray-700 rounded-lg bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-black">
                @error('image')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button class="w-full p-3 bg-gray-800 hover:bg-gray-700 text-white font-bold rounded-lg transition duration-200">Create Book</button>
        </form>
    </div>

</x-layout>
