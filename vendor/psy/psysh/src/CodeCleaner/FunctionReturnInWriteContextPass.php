<?php

/*
 * This file is part of Psy Shell.
 *
 * (c) 2012-2020 Justin Hileman
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Psy\CodeCleaner;

use PhpParser\Node;
use PhpParser\Node\Expr\Array_;
use PhpParser\Node\Expr\Assign;
use PhpParser\Node\Expr\FuncCall;
use PhpParser\Node\Expr\Isset_;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Expr\StaticCall;
use PhpParser\Node\Stmt\Unset_;
<<<<<<< HEAD
use PhpParser\Node\VariadicPlaceholder;
=======
>>>>>>> parent of 31cfa1b1 (p)
use Psy\Exception\FatalErrorException;

/**
 * Validate that the functions are used correctly.
 *
 * @author Martin Hasoň <martin.hason@gmail.com>
 */
class FunctionReturnInWriteContextPass extends CodeCleanerPass
{
    const ISSET_MESSAGE = 'Cannot use isset() on the result of an expression (you can use "null !== expression" instead)';
    const EXCEPTION_MESSAGE = "Can't use function return value in write context";

    /**
     * Validate that the functions are used correctly.
     *
     * @throws FatalErrorException if a function is passed as an argument reference
     * @throws FatalErrorException if a function is used as an argument in the isset
     * @throws FatalErrorException if a value is assigned to a function
     *
     * @param Node $node
     */
    public function enterNode(Node $node)
    {
        if ($node instanceof Array_ || $this->isCallNode($node)) {
            $items = $node instanceof Array_ ? $node->items : $node->args;
            foreach ($items as $item) {
<<<<<<< HEAD
                if ($item instanceof VariadicPlaceholder) {
                    continue;
                }

                if ($item && $item->byRef && $this->isCallNode($item->value)) {
                    throw new FatalErrorException(self::EXCEPTION_MESSAGE, 0, \E_ERROR, null, $node->getLine());
=======
                if ($item && $item->byRef && $this->isCallNode($item->value)) {
                    throw new FatalErrorException(self::EXCEPTION_MESSAGE, 0, E_ERROR, null, $node->getLine());
>>>>>>> parent of 31cfa1b1 (p)
                }
            }
        } elseif ($node instanceof Isset_ || $node instanceof Unset_) {
            foreach ($node->vars as $var) {
                if (!$this->isCallNode($var)) {
                    continue;
                }

                $msg = $node instanceof Isset_ ? self::ISSET_MESSAGE : self::EXCEPTION_MESSAGE;
<<<<<<< HEAD
                throw new FatalErrorException($msg, 0, \E_ERROR, null, $node->getLine());
            }
        } elseif ($node instanceof Assign && $this->isCallNode($node->var)) {
            throw new FatalErrorException(self::EXCEPTION_MESSAGE, 0, \E_ERROR, null, $node->getLine());
        }
    }

    private function isCallNode(Node $node): bool
=======
                throw new FatalErrorException($msg, 0, E_ERROR, null, $node->getLine());
            }
        } elseif ($node instanceof Assign && $this->isCallNode($node->var)) {
            throw new FatalErrorException(self::EXCEPTION_MESSAGE, 0, E_ERROR, null, $node->getLine());
        }
    }

    private function isCallNode(Node $node)
>>>>>>> parent of 31cfa1b1 (p)
    {
        return $node instanceof FuncCall || $node instanceof MethodCall || $node instanceof StaticCall;
    }
}
