<div class="single-widget">
    <h2>Search Order</h2>
    <form  method="POST" action="{{route('view-orders')}}" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="text" name="order_number" id="order_number" placeholder="Enter order number here...." style="width:50%;" required>
        <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
        <p>Get more details about our order...</p>
    </form>
</div>
