<div class="content">
        <div class="row">


          <!-- <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Simple Table</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        Country
                      </th>
                      <th>
                        City
                      </th>
                      <th class="text-right">
                        Salary
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
                          Oud-Turnhout
                        </td>
                        <td class="text-right">
                          $36,738
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Minerva Hooper
                        </td>
                        <td>
                          Curaçao
                        </td>
                        <td>
                          Sinaai-Waas
                        </td>
                        <td class="text-right">
                          $23,789
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Sage Rodriguez
                        </td>
                        <td>
                          Netherlands
                        </td>
                        <td>
                          Baileux
                        </td>
                        <td class="text-right">
                          $56,142
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Philip Chaney
                        </td>
                        <td>
                          Korea, South
                        </td>
                        <td>
                          Overland Park
                        </td>
                        <td class="text-right">
                          $38,735
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Doris Greene
                        </td>
                        <td>
                          Malawi
                        </td>
                        <td>
                          Feldkirchen in Kärnten
                        </td>
                        <td class="text-right">
                          $63,542
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Mason Porter
                        </td>
                        <td>
                          Chile
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td class="text-right">
                          $78,615
                        </td>
                      </tr>
                      <tr>
                        <td>
                          Jon Porter
                        </td>
                        <td>
                          Portugal
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td class="text-right">
                          $98,615
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div> -->



          <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                <!-- <h4 class="card-title"> Slider</h4> -->
                <div class="row">
                    <div class="col-md-6"><h4 class="card-title"> Slider</h4></div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3"><a class="btn btn-success btn-round" href="/create-slider">Create Slider <i class="nc-icon nc-simple-add"></i></a></div>
                </div>
                <p class="card-category"> Here is the list of all sliders </p>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">

                    <thead class=" text-primary">
                      <th>
                        ID
                      </th>
                      <th>
                        Title
                      </th>
                      <th>
                        Action
                      </th>
                      <!-- <th class="text-right">
                        Salary
                      </th> -->
                    </thead>

                    <tbody>
                     
                      <?php if($sliderList !==[]): ?>
                        <?php foreach($sliderList as $slider): ?>
                            <tr>
                        <td>
                          <?= esc($slider["Slider_Id"]) ?>
                        </td>
                        <td>
                          <?= esc($slider["Slider_Title"]) ?>
                        </td>
                        <td>
                          <div class="row">
                            <div class="col-sm-6"><a class="btn btn-warning btn-round" href="/edit-slider/<?= esc($slider['Slider_Id'], 'url') ?>">Edit <i class="nc-icon nc-ruler-pencil"></i></a></div>
                            <div class="col-sm-6"><a class="btn btn-danger btn-round" href="/delete-slider/<?= esc($slider['Slider_Id'], 'url') ?>">Delete <i class="nc-icon nc-basket"></i></a></div>
                          </div>
                        </td>
                        <!-- <td class="text-right">
                          $36,738
                        </td> -->
                      </tr>
                        <?php endforeach ?>
                      <?php else: ?>
                      <?php endif ?>
<!-- 
                      <tr>
                        <td>
                          Minerva Hooper
                        </td>
                        <td>
                          Curaçao
                        </td>
                        <td>
                          Sinaai-Waas
                        </td>
                        <td class="text-right">
                          $23,789
                        </td>
                      </tr>

                      <tr>
                        <td>
                          Sage Rodriguez
                        </td>
                        <td>
                          Netherlands
                        </td>
                        <td>
                          Baileux
                        </td>
                        <td class="text-right">
                          $56,142
                        </td>
                      </tr>

                      <tr>
                        <td>
                          Philip Chaney
                        </td>
                        <td>
                          Korea, South
                        </td>
                        <td>
                          Overland Park
                        </td>
                        <td class="text-right">
                          $38,735
                        </td>
                      </tr>

                      <tr>
                        <td>
                          Doris Greene
                        </td>
                        <td>
                          Malawi
                        </td>
                        <td>
                          Feldkirchen in Kärnten
                        </td>
                        <td class="text-right">
                          $63,542
                        </td>
                      </tr>

                      <tr>
                        <td>
                          Mason Porter
                        </td>
                        <td>
                          Chile
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td class="text-right">
                          $78,615
                        </td>
                      </tr>

                      <tr>
                        <td>
                          Jon Porter
                        </td>
                        <td>
                          Portugal
                        </td>
                        <td>
                          Gloucester
                        </td>
                        <td class="text-right">
                          $98,615
                        </td>
                      </tr> -->

                    </tbody>


                  </table>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>