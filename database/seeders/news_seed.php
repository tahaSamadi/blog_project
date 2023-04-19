<?php

namespace Database\Seeders;

use App\Models\news;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class news_seed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker=\Faker\Factory::create('fa_IR');
            news::create([
                'title'=>'عنوان شماره 1',
                'pic'=>'post-single/post-md-01.jpg',
                'pic_banner'=>'post-single/post-md-01.jpg',
                'meta_tags'=>'کلمه کلیدی 1 , کلمه کلیدی 3',
                'description'=>$faker->realText(300),
                'cat_id'=>\App\Models\news_cat::all()->random()->id,
            ]);
    }
}
