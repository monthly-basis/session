<?php
namespace LeoGalleguillos\SessionTest;

use LeoGalleguillos\Session\Module;
use LeoGalleguillos\Test\ModuleTestCase;

class ModuleTest extends ModuleTestCase
{
    protected function setUp(): void
    {
        $this->module = new Module();
    }
}
