<?php

require_once './Utility/SqlJSON.php';
    
if($_SERVER['REQUEST_METHOD'] == "POST") {
    
    \UTIL\SqlJSON::CreateConnection();
           
    if(\UTIL\SqlJSON::IsConnected()) {  
       
         
       if(filter_input(INPUT_POST,'sStateCD'))
       {          
                $param = filter_input(INPUT_POST,'sStateCD');
                
                $result = \UTIL\SqlJSON::ExecuteResultSet("select * from mobile.StateList where StateCD='" . $param . "'");
                            
                header('Content-type: application/json');
                
                echo  $result;
       }
       
    }
    
  }
    
  //}

 

 