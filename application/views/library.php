<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
        AF Documentation
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="<?=base_url().'library';?>">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">AD Documents</span>
              </a>
            </li>
          </ul>

          <?php

            if($isLogined) {
              echo '<ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" href="'.base_url().'dashboard">
                          <i class="ni ni-cloud-upload-96 text-primary"></i>
                          <span class="nav-link-text">Dashboard</span>
                        </a>
                      </li>
                    </ul>';

              if($isAdmin) {
                echo '<ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link active" href="'.base_url().'userrole">
                            <i class="ni ni-single-02 text-primary"></i>
                            <span class="nav-link-text">User Roles</span>
                          </a>
                        </li>
                      </ul>';
              }
            }
          
          ?>

          
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
          </ul>
          <?php
            if($isLogined) {
              echo '<ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
                      <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                              <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">
                            </span>
                          </div>
                        </a>
                        <div class="dropdown-menu  dropdown-menu-right ">
                          <a href="./login/logout" class="dropdown-item">
                              <i class="ni ni-user-run"></i>
                              <span>Logout</span>
                          </a>
                        </div>
                      </li>
                    </ul>';
            } else {
                echo '<ul class="navbar-nav align-items-center ml-auto ml-md-0 ">
                        <li class="nav-item">
                          <a class="btn btn-danger" href="./login" role="button">
                            Login
                          </a>
                        </li>
                      </ul>';
            }
          ?>
        
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <?php
          foreach ($filelist as $key => $file) {
            echo '
              <div class="col-xl-4 col-lg-4 col-md-6  icon-card-container" id="card'.$key.'">
                <div class="card">
                  <div class="card-img-top icon-card">
                          <i class="ni ni-books text-primary icon-card-icon"></i>
                  </div>
  
                  <div class="card-body text-center">
                      <h5 class="h2 card-title mb-4">
                        '.$file["name"].'
                      </h5>';
                        echo '<button type="button" class="btn btn-success btn-view" name="'.$file["name"].'" id="'.$key.'">
                                <a href="./library/viewFile/'.$file["name"].'" target="_blank" style="color:white">
                                  View PDF
                                </a>
                              </button>';
                      echo '
                  </div>
                </div>
              </div>     
            ';
          }
        ?>
      </div>
      <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
          <div class="modal-content bg-gradient-danger">
            
              <div class="modal-header">
                  <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">×</span>
                  </button>
              </div>
              
              <div class="modal-body">
                
                  <div class="py-3 text-center">
                      <i class="ni ni-bell-55 ni-3x"></i>
                      <h4 class="heading mt-4">You should read this!</h4>
                      <p>You are going to delete file in the server directory. <br>Are you sure?</p>
                  </div>
                  
              </div>
              
              <div class="modal-footer">
                  <button type="button" class="btn btn-white" id="btnDeleteConfirm">Ok, Delete it</button>
                  <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
              </div>
              
          </div>
        </div>
      </div>
  </div>

  <script>
    $(document).ready(function() {
      $(".btn-view").click(function() {
        var name = $(this).attr("name");
        var id = $(this).attr("id");
        sessionStorage.setItem("name", name);
        sessionStorage.setItem("id", id);

      });
    })
  </script>