@extends('layouts.app')

@section('title','貓咪後台註冊')

@section('content')
<!-- start old register-->

<!-- login area start -->

<div class="login-area">
    <div class="container">
        <div class="login-box ptb--100">
            <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                @csrf
                <div class="login-form-head">
                    <h4>註冊</h4>
                    <p>您好，請註冊以加入我們，獲得更多功能</p>
                </div>
                <div class="login-form-body">
                    <div class="form-gp">
                        <label for="exampleInputName1">名稱</label>
                        <input type="text" id="exampleInputName1" class="{{ $errors->has('name') ? ' is-invalid' : '' }}"
                               name="name" value="{{ old('name') }}" required autofocus>
                        <i class="ti-user"></i>
                        @if ($errors->has('name'))
                            <p class="alert alert-danger" role="alert">
                                <span>{{ $errors->first('name') }}</span>
                            </p>
                        @endif
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputEmail1">電子郵件信箱</label>
                        <input type="email" id="exampleInputEmail1" class="{{ $errors->has('email') ? ' is-invalid' : '' }}"
                               name="email" value="{{ old('email') }}" required>
                        <i class="ti-email"></i>
                        @if ($errors->has('email'))
                            <p class="alert alert-danger" role="alert">
                                <span>{{ $errors->first('email') }}</span>
                            </p>
                        @endif
                    </div>
                    <div class="form-gp" >
                        <label for="isAdmin">權限選項</label><br>

                        <select name="isAdmin" id="isAdmin" class="{{ $errors->has('isAdmin') ? ' is-invalid' : '' }} form-control" style="width:90%; height:45px ;" required>
                            <option value="">請選擇</option>
                            <option value="0">一般會員</option>
                            <option value="1">管理員</option>
                        </select>
                        <i class="fa fa-user"></i>
                        @if ($errors->has('isAdmin'))
                            <p class="alert alert-danger" role="alert">
                                <span>{{ $errors->first('isAdmin') }}</span>
                            </p>
                        @endif
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" id="exampleInputPassword1" class="{{ $errors->has('password') ? ' is-invalid' : '' }}"
                               name="password" required>
                        <i class="ti-lock"></i>
                        @if ($errors->has('password'))
                            <p class="alert alert-danger" role="alert">
                                <span>{{ $errors->first('password') }}</span>
                            </p>
                        @endif
                    </div>
                    <div class="form-gp">
                        <label for="exampleInputPassword2">Confirm Password</label>
                        <input type="password" id="exampleInputPassword2" name="password_confirmation" required>
                        <i class="ti-lock"></i>
                    </div>


                    <div class="form-gp">
                        <div class="custom-file">
                            <label for="inputGroupFile01">Choose file</label>
                        </div>

                        <div class="custom-file">
                            <input type="file"  id="inputGroupFile01" name="profile" accept="img">
                            <i class="fa fa-file-image-o"></i>
                        </div>
                        @if ($errors->has('profile'))
                            <p class="alert alert-danger" role="alert">
                                <span>{{ $errors->first('profile') }}</span>
                            </p>
                        @endif

                    </div>


                    {{csrf_field()}}
                    <div class="submit-btn-area">
                        <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                        <div class="login-other row mt-4">
                            <div class="col-6">
                                <a class="fb-login" href="#">Sign up with <i class="fa fa-facebook"></i></a>
                            </div>
                            <div class="col-6">
                                <a class="google-login" href="#">Sign up with <i class="fa fa-google"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="form-footer text-center mt-5">
                        <p class="text-muted">Already have an account? <a href="{{route('login')}}">Sign in</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- login area end -->
@endsection
