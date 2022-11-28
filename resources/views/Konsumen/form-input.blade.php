@extends("blank")

@section("konten")

<form action="{{route("simpan_Konsumen")}}"
 method="post">
@csrf

Nama : <input type="text" name="nama"> <br>
NoHp : <input type="string" name="nohp"> <br>
Alamat : <input type="text" name="alamat"> <br>
Jenis Kelamin : <input type="text" name="jeniskelamin">

<button type="submit">Simpan</button>


@endsection