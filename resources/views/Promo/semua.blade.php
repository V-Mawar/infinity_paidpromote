@extends("blank")

@section("konten")

<table class="table">
<a href="{{ route("buat_Promo") }}"class="btn btn-success">Add data</a>
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nama</th>
            <th scope="col">Harga</th>
            <th scope="col">Materi</th>
            <th scope="col">Create at</th>
            <th scope="col">Update at</th>
            <th scope="col">Aksi</th>
        </tr>

    <thead>
    <tbody>
@foreach($data as $Promo)


<tr>
    <th scope="row">{{ $Promo->id}}</th>
    <td>{{ $Promo->nama }}</td>
    <td>{{ $Promo->harga }}</td>
    <td>{{ $Promo->materi }}</td>
    <td>{{ $Promo->created_at }}</td>
    <td>{{ $Promo->updated_at }}</td>
    <td>
    <a href="{{ route("ubah_Promo", ["id" => $Promo->id]) }}"class="btn btn-warning">edit</a>
    <a href="{{ route("tampil_Promo", ["id"=> $Promo->id]) }}"class="btn btn-info">tampil</a>
    

<form action="{{ route("user_hapus", ["id" => $Promo->id]) }}" method="post">
   @csrf 
   @method("delete")
   <button type="submit" class="btn btn-danger">Hapus</button>
</form>
    </td>
</tr>

@endforeach
</tbody>
</table>
@endsection 



