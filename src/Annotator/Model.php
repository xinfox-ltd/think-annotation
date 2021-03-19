<?php

namespace XinFox\Annotation\Annotator;

use Doctrine\Common\Annotations\Annotation;
use Doctrine\Common\Annotations\Annotation\Target;

/**
 * 注入模型
 * @package XinFox\Annotation\Annotator
 * @Annotation
 * @Annotation\Target({"METHOD"})
 */
final class Model extends Annotation
{
    /**
     * @var string
     */
    public $var = 'id';

    /**
     * @var boolean
     */
    public $exception = true;
}
