<?php
    
    //TITULO: Emissão NFSe - plugin TecnoSpeed
    //CRIADO: DANIEL SANTIAGO
    //DATA:03/2025

class NFSeX {

// PRESTADOR
public $pRETORNO = 0;
public $xTOKEN;
public $MSG_RETORNO;

public $NUMERO_NFSE;
public $SITUACAO; 
public $ID_NF_TECNOSPEED;
public $PRES_cpfCnpj;
public $PRES_razaoSocial;
public $PRES_nomeFantasia;
public $PRES_inscricaoMunicipal;
public $PRES_inscricaoEstadual;
public $PRES_simplesNacional;
public $PRES_regimeTributario;
public $PRES_regimeTributarioEspecial;
public $PRES_email;
public $PRES_END_descricaoCidade;
public $PRES_END_cep;
public $PRES_END_tipoLogradouro;
public $PRES_END_logradouro;
public $PRES_END_tipoBairro;
public $PRES_END_codigoCidade;
public $PRES_END_complemento;
public $PRES_END_estado;
public $PRES_END_numero;
public $PRES_END_BAIRRO;
public $PRES_TEL_ddd;
public $PRES_TEL_numero;

// TOMADOR
public $TOMAD_cpfCnpj;
public $TOMAD_razaoSocial;
public $TOMAD_inscricaoMunicipal;
public $TOMAD_municipio;
public $TOMAD_email;
public $TOMAD_END_descricaoCidade;
public $TOMAD_END_cep;
public $TOMAD_END_tipoLogradouro;
public $TOMAD_END_logradouro;
public $TOMAD_END_tipoBairro;
public $TOMAD_END_codigoCidade;
public $TOMAD_END_complemento;
public $TOMAD_END_estado;
public $TOMAD_END_numero;
public $TOMAD_END_bairro;

// SERVIÇO
public $SERV_codigo;
public $SERV_codigoTributacao;
public $SERV_discriminacao;
public $SERV_VL_servico;
public $SERV_VL_deducoes;
public $SERV_VL_baseCalculo;
public $SERV_VL_descontoIncondicionado;
public $SERV_VL_descontoCondicionado;
public $SERV_ISS_tipoTributacao;
public $SERV_ISS_exigibilidade;
public $SERV_ISS_retido;
public $SERV_ISS_aliquota;


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

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.plugnotas.com.br/nfse',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS =>'[
                {
                    "prestador": {
                        "cpfCnpj": "'.$this->PRES_cpfCnpj.'",
                        "razaoSocial": "'.$this->PRES_razaoSocial.'",
                        "nomeFantasia": "'.$this->PRES_nomeFantasia.'",
                        "inscricaoMunicipal": "'.$this->PRES_inscricaoMunicipal.'",
                        "inscricaoEstadual": "'.$this->PRES_inscricaoEstadual.'",
                        "simplesNacional": '.$this->PRES_simplesNacional.',
                        "regimeTributario": '.$this->PRES_regimeTributario.',
                        "regimeTributarioEspecial": '.$this->PRES_regimeTributarioEspecial.',
                        "email": "'.$this->PRES_email.'",
                        "endereco": {
                            "descricaoCidade": "'.$this->PRES_END_descricaoCidade.'",
                            "cep": "'.$this->PRES_END_cep.'",
                            "tipoLogradouro": "'.$this->PRES_END_tipoLogradouro.'",
                            "logradouro": "'.$this->PRES_END_logradouro.'",
                            "tipoBairro": "'.$this->PRES_END_tipoBairro.'",
                            "codigoCidade": "'.$this->PRES_END_codigoCidade.'",
                            "complemento": "'.$this->PRES_END_complemento.'",
                            "estado": "'.$this->PRES_END_estado.'",
                            "numero": "'.$this->PRES_END_numero.'",
                            "bairro": "'.$this->PRES_END_BAIRRO.'"
                        },
                        "telefone": {
                            "ddd": "'.$this->PRES_TEL_ddd.'",
                            "numero": "'.$this->PRES_TEL_numero.'"
                        }
                    },
                    "tomador": {
                        "cpfCnpj": "'.$this->TOMAD_cpfCnpj.'",
                        "razaoSocial": "'.$this->TOMAD_razaoSocial.'",
                        "inscricaoMunicipal": "'.$this->TOMAD_inscricaoMunicipal.'",
                        "municipio": "'.$this->TOMAD_municipio.'",
                        "email": "'.$this->TOMAD_email.'",
                        "endereco": {
                            "descricaoCidade": "'.$this->TOMAD_END_descricaoCidade.'",
                            "cep": "'.$this->TOMAD_END_cep.'",
                            "tipoLogradouro": "'.$this->TOMAD_END_tipoLogradouro.'",
                            "logradouro": "'.$this->TOMAD_END_logradouro.'",
                            "tipoBairro": "'.$this->TOMAD_END_tipoBairro.'",
                            "codigoCidade": "'.$this->TOMAD_END_codigoCidade.'",
                            "complemento": "'.$this->TOMAD_END_complemento.'",
                            "estado": "'.$this->TOMAD_END_estado.'",
                            "numero": "'.$this->TOMAD_END_numero.'",
                            "bairro": "'.$this->TOMAD_END_bairro.'"
                        }
                    },
                    "servico": {
                        "codigo": "'.$this->SERV_codigo.'",
                        "codigoTributacao": "'.$this->SERV_codigoTributacao.'",
                        "discriminacao": "'.$this->SERV_discriminacao.'",
                        "valor": {
                            "servico": '.$this->SERV_VL_servico.',
                            "deducoes": '.$this->SERV_VL_deducoes.',
                            "baseCalculo": '.$this->SERV_VL_baseCalculo.',
                            "descontoIncondicionado": '.$this->SERV_VL_descontoIncondicionado.',
                            "descontoCondicionado": '.$this->SERV_VL_descontoCondicionado.'
                        },
                        "iss": {
                            "tipoTributacao": '.$this->SERV_ISS_tipoTributacao.',
                            "exigibilidade": '.$this->SERV_ISS_exigibilidade.',
                            "retido": '.$this->SERV_ISS_retido.',
                            "aliquota": '.$this->SERV_ISS_aliquota.'
                        }
                    }
                }
            ]',
        CURLOPT_HTTPHEADER => array(
            'x-api-key: '.$this->xTOKEN,
            'Content-Type: application/json'
        ),
        ));

        $response = curl_exec($curl);

        echo $response;
        echo '<br><br>';

        $data = json_decode($response, true);

        $this->ID_NF_TECNOSPEED = $data['documents'][0]['id'];
        echo "ID NFSe: " .$this->ID_NF_TECNOSPEED.'<br>';

        curl_close($curl);

        if($this->ID_NF_TECNOSPEED = ''){
            $BoolAux = FALSE;   
        }else{
            //salva o ID na tabela de NOTA_SERVICO 
        }

        return $BoolAux;
        
    }

    public function GET_RETORNO_NFSE(){
        $BoolAux = true;

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.plugnotas.com.br/nfse/'.$this->ID_NF_TECNOSPEED,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'x-api-key: '.$this->xTOKEN,
                'Content-Type: application/json'
            ),
        ));

        $retorno = curl_exec($curl);
        
        echo '<br><br>';
        echo $retorno;
        echo '<br><br>';

        $Retorno_Consulta = json_decode($retorno, true);

        curl_close($curl);
        
        try{
            $this->SITUACAO = $Retorno_Consulta['retorno']['situacao'];
        } catch (Exception $e) {
            $this->SITUACAO = '';
        }

        try{
            $this->SITUACAO = $Retorno_Consulta['retorno']['mensagemRetorno'];
        } catch (Exception $e) {
            $this->SITUACAO = '';
        }


        if($this->SITUACAO == 'ENVIADA'|| $this->SITUACAO == 'REGISTRADA'){
            $this->pRETORNO = 0; 
        }

        if($this->SITUACAO == 'AUTORIZADA'){
            $this->pRETORNO = 1;              
            $this->NUMERO_NFSE = $Retorno_Consulta['retorno']['numeroNfse'];
        }

        if($this->SITUACAO == 'REJEITADA'|| $this->SITUACAO == 'REJEITADO'){
            $this->pRETORNO = 2; 
            
            $this->MSG_RETORNO = $Retorno_Consulta['error']['mensagem'];
            $BoolAux = false;
        }             
                        
        return $BoolAux;
    }

    public function SHOW_NFSE(){
        $BoolAux = true;

        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.plugnotas.com.br/nfse/pdf/'.$this->ID_NF_TECNOSPEED,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'x-api-key: '.$this->xTOKEN,
            'Content-Type: application/json'
        ),
        ));
    
        $response = curl_exec($curl);
    
        curl_close($curl);
    
        header('Content-Type: application/pdf');
        header('Content-Disposition: inline; filename="documento.pdf"');
        header('Content-Transfer-Encoding: binary');
        header('Accept-Ranges: bytes');
        
        echo $response;

        return $BoolAux;
    }

    public function SHOW_XML(){
        $BoolAux = true;

        return $BoolAux;
    }



}   

?>

