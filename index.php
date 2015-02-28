<!DOCTYPE html>
 
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           require_once './Utility/SqlJSON.php';
           
           
          // \UTIL\SqlJSON::CreateConnection("localhost", "mobile", "autolot","!ambrose");
           
           \UTIL\SqlJSON::CreateConnection();
           
           if(\UTIL\SqlJSON::IsConnected()) {   
           
                $result = \UTIL\SqlJSON::ExecuteResultSet("select * from mobile.StateList");

                 echo '<div>' .  $result . '</div>';
            
            }
             
           
          
        ?>
    </body>
</html>
