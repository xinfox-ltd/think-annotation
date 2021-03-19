<?php

namespace XinFox\Annotation;

use Doctrine\Common\Annotations\Annotation;
use Doctrine\Common\Annotations\Annotation\Enum;
use Doctrine\Common\Annotations\Annotation\Target;
use XinFox\Annotation\Annotator\Rule;

/**
 * 注册路由
 * @package XinFox\Annotation
 * @Annotation
 * @Target({"METHOD","CLASS"})
 */
final class Route extends Rule
{
    /**
     * 请求类型
     * @Enum({"GET","POST","PUT","DELETE","PATCH","OPTIONS","HEAD"})
     * @var string
     */
    public $method = "*";

    /**
     * 允许操作的角色
     * @var mixed
     */
    public $roles;
}
