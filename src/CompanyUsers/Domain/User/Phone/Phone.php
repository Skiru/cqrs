<?php


namespace App\CompanyUsers\Domain\User\Phone;

use App\CompanyUsers\Domain\User\DomainUserException;

final class Phone
{
    /**
     * @var string
     */
    private $number;

    /**
     * Phone constructor.
     * @param string $number
     * @throws DomainUserException
     */
    public function __construct(string $number)
    {
        if (strlen($number) > 9) {
            throw new DomainUserException('Phone number cannot consist of more than 9 chars!');
        }

        $this->number = $number;
    }
}