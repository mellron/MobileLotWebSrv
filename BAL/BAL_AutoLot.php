<?php

namespace BAL;

require_once './DAL/DAL_AutoLot.php';
 

/**
 * Description of BAL_AutoLot
 *
 * @author doug
 */

class BAL_AutoLot {
    

    
    /**
     * @name $getState 
     * @return result of all states for drop downs
     * 
     */
    static function getStates()
    {
         
        try 
        {
            return \DAL\DAL_AutoLot::getStates();
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
            return \DAL\DAL_AutoLot::BasicSearch($iPage, $iPageSize, $iStartPrice, $iEndPrice, $sMakes, $sModels, $sSites, $iStartYear, $iEndYear, $iMaxMileage, $iSortField, $iSortDirection); 
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
           return \DAL\DAL_AutoLot::getAutoByVinID($sVinID);
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
            return \DAL\DAL_AutoLot::getMakes($iLocationID);
        }
        catch(Exception $e)
        {
             return '';   
        }
        
        return '';
    }
    
    static function getModels($iLocationID,$iMakeID)
    {
        try 
        {
            return \DAL\DAL_AutoLot::getModels($iLocationID, $iMakeID);
        }
        catch(Exception $e)
        {
             return '';   
        }
        
        return '';
    }
    
     static function getValidLocations()
     {
         return \DAL\DAL_AutoLot::getValidLocations();
     }
}
