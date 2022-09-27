<?php

namespace ElCarraco\MakerExtraBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class MakerExtraBundle.
 */
class MakerExtraBundle extends Bundle
{
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}
