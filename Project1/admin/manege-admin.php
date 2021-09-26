<?php include ('partials/menu.php') ?>

        <!--Main Content Section Starts-->
        <div class="Main-Content">
            <div class="wrapper">
                <h1>Manage Users</h1>
                <br/> <br/>
                <a href="add-admin.php" class="btn-primary" >Add New User</a>
                <br/> <br/> 

                <table class="tbl-full">
                    <tr>
                        <th>S.N.</th>
                        <th>FullName</th>
                        <th>UserName</th>
                        <th>Actions</th>
                    </tr>

                    <tr>
                        <td>1.</td>
                        <td>Arsenio</td>
                        <td>toduwaxobi</td>
                        <td>
                            
                            <a href="#" class="btn-primary">Change Password</a>
                            <a href="#" class="btn-secondary">Update Admin</a>
                            <a href="#" class="btn-danger">Delete Admin</a>
                            
                        </td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>Sasha Mendez</td>
                        <td>goxemyde</td>
                        <td>
                            <a href="#" class="btn-primary">Change Password</a>
                            <a href="#" class="btn-secondary">Update Admin</a>
                            <a href="#" class="btn-danger">Delete Admin</a>
                        </td>
                    </tr>
                    <tr>
                        <td>3.</td>
                        <td>Vijay Thapa</td>
                        <td>vijaythapa</td>
                        <td>
                            <a href="#" class="btn-primary">Change Password</a>
                            <a href="#" class="btn-secondary">Update Admin</a>
                            <a href="#" class="btn-danger">Delete Admin</a>
                        </td>
                    </tr>
                    <tr>
                        <td>4.</td>
                        <td>Administrator</td>
                        <td>Admin</td>
                        <td>
                            <a href="#" class="btn-primary">Change Password</a>
                            <a href="#" class="btn-secondary">Update Admin</a>
                            <a href="#" class="btn-danger">Delete Admin</a>
                        </td>
                    </tr>
                </table>

                
            
        </div>
        <!--Main Content Section ends-->

        <?php include ('partials/footer.php') ?>