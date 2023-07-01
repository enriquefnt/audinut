<?php
namespace ClassPart\Entity;

class Usuarios {
    public $id_usuario;
    public $nombre;
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