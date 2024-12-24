@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Danh sách Sách</h1>
    
    <a href="{{ route('books.create') }}" class="btn btn-success mb-3">Thêm Sách Mới</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tên Sách</th>
                <th>Tác Giả</th>
                <th>Thể Loại</th>
                <th>Năm Xuất Bản</th>
                <th>Số Lượng</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td>{{ $book->name }}</td>
                <td>{{ $book->author }}</td>
                <td>{{ $book->category }}</td>
                <td>{{ $book->year }}</td>
                <td>{{ $book->quantity }}</td>
                <td>
                    <a href="{{ route('books.show', $book->id) }}" class="btn btn-info btn-sm">Xem Chi Tiết</a>
                    <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                    <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Xóa</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    
    <div class="d-flex justify-content-center">
        {{ $books->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
