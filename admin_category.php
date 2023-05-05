<?php
    include('./layout/admin_header.php');
?>
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Category Lists</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <a href="admin_add_category.php" class="btn btn-primary">Add New Category</a>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <table class="data-tables table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th width="20%">Category Name</th>
                                        <th width="65%">Category Description</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  <?php
                                    $sql ="SELECT `ctg_id`, `ctg_name`, `ctg_description` FROM `category` WHERE 1";
                                    $ketQuaTruyVan = mysqli_query($conn,$sql);
                                    if($ketQuaTruyVan->num_rows>0){
                                      $i=1;
                                      while($category = $ketQuaTruyVan->fetch_assoc()){
                                        ?>
                                        <tr>
                                        <td><?=$i?></td>
                                        <td><?=$category['ctg_name']?></td>
                                        <td>
                                          <p class="mb-0"><?=$category['ctg_description']?></p>
                                        </td>
                                        <td>
                                           <div class="flex align-items-center list-user-action">
                                             <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" href="admin_fix_category.php?id=<?=$category['ctg_id']?>"><i class="ri-pencil-line"></i></a>
                                             <a class="bg-primary" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" href="./admin_handle/admin_delete_category.php?id=<?=$category['ctg_id']?>"><i class="ri-delete-bin-line"></i></a>
                                          </div>
                                        </td>
                                    </tr>
                                        <?php
                                        $i+=1;
                                      }
                                    }
                                  ?>
                                </tbody>
                            </table>
                           </div>
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
      <script>
         var a = document.querySelector('.category');
         a.classList.add('active')

         var namePage = document.querySelectorAll('.name_page');
         namePage.forEach((e)=>{
            e.innerHTML = 'Category';
         })
      </script>