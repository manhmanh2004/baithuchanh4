@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Danh sách Mượn Trả</h1>
    <a href="{{ route('borrows.create') }}" class="btn btn-success mb-3">Thêm Bản Ghi Mượn Mới</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Độc Giả</th>
                <th>Sách</th>
                <th>Ngày Mượn</th>
                <th>Ngày Trả</th>
                <th>Trạng Thái</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($borrows as $borrow)
            <tr>
                <td>{{ $borrow->reader->name }}</td>
                <td>{{ $borrow->book->name }}</td>
                <td>{{ $borrow->borrow_date }}</td>
                <td>{{ $borrow->return_date ?? 'Chưa trả' }}</td>
                <td>{{ $borrow->status }}</td>
                <td>
                    <a href="{{ route('borrows.show', $borrow->id) }}" class="btn btn-info btn-sm">Xem Chi Tiết</a>
                    <a href="{{ route('borrows.history', $borrow->reader->id) }}" class="btn btn-primary btn-sm">Xem Lịch Sử</a>
                    <a href="{{ route('borrows.edit', $borrow->id) }}" class="btn btn-warning btn-sm">Sửa</a>
                    <form action="{{ route('borrows.destroy', $borrow->id) }}" method="POST" style="display:inline;">
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
        {{ $borrows->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
