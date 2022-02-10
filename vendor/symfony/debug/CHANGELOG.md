CHANGELOG
=========

4.4.0
-----

 * deprecated `FlattenException`, use the `FlattenException` of the `ErrorHandler` component
 * deprecated the whole component in favor of the `ErrorHandler` component

4.3.0
-----

<<<<<<< HEAD
 * made the `ErrorHandler` and `ExceptionHandler` classes final
 * added `Exception\FlattenException::getAsString` and
   `Exception\FlattenException::getTraceAsString` to increase compatibility to php
   exception objects
=======
* made the `ErrorHandler` and `ExceptionHandler` classes final
* added `Exception\FlattenException::getAsString` and
`Exception\FlattenException::getTraceAsString` to increase compatibility to php
exception objects
>>>>>>> parent of 31cfa1b1 (p)

4.0.0
-----

<<<<<<< HEAD
 * removed the symfony_debug extension
 * removed `ContextErrorException`
=======
* removed the symfony_debug extension
* removed `ContextErrorException`
>>>>>>> parent of 31cfa1b1 (p)

3.4.0
-----

<<<<<<< HEAD
 * deprecated `ErrorHandler::stackErrors()` and `ErrorHandler::unstackErrors()`
=======
* deprecated `ErrorHandler::stackErrors()` and `ErrorHandler::unstackErrors()`
>>>>>>> parent of 31cfa1b1 (p)

3.3.0
-----

<<<<<<< HEAD
 * deprecated the `ContextErrorException` class: use \ErrorException directly now
=======
* deprecated the `ContextErrorException` class: use \ErrorException directly now
>>>>>>> parent of 31cfa1b1 (p)

3.2.0
-----

<<<<<<< HEAD
 * `FlattenException::getTrace()` now returns additional type descriptions
   `integer` and `float`.
=======
* `FlattenException::getTrace()` now returns additional type descriptions
  `integer` and `float`.

>>>>>>> parent of 31cfa1b1 (p)

3.0.0
-----

<<<<<<< HEAD
 * removed classes, methods and interfaces deprecated in 2.x
=======
* removed classes, methods and interfaces deprecated in 2.x
>>>>>>> parent of 31cfa1b1 (p)

2.8.0
-----

<<<<<<< HEAD
 * added BufferingLogger for errors that happen before a proper logger is configured
 * allow throwing from `__toString()` with `return trigger_error($e, E_USER_ERROR);`
 * deprecate ExceptionHandler::createResponse
=======
* added BufferingLogger for errors that happen before a proper logger is configured
* allow throwing from `__toString()` with `return trigger_error($e, E_USER_ERROR);`
* deprecate ExceptionHandler::createResponse
>>>>>>> parent of 31cfa1b1 (p)

2.7.0
-----

<<<<<<< HEAD
 * added deprecations checking for parent interfaces/classes to DebugClassLoader
 * added ZTS support to symfony_debug extension
 * added symfony_debug_backtrace() to symfony_debug extension
   to track the backtrace of fatal errors
=======
* added deprecations checking for parent interfaces/classes to DebugClassLoader
* added ZTS support to symfony_debug extension
* added symfony_debug_backtrace() to symfony_debug extension
  to track the backtrace of fatal errors
>>>>>>> parent of 31cfa1b1 (p)

2.6.0
-----

<<<<<<< HEAD
 * generalized ErrorHandler and ExceptionHandler,
   with some new methods and others deprecated
 * enhanced error messages for uncaught exceptions
=======
* generalized ErrorHandler and ExceptionHandler,
  with some new methods and others deprecated
* enhanced error messages for uncaught exceptions
>>>>>>> parent of 31cfa1b1 (p)

2.5.0
-----

<<<<<<< HEAD
 * added ExceptionHandler::setHandler()
 * added UndefinedMethodFatalErrorHandler
 * deprecated DummyException
=======
* added ExceptionHandler::setHandler()
* added UndefinedMethodFatalErrorHandler
* deprecated DummyException
>>>>>>> parent of 31cfa1b1 (p)

2.4.0
-----

 * added a DebugClassLoader able to wrap any autoloader providing a findFile method
 * improved error messages for not found classes and functions

2.3.0
-----

 * added the component
