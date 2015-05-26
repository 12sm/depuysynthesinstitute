<!DOCTYPE html>
<html lang="en">
  <?php include '../templates/head.php';?>
  <body>
    <?php include '../templates/sign-in-out.php';?>
    <div class="main_wrapper container-fluid">
      <div class="left_column hidden-xs col-sm-4 col-md-3 residents-menu">
        <?php include '../templates/logo-search-sm.php';?>
        <?php include '../templates/nav-sm.php';?>
      </div>
      <div class="right_column col-xs-12 col-sm-8 col-md-9">
        <?php include '../templates/mobile-header.php';?>



        <div id="smt_col1Wrapper">
          <div id="smt_col1" class="padding-wrap">
            <div class="modSpacer current-assignments">
              <div class="row">
                <div class="col-xs-12">
                  <h2>My Current Assignments</h2>
                </div>
              </div>
              <div class="row">
                <div class="date-width col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  <h5>
                    <span class="assignment-heading">
                      Due Date
                    </span>
                  </h5>
                </div>
                <div class="col-xs-6 col-sm-8 col-md-9 col-lg-10">
                  <h5>
                    <span class="assignment-heading">
                      Assignment
                    </span>
                  </h5>
                </div>
                <div class="col-xs-3 col-sm-2 col-md-2 col-lg-1 center">
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
                        <a href="show-unordered.php">Name Of Resident Assignment</a>
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
                <div class="date-width col-xs-3 col-sm-2 col-md-1 col-lg-1">
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
                        <a href="show-unordered.php">Name Of Resident Assignment</a>
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
                <div class="date-width col-xs-3 col-sm-2 col-md-1 col-lg-1">
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
                        <a href="show-unordered.php">Name Of Resident Assignment</a>
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
                <div class="date-width col-xs-3 col-sm-2 col-md-1 col-lg-1">
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
                        <a href="show-unordered.php">Name Of Resident Assignment</a>
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



            <div class="modSpacer past-assignments">
              <div class="row">
                <div class="col-xs-12">
                  <h2>My Past Assignments</h2>
                </div>
              </div>
              <div class="row">
                <div class="date-width col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  <h5>
                    <span class="assignment-heading">
                      Expired
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
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1 center">
                  <h5>
                    <span class="assignment-heading">
                      Completed
                    </span>
                  </h5>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="date-width col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  <div class="pull-left">
                    <div class="calendar cal-completed">
                      <p class="calendar_month">MAR</p>
                      <p class="calendar_date">20</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                  <div class="row">
                    <div class="col-xs-12">
                      <h3 class="course_description">
                        <a href="show-sequential.php">Name Of Resident Assignment</a>
                      </h3>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <p class="course_contents course_location">
                        2 PDFs, 3 Videos, 2 Journal Articles, 1 Podcast, 1 Course, 1 Event
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1 center">
                  <span class="glyphicon icon-checkmark"></span>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="date-width col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  <div class="pull-left">
                    <div class="calendar cal-completed">
                      <p class="calendar_month">JAN</p>
                      <p class="calendar_date">5</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                  <div class="row">
                    <div class="col-xs-12">
                      <h3 class="course_description">
                        <a href="show-sequential.php">Name Of Resident Assignment</a>
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
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">

                </div>
              </div>
              <hr>
              <div class="row">
                <div class="date-width col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  <div class="pull-left">
                    <div class="calendar cal-completed">
                      <p class="calendar_month">DEC</p>
                      <p class="calendar_date">18</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                  <div class="row">
                    <div class="col-xs-12">
                      <h3 class="course_description">
                        <a href="show-sequential.php">Name Of Resident Assignment</a>
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
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1 center">
                  <span class="glyphicon icon-checkmark"></span>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="date-width col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  <div class="pull-left">
                    <div class="calendar cal-completed">
                      <p class="calendar_month">OCT</p>
                      <p class="calendar_date">11</p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                  <div class="row">
                    <div class="col-xs-12">
                      <h3 class="course_description">
                        <a href="show-sequential.php">Name Of Resident Assignment</a>
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
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1 center">
                  <span class="glyphicon icon-checkmark"></span>
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
