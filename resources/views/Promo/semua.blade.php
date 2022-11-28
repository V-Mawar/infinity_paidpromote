@extends("blank")

@section("konten")

    <h1>Semua Data</h1>

    @foreach($data as $Promo)
        Nama : {{ $Promo->nama }} <br>
        Harga: {{ $Promo->harga }} <br>
        Materi: {{ $Promo->materi }} <br>
        
        
        <a href="{{ route('ubah_Promo', ['id' => $Promo->id]) }}">Ubah</a>
        <a href="{{ route('tampil_Promo', ['id' => $Promo->id]) }}">Tampil</a>

        <form action="{{ route('hapus_Promo', ['id' => $Promo->id]) }}" method="post">
            @csrf
            @method('delete')
            <button type="submit">Hapus</button>
        </form>
        <hr>
    @endforeach
@endsection 