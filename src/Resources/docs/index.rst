The ElCarraco MakerExtraBundle
================================

The MakerExtraBundle provides extra commands in completion of the [symfony/maker-bundle](https://github.com/symfony/maker-bundle)

Installation
------------

Run this command to install and enable this bundle in your application :
.. code-block:: terminal

    $ composer require --dev elcarraco/maker-extra-bundle

Usage
-----

This bundle provides several commands under the ``make:`` namespace. List them all executing this command:
.. code-block:: terminal

    $ php bin/console list make

     make:command            Creates a new console command class
     make:controller         Creates a new controller class
     make:entity             Creates a new Doctrine entity class

     [...]

     make:trait              Creates a new trait

The names of the commands are self-explanatory, but some of them include optional arguments and options.
Check them out with the ``--help`` option:
.. code-block::terminal

    $ php bin/console make:trait --help

Extra commands added
--------------------

The plugin is in its early ages. But here's a list of commands that provide the MakerExtraBundle

- make:trait ``name`` ``class`` ``property``

