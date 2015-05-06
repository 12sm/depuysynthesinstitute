<!DOCTYPE html>
<html lang="en">
  <?php include '../templates/head.php';?>
  <body>
    <?php include '../templates/sign-in-out.php';?>
    <div class="row main_wrapper container-fluid">
      <div class="left_column hidden-xs col-sm-4 col-md-3">
        <?php include '../templates/logo-search-sm.php';?>



        <div class="column_nav">
          <nav class="main_nav">
            <ul class="-menu list-unstyled nav_list">

              <li class="nav-profile"><a href="/profile" class="nav_profile">My Profile<span class="pull-right glyphicon icon-profile"></span></a></li>
              <li class="nav-favorites"><a href="/favorites" class="nav_favorite">My Favorites<span class="pull-right glyphicon icon-favorites"></span></a></li>
              <li class="active nav-assignments"><a href="/assignments" class="nav_assignments">My Assignments<span class="pull-right glyphicon icon-assignments"></span></a></li>

              <li class="nav-home"><a href="/" class="nav_home">Home<span class="pull-right glyphicon icon-home"></span></a></li>
              <li class="nav-knowledge-center"><a href="/knowledge-center" class="nav_knowledge-center">Knowledge Center<span class="pull-right glyphicon icon-knowledge-center"></span></a></li>
              <li class="nav-redemption-center"><a href="/redemption-center" class="nav_redemption-center">Redemption Center<span class="pull-right glyphicon icon-redemption-center"></span></a></li>
              <li class="nav-graduation-resources"><a href="/graduation-resources" class="nav_graduation-resources">Graduation Resources<span class="pull-right glyphicon icon-graduation-resources"></span></a></li>
              <li class="nav-external-resources"><a href="/external-resources" class="nav_external-resources">External Resources<span class="pull-right glyphicon icon-external-resources"></span></a></li>
              <li class="nav-calendar"><a href="/calendar" class="nav_calendar">Course Calendar<span class="pull-right glyphicon icon-calendar"></span></a></li>
              <li class="nav-faq"><a href="/calendar" class="nav_faq">FAQs<span class="pull-right glyphicon icon-faq"></span></a></li>
              <li class="nav-contact"><a href="/contact" class="nav_contact">Contact Us<span class="pull-right glyphicon icon-contact"></span></a></li>

              <li class="sub-nav"><a href="/surgeon-education">Surgeon Education<span class="glyphicon icon-caret-right"></span></a></li>
              <li class="sub-nav"><a href="/nurse-education">Nurse Education<span class="glyphicon icon-caret-right"></span></a></li>
              <li class="sub-nav"><a href="/veterinary">Veterinary Education<span class="glyphicon icon-caret-right"></span></a></li>

            </ul>
          </nav>
        </div>
      </div>


      <div class="right_column col-xs-12 col-sm-8 col-md-9">
        <header class="mobile_header visible-xs-block clearfix">
          <div class="white-bg">
            <a href="/" class="logoLink">
            </a>
            <h1 class="logo">
              Depuy Synthes Institute - advancing education and research
            </h1>
            <div id="mobileDropdown" class="dropdown mobile_nav_button pull-left">
              <button class="btn btn-info btn-block dropdown-toggle" type="button" data-toggle="dropdown">
                My Assignments
                <span id="mobileNavIcon" class="glyphicon icon-caret-down">
                </span>
              </button>
              <ul class="dropdown-menu mobile-nav">

                <li class=""><a href="/profile" class="">My Profile<span class="pull-right glyphicon icon-profile"></span></a></li>
                <li class=""><a href="/favorites" class="">My Favorites<span class="pull-right glyphicon icon-favorites"></span></a></li>
                <li class="active"><a href="/assignments" class="">My Assignments<span class="pull-right glyphicon icon-assignments"></span></a></li>

                <li class=""><a href="/" class="">Home<span class="pull-right glyphicon icon-home"></span></a></li>
                <li class=""><a href="/knowledge-center" class="">Knowledge Center<span class="pull-right glyphicon icon-knowledge-center"></span></a></li>
                <li class=""><a href="/redemption-center" class="">Redemption Center<span class="pull-right glyphicon icon-redemption-center"></span></a></li>
                <li class=""><a href="/graduation-resources" class="">Graduation Resources<span class="pull-right glyphicon icon-graduation-resources"></span></a></li>
                <li class=""><a href="/external-resources" class="">External Resources<span class="pull-right glyphicon icon-external-resources"></span></a></li>
                <li class=""><a href="/calendar" class="">Course Calendar<span class="pull-right glyphicon icon-calendar"></span></a></li>
                <li class=""><a href="/faq" class="">FAQs<span class="pull-right glyphicon icon-faq"></span></a></li>
                <li class=""><a href="/contact" class="">Contact Us<span class="pull-right glyphicon icon-contact"></span></a></li>

                <li class="mobile-nav-break"></li>
                <li class="sub-nav"><a href="/surgeon-education">Surgeon Education<span class="glyphicon icon-caret-right"></span></a></li>
                <li class="sub-nav"><a href="/nurse-education">Nurse Education<span class="glyphicon icon-caret-right"></span></a></li>
                <li class="sub-nav"><a href="/veterinary">Veterinary Education<span class="glyphicon icon-caret-right"></span></a></li>

              </ul>
            </div>
          </div>
          <form class="form-inline" action="/search?" method="get" id="mblSearchForm" onsubmit="return siteSearch(this);">
            <input type="hidden" name="page" value="0" />
            <input type="hidden" name="pmid" value="c0a80237b1f9d2b441fd3d624d14c12e" />
            <div class="mobile_search_button pull-right">
              <button class="btn btn-info btn-search" type="button" id="mblSrchBtn">
                <span class="glyphicon icon-search">
                </span>
              </button>
            </div>
            <div class="nav-search hide" id="mblNavSrch">
              <input id="search1" name="searchData" type="text" value="" class="typeahead form-control" placeholder="search" onfocus="this.value='';">
            </div>
          </form>
        </header>



        <div id="smt_col1Wrapper">
          <div id="smt_col1">
            <div class="modSpacer">
              <div class="row">
                <div class="col-xs-12">
                  <h1>My Current Assignments</h1>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  <h5>Due Date</h5>
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
                      JUN
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      19
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                  <div class="row">
                    <div class="col-xs-12">
                      Name Of Resident Assignment
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      2 PDFs, 3 Videos, 1 Podcast, 1 Event, 1 eLearning
                    </div>
                  </div>
                </div>
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  38%
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
                      27
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                  <div class="row">
                    <div class="col-xs-12">
                      Name Of Resident Assignment
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      2 PDFs, 3 Videos
                    </div>
                  </div>
                </div>
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  20%
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  <div class="row">
                    <div class="col-xs-12">
                      DUE
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      NA
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                  <div class="row">
                    <div class="col-xs-12">
                      Name Of Resident Assignment
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      7 Events
                    </div>
                  </div>
                </div>
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  0%
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
                  <div class="row">
                    <div class="col-xs-12">
                      DUE
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      NA
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-sm-8 col-md-10 col-lg-10">
                  <div class="row">
                    <div class="col-xs-12">
                      Name Of Resident Assignment
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-xs-12">
                      3 Courses, 1 Event
                    </div>
                  </div>
                </div>
                <div class="col-xs-3 col-sm-2 col-md-1 col-lg-1">
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
                      Name Of Resident Assignment
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
                      Name Of Resident Assignment
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
                      Name Of Resident Assignment
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
                      Name Of Resident Assignment
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







    <script>
      (function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,"script","//www.google-analytics.com/analytics.js","ga");
      ga("create", "UA-58518993-1", "auto");
      ga("send", "pageview");
    </script>
    <script type="text/javascript" src="/js/source/main.js"></script>
    <script>initDSI()</script>
  </body>
</html>
