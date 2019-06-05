
<?php
// this will load in all different parts in other organized functions.

    // __FILE__ returns the current path to this file
    // dirname() returns the path to the parent directory
    define("PRIVATE_PATH", dirname(__FILE__)); 
    define("PROJECT_PATH",dirname(PRIVATE_PATH));
    define("PUBLIC_PATH",PROJECT_PATH.'/Public');
    define("SHARED_PATH", PRIVATE_PATH.'/shared');
    define("STYLE_PATH", PRIVATE_PATH.'/style');


   
    
    // looks for public the +7 includes the name public as well.
    // returns the index number
    $public_end = strpos($_SERVER['SCRIPT_NAME'], '/Public')+7;

    // Gets the Sub string. 
    $doc_root = substr($_SERVER['SCRIPT_NAME'],0,$public_end);
    define("WWW_ROOT",$doc_root);

    require_once('functions.php');

?>