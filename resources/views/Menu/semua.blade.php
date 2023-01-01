@extends("blank")

@section("konten")
    <h1>Semua Data Menu</h1>
    <table class="table">
        <a href="{{ route("buat_Promo") }}" class="btn btn-success">Add data</a>
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Aksi</th>
                </tr>
        
            <thead>
            <tbody>
        @foreach($data as $Menu)
        
        
        <tr>
            <th scope="row">{{ $Menu->id}}</th>
            <td>{{ $Menu->nama }}</td>
            <td>{{ $Menu->harga }}</td>
            <td>
                <a href="{{ route('ubah_Menu', ['id' => $Menu->id]) }}" class="btn btn-warning">Ubah</a>
                <a href="{{ route("tampil_Menu", ["id"=> $Menu->id]) }}"class="btn btn-info">tampil</a>
        
                <form action="{{ route('hapus_Menu', ['id' => $Menu->id]) }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger ">Hapus</button>
                </form>
            </td>
        </tr>
        
        @endforeach
        </tbody>
        </table>
@endsection 