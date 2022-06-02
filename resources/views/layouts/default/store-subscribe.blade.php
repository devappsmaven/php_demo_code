<section class="sec-css">
    <div class="container">
        @include('common.alerts')
        <div class="seller-container">
            <div class="row">
                <div class="col-12">
                    <h5 class="mb-4 pt-5">Become A Seller</h5>
                    <form class="form row" action="{{url('stores/register')}}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="form-group col-12">
                            <div class="seller-profile">
                                <img src="{{asset('images/file-uploader.png')}}" class="uploader-img">
                                <div class="upload-btn-wrapper">
                                    <button class="btn upload-btn">Upload Cover Image</button>
                                    <input type="file" name="banner" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-12">
                            <label for="StoreName">Enter Store Name</label>
                            <input type="text" class="form-control" placeholder="Enter Store Name" name="name">

                        </div>
                        <!-- <div class="form-group col-12">
                            <label for="slogan">Enter Slogan</label>
                            <input type="text" class="form-control" placeholder="Enter Slogan" name="slogan">
                        </div> -->
                        <div class="form-group col-12">
                            <label for="StoreDescription">Store Description</label>
                            <textarea class="form-control" rows="3" placeholder="Enter Store Description" name="description"></textarea>
                        </div>
                        <div class="form-group col-12">
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>