<?php

class NFSeX {

// PRESTADOR
public $pRETORNO = 0;
public string $PRES_cpfCnpj;
public string $PRES_razaoSocial;
public string $PRES_nomeFantasia;
public string $PRES_inscricaoMunicipal;
public string $PRES_inscricaoEstadual;
public string $PRES_simplesNacional;
public string $PRES_regimeTributario;
public string $PRES_regimeTributarioEspecial;
public string $PRES_email;
public string $PRES_END_descricaoCidade;
public string $PRES_END_cep;
public string $PRES_END_tipoLogradouro;
public string $PRES_END_logradouro;
public string $PRES_END_tipoBairro;
public string $PRES_END_codigoCidade;
public string $PRES_END_complemento;
public string $PRES_END_estado;
public string $PRES_END_numero;
public string $PRES_END_BAIRRO;
public string $PRES_TEL_ddd;
public string $PRES_TEL_numero;

// TOMADOR
public string $TOMAD_cpfCnpj;
public string $TOMAD_razaoSocial;
public string $TOMAD_inscricaoMunicipal;
public string $TOMAD_municipio;
public string $TOMAD_email;
public string $TOMAD_END_descricaoCidade;
public string $TOMAD_END_cep;
public string $TOMAD_END_tipoLogradouro;
public string $TOMAD_END_logradouro;
public string $TOMAD_END_tipoBairro;
public string $TOMAD_END_codigoCidade;
public string $TOMAD_END_complemento;
public string $TOMAD_END_estado;
public string $TOMAD_END_numero;
public string $TOMAD_END_bairro;

// SERVIÇO
public string $SERV_codigo;
public string $SERV_codigoTributacao;
public string $SERV_discriminacao;
public string $SERV_VL_servico;
public string $SERV_VL_deducoes;
public string $SERV_VL_baseCalculo;
public string $SERV_VL_descontoIncondicionado;
public string $SERV_VL_descontoCondicionado;
public string $SERV_ISS_tipoTributacao;
public string $SERV_ISS_exigibilidade;
public string $SERV_ISS_retido;
public string $SERV_ISS_aliquota;


//Função master para carregar o evento pelo ID_BASE
    public function CLEAR_INFO_NFSE(){
        $BoolAux = true;

        $this->PRES_cpfCnpj = '';
        $this->PRES_razaoSocial = '';
        $this->PRES_nomeFantasia = '';
        $this->PRES_inscricaoMunicipal = '';
        $this->PRES_inscricaoEstadual = '';
        $this->PRES_simplesNacional = '';
        $this->PRES_regimeTributario = '';
        $this->PRES_regimeTributarioEspecial = '';
        $this->PRES_email = '';
        $this->PRES_END_descricaoCidade = '';
        $this->PRES_END_cep = '';
        $this->PRES_END_tipoLogradouro = '';
        $this->PRES_END_logradouro = '';
        $this->PRES_END_tipoBairro = '';
        $this->PRES_END_codigoCidade = '';
        $this->PRES_END_complemento = '';
        $this->PRES_END_estado = '';
        $this->PRES_END_numero = '';
        $this->PRES_END_BAIRRO = '';
        $this->PRES_TEL_ddd = '';
        $this->PRES_TEL_numero = '';
        
        // TOMADOR
        $this->TOMAD_cpfCnpj = '';
        $this->TOMAD_razaoSocial = '';
        $this->TOMAD_inscricaoMunicipal = '';
        $this->TOMAD_municipio = '';
        $this->TOMAD_email = '';
        $this->TOMAD_END_descricaoCidade = '';
        $this->TOMAD_END_cep = '';
        $this->TOMAD_END_tipoLogradouro = '';
        $this->TOMAD_END_logradouro = '';
        $this->TOMAD_END_tipoBairro = '';
        $this->TOMAD_END_codigoCidade = '';
        $this->TOMAD_END_complemento = '';
        $this->TOMAD_END_estado = '';
        $this->TOMAD_END_numero = '';
        $this->TOMAD_END_bairro = '';
        
        // SERVIÇO
        $this->SERV_codigo = '';
        $this->SERV_codigoTributacao = '';
        $this->SERV_discriminacao = '';
        $this->SERV_VL_servico = '';
        $this->SERV_VL_deducoes = '';
        $this->SERV_VL_baseCalculo = '';
        $this->SERV_VL_descontoIncondicionado = '';
        $this->SERV_VL_descontoCondicionado = '';
        $this->SERV_ISS_tipoTributacao = '';
        $this->SERV_ISS_exigibilidade = '';
        $this->SERV_ISS_retido = '';
        $this->SERV_ISS_aliquota = '';
        
        return $BoolAux;
    }

    public function PROCESSA_NFSE(){
        $BoolAux = true;

        return $BoolAux;
    }

    public function GET_RETORNO_NFSE(){
        $BoolAux = true;

        return $BoolAux;
    }

    public function SHOW_NFSE(){
        $BoolAux = true;

        return $BoolAux;
    }

    public function SHOW_XML(){
        $BoolAux = true;

        return $BoolAux;
    }



}   

?>

