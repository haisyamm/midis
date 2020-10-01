      <!-- begin::Footer -->
      <footer class="m-grid__item   m-footer ">
        <div class="m-container m-container--fluid m-container--full-height m-page__container">
          <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
            <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
              <span class="m-footer__copyright">
                2020 &copy; Sikerja Build by <a href="https://lanaproject.com" class="m-link">Lana Project</a>
              </span>

            </div>
            <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
              <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                <li class="m-nav__item">
                  <a href="#" class="m-nav__link">
                    <span class="m-nav__link-text">About</span>
                  </a>
                </li>
                <li class="m-nav__item">
                  <a href="#" class="m-nav__link">
                    <span class="m-nav__link-text">Privacy</span>
                  </a>
                </li>
                <li class="m-nav__item">
                  <a href="#" class="m-nav__link">
                    <span class="m-nav__link-text">T&C</span>
                  </a>
                </li>
                <li class="m-nav__item">
                  <a href="#" class="m-nav__link">
                    <span class="m-nav__link-text">Purchase</span>
                  </a>
                </li>
                <li class="m-nav__item m-nav__item">
                  <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
                    <i class="m-nav__link-icon flaticon-info m--icon-font-size-lg3"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>

      <!-- end::Footer -->
    </div>
    <?php if(!empty($js) || $js != ''): echo view('admin/js/' . $js .'.php'); endif;?>
    <!-- end:: Page -->
    <!--begin::Global Theme Bundle -->
    <script src="<?php echo base_url('assets'); ?>/vendors/base/vendors.bundle.js" type="text/javascript"></script>
    <!--end::Global Theme Bundle -->
    <!--begin::Page Vendors -->
    <script src="<?php echo base_url('assets'); ?>/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
    <!--end::Page Vendors -->

    <!--begin::Page Scripts -->
    <script src="<?php echo base_url('assets'); ?>/app/js/dashboard.js" type="text/javascript"></script>
    <!--end::Page Scripts -->
    <script src="<?php echo base_url('assets'); ?>/js/vendors.bundle.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets'); ?>/js/scripts.bundle.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets'); ?>/js/sweetalert2.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets'); ?>/vendors/datatables/datatables.bundle.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets'); ?>/js/bootstrap-notify.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets'); ?>/js/treeview.js" type="text/javascript"></script>
    
  </body>

  <!-- end::Body -->
</html>