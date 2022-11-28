@extends("blank")

@sections("konten")

nama :{{$data_user->nama}} <br>
Username :{{$data_user->Username}} <br>
level:{{$data_user->level}} <br>
Created :{{$data_user->created_at}} <br>
update :{{$data_user->updated_at}} <br>

@endsection