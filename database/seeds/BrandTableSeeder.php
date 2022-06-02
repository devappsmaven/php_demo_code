<?php

use Illuminate\Database\Seeder;
use App\Brand;


class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Brand
        Brand::create([
            'name' => 'Gildan',
            'status' => 'Enable',
            'slug' => str_slug('Gildan'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Brand::create([
            'name' => 'Tultex',
            'status' => 'Enable',
            'slug' => str_slug('Tultex'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Brand::create([
            'name' => 'Bella_Canvas',
            'status' => 'Enable',
            'slug' => str_slug('Bella_Canvas'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Brand::create([
            'name' => 'American_Apparel',
            'status' => 'Enable',
            'slug' => str_slug('American_Apparel'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Brand::create([
            'name' => 'Anvil',
            'status' => 'Enable',
            'slug' => str_slug('Anvil'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Brand::create([
            'name' => 'Lat',
            'status' => 'Enable',
            'slug' => str_slug('Lat'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Brand::create([
            'name' => 'Rabbit_Skins',
            'status' => 'Enable',
            'slug' => str_slug('Rabbit_Skins'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Brand::create([
            'name' => 'Code_Five',
            'status' => 'Enable',
            'slug' => str_slug('Code_Five'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Brand::create([
            'name' => 'Augusta',
            'status' => 'Enable',
            'slug' => str_slug('Augusta'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Brand::create([
            'name' => 'Izod',
            'status' => 'Enable',
            'slug' => str_slug('Izod'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Brand::create([
            'name' => 'Flexfit',
            'status' => 'Enable',
            'slug' => str_slug('Flexfit'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Brand::create([
            'name' => 'Liberty_Bags',
            'status' => 'Enable',
            'slug' => str_slug('Liberty_Bags'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Brand::create([
            'name' => 'Sport_Tek',
            'status' => 'Enable',
            'slug' => str_slug('Sport_Tek'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Brand::create([
            'name' => 'PortAuthority',
            'status' => 'Enable',
            'slug' => str_slug('PortAuthority'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Brand::create([
            'name' => 'Port&Company',
            'status' => 'Enable',
            'slug' => str_slug('Port&Company'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Brand::create([
            'name' => 'Harriton',
            'status' => 'Enable',
            'slug' => str_slug('Harriton'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Brand::create([
            'name' => 'Next Level',
            'status' => 'Enable',
            'slug' => str_slug('Next Level'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Brand::create([
            'name' => 'Team365',
            'status' => 'Enable',
            'slug' => str_slug('Team365'),
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
    }
}
