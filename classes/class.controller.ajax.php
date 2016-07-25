<?php

/* 
 * 
 * 
 * 
 */

class AjaxController
{

    //================================================
    //               handle Ajax Request
    //================================================
    /*
     * The Ajax controller. This is responsible for 
     * calling the requested ajax function. Case is retrieved
     * from ?ajaxaction= (url) by getAjaxPage().
     */
    //================================================

        protected function handleAjaxRequest()
        {
            $pagevar = $this->getAjaxAction();
            $ajaxaction = $this->helper->specChars($pagevar);

            switch($ajaxaction)
            {

            }      
        }

    //================================================
    //                get Ajax Action
    //================================================
    /*
     * small function that asks the helper class
     * CheckRequestMethod to give back the 
     * ?ajaxaction= element and hands it over 
     * to handleAjaxRequest.
     */
    //================================================

        protected function getAjaxAction()
        {
            $key = "ajaxaction";

            $result = $this->helper->checkRequestMethod($key);
            return $result;
        }
}