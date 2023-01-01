@extends("blank")

@section("konten")

<table class="table">
<a href="{{ route("buat_Kreator") }}" class="btn btn-success">Add data</a>
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nama</th>
            <th scope="col">NoHp</th>
            <th scope="col">Alamat</th>
            <th scope="col">Level</th>
            <th scope="col">Create at</th>
            <th scope="col">Update at</th>
            <th scope="col">Aksi</th>
        </tr>

    <thead>
    <tbody>
@foreach($data as $Kreator)


<tr>
    <th scope="row">{{ $Kreator->id}}</th>
    <td>{{ $Kreator->nama }}</td>
    <td>{{ $Kreator->nohp }}</td>
    <td>{{ $Kreator->alamat }}</td>
    <td>{{ $Kreator->jeniskelamin }}</td>
    <td>{{ $Kreator->created_at }}</td>
    <td>{{ $Kreator->updated_at }}</td>
    <td>
    <a href="{{ route("ubah_Kreator", ["id" => $Kreator->id]) }}" class="btn btn-warning">edit</a>
    <a href="{{ route("tampil_Kreator", ["id"=> $Kreator->id]) }}"class="btn btn-info">tampil</a>

<form action="{{ route("user_hapus", ["id" => $Kreator->id]) }}" method="post">
   @csrf 
   @method("delete")
   <button type="submit" class="btn btn-danger">Hapus</button>
</form>
    </td>
</tr>
</tr>

@endforeach
</tbody>
</table>
@endsection



