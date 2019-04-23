<?php

namespace App\CompanyUsers\Domain\User\Email;

use App\CompanyUsers\Domain\User\DomainUserException;

final class Email implements EmailInterface
{
    /**
     * @var string
     */
    private $email;

    /**
     * Email constructor.
     * @param string $email
     * @throws DomainUserException
     */
    public function __construct(string $email)
    {
        if (empty(trim($email))) {
            throw new DomainUserException('You have entered an empty string, that\'s not good');
        }

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new DomainUserException('Your email address has wrong structure!');
        }

        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
}