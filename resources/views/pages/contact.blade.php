@extends('layouts')

@section('content')
 <!-- Breadcrumb Begin -->
 <div class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__links">
                    <a href="{{route('home')}}"><i class="fa fa-home"></i> Home</a>
                    <span>Contact</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact__content">
                    <div class="contact__address">
                        <h5>Contact info</h5>
                        <ul>
                            <li>
                                <h6><i class="fa fa-map-marker"></i> Address</h6>
                                <p></p>
                            </li>
                            <li>
                                <h6><i class="fa fa-phone"></i> Phone</h6>
                                <p><span>0325557573</span></p>
                            </li>
                            <li>
                                <h6><i class="fa fa-headphones"></i> Support</h6>
                                <p>phucloc1311@gmail.com</p>
                            </li>
                        </ul>
                    </div>
                    <div class="contact__form">
                        <h5>SEND MESSAGE</h5>
                        <form action="#">
                            <input type="text" placeholder="Name">
                            <input type="text" placeholder="Email">
                            <input type="text" placeholder="Website">
                            <textarea placeholder="Message"></textarea>
                            <button type="submit" class="site-btn">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d476859.4884206221!2d105.32301526308646!3d20.97399941565738!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135008e13800a29%3A0x2987e416210b90d!2zSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1703319412000!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    {{-- <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48158.305462977965!2d-74.13283844036356!3d41.02757295168286!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2e440473470d7%3A0xcaf503ca2ee57958!2sSaddle%20River%2C%20NJ%2007458%2C%20USA!5e0!3m2!1sen!2sbd!4v1575917275626!5m2!1sen!2sbd"
                    height="780" style="border:0" allowfullscreen="">
                </iframe> --}}
            </div>
        </div>
    </div>
</div>
</section>
<!-- Contact Section End -->

<!-- Instagram Begin -->
<div class="instagram">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-2 col-md-4 col-sm-4 p-0">
            <div class="instagram__item set-bg" data-setbg="{{ asset('public/client/images/instagram/insta-1.jpg')}}">
                <div class="instagram__text">
                    <i class="fa fa-instagram"></i>
                    <a href="#">@ ashion_shop</a>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 p-0">
            <div class="instagram__item set-bg" data-setbg="{{ asset('public/client/images/instagram/insta-2.jpg')}}">
                <div class="instagram__text">
                    <i class="fa fa-instagram"></i>
                    <a href="#">@ ashion_shop</a>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 p-0">
            <div class="instagram__item set-bg" data-setbg="{{ asset('public/client/images/instagram/insta-3.jpg')}}">
                <div class="instagram__text">
                    <i class="fa fa-instagram"></i>
                    <a href="#">@ ashion_shop</a>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 p-0">
            <div class="instagram__item set-bg" data-setbg="{{ asset('public/client/images/instagram/insta-4.jpg')}}">
                <div class="instagram__text">
                    <i class="fa fa-instagram"></i>
                    <a href="#">@ ashion_shop</a>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 p-0">
            <div class="instagram__item set-bg" data-setbg="{{ asset('public/client/images/instagram/insta-5.jpg')}}">
                <div class="instagram__text">
                    <i class="fa fa-instagram"></i>
                    <a href="#">@ ashion_shop</a>
                </div>
            </div>
        </div>
        <div class="col-lg-2 col-md-4 col-sm-4 p-0">
            <div class="instagram__item set-bg" data-setbg="{{ asset('public/client/images/instagram/insta-6.jpg')}}">
                <div class="instagram__text">
                    <i class="fa fa-instagram"></i>
                    <a href="#">@ ashion_shop</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Instagram End -->
@endsection
