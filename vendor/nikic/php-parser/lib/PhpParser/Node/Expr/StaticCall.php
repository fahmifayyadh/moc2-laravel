<?php declare(strict_types=1);

namespace PhpParser\Node\Expr;

use PhpParser\Node;
<<<<<<< HEAD
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Identifier;
use PhpParser\Node\VariadicPlaceholder;

class StaticCall extends CallLike
=======
use PhpParser\Node\Expr;
use PhpParser\Node\Identifier;

class StaticCall extends Expr
>>>>>>> parent of 31cfa1b1 (p)
{
    /** @var Node\Name|Expr Class name */
    public $class;
    /** @var Identifier|Expr Method name */
    public $name;
<<<<<<< HEAD
    /** @var array<Arg|VariadicPlaceholder> Arguments */
=======
    /** @var Node\Arg[] Arguments */
>>>>>>> parent of 31cfa1b1 (p)
    public $args;

    /**
     * Constructs a static method call node.
     *
<<<<<<< HEAD
     * @param Node\Name|Expr                 $class      Class name
     * @param string|Identifier|Expr         $name       Method name
     * @param array<Arg|VariadicPlaceholder> $args       Arguments
     * @param array                          $attributes Additional attributes
=======
     * @param Node\Name|Expr         $class      Class name
     * @param string|Identifier|Expr $name       Method name
     * @param Node\Arg[]             $args       Arguments
     * @param array                  $attributes Additional attributes
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function __construct($class, $name, array $args = [], array $attributes = []) {
        $this->attributes = $attributes;
        $this->class = $class;
        $this->name = \is_string($name) ? new Identifier($name) : $name;
        $this->args = $args;
    }

    public function getSubNodeNames() : array {
        return ['class', 'name', 'args'];
    }
    
    public function getType() : string {
        return 'Expr_StaticCall';
    }
<<<<<<< HEAD

    public function getRawArgs(): array {
        return $this->args;
    }
=======
>>>>>>> parent of 31cfa1b1 (p)
}
