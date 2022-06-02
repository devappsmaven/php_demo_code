<div class="row">
  <div class="col-sm-2 product_sidebar">
  </div>
  <div class="col-sm-8 product_sidebar ">
  <div class="message-box-section mt--50 mb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="message-box box-shadow white-bg">
                        <form role="form" method="POST" action="{{route('contact.store')}}" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="blog-section-title border-left mb-30">EMAIL US</h4>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('firstname') ? ' has-error' : '' }}">
                                        <label>First Name</label>
                                        <input type="text" name="firstname" id="firstname" placeholder="Your firstname here" style="border: 1px solid #0e0e0e ; width: 100%;">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                        <label>Last Name</label>
                                        <input type="text" name="lastname" id="lastname"  placeholder="Your lastname here" style="border: 1px solid #0e0e0e ; width: 100%;">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <label>Email</label>
                                        <input type="text" name="email"  id="email" placeholder="Your email here" style="border: 1px solid #0e0e0e ; width: 100%;">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                        <label>Phone</label>
                                        <input class="input-phone" type="text" id="phone" name="phone"  placeholder="Your phone here" style="border: 1px solid #0e0e0e ; width: 100%;">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                                        <label>Subject</label>
                                        <input type="text" name="subject" placeholder="Subject here" style="border: 1px solid #0e0e0e ; width: 100%;">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('files') ? ' has-error' : '' }}">
                                        <label>Attach files</label>
                                        <input type="file" id="file" name="file[]" multiple="multiple"/>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <textarea class="custom-textarea" name="message" placeholder="Message" style="border: 1px solid #0e0e0e ; width: 100%; height: 110px;"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <div class="g-recaptcha" data-sitekey="6LcGJ8cUAAAAAEg6rOuYyBEimN7yvpmvUzrwJMTU"></div>
                                </div>
                                <div class="col-md-12">
                                    <button class="submit-btn-1 mt-30 btn-hover-1" type="submit"  style="cursor: pointer; text-transform: uppercase; text-decoration: none;font-size: 1em;background-color: #E63D90;border-color: #E63D90;color: #fff;font-weight: 500;padding: 10px;text-align: center;">submit message</button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
  <div class="col-sm-2 product_sidebar">
  </div>
</div>
