<?php

namespace XinFox\Annotation\Model\Relation;

use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 * @Annotation\Target({"CLASS"})
 */
final class MorphMany extends Annotation
{
    /**
     * @var string
     * @Annotation\Required
     */
    public $model;

    /**
     * @var string|array
     */
    public $morph = null;

    /**
     * @var string
     */
    public $type = '';
}
