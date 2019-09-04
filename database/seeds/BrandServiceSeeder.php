<?php

use Illuminate\Database\Seeder;
Use App\BrandService;

class BrandServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('brand_services')->insert([
        'name' => 'Socmed Management',
        'description' => 'Product 1',
        'created_at' => now(),
        ]);
      DB::table('brand_services')->insert([
        'name' => 'Socmed Analytic',
        'description' => 'Product 2',
        'created_at' => now(),
        ]);
      DB::table('brand_services')->insert([
        'name' => 'Web Design Services',
        'description' => 'Product 3',
        'created_at' => now(),
        ]);
      DB::table('brand_services')->insert([
        'name' => 'Influencer Recommendation',
        'description' => 'Product 4',
        'created_at' => now(),
        ]);
      DB::table('brand_services')->insert([
        'name' => 'Influencer-Brand Matching Tools',
        'description' => 'Product 5',
        'created_at' => now(),
        ]);
    }
}
