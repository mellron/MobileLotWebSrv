<?php
 
namespace UTIL;

/**
 * Description of SqlJSON
 *
 * @author doug
 */
class SqlJSON extends database
{
    
    public static function ExecuteResultSet($sSQL)
    {
        $result = parent::ExecuteResultSet($sSQL);
        
        if($result == NULL) { return ""; }
        
        // ok here is where we are going to convert to JSON text
        
        return $this->GetJSONString($result);
        
    }
    
    public static function ExecuteNonQuery($sSQL)
    {
        parent::ExecuteNonQuery($sSQL);
    }
    
    public static function ExecuteCmd($sSQLCommand)
    {
        parent::ExecuteCmd($sSQLCommand);
       
    }
    
    public static function ExecuteCmdwithResultSet($sSQLCommand)
    {
       $result = parent::ExecuteCmdwithResultSet($sSQLCommand);
       
       if($result == NULL) { return ""; }
       
       return $this->GetJSONString($result);
       
       // ok here is where we are going to convert to JSON text
    }
    
    public static function GetJSONString($oresult)
    {
        
       if ($oresult->num_rows > 0) {
 
           $sJSON = '';
               
           while($row = $oresult->fetch_assoc())
               {              
                 $sJSON = $sJSON . ',' . '{"__type":"Record",' . substr(json_encode($row),1);                
               }
               
           $sJSON = '{"Records" : [' . substr($sJSON,1) . ']}';
               
           //echo '<div>' . $sJSON . '</div>';
     
         // $oresult->free();
          
          return $sJSON;
          
}      else {
               return "";
            }
        
    }
    
    
    
}
