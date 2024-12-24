@extends('layouts.app')

@section('title', 'Chi Tiết Mượn Sách')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Chi Tiết Mượn Sách</h1>

    
    <div class="card p-4">
        <div class="mb-3">
            <strong>Độc Giả:</strong> {{ $borrow->reader->name }}
        </div>
        <div class="mb-3">
            <strong>Sách:</strong> {{ $borrow->book->name }}
        </div>
        <div class="mb-3">
            <strong>Ngày Mượn:</strong> {{ $borrow->borrow_date }}
        </div>
        <div class="mb-3">
            <strong>Ngày Trả:</strong> {{ $borrow->return_date ?? 'Chưa trả' }}
        </div>
        <div class="mb-3">
            <strong>Trạng Thái:</strong> {{ $borrow->status }}
        </div>
    </div>

    
    <a href="{{ route('borrows.index') }}" class="btn btn-secondary mt-3">Quay lại danh sách</a>
</div>
@endsection
