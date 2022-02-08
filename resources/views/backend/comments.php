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
                  
<?php

if (isset($_GET['source'])){
$source= $_GET['source'];

}else {
    $source= '';
}
switch($source){
        case 'add_post';
        include "includes/add_post.php";
        break;
        
        case 'edit_post';
        include "includes/edit_post.php";
        break;
        
        case '200';
        echo "Nice 200";
        break;
        
        default:
        
        //CODE HERE
        include "includes/view_all_comments.php";
        
        break;
}
                    
                
                    
                    
                    
?>
                  
                  
                </div>
               
               
               
              </div>

        
    

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

    <?php include "includes/admin_footer.php"; ?>