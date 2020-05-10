<?php

use Illuminate\Database\Seeder;

class Post extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert([
            'title' => 'Lorem ipsum dolor sit amet consestro',
            'body' => 'Lorem ipsum dolor sit amet consestor Lorem ipsum dolor sit amet consestor'
        ]);
        
    }
}
