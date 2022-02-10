<?php declare(strict_types=1);

namespace PhpParser\Builder;

use PhpParser;
use PhpParser\BuilderHelpers;
<<<<<<< HEAD
use PhpParser\Node;
=======
>>>>>>> parent of 31cfa1b1 (p)
use PhpParser\Node\Name;
use PhpParser\Node\Stmt;

class Interface_ extends Declaration
{
    protected $name;
    protected $extends = [];
    protected $constants = [];
    protected $methods = [];

<<<<<<< HEAD
    /** @var Node\AttributeGroup[] */
    protected $attributeGroups = [];

=======
>>>>>>> parent of 31cfa1b1 (p)
    /**
     * Creates an interface builder.
     *
     * @param string $name Name of the interface
     */
    public function __construct(string $name) {
        $this->name = $name;
    }

    /**
     * Extends one or more interfaces.
     *
     * @param Name|string ...$interfaces Names of interfaces to extend
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function extend(...$interfaces) {
        foreach ($interfaces as $interface) {
            $this->extends[] = BuilderHelpers::normalizeName($interface);
        }

        return $this;
    }

    /**
     * Adds a statement.
     *
     * @param Stmt|PhpParser\Builder $stmt The statement to add
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function addStmt($stmt) {
        $stmt = BuilderHelpers::normalizeNode($stmt);

        if ($stmt instanceof Stmt\ClassConst) {
            $this->constants[] = $stmt;
        } elseif ($stmt instanceof Stmt\ClassMethod) {
            // we erase all statements in the body of an interface method
            $stmt->stmts = null;
            $this->methods[] = $stmt;
        } else {
            throw new \LogicException(sprintf('Unexpected node of type "%s"', $stmt->getType()));
        }

        return $this;
    }

    /**
<<<<<<< HEAD
     * Adds an attribute group.
     *
     * @param Node\Attribute|Node\AttributeGroup $attribute
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function addAttribute($attribute) {
        $this->attributeGroups[] = BuilderHelpers::normalizeAttribute($attribute);

        return $this;
    }

    /**
=======
>>>>>>> parent of 31cfa1b1 (p)
     * Returns the built interface node.
     *
     * @return Stmt\Interface_ The built interface node
     */
    public function getNode() : PhpParser\Node {
        return new Stmt\Interface_($this->name, [
            'extends' => $this->extends,
            'stmts' => array_merge($this->constants, $this->methods),
<<<<<<< HEAD
            'attrGroups' => $this->attributeGroups,
=======
>>>>>>> parent of 31cfa1b1 (p)
        ], $this->attributes);
    }
}
