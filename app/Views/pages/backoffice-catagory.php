<div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                <div class="col-md-6"><h4 class="card-title"> Catagory </h4></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"><a class="btn btn-success btn-round" href="/backoffice-new-category">Create Catagory <i class="nc-icon nc-simple-add"></i></a></div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Catagory Id
                      </th>
                      <th>
                        Catagory Title
                      </th>
                      <th>
                        Action
                      </th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          Dakota Rice
                        </td>
                        <td>
                          Niger
                        </td>
                        <td>
                        <div class="row">
                            <div class="col-sm-6"><a class="btn btn-warning btn-round" href="/edit-category/<?= esc('Catagory_Id')?>">Edit <i class="nc-icon nc-ruler-pencil"></i></a></div>
                            <div class="col-sm-6"><a class="btn btn-danger btn-round" href="/delete-category/<?= esc('Catagory_Id') ?>">Delete <i class="nc-icon nc-basket"></i></a></div>
                          </div>
                        </td>
                        
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>