<?php
    //TITULO: Emissão NFSe - plugin TecnoSpeed
    //CRIADO: DANIEL SANTIAGO
    //DATA:03/2025

    $fileInclude = 'NFSeX.php';
    if (file_exists($fileInclude)) {
    include_once $fileInclude;
    }


    $NOTAFSe = new NFSeX();
    $NOTAFSe->xTOKEN = 'SEU_TOKEN_DE INTEGRACAO_AQUI';

    echo 'Carregando info Nfse.. <br> ';

    //CARREGA INFO
    $NOTAFSe->PRES_cpfCnpj = '';
    $NOTAFSe->PRES_razaoSocial = '';
    $NOTAFSe->PRES_nomeFantasia = '';
    $NOTAFSe->PRES_inscricaoMunicipal = '';
    $NOTAFSe->PRES_inscricaoEstadual = '';
    $NOTAFSe->PRES_simplesNacional = '';
    $NOTAFSe->PRES_regimeTributario = '';
    $NOTAFSe->PRES_regimeTributarioEspecial = '';
    $NOTAFSe->PRES_email = '';
    $NOTAFSe->PRES_END_descricaoCidade = '';
    $NOTAFSe->PRES_END_cep = '';
    $NOTAFSe->PRES_END_tipoLogradouro = '';
    $NOTAFSe->PRES_END_logradouro = '';
    $NOTAFSe->PRES_END_tipoBairro = '';
    $NOTAFSe->PRES_END_codigoCidade = '';
    $NOTAFSe->PRES_END_complemento = '';
    $NOTAFSe->PRES_END_estado = '';
    $NOTAFSe->PRES_END_numero = '';
    $NOTAFSe->PRES_END_BAIRRO = '';
    $NOTAFSe->PRES_TEL_ddd = '';
    $NOTAFSe->PRES_TEL_numero = '';

    // TOMADOR
    $NOTAFSe->TOMAD_cpfCnpj = '';
    $NOTAFSe->TOMAD_razaoSocial = '';
    $NOTAFSe->TOMAD_inscricaoMunicipal = '';
    $NOTAFSe->TOMAD_municipio = '';
    $NOTAFSe->TOMAD_email = '';
    $NOTAFSe->TOMAD_END_descricaoCidade = '';
    $NOTAFSe->TOMAD_END_cep = '';
    $NOTAFSe->TOMAD_END_tipoLogradouro = '';
    $NOTAFSe->TOMAD_END_logradouro = '';
    $NOTAFSe->TOMAD_END_tipoBairro = '';
    $NOTAFSe->TOMAD_END_codigoCidade = '';
    $NOTAFSe->TOMAD_END_complemento = '';
    $NOTAFSe->TOMAD_END_estado = '';
    $NOTAFSe->TOMAD_END_numero = '';
    $NOTAFSe->TOMAD_END_bairro = '';

    // SERVIÇO
    $NOTAFSe->SERV_codigo = '';
    $NOTAFSe->SERV_codigoTributacao = '';
    $NOTAFSe->SERV_discriminacao = '';
    $NOTAFSe->SERV_VL_servico = '';
    $NOTAFSe->SERV_VL_deducoes = '';
    $NOTAFSe->SERV_VL_baseCalculo = '';
    $NOTAFSe->SERV_VL_descontoIncondicionado = '';
    $NOTAFSe->SERV_VL_descontoCondicionado = '';
    $NOTAFSe->SERV_ISS_tipoTributacao = '';
    $NOTAFSe->SERV_ISS_exigibilidade = '';
    $NOTAFSe->SERV_ISS_retido = '';
    $NOTAFSe->SERV_ISS_aliquota = '';

    echo 'Emitindo Nfse..<br>';
    
    if($NOTAFSe->PROCESSA_NFSE()){
        
        while($NOTAFSe->pRETORNO == 0){

            $NOTAFSe->GET_RETORNO_NFSE();

            if($NOTAFSe->pRETORNO==1){                    
                $NOTAFSe->SHOW_NFSE();
            }
            if($NOTAFSe->pRETORNO==2){                    
                echo 'Erro NFSe! <br>';
            }
                
        }

    }else{
        echo 'Erro ao processar NFSe';
    } 

   
?>