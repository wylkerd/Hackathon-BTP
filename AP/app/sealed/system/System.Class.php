<?php
	class System{
        private $page;

        public function getPage(){
            return $this->page;
        }
        public function setPage($_page){
            $this->page = $_page;
        }
        
        public function toBoolean($_string){
            if($_string == 'true'){
                $_string = 1;
            }else{
                $_string = 0;
            }
            return $_string;
        }
        public function getFirstLetter($_string){
            $string = explode(" ", $_string);
            if(count($string) > 1){
                return strtoupper($string[0][0].$string[1][0]);
            }else{
                return strtoupper($string[0][0]);
            }
        }
        public function getNumbers($_str){
            return preg_replace("/[^0-9]/", "", $_str);
        }
        public function defaultString($_string){
            $new_string = preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/"),explode(" ","a A e E i I o O u U n N"),$_string);
            $new_string = strtolower($new_string);
            $remove = array(",", "?", ".", ";", ":");
            return str_replace($remove, "", $new_string);
        }
        public function mask($val, $mask){
            $maskared = '';
            $k = 0;
            for($i = 0; $i<=strlen($mask)-1; $i++){
                if($mask[$i] == '#'){
                    if(isset($val[$k]))
                        $maskared .= $val[$k++];
                }else{
                    if(isset($mask[$i]))
                        $maskared .= $mask[$i];
                }
            }
            return $maskared;
        }
        function getIp() {
            $ipaddress = '';
            if (isset($_SERVER['HTTP_CLIENT_IP']))
                $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
            else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
                $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
            else if(isset($_SERVER['HTTP_X_FORWARDED']))
                $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
            else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
                $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
            else if(isset($_SERVER['HTTP_FORWARDED']))
                $ipaddress = $_SERVER['HTTP_FORWARDED'];
            else if(isset($_SERVER['REMOTE_ADDR']))
                $ipaddress = $_SERVER['REMOTE_ADDR'];
            else
                $ipaddress = 'unknown';
            return $ipaddress;
        }
        public function encrypt($_data){
            try{
                return sha1(md5($_data));
            }catch(Exception $err){
                echo 'Erro: ', $err->getMessage();
            }
        }
        public function secureInput($_data){
            try{
                return addslashes($_data);
            }catch(Exception $err){
                echo 'Erro: ', $err->getMessage();
            }
        }
        public function dateToBrazilian($date, $hour = false){
            if(!$hour){
                $y= substr($date, 0,4);
                $m= substr($date, 5,2);
                $d= substr($date, 8,2);
                $new_date = $d.'/'.$m.'/'.$y;
            }else{
                $y= substr($date, 0,4);
                $m= substr($date, 5,2);
                $d= substr($date, 8,2);
                $hour= substr($date, 11,2);
                $min= substr($date, 14,2);
                $new_date = $d.'/'.$m.'/'.$y.' - '.$hour.':'.$min;
            }
            return $new_date;
        }
        public function dateToAmerican($date){
            $y= substr($date, 6,5);
            $m= substr($date, 3,2);
            $d= substr($date, 0,2);
            $new_date = $y.'/'.$m.'/'.$d;
            return $new_date;
        }
        public function validateMail($_data){
            try{
                if(filter_var($_data, FILTER_VALIDATE_EMAIL)) {
                    return true;
                }else{
                    return false;
                }
            }catch(Exception $err){
                echo 'Erro: ', $err->getMessage();
            }
        }
        public function validateCpf($cpf = null) {
            if(empty($cpf)) {
                return false;
            }
            $cpf = preg_replace("/[^0-9]/", "", $cpf);
            $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
            if (strlen($cpf) != 11) {
                return false;
            }
            else if ($cpf == '00000000000' || 
                $cpf == '11111111111' || 
                $cpf == '22222222222' || 
                $cpf == '33333333333' || 
                $cpf == '44444444444' || 
                $cpf == '55555555555' || 
                $cpf == '66666666666' || 
                $cpf == '77777777777' || 
                $cpf == '88888888888' || 
                $cpf == '99999999999') {
                return false;
             } else {   
                for ($t = 9; $t < 11; $t++) {
                    for ($d = 0, $c = 0; $c < $t; $c++) {
                        $d += $cpf{$c} * (($t + 1) - $c);
                    }
                    $d = ((10 * $d) % 11) % 10;
                    if ($cpf{$c} != $d) {
                        return false;
                    }
                }
                return true;
            }
        }
        public function dateDiff($first_date, $second_date = NULL){
            if(is_null($second_date)){
                $second_date = date("Y/m/d");
            }
            $d1 = new DateTime($first_date); 
            $d2 = new DateTime($second_date); 
            $diff=$d2->diff($d1);
            return $diff;
        }
        public function limitText($text, $limit){
            $txt = strlen($text);
            $max = $limit;
            if($txt > $max){
                $text = substr_replace($text, "...", $max, $txt - $max);
            }
            return $text;
        }
	}
?>