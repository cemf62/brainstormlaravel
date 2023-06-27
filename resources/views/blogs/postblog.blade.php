
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

