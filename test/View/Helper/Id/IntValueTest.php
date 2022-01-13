<?php
namespace MonthlyBasis\SessionTest\View\Helper;

use MonthlyBasis\Session\Model\Service as SessionService;
use MonthlyBasis\Session\View\Helper as SessionHelper;
use PHPUnit\Framework\TestCase;

class IntValueTest extends TestCase
{
    protected function setUp(): void
    {
        $this->intValueServiceMock = $this->createMock(
            SessionService\Id\IntValue::class
        );
        $this->intValueHelper = new SessionHelper\Id\IntValue(
            $this->intValueServiceMock
        );
    }

    public function testInvoke()
    {
        $intValue = rand(0, 99999);

        $this->intValueServiceMock
            ->method('getIntValue')
            ->willReturn($intValue);

        $this->assertSame(
            $intValue,
            $this->intValueHelper->__invoke()
        );
    }
}
