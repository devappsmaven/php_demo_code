<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        Product::create([
            'parent_id' => NULL,
            'color_id' => NULL,
            'stylenumber' => 'M320',
            'fabric' => '100% Polyester',
            'visibility' => 'Visible',
            'name' => 'Athletic Sport T-shirt',
            'price' => '12.98',
            'image' => 'm320-model01.jpg',
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
            'sizechartimage' => 't-shirt-sizes.gif',
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
            
            
            DB::table('product_categories')->insert([
            'product_id' => 1,
            'category_id' => 10,
            'subcategory_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 1,
            'category_id' => 10,
            'subcategory_id' => 29,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 1,
            'category_id' => 1,
            'subcategory_id' => 2,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 1,
            'category_id' => 9,
            'subcategory_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 1,
            'category_id' => 9,
            'subcategory_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 1,
            'category_id' => 8,
            'subcategory_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 1,
            'category_id' => 7,
            'subcategory_id' => 13,
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
            'parent_id' => NULL,
            'color_id' => NULL,
            'stylenumber' => 'AUG790',
            'fabric' => 'Polyester',
            'visibility' => 'Visible',
            'name' => 'Wicking T-Shirt',
            'price' => '7.5',
            'image' => 'Aug-790-power-royal-front.jpg',
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
            'sizechartimage' => 't-shirt-size-measurment.jpg',
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
            
            
            DB::table('product_categories')->insert([
            'product_id' => 2,
            'category_id' => 10,
            'subcategory_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 2,
            'category_id' => 10,
            'subcategory_id' => 29,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 2,
            'category_id' => 1,
            'subcategory_id' => 2,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 2,
            'category_id' => 9,
            'subcategory_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 2,
            'category_id' => 9,
            'subcategory_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 2,
            'category_id' => 8,
            'subcategory_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 2,
            'category_id' => 7,
            'subcategory_id' => 12,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 2,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 2,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 2,
            'size_id' => 18,
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
            
            
            Product::create([
            'parent_id' => NULL,
            'color_id' => NULL,
            'stylenumber' => 'A1791',
            'fabric' => 'Polyester',
            'visibility' => 'Visible',
            'name' => 'Ladies Wicking T-shirt',
            'price' => '7.5',
            'image' => 'A1790_royal-front.jpg',
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
            
            
            DB::table('product_categories')->insert([
            'product_id' => 3,
            'category_id' => 4,
            'subcategory_id' => 7,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 3,
            'category_id' => 4,
            'subcategory_id' => 8,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 3,
            'category_id' => 1,
            'subcategory_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 3,
            'category_id' => 9,
            'subcategory_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 3,
            'category_id' => 9,
            'subcategory_id' => 20,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 3,
            'category_id' => 9,
            'subcategory_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 3,
            'category_id' => 7,
            'subcategory_id' => 12,
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
            
            
            Product::create([
            'parent_id' => NULL,
            'color_id' => NULL,
            'stylenumber' => 'G530',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Cotton Pocket T-Shirt',
            'price' => '7.5',
            'image' => 'G5300_char-front.jpg',
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
            
            
            DB::table('product_categories')->insert([
            'product_id' => 4,
            'category_id' => 10,
            'subcategory_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 4,
            'category_id' => 9,
            'subcategory_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 4,
            'category_id' => 9,
            'subcategory_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 4,
            'category_id' => 8,
            'subcategory_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 4,
            'category_id' => 7,
            'subcategory_id' => 12,
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
            
            
            Product::create([
            'parent_id' => NULL,
            'color_id' => NULL,
            'stylenumber' => 'G200-G500',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ultra Cotton T-shirt',
            'price' => '4',
            'image' => 'G500_blue-dusk-front.jpg',
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
            
            
            DB::table('product_categories')->insert([
            'product_id' => 5,
            'category_id' => 10,
            'subcategory_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 5,
            'category_id' => 9,
            'subcategory_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 5,
            'category_id' => 9,
            'subcategory_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 5,
            'category_id' => 8,
            'subcategory_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 5,
            'category_id' => 8,
            'subcategory_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 5,
            'category_id' => 7,
            'subcategory_id' => 12,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 5,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 5,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 5,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 5,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 5,
            'size_id' => 19,
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
            
            DB::table('product_size')->insert([
            'product_id' => 5,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => NULL,
            'color_id' => NULL,
            'stylenumber' => 'T214',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ladies Fine Jersey V-Neck',
            'price' => '4',
            'image' => 'T214_fuchsia.jpg',
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
            
            
            DB::table('product_categories')->insert([
            'product_id' => 6,
            'category_id' => 4,
            'subcategory_id' => 7,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 6,
            'category_id' => 4,
            'subcategory_id' => 8,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 6,
            'category_id' => 4,
            'subcategory_id' => 9,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 6,
            'category_id' => 9,
            'subcategory_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 6,
            'category_id' => 9,
            'subcategory_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 6,
            'category_id' => 9,
            'subcategory_id' => 20,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 6,
            'category_id' => 3,
            'subcategory_id' => 6,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 6,
            'category_id' => 8,
            'subcategory_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 6,
            'category_id' => 7,
            'subcategory_id' => 12,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 6,
            'size_id' => 20,
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
            
            
            /*Product::create([
            'parent_id' => NULL,
            'color_id' => NULL,
            'stylenumber' => 'G570',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Dryblend 3/4 Sleeve Raglan T-shirt',
            'price' => '8',
            'image' => 'G5700_red-front.jpg',
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
            
            
            DB::table('product_categories')->insert([
            'product_id' => 7,
            'category_id' => 10,
            'subcategory_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 7,
            'category_id' => 9,
            'subcategory_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 7,
            'category_id' => 3,
            'subcategory_id' => 5,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 7,
            'category_id' => 8,
            'subcategory_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 7,
            'category_id' => 7,
            'subcategory_id' => 13,
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
            
            
            Product::create([
            'parent_id' => NULL,
            'color_id' => NULL,
            'stylenumber' => 'G500L',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Ladies Cotton T-shirt',
            'price' => '5',
            'image' => 'g500l-model2.jpg',
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
            
            
            DB::table('product_categories')->insert([
            'product_id' => 8,
            'category_id' => 4,
            'subcategory_id' => 7,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 8,
            'category_id' => 4,
            'subcategory_id' => 8,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 8,
            'category_id' => 9,
            'subcategory_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 8,
            'category_id' => 9,
            'subcategory_id' => 20,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 8,
            'category_id' => 8,
            'subcategory_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 8,
            'category_id' => 7,
            'subcategory_id' => 12,
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
            'parent_id' => NULL,
            'color_id' => NULL,
            'stylenumber' => 'RS3301',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Toddler Cotton Jersey T-Shirt',
            'price' => '3',
            'image' => 'rs3301_white-front.jpg',
            'min_quantity' => '0',
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
            
            
            DB::table('product_categories')->insert([
            'product_id' => 9,
            'category_id' => 10,
            'subcategory_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 9,
            'category_id' => 12,
            'subcategory_id' => 30,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 9,
            'category_id' => 9,
            'subcategory_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 9,
            'category_id' => 9,
            'subcategory_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 9,
            'category_id' => 9,
            'subcategory_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 9,
            'category_id' => 3,
            'subcategory_id' => 6,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 9,
            'category_id' => 7,
            'subcategory_id' => 12,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 9,
            'size_id' => 8,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 9,
            'size_id' => 9,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 9,
            'size_id' => 10,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => NULL,
            'color_id' => NULL,
            'stylenumber' => 'G500b-200b',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Youth Cotton T-Shirt',
            'price' => '3.75',
            'image' => 'G500b_black-front.jpg',
            'min_quantity' => '0',
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
            
            
            DB::table('product_categories')->insert([
            'product_id' => 10,
            'category_id' => 10,
            'subcategory_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 10,
            'category_id' => 12,
            'subcategory_id' => 30,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 10,
            'category_id' => 9,
            'subcategory_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 10,
            'category_id' => 9,
            'subcategory_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 10,
            'category_id' => 9,
            'subcategory_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 10,
            'category_id' => 3,
            'subcategory_id' => 6,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 10,
            'category_id' => 7,
            'subcategory_id' => 12,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 10,
            'size_id' => 15,
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
            'size_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => NULL,
            'color_id' => NULL,
            'stylenumber' => 'RS3401',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Infant Cotton T-shirt',
            'price' => '3',
            'image' => 'rs3301_white-front.jpg',
            'min_quantity' => '0',
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
            
            
            DB::table('product_categories')->insert([
            'product_id' => 11,
            'category_id' => 10,
            'subcategory_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 11,
            'category_id' => 12,
            'subcategory_id' => 30,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 11,
            'category_id' => 9,
            'subcategory_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 11,
            'category_id' => 9,
            'subcategory_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 11,
            'category_id' => 9,
            'subcategory_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 11,
            'category_id' => 3,
            'subcategory_id' => 6,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 11,
            'category_id' => 7,
            'subcategory_id' => 12,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 11,
            'size_id' => 5,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 11,
            'size_id' => 6,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 11,
            'size_id' => 7,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => NULL,
            'color_id' => NULL,
            'stylenumber' => 'A980',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Lightweight T-Shirt',
            'price' => '4.5',
            'image' => 'a980-royalblue-front.jpg',
            'min_quantity' => '0',
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
            
            
            DB::table('product_categories')->insert([
            'product_id' => 12,
            'category_id' => 10,
            'subcategory_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 12,
            'category_id' => 9,
            'subcategory_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 12,
            'category_id' => 9,
            'subcategory_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 12,
            'category_id' => 3,
            'subcategory_id' => 6,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 12,
            'category_id' => 8,
            'subcategory_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 12,
            'category_id' => 7,
            'subcategory_id' => 12,
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
            
            DB::table('product_size')->insert([
            'product_id' => 12,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 12,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 12,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => NULL,
            'color_id' => NULL,
            'stylenumber' => 'RS4400',
            'fabric' => 'Cotton',
            'visibility' => 'Visible',
            'name' => 'Infant Bodysuit Onesie',
            'price' => '3',
            'image' => 'rs4400-turquoise-front.jpg',
            'min_quantity' => '0',
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
            
            
            DB::table('product_categories')->insert([
            'product_id' => 13,
            'category_id' => 12,
            'subcategory_id' => 30,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 13,
            'category_id' => 9,
            'subcategory_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 13,
            'category_id' => 9,
            'subcategory_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 13,
            'category_id' => 9,
            'subcategory_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 13,
            'category_id' => 7,
            'subcategory_id' => 12,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 13,
            'size_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 13,
            'size_id' => 4,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 13,
            'size_id' => 5,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 13,
            'size_id' => 6,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 13,
            'size_id' => 7,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => NULL,
            'color_id' => NULL,
            'stylenumber' => 'LAT6901',
            'fabric' => 'Ringspun Cotton',
            'visibility' => 'Visible',
            'name' => 'Fine Jersey T-Shirt',
            'price' => '5',
            'image' => 'lat6901-model01.jpg',
            'min_quantity' => '0',
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
            
            
            DB::table('product_categories')->insert([
            'product_id' => 14,
            'category_id' => 10,
            'subcategory_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 14,
            'category_id' => 9,
            'subcategory_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 14,
            'category_id' => 3,
            'subcategory_id' => 6,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 14,
            'category_id' => 8,
            'subcategory_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 14,
            'category_id' => 7,
            'subcategory_id' => 12,
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
            
            DB::table('product_size')->insert([
            'product_id' => 14,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 14,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            Product::create([
            'parent_id' => NULL,
            'color_id' => NULL,
            'stylenumber' => 'G185',
            'fabric' => 'Cotton/Poly',
            'visibility' => 'Visible',
            'name' => 'Adult Heavy Blend Hood',
            'price' => '15',
            'image' => 'G185_black_front.jpg',
            'min_quantity' => '0',
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
            
            
            DB::table('product_categories')->insert([
            'product_id' => 15,
            'category_id' => 10,
            'subcategory_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_categories')->insert([
            'product_id' => 15,
            'category_id' => 3,
            'subcategory_id' => 5,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 15,
            'size_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 15,
            'size_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 15,
            'size_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 15,
            'size_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 15,
            'size_id' => 19,
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
            
            DB::table('product_size')->insert([
            'product_id' => 15,
            'size_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 15,
            'size_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 15,
            'size_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 15,
            'size_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size')->insert([
            'product_id' => 15,
            'size_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('related_products')->insert([
            'product_id' => 1,
            'related_product_id' => 7,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 1,
            'related_product_id' => 5,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 1,
            'related_product_id' => 4,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 1,
            'related_product_id' => 3,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 1,
            'related_product_id' => 2,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('size_charts')->insert([
            'size' => 'S',
            'width' => '21.5',
            'length' => '28',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 1,
            'size_chart_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'M',
            'width' => '23',
            'length' => '29',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 1,
            'size_chart_id' => 2,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'L',
            'width' => '24.5',
            'length' => '30',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 1,
            'size_chart_id' => 3,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'XL',
            'width' => '26',
            'length' => '31',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 1,
            'size_chart_id' => 4,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '2XL',
            'width' => '28',
            'length' => '31.5',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 1,
            'size_chart_id' => 5,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '3XL',
            'width' => '30',
            'length' => '32.5',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 1,
            'size_chart_id' => 6,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '4XL',
            'width' => '32',
            'length' => '33.5',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 1,
            'size_chart_id' => 7,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '1',
            'RANGETO' => '23',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 1,
            'price_shirt_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '24',
            'RANGETO' => '99999',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '11.95',
            '_ADULTWHITE' => '10.5',
            '_2xl' => '13.95',
            '_2xlWHITE' => '13.5',
            '_3xl' => '14.95',
            '_3xlWHITE' => '14.5',
            '_4xl' => '15.95',
            '_4xlWHITE' => '15.5',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 1,
            'price_shirt_id' => 2,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('related_products')->insert([
            'product_id' => 2,
            'related_product_id' => 3,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 2,
            'related_product_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('size_charts')->insert([
            'size' => 'YS',
            'width' => '19 1/2',
            'length' => '22',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 2,
            'size_chart_id' => 8,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'YM',
            'width' => '16',
            'length' => '24',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 2,
            'size_chart_id' => 9,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'YL',
            'width' => '17 1/2',
            'length' => '26',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 2,
            'size_chart_id' => 10,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'S',
            'width' => '18',
            'length' => '28',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 2,
            'size_chart_id' => 11,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'M',
            'width' => '20',
            'length' => '28 3/4',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 2,
            'size_chart_id' => 12,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'L',
            'width' => '22',
            'length' => '29 1/2',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 2,
            'size_chart_id' => 13,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'XL',
            'width' => '24',
            'length' => '30 1/4',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 2,
            'size_chart_id' => 14,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '2XL',
            'width' => '26',
            'length' => '31',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 2,
            'size_chart_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '3XL',
            'width' => '27',
            'length' => '31 3/4',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 2,
            'size_chart_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '1',
            'RANGETO' => '6',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '9.5',
            '_YOUTHWHITE' => '8.5',
            '_ADULT' => '9.5',
            '_ADULTWHITE' => '8.5',
            '_2xl' => '11.5',
            '_2xlWHITE' => '11.25',
            '_3xl' => '12.5',
            '_3xlWHITE' => '12.25',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 2,
            'price_shirt_id' => 3,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '7',
            'RANGETO' => '8',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '8.5',
            '_YOUTHWHITE' => '7.5',
            '_ADULT' => '8.5',
            '_ADULTWHITE' => '7.5',
            '_2xl' => '10.5',
            '_2xlWHITE' => '10.25',
            '_3xl' => '11.5',
            '_3xlWHITE' => '11.25',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 2,
            'price_shirt_id' => 4,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '9',
            'RANGETO' => '9',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '8',
            '_YOUTHWHITE' => '7',
            '_ADULT' => '8',
            '_ADULTWHITE' => '7',
            '_2xl' => '10',
            '_2xlWHITE' => '9.75',
            '_3xl' => '11',
            '_3xlWHITE' => '10.75',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 2,
            'price_shirt_id' => 5,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '9',
            'RANGETO' => '9',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '6.5',
            '_YOUTHWHITE' => '5.5',
            '_ADULT' => '6.5',
            '_ADULTWHITE' => '5.5',
            '_2xl' => '8.5',
            '_2xlWHITE' => '8.25',
            '_3xl' => '9.5',
            '_3xlWHITE' => '9.25',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 2,
            'price_shirt_id' => 6,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '10',
            'RANGETO' => '10',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '5.5',
            '_YOUTHWHITE' => '4.5',
            '_ADULT' => '5.5',
            '_ADULTWHITE' => '4.5',
            '_2xl' => '7.5',
            '_2xlWHITE' => '7.25',
            '_3xl' => '8.5',
            '_3xlWHITE' => '8.25',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 2,
            'price_shirt_id' => 7,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '11',
            'RANGETO' => '11',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '5',
            '_YOUTHWHITE' => '4',
            '_ADULT' => '5',
            '_ADULTWHITE' => '4',
            '_2xl' => '7',
            '_2xlWHITE' => '6.75',
            '_3xl' => '8',
            '_3xlWHITE' => '7.75',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 2,
            'price_shirt_id' => 8,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '12',
            'RANGETO' => '18',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '10',
            '_YOUTHWHITE' => '9',
            '_ADULT' => '10',
            '_ADULTWHITE' => '9',
            '_2xl' => '12',
            '_2xlWHITE' => '11.75',
            '_3xl' => '13',
            '_3xlWHITE' => '12.75',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 2,
            'price_shirt_id' => 9,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '19',
            'RANGETO' => '99999',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '8.5',
            '_YOUTHWHITE' => '7.5',
            '_ADULT' => '8.5',
            '_ADULTWHITE' => '7.5',
            '_2xl' => '10.5',
            '_2xlWHITE' => '10.25',
            '_3xl' => '11.5',
            '_3xlWHITE' => '11.25',
            '_4xl' => '0',
            '_4xlWHITE' => '0',
            '_5xl' => '0',
            '_5xlWHITE' => '0',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 2,
            'price_shirt_id' => 10,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('related_products')->insert([
            'product_id' => 3,
            'related_product_id' => 8,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 3,
            'related_product_id' => 2,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 3,
            'related_product_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('size_charts')->insert([
            'size' => 'S',
            'width' => '14.75"',
            'length' => '20"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 3,
            'size_chart_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'M',
            'width' => '16.25"',
            'length' => '21.75"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 3,
            'size_chart_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'L',
            'width' => '17.75"',
            'length' => '24"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 3,
            'size_chart_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '1',
            'RANGETO' => '99999',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 3,
            'price_shirt_id' => 11,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('related_products')->insert([
            'product_id' => 4,
            'related_product_id' => 7,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 4,
            'related_product_id' => 5,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 4,
            'related_product_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('size_charts')->insert([
            'size' => 'S',
            'width' => '18"',
            'length' => '28"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 4,
            'size_chart_id' => 20,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'M',
            'width' => '20"',
            'length' => '29"
            ',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 4,
            'size_chart_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'L',
            'width' => '22"',
            'length' => '30"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 4,
            'size_chart_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'XL',
            'width' => '24"',
            'length' => '31"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 4,
            'size_chart_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '2XL',
            'width' => '26"',
            'length' => '32"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 4,
            'size_chart_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '3XL',
            'width' => '28"',
            'length' => '33"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 4,
            'size_chart_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '1',
            'RANGETO' => '11',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 4,
            'price_shirt_id' => 12,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '12',
            'RANGETO' => '999999',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '8.5',
            '_ADULTWHITE' => '7.5',
            '_2xl' => '10.5',
            '_2xlWHITE' => '10',
            '_3xl' => '11.5',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 4,
            'price_shirt_id' => 13,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('related_products')->insert([
            'product_id' => 5,
            'related_product_id' => 12,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 5,
            'related_product_id' => 8,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 5,
            'related_product_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 5,
            'related_product_id' => 7,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 5,
            'related_product_id' => 6,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 5,
            'related_product_id' => 4,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 5,
            'related_product_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('size_charts')->insert([
            'size' => 'YXS',
            'width' => '16"',
            'length' => '20.5"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 5,
            'size_chart_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'YS',
            'width' => '17"',
            'length' => '22"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 5,
            'size_chart_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'YM',
            'width' => '18"',
            'length' => '23.5"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 5,
            'size_chart_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'YL',
            'width' => '19"',
            'length' => '25"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 5,
            'size_chart_id' => 29,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'YXL',
            'width' => '20"',
            'length' => '26.5"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 5,
            'size_chart_id' => 30,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'S',
            'width' => '18"',
            'length' => '28"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 5,
            'size_chart_id' => 31,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'M',
            'width' => '20"',
            'length' => '29"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 5,
            'size_chart_id' => 32,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'L',
            'width' => '22"',
            'length' => '30"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 5,
            'size_chart_id' => 33,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'XL',
            'width' => '24"',
            'length' => '31"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 5,
            'size_chart_id' => 34,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '2XL',
            'width' => '26"',
            'length' => '32"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 5,
            'size_chart_id' => 35,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '3XL',
            'width' => '28"',
            'length' => '33"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 5,
            'size_chart_id' => 36,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '4XL',
            'width' => '30"',
            'length' => '34"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 5,
            'size_chart_id' => 37,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '5XL',
            'width' => '32"',
            'length' => '35"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 5,
            'size_chart_id' => 38,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '1',
            'RANGETO' => '75',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.75',
            '_YOUTHWHITE' => '3.1',
            '_ADULT' => '3.75',
            '_ADULTWHITE' => '3.1',
            '_2xl' => '6.25',
            '_2xlWHITE' => '5.5',
            '_3xl' => '7.25',
            '_3xlWHITE' => '7',
            '_4xl' => '7.25',
            '_4xlWHITE' => '7',
            '_5xl' => '7.25',
            '_5xlWHITE' => '7',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 5,
            'price_shirt_id' => 14,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '76',
            'RANGETO' => '999999',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.5',
            '_YOUTHWHITE' => '2.9',
            '_ADULT' => '3.5',
            '_ADULTWHITE' => '2.9',
            '_2xl' => '6',
            '_2xlWHITE' => '5.25',
            '_3xl' => '7',
            '_3xlWHITE' => '6.75',
            '_4xl' => '7',
            '_4xlWHITE' => '6.75',
            '_5xl' => '7',
            '_5xlWHITE' => '6.75',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 5,
            'price_shirt_id' => 15,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('related_products')->insert([
            'product_id' => 6,
            'related_product_id' => 8,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 6,
            'related_product_id' => 5,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('size_charts')->insert([
            'size' => 'XS',
            'width' => '16"',
            'length' => '24.5"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 6,
            'size_chart_id' => 39,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'S',
            'width' => '16.5"',
            'length' => '25"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 6,
            'size_chart_id' => 40,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'M',
            'width' => '17.5"',
            'length' => '26"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 6,
            'size_chart_id' => 41,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'L',
            'width' => '18.5"',
            'length' => '27"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 6,
            'size_chart_id' => 42,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'XL',
            'width' => '19.5"',
            'length' => '28"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 6,
            'size_chart_id' => 43,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '2XL',
            'width' => '20.5"',
            'length' => '29"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 6,
            'size_chart_id' => 44,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '1',
            'RANGETO' => '99999',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '4',
            '_ADULTWHITE' => '3.5',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 6,
            'price_shirt_id' => 16,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('related_products')->insert([
            'product_id' => 7,
            'related_product_id' => 4,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 7,
            'related_product_id' => 5,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 7,
            'related_product_id' => 1,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('size_charts')->insert([
            'size' => 'S',
            'width' => '18"',
            'length' => '28"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 7,
            'size_chart_id' => 45,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'M',
            'width' => '20"',
            'length' => '29"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 7,
            'size_chart_id' => 46,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'L',
            'width' => '22"',
            'length' => '30"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 7,
            'size_chart_id' => 47,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'XL',
            'width' => '24"',
            'length' => '31"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 7,
            'size_chart_id' => 48,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '2XL',
            'width' => '26"',
            'length' => '32"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 7,
            'size_chart_id' => 49,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '3XL',
            'width' => '28"',
            'length' => '33"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 7,
            'size_chart_id' => 50,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '1',
            'RANGETO' => '99999',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 7,
            'price_shirt_id' => 17,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('related_products')->insert([
            'product_id' => 8,
            'related_product_id' => 6,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 8,
            'related_product_id' => 5,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 8,
            'related_product_id' => 3,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('size_charts')->insert([
            'size' => 'S',
            'width' => '17"',
            'length' => '25.5"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 8,
            'size_chart_id' => 51,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'M',
            'width' => '19"',
            'length' => '26"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 8,
            'size_chart_id' => 52,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'L',
            'width' => '21"',
            'length' => '27"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 8,
            'size_chart_id' => 53,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'XL',
            'width' => '23"',
            'length' => '28"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 8,
            'size_chart_id' => 54,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '2XL',
            'width' => '25"',
            'length' => '28.5"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 8,
            'size_chart_id' => 55,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '3XL',
            'width' => '27"',
            'length' => '29"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 8,
            'size_chart_id' => 56,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '1',
            'RANGETO' => '999',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 8,
            'price_shirt_id' => 18,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('related_products')->insert([
            'product_id' => 9,
            'related_product_id' => 13,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 9,
            'related_product_id' => 11,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 9,
            'related_product_id' => 10,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('size_charts')->insert([
            'size' => '2T',
            'width' => '11.5"',
            'length' => '12.5"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 9,
            'size_chart_id' => 57,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '3T',
            'width' => '12"',
            'length' => '13.5"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 9,
            'size_chart_id' => 58,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '4T',
            'width' => '13.25"',
            'length' => '14.5"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 9,
            'size_chart_id' => 59,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '1',
            'RANGETO' => '4',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '3',
            '_TODDLERWHITE' => '2',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 9,
            'price_shirt_id' => 19,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '5',
            'RANGETO' => '8',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '3.25',
            '_TODDLERWHITE' => '2.25',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 9,
            'price_shirt_id' => 20,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '9',
            'RANGETO' => '12',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '3.5',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 9,
            'price_shirt_id' => 21,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '13',
            'RANGETO' => '9999',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '3.25',
            '_TODDLERWHITE' => '2.75',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 9,
            'price_shirt_id' => 22,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('related_products')->insert([
            'product_id' => 10,
            'related_product_id' => 13,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 10,
            'related_product_id' => 11,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 10,
            'related_product_id' => 9,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('size_charts')->insert([
            'size' => 'YXS',
            'width' => '15.5"',
            'length' => '20"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 10,
            'size_chart_id' => 60,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'YS',
            'width' => '16.25"',
            'length' => '21.5"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 10,
            'size_chart_id' => 61,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'YM',
            'width' => '17.5"',
            'length' => '23"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 10,
            'size_chart_id' => 62,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'YL',
            'width' => '18.25"',
            'length' => '24"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 10,
            'size_chart_id' => 63,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'YXL',
            'width' => '19.25"',
            'length' => '26"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 10,
            'size_chart_id' => 64,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '1',
            'RANGETO' => '4',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3',
            '_YOUTHWHITE' => '2',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 10,
            'price_shirt_id' => 23,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '5',
            'RANGETO' => '8',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.25',
            '_YOUTHWHITE' => '2.25',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 10,
            'price_shirt_id' => 24,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '9',
            'RANGETO' => '12',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.5',
            '_YOUTHWHITE' => '2.5',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 10,
            'price_shirt_id' => 25,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '13',
            'RANGETO' => '9999',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '3.25',
            '_YOUTHWHITE' => '2.75',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 10,
            'price_shirt_id' => 26,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('related_products')->insert([
            'product_id' => 11,
            'related_product_id' => 13,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 11,
            'related_product_id' => 10,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 11,
            'related_product_id' => 9,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('size_charts')->insert([
            'size' => '12M',
            'width' => '9.5"',
            'length' => '12"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 11,
            'size_chart_id' => 65,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '18M',
            'width' => '10"',
            'length' => '12.5"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 11,
            'size_chart_id' => 66,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '24M',
            'width' => '11"',
            'length' => '13"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 11,
            'size_chart_id' => 67,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '1',
            'RANGETO' => '4',
            '_INFANT' => '3',
            '_INFANTWHITE' => '2',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 11,
            'price_shirt_id' => 27,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '5',
            'RANGETO' => '8',
            '_INFANT' => '3.25',
            '_INFANTWHITE' => '2.25',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 11,
            'price_shirt_id' => 28,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '9',
            'RANGETO' => '12',
            '_INFANT' => '3.5',
            '_INFANTWHITE' => '2.5',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 11,
            'price_shirt_id' => 29,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '13',
            'RANGETO' => '9999',
            '_INFANT' => '3.25',
            '_INFANTWHITE' => '2.75',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 11,
            'price_shirt_id' => 30,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('related_products')->insert([
            'product_id' => 12,
            'related_product_id' => 14,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 12,
            'related_product_id' => 5,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('size_charts')->insert([
            'size' => 'S',
            'width' => '18"',
            'length' => '27"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 12,
            'size_chart_id' => 68,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'M',
            'width' => '20"',
            'length' => '28.50"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 12,
            'size_chart_id' => 69,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'L',
            'width' => '22"',
            'length' => '29.50"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 12,
            'size_chart_id' => 70,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'XL',
            'width' => '24"',
            'length' => '30.50"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 12,
            'size_chart_id' => 71,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '2XL',
            'width' => '26"',
            'length' => '31.75"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 12,
            'size_chart_id' => 72,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '3XL',
            'width' => '28"',
            'length' => '32.75"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 12,
            'size_chart_id' => 73,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '1',
            'RANGETO' => '99999',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 12,
            'price_shirt_id' => 31,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('related_products')->insert([
            'product_id' => 13,
            'related_product_id' => 11,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 13,
            'related_product_id' => 10,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('related_products')->insert([
            'product_id' => 13,
            'related_product_id' => 9,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('size_charts')->insert([
            'size' => 'NB',
            'width' => '7.25"',
            'length' => '17.5"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 13,
            'size_chart_id' => 74,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '6M',
            'width' => '8.75"',
            'length' => '18.5"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 13,
            'size_chart_id' => 75,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '12M',
            'width' => '9.75"',
            'length' => '19.5"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 13,
            'size_chart_id' => 76,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '18M',
            'width' => '10.75"',
            'length' => '20.5"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 13,
            'size_chart_id' => 77,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '24M',
            'width' => '11.25"',
            'length' => '21.5"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 13,
            'size_chart_id' => 78,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '1',
            'RANGETO' => '2',
            '_INFANT' => '3',
            '_INFANTWHITE' => '1',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 13,
            'price_shirt_id' => 32,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '3',
            'RANGETO' => '5',
            '_INFANT' => '2.5',
            '_INFANTWHITE' => '0.5',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 13,
            'price_shirt_id' => 33,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '6',
            'RANGETO' => '11',
            '_INFANT' => '3',
            '_INFANTWHITE' => '1',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 13,
            'price_shirt_id' => 34,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '12',
            'RANGETO' => '24',
            '_INFANT' => '6.25',
            '_INFANTWHITE' => '5.25',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 13,
            'price_shirt_id' => 35,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '25',
            'RANGETO' => '48',
            '_INFANT' => '5.25',
            '_INFANTWHITE' => '4.25',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 13,
            'price_shirt_id' => 36,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '49',
            'RANGETO' => '99999',
            '_INFANT' => '4.25',
            '_INFANTWHITE' => '4',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 13,
            'price_shirt_id' => 37,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('related_products')->insert([
            'product_id' => 14,
            'related_product_id' => 12,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('size_charts')->insert([
            'size' => 'S',
            'width' => '18"',
            'length' => '28"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 14,
            'size_chart_id' => 79,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'M',
            'width' => '20"',
            'length' => '29"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 14,
            'size_chart_id' => 80,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'L',
            'width' => '22"',
            'length' => '30"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 14,
            'size_chart_id' => 81,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'XL',
            'width' => '24"',
            'length' => '31"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 14,
            'size_chart_id' => 82,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '2XL',
            'width' => '26"',
            'length' => '32"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 14,
            'size_chart_id' => 83,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '1',
            'RANGETO' => '999999',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '0',
            '_YOUTHWHITE' => '0',
            '_ADULT' => '6',
            '_ADULTWHITE' => '5.5',
            '_2xl' => '8',
            '_2xlWHITE' => '7.5',
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
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 14,
            'price_shirt_id' => 38,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('related_products')->insert([
            'product_id' => 15,
            'related_product_id' => 5,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            
            DB::table('size_charts')->insert([
            'size' => 'YXS',
            'width' => '16"',
            'length' => '19.75"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 15,
            'size_chart_id' => 84,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'YS',
            'width' => '17"',
            'length' => '21.25"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 15,
            'size_chart_id' => 85,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'YM',
            'width' => '18"',
            'length' => '22.5"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 15,
            'size_chart_id' => 86,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'YL',
            'width' => '19"',
            'length' => '24"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 15,
            'size_chart_id' => 87,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'YXL',
            'width' => '20"',
            'length' => '25.5"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 15,
            'size_chart_id' => 88,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'S',
            'width' => '20"',
            'length' => '26"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 15,
            'size_chart_id' => 89,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'M',
            'width' => '22"',
            'length' => '27"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 15,
            'size_chart_id' => 90,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'L',
            'width' => '24"',
            'length' => '28"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 15,
            'size_chart_id' => 91,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => 'XL',
            'width' => '26"',
            'length' => '29"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 15,
            'size_chart_id' => 92,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '2XL',
            'width' => '28"',
            'length' => '30"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 15,
            'size_chart_id' => 93,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '3XL',
            'width' => '30"',
            'length' => '31"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 15,
            'size_chart_id' => 94,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '4XL',
            'width' => '32"',
            'length' => '32"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 15,
            'size_chart_id' => 95,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('size_charts')->insert([
            'size' => '5XL',
            'width' => '34"',
            'length' => '33"',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_size_chart')->insert([
            'product_id' => 15,
            'size_chart_id' => 96,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('price_shirts')->insert([
            'RANGEFROM' => '0',
            'RANGETO' => '0',
            '_INFANT' => '0',
            '_INFANTWHITE' => '0',
            '_TODDLER' => '0',
            '_TODDLERWHITE' => '0',
            '_YOUTH' => '18',
            '_YOUTHWHITE' => '17',
            '_ADULT' => '18',
            '_ADULTWHITE' => '17',
            '_2xl' => '20.5',
            '_2xlWHITE' => '19.5',
            '_3xl' => '21.5',
            '_3xlWHITE' => '20.5',
            '_4xl' => '22.5',
            '_4xlWHITE' => '21.5',
            '_5xl' => '22.5',
            '_5xlWHITE' => '21.5',
            '_ONE_SIZE' => '0',
            '_ONE_SIZEWHITE' => '0',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            DB::table('product_price_shirt')->insert([
            'product_id' => 15,
            'price_shirt_id' => 39,
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
            ]);
            
            */
           
                
                
    }
}
