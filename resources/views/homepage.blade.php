@extends('layouts.app')

@section('content')
    <div class="header">
        <div class="pos-f-t fixed-top">
            <div class="collapse" id="navbarToggleExternalContent">
                <div class="p-4">
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        <li><a href="about.html">ABOUT</a></li>
                        <li><a href="contact.html">CONTACT</a></li>
                    </ul>
                </div>
            </div>
            <nav class="navbar navbar-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
        </div>
    </div>
    
    
    
    <div class="footer">
        <div class="container">
            <h6>GET IN TOUCH</h6>
            <h1>Let’s Join Us</span></h1>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="NAME">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="E-MAIL">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                                placeholder="MESSAGE"></textarea>
                        </div>
                        <button type="button" class="btn btn-outline-primary">SEND MESSAGE</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">

                </div>
            </div>
            <div class="row">
                <div class="col-md-12 d-flex justify-content-center">
                    <p>© 2019 QNESYS.COM. All rights reserved. Terms and Conditions <br>
                        Privacy Policy. Design by HKY</p>
                </div>
            </div>
        </div>
    </div>
@endsection

<style>
    nav{
        background: transparent;
    }

    .navbar button{
        background: #00aafb;
        margin-left: auto;
        border-radius: 50%;
    }

    .header ul li a {
        color: white;
        margin-bottom: 20px;
        text-decoration: none;
    }

    .header ul li a:hover {
        background: #00aafb;
    }

    .header ul li{
        margin-bottom: 20px;
        list-style: none;
    }

    .p-4{
        background: black;
    }

    .footer{
        padding-top: 100px;
        text-align: center;
        color: white;
        width: 100%;
        height: 100vh;
        background-color: black;
    }

    .footer form{
        width: 50%;
        margin-top: 50px;
    }

    .footer p{
        margin-top: 50px;
    }
</style>
