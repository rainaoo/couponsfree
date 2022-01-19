<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Banner;
class BannersTableSeeder extends Seeder
{
   /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bannerRecords=[
            ['id'=>1,'image'=>'banner1.jpg','link'=>'','title'=>'black jacket','title_ar'=>'كوبونات','alt'=>'blak jacket','discount'=>'20%','status'=>1],
            ['id'=>2,'image'=>'banner2.jpg','link'=>'','title'=>'bluejacket','title_ar'=>'تخفيضات','alt'=>'blue jacket','discount'=>'20%','status'=>1],
            ['id'=>3,'image'=>'banner3.jpg','link'=>'','title'=>'red jacket','title_ar'=>'عروض','alt'=>'red jacket','discount'=>'20%','status'=>1]

        ];
        Banner::insert($bannerRecords);

    }
}
