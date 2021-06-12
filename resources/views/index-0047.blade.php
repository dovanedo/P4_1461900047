<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-md bg-primary justify-content-md-center justify-content-start">
        <div class="navbar-collapse collapse justify-content-between align-items-center w-100" id="collapsingNavbar2">
            <ul class="navbar-nav mx-auto text-md-center text-left">
                <li class="nav-item">
                    <a class="nav-link @yield('menu_home')" href="/">Home</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container mt-3">
    <h2 class="mt-5">Data Kelas</h2>
<p class="lead">Data Kelas</p>
<form action="{{ url('/') }}" method="GET">
    <div class="d-flex justify-content-between pt-2">
        <div class="d-flex">
            <div class="mr-2 mb-2">
            <a href="{{ url('export') }}" class="btn btn-success"> Export To Excel </a>
            </div>
        </div>
    </div>
</form>
<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Siswa</th>
            <th scope="col">Guru</th>
            <th scope="col">Pelajaran</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->siswa }}</td>
                <td>{{ $item->guru }}</td>
                <td>{{ $item->pelajaran }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
    </div>
    <div class="footer">
		<center>Copyright &copy; 2021 - <a href="https://www.instagram.com/dovaneap">dovanedo</a></center>
	</div>
</body>

<script src="{{ URL::asset('js/app.js') }}"></script>
</html>