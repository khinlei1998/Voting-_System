<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' =>"Heart Beat Chocolate",
            'image'=>"/image/IMG_4940.JPG",
            'description'=>"The cake is made in the shape of a heart with the goodness of chocolate and yummy whipped cream topped with glazed cherries"
          
        ]); 

        DB::table('products')->insert([
            'name' =>"White Forest Cake",
            'image'=>"/image/cookies-and-cream-cake-square-1.jpg",
            'description'=>"A flavour that just fills you with bliss, this white forest cake is baked with tastiest ingredients. This round white forest cake looks even more tempting with contrasting red cherries on top"
          
        ]); 


        DB::table('products')->insert([
            'name' =>"Chocolate and Cream Cake",
            'image'=>"/image/cupcakes-1591871671409-3951.jpg",
            'description'=>"Extra moist 2 layers, but can be made as 3 layers or as a sheet cake Soft with a velvety crumb Deeply flavorful Unapologetically rich, just like my flourless chocolate cake Covered with creamy chocolate buttercream	"
          
        ]); 

        DB::table('products')->insert([
            'name' =>"Red Velvet Cake",
            'image'=>"/image/Red-Velvet-Cake-IMAGE-43 (1).jpg",
            'description'=>"Softer than most cakes with a mouth-watering velvet-like texture in each bite."
          
        ]); 
    }
}
