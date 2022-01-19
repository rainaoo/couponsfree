<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Coupon;
class CouponTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $couponRecord=[
            ['id'=>1,'category_id'=>2,'store_id'=>1,'title'=>'blue t-shirt','title_ar'=>'كوبون 1',
            'coupon_code'=>'bt001','coupon_discount'=>10,'main_image'=>'','link'=>'ww','description'=>'test',
            'description_ar'=>'test','expires'=>'02/12/20','status'=>1],

            ['id'=>2,'category_id'=>1,'store_id'=>3,'title'=>'blue t-shirt','title_ar'=>'كوبون 1',
            'coupon_code'=>'bt001','coupon_discount'=>10,'main_image'=>'','link'=>'ww','description'=>'test',
            'description_ar'=>'test','expires'=>'02/12/20','status'=>1],

            ['id'=>3,'category_id'=>2,'store_id'=>2,'title'=>'blue t-shirt','title_ar'=>'كوبون 1',
            'coupon_code'=>'bt001','coupon_discount'=>10,'main_image'=>'','link'=>'ww','description'=>'test',
            'description_ar'=>'test','expires'=>'02/12/20','status'=>1],
        ];
  
           
  
          Coupon::insert($couponRecord);
    }
    
}
