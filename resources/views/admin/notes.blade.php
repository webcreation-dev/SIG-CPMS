<!DOCTYPE html>
<html lang="en">
    @include('layouts.admin.head')
  <body>
      <!-- Loader Start-->
        <div class="codex-loader">
          <div class="linespinner"></div>
        </div>
      <!-- Loader End-->
    @include('layouts.admin.header')

    @include('layouts.admin.sidebar')
    <div class="themebody-wrap">
      <!-- breadcrumb start-->
        <div class="codex-breadcrumb">  
          <div class="breadcrumb-contain">
            <div class="left-breadcrumb">
              <ul class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="index.html"> 
                    <h1>Gestion des notes</h1></a></li>
                <li class="breadcrumb-item"><a href="javascript:void(0);">UE</a></li>
                <li class="breadcrumb-item active"><a href="javascript:void(0);">Algèbre 1</a></li>
              </ul>
            </div>
            <div class="right-breadcrumb">
              <ul>
                <li>
                  <div class="bread-wrap"><i class="fa fa-clock-o"></i></div><span class="liveTime"></span>
                </li>
                <li>
                  <div class="bread-wrap"><i class="fa fa-calendar"></i></div><span class="getDate"> </span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      <!-- breadcrumb end-->
      <!-- theme body start-->
      <div class="theme-body codex-chat">
        <div class="custom-container">
          <div class="row">
            <div class="col-12">
              <div class="card">  
                <div class="card-body">
                  <button class="btn btn-md btn-primary mb-15 float-end" type="button" data-bs-toggle="modal" data-bs-target="#DataModal"> Enregistrer les notes <i class="fa fa-cloud-download"></i></button>
  
                  <table class="display dataTable cell-border" id="datatbl-advance" style="width:100%">
                    <thead>
                      <tr>
                        <th>Etudiant</th>
                        <th>Inter 1</th>
                        <th>Inter 2</th>
                        <th>MOY INTER</th>
                        <th>Devoir 1</th>
                        <th>Devoir 2</th>
                        <th>MOY DEV</th>
                        <th>Examen</th>
                        <th>MOY/ECUE</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Tiger Nixon</td>
                        <td><input name="edit_weight" value="13" required class="form-control" type="number" placeholder="I1"></td>
                        <td><input name="edit_weight" value="11" required class="form-control" type="number" placeholder="I2"></td>
                        <td>14</td>
                        <td><input name="edit_weight" value="12" required class="form-control" type="number" placeholder="D1"></td>
                        <td><input name="edit_weight" value="1O" required class="form-control" type="number" placeholder="D2"></td>
                        <td>15</td>
                        <td><input name="edit_weight" value="15" required class="form-control" type="number" placeholder="Exam"></td>
                        <td>15</td>
                      </tr>
                      <tr>
                        <td>Garrett Winters</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I2"></td>
                        <td>13</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D2"></td>
                        <td>11</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="Exam"></td>
                        <td>14</td>
                      </tr>
                      <tr>
                        <td>Ashton Cox</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I2"></td>
                        <td>10</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D2"></td>
                        <td>12</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="Exam"></td>
                        <td>17</td>
                      </tr>
                      <tr>
                        <td>Cedric Kelly</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I2"></td>
                        <td>12</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D2"></td>
                        <td>15</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="Exam"></td>
                        <td>12</td>
                      </tr>
                      <tr>
                        <td>Airi Satou</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I2"></td>
                        <td>12</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D2"></td>
                        <td>13</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="Exam"></td>
                        <td>08</td>
                      </tr>
                      <tr>
                        <td>Brielle Williamson</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I2"></td>
                        <td>11</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D2"></td>
                        <td>12</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="Exam"></td>
                        <td>14</td>
                      </tr>
                      <tr>
                        <td>Herrod Chandler</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I2"></td>
                        <td>13</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D2"></td>
                        <td>08</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="Exam"></td>
                        <td>11</td>
                      </tr>
                      <tr>
                        <td>Rhona Davidson</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I2"></td>
                        <td>04</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D2"></td>
                        <td>13</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="Exam"></td>
                        <td>15</td>
                      </tr>
                      <tr>
                        <td>Colleen Hurst</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I2"></td>
                        <td>12</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D2"></td>
                        <td>11</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="Exam"></td>
                        <td>07</td>
                      </tr>
                      <tr>
                        <td>Sonya Frost</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I2"></td>
                        <td>11</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D2"></td>
                        <td>05</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="Exam"></td>
                        <td>12</td>
                      </tr>
                      <tr>
                        <td>Jena Gaines</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I2"></td>
                        <td>11</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D2"></td>
                        <td>12</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="Exam"></td>
                        <td>13</td>
                      </tr>
                      <tr>
                        <td>Quinn Flynn</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I2"></td>
                        <td>11</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D2"></td>
                        <td>06</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="Exam"></td>
                        <td>07</td>
                      </tr>
                      <tr>
                        <td>Charde Marshall</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I2"></td>
                        <td>13</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D2"></td>
                        <td>18</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="Exam"></td>
                        <td>11</td>
                      </tr>
                      <tr>
                        <td>Haley Kennedy</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I2"></td>
                        <td>11</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D2"></td>
                        <td>13</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="Exam"></td>
                        <td>05</td>
                      </tr>
                      <tr>
                        <td>Tatyana Fitzpatrick</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I2"></td>
                        <td>04</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D2"></td>
                        <td>12</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="Exam"></td>
                        <td>11</td>
                      </tr>
                      <tr>
                        <td>Michael Silva</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="I2"></td>
                        <td>12</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D1"></td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="D2"></td>
                        <td>11</td>
                        <td><input name="edit_weight" required class="form-control" type="number" placeholder="Exam"></td>
                        <td>08</td>
                      </tr>
                    </tbody>
                  </table>
                  <br>

                  <button class="btn btn-md btn-primary mb-15 float-end" type="button" data-bs-toggle="modal" data-bs-target="#DataModal">Enregistrer les notes <i class="fa fa-cloud-download"></i></button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Data Modal Start-->
      <div class="modal fade" id="DataModal">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add Your Data Detail</h5><a href="javascript:void(0);" data-bs-dismiss="modal"><i class="ti-close"></i></a>
            </div>
            <div class="modal-body">
              <form action="#">
                <div class="form-group">  
                  <input class="form-control" type="text" placeholder="Name">
                </div>
                <div class="form-group">          
                  <input class="form-control" type="text" placeholder="Position">
                </div>
                <div class="form-group">                
                  <input class="form-control" type="text" placeholder="Office">
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Age">
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Start date">
                </div>
                <div class="form-group">
                  <input class="form-control" type="text" placeholder="Salary">
                </div><a class="btn btn-success btn-md" href="javascript:void(0)">Submit Data           </a>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Data Modal end-->

      <!-- theme body end-->
    </div>
    
    @include("layouts.admin.footer")
</body>
</html>