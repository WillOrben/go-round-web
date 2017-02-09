<?php
include('../system/Config.php');

$uri = explode('/', strpos($_SERVER['REQUEST_URI'], '?') ? strstr($_SERVER['REQUEST_URI'], '?', true) : $_SERVER['REQUEST_URI']);
foreach($uri as $id => $dir){
    if($dir == ""){
        unset($uri[$id]);
    }
}
$page = isset($uri[1]) ? $uri[1] : 'index';
array_shift($uri);
$args = $uri === NULL ? array() : $uri;
if(strpos($page, '_') === 0){
    include '../webroot/' . $page . '.php';
} else {
    new PageHandler($page, $args);
}


function include_e($page = false, $pass = array()){
    if($page !== false && file_exists($page)){
        global $handler;  // so the file can use it
        include($page);
        return true;
    }
    return false;
}

class PageHandler {

    private $template;
    private $pass;
    private $tutorials;

    /**
     * Handle the page.
     * @param string $template The name of the page we're using
     * @param array $pass What variables to pass along
     */
    public function __construct($template = "index", $pass = array()){
        $this->template = $template;
        $this->pass = $pass;
        include('../templates/main_tpl.php');
    }

    public function title(){
        if(!file_exists('../templates/' . $this->template . '_tpl.php')){
            return "404 - Page Not Found";
        }
        if(file_exists('../templates/' . $this->template . '_tpl.title.php')){
            include_e('../templates/' . $this->template . '_tpl.title.php', $this->pass, $this->tutorials);
            return "";
        }
        if(has('title:' . $this->template)){
            return get('title:' . $this->template);
        }
        return ucwords(str_replace('-', ' ', $this->template));
    }

    public function head(){
        include_e('../templates/' . $this->template . '_tpl.head.php', $this->pass, $this->tutorials);
        if(!file_exists('../templates/' . $this->template . '_tpl.php')){
            return '<link rel="canonical" href="/404/" />';
        }
        return "";
    }

    public function foot(){
        include_e('../templates/' . $this->template . '_tpl.foot.php', $this->pass, $this->tutorials);
    }

    public function js(){
        include_e('../templates/' . $this->template . '_tpl.js.php', $this->pass, $this->tutorials);
    }

    public function css(){
        include_e('../templates/' . $this->template . '_tpl.css.php', $this->pass, $this->tutorials);
    }

    public function page(){
        if(!include_e('../templates/' . $this->template . '_tpl.php', $this->pass, $this->tutorials)){
            $template = $this->template;
            include('../templates/404_tpl.php');
        }
    }

    public function active($page = "index"){
        if($this->template == $page){
            return "active";
        }
        return "";
    }
}
