<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Umkm;

class UmkmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Umkm::truncate();

        $umkmData = [
            [
                'name' => 'Nasi Uduk & Ayam Goreng Khas Cikokol',
                'owner' => 'Mang Udin',
                'rw' => 'RW 01',
                'rt' => 'RT 02 / RW 01',
                'category' => 'Kuliner',
                'price' => 'Rp 12.000 - Rp 25.000',
                'phone' => '082371001161',
                'hours' => '06.00 - 21.00 WIB',
                'address' => 'Jl. Cikokol Raya No. 12, RT 02 / RW 01, Kelurahan Cikokol, Kota Tangerang',
                'image' => 'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=800&q=80',
                'images' => [
                    'https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1626777552726-4a6b54c97e46?auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=800&q=80'
                ],
                'description' => 'Warung Nasi Uduk Mang Udin menyajikan kuliner tradisional beras pilihan yang dimasak dengan santan murni dan rempah racikan khas Cikokol. Dilengkapi lauk semur jengkol, ayam goreng serundeng gurih, telur balado, dan sambal kacang yang pedas mantap.',
                'products' => [
                    ['title' => 'Nasi Uduk Komplit Ayam Goreng', 'price' => 'Rp 22.000'],
                    ['title' => 'Nasi Uduk Semur Jengkol', 'price' => 'Rp 18.000'],
                    ['title' => 'Es Jeruk Perah Manis', 'price' => 'Rp 6.000'],
                ]
            ],
            [
                'name' => 'Bengkel Motor & Tune Up Mas Tono',
                'owner' => 'Mas Tono',
                'rw' => 'RW 02',
                'rt' => 'RT 04 / RW 02',
                'category' => 'Jasa',
                'price' => 'Servis: Rp 35.000 - Rp 150.000',
                'phone' => '082371001161',
                'hours' => '08.00 - 18.00 WIB',
                'address' => 'Jl. Pemuda Cikokol No. 44, RT 04 / RW 02, Kelurahan Cikokol, Kota Tangerang',
                'image' => 'https://images.unsplash.com/photo-1486006920555-c77dce18193b?auto=format&fit=crop&w=800&q=80',
                'images' => [
                    'https://images.unsplash.com/photo-1486006920555-c77dce18193b?auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1558981806-ec527fa84c39?auto=format&fit=crop&w=800&q=80'
                ],
                'description' => 'Spesialis servis berkala motor matic, bebek, dan sport. Melayani ganti oli mesin, bersih injeksi, ganti kampas rem, hingga overhaul mesin dengan montir berpengalaman lebih dari 10 tahun.',
                'products' => [
                    ['title' => 'Servis Injeksi + Ganti Oli Shell', 'price' => 'Rp 75.000'],
                    ['title' => 'Servis CVT Matic Halus', 'price' => 'Rp 50.000'],
                    ['title' => 'Tambal Ban Tubeless & Cek Angin', 'price' => 'Rp 15.000'],
                ]
            ],
            [
                'name' => 'Keripik Pisang Karamel & Cokelat',
                'owner' => 'Bu Sri Mulyani',
                'rw' => 'RW 03',
                'rt' => 'RT 01 / RW 03',
                'category' => 'Kuliner',
                'price' => 'Rp 15.000 / bungkus (250g)',
                'phone' => '082371001161',
                'hours' => '08.00 - 17.00 WIB',
                'address' => 'Gg. Swadaya No. 8, RT 01 / RW 03, Kelurahan Cikokol, Kota Tangerang',
                'image' => 'https://images.unsplash.com/photo-1566478989037-eec170784d0b?auto=format&fit=crop&w=800&q=80',
                'images' => [
                    'https://images.unsplash.com/photo-1566478989037-eec170784d0b?auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1599490659213-e2b9527bd087?auto=format&fit=crop&w=800&q=80'
                ],
                'description' => 'Cemilan rumahan buatan kelompok usaha wanita tani Cikokol. Menggunakan pisang kepok segar pilihan dengan lumuran cokelat lumer premium dan karamel gula merah asli.',
                'products' => [
                    ['title' => 'Keripik Pisang Karamel Gula Merah (250g)', 'price' => 'Rp 15.000'],
                    ['title' => 'Keripik Pisang Melted Chocolate (250g)', 'price' => 'Rp 18.000'],
                    ['title' => 'Keripik Pisang Balado Pedas (250g)', 'price' => 'Rp 15.000'],
                ]
            ],
            [
                'name' => 'Konveksi Kaos Sablon & Seragam',
                'owner' => 'Pak Hendra',
                'rw' => 'RW 04',
                'rt' => 'RT 03 / RW 04',
                'category' => 'Fashion',
                'price' => 'Mulai Rp 45.000 / pcs',
                'phone' => '082371001161',
                'hours' => '08.00 - 19.00 WIB',
                'address' => 'Jl. Veteran No. 19, RT 03 / RW 04, Kelurahan Cikokol, Kota Tangerang',
                'image' => 'https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=800&q=80',
                'images' => [
                    'https://images.unsplash.com/photo-1558769132-cb1aea458c5e?auto=format&fit=crop&w=800&q=80',
                    'https://images.unsplash.com/photo-1521572267360-ee0c2909d518?auto=format&fit=crop&w=800&q=80'
                ],
                'description' => 'Produsen konveksi kaos sablon custom, kemeja seragam kerja, jaket organisasi, dan bordir komputer. Hasil jahitan rapi, pengerjaan cepat tepat waktu.',
                'products' => [
                    ['title' => 'Kaos Combed 30s + Sablon DTF', 'price' => 'Rp 55.000'],
                    ['title' => 'Kemeja PDL / Korpri Seragam', 'price' => 'Rp 110.000'],
                    ['title' => 'Jaket Bomber / Hoodie Custom', 'price' => 'Rp 135.000'],
                ]
            ],
            [
                'name' => 'Kerajinan Anyaman & Souvenir Bambu',
                'owner' => 'Kang Asep',
                'rw' => 'RW 05',
                'rt' => 'RT 05 / RW 05',
                'category' => 'Kerajinan',
                'price' => 'Rp 8.000 - Rp 120.000',
                'phone' => '082371001161',
                'hours' => '08.00 - 17.00 WIB',
                'address' => 'Kampung Bambu RT 05 / RW 05, Kelurahan Cikokol, Kota Tangerang',
                'image' => 'https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=800&q=80',
                'images' => [
                    'https://images.unsplash.com/photo-1544816155-12df9643f363?auto=format&fit=crop&w=800&q=80'
                ],
                'description' => 'Kerajinan tangan dari bambu alami unggulan. Memproduksi aneka souvenir pernikahan, tempat tisu, besek hantaran, hingga kap lampu hias bernuansa etnik.',
                'products' => [
                    ['title' => 'Besek Bambu Hantaran (Set 2 pcs)', 'price' => 'Rp 25.000'],
                    ['title' => 'Kap Lampu Hias Bambu Minimalis', 'price' => 'Rp 85.000'],
                    ['title' => 'Tempat Tissu Anyaman Natural', 'price' => 'Rp 35.000'],
                ]
            ],
            [
                'name' => 'Es Cendol Durian Asli Cikokol',
                'owner' => 'Bang Roni',
                'rw' => 'RW 06',
                'rt' => 'RT 01 / RW 06',
                'category' => 'Kuliner',
                'price' => 'Rp 12.000 / porsi',
                'phone' => '082371001161',
                'hours' => '10.00 - 17.00 WIB',
                'address' => 'Jl. Benteng Betawi RT 01 / RW 06, Kelurahan Cikokol, Kota Tangerang',
                'image' => 'https://images.unsplash.com/photo-1551024709-8f23befc6f87?auto=format&fit=crop&w=800&q=80',
                'images' => [
                    'https://images.unsplash.com/photo-1551024709-8f23befc6f87?auto=format&fit=crop&w=800&q=80'
                ],
                'description' => 'Minuman segar es cendol pandan wangi tanpa pewarna sintetis. Disajikan dengan kuah santan gurih, gula aren asli, dan toping daging buah durian Medan yang melimpah.',
                'products' => [
                    ['title' => 'Es Cendol Durian Spesial', 'price' => 'Rp 15.000'],
                    ['title' => 'Es Cendol Original Gula Aren', 'price' => 'Rp 10.000'],
                    ['title' => 'Es Cendol Nangka Wangi', 'price' => 'Rp 12.000'],
                ]
            ],
            [
                'name' => 'Kerajinan Tas & Pouch Etnik Batik',
                'owner' => 'Ibu Rahmawati',
                'rw' => 'RW 07',
                'rt' => 'RT 03 / RW 07',
                'category' => 'Kerajinan',
                'price' => 'Rp 25.000 - Rp 95.000',
                'phone' => '082371001161',
                'hours' => '08.00 - 17.00 WIB',
                'address' => 'Jl. Wangsakara No. 7, RT 03 / RW 07, Kelurahan Cikokol, Kota Tangerang',
                'image' => 'https://images.unsplash.com/photo-1590874103328-eac38a683ce7?auto=format&fit=crop&w=800&q=80',
                'images' => [
                    'https://images.unsplash.com/photo-1590874103328-eac38a683ce7?auto=format&fit=crop&w=800&q=80'
                ],
                'description' => 'Produk UMKM binaan KKN Wangsakara di RW 07. Memproduksi tas belanja ramah lingkungan, pouch kosmetik motif batik Tangerang, dan dompet tenun sintetis cantik.',
                'products' => [
                    ['title' => 'Pouch Batik Tangerang Handcrafted', 'price' => 'Rp 35.000'],
                    ['title' => 'Totebag Kain Kanvas Kombinasi Batik', 'price' => 'Rp 65.000'],
                    ['title' => 'Dompet Etnik Mini', 'price' => 'Rp 25.000'],
                ]
            ],
        ];

        foreach ($umkmData as $data) {
            Umkm::create($data);
        }
    }
}
