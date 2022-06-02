<div class="newsletter-section gray-bg pt-60 pb-80 mt-80">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-xs-12">
                <div class="newsletter">
                    <div class="newsletter-info text-center">
                        <h2 class="newsletter-title">get a newsletter</h2>
                        <p>Make sure that you never miss our interesting news <br class="hidden-xs">by joining our newsletter program.</p>
                    </div>
                    <div class="subcribe clearfix">
                        <form  method="POST" action="{{route('subscribers.register')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <input type="text" name="email" placeholder="Enter your email here..."/>
                            <button class="submit-btn-2 btn-hover-2" type="submit">subcribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>