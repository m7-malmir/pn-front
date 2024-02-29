<?php

trait Database
{
    private function connect()
    {
        $string = "mysql:hostname=" . DBHOST . ";dbname=" . DBNAME;
        $con = new PDO($string, DBUSER, DBPASS);
        return $con;
    }
    public function query($query, $data = [])
    {
        $con = $this->connect();
        $stm = $con->prepare($query);
        $check = $stm->execute($data);
        if ($check) {
            $res = $stm->fetchAll(PDO::FETCH_OBJ);
            if (is_array($res) && count($res)) {
                return $res;
            }
        }
        return false;
    }


    public function get_row($query, $data = [])
    {
        $con = $this->connect();
        $stm = $con->prepare($query);
        $check = $stm->execute($data);
        if ($check) {
            $res = $stm->fetchAll(PDO::FETCH_OBJ);
            if (is_array($res) && count($res)) {
                return $res[0];
            }
        }
        return false;
    }
}