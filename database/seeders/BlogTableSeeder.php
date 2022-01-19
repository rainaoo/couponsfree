<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;


class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blogRecord=[
            ['id'=>1,'category_id'=>2,'store_id'=>1,'title'=>'blue t-shirt','title_ar'=>'كوبون 1','description'=>'test',
            'description_ar'=>'test','main_image'=>'',
           'status'=>1],

           ['id'=>2,'category_id'=>2,'store_id'=>1,'title'=>'blue t-shirt','title_ar'=>'كوبون 1','description'=>'test',
           'description_ar'=>'test','main_image'=>'',
          'status'=>1],


          ['id'=>3,'category_id'=>2,'store_id'=>1,'title'=>'blue t-shirt','title_ar'=>'كوبون 1','description'=>'test',
          'description_ar'=>'test','main_image'=>'',
         'status'=>1],

        ];
  
           
  
          Blog::insert($blogRecord);
    }
}
