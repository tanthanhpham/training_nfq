<?php

class User extends DB
{
    public function getUser()
    {
        $query = "SELECT * FROM sinhvien";
        return mysqli_query($this->con, $query);
    }
}
