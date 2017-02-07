<?php

require __DIR__.'/src/helpers/ModelAbstract.php';
require __DIR__.'/src/helpers/Shared.php';
require __DIR__.'/src/helpers/Auth.php';
require __DIR__.'/src/helpers/World.php';

require __DIR__.'/src/Messages.php';
require __DIR__.'/src/Notes.php';
require __DIR__.'/src/Photos.php';
require __DIR__.'/src/Posts.php';
require __DIR__.'/src/User.php';

$notes = new Notes;
$notes->findAll();
$notes->shared();

$user = new User;
$user->findAll();
$user->shared();
$user->createHash('123');
var_dump($user->sayWorld());
