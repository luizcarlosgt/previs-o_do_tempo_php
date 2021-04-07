<?php

class ConnectAPI
{
    private $chave = 'ee964dd1';

    public function getDados(Type $var = null)
    {
        # code...
        $dados = self::hg_request(array(
            'user_ip' => self::getIP()
          ), $this->chave);

          return $dados;
    }

    public function getIP()
    {
        # code...
        try {
            $ip = $_SERVER['REMOTE_ADDR'];
        } catch (Exception $th) {
            $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
        }
        return $ip;
    }

    public function hg_request($parametros, $chave = null, $endpoint = 'weather'){
        $url = 'http://api.hgbrasil.com/'.$endpoint.'/?format=json&';
        
        if(is_array($parametros)){
          // Insere a chave nos parametros
          if(!empty($chave)) $parametros = array_merge($parametros, array('key' => $chave));
          
          // Transforma os parametros em URL
          foreach($parametros as $key => $value){
            if(empty($value)) continue;
            $url .= $key.'='.urlencode($value).'&';
          }
          
          // Obtem os dados da API
          $resposta = file_get_contents(substr($url, 0, -1));
          return json_decode($resposta, true);
        } else {

          return false;
        }
      }
}
