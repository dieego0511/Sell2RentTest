<?php
session_start();

error_reporting(0);
ini_set('display_errors', 0);

require_once 'logica.php';
require_once 'helpers.php';

// print_r($_SESSION['users']['0']['name']);
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="style.css">
    <!-- jQuery and Bootstrap  -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <title>CRUD Sell2Rent</title>

    <nav class="navbar-dark bg-primary text-center">
      <a class="navbar-brand" href="#">Users List</a>
    </nav>

  
  </head>
  <body>
    <!-- Button trigger modal -->
    <div class="newUser">
      <button type="button" class="btn btn-outline-success " data-toggle="modal" data-target="#newUserModal">Create new user</button>
    </div>
    

    <div class="row justify-content-center"  style="max-width: 70%;margin:  0 10% 0 10%;">
      <table class="table table-striped">
        <thead class="thead-light">
          <tr>
            <th class="alignTextCenter" >Name</th>
            <th class="alignTextCenter">Last Name</th>
            <th class="alignTextCenter">Date</th>
            <th class="alignTextCenter" colspan="2">Options</th>
          </tr>
        </thead>
        <tbody>
        <?php
        foreach ($_SESSION['users'] as $key => $user ) {
          echo "<tr>
              <th  id='userName".$key."' class='alignTextCenter'>".$user['name']."</th>
              <th  id='userLastName".$key."' class='alignTextCenter'>".$user['lastName']."</th>
              <th class='alignTextCenter''>".$user['dateTime']."</th>
              <th class='alignTextCenter' colspan='2'>
                <button type='button' data-toggle='modal' data-target='#editUserModal' class='btn btn-info' onclick='editUser(".$key.")'>Edit</button>
                <a href='logica.php?delete=".$key."' class='btn btn-danger'>Delete</a>
              </th>";
        }
            
        ?>
          </tr>
        </tbody>
      </table>
    </div>






    <!-- Modal Create NewUsers-->
    <div class="modal fade" id="newUserModal" tabindex="-1" role="dialog" aria-labelledby="newUserModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="newUserModalLabel">Create New User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
     <!---------------------------- Begin of table new users ----------------------->
            <div class="row justify-content-center">  
              <form  action="logica.php" method="POST">
                <div class=" form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Enter your name"><br>
                </div>

                <div class=" form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control" name="lastName" placeholder="Enter your  last name"><br>
                </div>

                  <input type="hidden" name="date" value="<?php  echo fechaActual(); ?>"><br>

                  <input type="hidden" name="time" value="<?php  echo horaActual(); ?>"><br>

                
                <div class=" form-group text-center">
                  <button  type="submit" class="btn btn-primary"  name="save">SAVE</button>
                </div>
                
              </form>
      <!---------------------------- End of table new users ----------------------->
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- End Create NewUsers Modal -->


    <!-- Modal Edit Users-->
    <div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUserModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editUserModalLabel">Edit User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
     <!---------------------------- Begin of table edit users ----------------------->
            <div class="row justify-content-center">  
              <form  action="logica.php" method="POST">
                <div class=" form-group">
                  <label>Name</label>
                  <input type="text" class="form-control" name="nameEdit" id="nameEdit"><br>
                </div>

                <div class=" form-group">
                  <label>Last Name</label>
                  <input type="text" class="form-control" name="lastNameEdit" id="lastNameEdit"><br>
                </div>

                  <input type="hidden" name="idUserEdit" id="idUserEdit">

                <div class=" form-group text-center">
                  <button  type="submit" class="btn btn-primary"  name="edit">EDIT</button>
                </div>
                
              </form>
      <!---------------------------- End of table edit users ----------------------->
            </div>

          </div>
        </div>
      </div>
    </div>
    <!-- End Edit Users Modal -->

    </div>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="funciones.js"></script>
  </body>
</html>