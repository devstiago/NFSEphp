<?php
    
    $fileInclude = 'NFSeX.php';
    if (file_exists($fileInclude)) {
    include_once $fileInclude;
    }


    $NOTAFSe = new NFSeX();
    
    $NOTAFSe->xTOKEN = 'SEU_TOKEN_';
    $NOTAFSe->ID_NF_TECNOSPEED = '68090afbfd61d50b27c820a4';

    $NOTAFSe->SHOW_NFSE();

?>    