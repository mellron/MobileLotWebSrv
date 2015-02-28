<?php

require_once './Utility/SqlJSON.php';
 
header('Content-type: application/json; charset=utf-8');
    
    \UTIL\SqlJSON::CreateConnection();
           
    if(\UTIL\SqlJSON::IsConnected()) {   
           
                $result = \UTIL\SqlJSON::ExecuteResultSet("select * from mobile.StateList");
                            
                echo  $result  ;
            
    }
  
    
  //}

 

 