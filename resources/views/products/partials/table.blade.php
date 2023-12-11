<table class="table-auto w-full mb-6 dark:bg-gray-800 dark:text-gray-200">
    <thead>
        <tr>
            <th class="px-4 py-2 dark:text-gray-300">Title</th>
            <th class="px-4 py-2 dark:text-gray-300">Description</th>
            <th class="px-4 py-2 dark:text-gray-300">Category</th>
            <th class="px-4 py-2 dark:text-gray-300">Image</th>
            <th class="px-4 py-2 dark:text-gray-300">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr class="dark:bg-gray-700">
            <td class="px-4 py-2 capitalize">{{ $product->title }}</td>
            <td class="px-4 py-2 capitalize">{{ $product->description }}</td>
            <td class="px-4 py-2 capitalize">{{ $product->category->name }}</td>
            <td class="px-4 py-2 capitalize">
                <img src="{{ asset($product->image) }}" alt="Image" class="w-20 h-20 object-cover">
            </td>
            <td class="px-4 py-2">
                <a href="{{ route('products.edit', $product->id) }}" class="text-blue-500 dark:text-blue-400">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 dark:text-red-400">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>