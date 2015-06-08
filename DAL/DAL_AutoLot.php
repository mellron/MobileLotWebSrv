<?php

namespace DAL;

require_once './Utility/SqlJSON.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Template
 * and open the template in the editor.
 */

/**
 * Description of DAL_AutoLot
 *
 * @author doug
 */

class DAL_AutoLot {
    

    function test()
    {
        \UTIL\database::set_Database('mobile');
        
        
    }
    
    /**
     * @name $getState 
     * @return result of all states for drop downs
     * 
     */
    static function getStates()
    {
         
        try 
        {
            return \UTIL\SqlJSON::ExecuteResultSet("select * from mobile.StateList"); 
        }
        catch(Exception $e)
        {
             return '';   
        }
        
        return '';
                            
    }
    
    static function BasicSearch($iPage,$iPageSize,$iStartPrice,$iEndPrice,$sMakes,$sModels,$sSites,$iStartYear,$iEndYear,$iMaxMileage,$iSortField,$iSortDirection)
    {
        try 
        {
            return \UTIL\SqlJSON::ExecuteResultSet("select * from mobile.StateList"); 
        }
        catch(Exception $e)
        {
             return '';   
        }
        
        return '';
        
    }
    
    static function getAutoByVinID($sVinID)
    {
        try 
        {
            return \UTIL\SqlJSON::ExecuteCmdwithResultSetTotals("call mobile.Get_AutoByVinID('". $sVinID ."')"); 
        }
        catch(Exception $e)
        {
             return '';   
        }
        
        return '';
    }
    
    static function getNumberOfAutoImages($sVinID)
    {
        try 
        {
            return \UTIL\SqlJSON::ExecuteResultSet("select * from mobile.StateList"); 
        }
        catch(Exception $e)
        {
             return '';   
        }
        
        return '';
    }
    
    static function getMakes($iLocationID)
        {
        try 
        {
            return \UTIL\SqlJSON::ExecuteResultSet("select * from mobile.StateList"); 
        }
        catch(Exception $e)
        {
             return '';   
        }
        
        return '';
    }
    
    static function getModels($iLocationID,$iMakeID)
    {
        return '';
    }
    
    static function getValidLocations()
    {
        return '';
    }
}
