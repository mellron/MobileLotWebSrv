<!DOCTYPE html>
 
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           require_once './Utility/database.php';
           require_once './Utility/SqlJSON.php';
           
           
           \UTIL\database::CreateConnection("localhost", "mobile", "autolot","!ambrose");
           
           if(\UTIL\database::IsConnected()) {   }
           
           $result = \UTIL\database::ExecuteResultSet("select * from mobile.StateList");
           
            echo '<div>' . \UTIL\SqlJSON::GetJSONString($result) . '</div>';
             
           
          
        ?>
    </body>
</html>
