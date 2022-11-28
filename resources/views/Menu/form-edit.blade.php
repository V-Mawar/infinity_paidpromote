@extends("blank")

@section("konten")

    <form action="{{ route("update_Menu", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Nama : <input type="text" name="nama"> <br>
        Harga : <input type="text" name="harga"> <br>
        Materi : <input type="text" name="materi"> <br>
        
        
<br>
        <button type="submit">Simpan</button>
    </form>


@endsection