@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Danh sách Độc Giả</h1>
    
    <a href="{{ route('readers.create') }}" class="btn btn-success mb-3">Thêm Độc Giả Mới</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>Tên</th>
                <th>Ngày Sinh</th>
                <th>Địa Chỉ</th>
                <th>Số Điện Thoại</th>
                <th>Hành Động</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($readers as $reader)
            <tr>
                <td>{{ $reader->name }}</td>
                <td>{{ $reader->birthday }}</td>
                <td>{{ $reader->address }}</td>
                <td>{{ $reader->phone }}</td>
                <td>
                    
                    <a href="{{ route('readers.show', $reader->id) }}" class="btn btn-info btn-sm">Xem Chi Tiết</a>

                    
                    <a href="{{ route('readers.edit', $reader->id) }}" class="btn btn-warning btn-sm">Sửa</a>

                    
                    <form action="{{ route('readers.destroy', $reader->id) }}" method="POST" style="display:inline;">
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
        {{ $readers->links('pagination::bootstrap-4') }}
    </div>
</div>
@endsection
