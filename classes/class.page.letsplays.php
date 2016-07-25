<?php

/* 
 * 
 * 
 * 
 */

class FonLetsPlays extends FonPage
{
    public function __construct($db, $helper)
    {
        $this->db = $db;
        $this->helper = $helper;
    }
    
    protected function bodyContent()
    {
        $videos = $this->db->getVideosOnCategorie("letsplay");
        foreach ($videos as $value)
        {
            $link = $value[1];
            $title = $value[2];
            $content = $value[4];
           
            echo '<div class="axcelentsegment">
           <div class="axcelenttitle">'.$title.'</div>
           <iframe class="axcelentvideo" 
           src="'.$link.'" frameborder="0" allowfullscreen></iframe>
           <div class="axcelentcontent">'.$content.'</div>
           
           <div class="axcelentunderline"></div>
            </div>';
            
        } 
    }
}