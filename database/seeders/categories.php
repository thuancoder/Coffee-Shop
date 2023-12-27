<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('categories')->truncate();
        $category_name = ['Food','Drink','Cake'];
        $category_content =['content1','content2','content3'];
        $maxAttempts = count($category_name);
        for ($i = 0; $i < $maxAttempts; $i++):
            DB::table('categories')->insert([
                'category_name' => $category_name[$i],
                'category_content' =>$category_content[$i],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        endfor;
        Schema::enableForeignKeyConstraints();
    }
}
