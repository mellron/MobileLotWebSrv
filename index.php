<!DOCTYPE html>
 
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
          // require_once './Utility/SqlJSON.php';
           require_once './BAL/BAL_AutoLot.php';
           
           
          // \UTIL\SqlJSON::CreateConnection("localhost", "mobile", "autolot","!ambrose");
           
          // \UTIL\SqlJSON::CreateConnection();
           
       
           
                $result = \UTIL\SqlJSON::ExecuteCmdwithResultSetTotals("call mobile.Get_AutoByVinID('19UUA8F57AA010750')");

                 echo '<div>' .  $result . '</div><div></div><div></div>';
               
  
                 $result2 = \BAL\BAL_AutoLot::getValidLocations();
                 
                 echo '<div>' .  $result2 . '</div>';
           
               
       
             
           
          
        ?>
    </body>
</html>
