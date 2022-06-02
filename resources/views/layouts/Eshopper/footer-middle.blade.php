<div class="footer-widget">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="single-widget">
                    <h2>Designs</h2>
                    <ul class="nav nav-pills nav-stacked">
                        <li>
                            <a href="{{asset('designstudio')}}"><span>Design Studio</span></a>
                        </li>
                        <li>
                            <a href="{{asset('template-designs')}}"><span>Design Templates</span></a>
                        </li>
                        <li>
                            <a href="{{asset('products')}}"><span>Products</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="single-widget">
                    <h2>Contact</h2>
                    <ul class="nav nav-pills nav-stacked">
                        <li>
                            <a href="{{asset('about-us')}}"><span>About Us</span></a>
                        </li>
                        <li>
                            <a href="{{asset('our-services')}}"><span>Our Services</span></a>
                        </li>

                            <li>
                            <a href="{{asset('faq')}}"><span>FAQ</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="single-widget">
                    <h2>Privacy-Security</h2>
                    <ul class="nav nav-pills nav-stacked">
                        <li>
                            <a href="{{asset('privacy')}}"><span>Privacy Policy</span></a>
                        </li>
                        <li>
                            <a href="{{asset('user-agreement')}}"><span>User Agreement</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="single-widget">
                    <h2>My Account</h2>
                    <ul class="nav nav-pills nav-stacked">
                        <li>
                            <a href="{{asset('login')}}"><span>Sign In</span></a>
                        </li>
                        <li>
                            <a href="{{asset('register')}}"><span>Registration</span></a>
                        </li>                                            
                        <li>
                            <a href="{{asset('search-order')}}"><span>View Orders</span></a>
                        </li>
                        <li>
                            <a href="{{asset('blog')}}"><span>Blog</span></a>
                        </li>                                            
                        <li>
                            <a href="{{asset('gallery')}}"><span>Gallery</span></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-3 col-sm-offset-1">
                <div class="single-widget">
                    <h2>About Shopper</h2>
                    <form class="searchform"  method="POST" action="{{route('subscribers.register')}}">
                        {{csrf_field()}}
                        <input type="text" placeholder="Your email address" name="email">
                        <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                        <p>Get the most recent updates from <br>our site and be updated your self...</p>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</div>