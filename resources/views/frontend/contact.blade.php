@extends('frontend.layouts.master')
@section('content')
        <section class="info-section page-section">
        <div class="container">
            <div class="second-caption style-2">
                <h3 class="h5 md title font-fam-2">contact us</h3>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 contact-box">
                    <h3>address:</h3>
                    <p>Asyut, Egypt</p>
                </div>
                <div class="col-sm-6 col-md-3 contact-box">
                    <h3>email:</h3>
                    <a href="mailto:office@florise.com">kaktosnp@gmail.com</a>
                </div>
                <div class="col-sm-6 col-md-3 contact-box">
                    <h3>phone:</h3>
                    <a href="tel:">+201095979957</a>
                </div>
                <div class="col-sm-6 col-md-3 contact-box">
                    <h3>follow us:</h3>
                    <ul>
                        <li><a href="https://www.facebook.com/kaktosnp" class="icon-facebook"></a></li>
                        <li><a href="https://www.instagram.com/kaktosnp" class="icon-instagram"></a></li>
                        <li><a href="https://twitter.com/kaktosnp" class="icon-twitter"></a></li>
                    </ul>
                </div>
            </div>
            <div class="row form-row">
                <form action="/" onsubmit="return submitForm2();" method="post" id="contact-form2">
                    <div class="col-sm-12 col-md-6">
                        <input class="form-box-input" name="name"  type="text" placeholder="Enter you name" required>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <input class="form-box-input" name="email" type="text" placeholder="Enter you email" required>
                    </div>
                    <div class="col-sm-12">
                        <textarea class="form-box-textarea" name="message" placeholder="Message"></textarea>
                    </div>
                    <div class="send-button-wrapp clearfix">
                        <div class="send-button">
                            <input type="submit" class="submit" value="submit">
                            <span class="icon-ok"></span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

@endsection
