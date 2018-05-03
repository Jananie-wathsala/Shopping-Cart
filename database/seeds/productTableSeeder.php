<?php

use Illuminate\Database\Seeder;

class productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product=new \App\product([
            'imagePath'=>'https://cdn.waterstones.com/bookjackets/large/9781/7853/9781785301544.jpg',
            'title'=>'Harry Potter',
            'description'=>'Lorem Ipsum is simply dummy text of the printing',
            'price'=>10
        ]);
        $product->save();
        
          $product=new \App\product([
            'imagePath'=>'https://cdn.waterstones.com/bookjackets/large/9781/7853/9781785301544.jpg',
            'title'=>'Harry Potter',
            'description'=>'Lorem Ipsum is simply dummy text of the printing',
            'price'=>10
        ]);
        $product->save();
          $product=new \App\product([
            'imagePath'=>'https://cdn.waterstones.com/bookjackets/large/9781/7853/9781785301544.jpg',
            'title'=>'Harry Potter',
            'description'=>'Lorem Ipsum is simply dummy text of the printing',
            'price'=>10
        ]);
        $product->save();
    }
}
