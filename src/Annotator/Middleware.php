<?php

namespace XinFox\Annotation\Annotator;

use Doctrine\Common\Annotations\Annotation;
use Doctrine\Common\Annotations\Annotation\Target;

/**
 * 路由中间件
 * @package XinFox\Annotation\Annotator
 * @Annotation
 * @Annotation\Target({"CLASS","METHOD"})
 */
final class Middleware extends Annotation
{

}
