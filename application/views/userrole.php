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
        <div class="col">
            <div class="card">
                <!-- Card header -->
                <div class="card-header border-0">
                <h3 class="mb-0">User table</h3>
                </div>
                <!-- Light table -->
                <div class="table-responsive">
                <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Datetime</th>
                        <th scope="col">Admin</th>
                    </tr>
                    </thead>
                    <tbody class="list">
                      <?php
                        $userList = json_decode($userList);
                        foreach ($userList as $key => $user) {
                          echo '<tr>
                                  <th scope="row">'.
                                    $user->user_id.
                                  '</th>
                                  <td>
                                    '.$user->name.'
                                  </td>
                                  <td>
                                    '.$user->email.'
                                  </td>
                                  <td>
                                    '.$user->date_time.'
                                  </td>';
                                  if($user->role == "admin") {
                                    echo  '<td>
                                            <label class="custom-toggle">
                                              <input type="checkbox" name="activeAdmin" id="'.$user->user_id.'" checked>
                                              <span class="custom-toggle-slider rounded-circle" data-label-off="User" data-label-on="Admin"></span>
                                            </label>
                                          </td>';
                                  } else {
                                    echo  '<td>
                                            <label class="custom-toggle">
                                              <input type="checkbox" name="activeAdmin" id="'.$user->user_id.'">
                                              <span class="custom-toggle-slider rounded-circle"  data-label-off="User" data-label-on="Admin"></span>
                                            </label>
                                          </td>';
                                  }
                                  echo '</tr>';
                        }
                      ?>
                    </tbody>
                </table>
                </div>
                <!-- Card footer -->
                <div class="card-footer py-4">
                <nav aria-label="...">
                    <ul class="pagination justify-content-end mb-0">
                    <li class="page-item">
                        <a class="page-link" href="#" tabindex="-1">
                          <i class="fas fa-angle-left"></i>
                        </a>
                    </li>
                    <li class="page-item active">
                      <a class="page-link" id="page1" href="#">1</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" id="page2" href="#">2</a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" id="page3" href="#">3</a>
                    </li>

                    <li class="page-item">
                        <a class="page-link" href="#">
                        <i class="fas fa-angle-right"></i>
                        </a>
                    </li>
                    </ul>
                </nav>
                </div>
            </div>
            </div>
        </div>
  </div>

  <script>
    var current_pages = 1;
    $("[name=activeAdmin]").change(function() {
      var id = $(this).attr("id");

      $.post("./userrole/changeRole", { "userId" : id }, function(res, err) {
        
      });
    });
    $(document).ready(function() {
      $(".page-link").click(function() {
        var button = $(this);
        console.log(button.html());
        if(button.html().trim() == '<i class="fas fa-angle-left"></i>') {
          if(current_pages > 1) {
            current_pages -= 3;
            $("#page1").text(current_pages);
            $("#page2").text(current_pages + 1);
            $("#page3").text(current_pages + 2);
          }
        } else if(button.html().trim() == '<i class="fas fa-angle-right"></i>') {
            current_pages += 3;
            $("#page1").text(current_pages);
            $("#page2").text(current_pages + 1);
            $("#page3").text(current_pages + 2);
            $(".page-item ").removeClass("active");
        } else {
          var pageNum = $(this).text();
          $(".page-item ").removeClass("active");
          $.post("./userrole/getuserListAjax", { "from" : (pageNum - 1) * 10, "count" : 10}, function(res, err) {
            $(".list").remove();

            var appendHtml = "<tbody class='list'>";
            res = JSON.parse(res);
            res.forEach(user => {
                appendHtml+= `<tr>
                              <th scope="row">`+
                                user.user_id+
                              `</th>
                              <td>
                                `+user.name+`
                              </td>
                              <td>
                                `+user.email+`
                              </td>
                              <td>
                                `+user.date_time+`
                              </td>`;
                              if(user.role == "admin") {
                                appendHtml+=  `<td>
                                        <label class="custom-toggle">
                                          <input type="checkbox" name="activeAdmin" id="`+user.user_id+`" checked>
                                          <span class="custom-toggle-slider rounded-circle" data-label-off="User" data-label-on="Admin"></span>
                                        </label>
                                      </td>`;
                              } else {
                                appendHtml+=  `<td>
                                        <label class="custom-toggle">
                                          <input type="checkbox" name="activeAdmin" id="`+user.user_id+`">
                                          <span class="custom-toggle-slider rounded-circle"  data-label-off="User" data-label-on="Admin"></span>
                                        </label>
                                      </td>`;
                              }
                appendHtml+= `</tr>`;
              });
            appendHtml += "</tbody>";

            button.parent().addClass("active");
            $(".table.align-items-center.table-flush").append(appendHtml);
          });
        }
      });
    })
  </script>