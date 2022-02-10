<?php declare(strict_types=1);

namespace PhpParser\Node\Expr;

use PhpParser\Node;
<<<<<<< HEAD
use PhpParser\Node\Arg;
use PhpParser\Node\Expr;
use PhpParser\Node\VariadicPlaceholder;

class New_ extends CallLike
{
    /** @var Node\Name|Expr|Node\Stmt\Class_ Class name */
    public $class;
    /** @var array<Arg|VariadicPlaceholder> Arguments */
=======
use PhpParser\Node\Expr;

class New_ extends Expr
{
    /** @var Node\Name|Expr|Node\Stmt\Class_ Class name */
    public $class;
    /** @var Node\Arg[] Arguments */
>>>>>>> parent of 31cfa1b1 (p)
    public $args;

    /**
     * Constructs a function call node.
     *
     * @param Node\Name|Expr|Node\Stmt\Class_ $class      Class name (or class node for anonymous classes)
<<<<<<< HEAD
     * @param array<Arg|VariadicPlaceholder>  $args       Arguments
=======
     * @param Node\Arg[]                      $args       Arguments
>>>>>>> parent of 31cfa1b1 (p)
     * @param array                           $attributes Additional attributes
     */
    public function __construct($class, array $args = [], array $attributes = []) {
        $this->attributes = $attributes;
        $this->class = $class;
        $this->args = $args;
    }

    public function getSubNodeNames() : array {
        return ['class', 'args'];
    }
    
    public function getType() : string {
        return 'Expr_New';
    }
<<<<<<< HEAD

    public function getRawArgs(): array {
        return $this->args;
    }
=======
>>>>>>> parent of 31cfa1b1 (p)
}
