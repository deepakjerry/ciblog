<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>tinymce.init({selector:'textarea'});</script>
<div class="dashboard-wrapper">
      <div class="container-fluid  dashboard-content">
            <div class="card-body">
                   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section-block" id="basicform">
                  <h3 class="section-title"></h3>
                 
                </div>
                <div class="card mb-5 shadow-sm">
                  <h3 class="card-header">Add New Blog</h3>
                  <div class="card-body">
                    <form action="<?= base_url()?>/admin/addblogdata" method="post"  enctype="multipart/form-data">
                      <?= csrf_field() ?>
                      <div class="form-group">
                        <label for="inputText3" class="col-form-label">Blog Title</label>
                        <input id="inputText3" type="text" name="blog_title" class="form-control">
                      </div>
                      <div class="form-group">
                        <label for="input-select">Select Category</label>

                          <select class="form-control" name="blog_category" id="input-select">
                          <option value="Uncategory">Uncategory</option>
                          <option value="Travel">Travel</option>
                          <option value="Bollwood">Bollwood</option>
                          <option value="International News">International News</option>
                          <option value="Cricket">Cricket</option>
                          <option value="Bussiness">Bussiness</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea1">Blog textarea</label>
                        <textarea class="form-control" name="blog_description" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                      <div class="mb-3">
                     <label class="form-label"  >Feature Image</label>
                    <input  type="file" class="form-control "   name="file" id="file" accept=".png, .jpg, .jpeg"  />
                 
                  
                </div>
                      <div class="card-body border-top">
                    
                      <h5>Post Status</h5>
                      <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="radio-inline" checked="" class="custom-control-input"><span class="custom-control-label">Publish</span>
                      </label>
                      <label class="custom-control custom-radio custom-control-inline">
                        <input type="radio" name="radio-inline" class="custom-control-input"><span class="custom-control-label">Draft</span>
                      </label>
                      
                    
                  </div>
                      
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                         <input type="submit" value="Add Category" class="btn btn-primary">
                      </div>
                    </form>

                  </div>
                  </div>
              </div>
                  </div>
      </div>
</div>

<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });



    var loadFile = function(event) {
    var image = document.getElementById('output');
    image.src = URL.createObjectURL(event.target.files[0]);
};

  </script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>