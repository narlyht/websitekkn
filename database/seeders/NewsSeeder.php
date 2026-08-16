<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        News::truncate();

        $realNews = [
            [
                'title' => 'Pendampingan Pengurusan NIB & Google Maps Bagi UMKM RW 01 & RW 07 Cikokol',
                'date' => '10 Agustus 2026',
                'category' => 'Legalitas Usaha',
                'image' => 'https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Tim KKN Pemuda Wangsakara UYM mendampingi puluhan pelaku usaha di RW 01 dan RW 07 Cikokol dalam penerbitan NIB OSS RBA serta pendaftaran titik bisnis Google Maps.',
                'content' => 'Dalam rangka mendukung legalitas dan keberlanjutan usaha warga Kelurahan Cikokol, Tim KKN Pemuda Wangsakara Universitas Yatsi Madani (UYM) melaksanakan program kerja pendampingan NIB (Nomor Induk Berusaha) gratis dan pendaftaran Google Business Profile. Kegiatan difokuskan pada pelaku UMKM di lingkungan RW 01 dan RW 07 Cikokol agar memiliki perizinan usaha resmi dan mudah ditemukan oleh konsumen melalui Google Maps.'
            ],
            [
                'title' => 'Persiapan Seminar UMKM Go Digital 2026 di Aula Kantor Kelurahan Cikokol',
                'date' => '18 Agustus 2026',
                'category' => 'Seminar & Workshop',
                'image' => 'https://images.unsplash.com/photo-1511578314322-379afb476865?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Seminar edukasi pemasaran digital dan optimalisasi portal website UMKM akan diselenggarakan pada 23 Agustus 2026 bertempat di Aula Kantor Kelurahan Cikokol.',
                'content' => 'Tim KKN Pemuda Wangsakara UYM berkolaborasi dengan jajaran Pemerintah Kelurahan Cikokol menyiapkan agenda Seminar UMKM Go Digital 2026. Acara ini ditujukan untuk memberikan pemahaman praktis seputar fotografi produk, promosi media sosial (Instagram & TikTok), serta pengoperasian portal direktori UMKM Cikokol untuk meningkatkan jangkauan pasar lokal dan nasional.'
            ],
            [
                'title' => 'Klinik Foto Produk Gratis: Mahasiswa KKN UYM Bantu Kemasan & Branding UMKM',
                'date' => '22 Agustus 2026',
                'category' => 'Digital Branding',
                'image' => 'https://images.unsplash.com/photo-1542744094-3a3172720189?auto=format&fit=crop&w=800&q=80',
                'excerpt' => 'Layanan studio foto produk portabel dan desain stiker kemasan gratis oleh tim mahasiswa KKN UYM berhasil meningkatkan nilai jual produk olahan warga Cikokol.',
                'content' => 'Divisi Digital Branding & Inovasi Bisnis KKN Pemuda Wangsakara UYM membuka Klinik Foto Produk Gratis bagi UMKM kuliner dan kerajinan Cikokol. Dengan peralatan lighting dan mini backdrop profesional, mahasiswa membantu mengambil foto katalog berkualitas tinggi serta mendesain stiker kemasan agar visual produk terlihat lebih modern dan bernilai jual tinggi.'
            ],
        ];

        foreach ($realNews as $n) {
            News::create($n);
        }
    }
}
