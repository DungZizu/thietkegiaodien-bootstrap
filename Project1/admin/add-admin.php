<?php include ('partials/menu.php') ?>

<div class="Main-Content">
        <div class="wrapper">
            <h1>Add New User</h1>
            <form action="" method="POST">
                <table class="tbl-30">
                    <tr>
                        <td>Full Name: </td>
                        <td>
                            <input type="text" name="full_name" placeholder="Enter your name..">
                        </td>
                    </tr>

                    <tr>
                        <td>UserName: </td>
                        <td>
                            <input type="text" name="username" placeholder="Enter your username..">
                        </td>
                    </tr>

                    <tr>
                        <td>Password: </td>
                        <td>
                            <input type="password" name="password" placeholder="Enter your password..">
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add User" class="btn-danger">
                        </td>
                    </tr>

                    
                </table>
            </form>
        </div>

</div>
<?php include ('partials/footer.php') ?>