@extends("blank")


@section("konten")



<table class="table">
<a href="{{ route("user_input") }}">Add data</a>
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
@foreach($data_user as $user)

<tr>
    <th scope="row">{{ $user->id}}</th>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>{{ $user->password }}</td>
    <td>{{ $user->level }}</td>
    <td>{{ $user->created_at }}</td>
    <td>{{ $user->updated_at }}</td>
    <td>
    <a href="{{ route("user_edit", ["id" => $user->id]) }}">edit</a>

<form action="{{ route("user_hapus", ["id" => $user->id]) }}" method="post">
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