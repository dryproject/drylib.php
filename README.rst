**************
DRYlib for PHP
**************

.. image:: https://img.shields.io/badge/license-Public%20Domain-blue.svg
   :alt: Project license
   :target: https://unlicense.org/

.. image:: https://img.shields.io/travis/dryproject/drylib.php/master.svg
   :alt: Travis CI build status
   :target: https://travis-ci.org/dryproject/drylib.php

|

http://drylib.org

Prerequisites
=============

* `PHP <https://en.wikipedia.org/wiki/PHP>`__
  7.1+ with the `BCMath <https://php.net/manual/en/book.bc.php>`__
  extension (``--enable-bcmath``)

Features
========

Caveats
=======

Installation
============

Installation with Composer
--------------------------

https://packagist.org/packages/dryproject/drylib

To install the library in your project, execute::

   $ composer require dryproject/drylib=dev-master

Alternatively, manually add it as a requirement in your project's
``composer.json`` file::

   {
     "require": {
       "dryproject/drylib": "dev-master"
     }
   }

Installation without Composer
-----------------------------

Make the ``drylib.php`` file available in your project by either adding this
source code repository as a Git submodule or just directly importing the
file into your project.

Usage
=====

Usage with Composer
-------------------

To load the library, do::

   require 'vendor/autoload.php';

Usage without Composer
----------------------

To load the library, do::

   require_once 'drylib.php';

Reference
=========

``core``
--------

=============== ================================================================
DRY Symbol      PHP Symbol
=============== ================================================================
``bool``        ``dry\bool($x)`` (function)
``char``        ``dry\char($c)`` (function)
``complex``     ``dry\complex($r,$i)`` (function), ``dry\Complex`` (class)
``float``       ``dry\float($r)`` (function)
``float32``     ``dry\float32($r)`` (function)
``float64``     ``dry\float64($r)`` (function)
``int``         ``dry\int($z)`` (function)
``int8``        ``dry\int8($z)`` (function)
``int16``       ``dry\int16($z)`` (function)
``int32``       ``dry\int32($z)`` (function)
``int64``       ``dry\int64($z)`` (function)
``int128``      ``dry\int128($x)`` (function)
``integer``     ``dry\integer($z)`` (function), ``dry\Integer`` (class)
``natural``     ``dry\natural($n)`` (function)
``rational``    ``dry\rational($n,$d)`` (function), ``dry\Rational`` (class)
``real``        ``dry\real($r)`` (function), ``dry\Real`` (class)
``word``        ``dry\word($n)`` (function)
``word8``       ``dry\word8($n)`` (function)
``word16``      ``dry\word16($n)`` (function)
``word32``      ``dry\word32($n)`` (function)
``word64``      ``dry\word64($n)`` (function)
=============== ================================================================
