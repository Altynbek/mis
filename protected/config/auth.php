<?php
return array (
  'медсестра' => 
  array (
    'type' => 2,
    'description' => 'медсестра',
    'bizRule' => NULL,
    'data' => NULL,
    'assignments' => 
    array (
      1 => 
      array (
        'bizRule' => NULL,
        'data' => NULL,
      ),
    ),
  ),
  'врач' => 
  array (
    'type' => 2,
    'description' => 'врач',
    'bizRule' => NULL,
    'data' => NULL,
    'children' => 
    array (
      0 => 'медсестра',
    ),
    'assignments' => 
    array (
      2 => 
      array (
        'bizRule' => NULL,
        'data' => NULL,
      ),
      15 => 
      array (
        'bizRule' => NULL,
        'data' => NULL,
      ),
    ),
  ),
  'заведующий' => 
  array (
    'type' => 2,
    'description' => 'заведующий',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'родители' => 
  array (
    'type' => 2,
    'description' => 'родители',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'завхоз' => 
  array (
    'type' => 2,
    'description' => 'завхоз',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'воспитатель' => 
  array (
    'type' => 2,
    'description' => 'воспитатель',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'техник' => 
  array (
    'type' => 2,
    'description' => 'техник',
    'bizRule' => NULL,
    'data' => NULL,
  ),
  'guest' => 
  array (
    'type' => 2,
    'description' => 'guest',
    'bizRule' => NULL,
    'data' => NULL,
  ),
);
