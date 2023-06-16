<!doctype html>
<html lang="en">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Journey Blogs</title>
</head>
<body>
<main>
  <div class="first blog">

    <h1>blogpost</h1>



    <form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">
        </div>

        <div>
            <label for="content">Content</label>
            <textarea id="content" name="content">{{ old('content') }}</textarea>
        </div>

        <div>
            <label for="image">Image</label>
            <input type="file" id="image" name="image">
        </div>

        <button type="submit">Submit</button>
    </form>

    </div>
    <div class="display blog">

{{--        <h1>{{ $blog->title }}</h1>--}}
{{--        <p>{{ $blog->content }}</p>--}}
{{--        @if ($blog->image)--}}
{{--            <img src="{{ $blog->image_url }}" alt="Blog Image">--}}
{{--        @endif--}}

    </div>
</main>
</body>
</html>
