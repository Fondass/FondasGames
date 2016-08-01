<?php
	

class FonPage
{
    
    
    public function show()
    {
            $this->beginDoc();
            $this->beginHeader();
            $this->headerContent();
            $this->endHeader();
            $this->beginBody();
            $this->bodyContent();
            $this->endBody();
            $this->endDoc();
    }	

    protected function beginDoc() 
    { 
            echo "<!DOCTYPE html><html>"; 
    }

    protected function beginHeader() 
    { 
            echo '<head>
                <meta charset=UTF-8 />
                <meta name="fondasgames" content="netbeans" />
                <link rel="stylesheet" href="stylesheet.css" type="text/css" media="all" />
                <script src="lib/jquery.min.js"></script>
                <script type="text/javascript" src="javascript/menumediasizer.js"></script>
                <script type="text/javascript" src="javascript/menuinteractive.js"></script>
                <script type="text/javascript" src="javascript/deviceorientation.js"></script>
                '; 
    }

    protected function headerContent() 
    { 
            echo "<title></title>";
    }

    protected function endHeader()
    { 
            echo "</head>"; 
    }

    protected function beginBody() 
    { 
            echo '<body><div id="wrapper" ><div id="menubar" class="extendfull">
                <div id="mobilemenustart">Menu</div>
                <div id="mobilemenu">
                <a href="?page=home">
                <div class="mobilemenubutton" id="mobilehomebutton"><p class="mobiletext">Home</p></div></a>
                <a href="?page=letsplays">
                <div class="mobilemenubutton"><p class="mobiletext">let\'s Plays</p></div></a>
                <a href="?page=letstrys">
                <div class="mobilemenubutton"><p class="mobiletext">let\'s Try</p></div></a>
                <a href="?page=axcelentgaming">
                <div class="mobilemenubutton"><p class="mobiletext">Axellent Gaming</p></div></a>
                <a href="?page=agenda">
                <div class="mobilemenubutton"><p class="mobiletext">Agenda</p></div></a>
                <a href="?page=about">
                <div class="mobilemenubutton"><p class="mobiletext">About</p></div></a></div>
                <div id="menubuttonleft" class="menubutton"></div>
                <a href="?page=home">
                <div id="menubutton1" class="menubutton">Home</div></a>
                <a href="?page=letsplays">
                <div id="menubutton6" class="menubutton">Let\'s Plays</div></a>
                <a href="?page=letstrys">
                <div id="menubutton2" class="menubutton">Let\'s Try\'s</div></a>
                <a href="?page=axcelentgaming">
                <div id="menubutton3" class="menubutton">Axellent Gaming</div></a>
                <a href="?page=agenda">
                <div id="menubutton4" class="menubutton">Agenda</div></a>
                <a href="?page=about">
                <div id="menubutton5" class="menubutton">About</div></a>
                <div id="menubuttonright" class="menubutton"></div>
                <span class="stretch"></span>

                  </div><div id="bodywrapper">'; 
    }

    protected function bodyContent() 
    { 
            echo ""; 
    }

    protected function endBody() 
    { 
            echo "</div></div></body>"; 
    }

    protected function endDoc() 
    { 
            echo "</html>"; 
    }
}
		

