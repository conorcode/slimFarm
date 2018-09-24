<?php
namespace Farm\Factories;

class PenModelFactory
{
    public function __invoke()
    {
        $cow = new \Farm\Models\CowModel();
        $chicken = new \Farm\Models\ChickenModel();
        return new \Farm\Models\PenModel($cow, $chicken);
    }
}
