<?php

require_once '../Utility/SqlJSON.php';
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

namespace DAL;

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
    function getStates()
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
    
    
    function BasicSearch($iPage,$iPageSize,$iStartPrice,$iEndPrice,$sMakes,$sModels,$sSites,$iStartYear,$iEndYear,$iMaxMileage,$iSortField,$iSortDirection)
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
    
    function getAutoByVinID($sVinID)
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
    
    function getNumberOfAutoImages($sVinID)
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
    
    function getMakes($iLocationID)
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
    
    function getModels($iLocationID,$iMakeID)
    {
        
    }
}
