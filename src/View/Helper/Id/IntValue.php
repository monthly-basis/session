<?php
namespace MonthlyBasis\Session\View\Helper\Id;

use Laminas\View\Helper\AbstractHelper;
use MonthlyBasis\Session\Model\Service as SessionService;

class IntValue extends AbstractHelper
{
    public function __construct(
        SessionService\Id\IntValue $intValueService
    ) {
        $this->intValueService = $intValueService;
    }

    public function __invoke(): int
    {
        return $this->intValueService->getIntValue();
    }
}
