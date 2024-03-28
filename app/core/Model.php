<?php
/**
 * Main class model
 */
trait Model 
{
    protected $table = 'users';
    protected $table2 = 'members';
    protected $table3 = 'customer'; 
    protected $limit = 1;
    protected $offset = 0;
    public $errors = [];
    use Database;
    public function select()
    {
        $query = "select * from $this->table3";
        return $this->query($query);
        //print_r($res);
       // $res;
        // return false;
    }
    public function where($data)
    {
        $keys = array_keys($data);
        $query = "select * from $this->table where ";

        foreach ($keys as $key) {
            $query .= "$key" . " = :" . "$key " . " && ";
        }
        $query = trim($query, " && ");
        $query .= " limit $this->limit offset $this->offset";
        //echo $query;
        return $this->query($query, $data);

    }
    public function first($data)
    {
        $keys = array_keys($data);
        $query = "select * from $this->table where ";

        foreach ($keys as $key) {
            $query .= "$key" . " = :" . "$key " . " && ";
        }
        $query = trim($query, " && ");
        $query .= " limit $this->limit offset $this->offset";
        //echo $query;
        $res= $this->query($query, $data);
        if($res){return  $res[0];}
        return false;
    }
    public function insert($data)
    {
        if (!empty($this->allowedColumns)) {
            foreach ($data as $key => $value) {
                if (!in_array($key, $this->allowedColumns)) {
                    unset($data[$key]);
                }
            }
        }
        $keys = array_keys($data);
        $query = "INSERT INTO $this->table3 (" . implode(',', $keys) . ") VALUES (:" . implode(',:', $keys) . ")";
        //show($query);
        $this->query($query, $data);
        return false;
    }
    public function update($id, $data, $id_column = '')
    {
    }
    public function delete($id, $id_column = '')
    {
        $data[$id_column] = $id;
        $query = "DELETE FROM $this->table WHERE $id_column=:$id_column";
        // echo $query;
        $this->query($query, $data);
        //return false;
    }
    public function checkAdmin(){
        $query = "SELECT users_uid FROM $this->table LEFT JOIN $this->table2 ON $this->table.user_role = $this->table2.id where title='admin'";
         $res=$this->query($query);
     return $res;
    }
}