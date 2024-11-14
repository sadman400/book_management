<x-layout>

    <h1 class="text-3xl ">Create</h1>

    <div>
        <form action="" method="post">
            @csrf

            <div>
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
            </div>

            <div>
                <label for="description">Description</label>
                <textarea name="description" id="description"  rows="5"></textarea>
            </div>

            <div>
                <label for="publication_year">Publication year</label>
                <input type="date" name="publication_year" id="publication_year">
            </div>

            <button class="bg-black hover:bg-slate-900 text-white font-bold py-2 px-4 rounded">Create</button>

        </form>
    </div>

</x-layout>
