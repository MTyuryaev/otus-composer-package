<?php

declare(strict_types=1);

namespace MTyuryaev\OtusComposerPackage;

class StringLength
{
    public function getLength(string $sl): int
    {
        return mb_strlen($sl);
    }
}