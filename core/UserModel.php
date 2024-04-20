<?php

namespace Atresna\Atresnaframework\core;


abstract class UserModel extends DBModel
{
    abstract function getDisplayName(): string;
}