<script type="text/javascript">
  
$(document).ready(function(){

  var btn_swal = `<html>     
              <button id="confirmBtn" class="btn btn-success">Yakin</button>
              <button id="cancelBtn" class="btn btn-danger">Batal</button>
          <html>`;

  /*************************************************************************************
   * SITE SETTING
   *************************************************************************************/

  // inisialisasi form
  $('#save-setting').on('submit', function(e){
    e.preventDefault();
    // menonaktifkan tombol kirim
    $('.btn-success').attr('disabled', 'disabled');

    // mengirim data update
    $.post('<?=base_url("setting/update_site_setting");?>', $(this).serialize(), function(response){
      let parse = JSON.parse(response);
      // check jika berhasil atau tidak dalam mengupdate data
      if(parse['status'] == '200')
      {
        toastr.success(parse['message']);
        $('.btn-success').removeAttr('disabled');
      }
      else
      {
        toastr.error(parse['message']);
        $('.btn-success').removeAttr('disabled');
      }
    });
  });


  /*************************************************************************************
   * MENU SETTING
   *************************************************************************************/

   // meghapus menu / submenu
   $('.menu-del').on('click', function(){

    // inisialisasi element
    let element = $('.jstree-clicked').parents('li');

    // inisialisasii data
    let id    = element.data('id');
    let type  = element.data('type');
    let nama  = element.data('name');
    let url;


    if(type == null)
    {
      swal(
      {
        title: 'Anda belum memilih Menu atau Submenu',
        type: 'warning',
        showConfirmButton: false,
        showCancelButton:false,
        showCloseButton:true,
      });

      return false;
    }


    if(type == 'Menu')
    {
      url = "<?=base_url('setting/delete_menu/');?>";
    }
    else if(type == 'Submenu')
    {
      url = "<?=base_url('setting/delete_submenu/');?>";
    }

    // confirm
    swal({
      title: 'Apa anda yakin ingin menghapus '+type+' '+nama+' ini?',
      type: 'warning',
      html : btn_swal,
      showConfirmButton: false,
      showCancelButton:false,
      showCloseButton:false,
    });

    $(document).on('click', '#confirmBtn', function(){
      $.get(url +"/" +id, function(response){
        let parse = JSON.parse(response);

        if(parse['status'] == '200')
        {
          swal(parse['message']);
          // referesh setelah 1 detik
          setTimeout(function(){
            window.location = window.location.href;
          }, 1000);
        }
        else
        {
          swal(parse['message']);
        }
      });
    });

    $(document).on('click', '#cancelBtn', function(){
      swal.close();
    });
    
   // end of parent function
   });

   // mengedit menu / submenu
   $('.menu-edit').on('click', function(){
    // inisialisasi element
    let element = $('.jstree-clicked').parents('li');

    // inisialisasii data
    let id    = element.data('id');
    let type  = element.data('type');
    let nama  = element.data('name');
    let url   = "<?=base_url('setting/edit_sorm/0/');?>";

    // mendapatkan data edit dan rendering
    $.get(url + id, function(data){
      $('.edit-render').html(data);
      window.scrollTo(0, 50);
    });

   });

   // mengirim data edit menu / submenu
   $(document).on('submit', '#update-sorm', function(e){
    e.preventDefault();
    // menonaktifkan tombol kirim
    $('.btn-success').attr('disabled', 'disabled');

    // mengirim data update untuk disimpan dalam database
    $.post('<?=base_url('setting/edit_sorm/1/');?>' + $('input[name="id"]').val(), $(this).serialize(), function(response){
      // memparse hasil json
      let parse = JSON.parse(response);
      // check jika berhasil atau tidak dalam mengupdate data
      if(parse['status'] == '200')
      {
        toastr.success(parse['message']);
        window.location = window.location.href;
      }
      else
      {
        toastr.error(parse['message']);
        $('.btn-success').removeAttr('disabled');
      }
    });
   });

   // batal dalam mengedit menu atau submenu
   $(document).on('click', '.batal-update-sorm', function(){
    $('.edit-render').html('');
   });

   /******** MENU ********/

   // inisialisasi form tambah menu
   $('#save-menu').on('submit', function(e){
    e.preventDefault();
    // menonaktifkan tombol kirim
    $('.btn-success').attr('disabled', 'disabled');

    // mengirim data untuk disimpan dalam database
    $.post('<?=base_url("setting/save_menu");?>', $(this).serialize(), function(response){
      let parse = JSON.parse(response);
      // check jika berhasil atau tidak dalam mengupdate data
      if(parse['status'] == '200')
      {
        toastr.success(parse['message']);
        window.location = window.location.href;
      }
      else
      {
        toastr.error(parse['message']);
        $('.btn-success').removeAttr('disabled');
      }
    });
   });

  /******** SUB MENU ********/

   // inisialisasi select2 untuk parent-menu class
   $('.parent-menu').select2();

   // inisialisasi form tambah submenu
   $('#save-submenu').on('submit', function(e){
    e.preventDefault();
    // menonaktifkan tombol kirim
    $('.btn-success').attr('disabled', 'disabled');

    // mengirim data untuk disimpan dalam database
    $.post('<?=base_url("setting/save_submenu");?>', $(this).serialize(), function(response){
      let parse = JSON.parse(response);
      // check jika berhasil atau tidak dalam mengupdate data
      if(parse['status'] == '200')
      {
        toastr.success(parse['message']);
        window.location = window.location.href;
      }
      else
      {
        toastr.error(parse['message']);
        $('.btn-success').removeAttr('disabled');
      }
    });
   });

});

</script>