<?php

namespace Vovsi\MinecraftRcon\dto\item;

use Vovsi\MinecraftRcon\dto\Dto;
use Vovsi\MinecraftRcon\helpers\StringHelper;

class GiveDto extends Dto
{
    public function __construct(
        public string $username,
        public string $item,
        public int $amount = 1,
    )
    {
        $this->prepare();
    }

    protected function prepare(): void
    {
        parent::prepare();

        $this->username = StringHelper::sanitizeUsername($this->username);
        $this->item = StringHelper::sanitizeItemname($this->item);
    }
}