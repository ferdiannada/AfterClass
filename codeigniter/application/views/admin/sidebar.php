<ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Data</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          
          <h6 class="dropdown-header">Data:</h6>
          <a class="dropdown-item" href="<?php echo site_url('barang'); ?>">Data Barang</a>
          <a class="dropdown-item" href="">Data Member</a>
          <a class="dropdown-item" href="">Data Admin</a>
          <a class="dropdown-item" href="<?php echo site_url('BlankController'); ?>">Data Blank</a>
          
          
          <!-- <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="404.html">404 Page</a>
          <a class="dropdown-item" href="blank.html">Blank Page</a> -->
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Transaksi</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          
          <h6 class="dropdown-header">Menu</h6>
          <a class="dropdown-item" href="">Transaksi</a>
          <a class="dropdown-item" href="">Verifikasi</a>
          
          <h6 class="dropdown-header">Laporan</h6>
          <a class="dropdown-item" href="">Laporan Bulanan</a>
          <a class="dropdown-item" href="">Laporan Mingguan</a>
          
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.html">
          <i class="fas fa-fw fa-table"></i>
          <span>Tables</span></a>
      </li>
    </ul>