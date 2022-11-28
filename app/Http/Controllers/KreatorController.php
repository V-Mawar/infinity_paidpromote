<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kreator;


class KreatorController extends Controller
{
    public function buat()
    {
        return view("Kreator.form-input");
    }

    public function simpan(Request $request)
    {
        $Kreator = new Kreator();
        $Kreator->nama = $request->get("nama");
        $Kreator->nohp = $request->get("nohp");
        $Kreator->alamat = $request->get("alamat");
        $Kreator->jeniskelamin = $request->get("jeniskelamin");
        $Kreator->save();

        return redirect (route("tampil_Kreator", ['id' => $Kreator->id]));
    }

    public function tampil($id)
    {
        $Kreator = Kreator::find($id);

        return view("Kreator.tampil")->with("Kreator", $Kreator);
    }

    public function semua()
    {
        $data = Kreator::all();
        return view("Kreator.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("Kreator.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $Kreator = Kreator::find($id);
        $Kreator->nama = $request->get("nama");
        $Kreator->nohp = $request->get("nohp");
        $Kreator->alamat = $request->get("alamat");
        $Kreator->jeniskelamin = $request->get("jeniskelamin");
        $Kreator->save();

        return redirect(route("tampil_Kreator", ['id' => $Kreator->id]));
    }

    public function hapus($id)
    {
        Kreator::destroy($id);
        return redirect(route('semua_Kreator'));
    }
}