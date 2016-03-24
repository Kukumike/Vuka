<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>GroupBooking &CenterDot; Online bus booking</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url('style/css/bootstrap.min.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('style/css/datepicker.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('style/css/main.css'); ?>"/>

        <!-- Icon -->
        <link rel="icon" href="<?php echo base_url('style/imgs/favicon.ico'); ?>"/>

    </head>
    <body>

        <!-- Top Navbar -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">VukaTrip</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo base_url('login'); ?>">Sign in</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('signup'); ?>">Sign up</a>
                        </li>
                    </ul>

                    <p class="navbar-text navbar-right"><strong>| Operator only:</strong></p>

                    <ul  class="nav navbar-nav navbar-right" >
                        <li><a href="<?php echo base_url('contactus');?>">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <!-- groupbooking pane -->
        <div class="section bus-page-spacer-mid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="modular-title">
                            { Group Bookings }
                        </h2>

                        <hr class="hr-maroon">
                    </div>
                </div>
                <div class="row trip-data">

                    <div class="col-md-1">
                        <!--Left Spacer Important-->
                    </div>

                    <div class="col-md-10">
                        <h5>Looking to travel as a group or you have special booking requirements? Fill in the form below and we will get back to you asap! </h5>

                        <form class="form" role="form"  action ="<?php echo base_url('group_success'); ?>" method="POST">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="contactname" class="hidden-xs">Contact Person / Organisation <i class="tiny-text fa maroon-glyph fa-asterisk"></i></label>
                                        <input type="text" class="form-control" id="contactname" placeholder="Contact Person / Organisation" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="form-group">
                                        <label for="contactemail" class="hidden-xs">Contact Email Address <i class="tiny-text fa maroon-glyph fa-asterisk"></i></label>
                                        <input type="email" class="form-control" id="contactemail" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="form-group">
                                        <label for="phnnum" class="hidden-xs">Contact Phone Number <i class="tiny-text fa maroon-glyph fa-asterisk"></i></label>
                                        <input type="text" class="form-control" id="phnnum" placeholder="Phone Number" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="form-group">
                                        <label for="travellers" class="hidden-xs">Number of Travellers <i class="tiny-text fa maroon-glyph fa-asterisk"></i></label>
                                        <input type="number" class="form-control" id="travellers" placeholder="# of Travellers" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="form-group">
                                        <label for="busop" class="hidden-xs">Preferred Bus <i class="tiny-text fa maroon-glyph fa-asterisk"></i></label>
                                        <input type="text" class="form-control" id="busop" placeholder="Preferred Bus" required>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="form-group">
                                        <label for="travfr" class="hidden-xs">From <i class="tiny-text fa maroon-glyph fa-asterisk"></i></label>
                                        <input type="text" class="form-control" id="travfr" placeholder="From" required>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="form-group">
                                        <label for="trato" class="hidden-xs">To <i class="tiny-text fa maroon-glyph fa-asterisk"></i></label>
                                        <input type="text" class="form-control" id="trato" placeholder="To" required>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="tradte" class="hidden-xs">Date of Travel <i class="tiny-text fa fa-asterisk maroon-glyph "></i></label>
                                        <input type="text" class="form-control" id="tradte" placeholder="Date of Travel" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="addinfo" class="hidden-xs">Additional Information </label>
                                <textarea rows="4" class="form-control" id="addinfo" placeholder="Additional Information"></textarea>                       
                            </div>
                            

                            <div class="row">
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-6">
                                        <button type="submit" class="btn btn-danger btn-block mobile-block btn-lg  pull-right">Place Group Order &nbsp;<i class="fa fa-users"></i></button>
                                </div>
                            </div>
                        </form>
                    

                    <div class="col-md-1">
                        <!--Right Spacer-->
                    </div>

                </div>
            </div>
                

            </div>
        </div>



        <div class="container clearfix services">
            <div class="servicelist route">
                <span>
                    Create account
                </span>
                <h2>BUS OPERATORS</h2>
            </div>
            <div class="servicelist busoperator">
                <span>
                    Search &amp; Book
                </span>
                <h2>TRAVELERS</h2>
            </div>
            <div class="servicelist ticketsold">
                <span>
                    Print your ticket
                </span>
                <h2>SPACE BOOKED</h2>
            </div>
            <div class="servicedetails">
                VukaTrip.com is a Kenyan online bus ticketing platform.
                You can now choose your bus and your seat, have the tickets delivered
                printed for you and pay the cash on delivery. Try the VukaTrip experience today.

            </div>
            <div class="text-center footer-links">
                <a href="<?php echo base_url('contactus');?>">Contact Us |</a>
                <a href="<?php echo base_url('howitWorks');?>">How It Works |</a>
                <a href="<?php echo base_url('Terms');?>">Terms & Condition |</a>
                <a href="<?php echo base_url('faqs');?>">FAQs</a>
            </div>
        </div>


        <script src="<?php echo base_url('style/js/jquery/jquery.js'); ?>"></script>
        <script src="<?php echo base_url('style/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('style/js/bootstrap-datepicker.js'); ?>"></script>
        <script src="<?php echo base_url('style/js/main.js'); ?>"></script>
    </body>
</html>
