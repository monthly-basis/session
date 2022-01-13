<?php
namespace MonthlyBasis\SessionTest\Model\Service;

use MonthlyBasis\Session\Model\Service as SessionService;
use PHPUnit\Framework\TestCase;

class IdTest extends TestCase
{
    protected function setUp(): void
    {
        $this->idService = new SessionService\Id();
    }

    public function test_getId()
    {
        $sessionId = $this->idService->getId();
        $this->assertSame(
            26,
            strlen($sessionId)
        );
    }
}
