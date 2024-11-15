<x-layout>

    <h1 class="pb-8 text-white tracking-wide"><a href="{{route('authors.index')}}" class="text-4xl">Categories</a></h1>

    <div class="py-8">
        <div class="grid grid-cols-4 gap-6 transform transition-transform duration-500 ease-in-out">
            @foreach ($categories as $category)
                <div class="bg-gray-900 p-6 rounded-xl shadow-lg hover:shadow-2xl transform hover:scale-105 transition-transform duration-500 ease-in-out hover:bg-gray-800">
                    <h2 class="text-2xl font-bold text-white mb-2">
                        <span class="hover transition-transform duration-500 ease-in-out">{{$category->name}}</span>
                    </h2>
                    <p class="text-white text-sm leading-relaxed">{{Str::words($category->description, 20)}}</p>
                    <div class="flex justify-start items-center gap-2">
                        <form action="{{route('categories.edit', $category->id)}}" method="get" class="mt-4">
                            @csrf
                            <button type="submit" class="bg-gray-700 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg transition duration-200">
                                Edit
                            </button>
                        </form>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="mt-4">
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
    </div>

</x-layout>
