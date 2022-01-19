<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoryRecords=[
            ['id'=>1,'name'=>'Foode & Drink','name_ar'=>'الاكل والشرب','status'=>1],
            ['id'=>2,'name'=>'Event','name_ar'=>'الاحداث','status'=>1],
            ['id'=>3,'name'=>'Beauty','name_ar'=>'الجمال','status'=>1]
        ];
        Category::insert($categoryRecords);
    
    }
}
