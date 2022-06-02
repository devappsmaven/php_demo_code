@extends('layouts.admin')
@section('title','Record Details')
@section('pagename','Record Details')
@section('menuname','Record Details')
@section('content')
@guest

@endguest
<div class="pad margin no-print">
    <div class="callout callout-info" style="margin-bottom: 0!important;">
        <h4><i class="fa fa-info"></i> Note:</h4>
        This page has been enhanced for printing. Click the print button at the bottom of the invoice to test.
    </div>
</div>
<section class="invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
        <h2 class="page-header">
                @if($record->auditable_type === 'App\AditionalImage')
                <i class="fa fa-picture bg-blue"></i>
            @elseif($record->auditable_type === 'App\Brand')
                <i class="fa fa-shirtsinbulk bg-blue"></i>
            @elseif($record->auditable_type === 'App\Cart')
                <i class="fa fa-shopping-cart bg-blue"></i>
            @elseif($record->auditable_type === 'App\Category')
                <i class="fa fa-sort-amount-asc bg-blue"></i>
            @elseif($record->auditable_type === 'App\Clipart')
                <i class="fa fa-picture-o"></i>
            @elseif($record->auditable_type === 'App\ClipartCategory')
                <i class="fa fa-picture-o"></i>
            @elseif($record->auditable_type === 'App\ClipartSubCategory')
                <i class="fa fa-picture-o"></i>
            @elseif($record->auditable_type === 'App\Color')
                <i class="fa fa-paint-brush bg-blue"></i>  
            @elseif($record->auditable_type === 'App\Comment')
                <i class="fa fa-commenting bg-blue"></i>    
            @elseif($record->auditable_type === 'App\Component')
                <i class="fa fa-bookmark-o bg-blue"></i>   
            @elseif($record->auditable_type === 'App\Configuration')
                <i class="fa fa-gear bg-blue"></i>     
            @elseif($record->auditable_type === 'App\ContactEmail')
                <i class="fa fa-envelope-square bg-blue"></i>        
            @elseif($record->auditable_type === 'App\Design')
                <i class="fa fa-pie-chart bg-blue"></i>      
            @elseif($record->auditable_type === 'App\DesignSize')
                <i class="fa fa-pie-chart bg-blue"></i> 
            @elseif($record->auditable_type === 'App\Font')
                <i class="fa fa-font bg-blue"></i>
            @elseif($record->auditable_type === 'App\FontCategory')
                <i class="fa fa-fonticons bg-blue"></i>
            @elseif($record->auditable_type === 'App\Gallery')
                <i class="fa fa-newspaper bg-blue"></i>
            @elseif($record->auditable_type === 'App\Mailable')
                <i class="fa fa-envelope bg-blue"></i>
            @elseif($record->auditable_type === 'App\Media')
                <i class="fa fa-image bg-blue"></i>
            @elseif($record->auditable_type === 'App\Newsletter')
                <i class="fa fa-envelope bg-blue"></i>
            @elseif($record->auditable_type === 'App\Object')
                <i class="fa fa-object-group bg-blue"></i>
            @elseif($record->auditable_type === 'App\OpenCart')
                <i class="fa fa-heartbeat bg-blue"></i>
            @elseif($record->auditable_type === 'App\Order')
                <i class="fa fa-server bg-blue"></i>
            @elseif($record->auditable_type === 'App\Order')
                <i class="fa fa-server bg-blue"></i>
            @elseif($record->auditable_type === 'App\Page')
                <i class="fa fa-chrome bg-blue"></i>
            @elseif($record->auditable_type === 'Caffeinated\Shinobi\Models\Permissions')
                <i class="fa fa-lock bg-blue"></i>
            @elseif($record->auditable_type === 'App\Post')
                <i class="fa fa-newspaper bg-blue"></i>
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
                <i class="fa fa-creative-commons"></i>
            @elseif($record->auditable_type === 'App\Rating')
                <i class="fa fa-star-half-o"></i>
            @elseif($record->auditable_type === 'App\RelatedProduct')
                <i class="ion ion-tshirt"></i>
            @elseif($record->auditable_type === 'App\ReserverdWord')
                <i class="fa fa-file-word-o"></i>
            @elseif($record->auditable_type === 'Caffeinated\Shinobi\Models\Role')
                <i class="fa fa-users bg-blue"></i>
            @elseif($record->auditable_type === 'App\Side')
                <i class="fa fa-gg bg-blue"></i>
            @elseif($record->auditable_type === 'App\Size')
                <i class="fa fa-arrows bg-blue"></i>
            @elseif($record->auditable_type === 'App\SizeChart')
                <i class="fa fa-arrows bg-blue"></i>
            @elseif($record->auditable_type === 'App\SubCategory')
                <i class="fa fa-sort-amount-desc bg-blue"></i>
            @elseif($record->auditable_type === 'App\Subscriber')
                <i class="fa fa-envelope bg-blue"></i>
            @elseif($record->auditable_type === 'App\Tag')
                <i class="fa fa-tags bg-blue"></i>
            @elseif($record->auditable_type === 'App\Theme')
                <i class="fa fa-building-o bg-blue"></i>
            @elseif($record->auditable_type === 'App\User')
                <i class="fa fa-user bg-blue"></i>
            @elseif($record->auditable_type === 'App\VerifyUser')
                <i class="fa fa-user bg-blue"></i>
            @endif
            Record id#{{$record->id}}
            <small class="pull-right">Date: {{$record->created_at->format('m/d/Y')}}</small>
        </h2>
        </div><!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">            
            <b>Model:</b> {{$record->auditable_type}}<br>
            <b>Operation:</b> {{$record->event}}<br>
            <b>Date:</b> {{$record->created_at->format('m/d/Y')}}<br>
            <b>Time:</b> {{$record->created_at->format('h:m:i A')}}<br>
            <b>From:</b> {{$record->url}}<br>
            <b>Ip:</b> {{$record->ip_address}}<br>
            <b>Address:</b> {{$record->user_agent}}
            
        </div><!-- /.col -->
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
        </div><!-- /.col -->
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
    <br>
    <div class="row">
        <div class="col-xs-12 table-responsive">
            <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <td>Image</td>    
                    <th>FirstName</th>
                    <th>LastName</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Status</th>
                    <th>Created At</th>
                    <th>Last Update</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">{{$record->user->id}}</th>
                    <td><img src="{{asset('img/profile')}}{{'/'}}{{$record->user->image}}" style="width:50px; height:auto;"></td>
                    <td>{{$record->user->firstname}}</td>
                    <td>{{$record->user->lastname}}</td>
                    <td>{{$record->user->username}}</td>
                    <td>{{$record->user->email}}</td>
                    <td>{{$record->user->phone}}</td>
                    <td><span class="label label-success">Approved</span></td>
                    <td>{{$record->user->created_at->format('m/d/Y h:m:i')}}</td>
                    <td>{{$record->user->updated_at->format('m/d/Y h:m:i')}}</td>
                </tr>
            </tbody>
            </table>
        </div><!-- /.col -->
    </div>
    <div class="row no-print">
        <div class="col-xs-12">
            <a class="btn btn-info pull-right" href="{{route('records.index')}}"> Back to Record List</a>
        </div>
    </div>
</section>
@endsection