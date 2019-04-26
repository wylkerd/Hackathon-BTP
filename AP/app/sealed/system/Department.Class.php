<?php
    class Department extends Manager{

        public function __construct($_company_id){
            try{
                parent::setCompanyId($_company_id);
            }catch(Exception $e){
                echo 'Error: ' . $e->getMessage();
            }
        }

        public function getAll(){
            try{
                $company_id = $this->getCompanyId();
                $stmt = $this::getInstance()->prepare("SELECT * FROM function WHERE company_id = :company_id");
                $stmt->bindParam(':company_id', $company_id, PDO::PARAM_INT);
                $stmt->execute();
                return $stmt->fetchAll();
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
        }

        public function getInfo($_data, $_function_id){
            try{
                $stmt = $this::getInstance()->prepare("SELECT * FROM function WHERE id = :function_id");
                $stmt->bindParam(':function_id', $_function_id, PDO::PARAM_INT);
                $result = $stmt->fetch(PDO::FETCH_OBJ);
                return $result->$_data;
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
        }

        public function exists($_name = NULL, $_id = NULL){
            try{
                $company_id = parent::getCompanyId();
                if(is_null($_name)){
                    $stmt = $this::getInstance()->prepare("SELECT * FROM function WHERE company_id = :company_id");
                    $stmt->bindParam(':company_id', $company_id, PDO::PARAM_INT);
                }else{
                    if(is_null($_id)){
                        $stmt = $this::getInstance()->prepare("SELECT * FROM function WHERE name = :name AND company_id = :company_id");
                        $stmt->bindParam(':name', $_name, PDO::PARAM_STR);
                        $stmt->bindParam(':company_id', $company_id, PDO::PARAM_INT);
                    }else{
                        $stmt = $this::getInstance()->prepare("SELECT * FROM function WHERE name = :name AND id <> :id");
                        $stmt->bindParam(':name', $_name, PDO::PARAM_STR);
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
                $stmt = $this::getInstance()->prepare("INSERT INTO function(company_id, name, sector) VALUES(:company_id, :name, :sector)");
                $stmt->bindParam(':company_id', $company_id, PDO::PARAM_INT);
                $stmt->bindParam(':name', $_data['name'], PDO::PARAM_STR);
                $stmt->bindParam(':sector', $_data['sector'], PDO::PARAM_STR);
                return $stmt->execute() ? true : false;
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
        }

        public function edit(array $_data){
            try{
                $stmt = $this::getInstance()->prepare("UPDATE function SET name = :name, sector = :sector WHERE id = :function_id");
                $stmt->bindParam(':function_id', $_data['function_id'], PDO::PARAM_INT);
                $stmt->bindParam(':name', $_data['name'], PDO::PARAM_STR);
                $stmt->bindParam(':sector', $_data['sector'], PDO::PARAM_STR);
                return $stmt->execute() ? true : false;
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
        }
        
        public function delete($_id){
            try{
                $stmt = $this::getInstance()->prepare("DELETE FROM function WHERE id = :function_id");
                $stmt->bindParam(':function_id', $_id, PDO::PARAM_INT);
                return $stmt->execute() ? true : false;
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
        }
    }
?>