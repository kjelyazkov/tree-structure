<?php

use Kjelyazkov\TreeStructure\Tree;

require 'vendor/autoload.php';

$tree = Tree::load([1,2,3]);

var_dump($tree);