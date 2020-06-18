<?php

function getUserId($id)
{
    $ids = [
        1, 2, 3, 4
    ];

    foreach ($ids as $id) {
        $uid[] = $id;

     } 

     var_dump($uid);

    if (isset($uid))
    {
        return "user has no ID";
    } else {
        return "user has id:" . $uid[];
    }
}

echo getUserId(6);
