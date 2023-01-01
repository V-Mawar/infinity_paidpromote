@extends("blank")

@section("konten")

@if ($errors->any())
      <div class="alert alert-danger">
           <ul>
                 @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li>
                 @endforeach
           </ul>
      </div>
@endif

<form action="{{route("user_simpan")}}"
 method="post">
@csrf

      <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" class="form-control" name="name">
</div>
<div class="mb-3">
      <label class="form-label">Username</label>
      <input type="text" class="form-control" name="username">
</div>
<div class="mb-3">
      <label class="form-label">Password</label>
      <input type="password" class="form-control" name="password">
</div>
<div class="mb-3">
      <label class="form-label">Level</label>
      <input type="text" class="form-control" name="level">
</div>
{{-- Nama : <input type="text" name="name"> <br>
Username : <input type="text" name="username"> <br>
Password : <input type="password" name="password"> <br>
Level : <input type="text" name="level"> <br> --}}

<button type="submit">Simpan</button>




</form>
@endsection