@extends('layout.main')

@section('title', 'Halaman Dosen')

@section('content')

<h2>List Dosen</h2>

<table class="table table-striped">
    <tr>
        <th>Kode</th>
        <th>Nama</th>
    </tr>
    @foreach ($identitas as $ruow)
    <tr>
        <td>{{ $ruow["kosen"] }} </td>
        <td>{{ $ruow["nama"] }} </td>
    </tr>
    @endforeach
</table>
@endsection
