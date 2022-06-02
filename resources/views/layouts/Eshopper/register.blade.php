@include('common.alerts') 
            <h2>New User Signup!</h2>
            <form method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="form-group col-md-6">
                        <label for="firstname" class="col-md-4 col-form-label text-md-right">{{ __('Firstname') }}</label>

                        
                            <input id="firstname" type="text" class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}" name="firstname" value="{{ old('firstname') }}"  autofocus>

                            @if ($errors->has('firstname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('firstname') }}</strong>
                                </span>
                            @endif
                        
                    </div>

                    <div class="form-group col-md-6">
                        <label for="lastname" class="col-md-4 col-form-label text-md-right">{{ __('Lastname') }}</label>

                        
                            <input id="lastname" type="text" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" name="lastname" value="{{ old('lastname') }}"  autofocus>

                            @if ($errors->has('lastname'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('lastname') }}</strong>
                                </span>
                            @endif
                        
                    </div>

                    <div class="form-group col-md-6">
                        <label for="birthday" class="col-md-4 col-form-label text-md-right">{{ __('Birthday') }}</label>

                        
                            <input id="birthday" type="text" class="form-control{{ $errors->has('birthday') ? ' is-invalid' : '' }} input-date" name="birthday" value="{{ old('birthday') }}"  autofocus>

                            @if ($errors->has('birthday'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('birthday') }}</strong>
                                </span>
                            @endif
                        
                    </div>

                    <div class="form-group col-md-6">
                        <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                        
                            <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}"  autofocus>

                            @if ($errors->has('username'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                            @endif
                        
                    </div>

                    

                    <div class="form-group col-md-6">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                        
                            <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" >

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        
                    </div>

                    <div class="form-group col-md-6">
                        <label for="password-confirm" class="col-md-12 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" >
                        
                    </div>

                    <div class="form-group col-md-6">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        
                            <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" >

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        
                    </div>

                    <div class="form-group col-md-6">
                        <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                        
                            <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }} input-phone" name="phone" value="{{ old('phone') }}"  autofocus>

                            @if ($errors->has('phone'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('phone') }}</strong>
                                </span>
                            @endif
                        
                    </div>

                    <div class="form-group col-md-6">
                        <div class="checkbox">
                            <label class="mr-10"> 
                                
                                    <input type="checkbox" name="newsletter">Sign up for our newsletter!
                                
                            </label>
                        </div>
                    </div>

                    <div class="form-group col-md-12">
                        <input type="submit" name="submit" class="btn btn-primary pull-right" value="Register">
                    </div>
                </form>
        