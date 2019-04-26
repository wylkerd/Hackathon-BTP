<?php
    class Team extends Manager{

        public function getInfo($_data, $_team_id){
            try{
                $company_id = $this->getCompanyId();
                $stmt = $this::getInstance()->prepare("SELECT * FROM team WHERE id = :team_id AND company_id = :company_id");
                $stmt->bindParam(':company_id', $company_id, PDO::PARAM_INT);
                $stmt->bindParam(':team_id', $_team_id, PDO::PARAM_INT);
                $result = $stmt->fetch(PDO::FETCH_OBJ);
                return $result->$_data;
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
        }

        public function exists($_number = NULL, $_id = NULL){
            try{
                $company_id = $this->getCompanyId();
                if(is_null($_number)){
                    $stmt = $this::getInstance()->prepare("SELECT * FROM team WHERE company_id = :company_id");
                    $stmt->bindParam(':company_id', $company_id, PDO::PARAM_INT);
                }else{
                    if(is_null($_id)){
                        $stmt = $this::getInstance()->prepare("SELECT * FROM team WHERE number = :number AND company_id = :company_id");
                        $stmt->bindParam(':number', $_number, PDO::PARAM_INT);
                        $stmt->bindParam(':company_id', $company_id, PDO::PARAM_INT);
                    }else{
                        $stmt = $this::getInstance()->prepare("SELECT * FROM team WHERE number = :number AND id <> :id");
                        $stmt->bindParam(':number', $_number, PDO::PARAM_INT);
                        $stmt->bindParam(':id', $_id, PDO::PARAM_INT);
                    }
                }
                $stmt->execute();
                $result = $stmt->fetchAll();
                return count($result) ? true : false;
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
        }

        public function add(array $_data){
            try{
                $company_id = $this->getCompanyId();
                $stmt = $this::getInstance()->prepare("INSERT INTO team(company_id, number) VALUES(:company_id, :number)");
                $stmt->bindParam(':company_id', $company_id, PDO::PARAM_INT);
                $stmt->bindParam(':number', $_data['number'], PDO::PARAM_INT);
                return $stmt->execute() ? true : false;
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
        }

        public function edit(array $_data){
            try{
                $stmt = $this::getInstance()->prepare("UPDATE team SET number = :number WHERE id = :team_id");
                $stmt->bindParam(':team_id', $_data['team_id'], PDO::PARAM_INT);
                $stmt->bindParam(':number', $_data['number'], PDO::PARAM_INT);
                return $stmt->execute() ? true : false;
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
        }
        
        public function delete($_id){
            try{
                $stmt = $this::getInstance()->prepare("DELETE FROM team WHERE id = :team_id");
                $stmt->bindParam(':team_id', $_id, PDO::PARAM_INT);
                return $stmt->execute() ? true : false;
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
        }
    }
?>