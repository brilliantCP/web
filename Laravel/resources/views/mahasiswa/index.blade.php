@extends('layout.main')

@section('title', 'Halaman Mahasiswa')

@section('content')

<h2>Mahasiswa</h2>
<h3>NPM : {{ $npm }}</h3>

<table border="1">
    <tr>
        <th>Mata Kuliah</th>
        <th>Hari</th>
    </tr>
    @foreach ($jadwal as $ruow)
    <tr>
        <td>{{ $ruow["mk"] }} </td>
        <td>{{ $ruow["hari"] }} </td>
    </tr>
    @endforeach
</table>
@endsection
