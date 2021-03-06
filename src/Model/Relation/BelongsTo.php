<?php

namespace XinFox\Annotation\Model\Relation;

use Doctrine\Common\Annotations\Annotation;

/**
 * @Annotation
 * @Annotation\Target({"CLASS"})
 */
final class BelongsTo extends Annotation
{
    /**
     * @var string
     * @Annotation\Required
     */
    public $model;

    /**
     * @var string
     */
    public $foreignKey = '';

    /**
     * @var string
     */
    public $localKey = '';
}
