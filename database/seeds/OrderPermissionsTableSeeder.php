<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class OrderPermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Orders
        Permission::create([
            'name'          => 'Orders List',
            'slug'          => 'orders.index',
            'description'   => 'List of the orders',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Permission::create([
            'name'          => 'Order Details',
            'slug'          => 'orders.show',
            'description'   => 'View orders Details',   
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),             
        ]);
        
        Permission::create([
            'name'          => 'Edit Order',
            'slug'          => 'orders.edit',
            'description'   => 'Edit orders informationa',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Permission::create([
            'name'          => 'Delete Order',
            'slug'          => 'orders.destroy',
            'description'   => 'Delete orders from the system',
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),          
        ]);

        Permission::create([
            'name'          => 'Create Order',
            'slug'          => 'orders.create',
            'description'   => 'Add orders to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'All Orders',
            'slug'          => 'orders.all',
            'description'   => 'Add orders to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'View News Orders',
            'slug'          => 'orders.new',
            'description'   => 'Add orders to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'View Screen Printing Orders',
            'slug'          => 'orders.screenprinting',
            'description'   => 'Add orders to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'View Digital Printing Orders',
            'slug'          => 'orders.digitalprinting',
            'description'   => 'Add orders to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'View Embriodery Orders',
            'slug'          => 'orders.embroidery',
            'description'   => 'Add orders to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'View Canceled Orders',
            'slug'          => 'orders.canceled',
            'description'   => 'Add orders to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'View Refounded Orders',
            'slug'          => 'orders.refounded',
            'description'   => 'Add orders to the system',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'View Order Details',
            'slug'          => 'orders.orderdetails',
            'description'   => 'View the order details report of specific order',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'View Order Details PDF',
            'slug'          => 'orders.orderdetailspdf',
            'description'   => 'View the PDF order details report of specific order',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'View Order Details Print',
            'slug'          => 'orders.orderdetailsprint',
            'description'   => 'View the print order details report of specific order',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'View Order Invoice',
            'slug'          => 'orders.invoice',
            'description'   => 'View the invoice report of specific order',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'View Order Invoice PDF',
            'slug'          => 'orders.invoicepdf',
            'description'   => 'View the PDF invoice report of specific order',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'View Order Invoice Print',
            'slug'          => 'orders.invoicepprint',
            'description'   => 'View the print invoice report of specific order',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'View Order Sheet',
            'slug'          => 'orders.ordersheet',
            'description'   => 'View the order sheet report of specific order',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'View Order Sheet PDF',
            'slug'          => 'orders.ordersheetpdf',
            'description'   => 'View the PDF order sheet report of specific order',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'View Order Sheet Print',
            'slug'          => 'orders.ordersheetprint',
            'description'   => 'View the print order sheet report of specific order',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'View Paking Slip',
            'slug'          => 'orders.pakingslip',
            'description'   => 'View the paking slip report of specific order',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'View Paking Slip PDF',
            'slug'          => 'orders.pakingslippdf',
            'description'   => 'View the PDF paking slip report of specific order',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'View Paking Slip Print',
            'slug'          => 'orders.pakingslipprint',
            'description'   => 'View the print paking slip report of specific order',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'Generate Order List',
            'slug'          => 'orders.generatelist',
            'description'   => 'Generate Order List',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'View Order List PDF',
            'slug'          => 'orders.downloadlist',
            'description'   => 'View Order List PDF',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
        

        Permission::create([
            'name'          => 'Assign Orders to User',
            'slug'          => 'orders.asignedall',
            'description'   => 'Assign one or many orders to specific order',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);

        Permission::create([
            'name'          => 'Assign Order to User',
            'slug'          => 'orders.asignedto',
            'description'   => 'Assign one order to specific order',     
            'created_at'   => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at'   => Carbon\Carbon::now()->toDateTimeString(),     
        ]);
    }
}
