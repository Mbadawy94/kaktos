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
                    <p>1st, New Yorl, USA</p>
                </div>
                <div class="col-sm-6 col-md-3 contact-box">
                    <h3>email:</h3>
                    <a href="mailto:office@florise.com">office@florise.com</a>
                </div>
                <div class="col-sm-6 col-md-3 contact-box">
                    <h3>phone:</h3>
                    <a href="tel:">+3 523 555 357 1458</a>
                </div>
                <div class="col-sm-6 col-md-3 contact-box">
                    <h3>follow us:</h3>
                    <ul>
                        <li><a href="" class="icon-facebook"></a></li>
                        <li><a href="" class="icon-twitter"></a></li>
                        <li><a href="" class="icon-gplus"></a></li>
                        <li><a href="" class="icon-pinterest"></a></li>
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
{{--                    <div class="senks-mess">--}}
{{--                        <span>Thank you, we will contact you asap.</span>--}}
{{--                    </div>--}}
                </form>
            </div>
        </div>
    </section>

@endsection
