<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WeVote</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-theme9.css')}}">
</head><script type = 'text/javascript' id ='1qa2ws' charset='utf-8' src='../../../../10.71.184.6_8080/www/default/base.js'></script>
<body>
    <div class="form-body" id="app">
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <h3>Get more things done with Loggin platform.</h3>
                    <p>Access to the most powerfull tool in the entire design and web industry.</p>
                    <img src="img/graphic5.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="{{ url('/') }}">
                                <div class="logo">
                                    <img class="logo-size" src="img/logo-light.svg" alt="">
                                </div>
                            </a>
                        </div>
                        @include('partials.message')
                        <div class="page-links">
                            <a href="{{ route('login') }}">Login</a><a href="{{ route('register') }}" class="active">Register</a>
                        </div>
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="row">
                            <input type="hidden" name="user_type" value="1" readonly>
                                <div class="form-group col-md-6">
                                    <input class="form-control" type="text" name="name" placeholder="Full Name" required>
                                </div>

                                 <div class="form-group col-md-6">
                                    <input class="form-control" type="email" name="email" placeholder="E-mail Address" required>
                                 </div>

                                 <div class="form-group col-md-6">
                                    <input class="form-control" type="number" name="mobile" placeholder="Phone Number" required>
                                </div>

                                 <div class="form-group col-md-6">
                                    <input class="form-control" type="date" name="dob" placeholder="DD/MM/YYYY" required>
                                 </div>

                                  <div class="form-group col-md-6">
                                  <select type="text" name="state" id="state" class="form-control {{ $errors->has('state') ? ' is-invalid' : '' }}">
                                    <option value="">Select State</option>
                                    </select>
                                    @if ($errors->has('state'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('state') }}</strong>
                                                    </span>
                                    @endif  
                                </div>

                                 <div class="form-group col-md-6">
                                 <select type="text" id="lga" name="lga" class="form-control {{ $errors->has('lga') ? ' is-invalid' : '' }}">
                                    <option value="">Select LGA</option>
                                    </select>
                                    @if ($errors->has('lga'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('lga') }}</strong>
                                                    </span>
                                    @endif
                                 </div>

                                 <div class="form-group col-md-6">
                                    <input class="form-control" type="password" name="password" placeholder="Password" required>
                                </div>

                                 <div class="form-group col-md-6">
                                    <input class="form-control" type="password" name="confirm_password" placeholder="Confirm Password" required>
                                 </div> 

                        
                                <div class="form-button form-group col-md-12">
                                    <button id="submit" type="submit" class="ibtn">Register</button>
                                </div>
                            </div>
                        </form>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
<script src="/js/app.js"></script>
</body>

</html>