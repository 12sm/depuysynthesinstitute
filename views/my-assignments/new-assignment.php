<!DOCTYPE html>
<html lang="en">
  <?php include '../templates/head.php';?>
  <body>
    <?php include '../templates/sign-in-out.php';?>
    <div class="main_wrapper container-fluid">
      <div class="left_column hidden-xs col-sm-4 col-md-3">
        <?php include '../templates/logo-search-sm.php';?>
        <?php include '../templates/nav-sm.php';?>
      </div>
      <div class="right_column col-xs-12 col-sm-8 col-md-9">
        <?php include '../templates/mobile-header.php';?>



        <div id="smt_col1Wrapper">
          <div id="smt_col1">


            <div class="modSpacer">
              <div class="row">
                <div class="col-xs-12">
                  <h1>
                    New Assignment
                  </h1>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <p>
                    Optional privacy statement can go up here or other required legal text. Instructions might also be included here about what assignments are and how they can be used.
                  </p>
                </div>
              </div>
            </div>

            <div class="modSpacer">
              <form class="form-inline" action="" method="" onsubmit="">


                <div class="row">
                  <div class="col-xs-12">
                    <h2>
                      NAME OF ASSIGNMENT
                    </h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <input type="text" placeholder="Name Of Resident Assignment">
                  </div>
                </div>


                <div class="row">
                  <div class="col-xs-12">
                    <h2>
                      DUE DATE (OPTIONAL)
                    </h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <input type="date" id="myDate" placeholder`="06/19/2015">
                  </div>
                </div>


                <div class="row">
                  <div class="col-xs-12">
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12">
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12">
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12">
                  </div>
                </div>

                <div class="row">
                  <div class="col-xs-12">
                  </div>
                </div>
              </form>
            </div>


          </div>
        </div>




        <?php include '../templates/footer.php';?>
      </div>
    </div>
    <?php include '../templates/scripts.php';?>
  </body>
</html>
