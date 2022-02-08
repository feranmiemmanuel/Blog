<?php include "includes/admin_header.php"; ?>
 
 
 
  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
       
       <?php include "includes/admin_navigations.php"; ?>
       
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          
              <!-- Approach -->
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">Welcome Admin</h6>
                </div>
                
               
              </div>

        
    

        </div>
        
        <!-- /.container-fluid -->
                <div class= "col-lg-6">
                 
                 <?php 
                    insert_categories();
                    
                    ?>
                 
                  <form action= "" method= "post">
                      <div class= "form-group">
                        <label for= "cat-title">Add Category</label>
                         <input type= "text" class="form-control" name= "cat_title"> 
                      </div>
                      <div class= "form-group">
                         <input class="btn btn-primary" type= "submit" name= "submit" value= "Add Category"> 
                      </div>
                      
                      
                  </form>
                  
 
                 <?php //UPDATE AND INCLUDE QUERY
                    
                    if (isset($_GET['edit'])){
                    $cat_id = $_GET['edit'];
                    include "includes/update_categories.php";
                    }

                    ?>
                   
                   
               </div>
                  <div class= "col-lg-6">
                  
            <table class= "table table-bordered table-hover">
                <thread>
                    <tr>
                        <th>Id</th>
                        <th>Category Title</th>
                    </tr>
                </thread>
                <tbody>
                        <?php
                    
                    
                    // SELCET ALL CATEGORIES
    
                    findAllCategories();
                        
                    ?>
                    
                    
                    <?php
                    
                    
                    //DELETE QUERY
                    deleteCategories();
                    
                    ?>
                    
                </tbody>
            </table>      
      </div>
                   
      </div>
      <!-- End of Main Content -->

    <?php include "includes/admin_footer.php"; ?>