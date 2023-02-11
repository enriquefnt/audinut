<?php
namespace ClassGrl;
/*
class EntryPoint {
public function __construct(private \ClassPart\AudinWebsite $website) {
}

*/
class EntryPoint {
	private $website;
public function __construct( \ClassPart\AudinWebsite $website) {
$this->website = $website;
}

private function loadTemplate($templateFileName, $variables) {
	extract($variables);
	ob_start();
	include __DIR__ . '/../templates/' . $templateFileName;
	return ob_get_clean();
}



private function checkUri(string $uri) {
		if ($uri != strtolower($uri)) {
		http_response_code(301);
	
		}
	}

public function run(string $uri, string $method) {
try {
	$this->checkUri($uri);
if ($uri == '') {
	$uri = $this->website->getDefaultRoute();
				}

	$route = explode('/', $uri);

	$controllerName = array_shift($route);
	$action = array_shift($route);

	$this->website->checkLogin($controllerName . '/' . $action);

	if ($method === 'POST') {
	$action .= 'Submit';
}
	
	$controller = $this->website->getController($controllerName);
	
	if (is_callable([$controller, $action])) {


		$page = $controller->$action(...$route);
		$title = $page['title'];
		$variables = $page['variables'] ?? [];

		$output = $this->loadTemplate($page['template'], $variables);

     }

	else {
		http_response_code(404);
		$title = 'No encontrado';

		$output = 'La página que usted busca no existe';
	}


} 


catch (PDOException $e) {
	$title = 'Error';
	$output = 'Error en la base de datos: ' . $e->getMessage() . ' en ' .
	$e->getFile() . ':' . $e->getLine();
}

	



	$layoutVariables = $this->website->getLayoutVariables();
    $layoutVariables['title'] = $title;
    $layoutVariables['output'] = $output;

        echo $this->loadTemplate('layout.html.php', $layoutVariables);


	
}


 }

 
