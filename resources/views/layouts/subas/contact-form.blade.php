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
                                        <h6>First Name</h6>
                                        <input type="text" name="firstname" id="firstname" placeholder="Your firstname here">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                                        <h6>Last Name</h6>
                                        <input type="text" name="lastname" id="lastname"  placeholder="Your lastname here">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <h6>Email</h6>
                                        <input type="text" name="email"  id="email" placeholder="Your email here">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                        <h6>Phone</h6>
                                        <input class="input-phone" type="text" id="phone" name="phone"  placeholder="Your phone here" >
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
                                        <h6>Subject</h6>
                                        <input type="text" name="subject" placeholder="Subject here">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group{{ $errors->has('files') ? ' has-error' : '' }}">
                                        <h6>Attach files</h6>
                                        <input type="file" id="file" name="file[]" multiple="multiple"/>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <textarea class="custom-textarea" name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <div class="g-recaptcha" data-sitekey="6LcGJ8cUAAAAAEg6rOuYyBEimN7yvpmvUzrwJMTU"></div>
                                </div>
                                <div class="col-md-12">
                                    <button class="submit-btn-1 mt-30 btn-hover-1" type="submit">submit message</button>
                                </div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>