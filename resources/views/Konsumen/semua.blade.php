@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $Konsumen)
        Nama : {{ $Konsumen->nama }} <br>
        NoHp: {{ $Konsumen->nohp }} <br>
        Alamat: {{ $Konsumen->alamat }} <br>
        Jenis Kelamin: {{ $Konsumen->jeniskelamin }} <br>
        <a href="{{ route('ubah_Konsumen', ['id' => $Konsumen->id]) }}">Ubah</a>
        <a href="{{ route('tampil_Konsumen', ['id' => $Konsumen->id]) }}">Tampil</a>

        <form action="{{ route('hapus_Konsumen', ['id' => $Konsumen->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection 