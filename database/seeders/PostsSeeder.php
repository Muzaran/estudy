<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Posts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Posts::create([
            'title' => 'Panduan Lengkap: Membuat Website dari Awal',
            'author_id' => 1,
            'category_id' => 1,
            'slug' => 'membuat-website',
            'body' => '
Membangun sebuah website bisa menjadi langkah pertama untuk mewujudkan ide bisnis, berbagi informasi, atau membangun komunitas online. Dalam artikel ini, kita akan membahas proses pembuatan website secara umum, dari tahap perencanaan hingga peluncuran situs. Kami akan menjelaskan langkah-langkah, alat, dan teknologi yang diperlukan untuk membuat website dengan cara yang mudah dipahami.

1. Pahami Tujuan Website Anda
Sebelum memulai membuat website, hal pertama yang perlu Anda lakukan adalah memahami tujuan dari website tersebut. Website bisa dibuat untuk berbagai alasan, seperti:

Website Bisnis: Untuk mempromosikan produk atau layanan, memberikan informasi perusahaan, dan menjangkau pelanggan potensial.
Blog Pribadi atau Portofolio: Tempat untuk berbagi pemikiran, karya, dan pengalaman Anda.
Website E-commerce: Untuk menjual produk atau layanan secara online.
Website Komunitas atau Forum: Tempat bagi pengguna untuk berinteraksi dan berbagi informasi.
Dengan memahami tujuan, Anda dapat memilih desain, fungsionalitas, dan teknologi yang tepat untuk website Anda.'
            
        ]);

    }

       
}
