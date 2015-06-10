
<?php

require_once './BAL/BAL_AutoLot.php';

if($_SERVER['REQUEST_METHOD'] === "POST") {
   
    header('Content-type: application/json');
        
     \UTIL\SqlJSON::CreateConnection();
     
    if(\UTIL\SqlJSON::IsConnected())
    {
        switch (filter_input(INPUT_POST,'service')) {
            case 'BasicSearch':
                             
                $_iPage = filter_input(INPUT_POST,'iPage');
                $_iPageSize = filter_input(INPUT_POST,'iPageSize');
                $_iStartPrice = filter_input(INPUT_POST,'iStartPrice');
                $_iEndPrice = filter_input(INPUT_POST,'iEndPrice');
                $_sMakes = filter_input(INPUT_POST,'sMakes');
                $_sModels = filter_input(INPUT_POST,'sModels');
                $_sSites = filter_input(INPUT_POST,'sSites');
                $_iStartYear = filter_input(INPUT_POST,'iStartYear');
                $_iEndYear= filter_input(INPUT_POST,'iEndYear');
                $_iMaxMileage = filter_input(INPUT_POST,'iMaxMileage');
                $_iSortField = filter_input(INPUT_POST,'iSortField');
                $_iSortDirection = filter_input(INPUT_POST,'iSortDirection');

                $_result = \BAL\BAL_AutoLot::BasicSearch($_iPage, $_iPageSize, $_iStartPrice, $_iEndPrice, $_sMakes, $_sModels, $_sSites, $_iStartYear, $_iEndYear, $_iMaxMileage, $_iSortField, $_iSortDirection);

                echo $_result;
             
                break;
            
            case 'getAutoByVinID':
                
                echo \BAL\BAL_AutoLot::getAutoByVinID(filter_input(INPUT_POST,'sVinID'));
                break;
            
            case 'getModels':
                
                echo \BAL\BAL_AutoLot::getModels(filter_input(INPUT_POST,'iLocationID'),filter_input(INPUT_POST,'iMakeID'));
                break;
            
            case 'getMakes':
                
                echo \BAL\BAL_AutoLot::getMakes(filter_input(INPUT_POST,'iLocationID'));
                break;
            
            case 'getValidLocations':
                
                echo \BAL\BAL_AutoLot::getValidLocations();
                break;
            
            case 'getStates':
                
                echo \BAL\BAL_AutoLot::getStates();
                break;
            
            default:
                break;
        }
            /*
         if(filter_input(INPUT_POST,'BasicSearch')) 
         {
             //BasicSearch(int iPage,int iPageSize,int iStartPrice,int iEndPrice,string sMakes,string sModels,string sSites,int iStartYear,int iEndYear,int iMaxMileage,int iSortField,int iSortDirection)
             
             $_iPage = filter_input(INPUT_POST,'iPage');
             $_iPageSize = filter_input(INPUT_POST,'iPageSize');
             $_iStartPrice = filter_input(INPUT_POST,'iStartPrice');
             $_iEndPrice = filter_input(INPUT_POST,'iEndPrice');
             $_sMakes = filter_input(INPUT_POST,'sMakes');
             $_sModels = filter_input(INPUT_POST,'sModels');
             $_sSites = filter_input(INPUT_POST,'sSites');
             $_iStartYear = filter_input(INPUT_POST,'iStartYear');
             $_iEndYear= filter_input(INPUT_POST,'iEndYear');
             $_iMaxMileage = filter_input(INPUT_POST,'iMaxMileage');
             $_iSortField = filter_input(INPUT_POST,'iSortField');
             $_iSortDirection = filter_input(INPUT_POST,'iSortDirection');
                   
             $_result = \BAL\BAL_AutoLot::BasicSearch($_iPage, $_iPageSize, $_iStartPrice, $_iEndPrice, $_sMakes, $_sModels, $_sSites, $_iStartYear, $_iEndYear, $_iMaxMileage, $_iSortField, $_iSortDirection);
   
             echo $_result;
             
         }
         else
         if(filter_input(INPUT_POST,'getAutoByVinID')) 
         {
            echo \BAL\BAL_AutoLot::getAutoByVinID(filter_input(INPUT_POST,'sVinID'));
         }
         else
            
         if(filter_input(INPUT_POST,'getModels')) 
         {
             echo \BAL\BAL_AutoLot::getModels(filter_input(INPUT_POST,'iLocationID'),filter_input(INPUT_POST,'iMakeID'));
         }
         else
         if(filter_input(INPUT_POST,'getMakes')) 
         {
             echo \BAL\BAL_AutoLot::getMakes(filter_input(INPUT_POST,'iLocationID'));
         }
         else
         if(filter_input(INPUT_POST,'getValidLocations')) 
         {
             echo \BAL\BAL_AutoLot::getValidLocations();
         }
         else
         if(filter_input(INPUT_POST,'sStateCD')) 
         {
              echo \BAL\BAL_AutoLot::getStates();
         }

    }  */ //connection
    
    // Display gone fishing if no connection
  } 
}
 