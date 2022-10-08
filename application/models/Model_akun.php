<?php

class Model_akun extends CI_Model
{

    public function getAll()
    {

        return $this->db->get('noakun')->result_array();
    }
}
