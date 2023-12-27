<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('products')->truncate();
        $name = ['GRILLED BEEF','Roasted Steak','Chicken Curry','Seasonal Soup','Sea Trout'];
        $product_content =['description','description2','description3','description4','description5'];
        $price =['10','20','30','40','50'];
        $sale_price =['5','10','20','30','40'];
        $id_categories =['1','2','3','4','5'];
        $maxAttempts = count($name);
        for ($i = 0; $i < $maxAttempts; $i++):
            $slug = Str::slug($name[$i], '-');
            DB::table('products')->insert([
                'name' => $name[$i],
                'slug' => $slug,
                'product_content'=>$product_content[$i],
                'thumbnail'=> 'anh.png',
                'price'=>$price[$i],
                'sale_price'=>$sale_price[$i],
                'id_categories'=> $id_categories[$i],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        endfor;
        Schema::enableForeignKeyConstraints();
    }
}
