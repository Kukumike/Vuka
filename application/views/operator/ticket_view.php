<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Tickets &CenterDot; Online bus booking</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS -->
        <link rel="stylesheet" href="<?php echo base_url('style/css/bootstrap.min.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('style/css/datepicker.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('style/css/main.css'); ?>"/>

        <!-- Icon -->
        <link rel="icon" href="<?php echo base_url('style/imgs/favicon.ico'); ?>"/>

    </head>
    <body id="search">

        <!-- Top Navbar -->
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
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

                    <p class="navbar-text navbar-right"><strong>Operator only:</strong></p>
                </div>
            </div>
        </nav>

        <!--Ticket Form-->
        <div class="container">
            <!--ticket display-->
            <h2 class="text-center text-success">{ TICKET SUCCESSFULLY BOOKED }</h2>

            <?php 
                foreach ($search_result as $detail) {
                    # code...
                    $Name = $detail->customerName;
                    $Id = $detail->customerId;
                    $Phone = $detail->customerContact;
                    $bus = $detail->busDetails;
                    $from = $detail->from;
                    $to = $detail->to;
                    $date = $detail->dateScheduled;
                    $time = $detail->time;
                    $seats = $detail->seats;
                    $cost = $detail->totalCost;
                    }
            ?>
            <hr>
            <!--ticket sample view-->
            <div class="well panel ticketWell">
                <div class="panel-body">
                    <div class="col-md-6">
                        <p><label class="control-label" for="name">Full Names:</label>
                        <input type="text" class="ticketsForm" id="name" value="<?php echo $Name;?>"/></p>
                        <p><label class="control-label" for="name">National Id:</label>
                        <input type="text" class="ticketsForm" id="name" value="<?php echo $Id;?>"/></p>
                        <p><label class="control-label" for="name">Contacts:</label>
                        <input type="text" class="ticketsForm" id="name" value="<?php echo $Phone;?>"/></p>
                        <p><label class="control-label" for="name">Seats:</label>
                        <input type="text" class="ticketsForm" id="name" value="<?php echo $seats;?>"/></p>
                    </div>
                    <div class="col-md-6">
                        <p><label class="control-label" for="name">From:</label>
                        <input type="text" class="ticketsForm" id="name" value="<?php echo $from;?>"/></p>
                        <p><label class="control-label" for="name">To:</label>
                        <input type="text" class="ticketsForm" id="name" value="<?php echo $to;?>"/></p>
                        <p><label class="control-label" for="name">Date:</label>
                        <input type="text" class="ticketsForm" id="name" value="<?php echo $date;?>"/></p>
                        <p><label class="control-label" for="name">Time:</label>
                        <input type="text" class="ticketsForm" id="name" value="<?php echo $time;?>"/></p>
                        <p><label class="control-label" for="name">Total Cost:</label>
                        <input type="text" class="ticketsForm" id="name" value="<?php echo $cost;?>"/></p>
                        
                    </div>
                </div>
            </div>    
        </div>
        <div class="container">
            <p class="text-center text-success">You may have the options of :</p>
            <div  class="text-center row ticketOptions">
                <div class="col-md-4">
                    <a href="">Print Ticket <span class="glyphicon glyphicon-print"></span></a>
                    <p>Click and it will be downloaded straight to your printer for print</p>
                </div>
                <div class="col-md-4">
                    <a href=""> Download Ticket <span class="glyphicon glyphicon-save"></span></a>
                    <p>Download a file copy save it,present it to the conductor with necessary details</p>
                </div>
                <div class="col-md-4">
                    <a href="">Collect Ticket<span class="glyphicon glyphicon-tasks"></span></a>
                    <p>One can also collect Ticket at Station, present necessary documents</p>
                </div>
            </div>
        </div>
        <!--End Of Form-->
        <!-- Services -->
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
    </body>
</html>