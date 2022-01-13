<?php
namespace MonthlyBasis\Session;

use MonthlyBasis\Session\Model\Service as SessionService;
use MonthlyBasis\Session\View\Helper as SessionHelper;

class Module
{
    public function getConfig()
    {
        return [
            'view_helpers' => [
                'aliases' => [
                    'getSessionIdIntValue' => SessionHelper\Id\IntValue::class,
                ],
                'factories' => [
                    SessionHelper\Id\IntValue::class => function ($sm) {
                        return new SessionHelper\Id\IntValue(
                            $sm->get(SessionService\Id\IntValue::class)
                        );
                    },
                ],
            ],
        ];
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                SessionService\Id::class => function ($sm) {
                    return new SessionService\Id();
                },
                SessionService\Id\IntValue::class => function ($sm) {
                    return new SessionService\Id\IntValue(
                        $sm->get(SessionService\Id::class)
                    );
                },
            ],
        ];
    }
}
