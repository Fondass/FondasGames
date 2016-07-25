<?php

/* 
 * 
 * 
 * 
 */

class FonHome extends FonPage
{
    public function __construct($db, $helper)
    {
        $this->db = $db;
        $this->helper = $helper;
    }
    
    protected function bodyContent()
    {
        $video1 = $this->db->getVideosOnCategorie("letsplay");
        $video2 = $this->db->getVideosOnCategorie("axellent");
        
        echo '<div class="homesegment">
            <div class="homevideo1div">
            <p class="hometitle">Newest Let\'s Play</p>
            <iframe class="homevideo1"  
           src="'.$video1[0][1].'" frameborder="0" allowfullscreen></iframe></div>
               <div class="homevideo2div">
               <p class="hometitle">Newest Axellent Gaming Show</p>
               <iframe class="homevideo2" 
           src="'.$video2[0][1].'" frameborder="0" allowfullscreen></iframe></div>
            <div>';
        
        
        
    }
    

}