@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Chỉnh Sửa Sách</h1>

    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')

             <div class="mb-3">
            <label for="name" class="form-label">Tên Sách:</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ $book->name }}" required>
        </div>

            <div class="mb-3">
            <label for="author" class="form-label">Tác Giả:</label>
            <input type="text" name="author" class="form-control" id="author" value="{{ $book->author }}" required>
        </div>

             <div class="mb-3">
            <label for="category" class="form-label">Thể Loại:</label>
            <input type="text" name="category" class="form-control" id="category" value="{{ $book->category }}" required>
        </div>

        
        <div class="mb-3">
            <label for="year" class="form-label">Năm Xuất Bản:</label>
            <input type="number" name="year" class="form-control" id="year" value="{{ $book->year }}" required>
        </div>

             <div class="mb-3">
            <label for="quantity" class="form-label">Số Lượng:</label>
            <input type="number" name="quantity" class="form-control" id="quantity" value="{{ $book->quantity }}" required>
        </div>

        
        <button type="submit" class="btn btn-primary">Cập Nhật</button>
    </form>
</div>
@endsection
