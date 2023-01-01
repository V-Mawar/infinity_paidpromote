@extends("blank")

@section("konten")

    <form action="{{ route("update_Kreator", ['id' => $id]) }}" method="post">
        @csrf
        @method("put")

        Nama : <input type="text" name="nama"> <br>
        NoHp : <input type="text" name="nohp"> <br>
        Alanat : <input type="text" name="alamat"> <br>
        Jenis Kelamin : <input type="text" name="jeniskelamin">
        <br>
        
<br>
        <button type="submit">Simpan</button>
    </form>
    @endsection