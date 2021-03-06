<?php

namespace XinFox\Annotation\Model\Relation;

use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 * @Annotation\Target({"CLASS"})
 */
final class MorphByMany extends Annotation
{
    /**
     * @var string
     * @Annotation\Required
     */
    public $model;

    /**
     * @var string
     * @Annotation\Required
     */
    public $middle;

    /**
     * @var string|array
     */
    public $morph = null;

    /**
     * @var string
     */
    public $foreignKey = null;
}
