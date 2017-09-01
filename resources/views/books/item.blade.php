<tr>
    <td>{{ $book->id }}</td>
    <td><a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a></td>
    <td>{{ $book->user->name }}</td>
    <td>{{ $book->description }}</td>
    <td>{{ $book->created_at }}</td>
    <td>{{ $book->updated_at }}</td>
    <td>
      <a href="#" class="btn btn-sm btn-danger"
         onclick="console.log('click'); event.preventDefault(); if (confirm('確定刪除?')) { document.getElementById('{{ 'destroy-form-' . $book->id }}').submit(); }">
         刪除</a>

      <form id="{{ 'destroy-form-' . $book->id }}" action="{{ route('books.destroy', $book) }}" method="POST" style="display: none;">
        {{ csrf_field() }}
        <input type="hideen" name="_method" value="delete">
      </form>
    </td>
</tr>
