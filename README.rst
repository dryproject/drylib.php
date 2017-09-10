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

* PHP 7.1+ with the
  `BCMath <https://php.net/manual/en/book.bc.php>`__
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
