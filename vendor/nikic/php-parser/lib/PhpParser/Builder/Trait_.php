<?php declare(strict_types=1);

namespace PhpParser\Builder;

use PhpParser;
use PhpParser\BuilderHelpers;
<<<<<<< HEAD
use PhpParser\Node;
=======
>>>>>>> parent of 31cfa1b1 (p)
use PhpParser\Node\Stmt;

class Trait_ extends Declaration
{
    protected $name;
    protected $uses = [];
    protected $properties = [];
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
     * Adds a statement.
     *
     * @param Stmt|PhpParser\Builder $stmt The statement to add
     *
     * @return $this The builder instance (for fluid interface)
     */
    public function addStmt($stmt) {
        $stmt = BuilderHelpers::normalizeNode($stmt);

        if ($stmt instanceof Stmt\Property) {
            $this->properties[] = $stmt;
        } elseif ($stmt instanceof Stmt\ClassMethod) {
            $this->methods[] = $stmt;
        } elseif ($stmt instanceof Stmt\TraitUse) {
            $this->uses[] = $stmt;
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
     * Returns the built trait node.
     *
     * @return Stmt\Trait_ The built interface node
     */
    public function getNode() : PhpParser\Node {
        return new Stmt\Trait_(
            $this->name, [
<<<<<<< HEAD
                'stmts' => array_merge($this->uses, $this->properties, $this->methods),
                'attrGroups' => $this->attributeGroups,
=======
                'stmts' => array_merge($this->uses, $this->properties, $this->methods)
>>>>>>> parent of 31cfa1b1 (p)
            ], $this->attributes
        );
    }
}
