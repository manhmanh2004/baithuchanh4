<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý Thư viện</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <header class="bg-dark py-3">
        <nav class="container">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('books.index') }}">
                        <button class="btn btn-primary">Quản lý Sách</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('readers.index') }}">
                        <button class="btn btn-primary">Quản lý Độc Giả</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('borrows.index') }}">
                        <button class="btn btn-primary">Quản lý Mượn Trả</button>
                    </a>
                </li>
            </ul>
        </nav>
    </header>


    <main class="container mt-4">
        @yield('content') 
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
