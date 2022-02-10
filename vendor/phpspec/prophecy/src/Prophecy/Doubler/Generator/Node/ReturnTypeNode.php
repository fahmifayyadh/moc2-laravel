<?php

namespace Prophecy\Doubler\Generator\Node;

use Prophecy\Exception\Doubler\DoubleException;

final class ReturnTypeNode extends TypeNodeAbstract
{
    protected function getRealType(string $type): string
    {
<<<<<<< HEAD
        switch ($type) {
            case 'void':
            case 'never':
                return $type;
            default:
                return parent::getRealType($type);
        }
=======
        if ($type == 'void') {
            return $type;
        }

        return parent::getRealType($type);
>>>>>>> parent of 31cfa1b1 (p)
    }

    protected function guardIsValidType()
    {
        if (isset($this->types['void']) && count($this->types) !== 1) {
            throw new DoubleException('void cannot be part of a union');
        }
<<<<<<< HEAD
        if (isset($this->types['never']) && count($this->types) !== 1) {
            throw new DoubleException('never cannot be part of a union');
        }
=======
>>>>>>> parent of 31cfa1b1 (p)

        parent::guardIsValidType();
    }

<<<<<<< HEAD
    /**
     * @deprecated use hasReturnStatement
     */
    public function isVoid()
    {
        return $this->types == ['void' => 'void'];
    }

    public function hasReturnStatement(): bool
    {
        return $this->types !== ['void' => 'void']
            && $this->types !== ['never' => 'never'];
    }
=======
    public function isVoid(): bool
    {
        return $this->types == ['void' => 'void'];
    }
>>>>>>> parent of 31cfa1b1 (p)
}
