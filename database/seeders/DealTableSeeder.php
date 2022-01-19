<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Deal;
class DealTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dealRecord=[
            ['id'=>1,'category_id'=>2,'store_id'=>1,'title'=>'blue t-shirt','title_ar'=>'كوبون 1','description'=>'test',
            'description_ar'=>'test', 'price_old'=>'323', 'price_new'=>'41','discount'=>10,'main_image'=>'','link'=>'ww',
            'expires'=>'02/12/20','status'=>1],

            ['id'=>2,'category_id'=>1,'store_id'=>3,'title'=>'blue t-shirt','title_ar'=>'كوبون 1','description'=>'test',
            'description_ar'=>'test', 'price_old'=>'323', 'price_new'=>'41','discount'=>10,'main_image'=>'','link'=>'ww',
            'expires'=>'02/12/20','status'=>1],


            ['id'=>3,'category_id'=>3,'store_id'=>2,'title'=>'blue t-shirt','title_ar'=>'كوبون 1','description'=>'test',
            'description_ar'=>'test', 'price_old'=>'323', 'price_new'=>'41','discount'=>10,'main_image'=>'','link'=>'ww',
            'expires'=>'02/12/20','status'=>1],

        ];
  
           
  
          Deal::insert($dealRecord);
      }
    
}
