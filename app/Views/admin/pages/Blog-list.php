
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
      <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="page-header1">
              <div class="page-breadcrumb" style="display: flex;justify-content: space-between;align-items: flex-start;">
              <h2 class="pageheader-title"></h2>
             <a  style="display:flex" class="btn btn-primary"  href="<?= base_url(); ?>/admin/add-blog">Add Blog</a>

           </div>
           </div>
            </div>
          
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->
        <div class="row">
          <!-- ============================================================== -->
          <!-- basic table  -->
          <!-- ============================================================== -->
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card shadow-sm mb-5">
              <h3 class="card-header">Blog Managment</h3>
           
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-bordered first">
                    <thead>
                      
                      <tr>
                        <th>SN#</th>
                        <th>Blog Title</th>
                        <th>Content</th>
                        <th>Category</th>
                        <th>Created Date</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php if($blogs): $i=1;?>
                        <?php foreach($blogs as $user): ?>
                      <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo mb_strimwidth($user['blog_title'], 0, 35, '...'); ?></td>
                        <td><?php echo mb_strimwidth($user['blog_description'], 0, 35, '...'); ?></td>
                        <td><?php echo $user['blog_category']; ?></td>
                        <td>2011/04/25</td>
                        <td><a class="btn btn-primary" href="#" role="button">Edit</a>
                  <a class="btn btn-warning" href="#" role="button">View</a>
                  <a class="btn btn-danger" href="#" role="button">Delete</a></td>
                      </tr>
                      <?php endforeach; ?>
                      <?php endif; ?>
                      
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>SN#</th>
                        <th>Blog Title</th>
                        <th>Content</th>
                        <th>Category</th>
                        <th>Created Date</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- end basic table  -->
          <!-- ============================================================== -->
        </div>
      
        </div>
      <!-- ============================================================== -->
      