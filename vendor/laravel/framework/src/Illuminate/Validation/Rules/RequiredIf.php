<?php

namespace Illuminate\Validation\Rules;

<<<<<<< HEAD
use InvalidArgumentException;

=======
>>>>>>> parent of 31cfa1b1 (p)
class RequiredIf
{
    /**
     * The condition that validates the attribute.
     *
     * @var callable|bool
     */
    public $condition;

    /**
     * Create a new required validation rule based on a condition.
     *
     * @param  callable|bool  $condition
     * @return void
     */
    public function __construct($condition)
    {
<<<<<<< HEAD
        if (! is_string($condition)) {
            $this->condition = $condition;
        } else {
            throw new InvalidArgumentException('The provided condition must be a callable or boolean.');
        }
=======
        $this->condition = $condition;
>>>>>>> parent of 31cfa1b1 (p)
    }

    /**
     * Convert the rule to a validation string.
     *
     * @return string
     */
    public function __toString()
    {
        if (is_callable($this->condition)) {
            return call_user_func($this->condition) ? 'required' : '';
        }

        return $this->condition ? 'required' : '';
    }
}
