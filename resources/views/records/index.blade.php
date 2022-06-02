@extends('layouts.admin')
@section('title','Record History')
@section('pagename','Record History')
@section('menuname','Record History')
@section('content')
@guest

@endguest
<div class="pad margin no-print">
    <form action="{{URL::current()}}">
        <div class="row">
            <div class="col-sm-2">
                <div class="form-group">
                    <h1>Filters</h1>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>Operation</label>
                    <select class="form-control select2" name="eventfilter" id="eventfilter">
                        @if(isset($_GET['eventfilter']) && $_GET['eventfilter'] == 'All')
                            <option value="All" selected>All</option>
                        @else
                            <option value="All">All</option>
                        @endif
                        @if(isset($_GET['eventfilter']) && $_GET['eventfilter'] == 'created')
                            <option value="created" selected>Created</option>
                        @else
                            <option value="created">Created</option>
                        @endif
                        @if(isset($_GET['eventfilter']) && $_GET['eventfilter'] == 'updated')
                            <option value="updated" selected>Updated</option>
                        @else
                            <option value="updated">Updated</option>
                        @endif
                        @if(isset($_GET['eventfilter']) && $_GET['eventfilter'] == 'deleted')
                            <option value="deleted" selected>Deleted</option>
                        @else
                            <option value="deleted">deleted</option>
                        @endif
                        @if(isset($_GET['eventfilter']) && $_GET['eventfilter'] == 'restored')
                            <option value="restored" selected>Restored</option>
                        @else
                            <option value="restored">Restored</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>User</label>
                        <select class="form-control select2" name="userfilter" id="userfilter">
                            @php
                                if(isset($_GET['eventfilter']) && $_GET['eventfilter'] == 'All')
                                   echo '<option value="All" selected>All</option>';
                                else
                                    echo '<option value="All" >All</option>';
                            @endphp
                            @foreach ($users as $user)
                                @if(isset($_GET['userfilter']) && $_GET['userfilter'] == $user->id)
                                    <option value="{{$user->id}}" selected>{{$user->firstname}} {{$user->lastname}}</option>
                                @else
                                    <option value="{{$user->id}}">{{$user->firstname}} {{$user->lastname}}</option>
                                @endif
                            @endforeach
                    </select>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="form-group">
                    <label>Objects</label>
                    <select class="form-control select2" name="objectfilter" id="objectfilter">
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'All')
                                <option value="All" selected>All</option>
                            @else
                                <option value="All">All</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'AditionalImage')
                                <option value="AditionalImage" selected>Aditional Image</option>
                            @else
                                <option value="AditionalImage">Aditional Image</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Brand')
                                <option value="Brand" selected>Brand</option>
                            @else
                                <option value="Brand">Brand</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Cart')
                                <option value="Cart" selected>Cart</option>
                            @else
                                <option value="Cart">Cart</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Category')
                                <option value="Category" selected>Category</option>
                            @else
                                <option value="Category">Category</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Clipart')
                                <option value="Clipart" selected>Clipart</option>
                            @else
                                <option value="Clipart">Clipart</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'ClipartCategory')
                                <option value="ClipartCategory" selected>Clipart Category</option>
                            @else
                                <option value="ClipartCategory">Clipart Category</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'ClipartSubCategory')
                                <option value="ClipartSubCategory" selected>Clipart SubCategory</option>
                            @else
                                <option value="ClipartSubCategory">Clipart SubCategory</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Color')
                                <option value="Color" selected>Color</option>
                            @else
                                <option value="Color">Color</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Comment')
                                <option value="Comment" selected>Comment</option>
                            @else
                                <option value="Comment">Comment</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Component')
                                <option value="Component" selected>Component</option>
                            @else
                                <option value="Component">Component</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Configuration')
                                <option value="Configuration" selected>Configuration</option>
                            @else
                                <option value="Configuration">Configuration</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'ContactEmail')
                                <option value="ContactEmail" selected>ContactEmail</option>
                            @else
                                <option value="ContactEmail">ContactEmail</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Design')
                                <option value="Design" selected>Design</option>
                            @else
                                <option value="Design">Design</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'DesignSize')
                                <option value="DesignSize" selected>Design Size</option>
                            @else
                                <option value="DesignSize">Design Size</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Font')
                                <option value="Font" selected>Font</option>
                            @else
                                <option value="Font">Font</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'FontCategory')
                                <option value="FontCategory" selected>Font Category</option>
                            @else
                                <option value="FontCategory">Font Category</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Gallery')
                                <option value="Gallery" selected>Gallery</option>
                            @else
                                <option value="Gallery">Gallery</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Mailable')
                                <option value="Mailable" selected>Mailable</option>
                            @else
                                <option value="Mailable">Mailable</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Media')
                                <option value="Media" selected>Media</option>
                            @else
                                <option value="Media">Media</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Newsletter')
                                <option value="Newsletter" selected>Newsletter</option>
                            @else
                                <option value="Newsletter">Newsletter</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Object')
                                <option value="Object" selected>Object</option>
                            @else
                                <option value="Object">Object</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'OpenCart')
                                <option value="OpenCart" selected>OpenCart</option>
                            @else
                                <option value="OpenCart">OpenCart</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Order')
                                <option value="Order" selected>Order</option>
                            @else
                                <option value="Order">Order</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Page')
                                <option value="Page" selected>Page</option>
                            @else
                                <option value="Page">Page</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Post')
                                <option value="Post" selected>Post</option>
                            @else
                                <option value="Post">Post</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'PriceDiscountTable')
                                <option value="PriceDiscountTable" selected>Price Discount Table</option>
                            @else
                                <option value="PriceDiscountTable">Price Discount Table</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'PricePersonalizeTable')
                                <option value="PricePersonalizeTable" selected>Price Personalize Table</option>
                            @else
                                <option value="PricePersonalizeTable">Price  Personalize Table</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'PriceShirt')
                                <option value="PriceShirt" selected>Price Shirt</option>
                            @else
                                <option value="PriceShirt">Price Shirt</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'PriceShirtTable')
                                <option value="PriceShirtTable" selected>Price Shirt able</option>
                            @else
                                <option value="PriceShirtTable">Price Shirt Table</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'PriceShirtTableTmp')
                                <option value="PriceShirtTableTmp" selected>Price Shirt Table Tmp</option>
                            @else
                                <option value="PriceShirtTableTmp">Price Shirt Table Tmp</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Product')
                                <option value="Product" selected>Product</option>
                            @else
                                <option value="Product">Product</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'PromoCode')
                                <option value="PromoCode" selected>PromoCode</option>
                            @else
                                <option value="PromoCode">PromoCode</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Rating')
                                <option value="Rating" selected>Rating</option>
                            @else
                                <option value="Rating">Rating</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'RelatedProduct')
                                <option value="RelatedProduct" selected>Related Product</option>
                            @else
                                <option value="RelatedProduct">Related Product</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'ReserverdWord')
                                <option value="ReserverdWord" selected>Reserverd Word</option>
                            @else
                                <option value="ReserverdWord">Reserverd Word</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Side')
                                <option value="Side" selected>Side</option>
                            @else
                                <option value="Side">Side</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Size')
                                <option value="Size" selected>Size</option>
                            @else
                                <option value="Size">Size</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'SizeChart')
                                <option value="SizeChart" selected>SizeChart</option>
                            @else
                                <option value="SizeChart">SizeChart</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'SubCategory')
                                <option value="SubCategory" selected>SubCategory</option>
                            @else
                                <option value="SubCategory">SubCategory</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Subscribe')
                                <option value="Subscribe" selected>Subscribe</option>
                            @else
                                <option value="Subscribe">Subscribe</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Tag')
                                <option value="Tag" selected>Tag</option>
                            @else
                                <option value="Tag">Tag</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'Theme')
                                <option value="Theme" selected>Theme</option>
                            @else
                                <option value="Theme">Theme</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'User')
                                <option value="User" selected>User</option>
                            @else
                                <option value="User">User</option>
                            @endif
                            @if(isset($_GET['objectfilter']) && $_GET['objectfilter'] == 'VerifyUser')
                                <option value="VerifyUser" selected>Verify User</option>
                            @else
                                <option value="VerifyUser">Verify User</option>
                            @endif
                        </select>
                </div>
            </div>
            
            <div class="col-sm-2">
                <div class="form-group">
                    <label>Date range button:</label>
                    <div class="input-group">
                    <input class="btn btn-default pull-right" name="daterangefilter" id="daterangefilter" placeholder="Select your interval dates" value="@if(isset($_GET['daterangefilter'])) {{$_GET['daterangefilter']}}@endif">
                    </div>
                </div>
            </div>

            <div class="col-sm-2">
                    <div class="form-group">
                        <label>Apply</label>
                        <div class="">
                                <button class="btn btn-block btn-success btn-sm">Apply</button>
                        </div>
                    </div>
                </div>
        </div>
    </form>
</div>
<div  style="overflow:scroll; height:700px;">
    <ul class="timeline timeline-inverse">
        @foreach ($records as $record)
            <li class="time-label">
                @if($record->event === 'created')
                    <span class="bg-green">
                        {{$record->created_at->format('l jS \\of F Y h:i:s A')}}
                    </span>
                @elseif($record->event === 'updated')
                    <span class="bg-yellow">
                        {{$record->created_at->format('l jS \\of F Y h:i:s A')}}
                    </span>
                @elseif($record->event === 'deleted')
                    <span class="bg-red">
                        {{$record->created_at->format('l jS \\of F Y h:i:s A')}}
                    </span>
                @else
                    <span class="bg-blue">
                        {{$record->created_at->format('l jS \\of F Y h:i:s A')}}
                    </span>
                @endif
            </li>
            {{$record->auditable_type}}
            <li>
                @if($record->auditable_type === 'App\AditionalImage')
                    <i class="fa fa-picture"></i>
                @elseif($record->auditable_type === 'App\Brand')
                    <i class="fa fa-shirtsinbulk"></i>
                @elseif($record->auditable_type === 'App\Cart')
                    <i class="fa fa-shopping-cart"></i>
                @elseif($record->auditable_type === 'App\Category')
                    <i class="fa fa-sort-amount-asc"></i>
                @elseif($record->auditable_type === 'App\Clipart')
                    <i class="fa fa-picture-o"></i>
                @elseif($record->auditable_type === 'App\ClipartCategory')
                    <i class="fa fa-picture-o"></i>
                @elseif($record->auditable_type === 'App\ClipartSubCategory')
                    <i class="fa fa-picture-o"></i>
                @elseif($record->auditable_type === 'App\Color')
                    <i class="fa fa-paint-brush"></i>  
                @elseif($record->auditable_type === 'App\Comment')
                    <i class="fa fa-commenting"></i>    
                @elseif($record->auditable_type === 'App\Component')
                    <i class="fa fa-bookmark-o"></i>   
                @elseif($record->auditable_type === 'App\Configuration')
                    <i class="fa fa-gear"></i>     
                @elseif($record->auditable_type === 'App\ContactEmail')
                    <i class="fa fa-envelope-square"></i>        
                @elseif($record->auditable_type === 'App\Design')
                    <i class="fa fa-pie-chart"></i>      
                @elseif($record->auditable_type === 'App\DesignSize')
                    <i class="fa fa-pie-chart"></i> 
                @elseif($record->auditable_type === 'App\Font')
                    <i class="fa fa-font"></i>
                @elseif($record->auditable_type === 'App\FontCategory')
                    <i class="fa fa-fonticons"></i>
                @elseif($record->auditable_type === 'App\Gallery')
                    <i class="fa fa-newspaper-o"></i>
                @elseif($record->auditable_type === 'App\Mailable')
                    <i class="fa fa-envelope"></i>
                @elseif($record->auditable_type === 'App\Media')
                    <i class="fa fa-image"></i>
                @elseif($record->auditable_type === 'App\Newsletter')
                    <i class="fa fa-envelope"></i>
                @elseif($record->auditable_type === 'App\Object')
                    <i class="fa fa-object-group"></i>
                @elseif($record->auditable_type === 'App\OpenCart')
                    <i class="fa fa-heartbeat"></i>
                @elseif($record->auditable_type === 'App\Order')
                    <i class="fa fa-server"></i>
                @elseif($record->auditable_type === 'App\Order')
                    <i class="fa fa-server"></i>
                @elseif($record->auditable_type === 'App\Page')
                    <i class="fa fa-chrome"></i>
                @elseif($record->auditable_type === 'Caffeinated\Shinobi\Models\Permissions')
                    <i class="fa fa-lock"></i>
                @elseif($record->auditable_type === 'App\Post')
                    <i class="fa fa-newspaper-o"></i>
                @elseif($record->auditable_type === 'App\PriceDiscountTable')
                    <i class="fa fa-table"></i>
                @elseif($record->auditable_type === 'App\PricePersonalizeTable')
                    <i class="fa fa-table"></i>
                @elseif($record->auditable_type === 'App\PriceShirtTable')
                    <i class="fa fa-table"></i>
                @elseif($record->auditable_type === 'App\PriceShirtTable')
                    <i class="fa fa-table"></i>
                @elseif($record->auditable_type === 'App\PriceShirtTableTmp')
                    <i class="fa fa-table"></i>
                @elseif($record->auditable_type === 'App\Product')
                    <i class="ion ion-tshirt"></i>
                @elseif($record->auditable_type === 'App\PromoCode')
                    <i class="fa fa-qrcode"></i>
                @elseif($record->auditable_type === 'App\Rating')
                    <i class="fa fa-star-half-o"></i>
                @elseif($record->auditable_type === 'App\RelatedProduct')
                    <i class="ion ion-tshirt"></i>
                @elseif($record->auditable_type === 'App\ReservedWord')
                    <i class="fa fa-file-word-o"></i>
                @elseif($record->auditable_type === 'Caffeinated\Shinobi\Models\Role')
                    <i class="fa fa-users"></i>
                @elseif($record->auditable_type === 'App\Side')
                    <i class="fa fa-gg"></i>
                @elseif($record->auditable_type === 'App\Size')
                    <i class="fa fa-arrows"></i>
                @elseif($record->auditable_type === 'App\SizeChart')
                    <i class="fa fa-arrows"></i>
                @elseif($record->auditable_type === 'App\SubCategory')
                    <i class="fa fa-sort-amount-desc"></i>
                @elseif($record->auditable_type === 'App\Subscriber')
                    <i class="fa fa-envelope"></i>
                @elseif($record->auditable_type === 'App\Tag')
                    <i class="fa fa-tags"></i>
                @elseif($record->auditable_type === 'App\Theme')
                    <i class="fa fa-building-o"></i>
                @elseif($record->auditable_type === 'App\User')
                    <i class="fa fa-user"></i>
                @elseif($record->auditable_type === 'App\VerifyUser')
                    <i class="fa fa-user"></i>
                @endif
                <div class="timeline-item">
                    <span class="time"><i class="fa fa-clock-o"></i> {{$record->created_at->diffForHumans()}}</span>
                    <h3 class="timeline-header"><a href="{{route('users.show', $record->user_id)}}">{{$record->user->firstname}} {{$record->user->lastname}} </a>
                        @if($record->event === 'created') 
                            <span class="label label-success">create new </span>
                            @if($record->auditable_type === 'App\AditionalImage')
                                <b class="description-header"> Aditional Image</b>
                            @elseif($record->auditable_type === 'App\Brand')
                                <b class="description-header"> Brand</b>
                            @elseif($record->auditable_type === 'App\Cart')
                                <b class="description-header"> Cart</b>
                            @elseif($record->auditable_type === 'App\Category')
                                <b class="description-header"> Category</b>
                            @elseif($record->auditable_type === 'App\Clipart')
                                <b class="description-header"> Clipart</b>
                            @elseif($record->auditable_type === 'App\ClipartCategory')
                                <b class="description-header"> Clipart Category</b>
                            @elseif($record->auditable_type === 'App\ClipartSubCategory')
                                <b class="description-header"> Clipart Sub Category</b>
                            @elseif($record->auditable_type === 'App\Color')
                                <b class="description-header"> Color</b>
                            @elseif($record->auditable_type === 'App\Comment')
                                <b class="description-header"> Comment</b>
                            @elseif($record->auditable_type === 'App\Component')
                                <b class="description-header"> Component</b>
                            @elseif($record->auditable_type === 'App\Configuration')
                                <b class="description-header"> Configuration</b>
                            @elseif($record->auditable_type === 'App\ContactEmail')
                                <b class="description-header">Contact Email</b>
                            @elseif($record->auditable_type === 'App\Design')
                                <b class="description-header"> Design</b>
                            @elseif($record->auditable_type === 'App\DesignSize')
                                <b class="description-header"> Design Size</b>
                            @elseif($record->auditable_type === 'App\Font')
                                <b class="description-header"> Font</b>
                            @elseif($record->auditable_type === 'App\FontCategory')
                                <b class="description-header"> Font Category</b>
                            @elseif($record->auditable_type === 'App\Gallery')
                                <b class="description-header"> Gallery</b>
                            @elseif($record->auditable_type === 'App\Mailable')
                                <b class="description-header">Mailable</b>
                            @elseif($record->auditable_type === 'App\Media')
                                <b class="description-header"> Media</b>
                            @elseif($record->auditable_type === 'App\Newsletter')
                                <b class="description-header"> Newsletter</b>    
                            @elseif($record->auditable_type === 'App\Object')
                                <b class="description-header"> Object</b>      
                            @elseif($record->auditable_type === 'App\OpenCart')
                                <b class="description-header"> OpenCart</b>      
                            @elseif($record->auditable_type === 'App\Order')
                                <b class="description-header"> Order</b>  
                            @elseif($record->auditable_type === 'App\Page')
                                <b class="description-header"> Page</b>  
                            @elseif($record->auditable_type === 'App\Post')
                                <b class="description-header"> Post</b> 
                            @elseif($record->auditable_type === 'App\Newsletter')
                                <b class="description-header"> Newsletter</b>  
                            @elseif($record->auditable_type === 'App\PriceDiscountTable')
                                <b class="description-header"> Price Discount Table</b>   
                            @elseif($record->auditable_type === 'App\PricePersonalizeTable')
                                <b class="description-header"> Price Personalize Table</b>
                            @elseif($record->auditable_type === 'App\PriceShirt')
                                <b class="description-header"> Price Shirt</b>
                            @elseif($record->auditable_type === 'App\PriceShirtTable')
                                <b class="description-header"> Price Shirt Table</b>
                            @elseif($record->auditable_type === 'App\PriceShirtTableTmp')
                                <b class="description-header"> Price Shirt Table Tmp</b>
                            @elseif($record->auditable_type === 'App\Product')
                                <b class="description-header"> Product</b>
                            @elseif($record->auditable_type === 'App\PromoCode')
                                <b class="description-header"> Promo Code</b>
                            @elseif($record->auditable_type === 'App\Rating')
                                <b class="description-header"> Rating</b>
                            @elseif($record->auditable_type === 'App\RelatedProduct')
                                <b class="description-header"> Related Product</b>   
                            @elseif($record->auditable_type === 'App\ReservedWord')
                                <b class="description-header"> Reserved Word</b>      
                            @elseif($record->auditable_type === 'App\Side')
                                <b class="description-header"> Side</b>                                          
                            @elseif($record->auditable_type === 'App\Size')
                                <b class="description-header"> Size</b>
                            @elseif($record->auditable_type === 'App\SizeChart')
                                <b class="description-header"> SizeChart</b>
                            @elseif($record->auditable_type === 'App\SubCategory')
                                <b class="description-header"> SubCategory</b>
                            @elseif($record->auditable_type === 'App\Subscriber')
                                <b class="description-header"> Subscriber</b>
                            @elseif($record->auditable_type === 'App\Tag')
                                <b class="description-header"> Tag</b>
                            @elseif($record->auditable_type === 'App\Theme')
                                <b class="description-header"> Theme</b>
                            @elseif($record->auditable_type === 'App\User')
                                <b class="description-header"> User</b>
                            @elseif($record->auditable_type === 'App\VerifyUser')
                                <b class="description-header"> VerifyUser</b>
                            @endif
                        @elseif($record->event === 'updated') 
                            <span class="label label-warning"> update exist </span>
                            @if($record->auditable_type === 'App\AditionalImage')
                                <b class="description-header"> Aditional Image</b>
                            @elseif($record->auditable_type === 'App\Brand')
                                <b class="description-header"> Brand</b>
                            @elseif($record->auditable_type === 'App\Cart')
                                <b class="description-header"> Cart</b>
                            @elseif($record->auditable_type === 'App\Category')
                                <b class="description-header"> Category</b>
                            @elseif($record->auditable_type === 'App\Clipart')
                                <b class="description-header"> Clipart</b>
                            @elseif($record->auditable_type === 'App\ClipartCategory')
                                <b class="description-header"> Clipart Category</b>
                            @elseif($record->auditable_type === 'App\ClipartSubCategory')
                                <b class="description-header"> Clipart Sub Category</b>
                            @elseif($record->auditable_type === 'App\Color')
                                <b class="description-header"> Color</b>
                            @elseif($record->auditable_type === 'App\Comment')
                                <b class="description-header"> Comment</b>
                            @elseif($record->auditable_type === 'App\Component')
                                <b class="description-header"> Component</b>
                            @elseif($record->auditable_type === 'App\Configuration')
                                <b class="description-header"> Configuration</b>
                            @elseif($record->auditable_type === 'App\ContactEmail')
                                <b class="description-header">Contact Email</b>
                            @elseif($record->auditable_type === 'App\Design')
                                <b class="description-header"> Design</b>
                            @elseif($record->auditable_type === 'App\DesignSize')
                                <b class="description-header"> Design Size</b>
                            @elseif($record->auditable_type === 'App\Font')
                                <b class="description-header"> Font</b>
                            @elseif($record->auditable_type === 'App\FontCategory')
                                <b class="description-header"> Font Category</b>
                            @elseif($record->auditable_type === 'App\Gallery')
                                <b class="description-header"> Gallery</b>
                            @elseif($record->auditable_type === 'App\Mailable')
                                <b class="description-header">Mailable</b>
                            @elseif($record->auditable_type === 'App\Media')
                                <b class="description-header"> Media</b>
                            @elseif($record->auditable_type === 'App\Newsletter')
                                <b class="description-header"> Newsletter</b>    
                            @elseif($record->auditable_type === 'App\Object')
                                <b class="description-header"> Object</b>      
                            @elseif($record->auditable_type === 'App\OpenCart')
                                <b class="description-header"> OpenCart</b>      
                            @elseif($record->auditable_type === 'App\Order')
                                <b class="description-header"> Order</b>  
                            @elseif($record->auditable_type === 'App\Page')
                                <b class="description-header"> Page</b>  
                            @elseif($record->auditable_type === 'App\Post')
                                <b class="description-header"> Post</b> 
                            @elseif($record->auditable_type === 'App\Newsletter')
                                <b class="description-header"> Newsletter</b>  
                            @elseif($record->auditable_type === 'App\PriceDiscountTable')
                                <b class="description-header"> Price Discount Table</b>   
                            @elseif($record->auditable_type === 'App\PricePersonalizeTable')
                                <b class="description-header"> Price Personalize Table</b>
                            @elseif($record->auditable_type === 'App\PriceShirt')
                                <b class="description-header"> Price Shirt</b>
                            @elseif($record->auditable_type === 'App\PriceShirtTable')
                                <b class="description-header"> Price Shirt Table</b>
                            @elseif($record->auditable_type === 'App\PriceShirtTableTmp')
                                <b class="description-header"> Price Shirt Table Tmp</b>
                            @elseif($record->auditable_type === 'App\Product')
                                <b class="description-header"> Product</b>
                            @elseif($record->auditable_type === 'App\PromoCode')
                                <b class="description-header"> Promo Code</b>
                            @elseif($record->auditable_type === 'App\Rating')
                                <b class="description-header"> Rating</b>
                            @elseif($record->auditable_type === 'App\RelatedProduct')
                                <b class="description-header"> Related Product</b>   
                            @elseif($record->auditable_type === 'App\ReservedWord')
                                <b class="description-header"> Reserved Word</b>      
                            @elseif($record->auditable_type === 'App\Side')
                                <b class="description-header"> Side</b>                                          
                            @elseif($record->auditable_type === 'App\Size')
                                <b class="description-header"> Size</b>
                            @elseif($record->auditable_type === 'App\SizeChart')
                                <b class="description-header"> SizeChart</b>
                            @elseif($record->auditable_type === 'App\SubCategory')
                                <b class="description-header"> SubCategory</b>
                            @elseif($record->auditable_type === 'App\Subscriber')
                                <b class="description-header"> Subscriber</b>
                            @elseif($record->auditable_type === 'App\Tag')
                                <b class="description-header"> Tag</b>
                            @elseif($record->auditable_type === 'App\Theme')
                                <b class="description-header"> Theme</b>
                            @elseif($record->auditable_type === 'App\User')
                                <b class="description-header"> User</b>
                            @elseif($record->auditable_type === 'App\VerifyUser')
                                <b class="description-header"> VerifyUser</b>
                            @endif
                        @elseif($record->event === 'deleted') 
                            <span class="label label-danger"> delete exist </span>
                            @if($record->auditable_type === 'App\AditionalImage')
                                <b class="description-header"> Aditional Image</b>
                            @elseif($record->auditable_type === 'App\Brand')
                                <b class="description-header"> Brand</b>
                            @elseif($record->auditable_type === 'App\Cart')
                                <b class="description-header"> Cart</b>
                            @elseif($record->auditable_type === 'App\Category')
                                <b class="description-header"> Category</b>
                            @elseif($record->auditable_type === 'App\Clipart')
                                <b class="description-header"> Clipart</b>
                            @elseif($record->auditable_type === 'App\ClipartCategory')
                                <b class="description-header"> Clipart Category</b>
                            @elseif($record->auditable_type === 'App\ClipartSubCategory')
                                <b class="description-header"> Clipart Sub Category</b>
                            @elseif($record->auditable_type === 'App\Color')
                                <b class="description-header"> Color</b>
                            @elseif($record->auditable_type === 'App\Comment')
                                <b class="description-header"> Comment</b>
                            @elseif($record->auditable_type === 'App\Component')
                                <b class="description-header"> Component</b>
                            @elseif($record->auditable_type === 'App\Configuration')
                                <b class="description-header"> Configuration</b>
                            @elseif($record->auditable_type === 'App\ContactEmail')
                                <b class="description-header">Contact Email</b>
                            @elseif($record->auditable_type === 'App\Design')
                                <b class="description-header"> Design</b>
                            @elseif($record->auditable_type === 'App\DesignSize')
                                <b class="description-header"> Design Size</b>
                            @elseif($record->auditable_type === 'App\Font')
                                <b class="description-header"> Font</b>
                            @elseif($record->auditable_type === 'App\FontCategory')
                                <b class="description-header"> Font Category</b>
                            @elseif($record->auditable_type === 'App\Gallery')
                                <b class="description-header"> Gallery</b>
                            @elseif($record->auditable_type === 'App\Mailable')
                                <b class="description-header">Mailable</b>
                            @elseif($record->auditable_type === 'App\Media')
                                <b class="description-header"> Media</b>
                            @elseif($record->auditable_type === 'App\Newsletter')
                                <b class="description-header"> Newsletter</b>    
                            @elseif($record->auditable_type === 'App\Object')
                                <b class="description-header"> Object</b>      
                            @elseif($record->auditable_type === 'App\OpenCart')
                                <b class="description-header"> OpenCart</b>      
                            @elseif($record->auditable_type === 'App\Order')
                                <b class="description-header"> Order</b>  
                            @elseif($record->auditable_type === 'App\Page')
                                <b class="description-header"> Page</b>  
                            @elseif($record->auditable_type === 'App\Post')
                                <b class="description-header"> Post</b> 
                            @elseif($record->auditable_type === 'App\Newsletter')
                                <b class="description-header"> Newsletter</b>  
                            @elseif($record->auditable_type === 'App\PriceDiscountTable')
                                <b class="description-header"> Price Discount Table</b>   
                            @elseif($record->auditable_type === 'App\PricePersonalizeTable')
                                <b class="description-header"> Price Personalize Table</b>
                            @elseif($record->auditable_type === 'App\PriceShirt')
                                <b class="description-header"> Price Shirt</b>
                            @elseif($record->auditable_type === 'App\PriceShirtTable')
                                <b class="description-header"> Price Shirt Table</b>
                            @elseif($record->auditable_type === 'App\PriceShirtTableTmp')
                                <b class="description-header"> Price Shirt Table Tmp</b>
                            @elseif($record->auditable_type === 'App\Product')
                                <b class="description-header"> Product</b>
                            @elseif($record->auditable_type === 'App\PromoCode')
                                <b class="description-header"> Promo Code</b>
                            @elseif($record->auditable_type === 'App\Rating')
                                <b class="description-header"> Rating</b>
                            @elseif($record->auditable_type === 'App\RelatedProduct')
                                <b class="description-header"> Related Product</b>   
                            @elseif($record->auditable_type === 'App\ReservedWord')
                                <b class="description-header"> Reserved Word</b>      
                            @elseif($record->auditable_type === 'App\Side')
                                <b class="description-header"> Side</b>                                          
                            @elseif($record->auditable_type === 'App\Size')
                                <b class="description-header"> Size</b>
                            @elseif($record->auditable_type === 'App\SizeChart')
                                <b class="description-header"> SizeChart</b>
                            @elseif($record->auditable_type === 'App\SubCategory')
                                <b class="description-header"> SubCategory</b>
                            @elseif($record->auditable_type === 'App\Subscriber')
                                <b class="description-header"> Subscriber</b>
                            @elseif($record->auditable_type === 'App\Tag')
                                <b class="description-header"> Tag</b>
                            @elseif($record->auditable_type === 'App\Theme')
                                <b class="description-header"> Theme</b>
                            @elseif($record->auditable_type === 'App\User')
                                <b class="description-header"> User</b>
                            @elseif($record->auditable_type === 'App\VerifyUser')
                                <b class="description-header"> VerifyUser</b>
                            @endif
                        @else
                            <span class="label label-info"> restore non exist </span>
                            @if($record->auditable_type === 'App\AditionalImage')
                                <b class="description-header"> Aditional Image</b>
                            @elseif($record->auditable_type === 'App\Brand')
                                <b class="description-header"> Brand</b>
                            @elseif($record->auditable_type === 'App\Cart')
                                <b class="description-header"> Cart</b>
                            @elseif($record->auditable_type === 'App\Category')
                                <b class="description-header"> Category</b>
                            @elseif($record->auditable_type === 'App\Clipart')
                                <b class="description-header"> Clipart</b>
                            @elseif($record->auditable_type === 'App\ClipartCategory')
                                <b class="description-header"> Clipart Category</b>
                            @elseif($record->auditable_type === 'App\ClipartSubCategory')
                                <b class="description-header"> Clipart Sub Category</b>
                            @elseif($record->auditable_type === 'App\Color')
                                <b class="description-header"> Color</b>
                            @elseif($record->auditable_type === 'App\Comment')
                                <b class="description-header"> Comment</b>
                            @elseif($record->auditable_type === 'App\Component')
                                <b class="description-header"> Component</b>
                            @elseif($record->auditable_type === 'App\Configuration')
                                <b class="description-header"> Configuration</b>
                            @elseif($record->auditable_type === 'App\ContactEmail')
                                <b class="description-header">Contact Email</b>
                            @elseif($record->auditable_type === 'App\Design')
                                <b class="description-header"> Design</b>
                            @elseif($record->auditable_type === 'App\DesignSize')
                                <b class="description-header"> Design Size</b>
                            @elseif($record->auditable_type === 'App\Font')
                                <b class="description-header"> Font</b>
                            @elseif($record->auditable_type === 'App\FontCategory')
                                <b class="description-header"> Font Category</b>
                            @elseif($record->auditable_type === 'App\Gallery')
                                <b class="description-header"> Gallery</b>
                            @elseif($record->auditable_type === 'App\Mailable')
                                <b class="description-header">Mailable</b>
                            @elseif($record->auditable_type === 'App\Media')
                                <b class="description-header"> Media</b>
                            @elseif($record->auditable_type === 'App\Newsletter')
                                <b class="description-header"> Newsletter</b>    
                            @elseif($record->auditable_type === 'App\Object')
                                <b class="description-header"> Object</b>      
                            @elseif($record->auditable_type === 'App\OpenCart')
                                <b class="description-header"> OpenCart</b>      
                            @elseif($record->auditable_type === 'App\Order')
                                <b class="description-header"> Order</b>  
                            @elseif($record->auditable_type === 'App\Page')
                                <b class="description-header"> Page</b>  
                            @elseif($record->auditable_type === 'App\Post')
                                <b class="description-header"> Post</b> 
                            @elseif($record->auditable_type === 'App\Newsletter')
                                <b class="description-header"> Newsletter</b>  
                            @elseif($record->auditable_type === 'App\PriceDiscountTable')
                                <b class="description-header"> Price Discount Table</b>   
                            @elseif($record->auditable_type === 'App\PricePersonalizeTable')
                                <b class="description-header"> Price Personalize Table</b>
                            @elseif($record->auditable_type === 'App\PriceShirt')
                                <b class="description-header"> Price Shirt</b>
                            @elseif($record->auditable_type === 'App\PriceShirtTable')
                                <b class="description-header"> Price Shirt Table</b>
                            @elseif($record->auditable_type === 'App\PriceShirtTableTmp')
                                <b class="description-header"> Price Shirt Table Tmp</b>
                            @elseif($record->auditable_type === 'App\Product')
                                <b class="description-header"> Product</b>
                            @elseif($record->auditable_type === 'App\PromoCode')
                                <b class="description-header"> Promo Code</b>
                            @elseif($record->auditable_type === 'App\Rating')
                                <b class="description-header"> Rating</b>
                            @elseif($record->auditable_type === 'App\RelatedProduct')
                                <b class="description-header"> Related Product</b>   
                            @elseif($record->auditable_type === 'App\ReservedWord')
                                <b class="description-header"> Reserved Word</b>      
                            @elseif($record->auditable_type === 'App\Side')
                                <b class="description-header"> Side</b>                                          
                            @elseif($record->auditable_type === 'App\Size')
                                <b class="description-header"> Size</b>
                            @elseif($record->auditable_type === 'App\SizeChart')
                                <b class="description-header"> SizeChart</b>
                            @elseif($record->auditable_type === 'App\SubCategory')
                                <b class="description-header"> SubCategory</b>
                            @elseif($record->auditable_type === 'App\Subscriber')
                                <b class="description-header"> Subscriber</b>
                            @elseif($record->auditable_type === 'App\Tag')
                                <b class="description-header"> Tag</b>
                            @elseif($record->auditable_type === 'App\Theme')
                                <b class="description-header"> Theme</b>
                            @elseif($record->auditable_type === 'App\User')
                                <b class="description-header"> User</b>
                            @elseif($record->auditable_type === 'App\VerifyUser')
                                <b class="description-header"> VerifyUser</b>
                            @endif
                        @endif
                        </span>
                    </h3>
                    <div class="timeline-body">
                        <div class="row invoice-info">
                            <div class="col-sm-4 invoice-col">
                                <b>Id#: {{$record->id}}</b><br>
                                <b>Model:</b> {{$record->auditable_type}}<br>
                                <b>Operation:</b> {{$record->event}}<br>
                                <b>Date:</b> {{$record->created_at->format('m/d/Y')}}<br>
                                <b>Time:</b> {{$record->created_at->format('h:m:i A')}}<br>
                                <b>From:</b> {{$record->url}}<br>
                                <b>Ip:</b> {{$record->ip_address}}<br>
                                <b>Address:</b> {{$record->user_agent}}
                            </div>
                            <div class="col-sm-4 invoice-col">
                                <small class="label label-success">New Values</small>
                                <address>
                                @if($record->new_values)
                                    @foreach ($record->new_values as $key => $value )
                                        <strong> {{$key}} : </strong> {{$value}} <br>
                                    @endforeach
                                @else
                                    N/A
                                @endif
                                </address>
                            </div>
                            <div class="col-sm-4 invoice-col">
                                <small class="label label-danger">Old Values</small>
                                <address>
                                @if($record->old_values)
                                    @foreach ($record->old_values as $key => $value )
                                        <strong> {{$key}} : </strong> {{$value}} <br>
                                    @endforeach
                                @else
                                    N/A
                                @endif
                                </address>
                            </div>
                            </div>
                        </div>
                    <div class="timeline-footer">
                        <div class="btn-group">
                            <a class="btn btn-primary btn-xs" href="{{route('records.show', $record->id)}}">View Details</a>
                            @can('records.destroy')
                                {!! Form::open(['route' => ['records.destroy', $record->id], 'method'=> 'DELETE'])!!}
                                    <button class="btn btn-xs btn-danger">Remove</button>
                                {!!Form::close()!!}
                            @endcan
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
        <li>
            <i class="fa fa-clock-o bg-gray"></i>
        </li>
    </ul>
</div>

    
@endsection