@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $Kreator)
        Nama : {{ $Kreator->nama }} <br>
        NoHp: {{ $Kreator->nohp }} <br>
        Alamat: {{ $Kreator->alamat }} <br>
        Jenis Kelamin: {{ $Kreator->jeniskelamin }} <br>
        <a href="{{ route('ubah_Kreator', ['id' => $Kreator->id]) }}">Ubah</a>
        <a href="{{ route('tampil_Kreator', ['id' => $Kreator->id]) }}">Tampil</a>

        <form action="{{ route('hapus_Kreator', ['id' => $Kreator->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection 