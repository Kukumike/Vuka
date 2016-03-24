<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>VukaTrip &CenterDot; Online bus booking</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url('style/css/bootstrap.min.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('style/css/datepicker.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('style/css/main.css'); ?>"/>

        <!-- Icon -->
        <link rel="icon" href="<?php echo base_url('style/imgs/favicon.ico'); ?>"/>
        <script>
        $(function() {
          var availableTags = [
              
                "Nairobi","Mombasa","Kisumu","Eldoret","Malindi","Awendo","Bondo","Bumala","Busia","Homa Bay","Kakamega","Kericho","Keroka","Kisii","Maseno","Migori","Mumias","Nakuru","Mbale","Kaimosi","Narok","Rongo","Siaya","Sirare","Ugunja","Usenge","Webuye","Bungoma","Kapsabet","Kitale","Malaba","Kilifi","Kitui","Juba ","Kigali","Burundi","Chwele","Tanga","Isibania","Oyugis","Mtwapa","Machakos","Alego","Mpeketoni",            
              ];
              $( "#destinationFrom" ).autocomplete({
                source: availableTags
              });
              $( "#destinationTo" ).autocomplete({
                source: availableTags
              });
            });
        </script>

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
                            
                        </li>
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
        
        <!-- Search pane -->
       <h3 class="modular-title">Success Group ticket Booking</h3>

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
