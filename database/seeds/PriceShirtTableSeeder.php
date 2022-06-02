<?php

use Illuminate\Database\Seeder;
use App\PriceShirtTable;

class PriceShirtTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //PriceShirtTable
        PriceShirtTable::create([
            'RANGEFROM' => '1',
            'RANGETO' => '1',
            '_1COLOR' => '16',
            '_2COLOR' => '16',
            '_3COLOR' => '16',
            '_4COLOR' => '16',
            '_5COLOR' => '16',
            '_6COLOR' => '16',
            '_7COLOR' => '16',
            '_8COLOR' => '16',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '2',
            'RANGETO' => '2',
            '_1COLOR' => '15.5',
            '_2COLOR' => '15.5',
            '_3COLOR' => '15.5',
            '_4COLOR' => '15.5',
            '_5COLOR' => '15.5',
            '_6COLOR' => '15.5',
            '_7COLOR' => '15.5',
            '_8COLOR' => '15.5',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '3',
            'RANGETO' => '3',
            '_1COLOR' => '15',
            '_2COLOR' => '15',
            '_3COLOR' => '15',
            '_4COLOR' => '15',
            '_5COLOR' => '15',
            '_6COLOR' => '15',
            '_7COLOR' => '15',
            '_8COLOR' => '15',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '4',
            'RANGETO' => '4',
            '_1COLOR' => '14',
            '_2COLOR' => '14',
            '_3COLOR' => '14',
            '_4COLOR' => '14.15',
            '_5COLOR' => '14.4',
            '_6COLOR' => '14.5',
            '_7COLOR' => '14.5',
            '_8COLOR' => '14.5',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '5',
            'RANGETO' => '5',
            '_1COLOR' => '13',
            '_2COLOR' => '13',
            '_3COLOR' => '13',
            '_4COLOR' => '13.3',
            '_5COLOR' => '13.8',
            '_6COLOR' => '14',
            '_7COLOR' => '14',
            '_8COLOR' => '14',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '6',
            'RANGETO' => '6',
            '_1COLOR' => '12',
            '_2COLOR' => '12',
            '_3COLOR' => '12',
            '_4COLOR' => '12.45',
            '_5COLOR' => '13.2',
            '_6COLOR' => '13.5',
            '_7COLOR' => '13.5',
            '_8COLOR' => '13.5',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '7',
            'RANGETO' => '7',
            '_1COLOR' => '10.5',
            '_2COLOR' => '11',
            '_3COLOR' => '11.25',
            '_4COLOR' => '11.9',
            '_5COLOR' => '12.9',
            '_6COLOR' => '13.2',
            '_7COLOR' => '13.25',
            '_8COLOR' => '13.3',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '8',
            'RANGETO' => '8',
            '_1COLOR' => '9',
            '_2COLOR' => '10',
            '_3COLOR' => '10.5',
            '_4COLOR' => '11.35',
            '_5COLOR' => '12.6',
            '_6COLOR' => '12.9',
            '_7COLOR' => '13',
            '_8COLOR' => '13.1',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '9',
            'RANGETO' => '9',
            '_1COLOR' => '7.5',
            '_2COLOR' => '9',
            '_3COLOR' => '9.75',
            '_4COLOR' => '10.8',
            '_5COLOR' => '12.3',
            '_6COLOR' => '12.6',
            '_7COLOR' => '12.75',
            '_8COLOR' => '12.9',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '10',
            'RANGETO' => '10',
            '_1COLOR' => '6.3',
            '_2COLOR' => '8.45',
            '_3COLOR' => '9.4',
            '_4COLOR' => '10.7',
            '_5COLOR' => '12.1',
            '_6COLOR' => '12.41',
            '_7COLOR' => '12.57',
            '_8COLOR' => '12.75',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '11',
            'RANGETO' => '11',
            '_1COLOR' => '5.1',
            '_2COLOR' => '7.9',
            '_3COLOR' => '9.05',
            '_4COLOR' => '10.6',
            '_5COLOR' => '11.9',
            '_6COLOR' => '12.22',
            '_7COLOR' => '12.39',
            '_8COLOR' => '12.6',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '12',
            'RANGETO' => '12',
            '_1COLOR' => '4.8',
            '_2COLOR' => '7.65',
            '_3COLOR' => '8.85',
            '_4COLOR' => '10.3',
            '_5COLOR' => '11.8',
            '_6COLOR' => '12.12',
            '_7COLOR' => '12.31',
            '_8COLOR' => '12.55',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '13',
            'RANGETO' => '13',
            '_1COLOR' => '4.76',
            '_2COLOR' => '7.55',
            '_3COLOR' => '8.8',
            '_4COLOR' => '10.25',
            '_5COLOR' => '11.72',
            '_6COLOR' => '12.08',
            '_7COLOR' => '12.29',
            '_8COLOR' => '12.53',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '14',
            'RANGETO' => '14',
            '_1COLOR' => '4.72',
            '_2COLOR' => '7.45',
            '_3COLOR' => '8.75',
            '_4COLOR' => '10.2',
            '_5COLOR' => '11.64',
            '_6COLOR' => '12.04',
            '_7COLOR' => '12.27',
            '_8COLOR' => '12.51',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '15',
            'RANGETO' => '15',
            '_1COLOR' => '4.68',
            '_2COLOR' => '7.35',
            '_3COLOR' => '8.7',
            '_4COLOR' => '10.15',
            '_5COLOR' => '11.56',
            '_6COLOR' => '12',
            '_7COLOR' => '12.25',
            '_8COLOR' => '12.49',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '16',
            'RANGETO' => '16',
            '_1COLOR' => '4.64',
            '_2COLOR' => '7.25',
            '_3COLOR' => '8.65',
            '_4COLOR' => '10.1',
            '_5COLOR' => '11.48',
            '_6COLOR' => '11.96',
            '_7COLOR' => '12.23',
            '_8COLOR' => '12.47',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '17',
            'RANGETO' => '17',
            '_1COLOR' => '4.6',
            '_2COLOR' => '7.15',
            '_3COLOR' => '8.6',
            '_4COLOR' => '10.05',
            '_5COLOR' => '11.4',
            '_6COLOR' => '11.92',
            '_7COLOR' => '12.21',
            '_8COLOR' => '12.45',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '18',
            'RANGETO' => '18',
            '_1COLOR' => '4.56',
            '_2COLOR' => '7.05',
            '_3COLOR' => '8.55',
            '_4COLOR' => '10',
            '_5COLOR' => '11.32',
            '_6COLOR' => '11.88',
            '_7COLOR' => '12.19',
            '_8COLOR' => '12.43',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '19',
            'RANGETO' => '19',
            '_1COLOR' => '4.53',
            '_2COLOR' => '6.95',
            '_3COLOR' => '8.5',
            '_4COLOR' => '9.95',
            '_5COLOR' => '11.24',
            '_6COLOR' => '11.8',
            '_7COLOR' => '12.15',
            '_8COLOR' => '12.41',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '20',
            'RANGETO' => '20',
            '_1COLOR' => '4.5',
            '_2COLOR' => '6.85',
            '_3COLOR' => '8.45',
            '_4COLOR' => '9.9',
            '_5COLOR' => '11.16',
            '_6COLOR' => '11.72',
            '_7COLOR' => '12.11',
            '_8COLOR' => '12.39',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '21',
            'RANGETO' => '21',
            '_1COLOR' => '4.47',
            '_2COLOR' => '6.75',
            '_3COLOR' => '8.4',
            '_4COLOR' => '9.85',
            '_5COLOR' => '11.08',
            '_6COLOR' => '11.64',
            '_7COLOR' => '12.07',
            '_8COLOR' => '12.37',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '22',
            'RANGETO' => '22',
            '_1COLOR' => '4.44',
            '_2COLOR' => '6.65',
            '_3COLOR' => '8.35',
            '_4COLOR' => '9.8',
            '_5COLOR' => '11',
            '_6COLOR' => '11.56',
            '_7COLOR' => '12.03',
            '_8COLOR' => '12.35',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '23',
            'RANGETO' => '23',
            '_1COLOR' => '4.41',
            '_2COLOR' => '6.55',
            '_3COLOR' => '8.3',
            '_4COLOR' => '9.75',
            '_5COLOR' => '10.92',
            '_6COLOR' => '11.48',
            '_7COLOR' => '11.99',
            '_8COLOR' => '12.33',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '24',
            'RANGETO' => '24',
            '_1COLOR' => '4.38',
            '_2COLOR' => '6.45',
            '_3COLOR' => '8.25',
            '_4COLOR' => '9.7',
            '_5COLOR' => '10.84',
            '_6COLOR' => '11.4',
            '_7COLOR' => '11.95',
            '_8COLOR' => '12.31',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '25',
            'RANGETO' => '25',
            '_1COLOR' => '4.35',
            '_2COLOR' => '6.35',
            '_3COLOR' => '8.2',
            '_4COLOR' => '9.65',
            '_5COLOR' => '10.76',
            '_6COLOR' => '11.32',
            '_7COLOR' => '11.91',
            '_8COLOR' => '12.29',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '26',
            'RANGETO' => '26',
            '_1COLOR' => '4.32',
            '_2COLOR' => '6.25',
            '_3COLOR' => '8.15',
            '_4COLOR' => '9.6',
            '_5COLOR' => '10.68',
            '_6COLOR' => '11.24',
            '_7COLOR' => '11.87',
            '_8COLOR' => '12.27',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '27',
            'RANGETO' => '27',
            '_1COLOR' => '4.29',
            '_2COLOR' => '6.15',
            '_3COLOR' => '8.1',
            '_4COLOR' => '9.55',
            '_5COLOR' => '10.6',
            '_6COLOR' => '11.16',
            '_7COLOR' => '11.83',
            '_8COLOR' => '12.25',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '28',
            'RANGETO' => '28',
            '_1COLOR' => '4.26',
            '_2COLOR' => '6.05',
            '_3COLOR' => '8.05',
            '_4COLOR' => '9.5',
            '_5COLOR' => '10.52',
            '_6COLOR' => '11.08',
            '_7COLOR' => '11.79',
            '_8COLOR' => '12.23',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '29',
            'RANGETO' => '29',
            '_1COLOR' => '4.23',
            '_2COLOR' => '5.95',
            '_3COLOR' => '8',
            '_4COLOR' => '9.45',
            '_5COLOR' => '10.44',
            '_6COLOR' => '11',
            '_7COLOR' => '11.75',
            '_8COLOR' => '12.21',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '30',
            'RANGETO' => '30',
            '_1COLOR' => '4.2',
            '_2COLOR' => '5.85',
            '_3COLOR' => '7.95',
            '_4COLOR' => '9.4',
            '_5COLOR' => '10.36',
            '_6COLOR' => '10.92',
            '_7COLOR' => '11.71',
            '_8COLOR' => '12.19',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '31',
            'RANGETO' => '31',
            '_1COLOR' => '4.18',
            '_2COLOR' => '5.76',
            '_3COLOR' => '7.86',
            '_4COLOR' => '9.24',
            '_5COLOR' => '10.26',
            '_6COLOR' => '10.86',
            '_7COLOR' => '11.67',
            '_8COLOR' => '12.17',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '32',
            'RANGETO' => '32',
            '_1COLOR' => '4.16',
            '_2COLOR' => '5.67',
            '_3COLOR' => '7.77',
            '_4COLOR' => '9.08',
            '_5COLOR' => '10.16',
            '_6COLOR' => '10.8',
            '_7COLOR' => '11.63',
            '_8COLOR' => '12.15',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '33',
            'RANGETO' => '33',
            '_1COLOR' => '4.14',
            '_2COLOR' => '5.58',
            '_3COLOR' => '7.68',
            '_4COLOR' => '8.92',
            '_5COLOR' => '10.06',
            '_6COLOR' => '10.74',
            '_7COLOR' => '11.59',
            '_8COLOR' => '12.13',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '34',
            'RANGETO' => '34',
            '_1COLOR' => '4.12',
            '_2COLOR' => '5.49',
            '_3COLOR' => '7.59',
            '_4COLOR' => '8.76',
            '_5COLOR' => '9.96',
            '_6COLOR' => '10.68',
            '_7COLOR' => '11.55',
            '_8COLOR' => '12.11',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '35',
            'RANGETO' => '35',
            '_1COLOR' => '4.1',
            '_2COLOR' => '5.4',
            '_3COLOR' => '7.5',
            '_4COLOR' => '8.6',
            '_5COLOR' => '9.86',
            '_6COLOR' => '10.62',
            '_7COLOR' => '11.51',
            '_8COLOR' => '12.09',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '36',
            'RANGETO' => '36',
            '_1COLOR' => '4.08',
            '_2COLOR' => '5.31',
            '_3COLOR' => '7.41',
            '_4COLOR' => '8.44',
            '_5COLOR' => '9.76',
            '_6COLOR' => '10.56',
            '_7COLOR' => '11.47',
            '_8COLOR' => '12.07',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '37',
            'RANGETO' => '37',
            '_1COLOR' => '4.06',
            '_2COLOR' => '5.22',
            '_3COLOR' => '7.32',
            '_4COLOR' => '8.28',
            '_5COLOR' => '9.66',
            '_6COLOR' => '10.5',
            '_7COLOR' => '11.43',
            '_8COLOR' => '12.05',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '38',
            'RANGETO' => '38',
            '_1COLOR' => '4.04',
            '_2COLOR' => '5.13',
            '_3COLOR' => '7.23',
            '_4COLOR' => '8.12',
            '_5COLOR' => '9.56',
            '_6COLOR' => '10.44',
            '_7COLOR' => '11.39',
            '_8COLOR' => '12.03',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '39',
            'RANGETO' => '39',
            '_1COLOR' => '4.02',
            '_2COLOR' => '5.04',
            '_3COLOR' => '7.14',
            '_4COLOR' => '7.96',
            '_5COLOR' => '9.46',
            '_6COLOR' => '10.38',
            '_7COLOR' => '11.35',
            '_8COLOR' => '12.01',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '40',
            'RANGETO' => '40',
            '_1COLOR' => '4',
            '_2COLOR' => '4.95',
            '_3COLOR' => '7.05',
            '_4COLOR' => '7.8',
            '_5COLOR' => '9.36',
            '_6COLOR' => '10.32',
            '_7COLOR' => '11.31',
            '_8COLOR' => '11.99',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '41',
            'RANGETO' => '41',
            '_1COLOR' => '3.96',
            '_2COLOR' => '4.88',
            '_3COLOR' => '6.95',
            '_4COLOR' => '7.67',
            '_5COLOR' => '9.16',
            '_6COLOR' => '10.11',
            '_7COLOR' => '11.09',
            '_8COLOR' => '11.81',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '42',
            'RANGETO' => '42',
            '_1COLOR' => '3.92',
            '_2COLOR' => '4.81',
            '_3COLOR' => '6.85',
            '_4COLOR' => '7.54',
            '_5COLOR' => '8.96',
            '_6COLOR' => '9.9',
            '_7COLOR' => '10.87',
            '_8COLOR' => '11.63',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '43',
            'RANGETO' => '43',
            '_1COLOR' => '3.88',
            '_2COLOR' => '4.74',
            '_3COLOR' => '6.75',
            '_4COLOR' => '7.41',
            '_5COLOR' => '8.76',
            '_6COLOR' => '9.69',
            '_7COLOR' => '10.65',
            '_8COLOR' => '11.45',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '44',
            'RANGETO' => '44',
            '_1COLOR' => '3.84',
            '_2COLOR' => '4.67',
            '_3COLOR' => '6.65',
            '_4COLOR' => '7.28',
            '_5COLOR' => '8.56',
            '_6COLOR' => '9.48',
            '_7COLOR' => '10.43',
            '_8COLOR' => '11.27',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '45',
            'RANGETO' => '45',
            '_1COLOR' => '3.8',
            '_2COLOR' => '4.6',
            '_3COLOR' => '6.55',
            '_4COLOR' => '7.15',
            '_5COLOR' => '8.36',
            '_6COLOR' => '9.27',
            '_7COLOR' => '10.21',
            '_8COLOR' => '11.09',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '46',
            'RANGETO' => '46',
            '_1COLOR' => '3.76',
            '_2COLOR' => '4.53',
            '_3COLOR' => '6.45',
            '_4COLOR' => '7.02',
            '_5COLOR' => '8.16',
            '_6COLOR' => '9.06',
            '_7COLOR' => '9.99',
            '_8COLOR' => '10.91',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '47',
            'RANGETO' => '47',
            '_1COLOR' => '3.72',
            '_2COLOR' => '4.46',
            '_3COLOR' => '6.35',
            '_4COLOR' => '6.89',
            '_5COLOR' => '7.96',
            '_6COLOR' => '8.85',
            '_7COLOR' => '9.77',
            '_8COLOR' => '10.73',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '48',
            'RANGETO' => '48',
            '_1COLOR' => '3.68',
            '_2COLOR' => '4.39',
            '_3COLOR' => '6.25',
            '_4COLOR' => '6.76',
            '_5COLOR' => '7.76',
            '_6COLOR' => '8.64',
            '_7COLOR' => '9.55',
            '_8COLOR' => '10.55',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '49',
            'RANGETO' => '49',
            '_1COLOR' => '3.64',
            '_2COLOR' => '4.32',
            '_3COLOR' => '6.15',
            '_4COLOR' => '6.63',
            '_5COLOR' => '7.56',
            '_6COLOR' => '8.43',
            '_7COLOR' => '9.33',
            '_8COLOR' => '10.37',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '50',
            'RANGETO' => '50',
            '_1COLOR' => '3.6',
            '_2COLOR' => '4.25',
            '_3COLOR' => '6.05',
            '_4COLOR' => '6.5',
            '_5COLOR' => '7.36',
            '_6COLOR' => '8.22',
            '_7COLOR' => '9.11',
            '_8COLOR' => '10.19',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '51',
            'RANGETO' => '51',
            '_1COLOR' => '3.58',
            '_2COLOR' => '4.23',
            '_3COLOR' => '5.99',
            '_4COLOR' => '6.46',
            '_5COLOR' => '7.32',
            '_6COLOR' => '8.17',
            '_7COLOR' => '9.06',
            '_8COLOR' => '10.13',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '52',
            'RANGETO' => '52',
            '_1COLOR' => '3.56',
            '_2COLOR' => '4.21',
            '_3COLOR' => '5.93',
            '_4COLOR' => '6.42',
            '_5COLOR' => '7.28',
            '_6COLOR' => '8.12',
            '_7COLOR' => '9.01',
            '_8COLOR' => '10.07',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '53',
            'RANGETO' => '53',
            '_1COLOR' => '3.54',
            '_2COLOR' => '4.19',
            '_3COLOR' => '5.87',
            '_4COLOR' => '6.38',
            '_5COLOR' => '7.24',
            '_6COLOR' => '8.07',
            '_7COLOR' => '8.96',
            '_8COLOR' => '10.01',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '54',
            'RANGETO' => '54',
            '_1COLOR' => '3.52',
            '_2COLOR' => '4.17',
            '_3COLOR' => '5.81',
            '_4COLOR' => '6.34',
            '_5COLOR' => '7.2',
            '_6COLOR' => '8.02',
            '_7COLOR' => '8.91',
            '_8COLOR' => '9.95',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '55',
            'RANGETO' => '55',
            '_1COLOR' => '3.5',
            '_2COLOR' => '4.15',
            '_3COLOR' => '5.75',
            '_4COLOR' => '6.3',
            '_5COLOR' => '7.16',
            '_6COLOR' => '7.97',
            '_7COLOR' => '8.86',
            '_8COLOR' => '9.89',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '56',
            'RANGETO' => '56',
            '_1COLOR' => '3.48',
            '_2COLOR' => '4.13',
            '_3COLOR' => '5.69',
            '_4COLOR' => '6.26',
            '_5COLOR' => '7.12',
            '_6COLOR' => '7.92',
            '_7COLOR' => '8.81',
            '_8COLOR' => '9.83',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '57',
            'RANGETO' => '57',
            '_1COLOR' => '3.46',
            '_2COLOR' => '4.11',
            '_3COLOR' => '5.63',
            '_4COLOR' => '6.22',
            '_5COLOR' => '7.08',
            '_6COLOR' => '7.87',
            '_7COLOR' => '8.76',
            '_8COLOR' => '9.77',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '58',
            'RANGETO' => '58',
            '_1COLOR' => '3.44',
            '_2COLOR' => '4.09',
            '_3COLOR' => '5.57',
            '_4COLOR' => '6.18',
            '_5COLOR' => '7.04',
            '_6COLOR' => '7.82',
            '_7COLOR' => '8.71',
            '_8COLOR' => '9.71',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '59',
            'RANGETO' => '59',
            '_1COLOR' => '3.42',
            '_2COLOR' => '4.07',
            '_3COLOR' => '5.51',
            '_4COLOR' => '6.14',
            '_5COLOR' => '7',
            '_6COLOR' => '7.77',
            '_7COLOR' => '8.66',
            '_8COLOR' => '9.65',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '60',
            'RANGETO' => '60',
            '_1COLOR' => '3.4',
            '_2COLOR' => '4.05',
            '_3COLOR' => '5.45',
            '_4COLOR' => '6.1',
            '_5COLOR' => '6.96',
            '_6COLOR' => '7.72',
            '_7COLOR' => '8.61',
            '_8COLOR' => '9.59',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '61',
            'RANGETO' => '61',
            '_1COLOR' => '3.38',
            '_2COLOR' => '4.02',
            '_3COLOR' => '5.4',
            '_4COLOR' => '6.05',
            '_5COLOR' => '6.91',
            '_6COLOR' => '7.67',
            '_7COLOR' => '8.55',
            '_8COLOR' => '9.53',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '62',
            'RANGETO' => '62',
            '_1COLOR' => '3.36',
            '_2COLOR' => '3.99',
            '_3COLOR' => '5.35',
            '_4COLOR' => '6',
            '_5COLOR' => '6.86',
            '_6COLOR' => '7.62',
            '_7COLOR' => '8.49',
            '_8COLOR' => '9.47',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '63',
            'RANGETO' => '63',
            '_1COLOR' => '3.34',
            '_2COLOR' => '3.96',
            '_3COLOR' => '5.3',
            '_4COLOR' => '5.95',
            '_5COLOR' => '6.81',
            '_6COLOR' => '7.57',
            '_7COLOR' => '8.43',
            '_8COLOR' => '9.41',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '64',
            'RANGETO' => '64',
            '_1COLOR' => '3.32',
            '_2COLOR' => '3.93',
            '_3COLOR' => '5.25',
            '_4COLOR' => '5.9',
            '_5COLOR' => '6.76',
            '_6COLOR' => '7.52',
            '_7COLOR' => '8.37',
            '_8COLOR' => '9.35',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '65',
            'RANGETO' => '65',
            '_1COLOR' => '3.3',
            '_2COLOR' => '3.9',
            '_3COLOR' => '5.2',
            '_4COLOR' => '5.85',
            '_5COLOR' => '6.71',
            '_6COLOR' => '7.47',
            '_7COLOR' => '8.31',
            '_8COLOR' => '9.29',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '66',
            'RANGETO' => '66',
            '_1COLOR' => '3.28',
            '_2COLOR' => '3.87',
            '_3COLOR' => '5.15',
            '_4COLOR' => '5.8',
            '_5COLOR' => '6.66',
            '_6COLOR' => '7.42',
            '_7COLOR' => '8.25',
            '_8COLOR' => '9.23',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '67',
            'RANGETO' => '67',
            '_1COLOR' => '3.26',
            '_2COLOR' => '3.84',
            '_3COLOR' => '5.1',
            '_4COLOR' => '5.75',
            '_5COLOR' => '6.61',
            '_6COLOR' => '7.37',
            '_7COLOR' => '8.19',
            '_8COLOR' => '9.17',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '68',
            'RANGETO' => '68',
            '_1COLOR' => '3.24',
            '_2COLOR' => '3.81',
            '_3COLOR' => '5.05',
            '_4COLOR' => '5.7',
            '_5COLOR' => '6.56',
            '_6COLOR' => '7.32',
            '_7COLOR' => '8.13',
            '_8COLOR' => '9.11',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '69',
            'RANGETO' => '69',
            '_1COLOR' => '3.22',
            '_2COLOR' => '3.78',
            '_3COLOR' => '5',
            '_4COLOR' => '5.65',
            '_5COLOR' => '6.51',
            '_6COLOR' => '7.27',
            '_7COLOR' => '8.07',
            '_8COLOR' => '9.05',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '70',
            'RANGETO' => '70',
            '_1COLOR' => '3.2',
            '_2COLOR' => '3.75',
            '_3COLOR' => '4.95',
            '_4COLOR' => '5.6',
            '_5COLOR' => '6.46',
            '_6COLOR' => '7.22',
            '_7COLOR' => '8.01',
            '_8COLOR' => '8.99',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '71',
            'RANGETO' => '71',
            '_1COLOR' => '3.17',
            '_2COLOR' => '3.74',
            '_3COLOR' => '4.92',
            '_4COLOR' => '5.56',
            '_5COLOR' => '6.4',
            '_6COLOR' => '7.16',
            '_7COLOR' => '7.93',
            '_8COLOR' => '8.91',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '72',
            'RANGETO' => '72',
            '_1COLOR' => '3.14',
            '_2COLOR' => '3.73',
            '_3COLOR' => '4.89',
            '_4COLOR' => '5.52',
            '_5COLOR' => '6.34',
            '_6COLOR' => '7.1',
            '_7COLOR' => '7.85',
            '_8COLOR' => '8.83',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '73',
            'RANGETO' => '73',
            '_1COLOR' => '3.11',
            '_2COLOR' => '3.72',
            '_3COLOR' => '4.86',
            '_4COLOR' => '5.48',
            '_5COLOR' => '6.28',
            '_6COLOR' => '7.04',
            '_7COLOR' => '7.77',
            '_8COLOR' => '8.75',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '74',
            'RANGETO' => '74',
            '_1COLOR' => '3.08',
            '_2COLOR' => '3.71',
            '_3COLOR' => '4.83',
            '_4COLOR' => '5.44',
            '_5COLOR' => '6.22',
            '_6COLOR' => '6.98',
            '_7COLOR' => '7.69',
            '_8COLOR' => '8.67',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '75',
            'RANGETO' => '75',
            '_1COLOR' => '3.05',
            '_2COLOR' => '3.7',
            '_3COLOR' => '4.8',
            '_4COLOR' => '5.4',
            '_5COLOR' => '6.16',
            '_6COLOR' => '6.92',
            '_7COLOR' => '7.61',
            '_8COLOR' => '8.59',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '76',
            'RANGETO' => '76',
            '_1COLOR' => '3.02',
            '_2COLOR' => '3.69',
            '_3COLOR' => '4.77',
            '_4COLOR' => '5.36',
            '_5COLOR' => '6.1',
            '_6COLOR' => '6.86',
            '_7COLOR' => '7.53',
            '_8COLOR' => '8.51',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '77',
            'RANGETO' => '77',
            '_1COLOR' => '2.99',
            '_2COLOR' => '3.68',
            '_3COLOR' => '4.74',
            '_4COLOR' => '5.32',
            '_5COLOR' => '6.04',
            '_6COLOR' => '6.8',
            '_7COLOR' => '7.45',
            '_8COLOR' => '8.43',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '78',
            'RANGETO' => '78',
            '_1COLOR' => '2.96',
            '_2COLOR' => '3.67',
            '_3COLOR' => '4.71',
            '_4COLOR' => '5.28',
            '_5COLOR' => '5.98',
            '_6COLOR' => '6.74',
            '_7COLOR' => '7.37',
            '_8COLOR' => '8.35',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '79',
            'RANGETO' => '79',
            '_1COLOR' => '2.93',
            '_2COLOR' => '3.66',
            '_3COLOR' => '4.68',
            '_4COLOR' => '5.24',
            '_5COLOR' => '5.92',
            '_6COLOR' => '6.68',
            '_7COLOR' => '7.29',
            '_8COLOR' => '8.27',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '80',
            'RANGETO' => '80',
            '_1COLOR' => '2.9',
            '_2COLOR' => '3.65',
            '_3COLOR' => '4.65',
            '_4COLOR' => '5.2',
            '_5COLOR' => '5.86',
            '_6COLOR' => '6.62',
            '_7COLOR' => '7.21',
            '_8COLOR' => '8.19',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '81',
            'RANGETO' => '81',
            '_1COLOR' => '2.89',
            '_2COLOR' => '3.64',
            '_3COLOR' => '4.62',
            '_4COLOR' => '5.17',
            '_5COLOR' => '5.81',
            '_6COLOR' => '6.57',
            '_7COLOR' => '7.16',
            '_8COLOR' => '8.14',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '82',
            'RANGETO' => '82',
            '_1COLOR' => '2.88',
            '_2COLOR' => '3.63',
            '_3COLOR' => '4.59',
            '_4COLOR' => '5.14',
            '_5COLOR' => '5.76',
            '_6COLOR' => '6.52',
            '_7COLOR' => '7.11',
            '_8COLOR' => '8.09',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '83',
            'RANGETO' => '83',
            '_1COLOR' => '2.87',
            '_2COLOR' => '3.62',
            '_3COLOR' => '4.56',
            '_4COLOR' => '5.11',
            '_5COLOR' => '5.71',
            '_6COLOR' => '6.47',
            '_7COLOR' => '7.06',
            '_8COLOR' => '8.04',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '84',
            'RANGETO' => '84',
            '_1COLOR' => '2.86',
            '_2COLOR' => '3.61',
            '_3COLOR' => '4.53',
            '_4COLOR' => '5.08',
            '_5COLOR' => '5.66',
            '_6COLOR' => '6.42',
            '_7COLOR' => '7.01',
            '_8COLOR' => '7.99',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '85',
            'RANGETO' => '85',
            '_1COLOR' => '2.85',
            '_2COLOR' => '3.6',
            '_3COLOR' => '4.5',
            '_4COLOR' => '5.05',
            '_5COLOR' => '5.61',
            '_6COLOR' => '6.37',
            '_7COLOR' => '6.96',
            '_8COLOR' => '7.94',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '86',
            'RANGETO' => '86',
            '_1COLOR' => '2.84',
            '_2COLOR' => '3.59',
            '_3COLOR' => '4.47',
            '_4COLOR' => '5.02',
            '_5COLOR' => '5.56',
            '_6COLOR' => '6.32',
            '_7COLOR' => '6.91',
            '_8COLOR' => '7.89',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '87',
            'RANGETO' => '87',
            '_1COLOR' => '2.83',
            '_2COLOR' => '3.58',
            '_3COLOR' => '4.44',
            '_4COLOR' => '4.99',
            '_5COLOR' => '5.51',
            '_6COLOR' => '6.27',
            '_7COLOR' => '6.86',
            '_8COLOR' => '7.84',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '88',
            'RANGETO' => '88',
            '_1COLOR' => '2.82',
            '_2COLOR' => '3.57',
            '_3COLOR' => '4.41',
            '_4COLOR' => '4.96',
            '_5COLOR' => '5.46',
            '_6COLOR' => '6.22',
            '_7COLOR' => '6.81',
            '_8COLOR' => '7.79',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '89',
            'RANGETO' => '89',
            '_1COLOR' => '2.81',
            '_2COLOR' => '3.56',
            '_3COLOR' => '4.38',
            '_4COLOR' => '4.93',
            '_5COLOR' => '5.41',
            '_6COLOR' => '6.17',
            '_7COLOR' => '6.76',
            '_8COLOR' => '7.74',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '90',
            'RANGETO' => '90',
            '_1COLOR' => '2.8',
            '_2COLOR' => '3.55',
            '_3COLOR' => '4.35',
            '_4COLOR' => '4.9',
            '_5COLOR' => '5.36',
            '_6COLOR' => '6.12',
            '_7COLOR' => '6.71',
            '_8COLOR' => '7.69',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '91',
            'RANGETO' => '91',
            '_1COLOR' => '2.8',
            '_2COLOR' => '3.54',
            '_3COLOR' => '4.34',
            '_4COLOR' => '4.89',
            '_5COLOR' => '5.34',
            '_6COLOR' => '6.07',
            '_7COLOR' => '6.65',
            '_8COLOR' => '7.64',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '92',
            'RANGETO' => '92',
            '_1COLOR' => '2.8',
            '_2COLOR' => '3.53',
            '_3COLOR' => '4.33',
            '_4COLOR' => '4.88',
            '_5COLOR' => '5.32',
            '_6COLOR' => '6.02',
            '_7COLOR' => '6.59',
            '_8COLOR' => '7.59',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '93',
            'RANGETO' => '93',
            '_1COLOR' => '2.8',
            '_2COLOR' => '3.52',
            '_3COLOR' => '4.32',
            '_4COLOR' => '4.87',
            '_5COLOR' => '5.3',
            '_6COLOR' => '5.97',
            '_7COLOR' => '6.53',
            '_8COLOR' => '7.54',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '94',
            'RANGETO' => '94',
            '_1COLOR' => '2.8',
            '_2COLOR' => '3.51',
            '_3COLOR' => '4.31',
            '_4COLOR' => '4.86',
            '_5COLOR' => '5.28',
            '_6COLOR' => '5.92',
            '_7COLOR' => '6.47',
            '_8COLOR' => '7.49',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '95',
            'RANGETO' => '95',
            '_1COLOR' => '2.8',
            '_2COLOR' => '3.5',
            '_3COLOR' => '4.3',
            '_4COLOR' => '4.85',
            '_5COLOR' => '5.26',
            '_6COLOR' => '5.87',
            '_7COLOR' => '6.41',
            '_8COLOR' => '7.44',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '96',
            'RANGETO' => '96',
            '_1COLOR' => '2.8',
            '_2COLOR' => '3.49',
            '_3COLOR' => '4.29',
            '_4COLOR' => '4.84',
            '_5COLOR' => '5.24',
            '_6COLOR' => '5.82',
            '_7COLOR' => '6.35',
            '_8COLOR' => '7.39',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '97',
            'RANGETO' => '97',
            '_1COLOR' => '2.8',
            '_2COLOR' => '3.48',
            '_3COLOR' => '4.28',
            '_4COLOR' => '4.83',
            '_5COLOR' => '5.22',
            '_6COLOR' => '5.77',
            '_7COLOR' => '6.29',
            '_8COLOR' => '7.34',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '98',
            'RANGETO' => '98',
            '_1COLOR' => '2.8',
            '_2COLOR' => '3.47',
            '_3COLOR' => '4.27',
            '_4COLOR' => '4.82',
            '_5COLOR' => '5.2',
            '_6COLOR' => '5.72',
            '_7COLOR' => '6.23',
            '_8COLOR' => '7.29',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '99',
            'RANGETO' => '99',
            '_1COLOR' => '2.8',
            '_2COLOR' => '3.46',
            '_3COLOR' => '4.26',
            '_4COLOR' => '4.81',
            '_5COLOR' => '5.18',
            '_6COLOR' => '5.67',
            '_7COLOR' => '6.17',
            '_8COLOR' => '7.24',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '100',
            'RANGETO' => '100',
            '_1COLOR' => '2.8',
            '_2COLOR' => '3.45',
            '_3COLOR' => '4.25',
            '_4COLOR' => '4.8',
            '_5COLOR' => '5.16',
            '_6COLOR' => '5.62',
            '_7COLOR' => '6.11',
            '_8COLOR' => '7.19',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '101',
            'RANGETO' => '105',
            '_1COLOR' => '2.8',
            '_2COLOR' => '3.45',
            '_3COLOR' => '4.23',
            '_4COLOR' => '4.79',
            '_5COLOR' => '5.15',
            '_6COLOR' => '5.6',
            '_7COLOR' => '6.09',
            '_8COLOR' => '7.17',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '106',
            'RANGETO' => '110',
            '_1COLOR' => '2.8',
            '_2COLOR' => '3.45',
            '_3COLOR' => '4.21',
            '_4COLOR' => '4.78',
            '_5COLOR' => '5.14',
            '_6COLOR' => '5.58',
            '_7COLOR' => '6.07',
            '_8COLOR' => '7.15',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '111',
            'RANGETO' => '115',
            '_1COLOR' => '2.8',
            '_2COLOR' => '3.45',
            '_3COLOR' => '4.19',
            '_4COLOR' => '4.77',
            '_5COLOR' => '5.13',
            '_6COLOR' => '5.56',
            '_7COLOR' => '6.05',
            '_8COLOR' => '7.13',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '116',
            'RANGETO' => '120',
            '_1COLOR' => '2.8',
            '_2COLOR' => '3.45',
            '_3COLOR' => '4.17',
            '_4COLOR' => '4.76',
            '_5COLOR' => '5.12',
            '_6COLOR' => '5.54',
            '_7COLOR' => '6.03',
            '_8COLOR' => '7.11',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '121',
            'RANGETO' => '125',
            '_1COLOR' => '2.8',
            '_2COLOR' => '3.45',
            '_3COLOR' => '4.15',
            '_4COLOR' => '4.75',
            '_5COLOR' => '5.11',
            '_6COLOR' => '5.52',
            '_7COLOR' => '6.01',
            '_8COLOR' => '7.09',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '126',
            'RANGETO' => '130',
            '_1COLOR' => '2.8',
            '_2COLOR' => '3.45',
            '_3COLOR' => '4.13',
            '_4COLOR' => '4.74',
            '_5COLOR' => '5.1',
            '_6COLOR' => '5.5',
            '_7COLOR' => '5.99',
            '_8COLOR' => '7.07',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '131',
            'RANGETO' => '135',
            '_1COLOR' => '2.8',
            '_2COLOR' => '3.45',
            '_3COLOR' => '4.11',
            '_4COLOR' => '4.73',
            '_5COLOR' => '5.09',
            '_6COLOR' => '5.48',
            '_7COLOR' => '5.97',
            '_8COLOR' => '7.05',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '136',
            'RANGETO' => '140',
            '_1COLOR' => '2.8',
            '_2COLOR' => '3.45',
            '_3COLOR' => '4.09',
            '_4COLOR' => '4.72',
            '_5COLOR' => '5.08',
            '_6COLOR' => '5.46',
            '_7COLOR' => '5.95',
            '_8COLOR' => '7.03',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '141',
            'RANGETO' => '145',
            '_1COLOR' => '2.8',
            '_2COLOR' => '3.45',
            '_3COLOR' => '4.07',
            '_4COLOR' => '4.71',
            '_5COLOR' => '5.07',
            '_6COLOR' => '5.44',
            '_7COLOR' => '5.93',
            '_8COLOR' => '7.01',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '146',
            'RANGETO' => '149',
            '_1COLOR' => '2.8',
            '_2COLOR' => '3.45',
            '_3COLOR' => '4.05',
            '_4COLOR' => '4.7',
            '_5COLOR' => '5.06',
            '_6COLOR' => '5.42',
            '_7COLOR' => '5.91',
            '_8COLOR' => '6.99',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '150',
            'RANGETO' => '161',
            '_1COLOR' => '2.78',
            '_2COLOR' => '3.41',
            '_3COLOR' => '3.99',
            '_4COLOR' => '4.63',
            '_5COLOR' => '4.98',
            '_6COLOR' => '5.34',
            '_7COLOR' => '5.81',
            '_8COLOR' => '6.89',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '162',
            'RANGETO' => '173',
            '_1COLOR' => '2.76',
            '_2COLOR' => '3.37',
            '_3COLOR' => '3.93',
            '_4COLOR' => '4.56',
            '_5COLOR' => '4.9',
            '_6COLOR' => '5.26',
            '_7COLOR' => '5.71',
            '_8COLOR' => '6.79',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '174',
            'RANGETO' => '185',
            '_1COLOR' => '2.74',
            '_2COLOR' => '3.33',
            '_3COLOR' => '3.87',
            '_4COLOR' => '4.49',
            '_5COLOR' => '4.82',
            '_6COLOR' => '5.18',
            '_7COLOR' => '5.61',
            '_8COLOR' => '6.69',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '186',
            'RANGETO' => '197',
            '_1COLOR' => '2.72',
            '_2COLOR' => '3.29',
            '_3COLOR' => '3.81',
            '_4COLOR' => '4.42',
            '_5COLOR' => '4.74',
            '_6COLOR' => '5.1',
            '_7COLOR' => '5.51',
            '_8COLOR' => '6.59',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '198',
            'RANGETO' => '209',
            '_1COLOR' => '2.7',
            '_2COLOR' => '3.25',
            '_3COLOR' => '3.75',
            '_4COLOR' => '4.35',
            '_5COLOR' => '4.66',
            '_6COLOR' => '5.02',
            '_7COLOR' => '5.41',
            '_8COLOR' => '6.49',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '210',
            'RANGETO' => '221',
            '_1COLOR' => '2.68',
            '_2COLOR' => '3.21',
            '_3COLOR' => '3.69',
            '_4COLOR' => '4.28',
            '_5COLOR' => '4.58',
            '_6COLOR' => '4.94',
            '_7COLOR' => '5.31',
            '_8COLOR' => '6.39',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '222',
            'RANGETO' => '233',
            '_1COLOR' => '2.66',
            '_2COLOR' => '3.17',
            '_3COLOR' => '3.63',
            '_4COLOR' => '4.21',
            '_5COLOR' => '4.5',
            '_6COLOR' => '4.86',
            '_7COLOR' => '5.21',
            '_8COLOR' => '6.29',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '234',
            'RANGETO' => '245',
            '_1COLOR' => '2.64',
            '_2COLOR' => '3.13',
            '_3COLOR' => '3.57',
            '_4COLOR' => '4.14',
            '_5COLOR' => '4.42',
            '_6COLOR' => '4.78',
            '_7COLOR' => '5.11',
            '_8COLOR' => '6.19',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '246',
            'RANGETO' => '257',
            '_1COLOR' => '2.62',
            '_2COLOR' => '3.09',
            '_3COLOR' => '3.51',
            '_4COLOR' => '4.07',
            '_5COLOR' => '4.34',
            '_6COLOR' => '4.7',
            '_7COLOR' => '5.01',
            '_8COLOR' => '6.09',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '258',
            'RANGETO' => '269',
            '_1COLOR' => '2.6',
            '_2COLOR' => '3.05',
            '_3COLOR' => '3.45',
            '_4COLOR' => '4',
            '_5COLOR' => '4.26',
            '_6COLOR' => '4.62',
            '_7COLOR' => '4.91',
            '_8COLOR' => '5.99',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '270',
            'RANGETO' => '281',
            '_1COLOR' => '2.58',
            '_2COLOR' => '3.01',
            '_3COLOR' => '3.39',
            '_4COLOR' => '3.93',
            '_5COLOR' => '4.18',
            '_6COLOR' => '4.54',
            '_7COLOR' => '4.81',
            '_8COLOR' => '5.89',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '282',
            'RANGETO' => '293',
            '_1COLOR' => '2.56',
            '_2COLOR' => '2.97',
            '_3COLOR' => '3.33',
            '_4COLOR' => '3.86',
            '_5COLOR' => '4.1',
            '_6COLOR' => '4.46',
            '_7COLOR' => '4.71',
            '_8COLOR' => '5.79',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '294',
            'RANGETO' => '304',
            '_1COLOR' => '2.54',
            '_2COLOR' => '2.93',
            '_3COLOR' => '3.27',
            '_4COLOR' => '3.79',
            '_5COLOR' => '4.02',
            '_6COLOR' => '4.38',
            '_7COLOR' => '4.61',
            '_8COLOR' => '5.69',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '305',
            'RANGETO' => '328',
            '_1COLOR' => '2.53',
            '_2COLOR' => '2.91',
            '_3COLOR' => '3.24',
            '_4COLOR' => '3.73',
            '_5COLOR' => '3.96',
            '_6COLOR' => '4.3',
            '_7COLOR' => '4.54',
            '_8COLOR' => '5.59',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '329',
            'RANGETO' => '352',
            '_1COLOR' => '2.52',
            '_2COLOR' => '2.89',
            '_3COLOR' => '3.21',
            '_4COLOR' => '3.67',
            '_5COLOR' => '3.9',
            '_6COLOR' => '4.22',
            '_7COLOR' => '4.47',
            '_8COLOR' => '5.49',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '353',
            'RANGETO' => '376',
            '_1COLOR' => '2.51',
            '_2COLOR' => '2.87',
            '_3COLOR' => '3.18',
            '_4COLOR' => '3.61',
            '_5COLOR' => '3.84',
            '_6COLOR' => '4.14',
            '_7COLOR' => '4.4',
            '_8COLOR' => '5.39',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '377',
            'RANGETO' => '400',
            '_1COLOR' => '2.5',
            '_2COLOR' => '2.85',
            '_3COLOR' => '3.15',
            '_4COLOR' => '3.55',
            '_5COLOR' => '3.78',
            '_6COLOR' => '4.06',
            '_7COLOR' => '4.33',
            '_8COLOR' => '5.29',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '401',
            'RANGETO' => '424',
            '_1COLOR' => '2.49',
            '_2COLOR' => '2.83',
            '_3COLOR' => '3.12',
            '_4COLOR' => '3.49',
            '_5COLOR' => '3.72',
            '_6COLOR' => '3.98',
            '_7COLOR' => '4.26',
            '_8COLOR' => '5.19',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '425',
            'RANGETO' => '448',
            '_1COLOR' => '2.48',
            '_2COLOR' => '2.81',
            '_3COLOR' => '3.09',
            '_4COLOR' => '3.43',
            '_5COLOR' => '3.66',
            '_6COLOR' => '3.9',
            '_7COLOR' => '4.19',
            '_8COLOR' => '5.09',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '449',
            'RANGETO' => '472',
            '_1COLOR' => '2.47',
            '_2COLOR' => '2.79',
            '_3COLOR' => '3.06',
            '_4COLOR' => '3.37',
            '_5COLOR' => '3.6',
            '_6COLOR' => '3.82',
            '_7COLOR' => '4.12',
            '_8COLOR' => '4.99',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '473',
            'RANGETO' => '496',
            '_1COLOR' => '2.46',
            '_2COLOR' => '2.77',
            '_3COLOR' => '3.03',
            '_4COLOR' => '3.31',
            '_5COLOR' => '3.54',
            '_6COLOR' => '3.74',
            '_7COLOR' => '4.05',
            '_8COLOR' => '4.89',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '497',
            'RANGETO' => '520',
            '_1COLOR' => '2.43',
            '_2COLOR' => '2.74',
            '_3COLOR' => '3',
            '_4COLOR' => '3.28',
            '_5COLOR' => '3.51',
            '_6COLOR' => '3.71',
            '_7COLOR' => '4.02',
            '_8COLOR' => '4.82',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '521',
            'RANGETO' => '544',
            '_1COLOR' => '2.4',
            '_2COLOR' => '2.71',
            '_3COLOR' => '2.97',
            '_4COLOR' => '3.25',
            '_5COLOR' => '3.48',
            '_6COLOR' => '3.68',
            '_7COLOR' => '3.99',
            '_8COLOR' => '4.75',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '545',
            'RANGETO' => '568',
            '_1COLOR' => '2.37',
            '_2COLOR' => '2.68',
            '_3COLOR' => '2.94',
            '_4COLOR' => '3.22',
            '_5COLOR' => '3.45',
            '_6COLOR' => '3.65',
            '_7COLOR' => '3.96',
            '_8COLOR' => '4.68',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '569',
            'RANGETO' => '592',
            '_1COLOR' => '2.34',
            '_2COLOR' => '2.65',
            '_3COLOR' => '2.91',
            '_4COLOR' => '3.19',
            '_5COLOR' => '3.42',
            '_6COLOR' => '3.62',
            '_7COLOR' => '3.93',
            '_8COLOR' => '4.61',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '593',
            'RANGETO' => '616',
            '_1COLOR' => '2.31',
            '_2COLOR' => '2.62',
            '_3COLOR' => '2.88',
            '_4COLOR' => '3.16',
            '_5COLOR' => '3.39',
            '_6COLOR' => '3.59',
            '_7COLOR' => '3.9',
            '_8COLOR' => '4.54',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '617',
            'RANGETO' => '640',
            '_1COLOR' => '2.28',
            '_2COLOR' => '2.59',
            '_3COLOR' => '2.85',
            '_4COLOR' => '3.13',
            '_5COLOR' => '3.36',
            '_6COLOR' => '3.56',
            '_7COLOR' => '3.87',
            '_8COLOR' => '4.47',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '641',
            'RANGETO' => '664',
            '_1COLOR' => '2.25',
            '_2COLOR' => '2.56',
            '_3COLOR' => '2.82',
            '_4COLOR' => '3.1',
            '_5COLOR' => '3.33',
            '_6COLOR' => '3.53',
            '_7COLOR' => '3.84',
            '_8COLOR' => '4.4',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '665',
            'RANGETO' => '688',
            '_1COLOR' => '2.22',
            '_2COLOR' => '2.53',
            '_3COLOR' => '2.79',
            '_4COLOR' => '3.07',
            '_5COLOR' => '3.3',
            '_6COLOR' => '3.5',
            '_7COLOR' => '3.81',
            '_8COLOR' => '4.33',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '689',
            'RANGETO' => '711',
            '_1COLOR' => '2.19',
            '_2COLOR' => '2.5',
            '_3COLOR' => '2.76',
            '_4COLOR' => '3.04',
            '_5COLOR' => '3.27',
            '_6COLOR' => '3.47',
            '_7COLOR' => '3.78',
            '_8COLOR' => '4.26',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '712',
            'RANGETO' => '735',
            '_1COLOR' => '2.18',
            '_2COLOR' => '2.48',
            '_3COLOR' => '2.74',
            '_4COLOR' => '3.02',
            '_5COLOR' => '3.25',
            '_6COLOR' => '3.46',
            '_7COLOR' => '3.77',
            '_8COLOR' => '4.23',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '736',
            'RANGETO' => '759',
            '_1COLOR' => '2.17',
            '_2COLOR' => '2.46',
            '_3COLOR' => '2.72',
            '_4COLOR' => '3',
            '_5COLOR' => '3.23',
            '_6COLOR' => '3.45',
            '_7COLOR' => '3.76',
            '_8COLOR' => '4.2',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '760',
            'RANGETO' => '783',
            '_1COLOR' => '2.16',
            '_2COLOR' => '2.44',
            '_3COLOR' => '2.7',
            '_4COLOR' => '2.98',
            '_5COLOR' => '3.21',
            '_6COLOR' => '3.44',
            '_7COLOR' => '3.75',
            '_8COLOR' => '4.17',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '784',
            'RANGETO' => '807',
            '_1COLOR' => '2.15',
            '_2COLOR' => '2.42',
            '_3COLOR' => '2.68',
            '_4COLOR' => '2.96',
            '_5COLOR' => '3.19',
            '_6COLOR' => '3.43',
            '_7COLOR' => '3.74',
            '_8COLOR' => '4.14',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '808',
            'RANGETO' => '831',
            '_1COLOR' => '2.14',
            '_2COLOR' => '2.4',
            '_3COLOR' => '2.66',
            '_4COLOR' => '2.94',
            '_5COLOR' => '3.17',
            '_6COLOR' => '3.42',
            '_7COLOR' => '3.73',
            '_8COLOR' => '4.11',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '832',
            'RANGETO' => '855',
            '_1COLOR' => '2.13',
            '_2COLOR' => '2.38',
            '_3COLOR' => '2.64',
            '_4COLOR' => '2.92',
            '_5COLOR' => '3.15',
            '_6COLOR' => '3.41',
            '_7COLOR' => '3.72',
            '_8COLOR' => '4.08',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '856',
            'RANGETO' => '879',
            '_1COLOR' => '2.12',
            '_2COLOR' => '2.36',
            '_3COLOR' => '2.62',
            '_4COLOR' => '2.9',
            '_5COLOR' => '3.13',
            '_6COLOR' => '3.4',
            '_7COLOR' => '3.71',
            '_8COLOR' => '4.05',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '880',
            'RANGETO' => '903',
            '_1COLOR' => '2.11',
            '_2COLOR' => '2.34',
            '_3COLOR' => '2.6',
            '_4COLOR' => '2.88',
            '_5COLOR' => '3.11',
            '_6COLOR' => '3.39',
            '_7COLOR' => '3.7',
            '_8COLOR' => '4.02',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '904',
            'RANGETO' => '927',
            '_1COLOR' => '2.1',
            '_2COLOR' => '2.32',
            '_3COLOR' => '2.58',
            '_4COLOR' => '2.86',
            '_5COLOR' => '3.09',
            '_6COLOR' => '3.38',
            '_7COLOR' => '3.69',
            '_8COLOR' => '3.99',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '928',
            'RANGETO' => '951',
            '_1COLOR' => '2.09',
            '_2COLOR' => '2.3',
            '_3COLOR' => '2.56',
            '_4COLOR' => '2.84',
            '_5COLOR' => '3.07',
            '_6COLOR' => '3.37',
            '_7COLOR' => '3.68',
            '_8COLOR' => '3.96',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '952',
            'RANGETO' => '975',
            '_1COLOR' => '2.08',
            '_2COLOR' => '2.28',
            '_3COLOR' => '2.54',
            '_4COLOR' => '2.82',
            '_5COLOR' => '3.05',
            '_6COLOR' => '3.36',
            '_7COLOR' => '3.67',
            '_8COLOR' => '3.93',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '976',
            'RANGETO' => '1200',
            '_1COLOR' => '2.07',
            '_2COLOR' => '2.26',
            '_3COLOR' => '2.52',
            '_4COLOR' => '2.8',
            '_5COLOR' => '3.03',
            '_6COLOR' => '3.35',
            '_7COLOR' => '3.66',
            '_8COLOR' => '3.9',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
            PriceShirtTable::create([
            'RANGEFROM' => '1201',
            'RANGETO' => '10000',
            '_1COLOR' => '2',
            '_2COLOR' => '2.1',
            '_3COLOR' => '2.3',
            '_4COLOR' => '2.5',
            '_5COLOR' => '2.8',
            '_6COLOR' => '3',
            '_7COLOR' => '3.3',
            '_8COLOR' => '3.5',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(), 
            ]);
            
    }
}
