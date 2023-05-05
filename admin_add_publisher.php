<?php
    include('./layout/admin_header.php')
?>
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Add Publisher</h4>
                           </div>
                           
                        </div>
                        <div class="iq-card-body">
                           <form action="./admin_handle/admin_add_publisher.php" method="POST">
                              <div class="form-group">
                                 <label>Publisher Name:</label>
                                 <input type="text" name="name" class="form-control" >
                              </div>
                              <button type="submit" class="btn btn-primary">Submit</button>
                              <button type="reset" class="btn btn-danger">Reset</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
<?php
    include('./layout/admin_footer.php')
?>
