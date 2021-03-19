<?php

namespace XinFox\Annotation\Annotator;

use Doctrine\Common\Annotations\Annotation;

/**
 * Class Validate
 * @Annotation
 * @Annotation\Target({"METHOD"})
 * @package XinFox\Annotation\Annotator
 */
final class Validate extends Annotation
{
    /**
     * @var string
     */
    public $scene;

    /**
     * @var array
     */
    public $message = [];

    /**
     * @var bool
     */
    public $batch = true;
}
