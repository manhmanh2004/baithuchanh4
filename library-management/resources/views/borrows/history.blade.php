@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Lịch Sử Mượn Trả Của {{ $reader->name }}</h1>

    @if ($borrows->isEmpty())
        <p>Không có bản ghi mượn trả nào cho độc giả này.</p>
    @else
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Sách</th>
                    <th>Ngày Mượn</th>
                    <th>Ngày Trả</th>
                    <th>Trạng Thái</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($borrows as $borrow)
                <tr>
                    <td>{{ $borrow->book->name }}</td>
                    <td>{{ $borrow->borrow_date }}</td>
                    <td>{{ $borrow->return_date ?? 'Chưa trả' }}</td>
                    <td>{{ $borrow->status == 'borrowed' ? 'Đang Mượn' : 'Đã Trả' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center">
            {{ $borrows->links('pagination::bootstrap-4') }}
        </div>
    @endif

    <a href="{{ route('borrows.index') }}" class="btn btn-secondary mt-3">Trở về danh sách mượn trả</a>
</div>
@endsection
