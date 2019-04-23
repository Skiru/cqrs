<?php

namespace App\CompanyUsers\Domain\User;

use App\CompanyUsers\Domain\User\Email\EmailInterface;
use App\CompanyUsers\Domain\User\Phone\PhoneInterface;
use App\CompanyUsers\Domain\User\UserName\UserNameInterface;

interface UserInterface extends EmailInterface, PhoneInterface, UserNameInterface
{

}