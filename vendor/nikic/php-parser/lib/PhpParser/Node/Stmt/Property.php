<?php declare(strict_types=1);

namespace PhpParser\Node\Stmt;

use PhpParser\Node;
<<<<<<< HEAD
use PhpParser\Node\ComplexType;
use PhpParser\Node\Identifier;
use PhpParser\Node\Name;
=======
use PhpParser\Node\Identifier;
use PhpParser\Node\Name;
use PhpParser\Node\NullableType;
use PhpParser\Node\UnionType;
>>>>>>> parent of 31cfa1b1 (p)

class Property extends Node\Stmt
{
    /** @var int Modifiers */
    public $flags;
    /** @var PropertyProperty[] Properties */
    public $props;
<<<<<<< HEAD
    /** @var null|Identifier|Name|ComplexType Type declaration */
=======
    /** @var null|Identifier|Name|NullableType|UnionType Type declaration */
>>>>>>> parent of 31cfa1b1 (p)
    public $type;
    /** @var Node\AttributeGroup[] PHP attribute groups */
    public $attrGroups;

    /**
     * Constructs a class property list node.
     *
<<<<<<< HEAD
     * @param int                                     $flags      Modifiers
     * @param PropertyProperty[]                      $props      Properties
     * @param array                                   $attributes Additional attributes
     * @param null|string|Identifier|Name|ComplexType $type       Type declaration
     * @param Node\AttributeGroup[]                   $attrGroups PHP attribute groups
=======
     * @param int                                                $flags      Modifiers
     * @param PropertyProperty[]                                 $props      Properties
     * @param array                                              $attributes Additional attributes
     * @param null|string|Identifier|Name|NullableType|UnionType $type       Type declaration
     * @param Node\AttributeGroup[]                              $attrGroups PHP attribute groups
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function __construct(int $flags, array $props, array $attributes = [], $type = null, array $attrGroups = []) {
        $this->attributes = $attributes;
        $this->flags = $flags;
        $this->props = $props;
        $this->type = \is_string($type) ? new Identifier($type) : $type;
        $this->attrGroups = $attrGroups;
    }

    public function getSubNodeNames() : array {
        return ['attrGroups', 'flags', 'type', 'props'];
    }

    /**
     * Whether the property is explicitly or implicitly public.
     *
     * @return bool
     */
    public function isPublic() : bool {
        return ($this->flags & Class_::MODIFIER_PUBLIC) !== 0
            || ($this->flags & Class_::VISIBILITY_MODIFIER_MASK) === 0;
    }

    /**
     * Whether the property is protected.
     *
     * @return bool
     */
    public function isProtected() : bool {
        return (bool) ($this->flags & Class_::MODIFIER_PROTECTED);
    }

    /**
     * Whether the property is private.
     *
     * @return bool
     */
    public function isPrivate() : bool {
        return (bool) ($this->flags & Class_::MODIFIER_PRIVATE);
    }

    /**
     * Whether the property is static.
     *
     * @return bool
     */
    public function isStatic() : bool {
        return (bool) ($this->flags & Class_::MODIFIER_STATIC);
    }

<<<<<<< HEAD
    /**
     * Whether the property is readonly.
     *
     * @return bool
     */
    public function isReadonly() : bool {
        return (bool) ($this->flags & Class_::MODIFIER_READONLY);
    }

=======
>>>>>>> parent of 31cfa1b1 (p)
    public function getType() : string {
        return 'Stmt_Property';
    }
}
