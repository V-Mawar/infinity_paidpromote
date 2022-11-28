@extends("blank")

@section("konten")

<form action="{{route("simpan_Promo")}}"
 method="post">
@csrf

        Nama : <input type="text" name="nama"> <br>
        Harga : <input type="text" name="harga"> <br>
        Materi : <input type="text" name="materi"> <br>
        

<button type="submit">Simpan</button>


@endsection