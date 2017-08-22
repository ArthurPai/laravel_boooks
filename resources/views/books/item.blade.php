<tr>
    <td>{{ $book->id }}</td>
    <td><a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a></td>
    <td>{{ $book->description }}</td>
    <td>{{ $book->created_at }}</td>
    <td>{{ $book->updated_at }}</td>
</tr>
