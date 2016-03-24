
//module and controller create pass model
 var calc = angular
                    .module('myCalcModule',[])
                    .controller('myController',function($scope){
                    	//two data binding..real time data initialization
						$scope.messageSeats ="";
					});

			//validating the form
    		/*function validateInfo(){
             	var name = document.getElementById('inputName').value;
                if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/)){
                    producePrompt('First and Last name Please','nameErr','red');
                    return false;
                }

                producePrompt('Valid Name','nameErr','green');
                return true;
        
                var phone = document.getElementById('inputPhone').value;
                if(!phone.match(/^[0-9]{10}$/)){
                    messagePrompt('**Phone No with Invalid Characters**','phone_err','red');
                    return false;
                }

                producePrompt('Valid Number','phone_err','green');
                return true;
            
                var Id = document.getElementById('inputiD').value;
                if(!Id.match(/^[0-9]{8}$/)){
                    messagePrompt('**Id No not Invalid**','id_err','red');
                    return false;
                }
                producePrompt('Valid Id','phone_err','green');
                return true;
            }
            
            function messagePrompt(message, promptLocation, color){
                document.getElementById(promptLocation).innerHTML=message;
                document.getElementById(promptLocation).style.color=color;
            }*/
