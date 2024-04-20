<?php

namespace Atresna\Atresnaframework\core;

use Atresna\Atresnaframework\core\db\DBModel;


abstract class UserModel extends DBModel
{
    abstract function getDisplayName(): string;
}