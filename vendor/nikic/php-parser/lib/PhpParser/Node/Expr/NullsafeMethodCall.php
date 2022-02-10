<?php declare(strict_types=1);

namespace PhpParser\Node\Expr;

use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\Identifier;
<<<<<<< HEAD
use PhpParser\Node\VariadicPlaceholder;

class NullsafeMethodCall extends CallLike
=======

class NullsafeMethodCall extends Expr
>>>>>>> parent of 31cfa1b1 (p)
{
    /** @var Expr Variable holding object */
    public $var;
    /** @var Identifier|Expr Method name */
    public $name;
<<<<<<< HEAD
    /** @var array<Arg|VariadicPlaceholder> Arguments */
=======
    /** @var Arg[] Arguments */
>>>>>>> parent of 31cfa1b1 (p)
    public $args;

    /**
     * Constructs a nullsafe method call node.
     *
<<<<<<< HEAD
     * @param Expr                           $var        Variable holding object
     * @param string|Identifier|Expr         $name       Method name
     * @param array<Arg|VariadicPlaceholder> $args       Arguments
     * @param array                          $attributes Additional attributes
=======
     * @param Expr                   $var        Variable holding object
     * @param string|Identifier|Expr $name       Method name
     * @param Arg[]                  $args       Arguments
     * @param array                  $attributes Additional attributes
>>>>>>> parent of 31cfa1b1 (p)
     */
    public function __construct(Expr $var, $name, array $args = [], array $attributes = []) {
        $this->attributes = $attributes;
        $this->var = $var;
        $this->name = \is_string($name) ? new Identifier($name) : $name;
        $this->args = $args;
    }

    public function getSubNodeNames() : array {
        return ['var', 'name', 'args'];
    }
    
    public function getType() : string {
        return 'Expr_NullsafeMethodCall';
    }
<<<<<<< HEAD

    public function getRawArgs(): array {
        return $this->args;
    }
=======
>>>>>>> parent of 31cfa1b1 (p)
}
