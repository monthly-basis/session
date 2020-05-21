<?php
namespace LeoGalleguillos\Session\Helper\Id;

use LeoGalleguillos\Session\Service as SessionService;
use Laminas\View\Helper\AbstractHelper;

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
