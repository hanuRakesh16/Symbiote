<?php
include 'partials/menu.php';
?>



        <!-- menu section -->
        <div class="main-content"> 
        <div class="wrapper"> 
               <h1>Manage User</h1>
               <br>
               <?php 
               if(isset($_SESSION['add']))
               {
                 echo $_SESSION['add'];
                 unset($_SESSION['add']);
               } 
               if(isset($_SESSION['delete']))
               {
                 echo $_SESSION['delete'];
                 unset($_SESSION['delete']);
               }
               if(isset($_SESSION['update']))
               {
                 echo $_SESSION['update'];
                 unset($_SESSION['update']);
               }
               if(isset($_SESSION['user-not-found']))
               {
                 echo $_SESSION['user-not-found'];
                 unset($_SESSION['user-not-found']);
               }
               if(isset($_SESSION['pwd-not-match']))
               {
                 echo $_SESSION['pwd-not-match'];
                 unset($_SESSION['pwd-not-match']);
               }
               if(isset($_SESSION['change-pwd']))
               {
                 echo $_SESSION['change-pwd'];
                 unset($_SESSION['change-pwd']);
               }
               ?>
               <br><br> <a href="add-user.php" class="btn-primary">Add User</a><br><br>

               <table class="tbl-full">
                <tr>
                  <th>S.no</th>
                  <th>fullname</th>
                  <th>Username</th>
                  <th>Email</th>
                  <th>Address</th>
                  <th>Contact</th>
                  <th>Actions</th>
                </tr>    

                <?php
                //query to get all admin
                  $sql = "SELECT * FROM tbl_user";
                  //execute the query
                  $res = mysqli_query($conn, $sql);
                  //check executed or not

                  if($res == TRUE){
                  $count = mysqli_num_rows($res);

                  $sn =1;//create variable and assign the value
                  if($count>0)
                  {
                      while($rows=mysqli_fetch_assoc($res))
                      {
                        $id = $rows['id'];
                        $full_name = $rows['fname'];
                        $username = $rows['u_name'];
                        $email = $rows['u_email'];
                        $address = $rows['u_address'];
                        $contact = $rows['u_contact'];
            
                        //display in table
                        ?>
                             <tr>
                              <td><?php echo $sn++ ; ?></td>
                              <td><?php echo $full_name; ?></td>
                              <td><?php echo $username; ?></td>
                              <td><?php echo $email; ?></td>
                              <td><?php echo $address; ?></td>
                              <td><?php echo $contact; ?></td>

                              <td>
                                <!-- <a href="#" class="btn-primary">Change password</a> -->
                              <a href="<?php echo SITEURL;?>admin/update-user.php?id=<?php echo $id; ?>" class="btn-primary">Update</a>
                              <a href="<?php echo SITEURL;?>admin/delete-user.php?id=<?php echo $id; ?>" class="btn-secondary">Delete</a>
                              <!-- <a href="<?php echo SITEURL;?>admin/update-password.php?id=<?php echo $id; ?>" class="btn-primary">Change password</a>   -->
                            </td>
                            </tr> 


                        <?php

                      }  
                  }
                 
                }
                ?>

             
               </table>
              
               <div class="clearfix"></div>

            </div>
            
        </div>
       

        <?php
      include 'partials/footer.php';
      ?>