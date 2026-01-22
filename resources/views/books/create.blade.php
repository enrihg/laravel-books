<h2>Create Books</h2>
<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <div>
        <label for="book-title">Title:</label>
        <input id="book-title" name="title" type="text" value="{{ old('title') }}">
    </div>
    <div>
        <label for="book-author">Author:</label>
        <input id="book-author" name="author" type="text" value="{{ old('author') }}">
    </div>
    <div>
        <label for="book-description">Description:</label>
        <input id="book-description" name="description" type="text" value="{{ old('description') }}">
    </div>
    <div>
        <label for="book-isbn">ISBN:</label>
        <input id="book-isbn" name="isbn" type="number" value="{{ old('isbn') }}">
    </div>
    <div>
        <label for="book-img">Image:</label>
        <input id="book-img" name="image_path" type="file" value="{{ old('image_path') }}">
    </div>
    <div>
        <label for="book-price">Price:</label>
        <input id="book-price" name="price" type="number" value="{{ old('price') }}">
    </div>
    <div>
        <label for="book-stock">Stock:</label>
        <input id="book-stock" name="stock" type="number" value="{{ old('stock') }}">
    </div>
    <button type="submit">Create</button>
    <a href="{{route('books.index')}}">Volver</a>
</form>
@if ($errors->any())
    <div class="text-red-500">
        <div>Errors:</div>
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-red-600 bg-amber-900">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
