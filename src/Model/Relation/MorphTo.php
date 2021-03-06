<?php

namespace XinFox\Annotation\Model\Relation;

use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 * @Annotation\Target({"CLASS"})
 */
final class MorphTo extends Annotation
{
    /**
     * @var string|array
     */
    public $morph = null;

    /**
     * @var array
     */
    public $alias = [];
}
