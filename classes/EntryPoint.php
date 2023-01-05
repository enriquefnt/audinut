
<?php
class EntryPoint {
	private $route;


public function __construct(private $website) {

}


private function loadTemplate($templateFileName, $variables) {
	extract($variables);
	ob_start();
	include __DIR__ . '/../templates/' . $templateFileName;
	return ob_get_clean();
}



private function checkUri($uri) {
		if ($uri != strtolower($uri)) {
		http_response_code(301);
		header('location: ' . strtolower($uri));
		}
	}

public function run($uri) {
try {
	$this->checkUri($uri);
if ($uri == '') {
	$uri = $this->website->getDefaultRoute();
				}

	$route = explode('/', $uri);

	$controllerName = array_shift($route);
	$action = array_shift($route);
	$controller = $this->website->getController($controllerName);
	$page = $controller->$action(...$route);
	$title = $page['title'];
	$variables = $page['variables'] ?? [];

	$output = $this->loadTemplate($page['template'], $variables);
} 


catch (PDOException $e) {
	$title = 'An error has occurred';
	$output = 'Database error: ' . $e->getMessage() . ' in ' .
	$e->getFile() . ':' . $e->getLine();
}
	include __DIR__ . '/../templates/layout.html.php';
}

 }




