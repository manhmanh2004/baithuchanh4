@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Chỉnh Sửa Bản Ghi Mượn</h1>

    <form action="{{ route('borrows.update', $borrow->id) }}" method="POST">
        @csrf
        @method('PUT')

        
        <div class="mb-3">
            <label for="reader_id" class="form-label">Độc Giả:</label>
            <select name="reader_id" class="form-select" required>
                @foreach ($readers as $reader)
                    <option value="{{ $reader->id }}" {{ $borrow->reader_id == $reader->id ? 'selected' : '' }}>
                        {{ $reader->name }}
                    </option>
                @endforeach
            </select>
        </div>

      
        <div class="mb-3">
            <label for="book_id" class="form-label">Sách:</label>
            <select name="book_id" class="form-select" required>
                @foreach ($books as $book)
                    <option value="{{ $book->id }}" {{ $borrow->book_id == $book->id ? 'selected' : '' }}>
                        {{ $book->name }}
                    </option>
                @endforeach
            </select>
        </div>

       
        <div class="mb-3">
            <label for="borrow_date" class="form-label">Ngày Mượn:</label>
            <input type="date" name="borrow_date" class="form-control" value="{{ $borrow->borrow_date }}" required>
        </div>

      
        <div class="mb-3">
            <label for="return_date" class="form-label">Ngày Trả:</label>
            <input type="date" name="return_date" class="form-control" value="{{ $borrow->return_date }}">
        </div>

       
        <div class="mb-3">
            <label for="status" class="form-label">Trạng Thái:</label>
            <select name="status" class="form-select" required>
                <option value="borrowed" {{ $borrow->status == 'borrowed' ? 'selected' : '' }}>Đang Mượn</option>
                <option value="returned" {{ $borrow->status == 'returned' ? 'selected' : '' }}>Đã Trả</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Cập Nhật</button>
    </form>
</div>
@endsection
