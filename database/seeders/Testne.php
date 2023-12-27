<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class Testne extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('testne')->truncate();
        $name = ['GRILLED BEEF','Roasted Steak','Chicken Curry','Seasonal Soup','Sea Trout'];
        $price =['10','20','30','40','50'];
        $maxAttempts = count($name);
        for ($i = 0; $i < $maxAttempts; $i++):
            DB::table('testne')->insert([
                'name' => $name[$i],
                'price'=>$price[$i],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        endfor;
        Schema::enableForeignKeyConstraints();
    }
}
