<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{env('APP_NAME')}}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="container mx-auto">


    <header class="py-6">
        <nav class="flex justify-between">
            <h1 class="text-2xl font-bold text-white">BooksRead</h1>
            <div>
                <a class="text-white" href="{{route('books.create')}}">Add book</a>
                <a class="text-white" href="{{route('authors.create')}}">Add author</a>
            </div>
        </nav>
    </header>


    <main class="py-6">
        {{ $slot }}
    </main>

</body>
</html>
