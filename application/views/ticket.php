<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Ticket &CenterDot; Online bus booking</title>
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

                    <p class="navbar-text navbar-right"><strong>| Operator only:</strong></p>
                </div>
            </div>
        </nav>


        <?php

        foreach ($ticket_data as $data) {
            # code...
            $from = $data->scheduleFrom;
            $bus = $data->scheduleBus;
            $date = $data->scheduleDate;
            $time = $data->scheduleTime;
            $to = $data->scheduleTo;
            $operatorId = $data->operatorId;
            $busfair = $data ->scheduleBusCost;
            $busCapacity = $data ->scheduleBusCapacity;
            
        }
        ?>



        <!--Ticket Form-->
        <div class="section bus-page-spacer-mid" ng-app="myCalcModule">
            <div class="container" ng-controller="myController">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="modular-title">
                            { Ticket Bookings }
                        </h2>
                        <hr class="hr-maroon">
                    </div>
                </div>
                <div class="row trip-data">

                    <div class="col-md-1">
                        <!--Left Spacer Important-->
                    </div>

                    <div class="col-md-10">
                        <h5 class="text-center">Please Fill the remaining fields correctly as the information will be reflected on your Ticket when you Book </h5>

                        <form class="form" role="form"  action ="<?php echo base_url('ticket_success'); ?>" method="POST">                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="inputName" class="hidden-xs">Full Name</label>
                                        <input type="text" class="form-control" name="inputName" id="inputName"  onkeyup="validateName()" placeholder="Full Name" required>
                                        <label id="nameErr"></label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="form-group">
                                        <label for="inputPhone" class="hidden-xs">Contact / Phone Number</label>
                                        <input type="text" name="inputPhone" class="form-control" id="inputPhone"  onkeyup="validatePhone()" minlength="10" maxlength="13" ng-model="messagePhone"placeholder="Phone Number(+254)" required>
                                        <label id="phone_err"></label>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="form-group">
                                        <label for="inputiD" class="hidden-xs">National Id </label>
                                        <input type="text" name="inputiD" class="form-control" id="inputiD"  onkeyup="validateId()" placeholder="National Id" required>
                                        <label id="id_err"></label>
                                    </div>
                                </div>
                            </div>
                                <!--operator ID-->
                                <input class="hidden" name="operatorId" value="<?php echo $operatorId;?>"/>
                                <!--havig the number of seats user choose less than number-->
                                <input class="hidden" name="capacity" id="capacity" value="<?php echo $busCapacity;?>"/>
                                <!--calculating cost--><!--the users fair ID-->
                                <input  class="hidden" name="scheduleBusCost" id="scheduleBusCost" value="<?php echo $busfair;?>"/>
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="inputTime" class="hidden-xs">Time of Travel</i></label>
                                        <input type="text" name="inputTime" class="form-control" id="inputTime" value="<?php echo $time;?>" readonly>
                                    </div>
                                </div>
                                
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="form-group">
                                        <label for="inputBus" class="hidden-xs">Preferred Bus</label>
                                        <input type="text" name="inputBus" class="form-control" id="inputBus" value="<?php echo $bus;?>" readonly>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="form-group">
                                        <label for="inputFrom" class="hidden-xs">From </label>
                                        <input type="text" name="inputFrom" class="form-control" id="inputFrom" value="<?php echo $from;?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="form-group">
                                        <label for="inputTo" class="hidden-xs">To </label>
                                        <input type="text" name="inputTo" class="form-control" id="inputTo" value="<?php echo $to;?>" readonly>
                                    </div>
                                </div>

                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="inputDate" class="hidden-xs">Date of Travel</i></label>
                                        <input type="text" name="inputDate"class="form-control" id="inputDate" value="<?php echo $date;?>" readonly>
                                    </div>
                                </div>
                                <div class="col-md-4 hidden col-sm-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="ticketCode" class="hidden-xs">Ticket Code</i></label>
                                        <input type="text" name="ticketCode"class="form-control disabled" id="ticketCode" value="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group form-group-sm">
                                
                                <div class="col-md-6 pull-left">
                                    <label for="inputCost col-md-2" class="control-label pull-left">SEATS:</label>
                                    <input class="form-control col-md-4" type="number" name="inputSeats" min="1" max="<?php echo $busCapacity;?>" step="1" id="inputSeats"  ng-model="messageSeats" required="">
                                </div>
                                
                                <div class="col-md-6">
                                    <label for="inputCost col-md-2" class="control-label pull-left">COST:</label>
                                    <input type="text" class="form-control disabled col-md-4" name="inputCost" value="{{'Kshs '+ messageSeats * <?php echo $busfair;?>}}" id="inputCost" readonly>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-6 pull-right ">
                                    
                                    <button type="submit" class="btn btn-block ticketBtn btn-lg  pull-right">Book Ticket &nbsp;<i class="fa fa-users"></i></button>
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

        <script src="<?php echo base_url('style/js/angular/angular.min.js'); ?>"></script>
        <script src="<?php echo base_url('style/js/angular/mikeScripts.js'); ?>"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
        <script src="<?php echo base_url('style/js/jquery/jquery.js'); ?>"></script>
        <script src="<?php echo base_url('style/js/bootstrap.min.js'); ?>"></script>
        <script src="<?php echo base_url('style/js/bootstrap-datepicker.js'); ?>"></script>
        <script src="<?php echo base_url('style/js/main.js'); ?>"></script>
    </body>
</html>