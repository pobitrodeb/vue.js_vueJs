<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;
use SebastianBergmann\FileIterator\Factory;
use GuzzleHttp\Promise\Create;
class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $facker = Factory::create();

      foreach(range(1,10) as $index ){

        Blog::create([
            'title'             => $facker->paragraph,
            'description'       => $facker->paragraph
        ]);

      }


    }
}
