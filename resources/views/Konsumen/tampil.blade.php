@extends("blank")

@section("konten")

    <h1>{{ $Konsumen->nama }}</h1>

    {{ $Konsumen->nohp }}
    {{ $Konsumen->alamat }}
    {{ $Konsumen->jeniskelamin }}

@endsection