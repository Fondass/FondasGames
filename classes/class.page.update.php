<?php

/* 
 * 
 * 
 * 
 */

class FonUpdate extends FonPage
{
    
    public function __construct($user, $db, $helper)
    {
        $this->user = $user;
        $this->db = $db;
        $this->helper = $helper;
    }
    
    protected function bodyContent() 
    {
        if ($this->user->checkLogged())
        {
            if (!isset($_POST["submitnewvideo"]))
            {
                $this->newVideoForm();
            }
            else
            {
                $this->createVideoFormFilled();
            }
        }
        else
        {
            echo 'You do not have sufficient permission';
        }
    }
    
    
    protected function newVideoForm()
    {
        echo '<form method="POST"><input type="text" name="videolink" placeholder="link" required>
        <input type="text" name="contenttittle" placeholder="title" required>
        <textarea name="contentdescription" required></textarea>
        <select name="categorie">
        <option value="axellentvideos">Axellent</option>
        <option value="letsplaylists">Let\'s Play</option>
        <option value="letstrylists">Let\'s Try</option>
        </select>
        <input type="hidden" name="page" value="update">
        <input type="submit" name="submitnewvideo" value="commit"></form>';
    }
    
    protected function createVideoFormFilled()
    {
        echo '<a href="?page=update"><input type="button" value="another"></a><p>yaiy</p>'; 
        
        $title = $this->helper->specChars($_POST["contenttittle"]); 
        $content = $this->helper->specChars($_POST["contentdescription"]);
        $link = $this->helper->specChars($_POST["videolink"]);
        $categorie = $this->helper->specChars($_POST["categorie"]);
        
        $this->db->saveVideoToDatabase($title, $content, $link, $categorie);
    }
    
}