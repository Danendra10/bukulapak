<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeoductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
                [
                    'name' => 'LG Mobile',
                    'price' => '200',
                    'category' => 'mobile',
                    'description' => ' smartphone an omled screen',
                    'gallary' => 'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_01-1100-V4.jpg',
                ]
                ,
                [
                    'name' => 'LG Mobile 2',
                    'price' => '300',
                    'category' => 'mobile',
                    'description' => ' smartphone an omled screen',
                    'gallary' => 'https://cdn.vox-cdn.com/thumbor/9ahNZ6eDwcWuKhqD_MntH0Kff94=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/22320968/ajohnson_210222_4437__005.jpg',
                ],
                [
                    'name' => 'LG Mobile 3',
                    'price' => '400',
                    'category' => 'mobile',
                    'description' => ' smartphone an omled screen',
                    'gallary' => 'https://static.techspot.com/images2/news/bigimage/2020/09/2020-09-14-image-21.jpg',
                ]
                ,
                [
                    'name' => 'LG Mobile 4',
                    'price' => '500',
                    'category' => 'mobile',
                    'description' => ' smartphone an omled screen',
                    'gallary' => 'https://www.lg.com/in/images/mobile-phones/md06155757/gallery/Platinum_01-1100-V4.jpg',
                ],
            ]
        );
    }
}
