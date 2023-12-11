<table class="table-auto w-full mb-6 dark:bg-gray-800 dark:text-gray-200">
    <thead>
        <tr>
            <th class="px-4 py-2 dark:text-gray-300">Name</th>
            <th class="px-4 py-2 dark:text-gray-300">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
        <tr class="dark:bg-gray-700">
            <td class="px-4 py-2">{{ $category->name }}</td>
            <td class="px-4 py-2">
                <a href="{{ route('categories.edit', $category->id) }}" class="text-blue-500 dark:text-blue-400">Edit</a>
                <form action="{{ route('categories.destroy', $category->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 dark:text-red-400">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>