<?php
    class Manager extends Connection{
        protected $company_id;

        public function getCompanyId(){
            try{
                return $this->company_id;
            }catch(Exception $e){
                echo 'Error: ' . $e->getMessage();
            }
        }

        public function setCompanyId($_cpf){
            try{
                $stmt = $this::getInstance()->prepare('SELECT * FROM manager WHERE cpf = :cpf');
                $stmt->bindParam(':cpf', $_cpf, PDO::PARAM_STR);   
                $stmt->execute();
                $result = $stmt->fetch(PDO::FETCH_OBJ);
                $this->company_id = $result->company_id;
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
        }
    }
?>