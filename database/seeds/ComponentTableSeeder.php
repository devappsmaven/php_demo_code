<?php

use Illuminate\Database\Seeder;
use App\Component;

class ComponentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Component::create([
            'name' => 'Header Top Bar',
            'section' => 'Header Top Area',
            'slug' => 'header-top-bar',
            'image' => 'header-top-bar.png',
            'order' => '1',
            'type' => 'Header',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);       

        Component::create([
            'name' => 'Header Middle area',
            'section' => 'Header Middle Area',
            'slug' => 'header-middle-area',
            'image' => 'header-middle-area.png',
            'order' => '2',
            'type' => 'Header',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Header Bottom',
            'section' => 'Header Bottom Area',
            'slug' => 'header-bottom',
            'image' => 'header-bottom.png',
            'order' => '3',
            'type' => 'Header',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Mobile Menu Area',
            'section' => 'Mobile Menu Area',
            'slug' => 'mobile-menu-area',
            'image' => 'mobile-menu-area.png',
            'order' => '4',
            'type' => 'Mobile Area',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Product Search Left',
            'section' => 'Product Search Left',
            'slug' => 'product-search-left',
            'image' => 'product-search-left.png',
            'order' => '5',
            'type' => 'Left Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Post Search Left',
            'section' => 'Post Search Left',
            'slug' => 'post-search-left',
            'image' => 'post-search-left.png',
            'order' => '6',
            'type' => 'Left Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Gallery Search Left',
            'section' => 'Gallery Search Left',
            'slug' => 'gallery-search-left',
            'image' => 'gallery-search-left.png',
            'order' => '7',
            'type' => 'Left Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Design Template Search Left',
            'section' => 'Design Template Search Left',
            'slug' => 'template-search-left',
            'image' => 'template-search-left.png',
            'order' => '8',
            'type' => 'Left Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Category Products Left',
            'section' => 'Category Products Left',
            'slug' => 'category-products-left',
            'image' => 'category-products-left.png',
            'order' => '9',
            'type' => 'Left Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Category Posts Left',
            'section' => 'Category Posts Left',
            'slug' => 'category-posts-left',
            'image' => 'category-posts-left.png',
            'order' => '10',
            'type' => 'Left Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Category Gallery Left',
            'section' => 'Category Gallery Left',
            'slug' => 'category-gallery-left',
            'image' => 'category-gallery-left.png',
            'order' => '11',
            'type' => 'Left Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Category Template Design Left',
            'section' => 'Category Template Design Left',
            'slug' => 'category-templates-left',
            'image' => 'category-templates-left.png',
            'order' => '12',
            'type' => 'Left Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Price Range Left',
            'section' => 'Price Range Left',
            'slug' => 'price-range-left',
            'image' => 'price-range-left.png',
            'order' => '13',
            'type' => 'Left Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Color Left',
            'section' => 'Color Left',
            'slug' => 'color-left',
            'image' => 'color-left.png',
            'order' => '14',
            'type' => 'Left Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Brand Left',
            'section' => 'Brand Left',
            'slug' => 'brand-left',
            'image' => 'brand-left.png',
            'order' => '15',
            'type' => 'Left Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Recent Products Left',
            'section' => 'Recent Products Left',
            'slug' => 'recent-products-left',
            'image' => 'recent-products-left.png',
            'order' => '16',
            'type' => 'Left Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Popular Posts Left',
            'section' => 'Popular Posts Left',
            'slug' => 'popular-posts-left',
            'image' => 'popular-posts-left.png',
            'order' => '17',
            'type' => 'Left Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Popular Galleries Left',
            'section' => 'Popular Galleries Left',
            'slug' => 'popular-galleries-left',
            'image' => 'popular-galleries-left.png',
            'order' => '18',
            'type' => 'Left Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Content',
            'section' => 'Content',
            'slug' => 'content',
            'image' => 'content.png',
            'order' => '19',
            'type' => 'Body',
            'is_editable' => 1,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => '403',
            'section' => '403',
            'slug' => '403',
            'image' => '403.png',
            'order' => '20',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => '404',
            'section' => '404',
            'slug' => '404',
            'image' => '404.png',
            'order' => '21',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => '500',
            'section' => '500',
            'slug' => '500',
            'image' => '500.png',
            'order' => '22',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'About us',
            'section' => 'About us',
            'slug' => 'about-us',
            'image' => 'about-us.png',
            'order' => '23',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Checkout',
            'section' => 'Checkout',
            'slug' => 'checkout',
            'image' => 'checkout.png',
            'order' => '24',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Contact Map',
            'section' => 'Contact Map',
            'slug' => 'contact-map',
            'order' => '25',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Contact Form',
            'section' => 'Contact Form',
            'slug' => 'contact-form',
            'order' => '26',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Contact Info',
            'section' => 'Contact Info',
            'slug' => 'contact-info',
            'order' => '27',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        

        Component::create([
            'name' => 'Email Verify',
            'section' => 'Email Verify',
            'slug' => 'email-verify',
            'order' => '28',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Login/Register',
            'section' => 'Login/Register',
            'slug' => 'login-register',
            'order' => '29',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Login',
            'section' => 'Login',
            'slug' => 'login',
            'order' => '30',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Password Email',
            'section' => 'Password Email',
            'slug' => 'password-email',
            'order' => '31',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Password Reset',
            'section' => 'Password Reset',
            'slug' => 'password-reset',
            'order' => '32',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Register',
            'section' => 'Register',
            'slug' => 'register',
            'order' => '33',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Order Complete',
            'section' => 'Order Complete',
            'slug' => 'order-complete',
            'order' => '34',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Password Reset',
            'section' => 'Password Reset',
            'slug' => 'password-reset',
            'order' => '35',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Shopping Cart',
            'section' => 'Shopping Cart',
            'slug' => 'shopping-cart',
            'order' => '36',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Team Member',
            'section' => 'Team Member',
            'slug' => 'team-member',
            'order' => '37',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Wishlist',
            'section' => 'Wishlist',
            'slug' => 'wishlist',
            'order' => '38',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Product Details',
            'section' => 'Product Details',
            'slug' => 'product-details',
            'order' => '39',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);


        Component::create([
            'name' => 'Main Product List',
            'section' => 'Main Product List',
            'slug' => 'main-product-list',
            'order' => '40',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);


        Component::create([
            'name' => 'Product List',
            'section' => 'Product List',
            'slug' => 'product-list',
            'order' => '41',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Featured Products',
            'section' => 'Featured Products',
            'slug' => 'featured-products',
            'order' => '42',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'New Product',
            'section' => 'New Product',
            'slug' => 'new-product',
            'order' => '43',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Carousel Slider',
            'section' => 'Carousel Slider',
            'slug' => 'carousel-slider',
            'order' => '44',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Main Brands',
            'section' => 'Main Brands',
            'slug' => 'main-brands',
            'order' => '45',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Main Latest Blog',
            'section' => 'Main Latest Blog',
            'slug' => 'main-latest-blog',
            'order' => '46',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Main Latest Gallery',
            'section' => 'Main Latest Gallery',
            'slug' => 'main-latest-gallery',
            'order' => '47',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Post Details',
            'section' => 'Post Details',
            'slug' => 'post-details',
            'order' => '48',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);


        Component::create([
            'name' => 'Post List',
            'section' => 'Post List',
            'slug' => 'post-list',
            'order' => '49',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Gallery Details',
            'section' => 'Gallery Details',
            'slug' => 'gallery-details',
            'order' => '50',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);


        Component::create([
            'name' => 'Gallery List',
            'section' => 'Gallery List',
            'slug' => 'gallery-list',
            'order' => '51',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Template Design Details',
            'section' => 'Template Design Details',
            'slug' => 'template-design-details',
            'order' => '52',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);


        Component::create([
            'name' => 'Template Design List',
            'section' => 'Template Design List',
            'slug' => 'template-design-list',
            'order' => '53',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Price Quote',
            'section' => 'Price Quote',
            'slug' => 'price-quote',
            'order' => '54',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Subscribe',
            'section' => 'Subscribe',
            'slug' => 'subscribe',
            'order' => '55',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Product Search Right',
            'section' => 'Product Search Right',
            'slug' => 'product-search-right',
            'order' => '56',
            'type' => 'Right Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Post Search Right',
            'section' => 'Post Search Right',
            'slug' => 'post-search-right',
            'order' => '57',
            'type' => 'Right Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Gallery Search Right',
            'section' => 'Gallery Search Right',
            'slug' => 'gallery-search-right',
            'order' => '58',
            'type' => 'Right Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Design Template Search Right',
            'section' => 'Design Template Search Right',
            'slug' => 'template-search-right',
            'order' => '59',
            'type' => 'Right Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Category Products Right',
            'section' => 'Category Products Right',
            'slug' => 'category-products-right',
            'order' => '60',
            'type' => 'Right Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Category Posts Right',
            'section' => 'Category Posts Right',
            'slug' => 'category-posts-right',
            'order' => '61',
            'type' => 'Right Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Category Gallery Right',
            'section' => 'Category Gallery Right',
            'slug' => 'category-gallery-right',
            'order' => '62',
            'type' => 'Right Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Category Template Design Right',
            'section' => 'Category Template Design Right',
            'slug' => 'category-templates-right',
            'order' => '63',
            'type' => 'Right Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);


        Component::create([
            'name' => 'Price Range Right',
            'section' => 'Price Range Right',
            'slug' => 'price-range-right',
            'order' => '64',
            'type' => 'Right Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Color Right',
            'section' => 'Color Right',
            'slug' => 'color-right',
            'order' => '65',
            'type' => 'Right Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Brand Right',
            'section' => 'Brand Right',
            'slug' => 'brand-right',
            'order' => '66',
            'type' => 'Right Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Recent Products Right',
            'section' => 'Recent Products Right',
            'slug' => 'recent-products-right',
            'order' => '67',
            'type' => 'Right Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Popular Posts Right',
            'section' => 'Popular Posts Right',
            'slug' => 'popular-posts-right',
            'order' => '68',
            'type' => 'Right Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Popular Galleries Right',
            'section' => 'Popular Galleries Right',
            'slug' => 'popular-galleries-right',
            'order' => '69',
            'type' => 'Right Side',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Footer Top',
            'section' => 'Footer Top Area',
            'slug' => 'footer-top',
            'order' => '70',
            'type' => 'Footer',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);


        Component::create([
            'name' => 'Footer Middle',
            'section' => 'Footer Middle Area',
            'slug' => 'footer-middle',
            'order' => '71',
            'type' => 'Footer',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Footer Bottom',
            'section' => 'Footer Bottom Area',
            'slug' => 'footer-bottom',
            'order' => '72',
            'type' => 'Footer',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

//news components
        Component::create([
            'name' => 'Order Info',
            'section' => 'Order Info',
            'slug' => 'order-info',
            'order' => '73',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Account Info',
            'section' => 'Account Info',
            'slug' => 'account-info',
            'order' => '74',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Our Services',
            'section' => 'Our Services',
            'slug' => 'our-services',
            'order' => '77',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Search Order',
            'section' => 'Search Order',
            'slug' => 'search-order',
            'order' => '78',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'My Store',
            'section' => 'My Store',
            'slug' => 'my-store',
            'order' => '79',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Store Info',
            'section' => 'Store Info',
            'slug' => 'store-info',
            'order' => '80',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Store Subscribe',
            'section' => 'Store Subscribe',
            'slug' => 'store-subscribe',
            'order' => '81',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Header Top Bar 1',
            'section' => 'Header Top Area',
            'slug' => 'header-top-bar-1',
            'image' => 'header-top-bar-1.png',
            'order' => '1',
            'type' => 'Header',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);      

        Component::create([
            'name' => 'Header Middle area 1',
            'section' => 'Header Middle Area',
            'slug' => 'header-middle-area-1',
            'image' => 'header-middle-area-1.png',
            'order' => '2',
            'type' => 'Header',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);

        Component::create([
            'name' => 'Banner Box',
            'section' => 'Content',
            'slug' => 'banner-box',
            'image' => 'banner-box',
            'order' => '2',
            'type' => 'Body',
            'is_editable' => 0,
            'active' => 1,
            'status' => 'Enable',
            'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
            'updated_at' => Carbon\Carbon::now()->toDateTimeString(),    
        ]);



       

        for ($i=1; $i < 81; $i++) 
        {
            DB::table('themes_components')->insert([
                'active' => 1,
                'theme_id' => 1,
                'component_id' => $i,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
            ]);

            DB::table('themes_components')->insert([
                'active' => 1,
                'theme_id' => 2,
                'component_id' => $i,
                'created_at' => Carbon\Carbon::now()->toDateTimeString(),  
                'updated_at' => Carbon\Carbon::now()->toDateTimeString(),  
            ]);

            
        }
    }
}
