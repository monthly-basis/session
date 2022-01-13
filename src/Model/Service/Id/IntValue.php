<?php
namespace MonthlyBasis\Session\Model\Service\Id;

use MonthlyBasis\Session\Model\Service as SessionService;

/**
 * Cannot use 'Int' as class name because it is reserved. Use IntValue instead.
 */
class IntValue
{
    public function __construct(
        SessionService\Id $idService
    ) {
        $this->idService = $idService;
    }

    public function getIntValue(): int
    {
        /*
         * Use only 15 first characters of session ID.
         * Getting more characters may lead to int value returned by hexdec
         * which exceeds the max int value permitted by php.
         */
        $sessionId          = $this->idService->getId();
        $sessionIdTruncated = substr($sessionId, 0, 15);

        return hexdec($sessionIdTruncated);
    }
}
