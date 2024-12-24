@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Thêm Bản Ghi Mượn Mới</h1>

    <form action="{{ route('borrows.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="reader_id" class="form-label">Độc Giả:</label>
            <select name="reader_id" class="form-select" required>
                @foreach ($readers as $reader)
                    <option value="{{ $reader->id }}">{{ $reader->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="book_id" class="form-label">Sách:</label>
            <select name="book_id" class="form-select" required>
                @foreach ($books as $book)
                    <option value="{{ $book->id }}">{{ $book->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="borrow_date" class="form-label">Ngày Mượn:</label>
            <input type="date" name="borrow_date" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="return_date" class="form-label">Ngày Trả (dự kiến):</label>
            <input type="date" name="return_date" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>
</div>
@endsection
