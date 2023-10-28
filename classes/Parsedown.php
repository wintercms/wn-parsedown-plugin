<?php

namespace Winter\Parsedown\Classes;

use ParsedownExtra;

class Parsedown extends ParsedownExtra
{
    public function setUnmarkedBlockTypes($unmarkedBlockTypes)
    {
        $this->unmarkedBlockTypes = $unmarkedBlockTypes;

        return $this;
    }
}
