@extends('layouts.app')

@section('content')
<h1>Chỉnh Sửa Độc Giả</h1>
<form action="{{ route('readers.update', $reader->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="name">Họ Tên:</label>
    <input type="text" name="name" value="{{ $reader->name }}" required>

    <label for="birthday">Ngày Sinh:</label>
    <input type="date" name="birthday" value="{{ $reader->birthday }}" required>

    <label for="address">Địa Chỉ:</label>
    <input type="text" name="address" value="{{ $reader->address }}" required>

    <label for="phone">Số Điện Thoại:</label>
    <input type="text" name="phone" value="{{ $reader->phone }}" required>

    <button type="submit">Cập Nhật</button>
</form>
@endsection
