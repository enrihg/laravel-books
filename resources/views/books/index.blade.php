<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>Description</th>
            <th>ISBN</th>
            <th>Img</th>
            <th>Price</th>
            <th>Stock</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $book)
            <tr>
                <td>{{ $book->id }}</td>
                <td>{{ $book->title }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->description }}</td>
                <td>{{ $book->isbn }}</td>
                <td>{{ $book->img }}</td>
                <td>USD {{ $book->price }}</td>
                <td>{{ $book->stock }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<div class="border-8 ">{{ $books->links() }}</div>
<a href="{{route('books.create')}}">Add a book</a>