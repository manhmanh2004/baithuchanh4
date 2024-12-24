@extends('layouts.app')

@section('content')
<h1>Thêm Độc Giả Mới</h1>
<form action="{{ route('readers.store') }}" method="POST">
    @csrf
    <label for="name">Họ Tên:</label>
    <input type="text" name="name" required>

    <label for="birthday">Ngày Sinh:</label>
    <input type="date" name="birthday" required>

    <label for="address">Địa Chỉ:</label>
    <input type="text" name="address" required>

    <label for="phone">Số Điện Thoại:</label>
    <input type="text" name="phone" required>

    <button type="submit">Thêm</button>
</form>
@endsection