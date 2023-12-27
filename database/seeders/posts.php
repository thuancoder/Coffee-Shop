<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

class posts extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('posts')->truncate();
        $name = ['bài viết 1','bài viết 2','bài viết 3'];
        $post_content =['content1','content2','content3'];
        $category_id =['1','2','3'];
        $maxAttempts = count($name);
        for ($i = 0; $i < $maxAttempts; $i++):
            $slug = Str::slug($name[$i], '-');
            DB::table('posts')->insert([
                'name' => $name[$i],
                'slug' => $slug,
                'post_content'=>$post_content[$i],
                'thumbnail'=> 'sai.png',
                'category_id'=> $category_id[$i],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        endfor;
        Schema::enableForeignKeyConstraints();
    }
}
