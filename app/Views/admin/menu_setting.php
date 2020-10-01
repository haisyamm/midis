<div class="m-grid__item m-grid__item--fluid m-wrapper">

  <!-- BEGIN: Subheader -->
  <div class="m-subheader ">
    <div class="d-flex align-items-center">
      <div class="mr-auto">
        <h3 class="m-subheader__title ">Menu Setting</h3>
      </div>
    </div>
  </div>

  <!-- END: Subheader -->
  <div class="m-content">
    <!--Begin::Section-->
    <div class="row">
      <div class="col-xl-5">

        <!--begin:: Widgets/New Users-->
        <div class="m-portlet m-portlet--full-height  m-portlet--unair">
          <form id="save-menu">
          <div class="m-portlet">
            <div class="m-portlet__head">
              <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                  <h3 class="m-portlet__head-text">
                    Tambah Menu
                  </h3>
                </div>
              </div>
            </div>
            <div class="m-portlet__body">
              <?php// echo var_dump($data_menu);?>
              <div class="form-group m-form__group row">
                          <label for="example-text-input" class="col-2 col-form-label" style="padding-top: 5px;">Nama Menu</label>
                          <div class="col-9">
                            <input class="form-control m-input" type="text" name="menu_name" placeholder="Masukan nama menu" required>
                          </div>
                        </div>
                        <div class="form-group m-form__group row">
                          <label for="example-text-input" class="col-2 col-form-label" style="padding-top: 5px;">Icon</label>
                          <div class="col-9">
                            <input class="form-control m-input" type="text" name="menu_icon" placeholder="Masukan icon 'fa fa-home'" >
                          </div>
                        </div>
                        <div class="form-group m-form__group row">
                          <label for="example-text-input" class="col-2 col-form-label" style="padding-top: 5px;">URL</label>
                          <div class="col-9">
                            <input class="form-control m-input" type="text" name="menu_url" placeholder="Masukan url / controller">
                          </div>
                        </div>
                        <div class="form-group m-form__group row">
                          <label for="example-text-input" class="col-2 col-form-label" style="padding-top: 5px;">Aktif</label>
                          <div class="col-9">
                            <select class="form-control" name="menu_active" required>
                              <option value="">Pilih aktif / tidak aktif</option>
                              <option value="1">Aktif</option>
                              <option value="0">Tidak Aktif</option>
                            </select>
                          </div>
                        </div>
            </div>
            <div class="m-portlet__foot text-right">
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>
        </form>
        <form id="save-submenu">
          <div class="m-portlet">
            <div class="m-portlet__head">
              <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                  <h3 class="m-portlet__head-text">
                    Tambah Sub Menu
                  </h3>
                </div>
              </div>
            </div>
            <div class="m-portlet__body">
              <div class="form-group m-form__group row">
                          <label for="example-text-input" class="col-2 col-form-label" style="padding-top: 5px;">Pilih Parent</label>
                          <div class="col-9">
                            <select class="form-control parent-menu" name="submenu_parent" required>
                              <option value="">Pilih parent menu</option>
                              <?php foreach($data_menu as $dmb):?>
                                <option value="<?=$dmb['id'];?>"><?=$dmb['name'];?></option>
                              <?php endforeach;?>
                            </select>
                            </select>
                          </div>
                        </div>
                        <div class="form-group m-form__group row">
                          <label for="example-text-input" class="col-2 col-form-label" style="padding-top: 5px;">Nama Sub Menu</label>
                          <div class="col-9">
                            <input class="form-control m-input" type="text" name="submenu_name" placeholder="Masukan nama submenu" required>
                          </div>
                        </div>
                        <div class="form-group m-form__group row">
                          <label for="example-text-input" class="col-2 col-form-label" style="padding-top: 5px;">URL</label>
                          <div class="col-9">
                            <input class="form-control m-input" type="text" name="submenu_url" placeholder="Masukan url / controller" required>
                          </div>
                        </div>
                        <div class="form-group m-form__group row">
                          <label for="example-text-input" class="col-2 col-form-label" style="padding-top: 5px;">Aktif</label>
                          <div class="col-9">
                            <select class="form-control" name="submenu_active" required>
                              <option value="">Pilih aktif / tidak aktif</option>
                              <option value="1">Aktif</option>
                              <option value="0">Tidak Aktif</option>
                            </select>
                          </div>
                        </div>
            </div>
            <div class="m-portlet__foot text-right">
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>
        </form>
        </div>

        <!--end:: Widgets/New Users-->
      </div>
      <div class="col-xl-7">
        <!--begin::Portlet edit view-->
        <div class="edit-render">
        <?php if($data != 0){?>
        <form id="update-sorm" data-type="<?=($data['parent_id'] == 0) ? 'menu' : 'submenu';?>">
          <input type="hidden" name="id" value="<?=$data['id'];?>">
          <div class="m-portlet">
            <div class="m-portlet__head">
              <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title">
                  <h3 class="m-portlet__head-text">
                    <?=$tittle;?>
                  </h3>
                </div>
              </div>
            </div>
            <div class="m-portlet__body">
              <?php if($data['parent_id'] == 0):?>
                  <div class="form-group m-form__group row">
                    <label for="example-text-input" class="col-2 col-form-label" style="padding-top: 5px;">Nama Menu</label>
                    <div class="col-9">
                      <input class="form-control m-input" type="text" name="menu_name" placeholder="Masukan nama menu" value="<?=$data['name'];?>" required>
                    </div>
                  </div>
                  <div class="form-group m-form__group row">
                    <label for="example-text-input" class="col-2 col-form-label" style="padding-top: 5px;">Icon</label>
                    <div class="col-9">
                      <input class="form-control m-input" type="text" name="menu_icon" value="<?=$data['icon_menu'];?>" placeholder="Masukan icon 'fa fa-home'" >
                    </div>
                  </div>
                  <div class="form-group m-form__group row">
                    <label for="example-text-input" class="col-2 col-form-label" style="padding-top: 5px;">URL</label>
                    <div class="col-9">
                      <input class="form-control m-input" type="text" name="menu_url" placeholder="Masukan url / controller" value="<?=$data['url'];?>">
                    </div>
                  </div>
                  <div class="form-group m-form__group row">
                    <label for="example-text-input" class="col-2 col-form-label" style="padding-top: 5px;">Aktif</label>
                    <div class="col-9">
                      <select class="form-control" name="menu_active" required>
                        <option value="<?=$data['show_in_menu'];?>"><?=($data['show_in_menu'] == 0) ? 'Tidak Aktif' : 'Aktif';?></option>
                        <option value="<?=($data['show_in_menu'] == 0) ? '1' : '0';?>"><?=($data['show_in_menu'] == 0) ? 'Aktif' : 'Tidak Aktif';?></option>
                      </select>
                    </div>
                  </div>
              <?php else:?>
                <div class="form-group m-form__group row">
                  <label for="example-text-input" class="col-2 col-form-label" style="padding-top: 5px;">Pilih Parent</label>
                  <div class="col-9">
                    <select class="form-control parent-menu" name="submenu_parent" required>
                      <!-- untuk yang parent id sama -->
                      <?php foreach($data_menu as $dma):?>
                        <?php if($data['parent_id'] == $dma['id']):?>
                          <option value="<?=$dma['id'];?>"><?=$dma['name'];?></option>
                        <?php endif;?>
                      <?php endforeach;?>
                      <!-- untuk yang parent id tidak sama -->
                      <?php foreach($data_menu as $dmb):?>
                        <?php if($data['parent_id'] !== $dmb['id']):?>
                          <option value="<?=$dmb['id'];?>"><?=$dmb['name'];?></option>
                        <?php endif;?>
                      <?php endforeach;?>
                    </select>
                  </div>
                </div>
                <div class="form-group m-form__group row">
                  <label for="example-text-input" class="col-2 col-form-label" style="padding-top: 5px;">Nama Sub Menu</label>
                  <div class="col-9">
                    <input class="form-control m-input" type="text" name="submenu_name" placeholder="Masukan nama submenu" value="<?=$data['name'];?>" required>
                  </div>
                </div>
                <div class="form-group m-form__group row">
                  <label for="example-text-input" class="col-2 col-form-label" style="padding-top: 5px;">URL</label>
                  <div class="col-9">
                    <input class="form-control m-input" type="text" name="submenu_url" placeholder="Masukan url / controller" value="<?=$data['url'];?>" required>
                  </div>
                </div>
                <div class="form-group m-form__group row">
                  <label for="example-text-input" class="col-2 col-form-label" style="padding-top: 5px;">Aktif</label>
                  <div class="col-9">
                    <select class="form-control" name="submenu_active" required>
                        <option value="<?=$data['show_in_menu'];?>"><?=($data['show_in_menu'] == 0) ? 'Tidak Aktif' : 'Aktif';?></option>
                        <option value="<?=($data['show_in_menu'] == 0) ? '0' : '1';?>"><?=($data['show_in_menu'] == 0) ? 'Tidak Aktif' : 'Aktif';?></option>
                    </select>
                  </div>
                </div>
              <?php endif;?>
            </div>
            <div class="m-portlet__foot text-right">
              <button type="button" class="btn btn-default batal-update-sorm">Batal</button>
              <button type="submit" class="btn btn-success">Simpan</button>
            </div>
          </div>
        </form>
        <?php } ?>
        </div>
        <!--end::Portlet tree view-->
        <!--begin::Portlet tree view-->
        <div class="m-portlet">
          <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
              <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                  Tree View Menu dan Sub Menu
                </h3>
              </div>
            </div>
          </div>
          <div class="m-portlet__body">

            <div class="alert alert-success">
              Catatan! Klik nodenya, lalu klik edit untuk edit menu / submenu, klik hapus untuk hapus menu / submenu.
            </div>

            <div class="alert alert-warning">
              Perhatian! Jika menghapus <b>Menu</b> maka <b>Submenu</b> yang parentnya menu tersebut akan terhapus juga.
            </div>

            <div class="col-12" style="margin-bottom: 10px">
              <button class="btn btn-sm btn-primary menu-edit">Edit</button>
              <button class="btn btn-sm btn-danger menu-del">Hapus</button>
            </div>

            <div id="m_tree_1" class="tree-demo">
              <ul>
                <?php foreach($data_menu as $dmc):?>
                  <li data-jstree='{ "icon" : "<?=$dmc['icon_menu'];?> <?=($dmc['show_in_menu'] == 1) ? 'm--font-success' : 'm--font-danger';?>", "opened" : "true" }' data-id="<?=$dmc['id'];?>" data-type="Menu" data-name="<?=$dmc['name'];?>">
                    <?=$dmc['name'];?>
                    <?php foreach($data_submenu as $dsmc):?>
                      <?php if($dmc['id'] == $dsmc['parent_id']):?>
                        <ul>
                          <li data-jstree='{"icon" : "fa fa-folder <?=($dsmc['show_in_menu'] == 0) ? 'm--font-danger' : 'm--font-default';?>"}' data-id="<?=$dsmc['id'];?>" data-type="Submenu" data-name="<?=$dsmc['name'];?>">
                            <?=$dsmc['name'];?>
                          </li>
                        </ul>
                      <?php endif;?>
                    <?php endforeach;?>

                  </li>
                <?php endforeach;?>
              </ul>
            </div>
          </div>
        </div>
        <!-- end::Portlet tree view-->
      </div>
    </div>

    <!--End::Section-->
  </div>
</div>
