<?php
    class Employee extends Manager{

        public function __construct($_company_id){
            try{
                parent::setCompanyId($_company_id);
            }catch(Exception $e){
                echo 'Error: ' . $e->getMessage();
            }
        }

        public function getInfo($_data, $_employee_id){
            try{
                $company_id = $this->getCompanyId();
                $stmt = $this::getInstance()->prepare("SELECT * FROM employee WHERE id = :employee_id AND company_id = :company_id");
                $stmt->bindParam(':company_id', $company_id, PDO::PARAM_INT);
                $stmt->bindParam(':employee_id', $_employee_id, PDO::PARAM_INT);
                $result = $stmt->fetch(PDO::FETCH_OBJ);
                return $result->$_data;
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
        }

        public function exists($_cpf = NULL, $_id = NULL){
            try{
                $company_id = $this->getCompanyId();
                if(is_null($_cpf)){
                    $stmt = $this::getInstance()->prepare("SELECT * FROM employee WHERE company_id = :company_id");
                    $stmt->bindParam(':company_id', $company_id, PDO::PARAM_INT);
                }else{
                    if(is_null($_id)){
                        $stmt = $this::getInstance()->prepare("SELECT * FROM employee WHERE cpf = :cpf AND company_id = :company_id");
                        $stmt->bindParam(':cpf', $_cpf, PDO::PARAM_STR);
                        $stmt->bindParam(':company_id', $company_id, PDO::PARAM_INT);
                    }else{
                        $stmt = $this::getInstance()->prepare("SELECT * FROM employee WHERE cpf = :cpf AND id <> :id");
                        $stmt->bindParam(':cpf', $_cpf, PDO::PARAM_STR);
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
                $stmt = $this::getInstance()->prepare("INSERT INTO employee(company_id, cpf, scale, class, function_id) VALUES(:company_id, :cpf, :scale, :class, :function_id)");
                $stmt->bindParam(':company_id', $company_id, PDO::PARAM_INT);
                $stmt->bindParam(':cpf', $_data['cpf'], PDO::PARAM_STR);
                $stmt->bindParam(':scale', $_data['scale'], PDO::PARAM_STR);
                $stmt->bindParam(':class', $_data['class'], PDO::PARAM_STR);
                $stmt->bindParam(':function_id', $_data['function_id'], PDO::PARAM_INT);
                return $stmt->execute() ? true : false;
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
        }

        public function edit(array $_data){
            try{
                $stmt = $this::getInstance()->prepare("UPDATE employee SET cpf = :cpf, scale = :scale, class = :class, function_id = :function_id WHERE id = :employee_id");
                $stmt->bindParam(':employee_id', $_data['employee_id'], PDO::PARAM_INT);
                $stmt->bindParam(':cpf', $_data['cpf'], PDO::PARAM_STR);
                $stmt->bindParam(':scale', $_data['scale'], PDO::PARAM_STR);
                $stmt->bindParam(':class', $_data['class'], PDO::PARAM_STR);
                $stmt->bindParam(':function_id', $_data['function_id'], PDO::PARAM_INT);
                return $stmt->execute() ? true : false;
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
        }
        
        public function delete($_id){
            try{
                $stmt = $this::getInstance()->prepare("DELETE FROM employee WHERE id = :employee_id");
                $stmt->bindParam(':employee_id', $_id, PDO::PARAM_INT);
                return $stmt->execute() ? true : false;
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
        }
    }
?>