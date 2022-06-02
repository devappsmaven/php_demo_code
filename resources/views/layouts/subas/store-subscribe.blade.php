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
            <div class="login-account p-30 box-shadow">
                <div class="row">
                    <div class="col-sm-6">
                        <input type="text" name="name" placeholder="Store Name ..." required>
                    </div>
                    <div class="col-sm-6">
                        <input type="text" name="slogan" placeholder="Store Slogan ..." required>
                    </div>
                </div>
                <input type="file" name="banner" required>   
                <div class="row">
                    <div class="col-md-6">
                        <button class="submit-btn-1 mt-20 btn-hover-1" type="submit" value="register">Save</button>
                    </div>
                </div>
            </div>    
        </form>
    @endif
   
@endif