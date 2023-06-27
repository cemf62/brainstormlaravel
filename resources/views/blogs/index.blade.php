@include('layouts.app')

@section('content')



        <div class="mb-4">
            <p class="text-red-600">Logged in as: {{ auth()->user()->name }}</p>
        </div>





    @foreach($blogs as $blog)
        <div class="mb-6">
            <h1>{{ $blog->title }}</h1>
            <img src="{{ asset('storage/'.$blog->image) }}" alt="Blog Image">
            <p>{{ $blog->content }}</p>
            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>

        </div>
    @endforeach
