@extends('layouts.base')

@section('title', 'Contact')

@section('content')
    <section class="contact-1">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 col-md-12 mr-auto mt-5">
                    <div class="section-title">
                        <div class="title-effect">
                            <div class="bar bar-top"></div>
                            <div class="bar bar-right"></div>
                            <div class="bar bar-bottom"></div>
                            <div class="bar bar-left"></div>
                        </div>
                        <h6>Contact Info</h6>
                        <p>Here is our contact details if you have any query regarding to our software you may contact
                            with us easily any time here below we pro
                            vide our all contact details, We will be happy to solve your query.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form id="contact-form" method="post">
                        <div class="messages"></div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input id="form_name" type="text" name="name" class="form-control" placeholder="Type First name" required="required" data-error="Firstname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Type Last name" required="required" data-error="Lastname is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email Address</label>
                                    <input id="form_email" type="email" name="email" class="form-control" placeholder="Type Email" required="required" data-error="Valid email is required.">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="Type Phone" required="required" data-error="Phone is required">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea id="form_message" name="message" class="form-control" placeholder="Type Message" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <button class="btn border-0 btn-theme btn-circle" data-text="Send Message"><span>S</span><span>e</span><span>n</span><span>d</span>
                                    <span> </span><span>M</span><span>e</span><span>s</span><span>s</span><span>a</span><span>g</span><span>e</span>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="contact-info p-0 z-index-1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12">
                    <div class="contact-media"> <i class="flaticon-paper-plane"></i><span>Address:</span>
                        <a target="_blank" href="http://roulettesyllabus.com/">roulettesyllabus.com</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 md-mt-5">
                    <div class="contact-media"> <i class="flaticon-email"></i><span>Email Address</span><a target="_blank" href="mailto:info@roulettesyllabus.com">info@roulettesyllabus.com</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 md-mt-5">
                    <div class="contact-media"> <i class="flaticon-social-media"></i><span>Phone Number</span><a href="tel:+39 0424166006">+39 0424166006</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--contact end-->
@endsection

