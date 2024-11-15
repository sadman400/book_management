<x-layout>

    <h1 class="text-4xl text-center mb-6">Update Category</h1>

    <div class="max-w-md mx-auto p-6 rounded-lg border border-gray-700 bg-gray-900 shadow-lg">
        <form action="{{ route('categories.update', $category) }}" method="post" class="space-y-4">
            @csrf
            @method('PUT')

            <div class="space-y-2">
                <label for="name" class="block text-2xl font-bold text-white">Name</label>
                <input type="text" name="name" id="name" value="{{ $category->name}}" class="mt-1 block w-full p-4 border border-gray-700 rounded-lg bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-black">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="space-y-2">
                <label for="description" class="block text-2xl font-bold text-white">Description</label>
                <textarea name="description" id="description" rows="5" class="mt-1 block w-full p-4 border border-gray-700 rounded-lg bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-black">{{$category->description}}</textarea>
            </div>

            <button class="w-full p-4 bg-gray-800 hover:bg-gray-700 text-white font-bold rounded-lg transition duration-200">Update</button>

        </form>
    </div>

</x-layout>

