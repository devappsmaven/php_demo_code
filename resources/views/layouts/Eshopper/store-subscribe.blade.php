@if(Auth::user()->has_store)
    @if(Auth::user()->store->status == "Waiting Approval")
        <div class="alert alert-warning"><strong>Your Store is in revision!</strong> We notify to you the more early posible. for now steel navegate <a href="index" class="alert-link">our web site</a></div>
    @else
        <div class="alert alert-info"><strong>Your Store was approved </strong> This <a href="my-store" class="alert-link">link guide to your store</a>, Enjoy</div>
    @endif
@else
    @if(Auth::user()->store)
        @if(Auth::user()->store->status == "Waiting Approval")
            <div class="alert alert-warning"><strong>Your Store is in revision!</strong> We notify to you the more early posible. for now steel navegate <a href="index" class="alert-link">our web site</a></div>
        @elseif(Auth::user()->store->status == "Approved")
            <div class="alert alert-info"><strong>Your Store was approved </strong> This <a href="my-store" class="alert-link">link guide to your store</a>, Enjoy</div>
        @endif
    @else
        <div class="row">
            <div class="col-md-12">
                <div class="section-title  text-center mb-40">
                    <h2 class="uppercase mb-30">Subscribe your Store</h2>
                </div>
            </div>
        </div>
        <form method="POST" action="{{ route('stores.register') }}"  enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
                <div class="form-group col-md-6">
                    <h6>Name</h6>
                    <input type="text" id="name" name="name" class="form-control" required="required" placeholder="Store Name">
                </div>
                <div class="form-group col-md-6">
                    <h6>Slogan</h6>
                    <input type="text" id="slogan" name="slogan" class="form-control" required="required" placeholder="Store Slogan">
                </div>
                <div class="form-group col-md-6">
                    <h6>Banner</h6>
                    <input type="file" name="banner" class="form-control" required="required">
                </div>
                <div class="form-group col-md-12">
                    <input type="submit" name="submit" class="btn btn-primary pull-right" value="Save">
                </div>
            </div>    
        </form>
    @endif
@endif