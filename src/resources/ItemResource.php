<?php

namespace Vovsi\MinecraftRcon\resources;

use Vovsi\MinecraftRcon\dto\item\GiveDto;

class ItemResource extends BaseService
{
    public function give(GiveDto $dto)
    {
        return $this->rcon->sendCommand("give $dto->username $dto->item $dto->amount");
    }
}