<?php

require_once './Utility/database.php';
    
if($_SERVER['REQUEST_METHOD'] == "POST") {
    
    \UTIL\SqlJSON::CreateConnection();
           
    if(\UTIL\SqlJSON::IsConnected()) {  
       
       if(filter_input(INPUT_POST,'sVinID'))
       {          
                $param = filter_input(INPUT_POST,'sVinID');
                
                $result = \UTIL\SqlJSON::ExecuteResultSet("select * from mobile.StateList where StateCD='" . $param . "'");
                            
                header('Content-type: application/json');
                
                echo  $result;
       }
       
    }
    
  }
    
  //}

 

 