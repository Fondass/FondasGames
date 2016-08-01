<?php

/* class: main site controller.
 * 
 * usage: use as a primary handler between al pages. 
 * all ?page= requests and ?ajaxaction= requests are
 * handled here.
 * 
 * author: Sybren Bos
 */

class FonController 
{

    protected $helper;
    
//================================================
//             construct controller
//================================================
/*
 * This controller is where most site-wide features
 * are handled made or included. All files that are
 * required by many or multiple loads of the site are
 * stacked here for convienence.
 * 
 * also site-wide paramaters are instantiated here
 * so that they may be handed over to most 
 * other classes through the controller.
 * 
 * (note: file requires only required by one 
 * particualar area should be shoved in the 
 * controller itself to limit file loading)
 */
//================================================
       
    public function __construct()
    {
        require_once("classes/class.page.php");
        require_once("classes/class.debug.php");
        require_once("classes/class.pdo.php");
        require_once("classes/class.helpers.php");
        require_once("classes/class.database.php");
        require_once("classes/class.login.php");
        
        $this->helper = new Helpers();
        $this->db = new FonDatabase();
        $this->user = new FonLogin($this->db, $this->helper);
    }
    
//================================================
//                request check
//================================================
/*
 * Divides all incomming HTTP requests into
 * page requests or ajax requests.
 */
//================================================
    
    public function handleRequest()
    {
        if (isset($_POST["ajaxaction"]) || isset($_GET["ajaxaction"]))
        {
           // $this->handleAjaxRequest();
        }
        else
        {
            $this->handleHttpRequest();
        }  
    }
    
//================================================
//                 handle request
//================================================
/*
 * The page found by getPage (if found) is handed
 * on to the controller here after injection
 * validation.
 */
//================================================   
    
    protected function handleHttpRequest() 
    {
        $pagevar =  $this->getPage();
        $page = $this->pageController($this->helper->specChars($pagevar));
        if ($page)
        {
            $page->show();
        }
        else
        {
            echo "Gnomes have stolen the webpage, we apologize for their natural behaviour";
        }
    }
    
//================================================
//                    get page
//================================================
/*
 * small function that asks the helper class
 * CheckRequestMethod to give back the ?page= element
 * and hands it over to handleRequest.
 */
//================================================
    
    protected function getPage () 
    {
        $key = "page";

        $result = $this->helper->checkRequestMethod($key);
        return $result;
    } 
  

//================================================
//                page controller
//================================================
/*
 * main controller of the website. Every new page
 * visit, form post, and others go through here
 * before reaching their destination as designed by
 * this controller.
 */
//================================================
    
    protected function pageController($pagevar) 
    {
        switch ($pagevar) 
        {
            case "axcelentgaming":
                require_once("classes/class.page.axcelentgaming.php");
                $page = new FonAxcelentGaming($this->db, $this->helper);
                break;
                
            case "letsplays":
                require_once("classes/class.page.letsplays.php");
                $page = new FonLetsPlays($this->db, $this->helper);
                break;
            
            case "letstrys":
                require_once("classes/class.page.letstrys.php");
                $page = new FonLetsTrys($this->db, $this->helper);
                break;
            
            case "about":
                require_once("classes/class.page.about.php");
                $page = new FonAbout();
                break;
            
            case "login":
                require_once("classes/class.page.login.php");
                $page = new FonLoginPage($this->user, $this->db);
                break;
            
            case "update":
                require_once("classes/class.page.update.php");
                $page = new FonUpdate($this->user, $this->db, $this->helper);
                break;
                
            case "agenda":
                require_once("classes/class.page.agenda.php");
                $page = new FonAgenda($this->db, $this->helper);
                break;
            
            case "home":
                  
            default:
                require_once("classes/class.page.home.php");
                $page = new FonHome($this->db, $this->helper);
        }
        return $page;
    }
}