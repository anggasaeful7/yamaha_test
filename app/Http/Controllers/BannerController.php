<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use App\Models\Banner;
use App\Models\Product;
use App\Models\Promo;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    // get 3 banners terbaru dan kirim ke view welcome
    public function index()
    {
        $banners = Banner::orderBy('created_at', 'desc')->take(3)->get();
        $promos = Promo::orderBy('created_at', 'desc')->take(2)->get();
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('welcome', ['banners' => $banners, 'promos' => $promos, 'products' => $products]);
    }

    public function detail($id)
    {
        $product = Product::find($id);
        return view('detail', ['product' => $product]);
    }

    public function detail_artikel($id)
    {
        $artikel = Artikel::find($id);
        return view('detailArtikel', ['artikel' => $artikel]);
    }

    public function harga()
    {
        $products = Product::orderBy('created_at', 'desc')->get();
        return view('harga', ['products' => $products]);
    }

    public function kredit()
    {

        $banners = Banner::orderBy('created_at', 'desc')->take(3)->get();
        return view('kredit', ['banners' => $banners]);
    }
    public function test()
    {

        $banners = Banner::orderBy('created_at', 'desc')->take(3)->get();
        $promos = Promo::orderBy('created_at', 'desc')->take(2)->get();
        $products = Product::orderBy('created_at', 'desc')->get();
        $artikels = Artikel::orderBy('created_at', 'desc')->take(4)->get();
        return view('katalog', ['banners' => $banners, 'promos' => $promos, 'products' => $products, 'artikels' => $artikels]);
    }
}
