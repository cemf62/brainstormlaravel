@include('layouts.app')

@section('content')


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                        @foreach($blogs as $blog)
                            <div class="w-full">
                                <div class="bg-white shadow-md rounded-lg overflow-hidden" style="width: 800px; height: 700px;">
                                    <div class="h-40 bg-cover bg-center"><img src="{{ asset('storage/'.$blog->image) }}" alt="Blog Image" class="w-full h-56 object-cover object-center">
                                    </div>
                                    <div class="p-4">
                                        <h3 class="text-xl font-bold mb-2">Blog title: {{ $blog->title }}</h3>
                                            <p class="text-gray-700">Blog information: {{ $blog->content }}</p>
                                        <p class="mt-16 text-gray-500">Blog created by: {{ $blog->user->name }}</p>
                                        <div class="flex justify-end mt-4 p-4">
                                            @if ($blog->user_id === auth()->id())
                                                <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white font-bold py-2 px-4 rounded">Delete</button>
                                                </form>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>



