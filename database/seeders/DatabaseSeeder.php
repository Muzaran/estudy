<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Posts;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
           
            
            Category::create([
                'name' => 'WEB Programing',
                'slug'=> 'web-programing',

            ]);
            
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

            Posts::factory(100)->recycle([
                Category::factory(5)->create(), 
                $zaky,
                
                ])->create();


            
    }
}

