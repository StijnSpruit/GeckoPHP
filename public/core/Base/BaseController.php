<?php

namespace App\core\Base;

use Latte\Engine;

class BaseController {
    private $latte;
    public function __construct(Engine $latte)
    {
        $this->latte = $latte;
        $latte->setTempDirectory('../Base/tempDir');
    }

    public function render($template, $data = []) {
        $this->latte->render($template, $data);
    }
}