<?php namespace App\Controllers;
use App\Models\SettingModel;
class Home extends BaseController
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
   try
    {
      $result  = $this->setting->getMenu();
      $data['menu'] = sortMenu($result);
   
    }
   catch (\Exception $e)
    {
        die($e->getMessage());
    }
    echo view('admin/home', $data);
  }

}
