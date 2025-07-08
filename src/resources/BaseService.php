<?php

namespace Vovsi\MinecraftRcon\resources;

use Vovsi\MinecraftRcon\Rcon;

class BaseService
{
    public function __construct(protected Rcon $rcon)
    {
    }
}