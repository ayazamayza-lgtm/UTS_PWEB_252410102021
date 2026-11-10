<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private function getProducts() {
    return [ [
                'id'=> 1, 
                'nama'=> 'Tenda Merapi Mountain Kapasitas 4', 
                'kategori'=> 'Tenda Dome', 
                'tarif'=> 50000, 
                'stok'=> 10, 
                'status'=> 'Tersedia' 
            ],
            [
                'id'=> 2, 
                'nama'=> 'Sleeping Bag Big Adventure', 
                'kategori'=> 'Perlengkapan Tidur', 
                'tarif'=> 15000, 
                'stok'=> 18, 
                'status'=> 'Tersedia' 
            ],
            [
                'id'=> 3, 
                'nama'=> 'Tas Carrier Consina 60L', 
                'kategori'=> 'Tas dan Carrier', 
                'tarif'=> 35000, 
                'stok'=> 0, 
                'status'=> 'Kosong' 
            ],
            [
                'id'=> 4, 
                'nama'=> 'Headlamp Eiger Adventure', 
                'kategori'=> 'Penerangan', 
                'tarif'=> 10000, 
                'stok'=> 3, 
                'status'=> 'Tersedia' 
            ],
            [
                'id'=> 5, 
                'nama'=> 'Sepatu Gunung Arei Size 40', 
                'kategori'=> 'Outfit dan Sepatu', 
                'tarif'=> 10000, 
                'stok'=> 7, 
                'status'=> 'Tersedia' 
            ]
        ];
    }
    
       
    public function login() {
        return view('login');
    }
    public function ProsesLogin(Request $request){
        $username = $request->input('username', 'someone');
        return redirect()->route('dashboard', ['username' => $username]);
    }
    public function dashboard(Request $request){
        $username = $request->query('username', 'someone');
        $totalItem = count($this->getProducts());
        return view('dashboard', ['username' => $username, 'totalItem' => $totalItem]);
    }
    public function pengelolaan(Request $request){
        $username = $request->query('username', 'someone');
        $products = $this->getProducts();
        return view('pengelolaan', ['username' => $username, 'products' => $products]);
    }
    public function profile(Request $request){
        $username = $request->query('username');
        $profile = [
            'username'=> $username,
            'role'=> 'Admin',
            'terdaftar'=> '9 Oktober 2014'
        ];
        return view('profile', ['username'=> $username, 'profile'=> $profile] );
    }
}