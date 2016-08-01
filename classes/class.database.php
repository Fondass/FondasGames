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
        
    public function getAxellentVideos()
    {
        $sql = 'SELECT * FROM axellentvideos ORDER BY id DESC';
        $statement = PDODAO::prepareStatement($sql);
        $result = PDODAO::getArrays($statement);
        
        return $result;        
    }
    
//================================================
//               getVideosOnCategorie
//================================================
/*
 * gets all the videos correpsonding to the given
 * categorie and return's them in a neat array.
*/    
//================================================
        
    public function getLetsplayVideos()
    {
        $sql = 'SELECT * FROM letsplaylists ORDER BY id DESC';
        $statement = PDODAO::prepareStatement($sql);
        $result = PDODAO::getArrays($statement);
        
        return $result;        
    }
    
//================================================
//               saveVideoToDatabase
//================================================
/*
 * 
*/    
//================================================    
    
    public function saveVideoToDatabase($title, $content, $link, $categorie)
    {
        $sql = 'INSERT INTO '.$categorie.' (link, title, content)
            VALUES ("'.$link.'","'.$title.'","'.$content.'")';
        PDODAO::doInsertQuery($sql);
    }
    
//================================================
//               getVideosOnCategorie
//================================================
/*
 * gets all the videos correpsonding to the given
 * categorie and return's them in a neat array.
*/    
//================================================
        
    public function getLetsTryVideos()
    {
        $sql = 'SELECT * FROM letstrylists ORDER BY id DESC';
        $statement = PDODAO::prepareStatement($sql);
        $result = PDODAO::getArrays($statement);
        
        return $result;        
    }
    
//================================================
//           get password on username
//================================================
/*
 * Looks up the password that is coupled with an
 * entered username provided by a user. username
 * need to be a valid entry in the databse for 
 * this function to return something. 
*/    
//================================================
  
    public function getPasswordOnUsername($username)
    {
        $sql = 'SELECT password FROM users WHERE name="'.$username.'"';
        $statement = PDODAO::prepareStatement($sql);
        $result = PDODAO::getArray($statement);

        return $result[0]; // returns the valid password 
    }
    
//================================================
//                  get salt
//================================================
/*
 * looks up the added password salt in the database
 * (which is a column in the users table).
 * 
 * salt refers to a password hashtag defined in script.
 */   
//================================================  
    public function getSalt($name)
    {
       $sql = 'SELECT salt FROM users WHERE name = "'.$name.'"';
       $result = PDODAO::getDataArray($sql);
       //echo $result['salt'];
       return $result['salt'];
    }
    
    
    
    
    
}