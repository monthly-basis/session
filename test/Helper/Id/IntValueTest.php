<?php
namespace MonthlyBasis\SessionTest\Helper;

use MonthlyBasis\Session\Service as SessionService;
use MonthlyBasis\Session\Helper as SessionHelper;
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
