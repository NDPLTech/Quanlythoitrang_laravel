@extends('layouts')

@section('styles')
    <link rel="stylesheet" href="{{ asset('public/auth/style.css') }}">
@endsection



@section('content')
    @if (session('message'))
    <div class="alert alert-error icons-alert" role="alert">
        <li style="display: block">{{ session('message') }}</li>
    </div>
    @endif

    <main>
        <div class="box">
            <div class="inner-box">
                <div class="forms-wrap">
                    {{-- form đăng nhập --}}
                    <form action="{{ route('client.postAuthLogin') }}" method="post" autocomplete="off" class="sign-in-form">
                        @csrf
                        <div class="logo">
                            <img src="{{ asset('public/auth/img/logo.png') }}" alt="easyclass" />
                            <h4>easyclass</h4>
                        </div>

                        <div class="heading">
                            <h2>Welcome Back</h2>
                            <h6>Not registred yet?</h6>
                            <a href="#" class="toggle">Sign up</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap">
                                <input type="text" minlength="4" class="input-field" name="email" autocomplete="off" required />
                                <label>Email</label>
                            </div>

                            <div class="input-wrap">
                                <input type="password" minlength="4" class="input-field" name="password" autocomplete="off" required />
                                <label>Password</label>
                            </div>

                            <input type="submit" value="Sign In" class="sign-btn" />

                            <p class="text">
                                Forgotten your password or you login datails?
                                <a href="#">Get help</a> signing in
                            </p>
                        </div>
                    </form>

                    {{-- form đăng ký --}}
                    <form action="{{ route('client.postAuthRegister') }}" method="post" autocomplete="off"
                        class="sign-up-form">
                        @csrf
                        <div class="logo">
                            <img src="{{ asset('public/auth/img/logo.png') }}" alt="easyclass" />
                            <h4>easyclass</h4>
                        </div>

                        <div class="heading">
                            <h2>Get Started</h2>
                            <h6>Already have an account?</h6>
                            <a href="#" class="toggle">Sign in</a>
                        </div>

                        <div class="actual-form">
                            <div class="input-wrap mb-12">
                                <input type="text" minlength="4" class="input-field" name="name" autocomplete="off"
                                    required />
                                <label>Name</label>
                            </div>

                            <div class="input-wrap mb-12">
                                <input type="email" class="input-field" name="email" autocomplete="off" required />
                                <label>Email</label>
                            </div>

                            <div class="input-wrap mb-12">
                                <input type="text" class="input-field" name="phone" autocomplete="off" required />
                                <label>Phone</label>
                            </div>

                            <div class="input-wrap mb-12">
                                <input type="password" minlength="4" class="input-field" name="password" autocomplete="off"
                                    required />
                                <label>Password</label>
                            </div>

                            <div class="input-wrap mb-12">
                                <input type="text" class="input-field" name="address" autocomplete="off" required />
                                <label>Address</label>
                            </div>

                            <input type="submit" value="Sign Up" class="sign-btn" />

                            <p class="text">
                                By signing up, I agree to the
                                <a href="#">Terms of Services</a> and
                                <a href="#">Privacy Policy</a>
                            </p>
                        </div>
                    </form>
                </div>

                <div class="carousel">
                    <div class="images-wrapper">
                        <img src="{{ asset('public/auth/img/image1.png') }}" class="image img-1 show" alt="" />
                        <img src="{{ asset('public/auth/img/image2.png') }}" class="image img-2" alt="" />
                        <img src="{{ asset('public/auth/img/image3.png') }}" class="image img-3" alt="" />
                    </div>

                    <div class="text-slider">
                        <div class="text-wrap">
                            <div class="text-group">
                                <h2>Create your own courses</h2>
                                <h2>Customize as you like</h2>
                                <h2>Invite students to your class</h2>
                            </div>
                        </div>

                        <div class="bullets">
                            <span class="active" data-value="1"></span>
                            <span data-value="2"></span>
                            <span data-value="3"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@section('scripts')
    <script src="{{ asset('public/auth/main.js') }}"></script>
@endsection
