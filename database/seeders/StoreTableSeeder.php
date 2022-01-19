<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Store;
class StoreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $storeRecords=[
            ['id'=>1,'name'=>'black jacket','description'=>'store1','description_ar'=>'blak jacket','image'=>'brand_01.jpg','url'=>'','status'=>1],
            ['id'=>2,'name'=>'black jacket','description'=>'store2','description_ar'=>'blak jacket','image'=>'brand_02.jpg','url'=>'','status'=>1],
            ['id'=>3,'name'=>'black jacket','description'=>'store3','description_ar'=>'blak jacket','image'=>'brand_03.jpg','url'=>'','status'=>1]

        ];
        Store::insert($storeRecords);
    }
}
