@extends("blank")

@section("konten")

<table class="table">
<a href="{{ route("buat_Konsumen") }}">Add data</a>
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Level</th>
            <th scope="col">Create at</th>
            <th scope="col">Update at</th>
            <th scope="col">Aksi</th>
        </tr>

    <thead>
    <tbody>
@foreach($data as $konsumen)

<tr>
    <th scope="row">{{ $konsumen->id}}</th>
    <td>{{ $konsumen->nama }}</td>
    <td>{{ $konsumen->nohp }}</td>
    <td>{{ $konsumen->alamat }}</td>
    <td>{{ $konsumen->jeniskelamin }}</td>
    <td>{{ $konsumen->created_at }}</td>
    <td>{{ $konsumen->updated_at }}</td>
    <td>
    <a href="{{ route("user_edit", ["id" => $konsumen->id]) }}">edit</a>

<form action="{{ route("user_hapus", ["id" => $konsumen->id]) }}" method="post">
   @csrf 
   @method("delete")
   <button type="submit">Hapus</button>
</form>
    </td>
</tr>
</tr>

@endforeach
</tbody>
</table>
@endsection 