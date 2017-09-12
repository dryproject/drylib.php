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
DRY Symbol      Symbol
=============== ================================================================
``bool``        ``dry\bool`` (function)
``char``        ``dry\char`` (function)
``complex``     ``dry\complex`` (function), ``dry\Complex`` (class)
``float``       ``dry\float`` (function)
``float32``     ``dry\float32`` (function)
``float64``     ``dry\float64`` (function)
``int``         ``dry\int`` (function)
``int8``        ``dry\int8`` (function)
``int16``       ``dry\int16`` (function)
``int32``       ``dry\int32`` (function)
``int64``       ``dry\int64`` (function)
``int128``      ``dry\int128`` (function)
``integer``     ``dry\integer`` (function), ``dry\Integer`` (class)
``natural``     ``dry\natural`` (function)
``rational``    ``dry\rational`` (function), ``dry\Rational`` (class)
``real``        ``dry\real`` (function), ``dry\Real`` (class)
``word``        ``dry\word`` (function)
``word8``       ``dry\word8`` (function)
``word16``      ``dry\word16`` (function)
``word32``      ``dry\word32`` (function)
``word64``      ``dry\word64`` (function)
=============== ================================================================
