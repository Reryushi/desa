@extends('layouts.login-regis')

@section('content')
    <div class="inn-body-section pad-bot-55 custom-bg-login">
        <div class="container">
            <div class="row">
                
                <!--TYPOGRAPHY SECTION-->
                <div class="col-md-offset-2 col-md-8 ">
                    <!-- <div class="head-typo typo-com collap-expand inn-com-form2 custom-bg-card "> -->
                    <div class="head-typo collap-expand inn-com-form2">
                    <div class="page-head">
                    <br>
                    <h2 style="color:#1c87d8">Gunung Katun Tanjungan</h2>
                    <a href="/"><img src="{{ asset("front/images/logo/logo-tiyuh.png") }}" width="200px" alt="" style="padding-right:15px"/></a>
                    <div class="head-title">
                        <div class="hl-1"></div>
                        <div class="hl-2"></div>
                        <div class="hl-3"></div>
                        <br><br>
                        
                    </div>
                
                        <form class="col s12 " method="POST" action="{{ route('login') }}" style="background-image: url('front/images/background/card.jpg');">
                            @csrf
                            <div class="row ">
                                <div class="input-field col s12 ">
                                    <input name="nik" type="text"
                                           class="validate {{ $errors->has('nik') ? ' invalid' : '' }}" value="{{ old('nik') }}" required>
                                    <label>NIK</label>
                                    @if ($errors->has('nik'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('nik') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input name="password" type="password"
                                           class="validate {{ $errors->has('password') ? ' invalid' : '' }}" required>
                                    <label>Password</label>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input name="remember" type="checkbox" id="test5" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="test5" style="padding: 1px 20px; font-size:10px;">Remember</label>
                                    @if ($errors->has('remember'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('remember') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                <!-- <div class="input-field col s6">
                                    <a class="btn btn-link" style="font-size:10px" href="{{ route('password.request') }}">
                                        Forget Your<br> Password
                                    </a>
                                </div> -->
                            </div>
                            <div class="row">
                                <div class="input-field col s12" >
                                    <input style="background-color:#1c87d8" type="submit" value="login">
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                <a class="" href="/" style="color:#1c87d8">
                                        Back
                                    </a>
                                </div>
                                <div class="input-field col s6">
                                    <a class="" href="/register" style="color:#1c87d8">
                                        Register
                                    </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--END TYPOGRAPHY SECTION-->
            </div>
        </div>
    </div>
@endsection
