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
              <li class="sub-nav"><a href="/nurse-education">Nurse Education<span class="glyphicon icon-caret-right"></span></a></li>
              <li class="sub-nav"><a href="/veterinary">Veterinary Education<span class="glyphicon icon-caret-right"></span></a></li>
              <li class="sub-nav"><a href="#">Resident & Fellow Education<span class="glyphicon icon-caret-right"></span></a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="right_column col-xs-12 col-sm-8 col-md-9">
        <header class="mobile_header visible-xs-block clearfix">
          <div class="white-bg">
            <a href="http://localhost/~Prometheus_Boombox/depuy-institute/" class="logoLink">
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
                <li class="active"><a href="/my-assignments" class="">My Assignments<span class="pull-right glyphicon icon-assignments"></span></a></li>
                <li class=""><a href="/">Home<span class="pull-right glyphicon icon-home"></span></a></li>
                <li class=""><a href="/knowledge-center" class="nav_knowledge-center">Knowledge Center<span class="pull-right glyphicon icon-knowledge-center"></span></a></li>
                <li class=""><a href="/redemption-center" class="">Redemption Center<span class="pull-right glyphicon icon-redemption-center"></span></a></li>
                <li class=""><a href="/graduation-resources" class="">Graduation Resources<span class="pull-right glyphicon icon-graduation-resources"></span></a></li>
                <li class=""><a href="/external-resources" class="">External Resources<span class="pull-right glyphicon icon-external-resources"></span></a></li>
                <li class=""><a href="/calendar" class="">Course Calendar<span class="pull-right glyphicon icon-calendar"></span></a></li>
                <li class=""><a href="/faq" class="">FAQs<span class="pull-right glyphicon icon-faq"></span></a></li>
                <li class=""><a href="/contact" class="">Contact Us<span class="pull-right glyphicon icon-contact"></span></a></li>
                <li class="mobile-nav-break"></li>
                <li class="sub-nav"><a href="/nurse-education">Nurse Education<span class="glyphicon icon-caret-right"></span></a></li>
                <li class="sub-nav"><a href="/veterinary">Veterinary Education<span class="glyphicon icon-caret-right"></span></a></li>
                <li class="sub-nav"><a href="#">Resident & Fellow Education<span class="glyphicon icon-caret-right"></span></a></li>
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
        <?php include '../templates/footer.php';?>
      </div>
    </div>
    <?php include '../templates/scripts.php';?>
  </body>
</html>
