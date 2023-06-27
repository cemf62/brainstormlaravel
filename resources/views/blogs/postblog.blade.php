@include('layouts.app')

<div class="flex justify-center mt-8">
    <div class="max-w-lg w-full bg-white shadow rounded-lg p-6">
        <h1 class="text-xl font-bold mb-4">Blog Post</h1>

        <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-semibold mb-2">Title</label>
                <input type="text" id="title" name="title" value="{{ old('title') }}" class="w-full border-gray-300 border rounded-md px-4 py-2 focus:outline-none focus:border-indigo-500">
            </div>

            <div class="mb-4">
                <label for="content" class="block text-gray-700 font-semibold mb-2">Content</label>
                <textarea id="content" name="content" class="w-full border-gray-300 border rounded-md px-4 py-2 focus:outline-none focus:border-indigo-500">{{ old('content') }}</textarea>
            </div>

            <div class="mb-4">
                <label for="image" class="block text-gray-700 font-semibold mb-2">Image</label>
                <input type="file" id="image" name="image" class="border-gray-300 border rounded-md px-4 py-2 focus:outline-none focus:border-indigo-500">
            </div>

            <button type="submit" class="bg-indigo-50 hover:bg-indigo- text-base font-semibold py-2 px-4 rounded-md">Submit</button>
        </form>
    </div>
</div>


