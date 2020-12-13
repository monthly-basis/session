<?php
namespace MonthlyBasis\SessionTest\Service;

use MonthlyBasis\Session\Service as SessionService;
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
