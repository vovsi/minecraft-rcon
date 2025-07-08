<?php

namespace Vovsi\MinecraftRcon\resources;

use Vovsi\MinecraftRcon\Rcon;

class Resource
{
    public function __construct(protected Rcon $rcon)
    {
    }
}