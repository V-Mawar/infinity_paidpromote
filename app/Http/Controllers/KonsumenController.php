<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Konsumen;


class KonsumenController extends Controller
{
    public function buat()
    {
        return view("Konsumen.form-input");
    }

    public function simpan(Request $request)
    {
        $Konsumen = new Konsumen();
        $Konsumen->nama = $request->get("nama");
        $Konsumen->nohp = $request->get("nohp");
        $Konsumen->alamat = $request->get("alamat");
        $Konsumen->jeniskelamin = $request->get("jeniskelamin");
        $Konsumen->save();

        return redirect (route("tampil_Konsumen", ['id' => $Konsumen->id]));
    }

    public function tampil($id)
    {
        $Konsumen = Konsumen::find($id);

        return view("Konsumen.tampil")->with("Konsumen", $Konsumen);
    }

    public function semua()
    {
        $data = Konsumen::all();
        return view("Konsumen.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("Konsumen.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $Konsumen = Konsumen::find($id);
        $Konsumen->nama = $request->get("nama");
        $Konsumen->nohp = $request->get("nohp");
        $Konsumen->alamat = $request->get("alamat");
        $Konsumen->jeniskelamin = $request->get("jeniskelamin");
        $Konsumen->save();

        return redirect(route("tampil_Konsumen", ['id' => $Konsumen->id]));
    }

    public function hapus($id)
    {
        Konsumen::destroy($id);
        return redirect(route('semua_Konsumen'));
    }
}