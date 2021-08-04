<br />
<div class="row align-center">
    <div class="align-center justify-content-center">
        <h2>Dashboard User, You are successfully logged in. </h2>
    </div>
</div>

<div class="row">
    <a class="btn btn-danger" href="<?=base_url().'Dashboard';?>">Users Table</a>
    <a class="btn " href="<?=base_url().'Dashboard/uploads';?>">Uploads Table</a>
    <a class="btn btn-danger" href="<?=base_url().'Dashboard/user_roles';?>">Users Roles</a>
    <a class="btn btn-danger" href="<?=base_url().'login/logout';?>">Log out</a>
</div>

<div class="page-content page-container" id="page-content">
    <div class="padding">
        <div class="row container d-flex justify-content-center">
            <div class="col-lg-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Users Table</h4>
                        <p class="card-description"> Users table with name, work Id and password </p>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>UserName</th>
                                        <th>Email</th>
                                        <th>Work ID</th>
                                        <th>Password</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Samso Park</td>
                                        <td>Samso Park</td>
                                        <td>34424433</td>
                                        <td>12345</td>
                                        <td><label class="badge badge-danger">Pending</label></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>