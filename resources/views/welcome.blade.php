@extends('layouts.basic')

@section('content')
    <section>
        <div class="gap100 no-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-winku">
                            <h4>Welcome to Winku</h4>
                            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</span>
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure</p>
                            <div class="fonder">
                                <h4>mykhailo isyp <i>founder</i></h4>
                                <i>winku inc</i>
                            </div>
                            <figure class="sign-author">
                                <img src="{{secure_asset('images/welcome-sign.png')}}" alt="">
                            </figure>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <figure class="about-picture">
                            <img src="{{secure_asset('images/resources/about-comapny.jpg')}}" alt="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
