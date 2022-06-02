<div class="newsletter-section gray-bg pt-60 pb-80 mt-80">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-12">
                <div class="newsletter">
                    <div class="newsletter-info text-center">
                        <h2 class="newsletter-title">Search Order</h2>
                        <p>Get more details about our order...</p>
                    </div>
                    <div class="subcribe clearfix">
                    <form  method="POST" action="{{route('view-orders')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="text" name="order_number" placeholder="Enter order number here..." required/>
                            <button class="submit-btn-2 btn-hover-2" type="submit">search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>