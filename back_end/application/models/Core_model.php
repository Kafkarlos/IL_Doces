<?php defined('BASEPATH') or exit('Ação não permitida');


class Core_model extends CI_Model
{
    public function get_all($table = NULL, $condition = NULL, $order =NULL)
    {
        if ($table && $this->db->table_exists($table)) {
            if (is_array($condition)) {
                $this->db->where($condition);
            }
            if($order){
                $this->db->order_by($order[0],$order[1]);
            }
            return $this->db->get($table)->result();
        } else {
            return FALSE;
        }
    }

    public function get_by_id($table = NULL, $condition = NULL,$order = NULL)
    {
        if ($table && $this->db->table_exists($table) && is_array($condition)) {

            $this->db->where($condition);
            $this->db->limit(1);
            if($order){
                $this->db->order_by($order[0],$order[1]);
            }
            return $this->db->get($table)->result();
        } else {
            return FALSE;
        }
    }

    public function insert($table = NULL, $data = NULL)
    {
        if ($table && $this->db->table_exists($table) && is_array($data)) {

            $this->db->insert($table, $data);

            if ($this->db->affected_rows() > 0) {

                return TRUE;
            } else {
                $this->session->set_flashdata('error', 'Erro ao inserir os dados.');
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

    public function update($table = NULL, $data = NULL, $condition = NULL)
    {
        if ($table && $this->db->table_exists($table) && is_array($data) && is_array($condition)) {

            if ($this->db->update($table, $data, $condition)) {
                $this->session->set_flashdata('sucesso', 'Registro alterado com sucesso.');
            } else {
                $this->session->set_flashdata('error', 'Erro ao alterar os dados.');
            }
        } else {
            return FALSE;
        }
    }

    public function delete($table = NULL, $condition = NULL)
    {
        if ($table && $this->db->table_exists($table) && is_array($condition)) {

            if ($this->db->delete($table, $condition)) {
                $this->session->set_flashdata('sucesso', 'Registro excluído com sucesso.');
            } else {
                $this->session->set_flashdata('error', 'Erro ao excluir o registro.');
            }
        } else {
            return FALSE;
        }
    }
}
