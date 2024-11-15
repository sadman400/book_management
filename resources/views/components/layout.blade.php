<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-gray-100 container mx-auto">

    <header class="py-6">
        <nav class="flex justify-between items-center px-6">
            <h1 class="text-2xl font-bold text-white">
                <a href="{{ route('books.index') }}" class="hover:text-gray-400">BooksRead</a>
            </h1>

            <div class="flex gap-6">
                <a href="{{ route('books.index') }}" class="text-white hover:text-gray-400 transition duration-200">Books</a>
                <a href="{{ route('authors.index') }}" class="text-white hover:text-gray-400 transition duration-200">Authors</a>
                <a href="{{ route('categories.index') }}" class="text-white hover:text-gray-400 transition duration-200">Categories</a>
            </div>

            <div class="flex gap-3">
                <a href="{{ route('books.create') }}" class="bg-gray-800 hover:bg-gray-700 text-white  py-2 px-4 rounded-md transition duration-200">
                    + Book
                </a>
                <a href="{{ route('authors.create') }}" class="bg-gray-800 hover:bg-gray-700 text-white py-2 px-4 rounded-md transition duration-200">
                    + Author
                </a>
                <a href="{{ route('categories.create') }}" class="bg-gray-800 hover:bg-gray-700 text-white py-2 px-4 rounded-md transition duration-200">
                    + Category
                </a>
            </div>
        </nav>
    </header>

    <main class="py-6 px-6">
        {{ $slot }}
    </main>

</body>

</html>
