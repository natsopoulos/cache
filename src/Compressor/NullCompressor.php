<?php

namespace Natso\Compressor;

use Natso\Interfaces\CompressorInterface;

class NullCompressor implements CompressorInterface
{

    /**
     * @inheritdoc
     */
    public function compress(?string $value): string
    {
        return $value;
    }

    /**
     * @inheritdoc
     */
    public function uncompress(string $value): string
    {
        return $value;
    }
}