<?php
declare(strict_types=1);
namespace Ivchuk\Framework\Http;
use Ivchuk\Framework\Http\Request;
class RequestDispatcher
{
    /**
     * @var RouterInterface[] $routers
     */
    private array $routers;

    private Request $request;

    private \DI\FactoryInterface $factory;

    public function __construct(
        array $routers,
        Request $request,
        \DI\FactoryInterface $factory
    ) {
        foreach ($routers as $router) {
            if (!($router instanceof RouterInterface)) {
                throw new \InvalidArgumentException('Routers must implement ' . RouterInterface::class);
            }
        }

        $this->routers = $routers;
        $this->request = $request;
        $this->factory = $factory;
    }
   public  function dispatcher()
   {
//       $requestUri = trim($_SERVER['REQUEST_URI'], '/');
       //$request= new Request();
       $requestUrl=$this->request->getRequestUrl();
       foreach ($this->routers as $router) {
           if ($controllerClass = $router->match($requestUrl)) {
//               $controller = new $controllerClass;
               $controller = $this->factory->get($controllerClass);
               if (!($controller instanceof ControllerInterface)) {
                   throw new \InvalidArgumentException(
                       'Controller $controller must implement ' . ControllerInterface::class
                   );
               }

               $html = $controller->execute();
           }
       }
       if (!isset($html)) {
           header("HTTP/1.0 404 Not Found");
           exit(0);
       }

       header('Content-Type: text/html; charset=utf-8');
       echo $html;
   }
}