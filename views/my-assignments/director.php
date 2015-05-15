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
          <div id="smt_col1" class="padding-wrap">
            <div class="modSpacer current-assignments">
              <div class="row">
                <div class="col-xs-8">
                  <form class="form-inline" action="" method="" onsubmit="">
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
                          You can create a collection of resources, courses and events to assign to your residents.
                        </p>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-xs-8">
                        <input type="text" placeholder="Assignment Name">
                      </div>
                      <div class="col-xs-4">
                        <button class="btn">
                          <a href="new-assignment.php">Next</a>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
                <div class="col-xs-4">
                  <div class="row">
                    <div class="col-xs-12">
                      <h1>
                        You Have 20 Residents
                      </h1>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      <button class="btn">
                        Manage Residents
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <h2>Currently Assigned</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-3 col-sm-2 col-md-2 col-lg-1">
                  <h5>
                    <span class="assignment-heading">
                      Due Date
                    </span>
                  </h5>
                </div>
                <div class="col-xs-9 col-sm-10 col-md-10 col-lg-11">
                  <h5>
                    <span class="assignment-heading">
                      Assignment
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
                <div class="col-xs-9 col-sm-10 col-md-11 col-lg-11">
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
                <div class="col-xs-9 col-sm-10 col-md-11 col-lg-11">
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
                <div class="col-xs-9 col-sm-10 col-md-11 col-lg-11">
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
                <div class="col-xs-9 col-sm-10 col-md-11 col-lg-11">
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
              </div>
            </div>



            <div class="modSpacer past-assignments">
              <div class="row">
                <div class="col-xs-12">
                  <h2>Saved Assignments</h2>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <h5>
                    <span class="assignment-heading">
                      Assignment
                    </span>
                  </h5>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-9 col-sm-10 col-md-11 col-lg-1">
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
                        2 PDFs, 3 Videos, 2 Journal Articles, 1 Podcast, 1 Course, 1 Event
                      </p>
                    </div>
                  </div>
                </div>
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  Trash Can Icon
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-9 col-sm-10 col-md-11 col-lg-1">
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
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  Trash Can Icon
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-9 col-sm-10 col-md-11 col-lg-1">
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
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  Trash Can Icon
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-9 col-sm-10 col-md-11 col-lg-1">
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
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  Trash Can Icon
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
