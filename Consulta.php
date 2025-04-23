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
    $NOTAFSe->ID_NF_TECNOSPEED = '68091b05916074e41b4235a0';

    $NOTAFSe->GET_RETORNO_NFSE();

?>    