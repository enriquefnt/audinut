
<?php

class JokeController {
private $benefTable;
private $pediTable;
private $userTable

public function __construct(DatabaseTable $jokesTable,
DatabaseTable $authorsTable) {
$this->benefTable = $benefTable;
$this->pediTable = $pediTable;
$this->userTable = $userTable;
}




}