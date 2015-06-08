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
        self::CreateConnection();
        
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
        self::CreateConnection();
          
        parent::ExecuteNonQuery($sSQL);
    }
    /**
     * 
     * @param type $sSQLCommand
     */
    public static function ExecuteCmd($sSQLCommand)
    {
        self::CreateConnection();
          
        parent::ExecuteCmd($sSQLCommand);
       
    }
    /**
     * 
     * @param type $sSQLCommand
     * @return string
     */
    public static function ExecuteCmdwithResultSet($sSQLCommand)
    {
        
       self::CreateConnection();
         
       $result = parent::ExecuteCmdwithResultSet($sSQLCommand);
       
       if($result == NULL) { return ""; }
       
       return self::GetJSONString($result);
       
       // ok here is where we are going to convert to JSON text
    }
    public static function ExecuteCmdwithResultSetTotals($sSQLCommand)
    {
        
       self::CreateConnection();
       
       $result = parent::ExecuteCmdwithResultSet($sSQLCommand);
       
       if($result == NULL) { return ""; }
       
       return self::GetJSONStringWithTotalField($result);
       
       // ok here is where we are going to convert to JSON text
    }
    /**
     * 
     * @param type $oresult
     * @return string
     */
    public static function GetJSONString($oresult)
    {
        
       return self::GetJSON($oresult,false);
        
    }
    /**
     * 
     * @param type $oresult
     * @return type
     */
    public static function GetJSONStringWithTotalField($oresult)
    {
        
       return self::GetJSON($oresult,true);
        
    }        
    /**
     * 
     * @param type $oresult
     * @param type $bIncludeTotalField
     * @return string
     */
    private static function GetJSON($oresult,$bIncludeTotalField)
   {
        
       if ($oresult->num_rows > 0) {
 
           $sJSON = '';
               
           while($row = $oresult->fetch_assoc())
               {              
                 $sJSON = $sJSON . ',' . '{"__type":"Record",' . substr(json_encode($row),1);                
               }
           
               
           if($bIncludeTotalField)   
           {
               
             $sJSON = str_replace('"}', '",TotalRecords":"' . strval($oresult->num_rows) . '"}', $sJSON);
           
           }
               
           $sJSON = '{"Records" : [' . substr($sJSON,1) . ']}';
           
           $oresult->free();
          
          return $sJSON;
          
}      else {
               return "";
            }
        
    }
    
    
}
