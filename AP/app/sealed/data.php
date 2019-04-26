<?php
    include("controllers/controller_data.php");
    $System = new System();
    $action = $_REQUEST['action'];
    $Manager = new Manager();
    $Manager->setCompanyId('53192143321');
    $Department = new Department('53192143321');
    $Employee = new Employee('53192143321');
    $ServiceOrder = new ServiceOrder('53192143321');
    switch($action){
        /**
         * Function STEP
         */
        case 'addFunction':
            if(!$Department->exists($_REQUEST['name'])){
                if($Department->add($_REQUEST)){
                    echo json_encode([
                        "success"   => true
                    ]);
                }else{
                    echo json_encode([
                        "success"       => false,
                        "description"   => "error"
                    ]);
                }
            }else{
                echo json_encode([
                    "success"       => false,
                    "description"   => "already exists"
                ]);
            }
            break;
            
        case 'editFunction':
            if(!$Department->exists($_REQUEST['name'], $_REQUEST['function_id'])){
                if($Department->edit($_REQUEST)){
                    echo json_encode([
                        "success"   => true
                    ]);
                }else{
                    echo json_encode([
                        "success"       => false,
                        "description"   => "error"
                    ]);
                }
            }else{
                echo json_encode([
                    "success"       => false,
                    "description"   => "already exists"
                ]);
            }
            break;
        
        case 'deleteFunction':
            if($Department->delete($_REQUEST['function_id'])){
                echo json_encode([
                    "success"       => true
                ]);
            }else{
                echo json_encode([
                    "success"       => false,
                    "description"   => "error"
                ]);
            }
            break;
        
        case 'loadFunction':
            $function_id = $_REQUEST['id'];
            echo json_encode([
                "name"  => $Department->getInfo("name", $function_id),
                "sector"  => $Department->getInfo("sector", $function_id)
            ]);
            break;
            
        case 'getFunctionView':
            $response = '';
            if($Department->exists()){
                foreach($Department->getAll() as $row){
                    $response .= '
                        <tr id = '.$row['id'].'>
                            <td>'.$row['name'].'</td>
                            <td>'.$row['name'].'</td>
                        </tr>
                    ';
                }
            }else{
                $response .= '<tr><td colspan = "2">Não foi encontrado nenhum dado!</td></tr>';
            }
            echo $response;
            break;
        
        /**
         * Employee STEP
         */
        case 'addEmployee':
            if(!$Employee->exists($_REQUEST['cpf'])){
                if($Employee->add($_REQUEST)){
                    echo json_encode([
                        "success"   => true
                    ]);
                }else{
                    echo json_encode([
                        "success"       => false,
                        "description"   => "error"
                    ]);
                }
            }else{
                echo json_encode([
                    "success"       => false,
                    "description"   => "already exists"
                ]);
            }
            break;

            case 'editEmployee':
            if(!$Employee->exists($_REQUEST['cpf'], $_REQUEST['employee_id'])){
                if($Employee->edit($_REQUEST)){
                    echo json_encode([
                        "success"   => true
                    ]);
                }else{
                    echo json_encode([
                        "success"       => false,
                        "description"   => "error"
                    ]);
                }
            }else{
                echo json_encode([
                    "success"       => false,
                    "description"   => "already exists"
                ]);
            }
            break;
        
        case 'deleteEmployee':
            if($Employee->delete($_REQUEST['employee_id'])){
                echo json_encode([
                    "success"       => true
                ]);
            }else{
                echo json_encode([
                    "success"       => false,
                    "description"   => "error"
                ]);
            }
            break;

        /**
         * Service Order STEP
         */
        case 'addServiceOrder':
            if(!$ServiceOrder->exists($_REQUEST['name'])){
                if($ServiceOrder->add($_REQUEST)){
                    echo json_encode([
                        "success"   => true
                    ]);
                }else{
                    echo json_encode([
                        "success"       => false,
                        "description"   => "error"
                    ]);
                }
            }else{
                echo json_encode([
                    "success"       => false,
                    "description"   => "already exists"
                ]);
            }
            break;

            case 'editServiceOrder':
            if(!$ServiceOrder->exists($_REQUEST['name'], $_REQUEST['service_order_id'])){
                if($ServiceOrder->edit($_REQUEST)){
                    echo json_encode([
                        "success"   => true
                    ]);
                }else{
                    echo json_encode([
                        "success"       => false,
                        "description"   => "error"
                    ]);
                }
            }else{
                echo json_encode([
                    "success"       => false,
                    "description"   => "already exists"
                ]);
            }
            break;
        
        case 'deleteServiceOrder':
            if($ServiceOrder->delete($_REQUEST['service_order_id'])){
                echo json_encode([
                    "success"       => true
                ]);
            }else{
                echo json_encode([
                    "success"       => false,
                    "description"   => "error"
                ]);
            }
            break;
            
        default:
            echo json_encode([
                "success" => false,
                "description" => "undefined function"
            ]);
            break;
    }
?>