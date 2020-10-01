 <?php $uri = service('uri'); ?>
 <!-- BEGIN: Aside Menu -->
          <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="0" m-menu-dropdown-timeout="500">
            <ul class="m-menu__nav ">
              <?php 
              //$menu = getMenu();
              //echo var_dump($uri->getSegment(1));
              foreach($menu as $nav):?>

              <?php
              if(count($nav['child']) == 0)
              {
                if($uri->getSegment(1) == $nav['url'])
                {
                  $active = "m-menu__item--active menuback";
                  $menu_active = "menuactive";
                }
                else
                {
                  $active = "";
                  $menu_active ="";
                }
                ?>
              <li class="m-menu__section m-menu__section--first">
                <h4 class="m-menu__section-text">Departments</h4>
                <i class="m-menu__section-icon flaticon-more-v2"></i>
              </li>

              <li class="m-menu__item  <?= $active ?>" aria-haspopup="true">
                <a href="<?php echo base_url($nav['url']);?>" class="m-menu__link ">
                  <span class="m-menu__item-here"></span>
                  <i class="m-menu__link-icon <?php echo $nav['icon_menu'];?>"></i>
                  <span class="m-menu__link-text <?php echo $menu_active;?>"><?php echo $nav['name'];?></span></a></li>
                  <?php
                }
                else
                {
                if( $uri->getSegment(1) == $nav['url'])
                {
                  $parent_active = "m-menu__item m-menu__item--submenu m-menu__item--expanded m-menu__item--open m--bg-navy";
                }
                else
                {
                  $parent_active = "m-menu__item  m-menu__item--submenu m--bg-navy";
                }
                  ?>
                <li class="<?php echo $parent_active;?>" aria-haspopup="true" m-menu-submenu-toggle="hover">
                  <a href="javascript:void(0)" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon <?php echo $nav['icon_menu'];?>"></i>
                      <span class="m-menu__link-text"><?php echo $nav['name'];?></span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                  </a>
                  <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                    <?php foreach($nav['child'] as $child):
                    
                    if( $uri->getSegment(1) == $nav['url'] && $uri->getSegment(2) == $child['url'])
                    {
                      $child_active  = "m-menu__item m-menu__item--active menuback";
                      $menu_active = "menuactive";
                    }
                    else
                    {
                      $child_active  = "m-menu__item";
                      $menu_active = "";
                    }?>
                      <li class="<?php echo $child_active; ?>" aria-haspopup="true">
                        <a href="<?php echo base_url($child['url']);?>" class="m-menu__link">
                        <i class="m-menu__link-bullet m-menu__link-bullet--dot"><span></span></i>
                        <span class="m-menu__link-text <?php echo $menu_active; ?>"><?php echo $child['name'];?></span></a>
                      </li>
                    <?php endforeach;?>
                    </ul>
                  </div>
                </li>
              <?php  } ?>
              <?php endforeach;?>
            </ul>
          </div>

          <!-- END: Aside Menu -->