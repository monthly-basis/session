<?php
namespace LeoGalleguillos\SessionTest;

use LeoGalleguillos\Session\Module;
use MonthlyBasis\LaminasTest\ModuleTestCase;

class ModuleTest extends ModuleTestCase
{
    protected function setUp(): void
    {
        $this->module = new Module();
    }
}
