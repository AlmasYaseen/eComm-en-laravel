<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name'=>"LCD 32inch",
                'price'=> "98646",
                'category'=> "LCD",
                'description'=> "LCD with Large Screen",
                'gallery' => 'https://www.multynet.com.pk/wp-content/uploads/2021/06/Best-LED-TV-in-Pakistan.jpg',
                'created_at'=> date('Y-m-d h:i:s'),
                'updated_at'=> date('Y-m-d h:i:s')
            ],
            [
                'name'=>"TV Compaq",
                'price'=> "6540",
                'category'=> "TV",
                'description'=> "TV with High quality",
                'gallery' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTnAf_e0KT5oUpVSHxCdgmE0hsKArpNfWYCNg&usqp=CAU',
                'created_at'=> date('Y-m-d h:i:s'),
                'updated_at'=> date('Y-m-d h:i:s')
            ],
            [
                'name'=>"Smart Phone",
                'price'=> "6540",
                'category'=> "Phone",
                'description'=> "Phone with button and 2 sim slots",
                'gallery' => 'https://mobilemall.pk/public_html/images/no_image.png',
                'created_at'=> date('Y-m-d h:i:s'),
                'updated_at'=> date('Y-m-d h:i:s')
            ],
            [
                'name'=>"Iphone ",
                'price'=> "87654",
                'category'=> "Iphone",
                'description'=> "Iphone with button and 2 sim slots",
                'gallery' => 'https://kddi-h.assetsadobe3.com/is/image/content/dam/au-com/mobile/mb_img_58.jpg?scl=1',
                'created_at'=> date('Y-m-d h:i:s'),
                'updated_at'=> date('Y-m-d h:i:s')
            ]
        ]);
    }
}
