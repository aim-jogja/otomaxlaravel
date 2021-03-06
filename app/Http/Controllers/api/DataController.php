<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Merk;

class DataController extends Controller
{
    // public function getCategory(){
    //     $kategori = Kategori::all();
    //     return $kategori;
    // }

    public function getMerk(){
        $merk = Merk::all();
        return $merk;
    }

    public function getProduct(){
        $produk = Produk::all();
        return $produk;
    }

    public function getProductByMerk($id){
        $produk = Produk::where('merk_id', $id)->get();
        return $produk;
    }

    public function getProductById($id){
        $produk = Produk::where('id', $id)->get();
        return $produk;
    }

    public function getProductByPromo($promo){
        $produk = Produk::where('promo', $promo)->get();
        return $produk;
    }

    // public function getCategoryName($id){
    //     $kategori = Kategori::where('id', $id)->get();
    //     return $kategori[0]->nama;
    // }
}
