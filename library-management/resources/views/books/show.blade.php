@extends('layouts.app')

@section('title', 'Book Details')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Chi Tiết Sách</h1>

    <div class="card p-4">
        <div class="mb-3">
            <strong>Tên Sách:</strong> {{ $book->name }}
        </div>
        <div class="mb-3">
            <strong>Tác Giả:</strong> {{ $book->author }}
        </div>
        <div class="mb-3">
            <strong>Thể Loại:</strong> {{ $book->category }}
        </div>
        <div class="mb-3">
            <strong>Năm Xuất Bản:</strong> {{ $book->year }}
        </div>
        <div class="mb-3">
            <strong>Số Lượng:</strong> {{ $book->quantity }}
        </div>
    </div>

    <a href="{{ route('books.index') }}" class="btn btn-secondary mt-3">Quay lại danh sách</a>
</div>
@endsection
