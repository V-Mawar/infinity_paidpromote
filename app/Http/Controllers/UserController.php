<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; //import data user
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function tampil()
    {
        $data_User = User::all();
        return view(view:"tampil-user")
        ->with("data_user", $data_User);
    }


public function formInput() //Hanya Tampilan Form
{
    return view("form");

}

public function simpan(UserRequest $request)
{
    $user =new User();
    $user->name = $request->get("name");
    $user->username = $request->get("username");
    $user->password = $request->get("password");
    $user->level = $request->get("level");
    $user->save();
    return redirect(route("user_all")); //redirect : mengarahkan kealamat URL tertentu
    
}

public function formEdit($id) //Hanya tampil form
{
    return view("form-update")->with("id", $id);
}

public function update(UserRequest $request, $id)
{
    $user =User::find($id);
    $user->name = $request->get("name");
    $user->username = $request->get("username");
    $user->password = $request->get("password");
    $user->level = $request->get("level");
    $user->save();
return redirect(route("user_all")); //redirect : mengarahkan kealamat URL tertentu
    
}

public function hapus ($id)
{
    User::destroy($id); //kode untuk menghapus data user berdasarkan idnya 
    return redirect(route("user_all"));
}

public function show ($id)
{    
    $data_user = User::find($id);// ambil data pada table user berdasarkan id 
    return view(view:"user.show")->with("data_user",$data_user);
}

}
