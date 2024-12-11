<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlantShopController extends Controller
{
    public function index()
    {
        // Data produk yang akan ditampilkan
        $products = [
            [
                'name' => 'Fiddle Leaf Fig',
                'price' => 750000,
                'image' => 'https://storage.googleapis.com/a1aa/image/Mefe7XzWsULLhJQZuIE2PfCsSX0sLp5aACqCP0nczmRztkkPB.jpg',
            ],
            [
                'name' => 'Snake Plant',
                'price' => 1100000,
                'image' => 'https://storage.googleapis.com/a1aa/image/FtolVIKJvFKXCp7oGgR7NN7ffZXivnOGoeHwfvkcZr1jtkkPB.jpg',
            ],
            [
                'name' => 'Monstera',
                'price' => 600000,
                'image' => 'https://storage.googleapis.com/a1aa/image/PD9JrpIqqXJJE1VLQoGt2XvPamB4jHg8t0iDlv7V77j1SSeJA.jpg',
            ],
        ];

        // Data fitur dan manfaat lainnya
        $features = [
            ['icon' => 'fas fa-shipping-fast', 'title' => 'Pengiriman Cepat & Gratis', 'description' => 'Nikmati pengiriman cepat dan gratis untuk semua pesanan.'],
            ['icon' => 'fas fa-shopping-cart', 'title' => 'Mudah Berbelanja', 'description' => 'Situs web kami yang ramah pengguna membuat belanja menjadi mudah.'],
            ['icon' => 'fas fa-headset', 'title' => 'Dukungan 24/7', 'description' => 'Kami siap membantu Anda kapan saja, siang atau malam.'],
            ['icon' => 'fas fa-undo', 'title' => 'Pengembalian Tanpa Repot', 'description' => 'Pengembalian mudah untuk kenyamanan Anda.'],
        ];

        $benefits = [
            'Saran ahli tentang perawatan dan pemeliharaan tanaman',
            'Berbagai macam tanaman untuk memenuhi setiap ruang',
            'Tanaman berkualitas tinggi yang dijamin tumbuh subur',
        ];

        return view('client.detail.about', compact('products', 'features', 'benefits'));
    }
}

