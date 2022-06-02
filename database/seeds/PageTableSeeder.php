<?php

use Illuminate\Database\Seeder;
use App\Page;


class PageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Page::create([
            'title' => '403',
            'slug' => '403',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 1,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 1,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 1,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 1,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 1,
            'component_id' => 19,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 1,
            'component_id' => 20,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 1,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 1,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 1,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);


        Page::create([
            'title' => '404',
            'slug' => '404',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 2,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 2,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 2,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 2,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 2,
            'component_id' => 19,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 2,
            'component_id' => 21,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 2,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 2,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 2,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        Page::create([
            'title' => '500',
            'slug' => '500',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 3,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 3,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 3,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 1,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 3,
            'component_id' => 19,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 3,
            'component_id' => 22,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 3,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 3,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 1,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        Page::create([
            'title' => 'About Us',
            'slug' => 'about-us',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 4,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 4,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 4,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 4,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 4,
            'component_id' => 19,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 4,
            'component_id' => 23,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 4,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 4,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 4,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        Page::create([
            'title' => 'Blog List',
            'slug' => 'blog',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 5,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 5,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 5,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 5,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 5,
            'component_id' => 6,
            'type' => 'Left Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 5,
            'component_id' => 10,
            'type' => 'Left Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 5,
            'component_id' => 17,
            'type' => 'Left Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

       /* DB::table('pages_components')->insert([
            'page_id' => 5,
            'component_id' => 19,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);*/

        DB::table('pages_components')->insert([
            'page_id' => 5,
            'component_id' => 49,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 5,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 5,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 5,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        Page::create([
            'title' => 'Checkout',
            'slug' => 'checkout',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 6,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 6,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 6,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 6,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 6,
            'component_id' => 24,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 6,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 6,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 6,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);


        Page::create([
            'title' => 'Contact',
            'slug' => 'contact-us',
            'content' => '<div class="col-md-12" style="padding-top: 20px;">
                            <p style="text-align: justify;">Vivid Custom\'s Customer Service is ready to assist you!  If you have any questions about your order, pricing or product information please choose from one of the following options.  You may also find answers in our frequently asked questions (FAQ) by clicking <a href="faq">here</a>.</p><br>
                            <center>
                            <h6>Representatives are available:<br><br>
                            <b>MON-FRI:</b> 8:30am to 5pm Central Time</h6></center><br>
                        </div>
                        <br>
                        <center>
                            <h6>Representatives are available:<br><br>
                            <b>MON-FRI:</b> 8:30am to 5pm Central Time</h6>
                        </center>',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 7,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 7,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 7,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 7,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 7,
            'component_id' => 19,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 7,
            'component_id' => 25,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 7,
            'component_id' => 26,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 7,
            'component_id' => 27,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 7,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 7,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 7,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        
        Page::create([
            'title' => 'Faq',
            'slug' => 'faq',
            'content' => '<h1><strong>FREQUENTLY ASKED QUESTIONS</strong></h1>

            <p>Show All Answers</p>
            
            <p>&nbsp;</p>
            
            <h2>What is Screen Printing?</h2>
            
            <p>Screen printing is a printing method where a desired image/design is achieved through pushing ink directly onto the garment using an ink blocking stencil supported by a woven mesh screen. One color is printed at a time. A different screen is needed for each color, so several screens can be used to produce a multicolored image/design. The ink in screen printing is applied thicker than digital print, therefore the print result is very bright and opaque.</p>
            
            <h2>What is Digital Printing?</h2>
            
            <p>Digital printing is a method of printing where an image/design is printed directly from a digital image onto the garment. Digital printing is a newer printing technique where high amounts of detail can be achieved where the result is more like a photographic print. The greatest difference between digital printing and screen printing is that there is no screen needed in digital printing. Because it doesn&rsquo;t require screens nor physical set-up we can take orders in small quantities as little as one shirt.</p>
            
            <h2>What is Embroidery?</h2>
            
            <p>You&#39;re already familiar with embroidery&mdash;even if you had never realized it. It has been around forever, and that&#39;s not an exaggeration. It&#39;s an ancient craft of decorating fabric or other materials using a needle to apply thread or yarn. Embroidery is usually seen on golf shirts, caps, hats, coats, blankets, dress shirts and many more. Instead of being sewn by someone by hand, today it is done by a machine.</p>
            
            <h2>What type of printing will be used for my order?</h2>
            
            <p>Our team of expects will determine which printing method will best be used for your order based on the type of garment, the artwork, and total quantity of items. Each order is reviewed thoroughly, if the artwork you&#39;ve provided does not meet the printing qualitifactions that will ensure a good quality print our graphic department will do the best that they can within the scope to improve the image. You will be notified if the image quality can not ensure standard quality printing and alternative options will be available.</p>
            
            <h2>Can I specify what type of printing I want for my shirts?</h2>
            
            <p>The best printing method for your order will be determined by our team but if there is a specific printing method you&#39;d prefer please speak to our representatives for more details before placing your order.</p>
            
            <h2>Can you print on sleeves?</h2>
            
            <p>We can absolutely print on sleeves. Check out our design studio to create a custom sleeve design! We do not offer wrap around sleeve printing at this time and sleeve print should be small enough to fit on one side of the sleeve.</p>
            
            <h2>Can you embroider and screen print on the same garment?</h2>
            
            <p>We do offer embroidery and screen printing on the same garmet but the design studio is not set up for this option as of yet. Please contact a customer service representative for assistance and pricing if you need this service for your order. We can help with your order step by step by phone or email.</p>
            
            <h2>How can I be sure my design will be centered?</h2>
            
            <p>You can order without any worries! We have a team of designers that will make all the finishing touches to your design.</p>
            
            <h2>How big will my print be?</h2>
            
            <p>Print Box displayed in our Design studio are as follows:</p>
            
            <p>Adult Unisex T-Shirts: Front &amp; Back</p>
            
            <p>Width= 12&quot; &nbsp;| &nbsp; Height= 16&quot;</p>
            
            <p>Ladies T-Shirts: Front &amp; Back</p>
            
            <p>Width= 11&quot; &nbsp;| &nbsp; Height= 14.5&quot;</p>
            
            <p>Youth T-Shirts: Front &amp; Back</p>
            
            <p>Width= 10&quot; &nbsp;| &nbsp; Height= 13</p>
            
            <p>Sleeve Print (Short Sleeve):</p>
            
            <p>Width= 3.5&quot; &nbsp;| &nbsp; Height= 3.5&quot;</p>
            
            <p>Sleeve Print (Long Sleeve):</p>
            
            <p>Width= 2&quot; &nbsp;| &nbsp; Height= 6&quot;</p>
            
            <h2>How large can you print my image?</h2>
            
            <p>The maximum print area is 12&quot; in width by 16&quot; in height. If there are special requests for a print size please contact Vivid Customs for assistance.</p>
            
            <h2>Will your screen printing wash off?</h2>
            
            <p>Screen printing will not wash off, it is the preferred method in the textile industry because of it&#39;s durability and it&#39;s capability to achieve the most vibrant imprints across all medias.</p>
            
            <h2>What is the maximum quantity that you will print?</h2>
            
            <p>Vivid Customs does not have a limit. You can order as little as 1 shirt to bulk of thousands..</p>
            
            <h2>Who is responsible for deciding if a trademarked or registered logo may be printed by Vivid Customs?</h2>
            
            <p>Vivid Customs will not take responsibility for a customer who is infringing on a trademark, registered mark or copyright. We expect that all customers will not plagiarize or adopt any slogan or works that are not owned by them or are public domain. Any image, slogan, or likeliness recognized by a Vivid Customs employee as an illegal reproduction of any work will automatically be dismissed. When you, as a customer, create a design, you assume full responsibility for the consequence and repercussion of any illegal print.</p>
            
            <h2>How do I get a quote?</h2>
            
            <p>Instant quotes can be obtained any day at any time at www.vividcustoms.com or by contacting a Vivid Customs customer service representative. You can locate the Price Quote at the very top bar of our page.</p>
            
            <h2>What are your hours of operation?</h2>
            
            <p>We&#39;re open Monday through Friday from 8:30 AM to 5:00 PM</p>
            
            <h2>Do you offer live support?</h2>
            
            <p>Yes we do offer live support! Look for the live chat tab located at the right hand corner of any online page to contact one of our live customer service specialist.</p>
            
            <h2>When will I receive my order?</h2>
            
            <p>When placing an order with us, the guaranteed delivery date is shown for all orders. If you are not ready to place an order with us but would like to know how fast you may receive your order please review the two shipping methods availble below:</p>
            
            <p><br />
            <strong>Free Shipping - 2 Week Delivery</strong></p>
            
            <p>Standard Free Shipping: Your order will be delivered within 9 business days</p>
            
            <p><strong>Rush/Expedited Shipping - 1 Week Delivery</strong></p>
            
            <p>Rush Delivery: Your order will be delivered within 5 business days<br />
            <br />
            Orders are shipped via USPS, FedEx or UPS depending on the package size. You will receive a confirmation email when your order is completed and shipped from our facility. The email will contain the tracking information so that you may track the package.</p>
            
            <p>We also offer pickup for our local customers in Houston.</p>
            
            <p>Faster shipping is available, please reach out to a representative for more information.</p>
            
            <h2>How do I unsubscribe from your mailing list?</h2>
            
            <p>You may unsubscribe from our list through the latest email sent to you. If you are unable to unsubscribe for any reason, please reach out to us, and a customer service representative will be able to remove you.</p>
            
            <h2>What is your return policy?</h2>
            
            <p><strong>Returns</strong><br />
            Vividcustoms.com employs a great team of individuals who go to great lengths to ensure all orders are fulfilled accurately and are of the highest quality. There are no returns unless the customers are unsatisfied for one of the following reasons:<br />
            &nbsp; &nbsp; a. the quality of the print or embroidery is below the standard industry quality<br />
            &nbsp; &nbsp; b. the blank items are defected/flawed<br />
            &nbsp; &nbsp; c. there&#39;s a printing error where the design differs from the design approved<br />
            In that case we will be happy to reprint the order or give you a full refund on your purchase. For any product service questions please contact a customer service representative before placing an online order.<br />
            &nbsp;</p>
            
            <h2>How is price determined?</h2>
            
            <p><strong>Printing</strong><br />
            The price for printing varies depending on a few things:<br />
            1. Item Color<br />
            2. Number of ink colors<br />
            3. Number of print placements<br />
            4. Total quantity of items<br />
            <br />
            <strong>Embroidery</strong><br />
            The price for embroidery varies based on:<br />
            1. Type of item (Polo shirt, button down shirts, bags, hats, jackets, etc...)<br />
            2. Embroidery size<br />
            3. Stitch count (Number of stitches for your embroidery design)<br />
            4. Total quantity of items<br />
            <br />
            You may get a free price quote for printing using our Price Quote at the top menu of our site.<br />
            <br />
            To get a free quote for embroidery, please contact one of our representatives.</p>
            
            <h2>I&#39;m on a budget, how do I save money on my order?</h2>
            
            <p>With printing, the more you order the more you save! To help keep the cost per item low we suggest limiting your design to one or two ink color. Less print placements, the more print placements the higher the cost per item would be.<br />
            For example, an order of 24 shirts with a one color ink print in the front would be significantly cheaper than an order of 24 shirts with a 3-color ink print in the front and 2-color ink print in the back. The reasons being, the latter order has two different print placements, front and back, and each print placement has multiple ink colors.</p>
            
            <h2>I don&#39;t see the product I&#39;m looking for in your products page.</h2>
            
            <p>We carry hundreds of different products. Unfortunately, they are not all up on our site yet. Products are contanstly added to our catalog. Please reach out to our representatives for more product options!</p>
            
            <h2>Can I order just one shirt?</h2>
            
            <p>Yes, you can order as little as just one shirt. There is no minimum so you can order as little or as many shirts as you like.</p>
            
            <h2>Can I pick up my shirt the same day?</h2>
            
            <p>We are located in Houston, Texas so if you&#39;re in Houston then you&#39;re in luck! We do offer same day pickup. Orders are printed in the order it was received, so if you need a few shirts or even just one shirt printed please contact our representatives for same day pickup availability. Rush fee may apply.</p>',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 8,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 8,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 8,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 8,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 8,
            'component_id' => 19,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 8,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 8,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 8,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        Page::create([
            'title' => 'Gallery List',
            'slug' => 'gallery',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 9,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 9,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 9,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 9,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 9,
            'component_id' => 7,
            'type' => 'Left Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 9,
            'component_id' => 11,
            'type' => 'Left Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 9,
            'component_id' => 18,
            'type' => 'Left Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 9,
            'component_id' => 51,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 9,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 9,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 9,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        Page::create([
            'title' => 'Index',
            'slug' => 'index',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 10,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 10,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 10,
            'component_id' => 82,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        /*DB::table('pages_components')->insert([
            'page_id' => 10,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 10,
            'component_id' => 44,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 10,
            'component_id' => 45,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 10,
            'component_id' => 40,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 10,
            'component_id' => 43,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 10,
            'component_id' => 42,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 10,
            'component_id' => 46,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 10,
            'component_id' => 47,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        
        DB::table('pages_components')->insert([
            'page_id' => 10,
            'component_id' => 55,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);
*/

        DB::table('pages_components')->insert([
            'page_id' => 10,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 10,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 10,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        Page::create([
            'title' => 'Login',
            'slug' => 'login',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 11,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 11,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 11,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 11,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 11,
            'component_id' => 19,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 11,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 11,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 11,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        Page::create([
            'title' => 'Login/Register',
            'slug' => 'login-register',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 12,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 12,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 12,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 12,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 12,
            'component_id' => 29,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 12,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 12,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 12,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        Page::create([
            'title' => 'Our Services',
            'slug' => 'our-services',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 13,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 13,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 13,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 13,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 13,
            'component_id' => 19,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 13,
            'component_id' => 75,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 13,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 13,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 13,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        Page::create([
            'title' => 'Price Quote',
            'slug' => 'price-quote',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 14,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 14,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 14,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 14,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 14,
            'component_id' => 54,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 14,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 14,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 14,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        Page::create([
            'title' => 'privacy',
            'slug' => 'privacy',
            'content' => '<h3>Privacy &amp; Cookie Policy</h3>

            <p>Effective Date: May 1, 2015</p>
            
            <p>vividcustoms.com values the users of our website www. vividcustoms.com. Your privacy and trust are very important to us. We recognize that you may be concerned about our collection, use, and disclosure of the personally identifiable information (&quot;Personal Information&quot;) that we collect when you use the Website and the services offered on www.vividcustoms.com. This Privacy Policy describes the information that we collect from you, how we collect this information, and what we do with it after we collect it. By using the Website you are accepting the practices described in this Privacy Policy. Our policy and security it authorized and managed by www.vividcustoms.com.com</p>
            
            <p>If you have any questions or comments regarding this Privacy Policy, please contact us at info@vividcustoms.com</p>
            
            <p>This privacy policy has been compiled tof better serve those who are concerned with how their &#39;Personally identifiable information&#39; (PII) is being used online. PII, as used in US privacy law and information security, is information that can be used on its own or with other information to identify, contact, or locate a single person, or to identify an individual in context. Please read our privacy policy carefully to get a clear understanding of how we collect, use, protect or otherwise handle your Personally Identifiable Information in accordance with our website. vividcustoms.com recognizes that you have a right to privacy. We take the privacy of our customers very seriously and we will not give or sell anyone specific information about you or any orders you have placed through the Vividcustoms.com Service except that: (i) Vividcustoms.com may share information about you or an order that you have placed with a relevant Institution in order to allow such Institution to review the use of the Licensed Marks as necessary. In addition, Vividcustoms.com may share information about you or your order if we believe in good faith that disclosure of specific information is necessary to (a) resolve disputes, investigate problems, or enforce our User Agreement; (b) comply with relevant laws or respond to requests from law enforcement or other government officials relating to investigations or alleged illegal activity (in which case we can, and you authorize us to, disclose personal information without subpoenas or warrants served on us); or (c) protect and defend our rights or property or the rights and property of you or third parties. Vividcustoms.com collects information (including email addresses) that allows us, among other things, to: process and fill your order; contact you regarding the processing of your order; share your design with those whom you request; improve our website and service; and send informative and promotional emails on behalf of one or more of the Vividcustoms.com Entities that may be of interest to you. While this information may be used by any of the vividcustoms.com Entities for marketing purposes, it is never shared or sold to other organizations for commercial purposes. Generally, products created using images available on the site should not be resold commercially. In the event that you wish to resell such products, you agree to contact Vividcustoms.com and verify the legality of reselling such products prior to doing so. Designs created using the text tools and images available through the site are in no way the exclusive property of the customers who assemble such designs. Vividcustoms.com retains the right to display such designs or offer them (or variations of such designs) to other customers.</p>
            
            <p>Additionally, Vividcustoms.com has the sole discretion to reject any order that it considers libelous, defamatory, obscene, profane (according to standards established by the FCC), portraying irresponsible use of alcohol or other substances, advocating persecution based on gender, age, race, religion, disability or national origin, containing explicit sexual content or is otherwise inappropriate for Vividcustoms.com production.</p>
            
            <p>You agree to not use vividcustoms.com&#39;s Service to create any material that is unlawful, harmful, threatening, abusive, harassing, tortious, defamatory, vulgar, obscene, libelous, invasive of another&#39;s privacy, hateful, or racially, ethnically or otherwise objectionable, or that infringes on any patent, trademark, trade secret, copyright or other proprietary rights of any third party.</p>
            
            <p>Does vividcustoms.com Ever Make Changes to its Privacy Policy?</p>
            
            <p>We may change our terms and conditions from time to time without expressly informing you. It is your obligation to keep yourself informed of any changes that may occur between visits, as using our services each time is under the condition that you accept all our terms and conditions.</p>
            
            <p>What Types of Information Does vividcustoms.com Collect?</p>
            
            <p>We collect Personal Information that you provide to us, such as your name, mailing address, phone number, email address, and credit card number.</p>
            
            <p>How and When Does vividcustoms.com Collect This Information?</p>
            
            <p>Providing Information to Us. We collect Personal Information from you when you provide it to us. For example, if you purchase a product sold through an affiliate, we may collect your name, mailing address, telephone number, credit card number, and email address. If you create an account, we may collect your name, tax identification number, mailing address, email address, and other information that we request during the registration process, and any information that you provide to vividcustoms.com If you sign up to receive a newsletter, we will collect your email address. Communications With Us. If you communicate with us regarding the Website or the System, we will collect any information that you provide to us in any such communication. Analytic and Reporting Technologies. Like the operators of most websites, we use analytic and reporting technologies to record Non-Personal Information such as Internet domain and host names, Internet protocol (IP) addresses, browser software, operating system types, click stream patterns, and the dates and times that the Website and the System are accessed. We also contract with several online partners to help manage, monitor and optimize our Website and the System and to help us measure the effectiveness of our advertising, communications and how visitors use the Website. To do this, we may use web beacons and cookies.</p>
            
            <p>How Does vividcustoms.com Use My Information?</p>
            
            <p>Personal Information. We use Personal Information primarily for our own internal purposes, such as providing, maintaining, evaluating, and improving the Website, fulfilling requests for information, producing and shipping the products that you order, and providing customer support. For example, if you create an Account, we will use the information that you provide us to communicate with you and pay you any commissions that you earn. Similarly, if you sign up to receive a vividcustoms.com newsletter, we will use the email address you provide to send you the newsletters. Non-Personal Information. We use Non-Personal Information to track the use of the Website and the System and for other internal purposes, such as providing, maintaining, evaluating, and improving the Website.</p>
            
            <p>When Will vividcustoms.com Disclose My Information to Third Parties?</p>
            
            <p>Disclosure to Successors. We may disclose your Personal Information to any successor-in-interest of ours, such as a company that acquires us. In the event vividcustoms.com goes through a business transition, such as a merger or acquisition by or with another company, or sale of all or a portion of our assets, your Personal Information will likely be among the assets transferred. You will be notified via email or by a notice on our Website of any such change in ownership or control of your Personal Information.</p>
            
            <p>Disclosure to Unaffiliated Third Parties. We may disclose your Personal Information to prevent an emergency, to prevent harm to others, to respond to legal requirements, to protect or enforce our rights and policies, to protect or enforce the rights of a third party, or as required or permitted by law (including, without limitation, to comply with a subpoena or court order). In particular, we may disclose your information to a third party that alleges that you have infringed their intellectual property rights. Similarly, if you allege that someone is infringing upon your intellectual property rights, we may disclose your information to that person.</p>
            
            <p>Disclosure to Third Party Service Providers and Online Partners. We may contract with various third parties who help us provide, maintain and improve the Website and the System. For example, we use a third party to process payments made to us, and may subcontract out production, fulfilment, analytics, reporting or other operations. We also contract with several online partners to help manage, monitor and optimise our Website and the System and to help us measure the effectiveness of our advertising, communications and how visitors use the Website. We will use commercially reasonable efforts to prevent such third parties from disclosing your Personal Information, except for the purpose of providing the services in question. We cannot guarantee that such third parties will not disclose your Personal Information. Disclosure to Affiliates. If you purchase a product, vividcustoms.com may provide your name, and the city and state information provided by you to an Affiliate. In our Affiliate Agreement, vividcustoms.com contractually obligates each Affiliate not to use or disclose this information for any purposes other than internal record keeping, and for marketing, only if you have opted in to receive marketing material directly from the Affiliate. We cannot guarantee all Affiliates will comply with this obligation.</p>
            
            <p>Disclosure of Non-Personal Information. We will disclose Non-Personal Information, in aggregate form, to potential strategic partners, advertisers, investors, customers, and others. You may not opt-out of the sharing of this information. However, it cannot be easily used to identify you personally.</p>
            
            <p>What About Cookies and Web Beacons?</p>
            
            <p>A cookie is a small file placed on the hard drive of your computer. Most websites use cookies. We use cookies to track your use of the Website and the System, provide you with a more personalized user experience, and to allow you to login and begin use of the Website automatically when you visit the Website. A web beacon is an often-transparent graphic image, usually no larger than a 1x1 pixel that is placed on a web page or in an e-mail that is used to monitor the behavior of the user visiting the Website or receiving the e-mail. Cookies and web beacons used by vividcustoms.com and our online partners are not linked to Personal Information. This Privacy Policy covers the use of cookies and web beacons by vividcustoms.com and our online partners only and does not cover the use of cookies or web beacons by any other third party.</p>
            
            <p>One of the primary purposes of cookies is to provide a convenience feature to save you time. The purpose of a cookie is to tell the Web server that you have returned to a specific page. For example, if you register with vividcustoms.com site or services, a cookie helps vividcustoms.com to recall your specific information on subsequent visits. This simplifies the process of recording your personal information, such as billing addresses, shipping addresses, and so on. When you return to the same vividcustoms.com Web site, the information you previously provided can be retrieved, so you can easily use the vividcustoms.com features that you customized.</p>
            
            <p>How to control and delete cookies</p>
            
            <p>You have the ability to accept or decline cookies. Most Web browsers automatically accept cookies, but you can usually modify your browser setting to decline cookies if you prefer. If you choose to decline cookies, you may not be able to fully experience the interactive features of the Vividcustoms.com Pty Ltd services or Web sites you visit.</p>
            
            <p>Visit www.aboutcookies.org which contains comprehensive information on how to do this on a wide variety of browsers. You will also find details on how to delete cookies from your machine as well as more general information about cookies.</p>
            
            <p>Security</p>
            
            <p>The security of your Personal Information is important to us. When you enter sensitive information such as a credit card number on our registration or order forms, we encrypt that information using secure socket layer technology (SSL). We follow generally accepted industry standards to protect the Personal Information submitted to us, both during transmission and once we receive it. However, no method of transmission over the Internet, or method of electronic storage, is 100% secure. Therefore, while we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security.</p>
            
            <p>What About Children&#39;s Privacy?</p>
            
            <p>Under Thirteen. The Website and the System are intended for users aged 13 and older only. Accordingly, we will not knowingly collect or use any Personal Information from children that we know to be under the age of 13. In addition, we will delete any information in our database that we know originates from a child under the age of 13. Thirteen to Seventeen. Prospective users between the ages of 13 and 17 can only use the Website under their parent&#39;s or legal guardian&#39;s supervision. If you are between the ages of 13 and 17, you, your parent, or your legal guardian may request that we deactivate any of your Personal Information in our database and/or opt-out from receiving communications from us. If you wish to do so, please contact us at info@vividcustoms.com</p>',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 15,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 15,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 15,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 15,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 15,
            'component_id' => 19,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 15,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 15,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 15,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        Page::create([
            'title' => 'Product List',
            'slug' => 'products',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 16,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 16,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 16,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 16,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 16,
            'component_id' => 5,
            'type' => 'Left Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 16,
            'component_id' => 9,
            'type' => 'Left Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 16,
            'component_id' => 16,
            'type' => 'Left Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 16,
            'component_id' => 41,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 16,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 16,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 16,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);
        

        Page::create([
            'title' => 'Register',
            'slug' => 'register',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 17,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 17,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 17,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 17,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 17,
            'component_id' => 19,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 17,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 17,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 17,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

              
        Page::create([
            'title' => 'Shopping Cart',
            'slug' => 'shopping-cart',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
      

        DB::table('pages_components')->insert([
            'page_id' => 18,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 18,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 18,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 18,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 18,
            'component_id' => 36,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 18,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 18,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 18,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        

        Page::create([
            'title' => 'Single Blog',
            'slug' => 'single-blog',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);
        
        DB::table('pages_components')->insert([
            'page_id' => 19,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 19,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 19,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 19,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 19,
            'component_id' => 48,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 19,
            'component_id' => 57,
            'type' => 'Right Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 19,
            'component_id' => 61,
            'type' => 'Right Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 19,
            'component_id' => 68,
            'type' => 'Right Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 19,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 19,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 19,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        

        Page::create([
            'title' => 'Single Gallery',
            'slug' => 'single-gallery',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 20,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 20,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 20,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 20,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 20,
            'component_id' => 50,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 20,
            'component_id' => 58,
            'type' => 'Right Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 20,
            'component_id' => 62,
            'type' => 'Right Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 20,
            'component_id' => 69,
            'type' => 'Right Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 20,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 20,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 20,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);


        Page::create([
            'title' => 'Single Product',
            'slug' => 'single-product',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 21,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 21,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 21,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 21,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 21,
            'component_id' => 39,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 21,
            'component_id' => 56,
            'type' => 'Right Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 21,
            'component_id' => 60,
            'type' => 'Right Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 21,
            'component_id' => 67,
            'type' => 'Right Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 21,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 21,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 21,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);


       

        Page::create([
            'title' => 'Single Template Design',
            'slug' => 'single-template-design',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 22,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 22,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 22,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 22,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 22,
            'component_id' => 52,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 22,
            'component_id' => 56,
            'type' => 'Right Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 22,
            'component_id' => 63,
            'type' => 'Right Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 22,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 22,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 22,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        
       
        Page::create([
            'title' => 'Template Design List',
            'slug' => 'template-designs',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 23,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 23,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 23,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 23,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 23,
            'component_id' => 8,
            'type' => 'Left Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 23,
            'component_id' => 12,
            'type' => 'Left Side',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 23,
            'component_id' => 53,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 23,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 23,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 23,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);
        

        Page::create([
            'title' => 'User Agreement',
            'slug' => 'user-agreement',
            'content' => '<h3>User Agreement</h3>

            <p>Terms of service: an agreement between you and vividcustoms.com to enter and use this website and services</p>
            
            <p>Welcome to the vividcustoms.com website and services.</p>
            
            <p>We hope you enjoy your use of our facilities. Please appreciate and understand that this is a legal world and that you, by not immediately leaving this website now or immediately after reading our terms of service are accepting our services under the terms of this agreement.</p>
            
            <p>It is your obligation to keep yourself informed of any changes that may occur between visits, as using our services each time is under the condition that you accept all our terms and conditions. We may change our terms and conditions from time to time without expressly informing you.</p>
            
            <p>vividcustoms.com Services:</p>
            
            <p>&bull; Create, design, and customize products that are listed for sale.</p>
            
            <p>&bull; Buy products that are listed for sale</p>
            
            <p>&bull; Save and share designs that you may have created.</p>
            
            <p>&bull; Use our fun picture, text and design tools.</p>
            
            <p>&bull; Post your created images to social networks or blogs that you have the legal right to do so</p>
            
            <p>&bull; Registering to subscribe to special offers and use of galleries.</p>
            
            <p>Intellectual Property Rights of vividcustoms.com and Third Parties</p>
            
            <p>All materials, inlcuding clip art images, illustrations, icons, photographs and other materials that appear on vividcustoms.com are the property of vividcustoms.com or licenced from 3rd party vendors unless otherwise stated. All designs created using the text features and/or clip arts provided on out site are in no way the exclusive property of the customers or users who assemble such design. Vividcustoms.com retains the right to display or offer such designs (or variations of) to other customers.</p>
            
            <p>User Provided Artwork and Images<br />
            &nbsp; &nbsp; Vivid Customs will not take responsibility for a customer who is infringing on a trademark, registered mark or copyright. We expect that all customers will not plagiarize or adopt any slogan or works that are not owned by them or are public domain. Any image, slogan, or likeliness recognized by a Vivid Customs employee as an illegal reproduction of any work will automatically be dismissed. When you, as a customer, create a design, you assume full responsibility for the consequence and repercussion of any illegal print.</p>
            
            <p>Accuracy of Colors and Final Products</p>
            
            <p>Products, graphics/artworks, text, placement or print area are digital representations. Vividcustoms.com attempts to display product and print colors with as much accuracy as possible. Different monitor&#39;s display settings may display an image in slightly different color than printed, and all colors seen by the user are solely for reference. Vividcustoms.com is not liable for any dissatisfaction in color variation for shirt, text, or graphic displayed in finsihed products purchased through us.</p>
            
            <p>Payment Policies</p>
            
            <p>Vividcustoms.com acccepts online or telephone payment via credit card or debit card. All payments sent electronically are securely trasmitted.</p>
            
            <p>Returns-Cancellation Policies</p>
            
            <p><strong>Returns</strong><br />
            Vividcustoms.com employs a great team of individuals who go to great lengths to ensure all orders are fulfilled accurately and are of the highest quality. There are no returns unless the customers are unsatisfied for one of the following reasons:&nbsp;<br />
            &nbsp; &nbsp; a. the quality of the print or embroidery is below the standard industry quality&nbsp;<br />
            &nbsp; &nbsp; b. the blank items are defected/flawed<br />
            &nbsp; &nbsp; c. there&#39;s a printing error where the design differs from the design approved<br />
            In that case we will be happy to reprint the order or give you a full refund on your purchase. For any product service questions please contact a customer service representative before placing an online order.<br />
            <br />
            <strong>Cancellation</strong><br />
            Free Standard Delivery Orders: You may change or cancel your order within twenty four (24) hours of placing your order.<br />
            Rush Orders: To ensure on time delivery, production starts as soon as the order comes in therefore you may not change or cancel the order.</p>',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 24,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 24,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 24,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 24,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 24,
            'component_id' => 19,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 24,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 24,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 24,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

       
        Page::create([
            'title' => 'Wishlist',
            'slug' => 'wishlist',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 25,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 25,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 25,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 25,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 25,
            'component_id' => 38,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 25,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 25,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 25,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        Page::create([
            'title' => 'View Orders',
            'slug' => 'view-orders',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 26,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 26,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 26,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 26,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 26,
            'component_id' => 73,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 26,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 26,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 26,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);


        Page::create([
            'title' => 'My Account',
            'slug' => 'my-account',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 27,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 27,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 27,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 27,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 27,
            'component_id' => 74,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 27,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 27,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 27,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);


        Page::create([
            'title' => 'Search Order',
            'slug' => 'search-order',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 28,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 28,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 28,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 28,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 28,
            'component_id' => 76,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 28,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 28,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 28,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        Page::create([
            'title' => 'My Store',
            'slug' => 'my-store',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 29,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 29,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 29,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 29,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 29,
            'component_id' => 77,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 29,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 29,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 29,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);



        Page::create([
            'title' => 'Store Info',
            'slug' => 'store-info',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 30,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 30,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 30,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 30,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 30,
            'component_id' => 78,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 30,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 30,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 30,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        Page::create([
            'title' => 'Store Subscribe',
            'slug' => 'store-subscribe',
            'content' => '',
            'published' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 31,
            'component_id' => 80,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 31,
            'component_id' => 81,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 31,
            'component_id' => 3,
            'type' => 'Header',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 31,
            'component_id' => 4,
            'type' => 'Mobile Area',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 31,
            'component_id' => 79,
            'type' => 'Body',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 31,
            'component_id' => 70,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 31,
            'component_id' => 71,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);

        DB::table('pages_components')->insert([
            'page_id' => 31,
            'component_id' => 72,
            'type' => 'Footer',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
        ]);
    }
}
