<!DOCTYPE html>
<html lang="en">
  <?php include '../templates/head.php';?>

  <body>

    <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                &times;
              </span>
            </button>
            <h4 class="modal-title">
              Skip Ahead?
            </h4>
          </div>
          <div class="modal-body">
            <p>
              Your director has recommended that you complete this assignment in the sequence specified. Are you sure that you want to skip the next step in this assignment.
            </p>
          </div>
          <div class="modal-footer">
            <div class="row">
              <div class="col-xs-6 col-sm-4">
              </div>
              <div class="col-xs-3 col-sm-4">
                <button type="button" class="btn btn-black" data-dismiss="modal">
                  Cancel
                </button>
              </div>
              <div class="col-xs-3 col-sm-4">
                <button type="button" class="btn btn-info" data-dismiss="modal">
                  OK
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php include '../templates/sign-in-out.php';?>
    <div class="main_wrapper container-fluid">
      <div class="left_column hidden-xs col-sm-4 col-md-3 residents-menu">
        <?php include '../templates/logo-search-sm.php';?>
        <?php include '../templates/nav-sm.php';?>
      </div>
      <div class="right_column col-xs-12 col-sm-8 col-md-9 show-sequential">
        <?php include '../templates/mobile-header.php';?>

        <div id="smt_col1Wrapper">
          <div id="smt_col1" class="padding-wrap">

            <div class="modSpacer name-assignment">
              <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-sm">Small modal</button> -->
              <div class="row">
                <div class="col-xs-12">
                  <h2>
                    Name Of Resident Assignment
                  </h2>
                  <h3>
                    DUE JUNE 19, 2015
                  </h3>
                  <h6>
                    <p class="tiny-grey">
                      Assigned on 03/21/2015, updated on 03/27/2015
                    </p>
                  </h6>
                </div>
              </div>
            </div>

            <div class="modSpacer assigned-by">
              <div class="row">
                <div class="col-xs-12">
                  <h3>
                    Assigned by: William Hodgins
                    <span> (
                      <a href="#">
                        whodgins@depuysynthesinstitute.com
                      </a>
                      )
                    </span>
                  </h3>
                  <p>
                    I've put together this assignment to prepare you for your practum on June 19. Please take some time to look at the resources attached. I also highly reccomend that you attend Dr. Mark Marcus' talk on sore throats and take the online course for the common cold. Let me know if you have any questions.
                  </p>
                </div>
              </div>
            </div>

            <div class="modSpacer assignments sequential">

              <div class="row">
                <div class="col-xs-12">
                  <h6 class="completed">
                    Mark As Completed
                  </h6>
                </div>
              </div>

              <div id="these-are-not-checked">

                <div class="row single-class">
                  <div class="col-xs-12 no-padding">
                    <hr>
                    <div class="indention row indent">
                      <div class="contention col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <div class="row">
                          <div class="checkBiz col-xs-1">
                            <div class="row">
                              <div class="col-xs-12">
                                <h1>
                                  1
                                </h1>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-12">
                                <div class="checkComplete">
                                  <div class="squaredFour">
                                    <input type="checkbox" value="none" id="squaredFour11" name="check">
                                    <label for="squaredFour11" class="forget"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-11">
                            <div class="row content">
                              <div class="col-xs-12">
                                <h5>
                                  ORTHOPAEDICS
                                </h5>
                              </div>
                            </div>
                            <div class="row content">
                              <div class="col-xs-12">
                                <h4>
                                  <a href="/views/my-assignments/single.php">
                                    Case Insights: Proximal Ulna Monteggia Fracture
                                  </a>
                                </h4>
                              </div>
                            </div>
                            <div class="row content">
                              <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 pull-left list-thumb">
                                <a href="/views/my-assignments/single.php" class="center-align-play-button">
                                  <img src="/img/myassignments/assignments-thumbnail.png" class="list-item-thumbnail">
                                  <img src="/img/play-button.png" class="play-button-image">
                                </a>
                              </div>
                              <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                                <div class="row">
                                  <div class="col-xs-12">
                                    <p>
                                      <span>
                                        Video, 2:18
                                      </span>
                                    </p>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xs-12">
                                    <p>
                                      With 19 lab stations, six training rooms and eight conference rooms, the 75,000 square foot DePuy Institute is the largest...
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="course_interaction content">
                              <div class="share-like-list dropdown btn-group">
                                <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                  <a href="#">
                                    <span class="glyphicon icon-share"></span> share
                                  </a>
                                </span>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/fb.jpg">Facebook
                                    </a>
                                  </li>
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/tw.jpg">Twitter
                                    </a>
                                  </li>
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareEmail('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/mail.jpg">Email
                                    </a>
                                  </li>
                                </ul>
                                <span class="divider">
                                  &nbsp;
                                </span>
                                <span class="video_likes smtPageView" smt-uri="/chest-wall/qs/DSUSCMF03150339"> 879 views</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <div class="flag opaque" smt-uri="/chest-wall/qs/DSUSCMF03150339" smt-asset-type="MEDIABIN" smt-asset-id="DSUSCMF03150339"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row single-class">
                  <div class="col-xs-12 no-padding">
                    <hr>
                    <div class="indention row indent">
                      <div class="contention col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <div class="row">
                          <div class="checkBiz col-xs-1">
                            <div class="row">
                              <div class="col-xs-12">
                                <h1>
                                  2
                                </h1>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-12">
                                <div class="checkComplete">
                                  <div class="squaredFour">
                                    <input type="checkbox" value="none" id="squaredFour2" name="check">
                                    <label for="squaredFour2" class="forget"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-11">
                            <div class="row content">
                              <div class="col-xs-12">
                                <h5>
                                  ORTHOPAEDICS
                                </h5>
                              </div>
                            </div>
                            <div class="row content">
                              <div class="col-xs-12">
                                <h4>
                                  <a href="/views/my-assignments/single.php">
                                    ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A
                                  </a>
                                </h4>
                              </div>
                            </div>
                            <div class="row content">
                              <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 pull-left list-thumb">
                                <a href="/views/my-assignments/single.php" class="center-align-play-button">
                                  <img src="/img/myassignments/assignments-thumbnail.png" class="list-item-thumbnail">
                                  <img src="/img/play-button.png" class="play-button-image">
                                </a>
                              </div>
                              <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                                <div class="row">
                                  <div class="col-xs-12">
                                    <p>
                                      <span>
                                        eLearning, 50 credits
                                      </span>
                                    </p>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xs-12">
                                    <p>
                                      With 19 lab stations, six training rooms and eight conference rooms, the 75,000 square foot DePuy Institute is the largest...
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="course_interaction content">
                              <div class="share-like-list dropdown btn-group">
                                <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                  <a href="#">
                                    <span class="glyphicon icon-share"></span> share
                                  </a>
                                </span>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/fb.jpg">Facebook
                                    </a>
                                  </li>
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/tw.jpg">Twitter
                                    </a>
                                  </li>
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareEmail('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/mail.jpg">Email
                                    </a>
                                  </li>
                                </ul>
                                <span class="divider">&nbsp;</span><span class="video_likes smtPageView" smt-uri="/chest-wall/qs/DSUSCMF03150339"> 879 views</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <div class="flag opaque" smt-uri="/chest-wall/qs/DSUSCMF03150339" smt-asset-type="MEDIABIN" smt-asset-id="DSUSCMF03150339"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row single-class">
                  <div class="col-xs-12 no-padding">
                    <hr>
                    <div class="indention row indent">
                      <div class="contention col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <div class="row">
                          <div class="checkBiz col-xs-1">
                            <div class="row">
                              <div class="col-xs-12">
                                <h1>
                                  3
                                </h1>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-12">
                                <div class="checkComplete">
                                  <div class="squaredFour">
                                    <input type="checkbox" value="none" id="squaredFour3" name="check">
                                    <label for="squaredFour3" class="forget"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-11">
                            <div class="row content">
                              <div class="col-xs-12">
                                <h5>
                                  ORTHOPAEDICS
                                </h5>
                              </div>
                            </div>
                            <div class="row content">
                              <div class="col-xs-12">
                                <h4>
                                  <a href="/views/my-assignments/single.php">
                                    Case Insights: Distal Humerus Extra Articular
                                  </a>
                                </h4>
                              </div>
                            </div>
                            <div class="row content">
                              <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 pull-left list-thumb">
                                <a href="/views/my-assignments/single.php" class="center-align-play-button">
                                  <img src="/img/myassignments/assignments-thumbnail.png" class="list-item-thumbnail">
                                  <img src="/img/play-button.png" class="play-button-image">
                                </a>
                              </div>
                              <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                                <div class="row">
                                  <div class="col-xs-12">
                                    <p>
                                      <span>
                                        Video, 2:24
                                      </span>
                                    </p>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xs-12">
                                    <p>
                                      With 19 lab stations, six training rooms and eight conference rooms, the 75,000 square foot DePuy Institute is the largest...
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="course_interaction content">
                              <div class="share-like-list dropdown btn-group">
                                <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                  <a href="#">
                                    <span class="glyphicon icon-share"></span> share
                                  </a>
                                </span>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/fb.jpg">Facebook
                                    </a>
                                  </li>
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/tw.jpg">Twitter
                                    </a>
                                  </li>
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareEmail('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/mail.jpg">Email
                                    </a>
                                  </li>
                                </ul>
                                <span class="divider">&nbsp;</span><span class="video_likes smtPageView" smt-uri="/chest-wall/qs/DSUSCMF03150339"> 879 views</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <div class="flag opaque" smt-uri="/chest-wall/qs/DSUSCMF03150339" smt-asset-type="MEDIABIN" smt-asset-id="DSUSCMF03150339"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row single-class">
                  <div class="col-xs-12 no-padding">
                    <hr>
                    <div class="indention row indent">
                      <div class="contention col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <div class="row">
                          <div class="checkBiz col-xs-1">
                            <div class="row">
                              <div class="col-xs-12">
                                <h1>
                                  4
                                </h1>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-12">
                                <div class="checkComplete">
                                  <div class="squaredFour">
                                    <input type="checkbox" value="none" id="squaredFour4" name="check">
                                    <label for="squaredFour4" class="forget"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-11">
                            <div class="row content">
                              <div class="col-xs-12">
                                <h5>
                                  ORTHOPAEDICS
                                </h5>
                              </div>
                            </div>
                            <div class="row content">
                              <div class="col-xs-12">
                                <h4>
                                  <a href="/views/my-assignments/single.php">
                                    Clavicle: Segmental Pediatric
                                  </a>
                                </h4>
                              </div>
                            </div>
                            <div class="row content">
                              <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 pull-left list-thumb">
                                <a href="/views/my-assignments/single.php" class="center-align-play-button">
                                  <img src="/img/myassignments/assignments-thumbnail.png" class="list-item-thumbnail">
                                  <img src="/img/play-button.png" class="play-button-image">
                                </a>
                              </div>
                              <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                                <div class="row">
                                  <div class="col-xs-12">
                                    <p>
                                      <span>
                                        Video, 5:08
                                      </span>
                                    </p>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xs-12">
                                    <p>
                                      With 19 lab stations, six training rooms and eight conference rooms, the 75,000 square foot DePuy Institute is the largest...
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="course_interaction content">
                              <div class="share-like-list dropdown btn-group">
                                <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"><a href="#"><span class="glyphicon icon-share"></span> share</a></span>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/fb.jpg">Facebook
                                    </a>
                                  </li>
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/tw.jpg">Twitter
                                    </a>
                                  </li>
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareEmail('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/mail.jpg">Email
                                    </a>
                                  </li>
                                </ul>
                                <span class="divider">&nbsp;</span><span class="video_likes smtPageView" smt-uri="/chest-wall/qs/DSUSCMF03150339">19 views</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <div class="flag" smt-uri="/chest-wall/qs/DSUSCMF03150339" smt-asset-type="MEDIABIN" smt-asset-id="DSUSCMF03150339"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row single-class single-date">
                  <div class="col-xs-12 no-padding">
                    <hr>
                    <div class="indention row indent">
                      <div class="contention col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <div class="row">
                          <div class="checkBiz col-xs-1">
                            <div class="row">
                              <div class="col-xs-12">
                                <h1>
                                  5
                                </h1>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-12">
                                <div class="checkComplete">
                                  <div class="squaredFour">
                                    <input type="checkbox" value="none" id="squaredFour5" name="check">
                                    <label for="squaredFour5" class="forget"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-11">
                            <div class="row content">
                              <div class="col-xs-4 col-sm-4 col-md-2 col-lg-2">
                                <div class="pull-left">
                                  <div class="calendar">
                                    <p class="calendar_month">
                                      JUN
                                    </p>
                                    <p class="calendar_date">
                                      19
                                    </p>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xs-12">
                                    <p class="tiny-grey">
                                      <strong>
                                        2 Days
                                      </strong>
                                    </p>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xs-8 col-sm-8 col-md-10 col-lg-10">
                                <div class="row">
                                  <div class="col-xs-12">
                                    <h4>
                                      <a href="/views/my-assignments/single.php">
                                        Codman Neuro MedStreamTM Therapy Maintenance Course
                                      </a>
                                    </h4>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xs-12">
                                    <p class="tiny-grey">
                                      Dallas, TX
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="course_interaction content">
                              <div class="share-like-list dropdown btn-group">
                                <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"><a href="#"><span class="glyphicon icon-share"></span> share</a></span>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/fb.jpg">Facebook
                                    </a>
                                  </li>
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/tw.jpg">Twitter
                                    </a>
                                  </li>
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareEmail('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/mail.jpg">Email
                                    </a>
                                  </li>
                                </ul>
                                <span class="divider">&nbsp;</span><span class="video_likes smtPageView" smt-uri="/chest-wall/qs/DSUSCMF03150339">26 views</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <div class="flag" smt-uri="/chest-wall/qs/DSUSCMF03150339" smt-asset-type="MEDIABIN" smt-asset-id="DSUSCMF03150339"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row single-class">
                  <div class="col-xs-12 no-padding">
                    <hr>
                    <div class="indention row indent">
                      <div class="contention col-xs-10 col-sm-10 col-md-10 col-lg-10">
                        <div class="row">
                          <div class="checkBiz col-xs-1">
                            <div class="row">
                              <div class="col-xs-12">
                                <h1>
                                  6
                                </h1>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-12">
                                <div class="checkComplete">
                                  <div class="squaredFour">
                                    <input type="checkbox" value="none" id="squaredFour6" name="check">
                                    <label for="squaredFour6" class="forget"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-11">
                            <div class="row content">
                              <div class="col-xs-12">
                                <h5>
                                  ORTHOPAEDICS
                                </h5>
                              </div>
                            </div>
                            <div class="row content">
                              <div class="col-xs-12">
                                <h4>
                                  <a href="/views/my-assignments/single.php">
                                    A.L.P.S. Elbow Plating System Surgical Technique
                                  </a>
                                </h4>
                              </div>
                            </div>
                            <div class="row content">
                              <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 pull-left list-thumb">
                                <a href="/views/my-assignments/single.php" class="center-align-play-button">
                                  <img src="/img/myassignments/assignments-thumbnail.png" class="list-item-thumbnail">
                                  <img src="/img/play-button.png" class="play-button-image">
                                </a>
                              </div>
                              <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                                <div class="row">
                                  <div class="col-xs-12">
                                    <p>
                                      <span>
                                        PDF, 1.1 MB
                                      </span>
                                    </p>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xs-12">
                                    <p>
                                      Elbow Plating System. Product Rationale & Surgical Technique guide. Low profile plate design helps minimize discomfort and soft...
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="course_interaction content">
                              <div class="share-like-list dropdown btn-group">
                                <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"><a href="#"><span class="glyphicon icon-share"></span> share</a></span>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/fb.jpg">Facebook
                                    </a>
                                  </li>
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/tw.jpg">Twitter
                                    </a>
                                  </li>
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareEmail('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/mail.jpg">Email
                                    </a>
                                  </li>
                                </ul>
                                <span class="divider">&nbsp;</span><span class="video_likes smtPageView" smt-uri="/chest-wall/qs/DSUSCMF03150339"> 1,526 views</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <div class="flag opaque" smt-uri="/chest-wall/qs/DSUSCMF03150339" smt-asset-type="MEDIABIN" smt-asset-id="DSUSCMF03150339"></div>
                      </div>
                    </div>
                  </div>
                </div>

              </div>

              <div id="these-are-so-checked" class="grey-bg-top">

                <div class="row single-class grey-bg">
                  <div class="col-xs-12 no-padding">
                    <hr>
                    <div class="indention row">
                      <div class="contention col-xs-10 col-sm-10 col-md-10 col-lg-10 grey-bg-content">
                        <div class="row">
                          <div class="checkBiz col-xs-1">
                            <div class="row">
                              <div class="col-xs-12">
                                <h1>
                                  7
                                </h1>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-12">
                                <div class="checkComplete">
                                  <div class="squaredFour">
                                    <input type="checkbox" value="none" id="squaredFour7" checked name="check">
                                    <label for="squaredFour7" class="forget"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-11">
                            <div class="row content">
                              <div class="col-xs-12">
                                <h5>
                                  ORTHOPAEDICS
                                </h5>
                              </div>
                            </div>
                            <div class="row content">
                              <div class="col-xs-12">
                                <h4>
                                  <a href="/views/my-assignments/single.php">
                                    Dr. Malcom Smith - Reduction of Femoral Neck Fractures
                                  </a>
                                </h4>
                              </div>
                            </div>
                            <div class="row content">
                              <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 pull-left list-thumb">
                                <a href="/views/my-assignments/single.php" class="center-align-play-button">
                                  <img src="/img/myassignments/assignments-thumbnail.png" class="list-item-thumbnail">
                                  <img src="/img/play-button.png" class="play-button-image">
                                </a>
                              </div>
                              <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                                <div class="row">
                                  <div class="col-xs-12">
                                    <p>
                                      <span>
                                        Podcast, 3:43
                                      </span>
                                    </p>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xs-12">
                                    <p>
                                      Elbow Plating System. Product Rationale & Surgical Technique guide. Low profile plate design helps minimize discomfort and soft...
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="course_interaction content">
                              <div class="share-like-list dropdown btn-group">
                                <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                  <a href="#">
                                    <span class="glyphicon icon-share"></span> share
                                  </a>
                                </span>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/fb.jpg">Facebook
                                    </a>
                                  </li>
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/tw.jpg">Twitter
                                    </a>
                                  </li>
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareEmail('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/mail.jpg">Email
                                    </a>
                                  </li>
                                </ul>
                                <span class="divider">&nbsp;</span>
                                <span class="video_likes smtPageView" smt-uri="/chest-wall/qs/DSUSCMF03150339"> 52 views</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <div class="flag opaque" smt-uri="/chest-wall/qs/DSUSCMF03150339" smt-asset-type="MEDIABIN" smt-asset-id="DSUSCMF03150339"></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row single-class grey-bg">
                  <div class="col-xs-12 no-padding">
                    <hr>
                    <div class="indention row">
                      <div class="contention col-xs-10 col-sm-10 col-md-10 col-lg-10 grey-bg-content">
                        <div class="row">
                          <div class="checkBiz col-xs-1">
                            <div class="row">
                              <div class="col-xs-12">
                                <h1>
                                  8
                                </h1>
                              </div>
                            </div>
                            <div class="row">
                              <div class="col-xs-12">
                                <div class="checkComplete">
                                  <div class="squaredFour">
                                    <input type="checkbox" value="none" id="squaredFour8" checked name="check">
                                    <label for="squaredFour8" class="forget"></label>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xs-11">
                            <div class="row content">
                              <div class="col-xs-12">
                                <h5>
                                  ORTHOPAEDICS
                                </h5>
                              </div>
                            </div>
                            <div class="row content">
                              <div class="col-xs-12">
                                <h4>
                                  <a href="/views/my-assignments/single.php">
                                    Sinflate® System
                                  </a>
                                </h4>
                              </div>
                            </div>
                            <div class="row content">
                              <div class="col-xs-6 col-sm-4 col-md-2 col-lg-2 pull-left list-thumb">
                                <a href="/views/my-assignments/single.php" class="center-align-play-button">
                                  <img src="/img/myassignments/assignments-thumbnail.png" class="list-item-thumbnail">
                                  <img src="/img/play-button.png" class="play-button-image">
                                </a>
                              </div>
                              <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                                <div class="row">
                                  <div class="col-xs-12">
                                    <p>
                                      <span>PDF, 1.1 MB</span>
                                    </p>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xs-12">
                                    <p>
                                      Vertebral augmentation system for the reduction of fractures and/or creation of a void in cancellous bone in the spine.
                                    </p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="course_interaction content">
                              <div class="share-like-list dropdown btn-group">
                                <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                  <a href="#">
                                    <span class="glyphicon icon-share"></span> share
                                  </a>
                                </span>
                                <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/fb.jpg">
                                      Facebook
                                    </a>
                                  </li>
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/tw.jpg">
                                      Twitter
                                    </a>
                                  </li>
                                  <li role="presentation">
                                    <a role="menuitem" tabindex="-1" href="javascript:shareEmail('/chest-wall/qs/DSUSCMF03150339');">
                                      <img src="/img/mail.jpg">
                                      Email
                                    </a>
                                  </li>
                                </ul>
                                <span class="divider">
                                  &nbsp;
                                </span>
                                <span class="video_likes smtPageView" smt-uri="/chest-wall/qs/DSUSCMF03150339"> 879 views</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                        <div class="flag opaque" smt-uri="/chest-wall/qs/DSUSCMF03150339" smt-asset-type="MEDIABIN" smt-asset-id="DSUSCMF03150339"></div>
                      </div>
                    </div>
                  </div>
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
