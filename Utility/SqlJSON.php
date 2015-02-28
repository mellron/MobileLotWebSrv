<?php
 
namespace UTIL;

/**
 * Description of SqlJSON
 * This class will extend the database class
 * it will return all results as a JSON string
 * @name SqlJSON
 * @author doug
 */
require_once 'database.php';
 
class SqlJSON extends database
{
    /**
     * 
     * @param type $sSQL
     * @return string
     */
    public static function ExecuteResultSet($sSQL)
    {
        $result = parent::ExecuteResultSet($sSQL);
        
        if($result == NULL) { return ""; }
        
        // ok here is where we are going to convert to JSON text
        
        return self::GetJSONString($result);
        
    }
    /**
     * 
     * @param type $sSQL
     */
    public static function ExecuteNonQuery($sSQL)
    {
        parent::ExecuteNonQuery($sSQL);
    }
    /**
     * 
     * @param type $sSQLCommand
     */
    public static function ExecuteCmd($sSQLCommand)
    {
        parent::ExecuteCmd($sSQLCommand);
       
    }
    /**
     * 
     * @param type $sSQLCommand
     * @return string
     */
    public static function ExecuteCmdwithResultSet($sSQLCommand)
    {
       $result = parent::ExecuteCmdwithResultSet($sSQLCommand);
       
       if($result == NULL) { return ""; }
       
       return self::GetJSONString($result);
       
       // ok here is where we are going to convert to JSON text
    }
    /**
     * 
     * @param type $oresult
     * @return string
     */
    public static function GetJSONString($oresult)
    {
        
       if ($oresult->num_rows > 0) {
 
           $sJSON = '';
               
           while($row = $oresult->fetch_assoc())
               {              
                 $sJSON = $sJSON . ',' . '{"__type":"Record",' . substr(json_encode($row),1);                
               }
               
           $sJSON = '{"Records" : [' . substr($sJSON,1) . ']}';
          
          return $sJSON;
          
}      else {
               return "";
            }
        
    }
    
    
    
}
