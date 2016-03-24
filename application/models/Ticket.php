<?php
class Ticket extends CI_Model{
 
 function db_search($sId,$fair,$capacity){

    //get values IN OPERATORSCHEDULE table
        $this->db->select('*');
        $this->db->where('scheduleId', $sId);
        $this->db->where('scheduleBusCost', $fair);
        $this->db->where('scheduleBusCapacity',$capacity);
        
        $details = $this->db->get('OPERATORSCHEDULE');
        
        return $details->result();

 }  

//submit details to dBase
 function db_submit($customerName,$customerId,$customerPhone,$inputBus,$inputFrom,$inputTo,$inputDate,$inputTime,$inputSeats,$inputCost,$operatorId,$scheduleBusCost)
 {
 	//ticket Details Array
 	$ticketDetails = array(
 			'customerName'=>$customerName,
 			'customerId'=>$customerId,
 			'customerContact'=>$customerPhone,
 			'busDetails'=>$inputBus,
 			'from'=>$inputFrom,
 			'to'=>$inputTo,
 			'dateScheduled'=>$inputDate,
 			'time'=>$inputTime,
 			'seats'=>$inputSeats,
 			'totalCost'=>$inputCost,
 			'operatorId'=>$operatorId,
            'scheduleBusCost'=>$scheduleBusCost
            );
 	//insert
        $ticketBook = $this->db->insert('ticket', $ticketDetails);

        return $ticketBook;
 	}

 	//get Ticket details...
 	function ticketDetails($customer){
 		//get values IN OPERATORSCHEDULE table
        $this->db->select('*');
        $this->db->where('customerName', $customer);
        
        $details = $this->db->get('TICKET');
        
        return $details->result();
 	}
}