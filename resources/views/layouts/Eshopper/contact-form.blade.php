<div class="row">  	
    <div class="col-sm-8">
        <div class="contact-form">
            <h2 class="title text-center">EMAIL US</h2>
            <div class="status alert alert-success" style="display: none"></div>
            <form id="main-contact-form" class="contact-form row" name="contact-form" role="form" method="POST" action="{{route('contact.store')}}" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group col-md-6">
                    <input type="text" id="firstname" name="firstname" class="form-control" required="required" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" id="lastname" name="lastname" class="form-control" required="required" placeholder="Last Name">
                </div>
                <div class="form-group col-md-6">
                    <input type="email" name="email" class="form-control" required="required" placeholder="Email">
                </div>
                <div class="form-group col-md-6">
                    <input type="phone" name="phone" class="form-control input-phone" required="required" placeholder="Phone">
                </div>
                <div class="form-group col-md-12">
                    <input type="text" name="subject" class="form-control" required="required" placeholder="Subject">
                </div>
                <div class="col-md-12">
                    <div class="form-group{{ $errors->has('files') ? ' has-error' : '' }}">
                        <h6>Attach files</h6>
                        <input type="file" id="file" name="file[]" multiple="multiple"/>
                    </div>
                </div>
                    <div class="col-md-6">
                    <div class="form-group{{ $errors->has('captcha') ? ' has-error' : '' }}">
                        <h6>Captcha Code</h6>
                        <input type="text" class="form-control" name="captcha" id="captcha"/>
                    </div>
                </div>
                <div class="col-md-6" align="center" style="padding-top: 25px;">
                    <img src="" id="image-captcha" name="image-captcha" onclick=" refreshcaptcha();" />
                </div>
                <div class="form-group col-md-12">
                    <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Your Message Here"></textarea>
                </div>                        
                <div class="form-group col-md-12">
                    <input type="submit" name="submit" class="btn btn-primary pull-right" value="Submit">
                </div>
            </form>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="contact-info">
            <h2 class="title text-center">Contact Info</h2>
            <address>
                <p>VividCustoms</p>
                <p>11119 Neeshaw Dr, Houston TX, 77065</p>
                <p>Texas USA</p>
                <p>Mobile: +2346 17 38 93</p>
                <p>Email: admin@vividcustoms.com</p>
            </address>
            <div class="social-networks">
                <h2 class="title text-center">Social Networking</h2>
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>    			
</div>