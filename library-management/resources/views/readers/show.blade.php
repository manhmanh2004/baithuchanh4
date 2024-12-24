@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Chi Tiết Độc Giả</h1>

    <div class="card">
        <div class="card-header bg-primary text-white">
            Thông Tin Độc Giả
        </div>
        <div class="card-body">
            <p><strong>Tên:</strong> {{ $reader->name }}</p>
            <p><strong>Ngày Sinh:</strong> {{ $reader->birthday }}</p>
            <p><strong>Địa Chỉ:</strong> {{ $reader->address }}</p>
            <p><strong>Số Điện Thoại:</strong> {{ $reader->phone }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('readers.index') }}" class="btn btn-secondary">Quay lại Danh Sách</a>
            <a href="{{ route('readers.edit', $reader->id) }}" class="btn btn-warning">Chỉnh Sửa</a>
        </div>
    </div>
</div>
@endsection
