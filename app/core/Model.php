<?php
/**
 * Main class model
 */
trait Model 
{
    protected $table = 'users';
    protected $table2 = 'members';
    protected $table3 = 'customer'; 
    protected $allowedColumns = ['customer_service', 'customer_name', 'customer_nation_code', 'customer_agent', 'customer_manager_name', 'customer_agent_name', 'customer_birth', 'customer_fname', 'customer_certid', 'customer_cert_serial', 'customer_cert_letter', 'customer_cert_row', 'customer_birth_loc', 'customer_birth_country', 'customer_tel', 'customer_mobile', 'customer_store_name', 'tax_code', 'customer_bank_code', 'customer_num_acount', 'customer_iban', 'customer_postal_code', 'customer_bank_name', 'customer_num_auth', 'customer_d_s_num_auth', 'customer_d_e_num_auth', 'customer_cat', 'customer_city', 'customer_address', 'customer_machin', 'customer_device_model', 'customer_contract_type', 'cus_repres1_name', 'cus_repres1_family', 'cus_repres1_fname', 'cus_repres1_id', 'cus_repres1_tel', 'cus_repres1_mobile', 'cus_repres1_store_name', 'cus_repres1_address', 'cus_repres2_name', 'cus_repres2_family', 'cus_repres2_fname', 'cus_repres2_id', 'cus_repres2_tel', 'cus_repres2_mobile', 'cus_repres2_store_name', 'cus_repres2_address', 'customer_count2', 'customer_iban2', 'customer_count3', 'customer_iban3', 'customer_serial', 'status'];
  
    protected $limit = 1;
    protected $offset = 0;
    public $errors = [];
    use Database;
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
        // if (!empty($this->allowedColumns)) {
        //     foreach ($data as $key => $value) {
        //         if (!in_array($key, $this->allowedColumns)) {
        //             unset($data[$key]);
        //         }
        //     }
        // }
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