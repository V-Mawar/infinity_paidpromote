@extends("blank")

@section("konten")

    <h1>{{ $Kreator->nama }}</h1>

    {{ $Kreator->nohp }}
    {{ $Kreator->alamat }}
    {{ $Kreator->jeniskelamin }}

@endsection