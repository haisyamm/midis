<?php namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\SettingModel;


class Setting extends BaseController
{  
	public function __construct() {

        // Mendeklarasikan class ProductModel menggunakan $this->product
          $this->setting = new SettingModel();
        /* Catatan:
        Apa yang ada di dalam function construct ini nantinya bisa digunakan
        pada function di dalam class Product 
        */
    }
	public function index()
	{
      $data['menu'] = getMenu();

      return template('admin/menu_setting', $data);
	}
  public function menu_setting()
  {

      $data['menu'] = getMenu();
      $data['data'] = "";
      $data['js'] = "menu_setting";
      $data['data_menu'] = $this->setting->getMenu();
      $data['data_submenu'] = $this->setting->getSubMenu();

      return template('admin/menu_setting', $data);
  }

  public function delete_menu($id)
  {
    $data = $this->setting->delete_menu($id);

    if($data)
    {
      $params = [
        'status'  => '200',
        'message' => 'Berhasil menghapus data Menu'
      ];
    }
    else
    {
      $params = [
        'status'  => '400',
        'message' => 'Gagal menghapus data Menu'
      ];
    }

    echo json_encode($params);
  }


}
