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
      // set the `authorId` in the new joke to the id stored in this instance
      $pedido['id_usuario'] = $this->id;

     
      $this->pediTable->save($pedido);
    }
}