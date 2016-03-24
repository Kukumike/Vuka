<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sign up &CenterDot; Online bus booking</title>
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
                    <ul class="nav navbar-nav navbar-left">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Top destinations <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Nairobi</a></li>
                                <li><a href="#">Mombasa</a></li>
                                <li><a href="#">Malindi</a></li>
                                <li><a href="#">Kitale</a></li>
                                <li><a href="#">Nakuru</a></li>
                                <li><a href="#">Eldoret</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Top operators <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Coast Bus </a></li>
                                <li><a href="#">Modern Coast </a></li>
                                <li><a href="#">Simba Coach </a></li>
                                <li><a href="#">Chania </a></li>
                                <li><a href="#">Mash</a></li>
                                <li><a href="#">Tahmed </a></li>
                                <li><a href="#">Coach</a></li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo base_url('login'); ?>">Sign in</a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url('signup'); ?>">Sign up</a>
                        </li>
                    </ul>

                    <p class="navbar-text navbar-right"><strong>Operator only:</strong></p>
                    <ul  class="nav navbar-nav navbar-right">
                        <li><a href="<?php echo base_url('contactus');?>">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>


        <!-- sign up pane -->
        <div class="container">
            <div class="loginDivision">
                <div class="bus-account">
                    <h2>Open an operator account</h2>
                </div>

                <div class="accountForm">
                    <div class="alert alert-warning alert-dismissible  <?php echo $error_hide;?>" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <strong>Oops!</strong> An error occurred. Try again later.
                    </div>
                    <div class="alert alert-success alert-dismissible <?php echo $success_hide;?>" role="alert">
                        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <strong>Successful!</strong> Visit email to verify &amp; login.
                    </div>
                    <form method="post" action="<?php echo base_url('signupAction'); ?>">
                        <div class="form-group">
                            <label class="control-label" for="opp_name">Company name</label>
                            <?php echo form_error('opp_name'); ?>
                            <input type="text" name="opp_name" id="opp_name" class="input-account" value="<?php echo $oopName; ?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="opp_mail">Email</label>
                            <?php echo form_error('opp_mail'); ?>
                            <input type="email" name="opp_mail" id="opp_mail" class="input-account" value="<?php echo $oopMail; ?>"/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="opp_pass">Password</label>
                            <?php echo form_error('opp_pass'); ?>
                            <input type="password" name="opp_pass" id="opp_pass" class="input-account"  value=""/>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="opp_pass_con">Confirm Password</label>
                            <?php echo form_error('opp_pass_con'); ?>
                            <input type="password" name="opp_pass_con" id="opp_pass_con" class="input-account"  value=""/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="account-submit" value="Sign up"/>
                        </div>
                    </form>
                </div>

                <p>Already a registered operator? <a href="<?php echo base_url('login'); ?>">Sign in</a></p>
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
