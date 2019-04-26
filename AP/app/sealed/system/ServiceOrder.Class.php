<?php
    class ServiceOrder extends Manager{

        public function __construct($_company_id){
            try{
                parent::setCompanyId($_company_id);
            }catch(Exception $e){
                echo 'Error: ' . $e->getMessage();
            }
        }

        public function getInfo($_data, $_id){
            try{
                $company_id = $this->getCompanyId();
                $stmt = $this::getInstance()->prepare("SELECT * FROM service_order WHERE id = :id AND company_id = :company_id");
                $stmt->bindParam(':company_id', $company_id, PDO::PARAM_INT);
                $stmt->bindParam(':id', $_id, PDO::PARAM_INT);
                $result = $stmt->fetch(PDO::FETCH_OBJ);
                return $result->$_data;
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
        }

        public function getMaxId(){
            try{
                $company_id = $this->getCompanyId();
                $stmt = $this::getInstance()->prepare("SELECT MAX(id) AS max FROM service_order WHERE company_id = :company_id");
                $stmt->bindParam(':company_id', $company_id, PDO::PARAM_INT);
                $result = $stmt->fetch(PDO::FETCH_OBJ);
                return $result->max;
                // if(is_null($id)){
                //     $id = 1;
                // }else{
                //     $id += 1;
                // }
                // return $id;
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
        }

        public function exists($_name = NULL, $_id = NULL){
            try{
                $company_id = $this->getCompanyId();
                if(is_null($_name)){
                    $stmt = $this::getInstance()->prepare("SELECT * FROM service_order WHERE company_id = :company_id");
                    $stmt->bindParam(':company_id', $company_id, PDO::PARAM_INT);
                }else{
                    if(is_null($_id)){
                        $stmt = $this::getInstance()->prepare("SELECT * FROM service_order WHERE name = :name AND company_id = :company_id");
                        $stmt->bindParam(':name', $_name, PDO::PARAM_STR);
                        $stmt->bindParam(':company_id', $company_id, PDO::PARAM_INT);
                    }else{
                        $stmt = $this::getInstance()->prepare("SELECT * FROM service_order WHERE name = :name AND id <> :id");
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
                $id = $this->getMaxId();
                $stmt = $this::getInstance()->prepare("INSERT INTO service_order(id, company_id, name, description, answer_time, checkin_time, class) VALUES(:id, :company_id, :name, :description, :answer_time, :checkin_time, :class)");
                $stmt->bindParam(':id', $id, PDO::PARAM_INT);
                $stmt->bindParam(':company_id', $company_id, PDO::PARAM_INT);
                $stmt->bindParam(':name', $_data['name'], PDO::PARAM_STR);
                $stmt->bindParam(':description', $_data['description'], PDO::PARAM_STR);
                $stmt->bindParam(':answer_time', $_data['answer_time'], PDO::PARAM_STR);
                $stmt->bindParam(':checkin_time', $_data['checkin_time'], PDO::PARAM_STR);
                $stmt->bindParam(':class', $_data['class'], PDO::PARAM_INT);
                return $stmt->execute() ? true : false;
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
        }

        public function edit(array $_data){
            try{
                $stmt = $this::getInstance()->prepare("UPDATE service_order SET name = :name, description = :description, answer_time = :answer_time, checkin_time = :checkin_time, class = :class WHERE id = :service_order_id");
                $stmt->bindParam(':service_order_id', $_data['service_order_id'], PDO::PARAM_INT);
                $stmt->bindParam(':name', $_data['name'], PDO::PARAM_STR);
                $stmt->bindParam(':description', $_data['description'], PDO::PARAM_STR);
                $stmt->bindParam(':answer_time', $_data['answer_time'], PDO::PARAM_STR);
                $stmt->bindParam(':checkin_time', $_data['checkin_time'], PDO::PARAM_STR);
                $stmt->bindParam(':class', $_data['class'], PDO::PARAM_INT);
                return $stmt->execute() ? true : false;
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
        }
        
        public function delete($_id){
            try{
                $stmt = $this::getInstance()->prepare("DELETE FROM service_order WHERE id = :service_order_id");
                $stmt->bindParam(':service_order_id', $_id, PDO::PARAM_INT);
                return $stmt->execute() ? true : false;
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
        }

        public function addServiceOrderEmployee(array $_data){
            try{
                $stmt = $this::getInstance()->prepare("INSERT INTO service_order_employee(service_order_id, employee_id) VALUES(:service_order_id, :service_order_id, :employee_id)");
                $stmt->bindParam(':service_order_id', $_data["service_order_id"], PDO::PARAM_INT);
                $stmt->bindParam(':employee_id', $_data["employee_id"], PDO::PARAM_INT);
                return $stmt->execute() ? true : false;
            }catch(PDOException $e){
                echo 'Error: ' . $e->getMessage();
            }
        }
    }
?>