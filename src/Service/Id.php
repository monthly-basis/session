<?php
namespace MonthlyBasis\Session\Service;

class Id
{
    public function getId(): string
    {
        return session_id();
    }
}
