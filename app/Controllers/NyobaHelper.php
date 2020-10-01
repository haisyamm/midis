<?php namespace App\Controllers;
use App\Models\SettingModel;
class NyobaHelper extends BaseController
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
      $result  = $this->setting->getMenu();
      $data['menu'] = sortMenu($result);

      return template('admin/home', $data);
  }
}
