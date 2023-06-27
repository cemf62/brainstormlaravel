@include('layouts.app')

@section('content')


    @foreach($users as $user)
        <div class="mb-4">
            <p class="text-red-600">Logged in as: {{ $user->name }}</p>
        </div>
    @endforeach



    @foreach($blogs as $blog)
        <div class="mb-6">
            <h1>{{ $blog->title }}</h1>
            <img src="{{ asset('storage/'.$blog->image) }}" alt="Blog Image">
            <p>{{ $blog->content }}</p>

        </div>
    @endforeach
