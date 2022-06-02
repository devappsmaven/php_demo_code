<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PriceTablePermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Price Shirt 
        Permission::create([
            'name'          => 'Price Shirt Table List',
            'slug'          => 'priceshirttable.index',
            'description'   => 'List of the price shirt table',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Price Shirt Table Details',
            'slug'          => 'priceshirttable.show',
            'description'   => 'View price shirt table Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit Price Shirt Table',
            'slug'          => 'priceshirttable.edit',
            'description'   => 'Edit price shirt table information',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        /*Permission::create([
            'name'          => 'Delete Price Shirt Table',
            'slug'          => 'priceshirttable.destroy',
            'description'   => 'Delete price shirt table from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);*/

        Permission::create([
            'name'          => 'Create Price Shirt Table',
            'slug'          => 'priceshirttable.create',
            'description'   => 'Add price shirt table to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'Generate Price Shirt Table',
            'slug'          => 'priceshirttable.generate',
            'description'   => 'Generate price shirt table to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        //Price Personalize
        
        Permission::create([
            'name'          => 'Price Personalize Table List',
            'slug'          => 'pricepersonalizetable.index',
            'description'   => 'List of the price personalize table',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Edit Price Personalize Table',
            'slug'          => 'pricepersonalizetable.edit',
            'description'   => 'Edit price personalize table information',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Create Price Personalize Table',
            'slug'          => 'pricepersonalizetable.create',
            'description'   => 'Add price personalize table to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
        
        //Price Discount

        Permission::create([
            'name'          => 'Price Discount Table List',
            'slug'          => 'pricediscounttable.index',
            'description'   => 'List of the price discount table',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Edit Price Discount Table',
            'slug'          => 'pricediscounttable.edit',
            'description'   => 'Edit price discount table information',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Create Price Discount Table',
            'slug'          => 'pricediscounttable.create',
            'description'   => 'Add price discount table to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
