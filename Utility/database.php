<?php

/**************************************************************************************
 * Class: DAL.database
 * Description: This is the base class to be used to call the database
 * 
 * 
 * 
 */


namespace UTIL;

require_once './config/configuration.php';
/**
 * Description of database
 *
 * @author doug
 * @version 1.0
 * @name DAL.database
 * 
 */

class database {
    
    private static $m_sUserID = "";
    private static $m_sPassword = "";
    private static $m_sDatabase = "";
    private static $m_sServer ="";
    private static $m_oConnection = NULL;

    function __construct() {
        self::set_Database(\CONFIG\configuration::get_database());
        self::set_Password(\CONFIG\configuration::get_appPassword());
        self::set_Server(\CONFIG\configuration::get_server());
        self::set_UserID(\CONFIG\configuration::get_appUser());
    }
    
    /**
     * 
     * @return type
     */
    public static function get_UserID()
    { 
        return self::$m_sUserID;
    }
    
    /**
     * 
     * @param type $sValue
     */
    public static function set_UserID($sValue)
    {
        self::$m_sUserID = $sValue;
    }
    
    /**
     * 
     * @return type
     */
    public static function get_Password()
    {
        return self::$m_sPassword;
    }
    
    /**
     * 
     * @param type $sValue
     */
    public static function set_Password($sValue)
    {
        self::$m_sPassword = $sValue;
    }
  	
       /**
     * 
     * @return type
     */
    public static function get_Database()
    {
        return self::$m_sDatabase;
    }
    
    /**
     * 
     * @param type $sValue
     */
    public static function set_Database($sValue)
    {
        self::$m_sDatabase = $sValue;
    }
    
           /**
     * 
     * @return type
     */
    public static function get_Server()
    {
        return self::$m_sServer;
    }
    
    /**
     * 
     * @param type $sValue
     */
    public static function set_Server($sValue)
    {
        self::$m_sServer= $sValue;
    }
    
    public static function get_Connection()
    {
        return self::$m_oConnection;
    }
    
    public static function set_Connection($oValue)
    {
         self::$m_oConnection = $oValue;
    }
    
    public static function IsConnected()
    {
        if(self::get_Connection() == NULL) { return false; }
        if(self::get_Connection()->connect_error) { return false; }
        
        return true;
         
    }
    
    public static function CreateConnection($sServer="",$sDatabase="",$sUserID="",$sPassword="")  
    {
        if($sServer == "")
        {self::set_Server(\CONFIG\configuration::get_server()); }
        else
        {self::set_Server($sServer);}
        
        if($sDatabase == "") 
        {self::set_Database(\CONFIG\configuration::get_database()); }
        else
        { self::set_Database($sDatabase); }
        
        if($sUserID =="")
            { self::set_UserID(\CONFIG\configuration::get_appUser()); }
        else
            { self::set_UserID($sUserID); }
            
        if($sPassword =="") 
            {self::set_Password(\CONFIG\configuration::get_appPassword()); }
        else
            {self::set_Password($sPassword); }
        
     
        try
        {
            
         self::set_Connection(new \mysqli(self::get_Server(), self::get_UserID(), self::get_Password(),self::get_Database()));

         return self::IsConnected();
         
        }
        catch(Exception $e)
        {
            return false;
        }
         
    }
    
    public static function ExecuteResultSet($sSQL)
    {
       $result = NULL;
       
       if(self::IsConnected()) {
                        
        $result = self::get_Connection()->query($sSQL);
        
       }
       
       return $result;
    }
    
    public static function ExecuteNonQuery($sSQL)
    {
       if(self::IsConnected()) {
        self::get_Connection()->query($sSQL);
       }
    }
    
    public static function ExecuteCmd($sSQLCommand)
    {
       if(self::IsConnected()) {
        self::get_Connection()->query($sSQLCommand);
       }
       
    }
    
    public static function ExecuteCmdwithResultSet($sSQLCommand)
    {
       $result = NULL;
        
       if(self::IsConnected()) {
         $result = self::get_Connection()->query($sSQLCommand);
       }
       
       return $result;
    }
    
   
   
}





