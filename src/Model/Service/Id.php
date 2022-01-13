<?php
namespace MonthlyBasis\Session\Model\Service;

class Id
{
    public function getId(): string
    {
        return session_id();
    }
}
