<?php

/* 
 * 
 * 
 * 
 */

class FonDatabase
{
    public function __construct()
    {
        if (PDODAO::connect() == true)
        {

        }
        else
        {
                die("NO DATABASE CONNECTION");
        }
    }

//================================================
//               getVideosOnCategorie
//================================================
/*
 * gets all the videos correpsonding to the given
 * categorie and return's them in a neat array.
*/    
//================================================
        
    public function getVideosOnCategorie($categorie)
    {
        $sql = 'SELECT * FROM videos WHERE categorie="'.$categorie.'" ORDER BY id DESC';
        $statement = PDODAO::prepareStatement($sql);
        $result = PDODAO::getArrays($statement);
        
        return $result;        
    }
    
//================================================
//               getLatestVideoRelease
//================================================
/*
 * gets the latest two video releases, dividinvg tem up in 
 * podcast and let's play.
*/    
//================================================

}