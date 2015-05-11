<!DOCTYPE html>
<html lang="en">
  <?php include '../templates/head.php';?>
  <body>
    <?php include '../templates/sign-in-out.php';?>
    <div class="row main_wrapper container-fluid">
      <div class="left_column hidden-xs col-sm-4 col-md-3">
        <?php include '../templates/logo-search-sm.php';?>
        <?php include '../templates/nav-sm.php';?>
      </div>
      <div class="right_column col-xs-12 col-sm-8 col-md-9">
        <?php include '../templates/mobile-header.php';?>



        <div id="smt_col1Wrapper">
          <div id="smt_col1">
            <div class="modSpacer current-assignments">
              <div class="row">
                <div class="col-xs-12">
                  <h1>My Current Assignments</h1>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  <h5>
                    <span class="assignment-heading">
                      Due Date
                    </span>
                  </h5>
                </div>
                <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                  <h5>
                    <span class="assignment-heading">
                      Assignment
                    </span>
                  </h5>
                </div>
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  <h5>
                    <span class="assignment-heading">
                      Completed
                    </span>
                  </h5>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  <div class="pull-left">
                    <div class="calendar">
                      <p class="calendar_month">JUN</p>
                      <p class="calendar_date">19</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                  <div class="row">
                    <div class="col-xs-12">
                      <h3 class="course_description">
                        <a href="show-ordered.php">Name Of Resident Assignment</a>
                      </h3>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <p class="course_contents course_location">
                        2 PDFs, 3 Videos, 1 Podcast, 1 Event, 1 eLearning
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1 percentage-complete">
                  38%
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  <div class="pull-left">
                    <div class="calendar">
                      <p class="calendar_month">DEC</p>
                      <p class="calendar_date">27</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                  <div class="row">
                    <div class="col-xs-12">
                      <h3 class="course_description">
                        <a href="show-ordered.php">Name Of Resident Assignment</a>
                      </h3>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                    <p class="course_contents course_location">
                      2 PDFs, 3 Videos
                    </p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1 percentage-complete">
                  20%
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  <div class="pull-left">
                    <div class="calendar">
                      <p class="calendar_month">DUE</p>
                      <p class="calendar_date">NA</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                  <div class="row">
                    <div class="col-xs-12">
                      <h3 class="course_description">
                        <a href="show-ordered.php">Name Of Resident Assignment</a>
                      </h3>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <p class="course_contents course_location">
                        7 Events
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1 percentage-complete">
                  0%
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  <div class="pull-left">
                    <div class="calendar">
                      <p class="calendar_month">DUE</p>
                      <p class="calendar_date">NA</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                  <div class="row">
                    <div class="col-xs-12">
                      <h3 class="course_description">
                        <a href="show-ordered.php">Name Of Resident Assignment</a>
                      </h3>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <p class="course_contents course_location">
                        3 Courses, 1 Event
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1 percentage-complete">
                  0%
                </div>
              </div>
            </div>



            <div class="modSpacer">
              <div class="row">
                <div class="col-xs-12">
                  <h1>My Past Assignments</h1>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  <h5>Expired</h5>
                </div>
                <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                  <h5>Assignment</h5>
                </div>
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  <h5>Completed</h5>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  <div class="row">
                    <div class="col-xs-12">
                      MAR
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      20
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                  <div class="row">
                    <div class="col-xs-12">
                      <a href="show-random.php">Name Of Resident Assignment</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      2 PDFs, 3 Videos, 2 Journal Articles, 1 Podcast, 1 Course, 1 Event
                    </div>
                  </div>
                </div>
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  Checkmark
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  <div class="row">
                    <div class="col-xs-12">
                      JAN
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      5
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                  <div class="row">
                    <div class="col-xs-12">
                      <a href="show-random.php">Name Of Resident Assignment</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      2 PDFs, 3 Videos
                    </div>
                  </div>
                </div>
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  Checkmark
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  <div class="row">
                    <div class="col-xs-12">
                      DEC
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      18
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                  <div class="row">
                    <div class="col-xs-12">
                      <a href="show-random.php">Name Of Resident Assignment</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      7 Events
                    </div>
                  </div>
                </div>
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  Checkmark
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  <div class="row">
                    <div class="col-xs-12">
                      OCT
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      11
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                  <div class="row">
                    <div class="col-xs-12">
                      <a href="show-random.php">Name Of Resident Assignment</a>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      3 Courses, 1 Event
                    </div>
                  </div>
                </div>
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  Checkmark
                </div>
              </div>
            </div>
          </div>
        </div>



        <?php include '../templates/footer.php';?>
      </div>
    </div>
    <?php include '../templates/scripts.php';?>
  </body>
</html>
