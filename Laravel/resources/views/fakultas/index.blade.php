@extends('layout.main')

@section('title', 'Fakultas')

@section('content')
    <h2>Halaman Fakultas</h2>
    <table class = "table table-striped">
        <tr>
            <th>Nama Fakultas</th>
        </tr>
    @foreach ($fakultas as $fak)
    <tr>
    <td>{{ $fak->nama  }}</td>
    </tr>
    @endforeach
</table>
@endsection
