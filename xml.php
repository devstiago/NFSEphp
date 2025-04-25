<?php
    
    $fileInclude = 'NFSeX.php';
    if (file_exists($fileInclude)) {
    include_once $fileInclude;
    }
    
    $fileInclude = 'config.php';
    if (file_exists($fileInclude)) {
    include_once $fileInclude;
    }


    $NOTAFSe = new NFSeX();
    
    $NOTAFSe->xTOKEN = TOKEN_ID;
    $NOTAFSe->ID_NF_TECNOSPEED = '680a83d4872355ed9661d38e';

    $NOTAFSe->SHOW_XML();

?>    