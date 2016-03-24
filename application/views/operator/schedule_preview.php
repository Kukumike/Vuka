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

        foreach ($scheduleDetails as $schData) {
            $schFrom = $schData->scheduleFrom;
            $schTo = $schData->scheduleTo;
            $schBus = $schData->scheduleBus;
            $schBusCapacity = $schData->scheduleBusCapacity;
            $schBusCost = $schData->scheduleBusCost;
            $schDate = $schData->scheduleDate;
            $schTime = $schData->scheduleTime;
        }
        ?>
        <title><?php echo $oppName; ?> &CenterDot; Schedule preview</title>
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
                        <li class="active">
                            <a href="<?php echo base_url("activeOperation"); ?>">Active operations</a>
                        </li>
                        <li class="">
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
            <div class="<?php echo $message_class; ?>">
                <?php echo $alert_message; ?>
            </div>
        </div>
        <div class="container">
            <div class="text-center" id="introAdmin">
                <h1>Schedule ID, <?php echo $scheduleId; ?></h1>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="well well-sm">
                        <div class="header">Current details</div>
                        <ul class="list-view">
                            <li>Destinations<br> 
                                <ul class="list-view">
                                    <li>From<br/>
                                        <?php echo $schFrom; ?>
                                    </li>
                                    <li>To<br/>
                                        <?php echo $schTo; ?>
                                    </li>
                                </ul>                                             
                                <br>
                            </li>
                            <li>Bus<br> 
                                <ul class="list-view">
                                    <li>Name<br/>
                                        <?php echo $schBus; ?>
                                    </li>
                                    <li>Capacity<br/>
                                        <?php echo $schBusCapacity; ?>
                                    </li>
                                </ul>                                                
                                <br>
                            </li>
                            <li>Cost per person<br/>
                                <?php echo "KSh." . $schBusCost; ?>
                                <br>
                            </li>
                            <li>Date &amp; Time<br>    
                                <ul class="list-view">
                                    <li>Date<br/>
                                        <?php echo $schDate; ?>
                                    </li>
                                    <li>Time<br/>
                                        <?php echo $schTime; ?>
                                    </li>
                                </ul>    
                                <br>
                            </li>
                        </ul>
                    </div>

                    <div class="well well-sm">
                        <form method="post" action="<?php echo base_url('deleteSchedule'); ?>">
                            <input type="hidden" name="sch_id" value="<?php echo $scheduleId; ?>"/>
                            <input type="submit" class="scheduleDelete" value="Delete schedule"/>
                        </form>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="well well-sm">
                        <div class="header">Update current details</div>
                        <?php
                        $form_arr = array(
                            'class' => "update-form"
                        );
                        echo form_open("updateSchedule", $form_arr);
                        ?>
                        <input type="hidden" name="sch_id" value="<?php echo $scheduleId; ?>"/>
                        <div class="form-group">
                            <label class="scheduleLabel">From</label>
                            <div class="">
                                <input required="" type="text" name="sch_from" id="sch_from" class="inputSchedule" value="<?php echo $schFrom; ?>"/>
                                <p class="help-block">From eg. Nairobi</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="scheduleLabel">To</label>
                            <div class="">
                                <input required="" type="text" name="sch_to" id="sch_to" class="inputSchedule" value="<?php echo $schTo; ?>"/>
                                <p class="help-block">Destination eg. Mombasa</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="scheduleLabel">Date of Travel</label>
                            <div class="">
                                <div class="date" id="dp3" data-date="02-24-2016" data-date-format="dd-mm-yyyy">
                                    <input id="dpd1" name="sch_date" readonly="" class="inputSchedule" size="16" type="text" value="<?php echo $schDate; ?>">
                                    <p class="help-block">Traveling date. Format (MONTH-DAY-YEAR)</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="scheduleLabel">Time of Departure</label>
                            <div class="">
                                <input required="" id="sch_time" name="sch_time" type="text" class="inputSchedule input-mdall"  value="<?php echo $schTime; ?>"/>
                                <p class="help-block">Departure time. Format (Hours:Minutes AM/PM)</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="scheduleLabel">Bus to Travel</label>
                            <div class="">
                                <input required="" type="text" name="sch_bus" id="sch_bus" class="inputSchedule" value="<?php echo $schBus; ?>"/>
                                <p class="help-block">Bus name or details eg. Modern Coast</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="scheduleLabel">Bus capacity</label>
                            <div class="">
                                <input required="" type="number" name="sch_bus_capacity" id="sch_bus_capacity" class="inputSchedule" value="<?php echo $schBusCapacity; ?>"/>
                                <p class="help-block">The total bus capacity eg. 72</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="scheduleLabel">Cost per person</label>
                            <div class="">
                                <input required="" type="number" name="sch_bus_cost" id="sch_bus_cost" class="inputSchedule"  value="<?php echo $schBusCost; ?>"/>
                                <p class="help-block">Total bus fare per person eg. KSh. 600</p>
                            </div>
                        </div>                    
                        <div class="form-group">
                            <div class="col-md-4 col-md-offset-4">
                                <input type="submit" class="scheduleUpdate" value="Update schedule"/>
                            </div>
                        </div>
                        </form>
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
        <script src="<?php echo base_url('style/js/bootstrap-timepicker.js'); ?>"></script>
        <script src="<?php echo base_url('style/js/main.js'); ?>"></script>


    </body>
</html>
