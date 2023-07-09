<?php
namespace ClassPart\Entity;

class Beneficiarios {
    public $id_datos_benef;
    public $Apellidos;
    public $Nombres;
    public $DNI;

    public function __construct(private \classgrl\DataTables $tablaBenef) {

    }

    public function getPedidos() {
        return $this->tablaBenef->find('id_usuario', $this->id);
    }

    public function addPedido(array $pedido) {
     
      $pedido['id_usuario'] = $this->id;

     
      $this->pediTable->save($pedido);
    }
}