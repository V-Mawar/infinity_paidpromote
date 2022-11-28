<?php
namespace App\Http\Controllers;

class ContohController extends Controller

{
        function halo($nama) {

            return view("halo")
            ->with ("nama",$nama)
            ->with ("kabar","apa kabar nih")
            ->with ("tanggal",date("l,d-m-d"))
            ->with ("waktu",date("H:m:s"))
            ;
        
    }
        

}