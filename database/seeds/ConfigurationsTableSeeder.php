<?php

use Illuminate\Database\Seeder;
use App\Configuration;

class ConfigurationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Configuration::create([
            'sitename' => 'Vivid Customs',
            'logo' => 'logo.png',
            'url' => 'https://www.vividcustoms.com',
            'email' => 'admin@vividcustom.com',
            'language' => 'English (United States)',
            'timezone' => 'Houston',
            'dateformat' => 'm/d/Y',
            'minutes_lockout' =>20,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
    }
}
