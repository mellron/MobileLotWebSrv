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
            /*
             * 
             * CREATE PROCEDURE mobile.SEL_AutoLotSearch
(
 
                IN iPage                  INT, 
                    IN iPageSize              INT,
                    IN Makes                 VARCHAR(450),
                    IN Models                VARCHAR(450),
                    IN Sites                 VARCHAR(450),
                    IN StartPrice            DECIMAL(13,2),
                    IN EndPrice              DECIMAL(13,2),
                    IN StartYear             INT,
                    IN EndYear               INT,
                    IN MaxMileage            INT,
                    IN intSortField          INT,            
                    IN intSortDirection      INT 

             */
          //  $test = "call mobile.SEL_AutoLotSearch(" . $iPage . "," . $iPageSize . "," . $iStartPrice."." . $iEndPrice . ",'".$sMakes."'.'".$sModels."'.'".$sSites."'.".$iStartYear.".".$iEndYear.".".$iMaxMileage.".".$iSortField."." . $iSortDirection . ")";
                   
            return \UTIL\SqlJSON::ExecuteCmdwithResultSetTotals("call mobile.SEL_AutoLotSearch(" . $iPage . "," . $iPageSize . "," . $iStartPrice."." . $iEndPrice . ",'".$sMakes."'.'".$sModels."'.'".$sSites."'.".$iStartYear.".".$iEndYear.".".$iMaxMileage.".".$iSortField."." . $iSortDirection . ")"); 
            
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
    
   /* static function getNumberOfAutoImages($sVinID)
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
    }*/
    
    static function getMakes($iLocationID)
   {
        try 
        {
            return \UTIL\SqlJSON::ExecuteCmdwithResultSetTotals("call SEL_AutoMakes(" . $iLocationID . ")"); 
        }
        catch(Exception $e)
        {
             return '';   
        }
        
        return '';
    }
    
    static function getModels($iLocationID,$iMakeID)
    {
        return \UTIL\SqlJSON::ExecuteCmdwithResultSetTotals("call SEL_AutoModels(" . $iLocationID . "," .$iMakeID . ")");
    }
    
    static function getValidLocations()
    {
        return \UTIL\SqlJSON::ExecuteCmdwithResultSetTotals("call SEL_ValidLocations()");
    }
}
