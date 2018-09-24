<?php
namespace Farm\Models;

class PenModel
{
    public $cow;
    public $chicken;

    public function __construct($cow, $chicken)
    {
        $this->cow = $cow;
        $this->chicken = $chicken;
    }

    public function getCowNoise()
    {
        return $this->cow->speak;
    }

    public function getChickenNoise()
    {
        return $this->chicken->speak;
    }
}
