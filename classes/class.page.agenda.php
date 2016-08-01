<?php

/* 
 * 
 * 
 * 
 */

class FonAgenda extends FonPage
{
    public function __construct($db, $helper)
    {
        $this->db = $db;
        $this->helper = $helper;
    }
    
    protected function endHeader() 
    {
        echo '<link rel="stylesheet" href="fullcalendar/fullcalendar.css" />
            <script src="lib/moment.min.js"></script>
            <script src="fullcalendar/fullcalendar.js"></script>
            <script type="text/javascript" src="lib/gcal.js"></script>
            <script src="fullcalendar/calendar.js"></script></head>';
    }
    
    protected function bodyContent() 
    {
        echo '<script type="text/javascript" src="javascript/menubarfixer.js"></script>
            <div id="calendar"></div>';
        
    }
}

