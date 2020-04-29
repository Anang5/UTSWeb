  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url() ?>/assets/dist/img/user10.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('nama'); ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">HEADER</li>
        
        <li class="active"><a href="#"><i class="fa fa-gears"></i> <span>Pemesanan</span>
        <li>
          <a href="#modal-profil" data-toggle="modal">
            <i class="fa fa-user"></i><span> Profil</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

<!-- modal about -->
<div class="modal modal-default fade" id="modal-profil">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title">Profil</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input type="hidden" name="idadmin">
          <label>NIM</label>
          <input type="number" class="form-control" readonly value="181240000772">
        </div>
        <div class="form-group">
          <label>NAMA</label>
          <input type="text" class="form-control" readonly value="ANANG MA'RUF">
        </div>
        <div class="form-group">
          <label>PRODI/SEMESTER</label>
          <input type="TEXT" class="form-control" readonly value="TEKNIK INFORMATIKA / 4 ">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /.modal about-->
      </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>