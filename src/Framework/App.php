<?php
declare(strict_types=1);
namespace framework;

use Framework\Container;
use Framework\Router;

class App
{
    private Router $router;
    private Container $container;
    public function __construct(string $containerDefinitionsPath = null)
    {
        $this->router = new Router();
        $this->container = new Container();
        if ($containerDefinitionsPath)
        {
           $containerDefinitions = include $containerDefinitionsPath;
           $this->container->addDefinitions($containerDefinitions);
        }
    }
    public function run()
    {
        $path = parse_url($_SERVER['REQUEST_URI'] , PHP_URL_PATH);
        $method = $_SERVER['REQUEST_METHOD'];
        $this->router->dispatch($method, $path);
    }
    public function get(string $path, array $controller): void
    {
        $this->router->add('GET',$path, $controller);
    }
}