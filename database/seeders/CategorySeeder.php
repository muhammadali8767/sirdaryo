<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->times(10)->create();
        // 'Korrupsiyaga qarshi kurashish',
        // "Bo'sh ish o'rinlari",
        // "O'zbekiston Respublikasi Qonunlari",
        // "O`zbekiston Respublikasi Prezidenti farmonlari, qarorlari va farmoyishlari",
        // "Korrupsiyaga qarshi kurashish bo‘yicha qabul qilingan hujjatlar",


    }
}
