<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;


class PromoController extends Controller
{
    public function buat()
    {
        return view("Promo.form-input");
    }

    public function simpan(Request $request)
    {
        $Promo = new Promo();
        $Promo->nama = $request->get("nama");
        $Promo->harga = $request->get("harga");
        $Promo->materi = $request->get("materi");
        
        $Promo->save();

        return redirect (route("tampil_Promo", ['id' => $Promo->id]));
    }

    public function tampil($id)
    {
        $Promo = Promo::find($id);

        return view("Promo.tampil")->with("Promo", $Promo);
    }

    public function semua()
    {
        $data = Promo::all();
        return view("Promo.semua")->with("data", $data);
    }

    public function ubah($id)
    {
        return view("Promo.form-edit")->with("id", $id);
    }

    public function update(Request $request, $id)
    {
        $Promo = Promo::find($id);
        $Promo->nama = $request->get("nama");
        $Promo->nohp = $request->get("nohp");
        $Promo->alamat = $request->get("alamat");
        $Promo->jeniskelamin = $request->get("jeniskelamin");
        $Promo->save();

        return redirect(route("tampil_Promo", ['id' => $Promo->id]));
    }

    public function hapus($id)
    {
        Promo::destroy($id);
        return redirect(route('semua_Promo'));
    }
}