<?php

use Illuminate\Database\Seeder;
use App\Color;

class InkColorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Ink Color
         Color::create([
            'order'=> '1',
            'name' => 'Black',
            'hex' => '#000000',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '2',
            'name' => 'White',
            'hex' => '#ffffff',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '3',
            'name' => 'Yelow',
            'hex' => '#fcdc6c',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '4',
            'name' => 'Yelow',
            'hex' => '#f3d407',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '5',
            'name' => 'Gold',
            'hex' => '#edbc12',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '6',
            'name' => 'Light Pink',
            'hex' => '#ffa7cc',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '7',
            'name' => 'Pink',
            'hex' => '#fe8ace',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '8',
            'name' => 'Neon Magenta',
            'hex' => '#f74bb4',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '9',
            'name' => 'Orange',
            'hex' => '#fc5f0a',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '10',
            'name' => 'Red',
            'hex' => '#d90303',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        Color::create([
            'order'=> '11',
            'name' => 'Cardinal Red',
            'hex' => '#981d1d',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '12',
            'name' => 'Maroon',
            'hex' => '#680523',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '13',
            'name' => 'Brown',
            'hex' => '#45200c',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '14',
            'name' => 'Lime Green',
            'hex' => '#32d72e',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '15',
            'name' => 'Brite Green',
            'hex' => '#048107',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '16',
            'name' => 'Green',
            'hex' => '#006002',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '17',
            'name' => 'Brite Blue',
            'hex' => '#149ad9',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '18',
            'name' => 'Peacock Blue',
            'hex' => '#3ab3d6',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '19',
            'name' => 'Aqua Marine',
            'hex' => '#0caaac',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '20',
            'name' => 'Mono Blue',
            'hex' => '#063fc0',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '21',
            'name' => 'Royal Blue',
            'hex' => '#0f098d',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '22',
            'name' => 'Navy',
            'hex' => '#0e3875',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '23',
            'name' => 'Lilac',
            'hex' => '#d990ff',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '24',
            'name' => 'Rose Magenta',
            'hex' => '#aa23b2',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '25',
            'name' => 'Purple',
            'hex' => '#540471',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '26',
            'name' => 'Light Gray',
            'hex' => '#bbc1c4',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '27',
            'name' => 'Dark Gray',
            'hex' => '#737373',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '28',
            'name' => 'Flesh',
            'hex' => '#f3e2c7',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '29',
            'name' => 'Khaki',
            'hex' => '#d8c3a0',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '30',
            'name' => 'Blazer Gold',
            'hex' => '#d3a864',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Color::create([
            'order'=> '31',
            'name' => 'Full Color',
            'hex' => '',
            'status' => 'Enable',
            'type' => 'ink',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
    }
}
