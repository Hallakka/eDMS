  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="https://www.arta.gov.ph" class="brand-link h-13">
      <img src="<?php echo e(asset('images/arta.png')); ?>" alt="ARTA Logo" class="brand-image img-circle elevation-3" style="opacity:1">
      <span class="brand-text font-weight-light ml-1"> eDMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-3">
        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy" data-widget="treeview" role="menu" data-accordion="false">

          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sidebar-view')): ?>
          
            <li class="nav-item">
              <a href="<?php echo e(url('dashboard')); ?>" class="nav-link <?php echo e(request()->is('dashboard') ? 'active' : ''); ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
                <p> Dashboard</p>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                  <p> Create New
                    <i class="right fas fa-caret-left"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo e(url('docs/e/create')); ?>" class="nav-link <?php echo e(request()->is('docs/e/create') ? 'active' : ''); ?>">
                    <i class="fas fa-caret-right nav-icon"></i>
                    <p> External</p>
                  </a>
                </li>
                <li class="nav-item">
                <a href="<?php echo e(url('docs/i/create')); ?>" class="nav-link <?php echo e(request()->is('docs/i/create') ? 'active' : ''); ?>">
                    <i class="fas fa-caret-right nav-icon"></i>
                    <p> Internal</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
                <p> My Files
                  <i class="right fas fa-caret-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo e(url('files/external')); ?>" class="nav-link <?php echo e(request()->is('files/external') ? 'active' : ''); ?>">
                    <i class="fas fa-caret-right nav-icon"></i>
                      <p> External</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(url('files/internal')); ?>" class="nav-link <?php echo e(request()->is('files/internal') ? 'active' : ''); ?>">
                    <i class="fas fa-caret-right nav-icon"></i>
                      <p> Internal</p>
                  </a>
                </li>
              </ul>
            </li>
          <?php endif; ?>

          <?php if(auth()->check() && auth()->user()->hasAnyRole('SuperAdmin|Admin')): ?>
            <li class="nav-header" style="background-color:#394046;margin-top:20px;">ADMIN MANAGEMENT</li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-cogs"></i>
                <p> Settings
                  <i class="right fas fa-caret-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="<?php echo e(route('users.index')); ?>" class="nav-link">
                    <i class="fas fa-caret-right nav-icon"></i>
                    <p> Manage Accounts</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="<?php echo e(route('roles.index')); ?>" class="nav-link">
                    <i class="fas fa-caret-right nav-icon"></i>
                    <p> Manage Roles</p>
                  </a>
                </li>
              </ul>
            </li>
          <?php endif; ?>

          <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('sidebar-view')): ?>
          <li class="nav-header" style="background-color:#394046;margin-top:20px;">NEED HELP?</li>
          <li class="nav-item">
            <a href="https://teams.microsoft.com/l/entity/a6b63365-31a4-4f43-92ec-710b71557af9/_djb2_msteams_prefix_3497283460?context=%7B%22channelId%22%3A%2219%3A5c08e72997624105a6d2dda7e58afd36%40thread.skype%22%7D&tenantId=8ab96c80-565f-49a7-89ca-7aaa1c207770" 
                class="nav-link" target="_blank">
            <i class="nav-icon fas fa-headset"></i>
              <p> ICT Helpdesk</p>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo e(asset('manual/ARTA-EDTS User Manual 04-04-22.pdf')); ?>" class="nav-link" target="_blank">
            <i class="nav-icon fas fa-question-circle"></i>
              <p> User Manual</p>
            </a>
          </li>

          <?php endif; ?>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside><?php /**PATH C:\xampp\htdocs\doctracker\resources\views/partials/sidebar.blade.php ENDPATH**/ ?>