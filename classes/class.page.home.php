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
        $video1 = $this->db->getLetsplayVideos();
        $video2 = $this->db->getAxellentVideos();
        
        echo '<script type="text/javascript" src="javascript/menubarfixer.js"></script>
            <div class="homesegment">
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