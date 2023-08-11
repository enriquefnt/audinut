<?php
namespace ClassPart\Controllers;
use \ClassGrl\DataTables;
#[AllowDynamicProperties]
class Nutrotera {
private $tablaProdu;
public function __construct(
							\ClassGrl\DataTables $tablaProdu,
							)
							 {
        $this->tablaProdu = $tablaProdu;
		    }



            public function produ($id=null){       
                
            
             if (isset($_GET['id'])) {
                           $datosProdu = $this->tablaProdu->findById($_GET['id']);
                                             }
                     
          
                 $title = 'Carga Productos';
            
                    
            
                           return ['template' => 'nutrotera.html.php',
                                      'title' => $title ,
                                  'variables' => [
                                  'datosProdu' => $datosProdu  ?? ' '
                                                  ]             
                                    ];

            
             }
              
            
            public function produSubmit() {
                
            
                $Nutroter=$_POST['Nutroter'];
           
             
                $Nutroter['fechaCarga'] = new \DateTime();
               $Nutroter['activo'] = isset($_POST['Nutroter']['activo']) ? 1 : 0;


                $errors = [];
                if ($_SESSION['tipo'] > 2) {
                $errors[] = 'Ud no está habilitado para cargar productos';
                }
                if  (empty($errors)) {
                    
                $this->tablaProdu->save($Nutroter);
                }
                                                     
            
            header('Location: /nutroter/listar');
            
            
           
        }

        public function listar(){
          
            $result = $this->tablaProdu->findAll();
         
                $producto = [];
                foreach ($result as $producto) {
                    
                    $productos[] = [
                        'id_producto' => $producto['id_producto'],
                        'producto' => $producto['producto']?? '',
                        'tipo' => $producto['tipo'] ?? '',
                        'activo' => $producto['activo']?? ''
                                            ];
                        }
              
                $title = 'Lista Productos';
        
             
        
                return ['template' => 'listaprod.html.php',
                        'title' => $title,
                        'variables' => [
                        'productos' => $productos,
                     ]
                    ];
            }

            
        }          
    
            