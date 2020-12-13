<?php
namespace MonthlyBasis\SessionTest\Service\Id;

use MonthlyBasis\Session\Service as SessionService;
use PHPUnit\Framework\TestCase;

class IntValueTest extends TestCase
{
    protected function setUp(): void
    {
        $this->idServiceMock = $this->createMock(
            SessionService\Id::class
        );
        $this->intValueService = new SessionService\Id\IntValue(
            $this->idServiceMock
        );
    }

    public function test_getIntValue()
    {
        $this->idServiceMock
            ->expects($this->exactly(6))
            ->method('getId')
            ->willReturnOnConsecutiveCalls(
                '',
                'abcdefg',
                'k84cciu1phufto8lntoul23h03',
                'v15j5n8bufd1pbdnbfk9argh41',
                'ffffffffffffffffffffffffff',
                'fffffffffffffffffffffffffffffffffffffffffffff'
            );

        $this->assertSame(
            0,
            $this->intValueService->getIntValue()
        );
        $this->assertSame(
            11259375,
            $this->intValueService->getIntValue()
        );
        $this->assertSame(
            139248120,
            $this->intValueService->getIntValue()
        );
        $this->assertSame(
            91683279293,
            $this->intValueService->getIntValue()
        );
        $this->assertSame(
            1152921504606846975,
            $this->intValueService->getIntValue()
        );
        $this->assertSame(
            1152921504606846975,
            $this->intValueService->getIntValue()
        );
    }
}
