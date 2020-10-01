<?php namespace App\Models;

use CodeIgniter\Model;

class SettingModel extends Model
{

    public function getMenu()
    {
            $builder = $this->db->table('user_menus')->where(['parent_id' => '0']);
            $query   = $builder->get()->getResultArray();

            return $query;

    } 

    public function getSubMenu()
    {
            $builder = $this->db->table('user_menus')->where(['parent_id !=' => '0']);
            $query   = $builder->get()->getResultArray();

            return $query;

    } 

    public function delete_menu($id)
    {
        $um = $this->db->table('user_menus');
        $ur = $this->db->table('user_rules');
        //mengambil data submenu
        $submenu = $um->where(['parent_id' => $id])->get()->getResultArray();
            
        
        foreach($submenu as $sb)
        {   
            //menghapus submenu pada user_rules
            $ur->where('menu_id', $sb['id'])->delete();

            //menghapus submenu pada user_menus
            $um->where('id', $sb['id'])->delete();
        }

        // menghapus menu
        $where_menu = [
            'id'    => $id
        ];

        $um->where($where_menu)->delete();

        return true;
    }

}
