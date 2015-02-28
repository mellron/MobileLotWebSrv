<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of configuration
 *
 * @author doug
 */
namespace CONFIG;

class configuration {
    
    private static $m_sDatabase = 'mobile';
    private static $m_sServer = 'localhost';
    private static $m_sAppUser = 'autolot';
    private static $m_sAppPassword = '!ambrose';
    
    public static function get_database()
    {
          return self::$m_sDatabase;     
    }
    public static function get_server()
    {
          return self::$m_sServer;     
    }
    public static function get_appUser()
    {
          return self::$m_sAppUser;     
    }
    public static function get_appPassword()
    {
          return self::$m_sAppPassword;     
    }
   
    //put your code here
}
