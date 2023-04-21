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
        for ($i=1;$i<=27;$i++){
            $address_img_banner='post-images/post-list-0'.rand(1,4).'.jpg';
            $address_img='post-images/post-list-0'.rand(1,4).'.jpg';
            news::create([
                'title'=>'عنوان شماره '.$i.' ',
                'pic'=>$address_img_banner,
                'pic_banner'=>$address_img,
                'meta_tags'=>'کلمه کلیدی 1 , کلمه کلیدی 3',
                'description'=>$faker->realText(1000),
                'cat_id'=>\App\Models\news_cat::all()->random()->id,
            ]);
        }
    }
}
