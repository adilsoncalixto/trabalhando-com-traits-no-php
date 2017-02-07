<?php

class User extends ModelAbstract
{
    use Shared, Auth, World;

    public function hello()
    {
        return 'Hello';
    }
}
