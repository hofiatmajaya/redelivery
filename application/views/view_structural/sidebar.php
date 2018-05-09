
<aside class="main-sidebar">

  <section class="sidebar">

    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?= base_url(); ?>assets/dist/img/icon/user_icon.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p class="name_user"></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <ul id="parent-sidebar" class="sidebar-menu" data-widget="tree">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="<?=site_url('ldnd/ldnd_status');?>" class="link-menu">
          <i class="fa fa-bar-chart"></i>LDND STATUS
        </a>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-bar-chart"></i>
          <span>CLG STATUS</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="#" class="link-menu">
              <i class="fa fa-circle-o"></i>Hard Time Component
            </a>
          </li>
          <li>
            <a href="#" class="link-menu">
              <i class="fa fa-circle-o"></i>On Condition
            </a>
          </li>
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-bar-chart"></i>
          <span>STATUS REPORT</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li>
            <a href="<?=site_url('status_report/ad_status_airframe');?>" class="link-menu">
              <i class="fa fa-circle-o"></i>AD Status Airframe
            </a>
          </li>
          <li>
            <a href="<?=site_url('status_report/ad_status_engine');?>" class="link-menu">
              <i class="fa fa-circle-o"></i>AD Status Engine
            </a>
          </li>
          <li>
            <a href="<?=site_url('status_report/ad_status_apu');?>" class="link-menu">
              <i class="fa fa-circle-o"></i>AD Status APU
            </a>
          </li>
          <li>
            <a href="<?=site_url('status_report/sb_status_airframe');?>" class="link-menu">
              <i class="fa fa-circle-o"></i>SB Status Airframe
            </a>
          </li>
          <li>
            <a href="<?=site_url('status_report/sb_status_engine');?>" class="link-menu">
              <i class="fa fa-circle-o"></i>SB Status Engine
            </a>
          </li>
          <li>
            <a href="<?=site_url('status_report/sb_status_apu');?>" class="link-menu">
              <i class="fa fa-circle-o"></i>SB Status APU
            </a>
          </li>
          <li>
            <a href="<?=site_url('status_report/stc_status');?>" class="link-menu">
              <i class="fa fa-circle-o"></i>STC Status
            </a>
          </li>
          <li>
            <a href="<?=site_url('status_report/eo_mod_status');?>" class="link-menu">
              <i class="fa fa-circle-o"></i>EO MOD Status
            </a>
          </li>
        </ul>
      </li>

    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
