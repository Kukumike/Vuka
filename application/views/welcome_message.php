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
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">VukaTrip</a>
                </div>
                <div class="collapse navbar-collapse">
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
        <div class="container">
            <header>
                <h1 class="text-center bookingH1">VukaTrip Online Bus Tickets</h1>
                <h3 class="text-center" >Find the best operators to suit your travel</h3>
                <br>
                <div class="searchForm">
                    <form class="formSearch" method="get" action="<?php echo base_url('search'); ?>">
                        <div class="form-group inputOne">
                            <label class="control-label" for="destinationFrom">From</label>
                            <input type="text" class="inputSearch" name="destinationFrom" id="destinationFrom" placeholder="From"/>
                        </div>
                        <div class="form-group inputTwo">
                            <label class="control-label" for="destinationTo">Destination</label>
                            <input type="text" class="inputSearch" name="destinationTo" id="destinationTo" placeholder="To"/>
                        </div>
                        <div class="form-group inputThree">
                            <label class="control-label" for="dpd1">Travel date</label>
                            <div class="date" id="dp3" data-date="" data-date-format="mm-dd-yyyy">
                                <input id="dpd1" name="travelDate" readonly="" class="inputSearch" size="16" type="text" value="">
                            </div>
                        </div>
                        
                            <div class="form-group inputFour">
                                <input type="submit" value="Search" class="destinationSubmit"/>
                            </div>

                    </form>
                </div>
            </header>
        </div>

        <div class="container clearfix services">
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

        <script>

            var dateObj = new Date();
            var month = dateObj.getUTCMonth() + 1; //months from 1-12
            var day = dateObj.getUTCDate();
            var year = dateObj.getUTCFullYear();
            var realDay, realMonth;

            if (day < 10) {
                realDay = "0" + day;
            } else {
                realDay = day;
            }

            if (month < 10) {
                realMonth = "0" + month;
            } else {
                realMonth = month;
            }

            var newdate = realMonth + "-" + realDay + "-" + year;


            document.getElementById("dpd1").value = newdate;
        </script>
    </body>
</html>
