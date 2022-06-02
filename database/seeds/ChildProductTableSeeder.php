<?php

use Illuminate\Database\Seeder;
use App\Product;

class ChildProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //child

         Product::create([
            'parent_id' => 1,
            'color_id' => 6,
            'stylenumber' => 'M320',
            'fabric' => '100% Polyester',
            'visibility' => 'Visible',
            'name' => 'Athletic Sport T-shirt_White',
            'slug' => str_slug('Athletic Sport T-shirt_White'),
            'price' => '12.98',
            'image' => 'Athletic_Sport_T-shirt_White.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            Athletic Sport T-shirt
            100% polyester; 40 UPF on White; 30 UPF on other colors
            Wicks moisture and keeps the body dry
            Anti-microbial treatment prevents odors from perspiration
            Double-needle stitching on sleeve and bottom hem for strength
            Comfortable fit
            Sideseamed
            Set-in sleeves
            Self-fabric collar and tagless neck labeling
            Neck seam has double-needle front stitch & overlocking back stitch for strength
            
            
            MOISTURE WICKING - QUICK DRY - BREATHABLE - ANTIMICROBIAL - UV PROTECTION(15-39 UPF)
            
            ',
            'brand' => 'Harriton',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            
            
            Width:� Measure across the chest an inch below the armpit
            
            
            ',
            'frontimage' => 'M320_front_M320-red-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '375',
            'frontheight' => '500',
            'frontleft' => '180',
            'fronttop' => '110',
            'rightimage' => 'M320_rigth_M320-red-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '300',
            'rightheight' => '300',
            'rightleft' => '200',
            'righttop' => '350',
            'backimage' => 'M320_back_M320-red-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '185',
            'backtop' => '110',
            'leftimage' => 'M320_left_M320-red-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '300',
            'leftheight' => '300',
            'leftleft' => '250',
            'lefttop' => '350',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '12.95',
            '_ADULTWHITE' => '11.95',
            '_2xl' => '14.95',
            '_2xlWHITE' => '14.5',
            '_3xl' => '15.95',
            '_3xlWHITE' => '15.5',
            '_4xl' => '16.95',
            '_4xlWHITE' => '16.5',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'default' => '1',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 1,
            'size_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 1,
            'size_id' => 8,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 1,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 1,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 1,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 1,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 1,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 1,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 1,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 1,
            'color_id' => 5,
            'stylenumber' => 'M320',
            'fabric' => '100% Polyester',
            'visibility' => 'Visible',
            'name' => 'Athletic Sport T-shirt_Black',
            'price' => '12.98',
            'image' => 'Athletic_Sport_T-shirt_Black.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            Athletic Sport T-shirt
            100% polyester; 40 UPF on White; 30 UPF on other colors
            Wicks moisture and keeps the body dry
            Anti-microbial treatment prevents odors from perspiration
            Double-needle stitching on sleeve and bottom hem for strength
            Comfortable fit
            Sideseamed
            Set-in sleeves
            Self-fabric collar and tagless neck labeling
            Neck seam has double-needle front stitch & overlocking back stitch for strength
            
            
            MOISTURE WICKING - QUICK DRY - BREATHABLE - ANTIMICROBIAL - UV PROTECTION(15-39 UPF)
            
            ',
            'brand' => 'Harriton',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'M320_front_M320-red-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '375',
            'frontheight' => '500',
            'frontleft' => '180',
            'fronttop' => '110',
            'rightimage' => 'M320_rigth_M320-red-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '300',
            'rightheight' => '300',
            'rightleft' => '200',
            'righttop' => '350',
            'backimage' => 'M320_back_M320-red-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '185',
            'backtop' => '110',
            'leftimage' => 'M320_left_M320-red-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '300',
            'leftheight' => '300',
            'leftleft' => '250',
            'lefttop' => '350',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '12.95',
            '_ADULTWHITE' => '11.95',
            '_2xl' => '14.95',
            '_2xlWHITE' => '14.5',
            '_3xl' => '15.95',
            '_3xlWHITE' => '15.5',
            '_4xl' => '16.95',
            '_4xlWHITE' => '16.5',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 2,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 2,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 2,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 2,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 2,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 2,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 2,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 1,
            'color_id' => 72,
            'stylenumber' => 'M320',
            'fabric' => '100% Polyester',
            'visibility' => 'Visible',
            'name' => 'Athletic Sport T-shirt_Red',
            'price' => '12.98',
            'image' => 'Athletic_Sport_T-shirt_Red.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            Athletic Sport T-shirt
            100% polyester; 40 UPF on White; 30 UPF on other colors
            Wicks moisture and keeps the body dry
            Anti-microbial treatment prevents odors from perspiration
            Double-needle stitching on sleeve and bottom hem for strength
            Comfortable fit
            Sideseamed
            Set-in sleeves
            Self-fabric collar and tagless neck labeling
            Neck seam has double-needle front stitch & overlocking back stitch for strength
            
            
            MOISTURE WICKING - QUICK DRY - BREATHABLE - ANTIMICROBIAL - UV PROTECTION(15-39 UPF)
            
            ',
            'brand' => 'Harriton',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'M320_front_M320-red-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '375',
            'frontheight' => '500',
            'frontleft' => '180',
            'fronttop' => '110',
            'rightimage' => 'M320_rigth_M320-red-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '300',
            'rightheight' => '300',
            'rightleft' => '200',
            'righttop' => '350',
            'backimage' => 'M320_back_M320-red-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '185',
            'backtop' => '110',
            'leftimage' => 'M320_left_M320-red-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '300',
            'leftheight' => '300',
            'leftleft' => '250',
            'lefttop' => '350',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '12.95',
            '_ADULTWHITE' => '11.95',
            '_2xl' => '14.95',
            '_2xlWHITE' => '14.5',
            '_3xl' => '15.95',
            '_3xlWHITE' => '15.5',
            '_4xl' => '16.95',
            '_4xlWHITE' => '16.5',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 3,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 3,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 3,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 3,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 3,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 3,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 3,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 1,
            'color_id' => 78,
            'stylenumber' => 'M320',
            'fabric' => '100% Polyester',
            'visibility' => 'Visible',
            'name' => 'Athletic Sport T-shirt_Maroon',
            'price' => '12.98',
            'image' => 'Athletic_Sport_T-shirt_Maroon.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            Athletic Sport T-shirt
            100% polyester; 40 UPF on White; 30 UPF on other colors
            Wicks moisture and keeps the body dry
            Anti-microbial treatment prevents odors from perspiration
            Double-needle stitching on sleeve and bottom hem for strength
            Comfortable fit
            Sideseamed
            Set-in sleeves
            Self-fabric collar and tagless neck labeling
            Neck seam has double-needle front stitch & overlocking back stitch for strength
            
            
            MOISTURE WICKING - QUICK DRY - BREATHABLE - ANTIMICROBIAL - UV PROTECTION(15-39 UPF)
            
            ',
            'brand' => 'Harriton',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'M320_front_M320-red-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '375',
            'frontheight' => '500',
            'frontleft' => '180',
            'fronttop' => '110',
            'rightimage' => 'M320_rigth_M320-red-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '300',
            'rightheight' => '300',
            'rightleft' => '200',
            'righttop' => '350',
            'backimage' => 'M320_back_M320-red-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '185',
            'backtop' => '110',
            'leftimage' => 'M320_left_M320-red-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '300',
            'leftheight' => '300',
            'leftleft' => '250',
            'lefttop' => '350',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '12.95',
            '_ADULTWHITE' => '11.95',
            '_2xl' => '14.95',
            '_2xlWHITE' => '14.5',
            '_3xl' => '15.95',
            '_3xlWHITE' => '15.5',
            '_4xl' => '16.95',
            '_4xlWHITE' => '16.5',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 4,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 4,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 4,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 4,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 4,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 4,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 4,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 1,
            'color_id' => 125,
            'stylenumber' => 'M320',
            'fabric' => '100% Polyester',
            'visibility' => 'Visible',
            'name' => 'Athletic Sport T-shirt_Dark Green',
            'price' => '12.98',
            'image' => 'Athletic_Sport_T-shirt_Dark_Green.png',
            'min_quantity' => '6',
            'status' => 'Disable',
            'description' => '
            Athletic Sport T-shirt
            100% polyester; 40 UPF on White; 30 UPF on other colors
            Wicks moisture and keeps the body dry
            Anti-microbial treatment prevents odors from perspiration
            Double-needle stitching on sleeve and bottom hem for strength
            Comfortable fit
            Sideseamed
            Set-in sleeves
            Self-fabric collar and tagless neck labeling
            Neck seam has double-needle front stitch & overlocking back stitch for strength
            
            
            MOISTURE WICKING - QUICK DRY - BREATHABLE - ANTIMICROBIAL - UV PROTECTION(15-39 UPF)
            
            ',
            'brand' => 'Harriton',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'M320_front_M320-red-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '375',
            'frontheight' => '500',
            'frontleft' => '180',
            'fronttop' => '110',
            'rightimage' => 'M320_rigth_M320-red-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '300',
            'rightheight' => '300',
            'rightleft' => '200',
            'righttop' => '350',
            'backimage' => 'M320_back_M320-red-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '185',
            'backtop' => '110',
            'leftimage' => 'M320_left_M320-red-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '300',
            'leftheight' => '300',
            'leftleft' => '250',
            'lefttop' => '350',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '12.95',
            '_ADULTWHITE' => '11.95',
            '_2xl' => '14.95',
            '_2xlWHITE' => '14.5',
            '_3xl' => '15.95',
            '_3xlWHITE' => '15.5',
            '_4xl' => '16.95',
            '_4xlWHITE' => '16.5',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 5,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 5,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 5,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 5,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 5,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 5,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 5,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 1,
            'color_id' => 105,
            'stylenumber' => 'M320',
            'fabric' => '100% Polyester',
            'visibility' => 'Visible',
            'name' => 'Athletic Sport T-shirt_Navy',
            'price' => '12.98',
            'image' => 'Athletic_Sport_T-shirt_Navy.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            Athletic Sport T-shirt
            100% polyester; 40 UPF on White; 30 UPF on other colors
            Wicks moisture and keeps the body dry
            Anti-microbial treatment prevents odors from perspiration
            Double-needle stitching on sleeve and bottom hem for strength
            Comfortable fit
            Sideseamed
            Set-in sleeves
            Self-fabric collar and tagless neck labeling
            Neck seam has double-needle front stitch & overlocking back stitch for strength
            
            
            MOISTURE WICKING - QUICK DRY - BREATHABLE - ANTIMICROBIAL - UV PROTECTION(15-39 UPF)
            
            ',
            'brand' => 'Harriton',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'M320_front_M320-red-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '375',
            'frontheight' => '500',
            'frontleft' => '180',
            'fronttop' => '110',
            'rightimage' => 'M320_rigth_M320-red-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '300',
            'rightheight' => '300',
            'rightleft' => '200',
            'righttop' => '350',
            'backimage' => 'M320_back_M320-red-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '185',
            'backtop' => '110',
            'leftimage' => 'M320_left_M320-red-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '300',
            'leftheight' => '300',
            'leftleft' => '250',
            'lefttop' => '350',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '12.95',
            '_ADULTWHITE' => '11.95',
            '_2xl' => '14.95',
            '_2xlWHITE' => '14.5',
            '_3xl' => '15.95',
            '_3xlWHITE' => '15.5',
            '_4xl' => '16.95',
            '_4xlWHITE' => '16.5',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 6,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 6,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 6,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 6,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 6,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 6,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 6,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 1,
            'color_id' => 93,
            'stylenumber' => 'M320',
            'fabric' => '100% Polyester',
            'visibility' => 'Visible',
            'name' => 'Athletic Sport T-shirt_True Royal',
            'price' => '12.98',
            'image' => 'Athletic_Sport_T-shirt_True_Royal.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            Athletic Sport T-shirt
            100% polyester; 40 UPF on White; 30 UPF on other colors
            Wicks moisture and keeps the body dry
            Anti-microbial treatment prevents odors from perspiration
            Double-needle stitching on sleeve and bottom hem for strength
            Comfortable fit
            Sideseamed
            Set-in sleeves
            Self-fabric collar and tagless neck labeling
            Neck seam has double-needle front stitch & overlocking back stitch for strength
            
            
            MOISTURE WICKING - QUICK DRY - BREATHABLE - ANTIMICROBIAL - UV PROTECTION(15-39 UPF)
            
            ',
            'brand' => 'Harriton',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'M320_front_M320-red-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '375',
            'frontheight' => '500',
            'frontleft' => '180',
            'fronttop' => '110',
            'rightimage' => 'M320_rigth_M320-red-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '300',
            'rightheight' => '300',
            'rightleft' => '200',
            'righttop' => '350',
            'backimage' => 'M320_back_M320-red-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '185',
            'backtop' => '110',
            'leftimage' => 'M320_left_M320-red-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '300',
            'leftheight' => '300',
            'leftleft' => '250',
            'lefttop' => '350',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '12.95',
            '_ADULTWHITE' => '11.95',
            '_2xl' => '14.95',
            '_2xlWHITE' => '14.5',
            '_3xl' => '15.95',
            '_3xlWHITE' => '15.5',
            '_4xl' => '16.95',
            '_4xlWHITE' => '16.5',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 7,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 7,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 7,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 7,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 7,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 7,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 7,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 2,
            'color_id' => 6,
            'stylenumber' => 'AUG790',
            'fabric' => 'Polyester',
            'visibility' => 'Visible',
            'name' => 'Wicking T-Shirt_White',
            'price' => '7.5',
            'image' => 'Wicking_T-Shirt_White.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Self-fabric collar
            
            Double-needle coverstitched collar and armholes
            
            Double-needle hemmed sleeves and bottom
            
            
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'Aug-790-silver-grey-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '375',
            'frontheight' => '500',
            'frontleft' => '180',
            'fronttop' => '115',
            'rightimage' => 'Aug-790-silver-grey-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '300',
            'rightheight' => '300',
            'rightleft' => '145',
            'righttop' => '340',
            'backimage' => 'Aug-790-silver-grey-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '128',
            'backtop' => '100',
            'leftimage' => 'Aug-790-silver-grey-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '300',
            'leftheight' => '300',
            'leftleft' => '180',
            'lefttop' => '340',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '7.5',
            '_YOUTHWHITE' => '6.5',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9.25',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10.25',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 8,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 8,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 8,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 8,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 8,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 8,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 8,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 8,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 8,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 2,
            'color_id' => 11,
            'stylenumber' => 'AUG790',
            'fabric' => 'Polyester',
            'visibility' => 'Visible',
            'name' => 'Wicking T-Shirt_Lime',
            'price' => '7.5',
            'image' => 'Wicking_T-Shirt_Lime.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Self-fabric collar
            
            Double-needle coverstitched collar and armholes
            
            Double-needle hemmed sleeves and bottom
            
            
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'Aug-790-silver-grey-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '375',
            'frontheight' => '500',
            'frontleft' => '180',
            'fronttop' => '115',
            'rightimage' => 'Aug-790-silver-grey-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '300',
            'rightheight' => '300',
            'rightleft' => '145',
            'righttop' => '340',
            'backimage' => 'Aug-790-silver-grey-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '128',
            'backtop' => '100',
            'leftimage' => 'Aug-790-silver-grey-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '300',
            'leftheight' => '300',
            'leftleft' => '180',
            'lefttop' => '340',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '7.5',
            '_YOUTHWHITE' => '6.5',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9.25',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10.25',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 9,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 9,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 9,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 9,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 9,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 9,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 9,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 9,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 9,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 2,
            'color_id' => 59,
            'stylenumber' => 'AUG790',
            'fabric' => 'Polyester',
            'visibility' => 'Visible',
            'name' => 'Wicking T-Shirt_Orange',
            'price' => '7.5',
            'image' => 'Wicking_T-Shirt_Orange.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Self-fabric collar
            
            Double-needle coverstitched collar and armholes
            
            Double-needle hemmed sleeves and bottom
            
            
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'Aug-790-silver-grey-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '375',
            'frontheight' => '500',
            'frontleft' => '180',
            'fronttop' => '115',
            'rightimage' => 'Aug-790-silver-grey-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '300',
            'rightheight' => '300',
            'rightleft' => '145',
            'righttop' => '340',
            'backimage' => 'Aug-790-silver-grey-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '128',
            'backtop' => '100',
            'leftimage' => 'Aug-790-silver-grey-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '300',
            'leftheight' => '300',
            'leftleft' => '180',
            'lefttop' => '340',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '7.5',
            '_YOUTHWHITE' => '6.5',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9.25',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10.25',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 10,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 10,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 10,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 10,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 10,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 10,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 10,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 10,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 10,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 2,
            'color_id' => 105,
            'stylenumber' => 'AUG790',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Wicking T-Shirt_Navy',
            'price' => '7.5',
            'image' => 'Wicking_T-Shirt_Navy.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Self-fabric collar
            
            Double-needle coverstitched collar and armholes
            
            Double-needle hemmed sleeves and bottom
            
            
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'Aug-790-silver-grey-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '375',
            'frontheight' => '500',
            'frontleft' => '180',
            'fronttop' => '115',
            'rightimage' => 'Aug-790-silver-grey-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '300',
            'rightheight' => '300',
            'rightleft' => '145',
            'righttop' => '340',
            'backimage' => 'Aug-790-silver-grey-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '128',
            'backtop' => '100',
            'leftimage' => 'Aug-790-silver-grey-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '300',
            'leftheight' => '300',
            'leftleft' => '180',
            'lefttop' => '340',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '7.5',
            '_YOUTHWHITE' => '6.5',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9.25',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10.25',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 11,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 11,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 11,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 11,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 11,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 11,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 11,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 11,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 11,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 3,
            'color_id' => 6,
            'stylenumber' => 'A1791',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Ladies Wicking T-shirt_White',
            'price' => '7.5',
            'image' => 'Ladies_Wicking_T-shirt_White.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Girls fit
            
            Heat-sealed label
            
            Self-fabric V-neck collar
            
            Set-in sleeves
            
            Double-needle hemmed sleeves and bottom
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'A1790_royal-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '436',
            'frontleft' => '228',
            'fronttop' => '170',
            'rightimage' => 'A1790_royal-back.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '220',
            'righttop' => '270',
            'backimage' => 'A1790_royal-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '422',
            'backleft' => '216',
            'backtop' => '110',
            'leftimage' => 'A1790_royal-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '250',
            'leftheight' => '250',
            'leftleft' => '265',
            'lefttop' => '270',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '8',
            '_ADULTWHITE' => '7.5',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 12,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 12,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 12,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 3,
            'color_id' => 5,
            'stylenumber' => 'A1791',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Ladies Wicking T-shirt_Black',
            'price' => '7.5',
            'image' => 'Ladies_Wicking_T-shirt_Black.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Girls fit
            
            Heat-sealed label
            
            Self-fabric V-neck collar
            
            Set-in sleeves
            
            Double-needle hemmed sleeves and bottom
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'A1790_royal-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '436',
            'frontleft' => '228',
            'fronttop' => '170',
            'rightimage' => 'A1790_royal-back.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '220',
            'righttop' => '270',
            'backimage' => 'A1790_royal-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '422',
            'backleft' => '216',
            'backtop' => '110',
            'leftimage' => 'A1790_royal-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '250',
            'leftheight' => '250',
            'leftleft' => '265',
            'lefttop' => '270',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '8',
            '_ADULTWHITE' => '7.5',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 13,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 13,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 13,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 3,
            'color_id' => 125,
            'stylenumber' => 'A1791',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Ladies Wicking T-shirt_Dark Green',
            'price' => '7.5',
            'image' => 'Ladies_Wicking_T-shirt_Dark_Green.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Girls fit
            
            Heat-sealed label
            
            Self-fabric V-neck collar
            
            Set-in sleeves
            
            Double-needle hemmed sleeves and bottom
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'A1790_royal-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '436',
            'frontleft' => '228',
            'fronttop' => '170',
            'rightimage' => 'A1790_royal-back.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '220',
            'righttop' => '270',
            'backimage' => 'A1790_royal-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '422',
            'backleft' => '216',
            'backtop' => '110',
            'leftimage' => 'A1790_royal-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '250',
            'leftheight' => '250',
            'leftleft' => '265',
            'lefttop' => '270',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '8',
            '_ADULTWHITE' => '7.5',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 14,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 14,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 14,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 3,
            'color_id' => 132,
            'stylenumber' => 'A1791',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Ladies Wicking T-shirt_Graphite',
            'price' => '7.5',
            'image' => 'Ladies_Wicking_T-shirt_Graphite.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Girls fit
            
            Heat-sealed label
            
            Self-fabric V-neck collar
            
            Set-in sleeves
            
            Double-needle hemmed sleeves and bottom
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'A1790_royal-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '436',
            'frontleft' => '228',
            'fronttop' => '170',
            'rightimage' => 'A1790_royal-back.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '220',
            'righttop' => '270',
            'backimage' => 'A1790_royal-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '422',
            'backleft' => '216',
            'backtop' => '110',
            'leftimage' => 'A1790_royal-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '250',
            'leftheight' => '250',
            'leftleft' => '265',
            'lefttop' => '270',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '8',
            '_ADULTWHITE' => '7.5',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 15,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 15,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 15,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 3,
            'color_id' => 11,
            'stylenumber' => 'A1791',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Ladies Wicking T-shirt_Lime',
            'price' => '7.5',
            'image' => 'Ladies_Wicking_T-shirt_Lime.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Girls fit
            
            Heat-sealed label
            
            Self-fabric V-neck collar
            
            Set-in sleeves
            
            Double-needle hemmed sleeves and bottom
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'A1790_royal-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '436',
            'frontleft' => '228',
            'fronttop' => '170',
            'rightimage' => 'A1790_royal-back.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '220',
            'righttop' => '270',
            'backimage' => 'A1790_royal-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '422',
            'backleft' => '216',
            'backtop' => '110',
            'leftimage' => 'A1790_royal-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '250',
            'leftheight' => '250',
            'leftleft' => '265',
            'lefttop' => '270',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '8',
            '_ADULTWHITE' => '7.5',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 16,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 16,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 16,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 3,
            'color_id' => 105,
            'stylenumber' => 'A1791',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Ladies Wicking T-shirt_Navy',
            'price' => '7.5',
            'image' => 'Ladies_Wicking_T-shirt_Navy.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Girls fit
            
            Heat-sealed label
            
            Self-fabric V-neck collar
            
            Set-in sleeves
            
            Double-needle hemmed sleeves and bottom
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'A1790_royal-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '436',
            'frontleft' => '228',
            'fronttop' => '170',
            'rightimage' => 'A1790_royal-back.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '220',
            'righttop' => '270',
            'backimage' => 'A1790_royal-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '422',
            'backleft' => '216',
            'backtop' => '110',
            'leftimage' => 'A1790_royal-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '250',
            'leftheight' => '250',
            'leftleft' => '265',
            'lefttop' => '270',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '8',
            '_ADULTWHITE' => '7.5',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 17,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 17,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 17,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 3,
            'color_id' => 59,
            'stylenumber' => 'A1791',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Ladies Wicking T-shirt_Orange',
            'price' => '7.5',
            'image' => 'Ladies_Wicking_T-shirt_Orange.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Girls fit
            
            Heat-sealed label
            
            Self-fabric V-neck collar
            
            Set-in sleeves
            
            Double-needle hemmed sleeves and bottom
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'A1790_royal-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '436',
            'frontleft' => '228',
            'fronttop' => '170',
            'rightimage' => 'A1790_royal-back.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '220',
            'righttop' => '270',
            'backimage' => 'A1790_royal-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '422',
            'backleft' => '216',
            'backtop' => '110',
            'leftimage' => 'A1790_royal-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '250',
            'leftheight' => '250',
            'leftleft' => '265',
            'lefttop' => '270',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '8',
            '_ADULTWHITE' => '7.5',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 18,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 18,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 18,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 3,
            'color_id' => 91,
            'stylenumber' => 'A1791',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Ladies Wicking T-shirt_Power Blue',
            'price' => '7.5',
            'image' => 'Ladies_Wicking_T-shirt_Power_Blue.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Girls fit
            
            Heat-sealed label
            
            Self-fabric V-neck collar
            
            Set-in sleeves
            
            Double-needle hemmed sleeves and bottom
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'A1790_royal-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '436',
            'frontleft' => '228',
            'fronttop' => '170',
            'rightimage' => 'A1790_royal-back.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '220',
            'righttop' => '270',
            'backimage' => 'A1790_royal-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '422',
            'backleft' => '216',
            'backtop' => '110',
            'leftimage' => 'A1790_royal-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '250',
            'leftheight' => '250',
            'leftleft' => '265',
            'lefttop' => '270',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '8',
            '_ADULTWHITE' => '7.5',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 19,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 19,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 19,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 3,
            'color_id' => 71,
            'stylenumber' => 'A1791',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Ladies Wicking T-shirt_Power Pink',
            'price' => '7.5',
            'image' => 'Ladies_Wicking_T-shirt_Power_Pink.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Girls fit
            
            Heat-sealed label
            
            Self-fabric V-neck collar
            
            Set-in sleeves
            
            Double-needle hemmed sleeves and bottom
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'A1790_royal-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '436',
            'frontleft' => '228',
            'fronttop' => '170',
            'rightimage' => 'A1790_royal-back.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '220',
            'righttop' => '270',
            'backimage' => 'A1790_royal-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '422',
            'backleft' => '216',
            'backtop' => '110',
            'leftimage' => 'A1790_royal-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '250',
            'leftheight' => '250',
            'leftleft' => '265',
            'lefttop' => '270',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '8',
            '_ADULTWHITE' => '7.5',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 20,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 20,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 20,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 3,
            'color_id' => 72,
            'stylenumber' => 'A1791',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Ladies Wicking T-shirt_Red',
            'price' => '7.5',
            'image' => 'Ladies_Wicking_T-shirt_Red.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Girls fit
            
            Heat-sealed label
            
            Self-fabric V-neck collar
            
            Set-in sleeves
            
            Double-needle hemmed sleeves and bottom
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'A1790_royal-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '436',
            'frontleft' => '228',
            'fronttop' => '170',
            'rightimage' => 'A1790_royal-back.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '220',
            'righttop' => '270',
            'backimage' => 'A1790_royal-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '422',
            'backleft' => '216',
            'backtop' => '110',
            'leftimage' => 'A1790_royal-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '250',
            'leftheight' => '250',
            'leftleft' => '265',
            'lefttop' => '270',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '8',
            '_ADULTWHITE' => '7.5',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 21,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 21,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 21,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 3,
            'color_id' => 96,
            'stylenumber' => 'A1791',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Ladies Wicking T-shirt_Power Royal',
            'price' => '7.5',
            'image' => 'Ladies_Wicking_T-shirt_Power_Royal.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Girls fit
            
            Heat-sealed label
            
            Self-fabric V-neck collar
            
            Set-in sleeves
            
            Double-needle hemmed sleeves and bottom
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'A1790_royal-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '436',
            'frontleft' => '228',
            'fronttop' => '170',
            'rightimage' => 'A1790_royal-back.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '220',
            'righttop' => '270',
            'backimage' => 'A1790_royal-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '422',
            'backleft' => '216',
            'backtop' => '110',
            'leftimage' => 'A1790_royal-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '250',
            'leftheight' => '250',
            'leftleft' => '265',
            'lefttop' => '270',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '8',
            '_ADULTWHITE' => '7.5',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 22,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 22,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 22,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 3,
            'color_id' => 135,
            'stylenumber' => 'A1791',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Ladies Wicking T-shirt_Silver Grey',
            'price' => '7.5',
            'image' => 'Ladies_Wicking_T-shirt_Silver_Grey.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Girls fit
            
            Heat-sealed label
            
            Self-fabric V-neck collar
            
            Set-in sleeves
            
            Double-needle hemmed sleeves and bottom
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'A1790_royal-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '436',
            'frontleft' => '228',
            'fronttop' => '170',
            'rightimage' => 'A1790_royal-back.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '220',
            'righttop' => '270',
            'backimage' => 'A1790_royal-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '422',
            'backleft' => '216',
            'backtop' => '110',
            'leftimage' => 'A1790_royal-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '250',
            'leftheight' => '250',
            'leftleft' => '265',
            'lefttop' => '270',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '8',
            '_ADULTWHITE' => '7.5',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 23,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 23,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 23,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 2,
            'color_id' => 5,
            'stylenumber' => 'AUG790',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Wicking T-Shirt_Black',
            'price' => '7.5',
            'image' => 'Wicking_T-Shirt_Black.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Self-fabric collar
            
            Double-needle coverstitched collar and armholes
            
            Double-needle hemmed sleeves and bottom
            
            
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'Aug-790-silver-grey-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '375',
            'frontheight' => '500',
            'frontleft' => '180',
            'fronttop' => '115',
            'rightimage' => 'Aug-790-silver-grey-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '300',
            'rightheight' => '300',
            'rightleft' => '145',
            'righttop' => '340',
            'backimage' => 'Aug-790-silver-grey-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '128',
            'backtop' => '100',
            'leftimage' => 'Aug-790-silver-grey-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '300',
            'leftheight' => '300',
            'leftleft' => '180',
            'lefttop' => '340',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '7.5',
            '_YOUTHWHITE' => '6.5',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9.25',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10.25',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 24,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 24,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 24,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 24,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 24,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 24,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 24,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 24,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 24,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 2,
            'color_id' => 125,
            'stylenumber' => 'AUG790',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Wicking T-Shirt_Dark Green',
            'price' => '7.5',
            'image' => 'Wicking_T-Shirt_Dark_Green.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Self-fabric collar
            
            Double-needle coverstitched collar and armholes
            
            Double-needle hemmed sleeves and bottom
            
            
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'Aug-790-silver-grey-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '375',
            'frontheight' => '500',
            'frontleft' => '180',
            'fronttop' => '115',
            'rightimage' => 'Aug-790-silver-grey-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '300',
            'rightheight' => '300',
            'rightleft' => '145',
            'righttop' => '340',
            'backimage' => 'Aug-790-silver-grey-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '128',
            'backtop' => '100',
            'leftimage' => 'Aug-790-silver-grey-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '300',
            'leftheight' => '300',
            'leftleft' => '180',
            'lefttop' => '340',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '7.5',
            '_YOUTHWHITE' => '6.5',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9.25',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10.25',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 25,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 25,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 25,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 25,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 25,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 25,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 25,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 25,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 25,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 2,
            'color_id' => 132,
            'stylenumber' => 'AUG790',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Wicking T-Shirt_Graphite',
            'price' => '7.5',
            'image' => 'Wicking_T-Shirt_Graphite.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Self-fabric collar
            
            Double-needle coverstitched collar and armholes
            
            Double-needle hemmed sleeves and bottom
            
            
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'Aug-790-silver-grey-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '375',
            'frontheight' => '500',
            'frontleft' => '180',
            'fronttop' => '115',
            'rightimage' => 'Aug-790-silver-grey-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '300',
            'rightheight' => '300',
            'rightleft' => '145',
            'righttop' => '340',
            'backimage' => 'Aug-790-silver-grey-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '128',
            'backtop' => '100',
            'leftimage' => 'Aug-790-silver-grey-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '300',
            'leftheight' => '300',
            'leftleft' => '180',
            'lefttop' => '340',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '7.5',
            '_YOUTHWHITE' => '6.5',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9.25',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10.25',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 26,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 26,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 26,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 26,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 26,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 26,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 26,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 26,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 26,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 3,
            'color_id' => 50,
            'stylenumber' => 'A1791',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Ladies Wicking T-shirt_Power Yellow',
            'price' => '7.5',
            'image' => 'Ladies_Wicking_T-shirt_Power_Yellow.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Girls fit
            
            Heat-sealed label
            
            Self-fabric V-neck collar
            
            Set-in sleeves
            
            Double-needle hemmed sleeves and bottom
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'A1790_royal-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '436',
            'frontleft' => '228',
            'fronttop' => '170',
            'rightimage' => 'A1790_royal-back.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '220',
            'righttop' => '270',
            'backimage' => 'A1790_royal-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '422',
            'backleft' => '216',
            'backtop' => '110',
            'leftimage' => 'A1790_royal-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '250',
            'leftheight' => '250',
            'leftleft' => '265',
            'lefttop' => '270',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '8',
            '_ADULTWHITE' => '7.5',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 27,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 27,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 27,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 1,
            'color_id' => 60,
            'stylenumber' => 'M320',
            'fabric' => '100% Polyester',
            'visibility' => 'Invisible',
            'name' => 'Athletic Sport T-shirt_Team Orange',
            'price' => '12.98',
            'image' => 'Athletic_Sport_T-shirt_Team_Orange.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            Athletic Sport T-shirt
            100% polyester; 40 UPF on White; 30 UPF on other colors
            Wicks moisture and keeps the body dry
            Anti-microbial treatment prevents odors from perspiration
            Double-needle stitching on sleeve and bottom hem for strength
            Comfortable fit
            Sideseamed
            Set-in sleeves
            Self-fabric collar and tagless neck labeling
            Neck seam has double-needle front stitch & overlocking back stitch for strength
            
            
            MOISTURE WICKING - QUICK DRY - BREATHABLE - ANTIMICROBIAL - UV PROTECTION(15-39 UPF)
            
            ',
            'brand' => 'Harriton',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'M320_front_M320-red-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '375',
            'frontheight' => '500',
            'frontleft' => '180',
            'fronttop' => '110',
            'rightimage' => 'M320_rigth_M320-red-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '300',
            'rightheight' => '300',
            'rightleft' => '200',
            'righttop' => '350',
            'backimage' => 'M320_back_M320-red-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '185',
            'backtop' => '110',
            'leftimage' => 'M320_left_M320-red-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '300',
            'leftheight' => '300',
            'leftleft' => '250',
            'lefttop' => '350',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '12.95',
            '_ADULTWHITE' => '11.95',
            '_2xl' => '14.95',
            '_2xlWHITE' => '14.5',
            '_3xl' => '15.95',
            '_3xlWHITE' => '15.5',
            '_4xl' => '16.95',
            '_4xlWHITE' => '16.5',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 28,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 28,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 28,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 28,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 28,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 28,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 28,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 2,
            'color_id' => 91,
            'stylenumber' => 'AUG790',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Wicking T-Shirt_Power Blue',
            'price' => '7.5',
            'image' => 'Wicking_T-Shirt_Power_Blue.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Self-fabric collar
            
            Double-needle coverstitched collar and armholes
            
            Double-needle hemmed sleeves and bottom
            
            
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'Aug-790-silver-grey-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '375',
            'frontheight' => '500',
            'frontleft' => '180',
            'fronttop' => '115',
            'rightimage' => 'Aug-790-silver-grey-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '300',
            'rightheight' => '300',
            'rightleft' => '145',
            'righttop' => '340',
            'backimage' => 'Aug-790-silver-grey-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '128',
            'backtop' => '100',
            'leftimage' => 'Aug-790-silver-grey-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '300',
            'leftheight' => '300',
            'leftleft' => '180',
            'lefttop' => '340',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '7.5',
            '_YOUTHWHITE' => '6.5',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9.25',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10.25',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 29,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 29,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 29,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 29,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 29,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 29,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 29,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 29,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 29,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 2,
            'color_id' => 71,
            'stylenumber' => 'AUG790',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Wicking T-Shirt_Power Pink',
            'price' => '7.5',
            'image' => 'Wicking_T-Shirt_Power_Pink.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Self-fabric collar
            
            Double-needle coverstitched collar and armholes
            
            Double-needle hemmed sleeves and bottom
            
            
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'Aug-790-silver-grey-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '375',
            'frontheight' => '500',
            'frontleft' => '180',
            'fronttop' => '115',
            'rightimage' => 'Aug-790-silver-grey-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '300',
            'rightheight' => '300',
            'rightleft' => '145',
            'righttop' => '340',
            'backimage' => 'Aug-790-silver-grey-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '128',
            'backtop' => '100',
            'leftimage' => 'Aug-790-silver-grey-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '300',
            'leftheight' => '300',
            'leftleft' => '180',
            'lefttop' => '340',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '7.5',
            '_YOUTHWHITE' => '6.5',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9.25',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10.25',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 30,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 30,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 30,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 30,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 30,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 30,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 30,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 30,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 30,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 2,
            'color_id' => 96,
            'stylenumber' => 'AUG790',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Wicking T-Shirt_Power Royal',
            'price' => '7.5',
            'image' => 'Wicking_T-Shirt_Power_Royal.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Self-fabric collar
            
            Double-needle coverstitched collar and armholes
            
            Double-needle hemmed sleeves and bottom
            
            
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'Aug-790-silver-grey-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '375',
            'frontheight' => '500',
            'frontleft' => '180',
            'fronttop' => '115',
            'rightimage' => 'Aug-790-silver-grey-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '300',
            'rightheight' => '300',
            'rightleft' => '145',
            'righttop' => '340',
            'backimage' => 'Aug-790-silver-grey-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '128',
            'backtop' => '100',
            'leftimage' => 'Aug-790-silver-grey-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '300',
            'leftheight' => '300',
            'leftleft' => '180',
            'lefttop' => '340',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '7.5',
            '_YOUTHWHITE' => '6.5',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9.25',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10.25',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 31,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 31,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 31,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 31,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 31,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 31,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 31,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 31,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 31,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 2,
            'color_id' => 72,
            'stylenumber' => 'AUG790',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Wicking T-Shirt_Red',
            'price' => '7.5',
            'image' => 'Wicking_T-Shirt_Red.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Self-fabric collar
            
            Double-needle coverstitched collar and armholes
            
            Double-needle hemmed sleeves and bottom
            
            
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'Aug-790-silver-grey-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '375',
            'frontheight' => '500',
            'frontleft' => '180',
            'fronttop' => '115',
            'rightimage' => 'Aug-790-silver-grey-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '300',
            'rightheight' => '300',
            'rightleft' => '145',
            'righttop' => '340',
            'backimage' => 'Aug-790-silver-grey-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '128',
            'backtop' => '100',
            'leftimage' => 'Aug-790-silver-grey-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '300',
            'leftheight' => '300',
            'leftleft' => '180',
            'lefttop' => '340',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '7.5',
            '_YOUTHWHITE' => '6.5',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9.25',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10.25',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 32,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 32,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 32,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 32,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 32,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 32,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 32,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 32,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 32,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 2,
            'color_id' => 50,
            'stylenumber' => 'AUG790',
            'fabric' => 'Polyester',
            'visibility' => 'Invisible',
            'name' => 'Wicking T-Shirt_Power Yellow',
            'price' => '7.5',
            'image' => 'Wicking_T-Shirt_Power_Yellow.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            100% polyester wicking knit
            
            Wicks moisture away from the body
            
            Self-fabric collar
            
            Double-needle coverstitched collar and armholes
            
            Double-needle hemmed sleeves and bottom
            
            
            
            ',
            'brand' => 'Augusta',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'Aug-790-silver-grey-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '375',
            'frontheight' => '500',
            'frontleft' => '180',
            'fronttop' => '115',
            'rightimage' => 'Aug-790-silver-grey-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '300',
            'rightheight' => '300',
            'rightleft' => '145',
            'righttop' => '340',
            'backimage' => 'Aug-790-silver-grey-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '128',
            'backtop' => '100',
            'leftimage' => 'Aug-790-silver-grey-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '300',
            'leftheight' => '300',
            'leftleft' => '180',
            'lefttop' => '340',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '7.5',
            '_YOUTHWHITE' => '6.5',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9.25',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10.25',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 33,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 33,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 33,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 33,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 33,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 33,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 33,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 33,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 33,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 102,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Blue Dusk',
            'price' => '4',
            'image' => 'Ultra_Cotton_Blue_Dusk.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 34,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 34,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 34,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 34,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 34,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 34,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 34,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 34,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 76,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Berry',
            'price' => '4',
            'image' => 'Ultra_Cotton_Berry.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 35,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 35,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 35,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 35,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 35,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 35,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 5,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ultra Cotton_Black',
            'price' => '4',
            'image' => 'Ultra_Cotton_Black.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 36,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 36,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 36,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 36,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 36,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 36,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 36,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 36,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 36,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 36,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 36,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 36,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 36,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 44,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ultra Cotton_Brown Savana',
            'price' => '4',
            'image' => 'Ultra_Cotton_Brown_Savana.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 37,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 37,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 37,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 37,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 37,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 37,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 75,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Cardinal Red',
            'price' => '4',
            'image' => 'Ultra_Cotton_Cardinal_Red.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 38,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 38,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 38,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 38,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 38,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 38,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 38,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 38,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 38,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 38,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 38,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 38,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 38,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 84,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ultra Cotton_Carolina Blue',
            'price' => '4',
            'image' => 'Ultra_Cotton_Carolina_Blue.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 39,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 39,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 39,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 39,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 39,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 39,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 39,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 39,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 39,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 39,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 39,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 39,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 39,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 139,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ultra Cotton_Charcoal',
            'price' => '4',
            'image' => 'Ultra_Cotton_Charcoal.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 40,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 40,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 40,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 40,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 40,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 40,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 40,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 40,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 40,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 40,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 40,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 40,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 40,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 46,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Chestnut',
            'price' => '4',
            'image' => 'Ultra_Cotton_Chestnut.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 41,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 41,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 41,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 41,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 41,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 41,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 41,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 41,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 140,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Dark Chocolate',
            'price' => '4',
            'image' => 'Ultra_Cotton_Dark_Chocolate.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 42,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 42,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 42,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 42,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 42,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 42,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 42,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 42,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 42,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 42,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 42,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 42,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 42,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 51,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ultra Cotton_Daisy',
            'price' => '4',
            'image' => 'Ultra_Cotton_Daisy.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 43,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 43,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 43,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 43,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 43,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 43,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 43,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 43,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 43,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 43,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 43,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 43,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 43,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 109,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Electric Green',
            'price' => '4',
            'image' => 'Ultra_Cotton_Electric_Green.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 44,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 44,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 44,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 44,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 44,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 44,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 44,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 44,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 44,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 44,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 44,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 44,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 44,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 77,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ultra Cotton_Garnet',
            'price' => '4',
            'image' => 'Ultra_Cotton_Garnet.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 45,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 45,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 45,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 45,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 45,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 45,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 45,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 45,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 45,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 45,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 45,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 45,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 45,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 53,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Gold',
            'price' => '4',
            'image' => 'Ultra_Cotton_Gold.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 46,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 46,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 46,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 46,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 46,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 46,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 46,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 46,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 46,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 46,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 46,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 46,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 46,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 123,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ultra Cotton_Forest Green',
            'price' => '4',
            'image' => 'Ultra_Cotton_Forest_Green.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 47,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 47,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 47,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 47,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 47,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 47,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 47,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 47,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 47,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 47,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 47,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 47,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 47,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 136,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Gravel ',
            'price' => '4',
            'image' => 'Ultra_Cotton_Gravel_.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 48,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 48,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 48,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 48,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 48,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 48,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 48,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 48,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 68,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Heliconia',
            'price' => '4',
            'image' => 'Ultra_Cotton_Heliconia.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 49,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 49,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 49,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 49,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 49,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 49,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 49,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 49,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 49,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 49,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 49,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 49,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 49,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 137,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Ice Grey',
            'price' => '4',
            'image' => 'Ultra_Cotton_Ice_Grey.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 50,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 50,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 50,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 50,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 50,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 50,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 50,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 50,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 103,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Indigo Blue',
            'price' => '4',
            'image' => 'Ultra_Cotton_Indigo_Blue.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 51,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 51,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 51,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 51,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 51,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 51,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 51,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 51,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 51,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 51,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 51,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 51,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 51,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 122,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Irish Green',
            'price' => '4',
            'image' => 'Ultra_Cotton_Irish_Green.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 52,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 52,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 52,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 52,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 52,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 52,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 52,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 52,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 52,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 52,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 52,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 52,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 52,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 80,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ultra Cotton_Light Blue',
            'price' => '4',
            'image' => 'Ultra_Cotton_Light_Blue.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 53,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 53,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 53,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 53,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 53,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 53,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 53,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 53,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 53,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 53,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 53,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 53,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 53,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 62,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ultra Cotton_Light Pink',
            'price' => '4',
            'image' => 'Ultra_Cotton_Light_Pink.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 54,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 54,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 54,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 54,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 54,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 54,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 54,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 54,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 54,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 54,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 54,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 54,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 54,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 11,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ultra Cotton_Lime',
            'price' => '4',
            'image' => 'Ultra_Cotton_Lime.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 55,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 55,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 55,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 55,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 55,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 55,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 55,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 55,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 55,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 55,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 55,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 55,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 55,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 78,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ultra Cotton_Maroon',
            'price' => '4',
            'image' => 'Ultra_Cotton_Maroon.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 56,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 56,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 56,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 56,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 56,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 56,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 56,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 56,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 56,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 56,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 56,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 56,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 56,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 105,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ultra Cotton_Navy',
            'price' => '4',
            'image' => 'Ultra_Cotton_Navy.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 57,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 57,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 57,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 57,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 57,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 57,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 57,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 57,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 57,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 57,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 57,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 57,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 57,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 37,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Natural',
            'price' => '4',
            'image' => 'Ultra_Cotton_Natural.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 58,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 58,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 58,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 58,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 58,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 58,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 58,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 58,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 58,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 58,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 58,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 58,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 58,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 98,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Metro Blue',
            'price' => '4',
            'image' => 'Ultra_Cotton_Metro_Blue.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 59,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 59,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 59,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 59,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 59,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 59,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 59,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 59,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 113,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Mint Green',
            'price' => '4',
            'image' => 'Ultra_Cotton_Mint_Green.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 60,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 60,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 60,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 60,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 60,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 60,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 60,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 60,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 60,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 60,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 60,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 60,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 60,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 94,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Neon Blue',
            'price' => '4',
            'image' => 'Ultra_Cotton_Neon_Blue.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 61,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 61,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 61,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 61,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 61,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 61,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 6,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ultra Cotton_White',
            'price' => '4',
            'image' => 'Ultra_Cotton_White.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 62,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 62,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 62,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 62,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 62,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 62,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 62,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 62,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 62,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 62,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 62,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 62,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 62,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 45,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Old Gold',
            'price' => '4',
            'image' => 'Ultra_Cotton_Old_Gold.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 63,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 63,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 63,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 63,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 63,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 63,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 63,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 63,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 63,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 63,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 63,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 63,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 63,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 107,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Neon Green',
            'price' => '4',
            'image' => 'Ultra_Cotton_Neon_Green.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 64,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 64,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 64,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 64,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 64,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 64,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 59,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ultra Cotton_Orange',
            'price' => '4',
            'image' => 'Ultra_Cotton_Orange.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 65,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 65,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 65,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 65,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 65,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 65,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 65,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 65,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 65,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 65,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 65,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 65,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 65,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 129,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Orchid',
            'price' => '4',
            'image' => 'Ultra_Cotton_Orchid.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 66,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 66,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 66,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 66,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 66,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 66,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 66,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 66,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 133,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ultra Cotton_Purple',
            'price' => '4',
            'image' => 'Ultra_Cotton_Purple.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 67,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 67,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 67,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 67,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 67,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 67,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 67,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 67,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 67,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 67,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 67,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 67,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 67,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 72,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ultra Cotton_Red',
            'price' => '4',
            'image' => 'Ultra_Cotton_Red.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 68,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 68,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 68,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 68,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 68,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 68,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 68,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 68,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 68,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 68,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 68,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 68,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 68,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 96,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Royal',
            'price' => '4',
            'image' => 'Ultra_Cotton_Royal.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 69,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 69,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 69,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 69,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 69,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 69,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 69,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 69,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 69,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 69,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 69,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 69,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 69,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 49,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Safety Green',
            'price' => '4',
            'image' => 'Ultra_Cotton_Safety_Green.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 70,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 70,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 70,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 70,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 70,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 70,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 70,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 70,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 70,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 70,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 70,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 70,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 70,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 38,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ultra Cotton_Sand',
            'price' => '4',
            'image' => 'Ultra_Cotton_Sand.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 71,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 71,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 71,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 71,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 71,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 71,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 71,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 71,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 71,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 71,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 71,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 71,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 71,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 86,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ultra Cotton_Sapphire',
            'price' => '4',
            'image' => 'Ultra_Cotton_Sapphire.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 72,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 72,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 72,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 72,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 72,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 72,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 72,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 72,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 72,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 72,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 72,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 72,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 72,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 83,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ultra Cotton_Sky',
            'price' => '4',
            'image' => 'Ultra_Cotton_Sky.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 73,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 73,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 73,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 73,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 73,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 73,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 73,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 73,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 73,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 73,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 73,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 73,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 73,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 42,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Tan',
            'price' => '4',
            'image' => 'Ultra_Cotton_Tan.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 74,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 74,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 74,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 74,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 74,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 74,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 74,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 74,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 115,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Turf Green',
            'price' => '4',
            'image' => 'Ultra_Cotton_Turf_Green.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 75,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 75,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 75,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 75,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 75,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 75,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 5,
            'color_id' => 39,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton_Yellow Haze',
            'price' => '4',
            'image' => 'Ultra_Cotton_Yellow_Haze.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Quarter-turned to eliminate center crease
            
            Double-needle sleeve and bottom hems
            
            Seamless double-needle ?" collar, taped neck and shoulders
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Blackberry, Lilac, Midnight, Russet, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester. Ash Grey is 99% cotton/1% polyester.�
            
            **Safety Green is compliant with ANSI / ISEA 107 high visibility standards
            
            FIT: Comfortable - Relaxed fit.
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            
            
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500_blue-dusk-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'G500_blue-dusk-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '140',
            'righttop' => '320',
            'backimage' => 'G500_blue-dusk-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '200',
            'backtop' => '110',
            'leftimage' => 'G500_blue-dusk-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '325',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.09',
            '_YOUTHWHITE' => '2.66',
            '_ADULT' => '3.09',
            '_ADULTWHITE' => '2.55',
            '_2xl' => '5.59',
            '_2xlWHITE' => '5.31',
            '_3xl' => '6.59',
            '_3xlWHITE' => '6.56',
            '_4xl' => '6.59',
            '_4xlWHITE' => '6.56',
            '_5xl' => '6.59',
            '_5xlWHITE' => '6.56',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 76,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 76,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 76,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 76,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 76,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 76,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 76,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 76,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 76,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 76,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 76,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 76,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 76,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 6,
            'color_id' => 5,
            'stylenumber' => 'T214',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ladies Fine Jersey V-Neck_Black',
            'price' => '4',
            'image' => 'Ladies_Fine_Jersey_V-Neck_Black.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            Ladies Slim Fit Fine Jersey V-Neck t-shirt�
            
            Features a slim fashion fit for a feminine silhouette.
            
            4.5 oz., 100% ring-spun cotton (unless otherwise noted)
            30/1 fine jersey
            Slim fashion fit for feminine silhouette
            Side-seamed, ribbed v-neck, taped neck, double-needle sleeve and bottom hem
            Reactive-dyed, dischargeable
            Features a Tear Anywhere label
            NAFTA Certified
            
            
            Note: Heather Grey is 90% ring-spun cotton/10% polyester
            
            ',
            'brand' => 'Tultex',
            'sizechartimage' => '',
            'sizechartdescription' => 'Yoel',
            'frontimage' => 'T214_fuchsia.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '310',
            'frontheight' => '413',
            'frontleft' => '215',
            'fronttop' => '210',
            'rightimage' => 'T214_fuchsia-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '145',
            'righttop' => '290',
            'backimage' => 'T214_fuchsia-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '0',
            'backwidth' => '300',
            'backheight' => '400',
            'backleft' => '225',
            'backtop' => '110',
            'leftimage' => 'T214_fuchsia-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '250',
            'leftheight' => '250',
            'leftleft' => '345',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '4',
            '_ADULTWHITE' => '3.75',
            '_2xl' => '6.5',
            '_2xlWHITE' => '6',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 77,
            'size_id' => 20,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 77,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 77,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 77,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 77,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 77,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 6,
            'color_id' => 139,
            'stylenumber' => 'T214',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ladies Fine Jersey V-Neck_Charcoal',
            'price' => '4',
            'image' => 'Ladies_Fine_Jersey_V-Neck_Charcoal.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            Ladies Slim Fit Fine Jersey V-Neck t-shirt�
            
            Features a slim fashion fit for a feminine silhouette.
            
            4.5 oz., 100% ring-spun cotton (unless otherwise noted)
            30/1 fine jersey
            Slim fashion fit for feminine silhouette
            Side-seamed, ribbed v-neck, taped neck, double-needle sleeve and bottom hem
            Reactive-dyed, dischargeable
            Features a Tear Anywhere label
            NAFTA Certified
            
            
            Note: Heather Grey is 90% ring-spun cotton/10% polyester
            
            ',
            'brand' => 'Tultex',
            'sizechartimage' => '',
            'sizechartdescription' => 'Yoel',
            'frontimage' => 'T214_fuchsia.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '310',
            'frontheight' => '413',
            'frontleft' => '215',
            'fronttop' => '210',
            'rightimage' => 'T214_fuchsia-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '145',
            'righttop' => '290',
            'backimage' => 'T214_fuchsia-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '0',
            'backwidth' => '300',
            'backheight' => '400',
            'backleft' => '225',
            'backtop' => '110',
            'leftimage' => 'T214_fuchsia-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '250',
            'leftheight' => '250',
            'leftleft' => '345',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '4',
            '_ADULTWHITE' => '3.75',
            '_2xl' => '6.5',
            '_2xlWHITE' => '6',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 78,
            'size_id' => 20,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 78,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 78,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 78,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 78,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 78,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 6,
            'color_id' => 63,
            'stylenumber' => 'T214',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ladies Fine Jersey V-Neck_Fuchsia',
            'price' => '4',
            'image' => 'Ladies_Fine_Jersey_V-Neck_Fuchsia.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            Ladies Slim Fit Fine Jersey V-Neck t-shirt�
            
            Features a slim fashion fit for a feminine silhouette.
            
            4.5 oz., 100% ring-spun cotton (unless otherwise noted)
            30/1 fine jersey
            Slim fashion fit for feminine silhouette
            Side-seamed, ribbed v-neck, taped neck, double-needle sleeve and bottom hem
            Reactive-dyed, dischargeable
            Features a Tear Anywhere label
            NAFTA Certified
            
            
            Note: Heather Grey is 90% ring-spun cotton/10% polyester
            
            ',
            'brand' => 'Tultex',
            'sizechartimage' => '',
            'sizechartdescription' => 'Yoel',
            'frontimage' => 'T214_fuchsia.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '310',
            'frontheight' => '413',
            'frontleft' => '215',
            'fronttop' => '210',
            'rightimage' => 'T214_fuchsia-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '145',
            'righttop' => '290',
            'backimage' => 'T214_fuchsia-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '0',
            'backwidth' => '300',
            'backheight' => '400',
            'backleft' => '225',
            'backtop' => '110',
            'leftimage' => 'T214_fuchsia-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '250',
            'leftheight' => '250',
            'leftleft' => '345',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '4',
            '_ADULTWHITE' => '3.75',
            '_2xl' => '6.5',
            '_2xlWHITE' => '6',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 79,
            'size_id' => 20,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 79,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 79,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 79,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 79,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 79,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 6,
            'color_id' => 6,
            'stylenumber' => 'T214',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ladies Fine Jersey V-Neck_White',
            'price' => '4',
            'image' => 'Ladies_Fine_Jersey_V-Neck_White.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '
            Ladies Slim Fit Fine Jersey V-Neck t-shirt�
            
            Features a slim fashion fit for a feminine silhouette.
            
            4.5 oz., 100% ring-spun cotton (unless otherwise noted)
            30/1 fine jersey
            Slim fashion fit for feminine silhouette
            Side-seamed, ribbed v-neck, taped neck, double-needle sleeve and bottom hem
            Reactive-dyed, dischargeable
            Features a Tear Anywhere label
            NAFTA Certified
            
            
            Note: Heather Grey is 90% ring-spun cotton/10% polyester
            
            ',
            'brand' => 'Tultex',
            'sizechartimage' => '',
            'sizechartdescription' => 'Yoel',
            'frontimage' => 'T214_fuchsia.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '310',
            'frontheight' => '413',
            'frontleft' => '215',
            'fronttop' => '210',
            'rightimage' => 'T214_fuchsia-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '145',
            'righttop' => '290',
            'backimage' => 'T214_fuchsia-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '0',
            'backwidth' => '300',
            'backheight' => '400',
            'backleft' => '225',
            'backtop' => '110',
            'leftimage' => 'T214_fuchsia-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '250',
            'leftheight' => '250',
            'leftleft' => '345',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '4',
            '_ADULTWHITE' => '3.75',
            '_2xl' => '6.5',
            '_2xlWHITE' => '6',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 80,
            'size_id' => 20,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 80,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 80,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 80,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 80,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 80,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 8,
            'color_id' => 65,
            'stylenumber' => 'G500L',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ladies Cotton T-shirt_Azalea',
            'price' => '5',
            'image' => 'Ladies_Cotton_T-shirt_Azalea.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '
            Ladies Cotton T-shirt
            
            100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Semi-fitted contoured silhouette with side seam
            Seamless double-needle �" collar, taped neck and shoulders
            Double-needle sleeve and bottom hems, cap sleeves
            
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Ash Grey is 99% cotton/1% polyester. Blackberry, Lilac, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'g500l-azalea-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '413',
            'frontleft' => '235',
            'fronttop' => '135',
            'rightimage' => 'g500l-azalea-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '135',
            'righttop' => '360',
            'backimage' => 'g500l-azalea-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '387',
            'backleft' => '222',
            'backtop' => '110',
            'leftimage' => 'g500l-azalea-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '330',
            'lefttop' => '360',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '5',
            '_ADULTWHITE' => '4.5',
            '_2xl' => '7.5',
            '_2xlWHITE' => '7',
            '_3xl' => '8.5',
            '_3xlWHITE' => '8',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 81,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 81,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 81,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 81,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 81,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 8,
            'color_id' => 5,
            'stylenumber' => 'G500L',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ladies Cotton T-shirt_Black',
            'price' => '5',
            'image' => 'Ladies_Cotton_T-shirt_Black.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '
            Ladies Cotton T-shirt
            
            100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Semi-fitted contoured silhouette with side seam
            Seamless double-needle �" collar, taped neck and shoulders
            Double-needle sleeve and bottom hems, cap sleeves
            
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Ash Grey is 99% cotton/1% polyester. Blackberry, Lilac, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'g500l-azalea-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '413',
            'frontleft' => '235',
            'fronttop' => '135',
            'rightimage' => 'g500l-azalea-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '135',
            'righttop' => '360',
            'backimage' => 'g500l-azalea-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '387',
            'backleft' => '222',
            'backtop' => '110',
            'leftimage' => 'g500l-azalea-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '330',
            'lefttop' => '360',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '5',
            '_ADULTWHITE' => '4.5',
            '_2xl' => '7.5',
            '_2xlWHITE' => '7',
            '_3xl' => '8.5',
            '_3xlWHITE' => '8',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 82,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 82,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 82,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 82,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 82,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 82,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            /*Product::create([
            'parent_id' => 7,
            'color_id' => 2,
            'stylenumber' => 'G570',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Dryblend 3/4 Sleeve Raglan T-shirt_white/black',
            'price' => '8',
            'image' => 'Dryblend_3_4_Sleeve_Raglan_T-shirt_white_black.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Dryblend 3/4 Sleeve Raglan T-Shirt�
            5.3 oz., 100% cotton pre-shrunk jersey knit (unless otherwise noted)
            
            Contrast color set-in collar and �" length raglan sleeve
            
            Single-needle topstitched back neck, double-needle sleeve and bottom hems
            
            Quarter-turned to eliminate center crease
            
            Note: Sport Grey is 90% cotton/10% polyester.
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            Width:� Measure across the chest an inch below the armpit
            
            Sleeve:
            
            S: 21.5"
            
            M: 22"
            
            L: 22.5"
            
            XL: 23"
            
            2XL: 23.5"
            
            3XL: 24"
            
            ',
            'frontimage' => 'G5700_red-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '197',
            'fronttop' => '140',
            'rightimage' => 'G5700_red-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '150',
            'rightheight' => '400',
            'rightleft' => '285',
            'righttop' => '320',
            'backimage' => 'G5700_red-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '195',
            'backtop' => '110',
            'leftimage' => 'G5700_red-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '150',
            'leftheight' => '400',
            'leftleft' => '305',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '8',
            '_ADULTWHITE' => '8',
            '_2xl' => '10',
            '_2xlWHITE' => '10',
            '_3xl' => '11',
            '_3xlWHITE' => '11',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 83,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 83,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 83,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 83,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 83,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 83,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 7,
            'color_id' => 1,
            'stylenumber' => 'G570',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Dryblend 3/4 Sleeve Raglan T-shirt_white/navy',
            'price' => '8',
            'image' => 'Dryblend_3_4_Sleeve_Raglan_T-shirt_white_navy.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Dryblend 3/4 Sleeve Raglan T-Shirt�
            5.3 oz., 100% cotton pre-shrunk jersey knit (unless otherwise noted)
            
            Contrast color set-in collar and �" length raglan sleeve
            
            Single-needle topstitched back neck, double-needle sleeve and bottom hems
            
            Quarter-turned to eliminate center crease
            
            Note: Sport Grey is 90% cotton/10% polyester.
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            Width:� Measure across the chest an inch below the armpit
            
            Sleeve:
            
            S: 21.5"
            
            M: 22"
            
            L: 22.5"
            
            XL: 23"
            
            2XL: 23.5"
            
            3XL: 24"
            
            ',
            'frontimage' => 'G5700_red-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '197',
            'fronttop' => '140',
            'rightimage' => 'G5700_red-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '150',
            'rightheight' => '400',
            'rightleft' => '285',
            'righttop' => '320',
            'backimage' => 'G5700_red-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '195',
            'backtop' => '110',
            'leftimage' => 'G5700_red-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '150',
            'leftheight' => '400',
            'leftleft' => '305',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '8',
            '_ADULTWHITE' => '8',
            '_2xl' => '10',
            '_2xlWHITE' => '10',
            '_3xl' => '11',
            '_3xlWHITE' => '11',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 84,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 84,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 84,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 84,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 84,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 84,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 7,
            'color_id' => 3,
            'stylenumber' => 'G570',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Dryblend 3/4 Sleeve Raglan T-shirt_white/red',
            'price' => '8',
            'image' => 'Dryblend_3_4_Sleeve_Raglan_T-shirt_white_red.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Dryblend 3/4 Sleeve Raglan T-Shirt�
            5.3 oz., 100% cotton pre-shrunk jersey knit (unless otherwise noted)
            
            Contrast color set-in collar and �" length raglan sleeve
            
            Single-needle topstitched back neck, double-needle sleeve and bottom hems
            
            Quarter-turned to eliminate center crease
            
            Note: Sport Grey is 90% cotton/10% polyester.
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            Width:� Measure across the chest an inch below the armpit
            
            Sleeve:
            
            S: 21.5"
            
            M: 22"
            
            L: 22.5"
            
            XL: 23"
            
            2XL: 23.5"
            
            3XL: 24"
            
            ',
            'frontimage' => 'G5700_red-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '197',
            'fronttop' => '140',
            'rightimage' => 'G5700_red-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '150',
            'rightheight' => '400',
            'rightleft' => '285',
            'righttop' => '320',
            'backimage' => 'G5700_red-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '195',
            'backtop' => '110',
            'leftimage' => 'G5700_red-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '150',
            'leftheight' => '400',
            'leftleft' => '305',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '8',
            '_ADULTWHITE' => '8',
            '_2xl' => '10',
            '_2xlWHITE' => '10',
            '_3xl' => '11',
            '_3xlWHITE' => '11',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 85,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 85,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 85,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 85,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 85,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 85,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 7,
            'color_id' => 4,
            'stylenumber' => 'G570',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Dryblend 3/4 Sleeve Raglan T-shirt_white/royal',
            'price' => '8',
            'image' => 'Dryblend_3_4_Sleeve_Raglan_T-shirt_white_royal.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Dryblend 3/4 Sleeve Raglan T-Shirt�
            5.3 oz., 100% cotton pre-shrunk jersey knit (unless otherwise noted)
            
            Contrast color set-in collar and �" length raglan sleeve
            
            Single-needle topstitched back neck, double-needle sleeve and bottom hems
            
            Quarter-turned to eliminate center crease
            
            Note: Sport Grey is 90% cotton/10% polyester.
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            Width:� Measure across the chest an inch below the armpit
            
            Sleeve:
            
            S: 21.5"
            
            M: 22"
            
            L: 22.5"
            
            XL: 23"
            
            2XL: 23.5"
            
            3XL: 24"
            
            ',
            'frontimage' => 'G5700_red-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '197',
            'fronttop' => '140',
            'rightimage' => 'G5700_red-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '150',
            'rightheight' => '400',
            'rightleft' => '285',
            'righttop' => '320',
            'backimage' => 'G5700_red-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '195',
            'backtop' => '110',
            'leftimage' => 'G5700_red-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '150',
            'leftheight' => '400',
            'leftleft' => '305',
            'lefttop' => '320',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '8',
            '_ADULTWHITE' => '8',
            '_2xl' => '10',
            '_2xlWHITE' => '10',
            '_3xl' => '11',
            '_3xlWHITE' => '11',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 86,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 86,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 86,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 86,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 86,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 86,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 8,
            'color_id' => 75,
            'stylenumber' => 'G500L',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ladies Cotton T-shirt_Cardinal Red',
            'price' => '5',
            'image' => 'Ladies_Cotton_T-shirt_Cardinal_Red.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            Ladies Cotton T-shirt
            
            100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Semi-fitted contoured silhouette with side seam
            Seamless double-needle �" collar, taped neck and shoulders
            Double-needle sleeve and bottom hems, cap sleeves
            
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Ash Grey is 99% cotton/1% polyester. Blackberry, Lilac, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'g500l-azalea-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '413',
            'frontleft' => '235',
            'fronttop' => '135',
            'rightimage' => 'g500l-azalea-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '135',
            'righttop' => '360',
            'backimage' => 'g500l-azalea-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '387',
            'backleft' => '222',
            'backtop' => '110',
            'leftimage' => 'g500l-azalea-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '330',
            'lefttop' => '360',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '5',
            '_ADULTWHITE' => '4.5',
            '_2xl' => '7.5',
            '_2xlWHITE' => '7',
            '_3xl' => '8.5',
            '_3xlWHITE' => '8',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 87,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 87,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 87,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 87,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 87,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 8,
            'color_id' => 139,
            'stylenumber' => 'G500L',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ladies Cotton T-shirt_Charcoal',
            'price' => '5',
            'image' => 'Ladies_Cotton_T-shirt_Charcoal.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '
            Ladies Cotton T-shirt
            
            100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Semi-fitted contoured silhouette with side seam
            Seamless double-needle �" collar, taped neck and shoulders
            Double-needle sleeve and bottom hems, cap sleeves
            
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Ash Grey is 99% cotton/1% polyester. Blackberry, Lilac, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'g500l-azalea-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '413',
            'frontleft' => '235',
            'fronttop' => '135',
            'rightimage' => 'g500l-azalea-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '135',
            'righttop' => '360',
            'backimage' => 'g500l-azalea-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '387',
            'backleft' => '222',
            'backtop' => '110',
            'leftimage' => 'g500l-azalea-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '330',
            'lefttop' => '360',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '5',
            '_ADULTWHITE' => '4.5',
            '_2xl' => '7.5',
            '_2xlWHITE' => '7',
            '_3xl' => '8.5',
            '_3xlWHITE' => '8',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 88,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 88,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 88,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 88,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 88,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 88,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 8,
            'color_id' => 77,
            'stylenumber' => 'G500L',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ladies Cotton T-shirt_Garnet',
            'price' => '5',
            'image' => 'Ladies_Cotton_T-shirt_Garnet.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '
            Ladies Cotton T-shirt
            
            100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Semi-fitted contoured silhouette with side seam
            Seamless double-needle �" collar, taped neck and shoulders
            Double-needle sleeve and bottom hems, cap sleeves
            
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Ash Grey is 99% cotton/1% polyester. Blackberry, Lilac, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'g500l-azalea-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '413',
            'frontleft' => '235',
            'fronttop' => '135',
            'rightimage' => 'g500l-azalea-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '135',
            'righttop' => '360',
            'backimage' => 'g500l-azalea-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '387',
            'backleft' => '222',
            'backtop' => '110',
            'leftimage' => 'g500l-azalea-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '330',
            'lefttop' => '360',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '5',
            '_ADULTWHITE' => '4.5',
            '_2xl' => '7.5',
            '_2xlWHITE' => '7',
            '_3xl' => '8.5',
            '_3xlWHITE' => '8',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 89,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 89,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 89,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 89,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 89,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 8,
            'color_id' => 68,
            'stylenumber' => 'G500L',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ladies Cotton T-shirt_Heliconia',
            'price' => '5',
            'image' => 'Ladies_Cotton_T-shirt_Heliconia.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '
            Ladies Cotton T-shirt
            
            100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Semi-fitted contoured silhouette with side seam
            Seamless double-needle �" collar, taped neck and shoulders
            Double-needle sleeve and bottom hems, cap sleeves
            
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Ash Grey is 99% cotton/1% polyester. Blackberry, Lilac, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'g500l-azalea-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '413',
            'frontleft' => '235',
            'fronttop' => '135',
            'rightimage' => 'g500l-azalea-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '135',
            'righttop' => '360',
            'backimage' => 'g500l-azalea-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '387',
            'backleft' => '222',
            'backtop' => '110',
            'leftimage' => 'g500l-azalea-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '330',
            'lefttop' => '360',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '5',
            '_ADULTWHITE' => '4.5',
            '_2xl' => '7.5',
            '_2xlWHITE' => '7',
            '_3xl' => '8.5',
            '_3xlWHITE' => '8',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 90,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 90,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 90,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 90,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 90,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 8,
            'color_id' => 122,
            'stylenumber' => 'G500L',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ladies Cotton T-shirt_Irish Green',
            'price' => '5',
            'image' => 'Ladies_Cotton_T-shirt_Irish_Green.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            Ladies Cotton T-shirt
            
            100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Semi-fitted contoured silhouette with side seam
            Seamless double-needle �" collar, taped neck and shoulders
            Double-needle sleeve and bottom hems, cap sleeves
            
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Ash Grey is 99% cotton/1% polyester. Blackberry, Lilac, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'g500l-azalea-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '413',
            'frontleft' => '235',
            'fronttop' => '135',
            'rightimage' => 'g500l-azalea-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '135',
            'righttop' => '360',
            'backimage' => 'g500l-azalea-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '387',
            'backleft' => '222',
            'backtop' => '110',
            'leftimage' => 'g500l-azalea-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '330',
            'lefttop' => '360',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '5',
            '_ADULTWHITE' => '4.5',
            '_2xl' => '7.5',
            '_2xlWHITE' => '7',
            '_3xl' => '8.5',
            '_3xlWHITE' => '8',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 91,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 91,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 91,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 91,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 91,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 91,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 8,
            'color_id' => 62,
            'stylenumber' => 'G500L',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ladies Cotton T-shirt_Light Pink',
            'price' => '5',
            'image' => 'Ladies_Cotton_T-shirt_Light_Pink.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => '
            Ladies Cotton T-shirt
            
            100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Semi-fitted contoured silhouette with side seam
            Seamless double-needle �" collar, taped neck and shoulders
            Double-needle sleeve and bottom hems, cap sleeves
            
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Ash Grey is 99% cotton/1% polyester. Blackberry, Lilac, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'g500l-azalea-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '413',
            'frontleft' => '235',
            'fronttop' => '135',
            'rightimage' => 'g500l-azalea-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '135',
            'righttop' => '360',
            'backimage' => 'g500l-azalea-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '387',
            'backleft' => '222',
            'backtop' => '110',
            'leftimage' => 'g500l-azalea-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '330',
            'lefttop' => '360',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '5',
            '_ADULTWHITE' => '4.5',
            '_2xl' => '7.5',
            '_2xlWHITE' => '7',
            '_3xl' => '8.5',
            '_3xlWHITE' => '8',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 92,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 92,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 92,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 92,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 92,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 8,
            'color_id' => 11,
            'stylenumber' => 'G500L',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ladies Cotton T-shirt_Lime',
            'price' => '5',
            'image' => 'Ladies_Cotton_T-shirt_Lime.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '
            Ladies Cotton T-shirt
            
            100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Semi-fitted contoured silhouette with side seam
            Seamless double-needle �" collar, taped neck and shoulders
            Double-needle sleeve and bottom hems, cap sleeves
            
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Ash Grey is 99% cotton/1% polyester. Blackberry, Lilac, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'g500l-azalea-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '413',
            'frontleft' => '235',
            'fronttop' => '135',
            'rightimage' => 'g500l-azalea-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '135',
            'righttop' => '360',
            'backimage' => 'g500l-azalea-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '387',
            'backleft' => '222',
            'backtop' => '110',
            'leftimage' => 'g500l-azalea-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '330',
            'lefttop' => '360',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '5',
            '_ADULTWHITE' => '4.5',
            '_2xl' => '7.5',
            '_2xlWHITE' => '7',
            '_3xl' => '8.5',
            '_3xlWHITE' => '8',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 93,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 93,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 93,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 93,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 93,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 8,
            'color_id' => 78,
            'stylenumber' => 'G500L',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ladies Cotton T-shirt_Maroon',
            'price' => '5',
            'image' => 'Ladies_Cotton_T-shirt_Maroon.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '
            Ladies Cotton T-shirt
            
            100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Semi-fitted contoured silhouette with side seam
            Seamless double-needle �" collar, taped neck and shoulders
            Double-needle sleeve and bottom hems, cap sleeves
            
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Ash Grey is 99% cotton/1% polyester. Blackberry, Lilac, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'g500l-azalea-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '413',
            'frontleft' => '235',
            'fronttop' => '135',
            'rightimage' => 'g500l-azalea-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '135',
            'righttop' => '360',
            'backimage' => 'g500l-azalea-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '387',
            'backleft' => '222',
            'backtop' => '110',
            'leftimage' => 'g500l-azalea-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '330',
            'lefttop' => '360',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '5',
            '_ADULTWHITE' => '4.5',
            '_2xl' => '7.5',
            '_2xlWHITE' => '7',
            '_3xl' => '8.5',
            '_3xlWHITE' => '8',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 94,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 94,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 94,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 94,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 94,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 94,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 8,
            'color_id' => 105,
            'stylenumber' => 'G500L',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ladies Cotton T-shirt_Navy',
            'price' => '5',
            'image' => 'Ladies_Cotton_T-shirt_Navy.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '
            Ladies Cotton T-shirt
            
            100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Semi-fitted contoured silhouette with side seam
            Seamless double-needle �" collar, taped neck and shoulders
            Double-needle sleeve and bottom hems, cap sleeves
            
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Ash Grey is 99% cotton/1% polyester. Blackberry, Lilac, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'g500l-azalea-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '413',
            'frontleft' => '235',
            'fronttop' => '135',
            'rightimage' => 'g500l-azalea-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '135',
            'righttop' => '360',
            'backimage' => 'g500l-azalea-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '387',
            'backleft' => '222',
            'backtop' => '110',
            'leftimage' => 'g500l-azalea-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '330',
            'lefttop' => '360',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '5',
            '_ADULTWHITE' => '4.5',
            '_2xl' => '7.5',
            '_2xlWHITE' => '7',
            '_3xl' => '8.5',
            '_3xlWHITE' => '8',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 95,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 95,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 95,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 95,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 95,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 95,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 8,
            'color_id' => 133,
            'stylenumber' => 'G500L',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ladies Cotton T-shirt_Purple',
            'price' => '5',
            'image' => 'Ladies_Cotton_T-shirt_Purple.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '
            Ladies Cotton T-shirt
            
            100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Semi-fitted contoured silhouette with side seam
            Seamless double-needle �" collar, taped neck and shoulders
            Double-needle sleeve and bottom hems, cap sleeves
            
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Ash Grey is 99% cotton/1% polyester. Blackberry, Lilac, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'g500l-azalea-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '413',
            'frontleft' => '235',
            'fronttop' => '135',
            'rightimage' => 'g500l-azalea-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '135',
            'righttop' => '360',
            'backimage' => 'g500l-azalea-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '387',
            'backleft' => '222',
            'backtop' => '110',
            'leftimage' => 'g500l-azalea-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '330',
            'lefttop' => '360',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '5',
            '_ADULTWHITE' => '4.5',
            '_2xl' => '7.5',
            '_2xlWHITE' => '7',
            '_3xl' => '8.5',
            '_3xlWHITE' => '8',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 96,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 96,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 96,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 96,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 96,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 96,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 8,
            'color_id' => 72,
            'stylenumber' => 'G500L',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ladies Cotton T-shirt_Red',
            'price' => '5',
            'image' => 'Ladies_Cotton_T-shirt_Red.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '
            Ladies Cotton T-shirt
            
            100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Semi-fitted contoured silhouette with side seam
            Seamless double-needle �" collar, taped neck and shoulders
            Double-needle sleeve and bottom hems, cap sleeves
            
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Ash Grey is 99% cotton/1% polyester. Blackberry, Lilac, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'g500l-azalea-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '413',
            'frontleft' => '235',
            'fronttop' => '135',
            'rightimage' => 'g500l-azalea-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '135',
            'righttop' => '360',
            'backimage' => 'g500l-azalea-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '387',
            'backleft' => '222',
            'backtop' => '110',
            'leftimage' => 'g500l-azalea-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '330',
            'lefttop' => '360',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '5',
            '_ADULTWHITE' => '4.5',
            '_2xl' => '7.5',
            '_2xlWHITE' => '7',
            '_3xl' => '8.5',
            '_3xlWHITE' => '8',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 97,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 97,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 97,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 97,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 97,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 97,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 8,
            'color_id' => 96,
            'stylenumber' => 'G500L',
            'fabric' => 'Cotton',
            'visibility' => 'Invisible',
            'name' => 'Ladies Cotton T-shirt_Royal',
            'price' => '5',
            'image' => 'Ladies_Cotton_T-shirt_Royal.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '
            Ladies Cotton T-shirt
            
            100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Semi-fitted contoured silhouette with side seam
            Seamless double-needle �" collar, taped neck and shoulders
            Double-needle sleeve and bottom hems, cap sleeves
            
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Ash Grey is 99% cotton/1% polyester. Blackberry, Lilac, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'g500l-azalea-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '413',
            'frontleft' => '235',
            'fronttop' => '135',
            'rightimage' => 'g500l-azalea-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '135',
            'righttop' => '360',
            'backimage' => 'g500l-azalea-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '387',
            'backleft' => '222',
            'backtop' => '110',
            'leftimage' => 'g500l-azalea-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '330',
            'lefttop' => '360',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '5',
            '_ADULTWHITE' => '4.5',
            '_2xl' => '7.5',
            '_2xlWHITE' => '7',
            '_3xl' => '8.5',
            '_3xlWHITE' => '8',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 98,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 98,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 98,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 98,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 98,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 8,
            'color_id' => 86,
            'stylenumber' => 'G500L',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ladies Cotton T-shirt_Sapphire',
            'price' => '5',
            'image' => 'Ladies_Cotton_T-shirt_Sapphire.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '
            Ladies Cotton T-shirt
            
            100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Semi-fitted contoured silhouette with side seam
            Seamless double-needle �" collar, taped neck and shoulders
            Double-needle sleeve and bottom hems, cap sleeves
            
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Ash Grey is 99% cotton/1% polyester. Blackberry, Lilac, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'g500l-azalea-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '413',
            'frontleft' => '235',
            'fronttop' => '135',
            'rightimage' => 'g500l-azalea-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '135',
            'righttop' => '360',
            'backimage' => 'g500l-azalea-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '387',
            'backleft' => '222',
            'backtop' => '110',
            'leftimage' => 'g500l-azalea-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '330',
            'lefttop' => '360',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '5',
            '_ADULTWHITE' => '4.5',
            '_2xl' => '7.5',
            '_2xlWHITE' => '7',
            '_3xl' => '8.5',
            '_3xlWHITE' => '8',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 99,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 99,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 99,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 99,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 99,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 8,
            'color_id' => 6,
            'stylenumber' => 'G500L',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ladies Cotton T-shirt_White',
            'price' => '5',
            'image' => 'Ladies_Cotton_T-shirt_White.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '
            Ladies Cotton T-shirt
            
            100% cotton pre-shrunk jersey knit (unless otherwise noted)
            Semi-fitted contoured silhouette with side seam
            Seamless double-needle �" collar, taped neck and shoulders
            Double-needle sleeve and bottom hems, cap sleeves
            
            
            Note: Antique colors and Sport Grey are 90% cotton/10% polyester. Ash Grey is 99% cotton/1% polyester. Blackberry, Lilac, Sunset, Heather, Neon and Safety colors are 50% cotton/50% polyester
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'g500l-azalea-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '413',
            'frontleft' => '235',
            'fronttop' => '135',
            'rightimage' => 'g500l-azalea-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '135',
            'righttop' => '360',
            'backimage' => 'g500l-azalea-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '290',
            'backheight' => '387',
            'backleft' => '222',
            'backtop' => '110',
            'leftimage' => 'g500l-azalea-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '330',
            'lefttop' => '360',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '5',
            '_ADULTWHITE' => '4.5',
            '_2xl' => '7.5',
            '_2xlWHITE' => '7',
            '_3xl' => '8.5',
            '_3xlWHITE' => '8',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 100,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 100,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 100,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 100,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 100,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 4,
            'color_id' => 5,
            'stylenumber' => 'G530',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Cotton Pocket T-Shirt_Black',
            'price' => '7.5',
            'image' => 'Cotton_Pocket_T-Shirt_Black.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Fabric:
            5.3 oz., 100% cotton
            Saftey Pink, Safety Green, Neon Green, Graphite Heather and
            Heather Radiant Orchid are 50/50 Cotton/Polyester
            
            Features:
            
            Seamless double needle 7/8" collar
            Taped neck and shoulders
            Tear-away label
            Single needle left chest pocket
            Double needle pocket, sleeve and bottom hems
            Quarter-turned to eliminate center crease
            Safety Green is Compliant with ANSI / ISEA 107 High Visibility Standards
            Safety Green is 50/50 Blend
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'G5300_char-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '150',
            'frontheight' => '150',
            'frontleft' => '210',
            'fronttop' => '155',
            'rightimage' => 'G5300_char-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '220',
            'backimage' => 'G5300_char-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '198',
            'backtop' => '110',
            'leftimage' => 'G5300_char-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '220',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 101,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 101,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 101,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 101,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 101,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 101,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 4,
            'color_id' => 139,
            'stylenumber' => 'G530',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Cotton Pocket T-Shirt_Charcoal',
            'price' => '7.5',
            'image' => 'Cotton_Pocket_T-Shirt_Charcoal.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Fabric:
            5.3 oz., 100% cotton
            Saftey Pink, Safety Green, Neon Green, Graphite Heather and
            Heather Radiant Orchid are 50/50 Cotton/Polyester
            
            Features:
            
            Seamless double needle 7/8" collar
            Taped neck and shoulders
            Tear-away label
            Single needle left chest pocket
            Double needle pocket, sleeve and bottom hems
            Quarter-turned to eliminate center crease
            Safety Green is Compliant with ANSI / ISEA 107 High Visibility Standards
            Safety Green is 50/50 Blend
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'G5300_char-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '150',
            'frontheight' => '150',
            'frontleft' => '210',
            'fronttop' => '155',
            'rightimage' => 'G5300_char-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '220',
            'backimage' => 'G5300_char-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '198',
            'backtop' => '110',
            'leftimage' => 'G5300_char-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '220',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 102,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 102,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 102,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 102,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 102,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 102,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 4,
            'color_id' => 68,
            'stylenumber' => 'G530',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Cotton Pocket T-Shirt_Heliconia',
            'price' => '7.5',
            'image' => 'Cotton_Pocket_T-Shirt_Heliconia.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Fabric:
            5.3 oz., 100% cotton
            Saftey Pink, Safety Green, Neon Green, Graphite Heather and
            Heather Radiant Orchid are 50/50 Cotton/Polyester
            
            Features:
            
            Seamless double needle 7/8" collar
            Taped neck and shoulders
            Tear-away label
            Single needle left chest pocket
            Double needle pocket, sleeve and bottom hems
            Quarter-turned to eliminate center crease
            Safety Green is Compliant with ANSI / ISEA 107 High Visibility Standards
            Safety Green is 50/50 Blend
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'G5300_char-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '150',
            'frontheight' => '150',
            'frontleft' => '210',
            'fronttop' => '155',
            'rightimage' => 'G5300_char-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '220',
            'backimage' => 'G5300_char-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '198',
            'backtop' => '110',
            'leftimage' => 'G5300_char-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '220',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 103,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 103,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 103,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 103,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 103,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 103,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 4,
            'color_id' => 122,
            'stylenumber' => 'G530',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Cotton Pocket T-Shirt_Irish Green',
            'price' => '7.5',
            'image' => 'Cotton_Pocket_T-Shirt_Irish_Green.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Fabric:
            5.3 oz., 100% cotton
            Saftey Pink, Safety Green, Neon Green, Graphite Heather and
            Heather Radiant Orchid are 50/50 Cotton/Polyester
            
            Features:
            
            Seamless double needle 7/8" collar
            Taped neck and shoulders
            Tear-away label
            Single needle left chest pocket
            Double needle pocket, sleeve and bottom hems
            Quarter-turned to eliminate center crease
            Safety Green is Compliant with ANSI / ISEA 107 High Visibility Standards
            Safety Green is 50/50 Blend
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'G5300_char-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '150',
            'frontheight' => '150',
            'frontleft' => '210',
            'fronttop' => '155',
            'rightimage' => 'G5300_char-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '220',
            'backimage' => 'G5300_char-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '198',
            'backtop' => '110',
            'leftimage' => 'G5300_char-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '220',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 104,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 104,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 104,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 104,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 104,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 104,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 4,
            'color_id' => 78,
            'stylenumber' => 'G530',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Cotton Pocket T-Shirt_Maroon',
            'price' => '7.5',
            'image' => 'Cotton_Pocket_T-Shirt_Maroon.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Fabric:
            5.3 oz., 100% cotton
            Saftey Pink, Safety Green, Neon Green, Graphite Heather and
            Heather Radiant Orchid are 50/50 Cotton/Polyester
            
            Features:
            
            Seamless double needle 7/8" collar
            Taped neck and shoulders
            Tear-away label
            Single needle left chest pocket
            Double needle pocket, sleeve and bottom hems
            Quarter-turned to eliminate center crease
            Safety Green is Compliant with ANSI / ISEA 107 High Visibility Standards
            Safety Green is 50/50 Blend
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'G5300_char-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '150',
            'frontheight' => '150',
            'frontleft' => '210',
            'fronttop' => '155',
            'rightimage' => 'G5300_char-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '220',
            'backimage' => 'G5300_char-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '198',
            'backtop' => '110',
            'leftimage' => 'G5300_char-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '220',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 105,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 105,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 105,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 105,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 105,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 105,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 4,
            'color_id' => 105,
            'stylenumber' => 'G530',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Cotton Pocket T-Shirt_Navy',
            'price' => '7.5',
            'image' => 'Cotton_Pocket_T-Shirt_Navy.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Fabric:
            5.3 oz., 100% cotton
            Saftey Pink, Safety Green, Neon Green, Graphite Heather and
            Heather Radiant Orchid are 50/50 Cotton/Polyester
            
            Features:
            
            Seamless double needle 7/8" collar
            Taped neck and shoulders
            Tear-away label
            Single needle left chest pocket
            Double needle pocket, sleeve and bottom hems
            Quarter-turned to eliminate center crease
            Safety Green is Compliant with ANSI / ISEA 107 High Visibility Standards
            Safety Green is 50/50 Blend
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'G5300_char-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '150',
            'frontheight' => '150',
            'frontleft' => '210',
            'fronttop' => '155',
            'rightimage' => 'G5300_char-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '220',
            'backimage' => 'G5300_char-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '198',
            'backtop' => '110',
            'leftimage' => 'G5300_char-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '220',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 106,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 106,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 106,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 106,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 106,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 106,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 4,
            'color_id' => 59,
            'stylenumber' => 'G530',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Cotton Pocket T-Shirt_Orange',
            'price' => '7.5',
            'image' => 'Cotton_Pocket_T-Shirt_Orange.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Fabric:
            5.3 oz., 100% cotton
            Saftey Pink, Safety Green, Neon Green, Graphite Heather and
            Heather Radiant Orchid are 50/50 Cotton/Polyester
            
            Features:
            
            Seamless double needle 7/8" collar
            Taped neck and shoulders
            Tear-away label
            Single needle left chest pocket
            Double needle pocket, sleeve and bottom hems
            Quarter-turned to eliminate center crease
            Safety Green is Compliant with ANSI / ISEA 107 High Visibility Standards
            Safety Green is 50/50 Blend
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'G5300_char-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '150',
            'frontheight' => '150',
            'frontleft' => '210',
            'fronttop' => '155',
            'rightimage' => 'G5300_char-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '220',
            'backimage' => 'G5300_char-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '198',
            'backtop' => '110',
            'leftimage' => 'G5300_char-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '220',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 107,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 107,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 107,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 107,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 107,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 107,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 4,
            'color_id' => 133,
            'stylenumber' => 'G530',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Cotton Pocket T-Shirt_Purple',
            'price' => '7.5',
            'image' => 'Cotton_Pocket_T-Shirt_Purple.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Fabric:
            5.3 oz., 100% cotton
            Saftey Pink, Safety Green, Neon Green, Graphite Heather and
            Heather Radiant Orchid are 50/50 Cotton/Polyester
            
            Features:
            
            Seamless double needle 7/8" collar
            Taped neck and shoulders
            Tear-away label
            Single needle left chest pocket
            Double needle pocket, sleeve and bottom hems
            Quarter-turned to eliminate center crease
            Safety Green is Compliant with ANSI / ISEA 107 High Visibility Standards
            Safety Green is 50/50 Blend
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'G5300_char-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '150',
            'frontheight' => '150',
            'frontleft' => '210',
            'fronttop' => '155',
            'rightimage' => 'G5300_char-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '220',
            'backimage' => 'G5300_char-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '198',
            'backtop' => '110',
            'leftimage' => 'G5300_char-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '220',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 108,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 108,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 108,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 108,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 108,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 108,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 4,
            'color_id' => 72,
            'stylenumber' => 'G530',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Cotton Pocket T-Shirt_Red',
            'price' => '7.5',
            'image' => 'Cotton_Pocket_T-Shirt_Red.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Fabric:
            5.3 oz., 100% cotton
            Saftey Pink, Safety Green, Neon Green, Graphite Heather and
            Heather Radiant Orchid are 50/50 Cotton/Polyester
            
            Features:
            
            Seamless double needle 7/8" collar
            Taped neck and shoulders
            Tear-away label
            Single needle left chest pocket
            Double needle pocket, sleeve and bottom hems
            Quarter-turned to eliminate center crease
            Safety Green is Compliant with ANSI / ISEA 107 High Visibility Standards
            Safety Green is 50/50 Blend
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'G5300_char-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '150',
            'frontheight' => '150',
            'frontleft' => '210',
            'fronttop' => '155',
            'rightimage' => 'G5300_char-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '220',
            'backimage' => 'G5300_char-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '198',
            'backtop' => '110',
            'leftimage' => 'G5300_char-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '220',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 109,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 109,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 109,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 109,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 109,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 109,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 4,
            'color_id' => 96,
            'stylenumber' => 'G530',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Cotton Pocket T-Shirt_Royal',
            'price' => '7.5',
            'image' => 'Cotton_Pocket_T-Shirt_Royal.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Fabric:
            5.3 oz., 100% cotton
            Saftey Pink, Safety Green, Neon Green, Graphite Heather and
            Heather Radiant Orchid are 50/50 Cotton/Polyester
            
            Features:
            
            Seamless double needle 7/8" collar
            Taped neck and shoulders
            Tear-away label
            Single needle left chest pocket
            Double needle pocket, sleeve and bottom hems
            Quarter-turned to eliminate center crease
            Safety Green is Compliant with ANSI / ISEA 107 High Visibility Standards
            Safety Green is 50/50 Blend
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'G5300_char-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '150',
            'frontheight' => '150',
            'frontleft' => '210',
            'fronttop' => '155',
            'rightimage' => 'G5300_char-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '220',
            'backimage' => 'G5300_char-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '198',
            'backtop' => '110',
            'leftimage' => 'G5300_char-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '220',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 110,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 110,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 110,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 110,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 110,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 110,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 4,
            'color_id' => 49,
            'stylenumber' => 'G530',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Cotton Pocket T-Shirt_Safety Green',
            'price' => '7.5',
            'image' => 'Cotton_Pocket_T-Shirt_Safety_Green.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Fabric:
            5.3 oz., 100% cotton
            Saftey Pink, Safety Green, Neon Green, Graphite Heather and
            Heather Radiant Orchid are 50/50 Cotton/Polyester
            
            Features:
            
            Seamless double needle 7/8" collar
            Taped neck and shoulders
            Tear-away label
            Single needle left chest pocket
            Double needle pocket, sleeve and bottom hems
            Quarter-turned to eliminate center crease
            Safety Green is Compliant with ANSI / ISEA 107 High Visibility Standards
            Safety Green is 50/50 Blend
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'G5300_char-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '150',
            'frontheight' => '150',
            'frontleft' => '210',
            'fronttop' => '155',
            'rightimage' => 'G5300_char-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '220',
            'backimage' => 'G5300_char-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '198',
            'backtop' => '110',
            'leftimage' => 'G5300_char-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '220',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 111,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 111,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 111,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 111,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 111,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 111,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 4,
            'color_id' => 86,
            'stylenumber' => 'G530',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Cotton Pocket T-Shirt_Sapphire',
            'price' => '7.5',
            'image' => 'Cotton_Pocket_T-Shirt_Sapphire.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Fabric:
            5.3 oz., 100% cotton
            Saftey Pink, Safety Green, Neon Green, Graphite Heather and
            Heather Radiant Orchid are 50/50 Cotton/Polyester
            
            Features:
            
            Seamless double needle 7/8" collar
            Taped neck and shoulders
            Tear-away label
            Single needle left chest pocket
            Double needle pocket, sleeve and bottom hems
            Quarter-turned to eliminate center crease
            Safety Green is Compliant with ANSI / ISEA 107 High Visibility Standards
            Safety Green is 50/50 Blend
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'G5300_char-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '150',
            'frontheight' => '150',
            'frontleft' => '210',
            'fronttop' => '155',
            'rightimage' => 'G5300_char-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '220',
            'backimage' => 'G5300_char-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '198',
            'backtop' => '110',
            'leftimage' => 'G5300_char-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '220',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 112,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 112,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 112,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 112,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 112,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 112,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 4,
            'color_id' => 6,
            'stylenumber' => 'G530',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Cotton Pocket T-Shirt_White',
            'price' => '7.5',
            'image' => 'Cotton_Pocket_T-Shirt_White.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Fabric:
            5.3 oz., 100% cotton
            Saftey Pink, Safety Green, Neon Green, Graphite Heather and
            Heather Radiant Orchid are 50/50 Cotton/Polyester
            
            Features:
            
            Seamless double needle 7/8" collar
            Taped neck and shoulders
            Tear-away label
            Single needle left chest pocket
            Double needle pocket, sleeve and bottom hems
            Quarter-turned to eliminate center crease
            Safety Green is Compliant with ANSI / ISEA 107 High Visibility Standards
            Safety Green is 50/50 Blend
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest from armhole to armhole
            
            ',
            'frontimage' => 'G5300_char-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '150',
            'frontheight' => '150',
            'frontleft' => '210',
            'fronttop' => '155',
            'rightimage' => 'G5300_char-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '220',
            'backimage' => 'G5300_char-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '198',
            'backtop' => '110',
            'leftimage' => 'G5300_char-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '220',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '7.5',
            '_ADULTWHITE' => '6.5',
            '_2xl' => '9.5',
            '_2xlWHITE' => '9',
            '_3xl' => '10.5',
            '_3xlWHITE' => '10',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 113,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 113,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 113,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 113,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 113,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 113,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 9,
            'color_id' => 5,
            'stylenumber' => 'RS3301',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Toddler Cotton Jersey T-Shirt_Black',
            'price' => '3',
            'image' => 'Toddler_Cotton_Jersey_T-Shirt_Black.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '
            Toddler Cotton Jersey T-shirt
            
            Features:
            
            100% cotton jersey
            
            ribbed crew neck
            
            taped shoulder-to-shoulder
            
            double-needle hemmed sleeves and bottom
            
            CPSIA compliant- tracking label in sideseam
            
            White is sewn with 100% cotton thread
            
            Ash is 99% cotton, 1% polyester; Heather is 90% cotton, 10% polyester
            
            
            
            More color options will be added online soon.� In the mean time, you may reach us via phone or email for more color availability.
            
            ',
            'brand' => 'Rabbit_Skins',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'rs3301_white-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '350',
            'frontheight' => '420',
            'frontleft' => '198',
            'fronttop' => '175',
            'rightimage' => 'blank.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '0',
            'rightheight' => '0',
            'rightleft' => '0',
            'righttop' => '0',
            'backimage' => 'rs3301_white-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '420',
            'backleft' => '196',
            'backtop' => '165',
            'leftimage' => 'blank.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '0',
            'leftheight' => '0',
            'leftleft' => '0',
            'lefttop' => '0',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '3',
            '_TODDLERWHITE' => '2.5',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 114,
            'size_id' => 8,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 114,
            'size_id' => 9,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 114,
            'size_id' => 10,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 9,
            'color_id' => 6,
            'stylenumber' => 'RS3301',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Toddler Cotton Jersey T-Shirt_White',
            'price' => '3',
            'image' => 'Toddler_Cotton_Jersey_T-Shirt_White.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => '
            Toddler Cotton Jersey T-shirt
            
            Features:
            
            100% cotton jersey
            
            ribbed crew neck
            
            taped shoulder-to-shoulder
            
            double-needle hemmed sleeves and bottom
            
            CPSIA compliant- tracking label in sideseam
            
            White is sewn with 100% cotton thread
            
            Ash is 99% cotton, 1% polyester; Heather is 90% cotton, 10% polyester
            
            
            
            More color options will be added online soon.� In the mean time, you may reach us via phone or email for more color availability.
            
            ',
            'brand' => 'Rabbit_Skins',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'rs3301_white-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '350',
            'frontheight' => '420',
            'frontleft' => '198',
            'fronttop' => '175',
            'rightimage' => 'blank.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '0',
            'rightheight' => '0',
            'rightleft' => '0',
            'righttop' => '0',
            'backimage' => 'rs3301_white-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '420',
            'backleft' => '196',
            'backtop' => '165',
            'leftimage' => 'blank.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '0',
            'leftheight' => '0',
            'leftleft' => '0',
            'lefttop' => '0',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '3',
            '_TODDLERWHITE' => '2.5',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 115,
            'size_id' => 8,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 115,
            'size_id' => 9,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 115,
            'size_id' => 10,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 10,
            'color_id' => 5,
            'stylenumber' => 'G500b-200b',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Youth Cotton T-Shirt_Black',
            'price' => '3.75',
            'image' => 'Youth_Cotton_T-Shirt_Black.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => 'Youth Cotton T-Shirt
            
            
            Features:
            
            100% preshrunk cotton
            
            seamless rib at neck
            
            taped shoulder-to-shoulder
            
            double-needle stitching throughout
            
            Ash Grey is 99/1; Sport Grey is 90/1
            
            Dark Heather, Safety Green, Safety Orange & Safety Pink are 50% cotton. 50% poly
            
            
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500b_white-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '350',
            'frontheight' => '420',
            'frontleft' => '198',
            'fronttop' => '180',
            'rightimage' => 'blank-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '0',
            'rightheight' => '0',
            'rightleft' => '0',
            'righttop' => '0',
            'backimage' => 'G500b_white-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '420',
            'backleft' => '195',
            'backtop' => '170',
            'leftimage' => 'blank-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '0',
            'leftheight' => '0',
            'leftleft' => '0',
            'lefttop' => '0',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.75',
            '_YOUTHWHITE' => '3.5',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 116,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 116,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 116,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 116,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 116,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 10,
            'color_id' => 6,
            'stylenumber' => 'G500b-200b',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Youth Cotton T-Shirt_White',
            'price' => '3.75',
            'image' => 'Youth_Cotton_T-Shirt_White.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => 'Youth Cotton T-Shirt
            
            
            Features:
            
            100% preshrunk cotton
            
            seamless rib at neck
            
            taped shoulder-to-shoulder
            
            double-needle stitching throughout
            
            Ash Grey is 99/1; Sport Grey is 90/1
            
            Dark Heather, Safety Green, Safety Orange & Safety Pink are 50% cotton. 50% poly
            
            
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'G500b_white-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '350',
            'frontheight' => '420',
            'frontleft' => '198',
            'fronttop' => '180',
            'rightimage' => 'blank-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '0',
            'rightheight' => '0',
            'rightleft' => '0',
            'righttop' => '0',
            'backimage' => 'G500b_white-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '420',
            'backleft' => '195',
            'backtop' => '170',
            'leftimage' => 'blank-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '0',
            'leftheight' => '0',
            'leftleft' => '0',
            'lefttop' => '0',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.75',
            '_YOUTHWHITE' => '3.5',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 117,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 117,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 117,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 117,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 117,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 11,
            'color_id' => 5,
            'stylenumber' => 'RS3401',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Infant Cotton T-shirt_Black',
            'price' => '3',
            'image' => 'Infant_Cotton_T-shirt_Black.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => 'Infant Cotton T-Shirt
            
            
            Features:
            
            100% cotton jersey
            
            ribbed crew neck
            
            taped shoulder-to-shoulder
            
            double-needle hemmed sleeves and bottom
            
            CPSIA compliant- tracking label in sideseam
            
            White is sewn with 100% cotton thread
            
            Ash is 99% cotton, 1% polyester; Heather is 90% cotton, 10% poly
            
            
            
            
            
            ',
            'brand' => 'Rabbit_Skins',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'rs3301_white-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '350',
            'frontheight' => '420',
            'frontleft' => '195',
            'fronttop' => '170',
            'rightimage' => 'blank-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '0',
            'rightheight' => '0',
            'rightleft' => '0',
            'righttop' => '0',
            'backimage' => 'rs3301_white-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '420',
            'backleft' => '195',
            'backtop' => '170',
            'leftimage' => 'blank-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '0',
            'leftheight' => '0',
            'leftleft' => '0',
            'lefttop' => '0',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '3',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 118,
            'size_id' => 5,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 118,
            'size_id' => 6,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 118,
            'size_id' => 7,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 11,
            'color_id' => 6,
            'stylenumber' => 'RS3401',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Infant Cotton T-shirt_White',
            'price' => '3',
            'image' => 'Infant_Cotton_T-shirt_White.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => 'Infant Cotton T-Shirt
            
            
            Features:
            
            100% cotton jersey
            
            ribbed crew neck
            
            taped shoulder-to-shoulder
            
            double-needle hemmed sleeves and bottom
            
            CPSIA compliant- tracking label in sideseam
            
            White is sewn with 100% cotton thread
            
            Ash is 99% cotton, 1% polyester; Heather is 90% cotton, 10% poly
            
            
            
            
            
            ',
            'brand' => 'Rabbit_Skins',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'rs3301_white-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '350',
            'frontheight' => '420',
            'frontleft' => '195',
            'fronttop' => '170',
            'rightimage' => 'blank-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '0',
            'rightheight' => '0',
            'rightleft' => '0',
            'righttop' => '0',
            'backimage' => 'rs3301_white-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '420',
            'backleft' => '195',
            'backtop' => '170',
            'leftimage' => 'blank-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '0',
            'leftheight' => '0',
            'leftleft' => '0',
            'lefttop' => '0',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '3',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 119,
            'size_id' => 5,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 119,
            'size_id' => 6,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 119,
            'size_id' => 7,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 12,
            'color_id' => 5,
            'stylenumber' => 'A980',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Lightweight T-Shirt_Black',
            'price' => '4.5',
            'image' => 'Lightweight_T-Shirt_Black.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => 'Light Weight T-Shirt
            
            
            Features:
            
            4.5 oz., preshrunk 100% combed ringspun cotton; 30 singles
            
            Seamed collar
            
            Shoulder-to shoulder tape; features a TearAway label
            
            Tubular construction; semi-fitted
            
            Double-needle sleeve and bottom hem; Oeko-Tex� Standard 100 Certified
            
            Heather Grey is 90% cotton, 10% polyester
            
            Heather colors and Neon colors are 65% poly/35% cotton
            
            ',
            'brand' => 'Anvil',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'a980-royalblue-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'a980-royalblue-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '170',
            'righttop' => '300',
            'backimage' => 'a980-royalblue-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '310',
            'backheight' => '413',
            'backleft' => '215',
            'backtop' => '110',
            'leftimage' => 'a980-royalblue-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '290',
            'lefttop' => '300',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '4.5',
            '_ADULTWHITE' => '4',
            '_2xl' => '7',
            '_2xlWHITE' => '6.5',
            '_3xl' => '8',
            '_3xlWHITE' => '7.5',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 120,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 120,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 120,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 120,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 120,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 120,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 12,
            'color_id' => 139,
            'stylenumber' => 'A980',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Lightweight T-Shirt_Charcoal',
            'price' => '4.5',
            'image' => 'Lightweight_T-Shirt_Charcoal.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Light Weight T-Shirt
            
            
            Features:
            
            4.5 oz., preshrunk 100% combed ringspun cotton; 30 singles
            
            Seamed collar
            
            Shoulder-to shoulder tape; features a TearAway label
            
            Tubular construction; semi-fitted
            
            Double-needle sleeve and bottom hem; Oeko-Tex� Standard 100 Certified
            
            Heather Grey is 90% cotton, 10% polyester
            
            Heather colors and Neon colors are 65% poly/35% cotton
            
            ',
            'brand' => 'Anvil',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'a980-royalblue-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'a980-royalblue-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '170',
            'righttop' => '300',
            'backimage' => 'a980-royalblue-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '310',
            'backheight' => '413',
            'backleft' => '215',
            'backtop' => '110',
            'leftimage' => 'a980-royalblue-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '290',
            'lefttop' => '300',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '4.5',
            '_ADULTWHITE' => '4',
            '_2xl' => '7',
            '_2xlWHITE' => '6.5',
            '_3xl' => '8',
            '_3xlWHITE' => '7.5',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 121,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 121,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 121,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 121,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 121,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 121,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 12,
            'color_id' => 123,
            'stylenumber' => 'A980',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Lightweight T-Shirt_Forest Green',
            'price' => '4.5',
            'image' => 'Lightweight_T-Shirt_Forest_Green.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Light Weight T-Shirt
            
            
            Features:
            
            4.5 oz., preshrunk 100% combed ringspun cotton; 30 singles
            
            Seamed collar
            
            Shoulder-to shoulder tape; features a TearAway label
            
            Tubular construction; semi-fitted
            
            Double-needle sleeve and bottom hem; Oeko-Tex� Standard 100 Certified
            
            Heather Grey is 90% cotton, 10% polyester
            
            Heather colors and Neon colors are 65% poly/35% cotton
            
            ',
            'brand' => 'Anvil',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'a980-royalblue-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'a980-royalblue-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '170',
            'righttop' => '300',
            'backimage' => 'a980-royalblue-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '310',
            'backheight' => '413',
            'backleft' => '215',
            'backtop' => '110',
            'leftimage' => 'a980-royalblue-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '290',
            'lefttop' => '300',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '4.5',
            '_ADULTWHITE' => '4',
            '_2xl' => '7',
            '_2xlWHITE' => '6.5',
            '_3xl' => '8',
            '_3xlWHITE' => '7.5',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 122,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 122,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 122,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 122,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 122,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 122,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 12,
            'color_id' => 116,
            'stylenumber' => 'A980',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Lightweight T-Shirt_Kelly Green',
            'price' => '4.5',
            'image' => 'Lightweight_T-Shirt_Kelly_Green.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Light Weight T-Shirt
            
            
            Features:
            
            4.5 oz., preshrunk 100% combed ringspun cotton; 30 singles
            
            Seamed collar
            
            Shoulder-to shoulder tape; features a TearAway label
            
            Tubular construction; semi-fitted
            
            Double-needle sleeve and bottom hem; Oeko-Tex� Standard 100 Certified
            
            Heather Grey is 90% cotton, 10% polyester
            
            Heather colors and Neon colors are 65% poly/35% cotton
            
            ',
            'brand' => 'Anvil',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'a980-royalblue-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'a980-royalblue-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '170',
            'righttop' => '300',
            'backimage' => 'a980-royalblue-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '310',
            'backheight' => '413',
            'backleft' => '215',
            'backtop' => '110',
            'leftimage' => 'a980-royalblue-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '290',
            'lefttop' => '300',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '4.5',
            '_ADULTWHITE' => '4',
            '_2xl' => '7',
            '_2xlWHITE' => '6.5',
            '_3xl' => '8',
            '_3xlWHITE' => '7.5',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 123,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 123,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 123,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 123,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 123,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 123,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 12,
            'color_id' => 105,
            'stylenumber' => 'A980',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Lightweight T-Shirt_Navy',
            'price' => '4.5',
            'image' => 'Lightweight_T-Shirt_Navy.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => 'Light Weight T-Shirt
            
            
            Features:
            
            4.5 oz., preshrunk 100% combed ringspun cotton; 30 singles
            
            Seamed collar
            
            Shoulder-to shoulder tape; features a TearAway label
            
            Tubular construction; semi-fitted
            
            Double-needle sleeve and bottom hem; Oeko-Tex� Standard 100 Certified
            
            Heather Grey is 90% cotton, 10% polyester
            
            Heather colors and Neon colors are 65% poly/35% cotton
            
            ',
            'brand' => 'Anvil',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'a980-royalblue-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'a980-royalblue-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '170',
            'righttop' => '300',
            'backimage' => 'a980-royalblue-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '310',
            'backheight' => '413',
            'backleft' => '215',
            'backtop' => '110',
            'leftimage' => 'a980-royalblue-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '290',
            'lefttop' => '300',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '4.5',
            '_ADULTWHITE' => '4',
            '_2xl' => '7',
            '_2xlWHITE' => '6.5',
            '_3xl' => '8',
            '_3xlWHITE' => '7.5',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 124,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 124,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 124,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 124,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 124,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 124,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 12,
            'color_id' => 107,
            'stylenumber' => 'A980',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Lightweight T-Shirt_Neon Green',
            'price' => '4.5',
            'image' => 'Lightweight_T-Shirt_Neon_Green.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Light Weight T-Shirt
            
            
            Features:
            
            4.5 oz., preshrunk 100% combed ringspun cotton; 30 singles
            
            Seamed collar
            
            Shoulder-to shoulder tape; features a TearAway label
            
            Tubular construction; semi-fitted
            
            Double-needle sleeve and bottom hem; Oeko-Tex� Standard 100 Certified
            
            Heather Grey is 90% cotton, 10% polyester
            
            Heather colors and Neon colors are 65% poly/35% cotton
            
            ',
            'brand' => 'Anvil',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'a980-royalblue-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'a980-royalblue-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '170',
            'righttop' => '300',
            'backimage' => 'a980-royalblue-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '310',
            'backheight' => '413',
            'backleft' => '215',
            'backtop' => '110',
            'leftimage' => 'a980-royalblue-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '290',
            'lefttop' => '300',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '4.5',
            '_ADULTWHITE' => '4',
            '_2xl' => '7',
            '_2xlWHITE' => '6.5',
            '_3xl' => '8',
            '_3xlWHITE' => '7.5',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 125,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 125,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 125,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 125,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 125,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 125,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 12,
            'color_id' => 59,
            'stylenumber' => 'A980',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Lightweight T-Shirt_Orange',
            'price' => '4.5',
            'image' => 'Lightweight_T-Shirt_Orange.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Light Weight T-Shirt
            
            
            Features:
            
            4.5 oz., preshrunk 100% combed ringspun cotton; 30 singles
            
            Seamed collar
            
            Shoulder-to shoulder tape; features a TearAway label
            
            Tubular construction; semi-fitted
            
            Double-needle sleeve and bottom hem; Oeko-Tex� Standard 100 Certified
            
            Heather Grey is 90% cotton, 10% polyester
            
            Heather colors and Neon colors are 65% poly/35% cotton
            
            ',
            'brand' => 'Anvil',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'a980-royalblue-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'a980-royalblue-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '170',
            'righttop' => '300',
            'backimage' => 'a980-royalblue-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '310',
            'backheight' => '413',
            'backleft' => '215',
            'backtop' => '110',
            'leftimage' => 'a980-royalblue-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '290',
            'lefttop' => '300',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '4.5',
            '_ADULTWHITE' => '4',
            '_2xl' => '7',
            '_2xlWHITE' => '6.5',
            '_3xl' => '8',
            '_3xlWHITE' => '7.5',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 126,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 126,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 126,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 126,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 126,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 126,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 12,
            'color_id' => 72,
            'stylenumber' => 'A980',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Lightweight T-Shirt_Red',
            'price' => '4.5',
            'image' => 'Lightweight_T-Shirt_Red.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => 'Light Weight T-Shirt
            
            
            Features:
            
            4.5 oz., preshrunk 100% combed ringspun cotton; 30 singles
            
            Seamed collar
            
            Shoulder-to shoulder tape; features a TearAway label
            
            Tubular construction; semi-fitted
            
            Double-needle sleeve and bottom hem; Oeko-Tex� Standard 100 Certified
            
            Heather Grey is 90% cotton, 10% polyester
            
            Heather colors and Neon colors are 65% poly/35% cotton
            
            ',
            'brand' => 'Anvil',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'a980-royalblue-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'a980-royalblue-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '170',
            'righttop' => '300',
            'backimage' => 'a980-royalblue-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '310',
            'backheight' => '413',
            'backleft' => '215',
            'backtop' => '110',
            'leftimage' => 'a980-royalblue-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '290',
            'lefttop' => '300',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '4.5',
            '_ADULTWHITE' => '4',
            '_2xl' => '7',
            '_2xlWHITE' => '6.5',
            '_3xl' => '8',
            '_3xlWHITE' => '7.5',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 127,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 127,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 127,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 127,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 127,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 127,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 12,
            'color_id' => 96,
            'stylenumber' => 'A980',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Lightweight T-Shirt_Royal',
            'price' => '4.5',
            'image' => 'Lightweight_T-Shirt_Royal.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => 'Light Weight T-Shirt
            
            
            Features:
            
            4.5 oz., preshrunk 100% combed ringspun cotton; 30 singles
            
            Seamed collar
            
            Shoulder-to shoulder tape; features a TearAway label
            
            Tubular construction; semi-fitted
            
            Double-needle sleeve and bottom hem; Oeko-Tex� Standard 100 Certified
            
            Heather Grey is 90% cotton, 10% polyester
            
            Heather colors and Neon colors are 65% poly/35% cotton
            
            ',
            'brand' => 'Anvil',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'a980-royalblue-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'a980-royalblue-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '170',
            'righttop' => '300',
            'backimage' => 'a980-royalblue-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '310',
            'backheight' => '413',
            'backleft' => '215',
            'backtop' => '110',
            'leftimage' => 'a980-royalblue-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '290',
            'lefttop' => '300',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '4.5',
            '_ADULTWHITE' => '4',
            '_2xl' => '7',
            '_2xlWHITE' => '6.5',
            '_3xl' => '8',
            '_3xlWHITE' => '7.5',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 128,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 128,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 128,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 128,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 128,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 128,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 12,
            'color_id' => 6,
            'stylenumber' => 'A980',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Lightweight T-Shirt_White',
            'price' => '4.5',
            'image' => 'Lightweight_T-Shirt_White.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => 'Light Weight T-Shirt
            
            
            Features:
            
            4.5 oz., preshrunk 100% combed ringspun cotton; 30 singles
            
            Seamed collar
            
            Shoulder-to shoulder tape; features a TearAway label
            
            Tubular construction; semi-fitted
            
            Double-needle sleeve and bottom hem; Oeko-Tex� Standard 100 Certified
            
            Heather Grey is 90% cotton, 10% polyester
            
            Heather colors and Neon colors are 65% poly/35% cotton
            
            ',
            'brand' => 'Anvil',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'a980-royalblue-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '1',
            'frontguidelinesleftchest' => '1',
            'frontwidth' => '350',
            'frontheight' => '467',
            'frontleft' => '198',
            'fronttop' => '150',
            'rightimage' => 'a980-royalblue-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '1',
            'rightguidelinesleftchest' => '1',
            'rightwidth' => '275',
            'rightheight' => '275',
            'rightleft' => '170',
            'righttop' => '300',
            'backimage' => 'a980-royalblue-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '1',
            'backguidelinesleftchest' => '1',
            'backwidth' => '310',
            'backheight' => '413',
            'backleft' => '215',
            'backtop' => '110',
            'leftimage' => 'a980-royalblue-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '1',
            'leftguidelinesleftchest' => '1',
            'leftwidth' => '275',
            'leftheight' => '275',
            'leftleft' => '290',
            'lefttop' => '300',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '4.5',
            '_ADULTWHITE' => '4',
            '_2xl' => '7',
            '_2xlWHITE' => '6.5',
            '_3xl' => '8',
            '_3xlWHITE' => '7.5',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 129,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 129,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 129,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 129,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 129,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 129,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 13,
            'color_id' => 5,
            'stylenumber' => 'RS4400',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Infant Bodysuit Onesie_Black',
            'price' => '3',
            'image' => 'Infant_Bodysuit_Onesie_Black.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => 'Infant Bodysuit Onesie
            This onesie is an�Infant Lap Shoulder Creeper made of 100% combed ringspun cotton for a more comfortable feeling.
            
            Features:
            
            5.0 oz.. 100% combed ringspun cotton 1x1 baby rib (Heather is 88/12)
            
            Flatlock seams
            
            Double-needle ribbed binding on neck, shoulders, sleeves and leg opening
            
            Reinforced three snap closure
            
            White is sewn with 100% cotton thread for easy garment dyeing
            
            EasyTear� labels for additional comfort and ability to brand as your own
            
            CPSIA compliant tracking label in side seam
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'rs4400-white-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '360',
            'frontleft' => '220',
            'fronttop' => '160',
            'rightimage' => 'blank-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '200',
            'righttop' => '400',
            'backimage' => 'rs4400-white-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '300',
            'backheight' => '360',
            'backleft' => '225',
            'backtop' => '150',
            'leftimage' => 'blank-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '0',
            'leftheight' => '0',
            'leftleft' => '0',
            'lefttop' => '0',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 130,
            'size_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 130,
            'size_id' => 4,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 130,
            'size_id' => 5,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 130,
            'size_id' => 6,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 130,
            'size_id' => 7,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 13,
            'color_id' => 72,
            'stylenumber' => 'RS4400',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Infant Bodysuit Onesie_Red',
            'price' => '3',
            'image' => 'Infant_Bodysuit_Onesie_Red.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => 'Infant Bodysuit Onesie
            This onesie is an�Infant Lap Shoulder Creeper made of 100% combed ringspun cotton for a more comfortable feeling.
            
            Features:
            
            5.0 oz.. 100% combed ringspun cotton 1x1 baby rib (Heather is 88/12)
            
            Flatlock seams
            
            Double-needle ribbed binding on neck, shoulders, sleeves and leg opening
            
            Reinforced three snap closure
            
            White is sewn with 100% cotton thread for easy garment dyeing
            
            EasyTear� labels for additional comfort and ability to brand as your own
            
            CPSIA compliant tracking label in side seam
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'rs4400-white-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '360',
            'frontleft' => '220',
            'fronttop' => '160',
            'rightimage' => 'blank-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '200',
            'righttop' => '400',
            'backimage' => 'rs4400-white-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '300',
            'backheight' => '360',
            'backleft' => '225',
            'backtop' => '150',
            'leftimage' => 'blank-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '0',
            'leftheight' => '0',
            'leftleft' => '0',
            'lefttop' => '0',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 131,
            'size_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 131,
            'size_id' => 4,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 131,
            'size_id' => 5,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 131,
            'size_id' => 6,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 131,
            'size_id' => 7,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 13,
            'color_id' => 96,
            'stylenumber' => 'RS4400',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Infant Bodysuit Onesie_Royal',
            'price' => '3',
            'image' => 'Infant_Bodysuit_Onesie_Royal.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => 'Infant Bodysuit Onesie
            This onesie is an�Infant Lap Shoulder Creeper made of 100% combed ringspun cotton for a more comfortable feeling.
            
            Features:
            
            5.0 oz.. 100% combed ringspun cotton 1x1 baby rib (Heather is 88/12)
            
            Flatlock seams
            
            Double-needle ribbed binding on neck, shoulders, sleeves and leg opening
            
            Reinforced three snap closure
            
            White is sewn with 100% cotton thread for easy garment dyeing
            
            EasyTear� labels for additional comfort and ability to brand as your own
            
            CPSIA compliant tracking label in side seam
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'rs4400-white-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '360',
            'frontleft' => '220',
            'fronttop' => '160',
            'rightimage' => 'blank-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '200',
            'righttop' => '400',
            'backimage' => 'rs4400-white-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '300',
            'backheight' => '360',
            'backleft' => '225',
            'backtop' => '150',
            'leftimage' => 'blank-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '0',
            'leftheight' => '0',
            'leftleft' => '0',
            'lefttop' => '0',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 132,
            'size_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 132,
            'size_id' => 4,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 132,
            'size_id' => 5,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 132,
            'size_id' => 6,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 132,
            'size_id' => 7,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 13,
            'color_id' => 6,
            'stylenumber' => 'RS4400',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Infant Bodysuit Onesie_White',
            'price' => '3',
            'image' => 'Infant_Bodysuit_Onesie_White.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => 'Infant Bodysuit Onesie
            This onesie is an�Infant Lap Shoulder Creeper made of 100% combed ringspun cotton for a more comfortable feeling.
            
            Features:
            
            5.0 oz.. 100% combed ringspun cotton 1x1 baby rib (Heather is 88/12)
            
            Flatlock seams
            
            Double-needle ribbed binding on neck, shoulders, sleeves and leg opening
            
            Reinforced three snap closure
            
            White is sewn with 100% cotton thread for easy garment dyeing
            
            EasyTear� labels for additional comfort and ability to brand as your own
            
            CPSIA compliant tracking label in side seam
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'rs4400-white-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '360',
            'frontleft' => '220',
            'fronttop' => '160',
            'rightimage' => 'blank-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '200',
            'righttop' => '400',
            'backimage' => 'rs4400-white-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '300',
            'backheight' => '360',
            'backleft' => '225',
            'backtop' => '150',
            'leftimage' => 'blank-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '0',
            'leftheight' => '0',
            'leftleft' => '0',
            'lefttop' => '0',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 133,
            'size_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 133,
            'size_id' => 4,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 133,
            'size_id' => 5,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 133,
            'size_id' => 6,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 133,
            'size_id' => 7,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 13,
            'color_id' => 87,
            'stylenumber' => 'RS4400',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Infant Bodysuit Onesie_Turquoise',
            'price' => '3',
            'image' => 'Infant_Bodysuit_Onesie_Turquoise.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => 'Infant Bodysuit Onesie
            This onesie is an�Infant Lap Shoulder Creeper made of 100% combed ringspun cotton for a more comfortable feeling.
            
            Features:
            
            5.0 oz.. 100% combed ringspun cotton 1x1 baby rib (Heather is 88/12)
            
            Flatlock seams
            
            Double-needle ribbed binding on neck, shoulders, sleeves and leg opening
            
            Reinforced three snap closure
            
            White is sewn with 100% cotton thread for easy garment dyeing
            
            EasyTear� labels for additional comfort and ability to brand as your own
            
            CPSIA compliant tracking label in side seam
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'rs4400-white-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '360',
            'frontleft' => '220',
            'fronttop' => '160',
            'rightimage' => 'blank-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '200',
            'righttop' => '400',
            'backimage' => 'rs4400-white-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '300',
            'backheight' => '360',
            'backleft' => '225',
            'backtop' => '150',
            'leftimage' => 'blank-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '0',
            'leftheight' => '0',
            'leftleft' => '0',
            'lefttop' => '0',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 134,
            'size_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 134,
            'size_id' => 4,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 134,
            'size_id' => 5,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 134,
            'size_id' => 6,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 134,
            'size_id' => 7,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 13,
            'color_id' => 48,
            'stylenumber' => 'RS4400',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Infant Bodysuit Onesie_Yellow',
            'price' => '3',
            'image' => 'Infant_Bodysuit_Onesie_Yellow.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => 'Infant Bodysuit Onesie
            This onesie is an�Infant Lap Shoulder Creeper made of 100% combed ringspun cotton for a more comfortable feeling.
            
            Features:
            
            5.0 oz.. 100% combed ringspun cotton 1x1 baby rib (Heather is 88/12)
            
            Flatlock seams
            
            Double-needle ribbed binding on neck, shoulders, sleeves and leg opening
            
            Reinforced three snap closure
            
            White is sewn with 100% cotton thread for easy garment dyeing
            
            EasyTear� labels for additional comfort and ability to brand as your own
            
            CPSIA compliant tracking label in side seam
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'rs4400-white-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '300',
            'frontheight' => '360',
            'frontleft' => '220',
            'fronttop' => '160',
            'rightimage' => 'blank-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '250',
            'rightheight' => '250',
            'rightleft' => '200',
            'righttop' => '400',
            'backimage' => 'rs4400-white-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '300',
            'backheight' => '360',
            'backleft' => '225',
            'backtop' => '150',
            'leftimage' => 'blank-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '0',
            'leftheight' => '0',
            'leftleft' => '0',
            'lefttop' => '0',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 135,
            'size_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 135,
            'size_id' => 4,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 135,
            'size_id' => 5,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 135,
            'size_id' => 6,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 135,
            'size_id' => 7,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 108,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Apple',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Apple.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 136,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 136,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 136,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 136,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 136,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 5,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Black',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Black.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 137,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 137,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 137,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 137,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 137,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 40,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Butter',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Butter.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 138,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 138,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 138,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 138,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 138,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 84,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Carolina Blue',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Carolina_Blue.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 139,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 139,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 139,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 139,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 139,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 139,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Charcoal',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Charcoal.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 140,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 140,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 140,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 140,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 140,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 82,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Chill',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Chill.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 141,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 141,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 141,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 141,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 141,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 92,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Colbalt',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Colbalt.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 142,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 142,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 142,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 142,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 142,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 123,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Forest Green',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Forest_Green.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 143,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 143,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 143,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 143,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 143,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 6,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_White',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_White.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 144,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 144,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 144,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 144,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 144,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 77,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Garnet',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Garnet.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 145,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 145,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 145,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 145,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 145,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 53,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Gold',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Gold.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 146,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 146,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 146,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 146,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 146,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 69,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Hot Pink',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Hot_Pink.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 147,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 147,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 147,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 147,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 147,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 103,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Indigo Blue',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Indigo_Blue.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 148,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 148,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 148,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 148,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 148,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 116,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Kelly Green',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Kelly_Green.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 149,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 149,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 149,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 149,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 149,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 112,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Key Lime',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Key_Lime.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 150,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 150,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 150,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 150,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 150,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 80,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Light Blue',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Light_Blue.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 151,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 151,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 151,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 151,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 151,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 78,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Maroon',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Maroon.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 152,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 152,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 152,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 152,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 152,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 124,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Military Green',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Military_Green.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 153,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 153,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 153,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 153,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 153,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 105,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Navy',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Navy.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 154,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 154,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 154,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 154,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 154,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 59,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Orange',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Orange.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 155,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 155,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 155,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 155,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 155,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 133,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Purple',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Purple.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 156,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 156,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 156,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 156,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 156,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 72,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Red',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Red.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 157,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 157,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 157,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 157,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 157,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 96,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Royal',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Royal.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 158,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 158,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 158,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 158,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 158,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 96,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Royal',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Royal.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 159,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 159,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 159,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 159,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 159,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 135,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Silver Grey',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Silver_Grey.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 160,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 160,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 160,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 160,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 160,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 14,
            'color_id' => 48,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt_Yellow',
            'price' => '5',
            'image' => 'Fine_Jersey_T-Shirt_Yellow.png',
            'min_quantity' => '6',
            'status' => 'Enable',
            'description' => 'Mens Fine Jersey T-Shirt
            
            
            Features:
            
            4.5 oz., 100% combed ringspun cotton fine jersey
            
            double-needle hemmed sleeves and bottom
            
            White is sewn with 100% cotton thread
            
            Heather is 93% cotton, 7% polyester
            
            ribbed collar
            
            taped shoulder-to-shoulder
            
            
            
            ',
            'brand' => 'Lat',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length:�Measure from shoulder seam at the collar to bottom hem.
            
            Width:��Measure�across chest approximately 1" below the armpit.
            
            ',
            'frontimage' => 'lat6901-chill-front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '0',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '325',
            'frontheight' => '433',
            'frontleft' => '215',
            'fronttop' => '119',
            'rightimage' => 'lat6901-chill-right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '0',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '225',
            'rightheight' => '225',
            'rightleft' => '220',
            'righttop' => '290',
            'backimage' => 'lat6901-chill-back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '0',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '325',
            'backheight' => '433',
            'backleft' => '205',
            'backtop' => '110',
            'leftimage' => 'lat6901-chill-left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '0',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '225',
            'leftheight' => '225',
            'leftleft' => '300',
            'lefttop' => '290',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 161,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 161,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 161,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 161,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 161,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 15,
            'color_id' => 5,
            'stylenumber' => 'G185',
            'fabric' => 'Cotton/Poly',
            'visibility' => 'Visible',
            'name' => 'Adult Heavy Blend Hood_Black',
            'price' => '15',
            'image' => 'Adult_Heavy_Blend_Hood_Black.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => 'Adult Heavy Blend 8 oz Hood�
            
            
            Fabric: 50% Cotton, 50% Polyester
            
            All Heather Sport colors are 60% cotton, 40% polyester
            
            
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'G185_charcoal_front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '335',
            'frontheight' => '335',
            'frontleft' => '215',
            'fronttop' => '120',
            'rightimage' => 'G185_charcoal_right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '115',
            'rightheight' => '438',
            'rightleft' => '280',
            'righttop' => '160',
            'backimage' => 'G185_charcoal_back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '205',
            'backtop' => '150',
            'leftimage' => 'G185_charcoal_left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '115',
            'leftheight' => '438',
            'leftleft' => '349',
            'lefttop' => '160',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 162,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 162,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 162,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 162,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 162,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 162,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 162,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 162,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 162,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 162,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 162,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 162,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 162,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => 15,
            'color_id' => 139,
            'stylenumber' => 'G185',
            'fabric' => 'Cotton/Poly',
            'visibility' => 'Visible',
            'name' => 'Adult Heavy Blend Hood_Charcoal',
            'price' => '15',
            'image' => 'Adult_Heavy_Blend_Hood_Charcoal.png',
            'min_quantity' => '1',
            'status' => 'Enable',
            'description' => 'Adult Heavy Blend 8 oz Hood�
            
            
            Fabric: 50% Cotton, 50% Polyester
            
            All Heather Sport colors are 60% cotton, 40% polyester
            
            
            
            
            
            ',
            'brand' => 'Gildan',
            'sizechartimage' => '',
            'sizechartdescription' => '
            Length: Measure from shoulder seam at the collar to bottom hem.
            
            
            
            Width:� Measure across the chest an inch below the armpit
            
            ',
            'frontimage' => 'G185_charcoal_front.jpg',
            'frontenable' => '1',
            'frontguidelineshorizontal' => '1',
            'frontguidelinesvertical' => '1',
            'frontguidelinesyouth' => '1',
            'frontguidelinesadult' => '0',
            'frontguidelinesleftchest' => '0',
            'frontwidth' => '335',
            'frontheight' => '335',
            'frontleft' => '215',
            'fronttop' => '120',
            'rightimage' => 'G185_charcoal_right.jpg',
            'rightenable' => '1',
            'rightguidelineshorizontal' => '1',
            'rightguidelinesvertical' => '1',
            'rightguidelinesyouth' => '1',
            'rightguidelinesadult' => '0',
            'rightguidelinesleftchest' => '0',
            'rightwidth' => '115',
            'rightheight' => '438',
            'rightleft' => '280',
            'righttop' => '160',
            'backimage' => 'G185_charcoal_back.jpg',
            'backenable' => '1',
            'backguidelineshorizontal' => '1',
            'backguidelinesvertical' => '1',
            'backguidelinesyouth' => '1',
            'backguidelinesadult' => '0',
            'backguidelinesleftchest' => '0',
            'backwidth' => '350',
            'backheight' => '467',
            'backleft' => '205',
            'backtop' => '150',
            'leftimage' => 'G185_charcoal_left.jpg',
            'leftenable' => '1',
            'leftguidelineshorizontal' => '1',
            'leftguidelinesvertical' => '1',
            'leftguidelinesyouth' => '1',
            'leftguidelinesadult' => '0',
            'leftguidelinesleftchest' => '0',
            'leftwidth' => '115',
            'leftheight' => '438',
            'leftleft' => '349',
            'lefttop' => '160',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '0',
            '_ADULTWHITE' => '0',
            '_2xl' => '0',
            '_2xlWHITE' => '0',
            '_3xl' => '0',
            '_3xlWHITE' => '0',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('product_size')->insert([
            'product_id' => 163,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 163,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 163,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 163,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 163,
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 163,
            'size_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 163,
            'size_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 163,
            'size_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 163,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 163,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 163,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 163,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 163,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);*/
    }
}
