<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>

        <?php
        foreach ($operatorDetails as $oppData) {
            $oppName = $oppData->operatorName;
            $oppMail = $oppData->operatorMail;
        }
        ?>
        <title><?php echo $oppName; ?> &CenterDot; Add operation</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url('style/css/bootstrap.min.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('style/css/datepicker.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('style/css/main.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('style/css/timepicker.less'); ?>"/>

        <!-- Icon -->
        <link rel="icon" href="<?php echo base_url('style/imgs/favicon.ico'); ?>"/>

    </head>
    <body>

        <!-- Top Navbar -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo base_url('op'); ?>">VukaTrip</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li class="">
                            <a href="<?php echo base_url("activeOperation"); ?>">Active operations</a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url("addOperation"); ?>">Add operations</a>
                        </li>
                    </ul>
                    <ul  class="nav navbar-nav navbar-right" >
                        <li><a href="<?php echo base_url('contactus');?>">Contact Us</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo base_url("signout"); ?>">Sign out</a>
                        </li>
                    </ul>
                    <p class="navbar-right navbar-text">
                        Logged in as <?php echo $oppName; ?>
                    </p>
                </div>
            </div>
        </nav>


        <!-- Main operator pane -->
        <div class="container">
            <div class="text-center" id="introAdmin">
                <h1>Welcome to VukaTrip, <?php echo $oppName; ?></h1>
                <p>You can update your bus availability on this modal</p>
            </div>

            <div class="col-md-10 schedulePane">
                <?php echo form_open("addSchedule"); ?>
                <input type="hidden" name="opp_id" value="<?php echo $operatorId;?>"/>
                <div class="row form-group">
                    <div class="col-md-5">
                        <p class="scheduleLabel">From</p>
                    </div>
                    <div class="col-md-7">
                        <input required="" type="text" name="sch_from" id="sch_from" class="inputSchedule"/>
                        <p class="help-block">From eg. Nairobi</p>
                    </div>
                </div>
                
                <div class="row form-group">
                    <div class="col-md-5">
                        <p class="scheduleLabel">To</p>
                    </div>
                    <div class="col-md-7">
                        <input required="" type="text" name="sch_to" id="sch_to" class="inputSchedule"/>
                        <p class="help-block">Destination eg. Mombasa</p>
                    </div>
                </div>
                
                <div class="row form-group">
                    <div class="col-md-5">
                        <p class="scheduleLabel">Date of Travel</p>
                    </div>
                    <div class="col-md-7">
                        <div class="date" id="dp3" data-date="" data-date-format="dd-mm-yyyy">
                            <input id="dpd1" name="sch_date" readonly="" class="inputSchedule" size="16" type="text" value="">
                            <p class="help-block">Traveling date. Format (MONTH-DAY-YEAR)</p>
                        </div>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-5">
                        <p class="scheduleLabel">Time of Departure</p>
                    </div>
                    <div class="col-md-7">
                        <input required="" id="sch_time" name="sch_time" type="text" class="inputSchedule input-mdall" value="11:30 PM"/>
                        <p class="help-block">Departure time. Format (Hours:Minutes AM/PM)</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-5">
                        <p class="scheduleLabel">Bus to Travel</p>
                    </div>
                    <div class="col-md-7">
                        <input required="" type="text" name="sch_bus" id="sch_bus" class="inputSchedule"/>
                        <p class="help-block">Bus name or details eg. Modern Coast</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-5">
                        <p class="scheduleLabel">Bus capacity</p>
                    </div>
                    <div class="col-md-7">
                        <input required="" type="number" step="1" min="0" max="72" name="sch_bus_capacity" id="sch_bus_capacity" class="inputSchedule"/>
                        <p class="help-block">The total bus capacity eg. 72</p>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-md-5">
                        <p class="scheduleLabel">Cost per person</p>
                    </div>
                    <div class="col-md-7">
                        <input required="" type="number" name="sch_bus_cost" id="sch_bus_cost" class="inputSchedule" value="KSh. "/>
                        <p class="help-block">Total bus fare per person eg. KSh. 600</p>
                    </div>
                </div>                    
                <div class="row form-group">
                    <div class="col-md-4 col-md-offset-4">
                        <input type="submit" class="scheduleSubmit" value="Add schedule"/>
                    </div>
                </div>
                </form>
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
        <script src="<?php echo base_url('style/js/bootstrap-timepicker.js'); ?>"></script>
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
