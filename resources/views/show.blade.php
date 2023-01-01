@extends("blank")

@section("konten")

nama :{{$data_user->name}} <br>
Username :{{$data_user->username}} <br>
level:{{$data_user->level}} <br>
Created :{{$data_user->created_at}} <br>
update :{{$data_user->updated_at}} <br>

@endsection