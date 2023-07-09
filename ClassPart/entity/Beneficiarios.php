<?php
namespace ClassPart\Entity;

class Beneficiarios {
    public $id_datos_benef;
    public $Apellidos;
    public $email;
    public $password;

    public function __construct(private \classgrl\DataTables $pediTable) {

    }

    public function getPedidos() {
        return $this->pediTable->find('id_usuario', $this->id);
    }

    public function addPedido(array $pedido) {
     
      $pedido['id_usuario'] = $this->id;

     
      $this->pediTable->save($pedido);
    }
}