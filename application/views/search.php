<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Search &CenterDot; Online bus booking</title>
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
                        <li>
                            <a href="<?php echo base_url('signup'); ?>">Sign up</a>
                        </li>
                    </ul>

                    <p class="navbar-text navbar-right"><strong>Operator only:</strong></p>
                    <ul  class="nav navbar-nav navbar-right" >
                        <li><a href="<?php echo base_url('contactus');?>">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Search pane -->
        <div class="navbar-search">
            <div class="container">
                <div class="searchForm">
                    <form class="formSearch" method="get" action="">
                        <div class="form-group inputOne">
                            <label class="control-label hidden" for="destinationFrom">From</label>
                            <input type="text" class="inputSearch" name="destinationFrom" id="destinationFrom" value="<?php echo $from; ?>" placeholder="From"/>
                        </div>
                        <div class="form-group inputTwo">
                            <label class="control-label hidden" for="destinationTo">Destination</label>
                            <input type="text" class="inputSearch" name="destinationTo" id="destinationTo" value="<?php echo $to; ?>" placeholder="To"/>
                        </div>
                        <div class="form-group inputThree">
                            <label class="control-label hidden" for="dpd1">Travel date</label>
                            <div class="date" id="dp3" data-date="" data-date-format="mm-dd-yyyy">
                                <input id="dpd1" name="travelDate" class="inputSearch" size="16" type="text" value="<?php echo $travel_date; ?>">
                            </div>
                        </div>
                        <div class="form-group inputFour">
                            <input type="submit" value="Search" class="destinationSubmit"/>
                        </div>
                    </form>
                </div>
            </div>            
        </div>


        <!-- Results pane -->
        <div class="searchPane">
            <div class="container">
                <h3 class="text-center"><b><?php echo $num_search_result; ?> Buses Available.</b></h3>
                <div class="well panel">
                            <div class="panel-body">
                                <form class="form ticketForm" method="get" action="<?php echo base_url('ticket'); ?>">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                         <tr>   
                                            <th>Bus Name</th>
                                            <th>Travel Date</th>
                                            <th>Travel Time</th>
                                            <th>From: </th>
                                            <th>To: </th>
                                            <th>Seats Capacity</th>
                                            <th>Price (Kshs)</th>
                                            <th>Select</th>
                                         </tr>
                        <?php
                            if ($num_search_result > 0) {
                            foreach ($search_result as $cur_results):
                                $busName = $cur_results->scheduleBus;
                                $busCapacity = $cur_results->scheduleBusCapacity;
                                $busPrice = $cur_results->scheduleBusCost;
                                $scheduleDate = $cur_results->scheduleDate;
                                $scheduleTime = $cur_results->scheduleTime;
                                $from = $cur_results->scheduleFrom;
                                $to = $cur_results->scheduleTo;
                                $id = $cur_results->scheduleId;
                                $bus_fair = $cur_results->scheduleBusCost;
                                $bus_capacity = $cur_results->scheduleBusCapacity;
                                ?>
                                
                                
                                         <tr>
                                            <td id="scheduleBus"><?php echo $busName; ?></td>
                                            <td id="scheduleDate"><?php echo $scheduleDate; ?></td>
                                            <td id="scheduleTime"><?php echo $scheduleTime; ?></td>
                                            <td id="scheduleFrom"><?php echo $from; ?></td>
                                            <td id="scheduleTo"><?php echo $to; ?></td> 
                                            <td><?php echo $busCapacity; ?></td>
                                            <td><?php echo $busPrice; ?></td>
                                            <input type="hidden" value="<?php echo $id; ?>" name="scheduleId">
                                            <input type="hidden" value="<?php echo $bus_fair;?>" name="scheduleBusCost">
                                            <input type="hidden" value="<?php echo $bus_capacity;?>" name="scheduleBusCapacity">
                                            <td>
                                                <input type="submit" class="bookBtn" value="book" data-toggle="tooltip" data-placement="left" title="Select Bus" />
                                            </td>
                                        </tr>
                                    <?php endforeach;?>
                                </table>
                            </div>
                        </form>
                        <?php
                } else {
                    ?>
                    <div class="alert alert-info text-center">
                        <p>Sorry. No results found</p>
                    </div>
                    <?php
                }
                ?>
            </div>

            </div>
            </div>
        </div>
        <form class="form ticketForm" method="get" action="<?php echo base_url('group'); ?>">
            <div class="container text-center">
                <button type"submit" class="btn btn-block btn-lg ticketBtn" style="width:300px;">For Group | Organization Booking</button>
            </div>
        </form>


        <!-- Services -->
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
