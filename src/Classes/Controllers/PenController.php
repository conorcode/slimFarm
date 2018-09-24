<?php
namespace Farm\Controllers;

class PenController
{
    protected $container;

    //this constructor passes the DIC in so we can get our PenFactory out of it later
    public function __construct($container)
    {
        $this->container = $container;
    }

    public function __invoke($request, $response, $args)
    {
        //create our pen from Penfactory in DIC
        $pen = $this->container->get('penModel');

        //assign args (variables that will be available on rendered view)
        $args['cowNoise'] = $pen->getCowNoise();
        $args['chickenNoise'] = $pen->getChickenNoise();

        //get the default template renderer out of DIC and pass the response and $args to a template file
        return $this->container->get('renderer')->render($response, 'showFarm.phtml', $args);
    }
}
