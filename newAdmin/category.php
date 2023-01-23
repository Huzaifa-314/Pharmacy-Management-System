<?php include 'include/header.php'; ?>


<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title">
                Category
            </h3>
        </div>

        <div class="contents">
            <div class="row">
                <div class="col-lg-5">
                    <div class="card">
                    <div class="card-body">
                    <h4 class="card-title"><b>Add New Category</b></h4>
                    <form class="forms-sample" method="post">
                        <div class="form-group">
                        <label for="exampleInputUsername1">Category Name</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Category Name">
                        </div>
                        <div class="form-group">
                        <label for="exampleSelectGender">Choose Parent Category</label>
                            <select class="form-control" id="exampleSelectGender">
                            <option>No Parent</option>
                            <option>Capsule</option>
                            <option>Tablet</option>
                            <option>Suspension</option>
                            <option>Syrup</option>
                            </select>
                        </div>
                        <div class="form-group">
                        <label class="d-none mt-4">Choose Category Image</label>
                        <input type="file" name="img[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Choose Category Image">
                            <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                            </span>
                        </div>
                        </div>
                    
                    </div>
                    <input type="submit" class="btn btn-primary m-2">
                    
                  </form>
                </div>
              </div>
              <div class="col-lg-7"><div class="card">
                <div class="card-body">
                  <h4 class="card-title">All Categories</h4>

                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Image</th>
                          <th>Category Name</th>
                          <th>Status</th>
                          <th >Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td><img width="40px " height="40px" alt="image"></td>
                          <td > Syrup </td>
                          <td><label class="badge badge-success badge-pill">active</label></td>
                          <td><button class="btn btn-primary m-2 bg-success">Edit</button><button class="btn btn-primary m-2 bg-danger">Delete</button></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td><img width="40px " height="40px" alt="image"></td>
                          <td > Syrup </td>
                          <td><label class="badge badge-success badge-pill">active</label></td>
                          <td><button class="btn btn-primary m-2 bg-success">Edit</button><button class="btn btn-primary m-2 bg-danger">Delete</button></td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              
                </div>
                
            </div>
        </div>

    </div>
    <!-- Custom Js for this page -->

    


    <?php include'include/footer.php';?>