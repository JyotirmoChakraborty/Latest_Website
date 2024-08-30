<div class="content">
        <div class="row">

          <div class="col-md-12">
            <div class="card card-user">
              <div class="card-header">
                
                <div class="row">
                    <div class="col-md-6"><h5 class="card-title">Create Article</h5></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"><a class="btn btn-danger btn-round" href="/backoffice-slider"><i class="nc-icon nc-minimal-left"></i> Back</a></div>
                </div>
              </div>
              <div class="card-body">
                
              <?php if(!empty($edit_data))?>
                <form action="/update-slider-data/<?= esc($edit_data['Slider_Id'])?>" method="POST">
                    <?= csrf_field() ?>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Slider Number [ <?= esc($edit_data['Slider_Id']) ?> ]</label>
                        <input type="text" class="form-control" placeholder="Title" name="title" value="<?= esc($edit_data['Slider_Title']) ?>">
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" class="btn btn-success btn-round">Update Slider</button>
                    </div>
                  </div>


                </form>
              </div>
            </div>
          </div>

        </div>

      </div>