<!DOCTYPE html>
<html lang="en">
  <?php include '../templates/head.php';?>
  <body>
    <?php include '../templates/sign-in-out.php';?>
    <div class="main_wrapper container-fluid">
      <div class="left_column hidden-xs col-sm-4 col-md-3">
        <?php include '../templates/logo-search-sm.php';?>
        <?php include 'vet-in.php';?>
      </div>
      <div class="right_column col-xs-12 col-sm-8 col-md-9">
        <?php include 'vet-in-mobile.php';?>



        <div class="modSpacer">
          <div class="smtContentWrapper">

              <div class="row">
                <div class="col-xs-12">
                   <div class="pull-left section-title">
                        <h2>Procedural Library</h2>
                        <p class="small-grey">58  resources</p>
                  </div>
                  <ul class="view_type_nav nav nav-pills pull-right">
                    <li class=""><a href="#list" data-toggle="pill" onclick="setDisplayPref('list');">
                      <span class="glyphicon icon-list-view"></span></a></li>
                    <li class="active"><a href="#gallery" data-toggle="pill" onclick="setDisplayPref('gallery');">
                      <span class="glyphicon icon-gal-view"></span></a></li>
                  </ul>
                </div>
              </div>

          <div class="row filters dropdown">
            <div class="col-sm-12">
              <button type="button" class="btn btn-lg filter-btn col-xs-6" onclick="filterProcedures();">
                  All Procedures <span class="glyphicon icon-plus"></span>
                </button>
              <button type="button" class="btn btn-lg filter-btn col-xs-6" onclick="filterContentType();">
                  All Content Types <span class="glyphicon icon-plus"></span>
                </button>
              <button type="button" class="btn btn-lg filter-btn clearfix dropdown-toggle pull-right col-xs-6" id="dropdownMenu1" data-toggle="dropdown">
                Most Recent<span class="glyphicon icon-caret-down"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-filter pull-right" role="menu" aria-labelledby="dropdownMenu1">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:;" onclick="setSort('updateDate', 'desc');showSearchResults();">
                  Most Recent</a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:;" onclick="setSort('popular','');showSearchResults();">
                  Most Popular</a></li>
                <li role="presentation">
                    <a role="menuitem" tabindex="-1" href="javascript:;" onclick="promptLogin();">

                  My Favorites</a></li>
              </ul>
              <!-- end dropdown -->
            </div>
          </div>



          <div class="tab-content">
            <div class="tab-pane fade" id="list">
              <div class="row">

                <div class="col-xs-12 col-md-12">
                 <div class="procedure clearfix">
                   <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2159_high"></div>
                   <div class="row procedure_details">
                        <h4>ORTHOPAEDICS</h4>
                        <h3 class="procedure_description"><a href="/views/my-assignments/single.php">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</a></h3>
                   </div>
                   <div class="row list-item-content">
                     <div class="pull-left list-thumb">
                       <img class="img-responsive list-item-thumbnail" src="/img/eLearning-eModule.png">
                     </div>
                     <div>
                        <p class="list-item-type">
                          eLearning, 50 Credits</p>
                        <p class="list-item-excerpt">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</p>
                      </div>
                    </div>
                    <div class="row prcedure_interaction">
                      <div class="share-like-list dropdown btn-group">
                        <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                        </span>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                          </a></li>
                        </ul>
                        <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xs-12 col-md-12">
                 <div class="procedure clearfix">
                   <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2159_high"></div>
                   <div class="row procedure_details">
                        <h4>ORTHOPAEDICS</h4>
                        <h3 class="procedure_description"><a href="/views/my-assignments/single.php">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</a></h3>
                   </div>
                   <div class="row list-item-content">
                     <div class="pull-left list-thumb">
                       <img class="img-responsive list-item-thumbnail" src="/img/eLearning-eModule.png">
                     </div>
                     <div>
                        <p class="list-item-type">
                          eLearning, 50 Credits</p>
                        <p class="list-item-excerpt">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</p>
                      </div>
                    </div>
                    <div class="row prcedure_interaction">
                      <div class="share-like-list dropdown btn-group">
                        <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                        </span>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                          </a></li>
                        </ul>
                        <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xs-12 col-md-12">
                 <div class="procedure clearfix">
                   <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2159_high"></div>
                   <div class="row procedure_details">
                        <h4>ORTHOPAEDICS</h4>
                        <h3 class="procedure_description"><a href="/views/my-assignments/single.php">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</a></h3>
                   </div>
                   <div class="row list-item-content">
                     <div class="pull-left list-thumb">
                       <img class="img-responsive list-item-thumbnail" src="/img/eLearning-eModule.png">
                     </div>
                     <div>
                        <p class="list-item-type">
                          eLearning, 50 Credits</p>
                        <p class="list-item-excerpt">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</p>
                      </div>
                    </div>
                    <div class="row prcedure_interaction">
                      <div class="share-like-list dropdown btn-group">
                        <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                        </span>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                          </a></li>
                        </ul>
                        <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-xs-12 col-md-12">
                 <div class="procedure clearfix">
                   <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2159_high"></div>
                   <div class="row procedure_details">
                        <h4>ORTHOPAEDICS</h4>
                        <h3 class="procedure_description"><a href="/views/my-assignments/single.php">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</a></h3>
                   </div>
                   <div class="row list-item-content">
                     <div class="pull-left list-thumb">
                       <img class="img-responsive list-item-thumbnail" src="/img/eLearning-eModule.png">
                     </div>
                     <div>
                        <p class="list-item-type">
                          eLearning, 50 Credits</p>
                        <p class="list-item-excerpt">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</p>
                      </div>
                    </div>
                    <div class="row prcedure_interaction">
                      <div class="share-like-list dropdown btn-group">
                        <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                        </span>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                          </a></li>
                        </ul>
                        <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xs-12 col-md-12">
                 <div class="procedure clearfix">
                   <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2159_high"></div>
                   <div class="row procedure_details">
                        <h4>ORTHOPAEDICS</h4>
                        <h3 class="procedure_description"><a href="/views/my-assignments/single.php">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</a></h3>
                   </div>
                   <div class="row list-item-content">
                     <div class="pull-left list-thumb">
                       <img class="img-responsive list-item-thumbnail" src="/img/eLearning-eModule.png">
                     </div>
                     <div>
                        <p class="list-item-type">
                          eLearning, 50 Credits</p>
                        <p class="list-item-excerpt">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</p>
                      </div>
                    </div>
                    <div class="row prcedure_interaction">
                      <div class="share-like-list dropdown btn-group">
                        <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                        </span>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                          </a></li>
                        </ul>
                        <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                      </div>
                    </div>
                  </div>
                </div>


                <div class="col-xs-12 col-md-12">
                 <div class="procedure clearfix">
                   <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2159_high"></div>
                   <div class="row procedure_details">
                        <h4>ORTHOPAEDICS</h4>
                        <h3 class="procedure_description"><a href="/views/my-assignments/single.php">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</a></h3>
                   </div>
                   <div class="row list-item-content">
                     <div class="pull-left list-thumb">
                       <img class="img-responsive list-item-thumbnail" src="/img/eLearning-eModule.png">
                     </div>
                     <div>
                        <p class="list-item-type">
                          eLearning, 50 Credits</p>
                        <p class="list-item-excerpt">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</p>
                      </div>
                    </div>
                    <div class="row prcedure_interaction">
                      <div class="share-like-list dropdown btn-group">
                        <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                        </span>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                          </a></li>
                        </ul>
                        <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xs-12 col-md-12">
                 <div class="procedure clearfix">
                   <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2159_high"></div>
                   <div class="row procedure_details">
                        <h4>ORTHOPAEDICS</h4>
                        <h3 class="procedure_description"><a href="/views/my-assignments/single.php">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</a></h3>
                   </div>
                   <div class="row list-item-content">
                     <div class="pull-left list-thumb">
                       <img class="img-responsive list-item-thumbnail" src="/img/eLearning-eModule.png">
                     </div>
                     <div>
                        <p class="list-item-type">
                          eLearning, 50 Credits</p>
                        <p class="list-item-excerpt">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</p>
                      </div>
                    </div>
                    <div class="row prcedure_interaction">
                      <div class="share-like-list dropdown btn-group">
                        <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                        </span>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                          </a></li>
                        </ul>
                        <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xs-12 col-md-12">
                 <div class="procedure clearfix">
                   <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2159_high"></div>
                   <div class="row procedure_details">
                        <h4>ORTHOPAEDICS</h4>
                        <h3 class="procedure_description"><a href="/views/my-assignments/single.php">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</a></h3>
                   </div>
                   <div class="row list-item-content">
                     <div class="pull-left list-thumb">
                       <img class="img-responsive list-item-thumbnail" src="/img/eLearning-eModule.png">
                     </div>
                     <div>
                        <p class="list-item-type">
                          eLearning, 50 Credits</p>
                        <p class="list-item-excerpt">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</p>
                      </div>
                    </div>
                    <div class="row prcedure_interaction">
                      <div class="share-like-list dropdown btn-group">
                        <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                        </span>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                          </a></li>
                        </ul>
                        <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xs-12 col-md-12">
                 <div class="procedure clearfix">
                   <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2159_high"></div>
                   <div class="row procedure_details">
                        <h4>ORTHOPAEDICS</h4>
                        <h3 class="procedure_description"><a href="/views/my-assignments/single.php">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</a></h3>
                   </div>
                   <div class="row list-item-content">
                     <div class="pull-left list-thumb">
                       <img class="img-responsive list-item-thumbnail" src="/img/eLearning-eModule.png">
                     </div>
                     <div>
                        <p class="list-item-type">
                          eLearning, 50 Credits</p>
                        <p class="list-item-excerpt">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</p>
                      </div>
                    </div>
                    <div class="row prcedure_interaction">
                      <div class="share-like-list dropdown btn-group">
                        <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                        </span>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                          </a></li>
                        </ul>
                        <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xs-12 col-md-12">
                 <div class="procedure clearfix">
                   <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2159_high"></div>
                   <div class="row procedure_details">
                        <h4>ORTHOPAEDICS</h4>
                        <h3 class="procedure_description"><a href="/views/my-assignments/single.php">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</a></h3>
                   </div>
                   <div class="row list-item-content">
                     <div class="pull-left list-thumb">
                       <img class="img-responsive list-item-thumbnail" src="/img/eLearning-eModule.png">
                     </div>
                     <div>
                        <p class="list-item-type">
                          eLearning, 50 Credits</p>
                        <p class="list-item-excerpt">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</p>
                      </div>
                    </div>
                    <div class="row prcedure_interaction">
                      <div class="share-like-list dropdown btn-group">
                        <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                        </span>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                          </a></li>
                        </ul>
                        <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xs-12 col-md-12">
                 <div class="procedure clearfix">
                   <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2159_high"></div>
                   <div class="row procedure_details">
                        <h4>ORTHOPAEDICS</h4>
                        <h3 class="procedure_description"><a href="/views/my-assignments/single.php">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</a></h3>
                   </div>
                   <div class="row list-item-content">
                     <div class="pull-left list-thumb">
                       <img class="img-responsive list-item-thumbnail" src="/img/eLearning-eModule.png">
                     </div>
                     <div>
                        <p class="list-item-type">
                          eLearning, 50 Credits</p>
                        <p class="list-item-excerpt">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</p>
                      </div>
                    </div>
                    <div class="row prcedure_interaction">
                      <div class="share-like-list dropdown btn-group">
                        <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                        </span>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                          </a></li>
                        </ul>
                        <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xs-12 col-md-12">
                 <div class="procedure clearfix">
                   <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2159_high"></div>
                   <div class="row procedure_details">
                        <h4>ORTHOPAEDICS</h4>
                        <h3 class="procedure_description"><a href="/views/my-assignments/single.php">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</a></h3>
                   </div>
                   <div class="row list-item-content">
                     <div class="pull-left list-thumb">
                       <img class="img-responsive list-item-thumbnail" src="/img/eLearning-eModule.png">
                     </div>
                     <div>
                        <p class="list-item-type">
                          eLearning, 50 Credits</p>
                        <p class="list-item-excerpt">ORTHOCORD Suture and Anthroscopic Knot Tying CA#13038B/DJ12808A</p>
                      </div>
                    </div>
                    <div class="row prcedure_interaction">
                      <div class="share-like-list dropdown btn-group">
                        <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                        </span>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                          </a></li>
                        </ul>
                        <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                      </div>
                    </div>
                  </div>
                </div>



          </div>
            </div>


            <!-- GRID VIEW -->
            <div class="tab-pane fade in active" id="gallery">
              <div class="row">
                <div class="col-xs-6 col-md-3 single-content-box">
                  <div class="video_feature clearfix gallery">
                      <a class="gradient" href="/views/my-assignments/single.php"></a>
                      <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2157_high"></div>
                      <div class="gallery-img-wrapper gallery-video-wrapper">
                        <img class="img-responsive" src="/img/eLearning-eModule.png">
                      </div>
                      <div class="box-text-content">
                        <div class="text-max-height smtElipse" style="word-wrap: break-word;"><h4>ORTHOPAEDICS</h4><h3><a href="#">ORTHOCORD Suture and Arthroscopic Knot Tying CA#13038B/DJ12808A</a></h3></div>
                    <hr>
                      <div class="course_interaction">
                        <div class="share-like-list dropdown btn-group">
                          <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                          </span>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                          </a></li>
                        </ul>
                        <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-md-3 single-content-box">
                  <div class="video_feature clearfix gallery">
                      <a class="gradient" href="/views/my-assignments/single.php"></a>
                      <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2157_high"></div>
                      <div class="gallery-img-wrapper gallery-video-wrapper">
                        <img class="img-responsive" src="/img/eLearning-eModule.png">
                      </div>
                      <div class="box-text-content">
                        <div class="text-max-height smtElipse" style="word-wrap: break-word;"><h4>ORTHOPAEDICS</h4><h3><a href="#">ORTHOCORD Suture and Arthroscopic Knot Tying CA#13038B/DJ12808A</a></h3></div>
                    <hr>
                      <div class="course_interaction">
                        <div class="share-like-list dropdown btn-group">
                          <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                          </span>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                          </a></li>
                        </ul>
                        <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xs-6 col-md-3 single-content-box">
                  <div class="video_feature clearfix gallery">
                      <a class="gradient" href="/views/my-assignments/single.php"></a>
                      <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2157_high"></div>
                      <div class="gallery-img-wrapper gallery-video-wrapper">
                        <img class="img-responsive" src="/img/eLearning-eModule.png">
                      </div>
                      <div class="box-text-content">
                        <div class="text-max-height smtElipse" style="word-wrap: break-word;"><h4>ORTHOPAEDICS</h4><h3><a href="#">ORTHOCORD Suture and Arthroscopic Knot Tying CA#13038B/DJ12808A</a></h3></div>
                    <hr>
                      <div class="course_interaction">
                        <div class="share-like-list dropdown btn-group">
                          <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                          </span>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                          </a></li>
                        </ul>
                        <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-xs-6 col-md-3 single-content-box">
                  <div class="video_feature clearfix gallery">
                      <a class="gradient" href="/views/my-assignments/single.php"></a>
                      <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2157_high"></div>
                      <div class="gallery-img-wrapper gallery-video-wrapper">
                        <img class="img-responsive" src="/img/eLearning-eModule.png">
                      </div>
                      <div class="box-text-content">
                        <div class="text-max-height smtElipse" style="word-wrap: break-word;"><h4>ORTHOPAEDICS</h4><h3><a href="#">ORTHOCORD Suture and Arthroscopic Knot Tying CA#13038B/DJ12808A</a></h3></div>
                    <hr>
                      <div class="course_interaction">
                        <div class="share-like-list dropdown btn-group">
                          <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                          </span>
                          <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                          </a></li>
                          <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                          </a></li>
                        </ul>
                        <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
          </div>
          <div class="row">
            <div class="col-xs-6 col-md-3 single-content-box">
              <div class="video_feature clearfix gallery">
                  <a class="gradient" href="/views/my-assignments/single.php"></a>
                  <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2157_high"></div>
                  <div class="gallery-img-wrapper gallery-video-wrapper">
                    <img class="img-responsive" src="/img/eLearning-eModule.png">
                  </div>
                  <div class="box-text-content">
                    <div class="text-max-height smtElipse" style="word-wrap: break-word;"><h4>ORTHOPAEDICS</h4><h3><a href="#">ORTHOCORD Suture and Arthroscopic Knot Tying CA#13038B/DJ12808A</a></h3></div>
                <hr>
                  <div class="course_interaction">
                    <div class="share-like-list dropdown btn-group">
                      <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                      </span>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                      </a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                      </a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                      </a></li>
                    </ul>
                    <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-3 single-content-box">
              <div class="video_feature clearfix gallery">
                  <a class="gradient" href="/views/my-assignments/single.php"></a>
                  <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2157_high"></div>
                  <div class="gallery-img-wrapper gallery-video-wrapper">
                    <img class="img-responsive" src="/img/eLearning-eModule.png">
                  </div>
                  <div class="box-text-content">
                    <div class="text-max-height smtElipse" style="word-wrap: break-word;"><h4>ORTHOPAEDICS</h4><h3><a href="#">ORTHOCORD Suture and Arthroscopic Knot Tying CA#13038B/DJ12808A</a></h3></div>
                <hr>
                  <div class="course_interaction">
                    <div class="share-like-list dropdown btn-group">
                      <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                      </span>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                      </a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                      </a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                      </a></li>
                    </ul>
                    <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-3 single-content-box">
              <div class="video_feature clearfix gallery">
                  <a class="gradient" href="/views/my-assignments/single.php"></a>
                  <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2157_high"></div>
                  <div class="gallery-img-wrapper gallery-video-wrapper">
                    <img class="img-responsive" src="/img/eLearning-eModule.png">
                  </div>
                  <div class="box-text-content">
                    <div class="text-max-height smtElipse" style="word-wrap: break-word;"><h4>ORTHOPAEDICS</h4><h3><a href="#">ORTHOCORD Suture and Arthroscopic Knot Tying CA#13038B/DJ12808A</a></h3></div>
                <hr>
                  <div class="course_interaction">
                    <div class="share-like-list dropdown btn-group">
                      <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                      </span>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                      </a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                      </a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                      </a></li>
                    </ul>
                    <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-3 single-content-box">
              <div class="video_feature clearfix gallery">
                  <a class="gradient" href="/views/my-assignments/single.php"></a>
                  <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2157_high"></div>
                  <div class="gallery-img-wrapper gallery-video-wrapper">
                    <img class="img-responsive" src="/img/eLearning-eModule.png">
                  </div>
                  <div class="box-text-content">
                    <div class="text-max-height smtElipse" style="word-wrap: break-word;"><h4>ORTHOPAEDICS</h4><h3><a href="#">ORTHOCORD Suture and Arthroscopic Knot Tying CA#13038B/DJ12808A</a></h3></div>
                <hr>
                  <div class="course_interaction">
                    <div class="share-like-list dropdown btn-group">
                      <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                      </span>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                      </a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                      </a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                      </a></li>
                    </ul>
                    <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-3 single-content-box">
              <div class="video_feature clearfix gallery">
                  <a class="gradient" href="/views/my-assignments/single.php"></a>
                  <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2157_high"></div>
                  <div class="gallery-img-wrapper gallery-video-wrapper">
                    <img class="img-responsive" src="/img/eLearning-eModule.png">
                  </div>
                  <div class="box-text-content">
                    <div class="text-max-height smtElipse" style="word-wrap: break-word;"><h4>ORTHOPAEDICS</h4><h3><a href="#">ORTHOCORD Suture and Arthroscopic Knot Tying CA#13038B/DJ12808A</a></h3></div>
                <hr>
                  <div class="course_interaction">
                    <div class="share-like-list dropdown btn-group">
                      <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                      </span>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                      </a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                      </a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                      </a></li>
                    </ul>
                    <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-xs-6 col-md-3 single-content-box">
              <div class="video_feature clearfix gallery">
                  <a class="gradient" href="/views/my-assignments/single.php"></a>
                  <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2157_high"></div>
                  <div class="gallery-img-wrapper gallery-video-wrapper">
                    <img class="img-responsive" src="/img/eLearning-eModule.png">
                  </div>
                  <div class="box-text-content">
                    <div class="text-max-height smtElipse" style="word-wrap: break-word;"><h4>ORTHOPAEDICS</h4><h3><a href="#">ORTHOCORD Suture and Arthroscopic Knot Tying CA#13038B/DJ12808A</a></h3></div>
                <hr>
                  <div class="course_interaction">
                    <div class="share-like-list dropdown btn-group">
                      <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                      </span>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                      </a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                      </a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                      </a></li>
                    </ul>
                    <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-3 single-content-box">
              <div class="video_feature clearfix gallery">
                  <a class="gradient" href="/views/my-assignments/single.php"></a>
                  <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2157_high"></div>
                  <div class="gallery-img-wrapper gallery-video-wrapper">
                    <img class="img-responsive" src="/img/eLearning-eModule.png">
                  </div>
                  <div class="box-text-content">
                    <div class="text-max-height smtElipse" style="word-wrap: break-word;"><h4>ORTHOPAEDICS</h4><h3><a href="#">ORTHOCORD Suture and Arthroscopic Knot Tying CA#13038B/DJ12808A</a></h3></div>
                <hr>
                  <div class="course_interaction">
                    <div class="share-like-list dropdown btn-group">
                      <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                      </span>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                      </a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                      </a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                      </a></li>
                    </ul>
                    <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-md-3 single-content-box">
              <div class="video_feature clearfix gallery">
                  <a class="gradient" href="/views/my-assignments/single.php"></a>
                  <div class="flag opaque" smt-uri="/views/my-assignments/single.php" smt-asset-type="MEDIABIN" smt-asset-id="150M2157_high"></div>
                  <div class="gallery-img-wrapper gallery-video-wrapper">
                    <img class="img-responsive" src="/img/eLearning-eModule.png">
                  </div>
                  <div class="box-text-content">
                    <div class="text-max-height smtElipse" style="word-wrap: break-word;"><h4>ORTHOPAEDICS</h4><h3><a href="#">ORTHOCORD Suture and Arthroscopic Knot Tying CA#13038B/DJ12808A</a></h3></div>
                <hr>
                  <div class="course_interaction">
                    <div class="share-like-list dropdown btn-group">
                      <span class="video_share dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown"> <a href="#"><span class="glyphicon icon-share"></span> share</a>
                      </span>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareFacebook('/views/my-assignments/single.php');"> <img src="/img/fb.jpg"> Facebook
                      </a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareTwitter('/views/my-assignments/single.php');"> <img src="/img/tw.jpg"> Twitter
                      </a></li>
                      <li role="presentation"><a role="menuitem" tabindex="-1" href="javascript:shareEmail('/views/my-assignments/single.php');"> <img src="/img/mail.jpg"> Email
                      </a></li>
                    </ul>
                    <span class="divider">&nbsp;</span> <span class="video_likes smtPageView" smt-uri="/views/my-assignments/single.php">879 views</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            </div>
            </div>
          </div>


          <script>
          var searchObj = {
            page: 0,
            sort: "",
            sortDir: "",
            term: ""
          };
          function setSort(str, dir) { searchObj.page=0; searchObj.sort=str; searchObj.sortDir=dir; }
          function setPage(no) { searchObj.page=no; }
          function showSearchResults() {
            var url = "?fmid=c0a802413baa179e3396114435eba41f&page=" + searchObj.page;
            if (searchObj.sort.length > 0) url+= "&fieldSort=" + searchObj.sort + "&sortDirection=" + searchObj.sortDir;
            if (searchObj.term.length > 0) url += "&searchData=" + searchObj.term;


            url += appendFilters("#procedures", "&fq=hierarchy:");
            url += appendFilters("#contentTypes", "&fq=assetType_s:");


            if (url == "?fmid=c0a802413baa179e3396114435eba41f&page=0" && getURLParam("page") == "") return;
            if (decodeURIComponent(location.search) != decodeURIComponent(url)) window.location = url;
          }
          function appendFilters(eles, filterParam) {
            //if the 'select all' option is checked, we're removing all filters.
            if ($(eles + ' input[type="checkbox"]:checked:first').val() == "")
              return "";

            var url = "";
            $(eles + ' input[type="checkbox"]').each(function() {
              if ($(this).is(':checked') && $(this).val() != "") {
                url += filterParam + encodeURIComponent($(this).val());
              }
            });
            return url;
          }
          </script>

          <div class="modal fade filterBox" id="procedures" tabindex="-1" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                  </button>
                  <h2 class="modal-title">Procedures</h2>
                </div>
                <div class="modal-body">
                  <div class="panel-group selection_accordion" id="accordion2">
                    <div class="panel panel-default">
                      <div class="checkbox panel-heading">
                        <label> <input class="sr-only" type="checkbox" value="" name="proceduresAll"><span class="styled_checkbox"></span> View all<span class="filter_amount"> (58)</span>
                        </label>
                      </div>
                    </div>
                    <div class="panel panel-default">
                          <div class="checkbox panel-heading capitalize">
                            <a class="check_collapse pull-right collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                              <span class="glyphicon icon-caret-down"></span></a>
                            <label> <input class="sr-only" type="checkbox" name="fq:hierarchy" value="Craniomaxillofacial~Mandible~"><span class="styled_checkbox"></span> Mandible
                            </label>
                          </div>

                          <div id="collapse1" class="panel-collapse collapse">
                              <div class="panel-body">
                                <ul class="filter-prodecure-sublist">
                                  <li class="checkbox">
                                        <label> <input class="sr-only sublevel" type="checkbox" name="fq:hierarchy" value="Craniomaxillofacial~Mandible~Distraction Osteogenesis~"><span class="styled_checkbox"></span> Distraction Osteogenesis<span class="filter_amount"> (7)</span>
                                        </label>
                                      </li>
                                    <li class="checkbox">
                                        <label> <input class="sr-only sublevel" type="checkbox" name="fq:hierarchy" value="Craniomaxillofacial~Mandible~IMF/MMF"><span class="styled_checkbox"></span> IMF/MMF<span class="filter_amount"> (3)</span>
                                        </label>
                                      </li>
                                    <li class="checkbox">
                                        <label> <input class="sr-only sublevel" type="checkbox" name="fq:hierarchy" value="Craniomaxillofacial~Mandible~Mandible Trauma &amp; Reconstruction~"><span class="styled_checkbox"></span> Mandible Trauma &amp; Reconstruction<span class="filter_amount"> (23)</span>
                                        </label>
                                      </li>
                                    <li class="checkbox">
                                        <label> <input class="sr-only sublevel" type="checkbox" name="fq:hierarchy" value="Craniomaxillofacial~Mandible~Mandible Trauma &amp; Reconstuction~"><span class="styled_checkbox"></span> Mandible Trauma &amp; Reconstuction<span class="filter_amount"> (1)</span>
                                        </label>
                                      </li>
                                    <li class="checkbox">
                                        <label> <input class="sr-only sublevel" type="checkbox" name="fq:hierarchy" value="Craniomaxillofacial~Mandible~Orthognathic Surgery~"><span class="styled_checkbox"></span> Orthognathic Surgery<span class="filter_amount"> (11)</span>
                                        </label>
                                      </li>
                                    <li class="checkbox">
                                        <label> <input class="sr-only sublevel" type="checkbox" name="fq:hierarchy" value="Craniomaxillofacial~Mandible~TRUMATCH® CMF Personalized Solutions~"><span class="styled_checkbox"></span> TRUMATCH® CMF Personalized Solutions<span class="filter_amount"> (9)</span>
                                        </label>
                                      </li>
                                    </ul>
                              </div>
                            </div>
                          </div>
                      <div class="panel panel-default">
                          <div class="checkbox panel-heading capitalize">
                            <a class="check_collapse pull-right collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                              <span class="glyphicon icon-caret-down"></span></a>
                            <label> <input class="sr-only" type="checkbox" name="fq:hierarchy" value="Craniomaxillofacial~Midface~"><span class="styled_checkbox"></span> Midface
                            </label>
                          </div>

                          <div id="collapse2" class="panel-collapse collapse">
                              <div class="panel-body">
                                <ul class="filter-prodecure-sublist">
                                  <li class="checkbox">
                                        <label> <input class="sr-only sublevel" type="checkbox" name="fq:hierarchy" value="Craniomaxillofacial~Midface~Distraction Osteogenesis~"><span class="styled_checkbox"></span> Distraction Osteogenesis<span class="filter_amount"> (7)</span>
                                        </label>
                                      </li>
                                    <li class="checkbox">
                                        <label> <input class="sr-only sublevel" type="checkbox" name="fq:hierarchy" value="Craniomaxillofacial~Midface~IMF/MMF"><span class="styled_checkbox"></span> IMF/MMF<span class="filter_amount"> (3)</span>
                                        </label>
                                      </li>
                                    <li class="checkbox">
                                        <label> <input class="sr-only sublevel" type="checkbox" name="fq:hierarchy" value="Craniomaxillofacial~Midface~Midface Trauma &amp; Reconstruction~"><span class="styled_checkbox"></span> Midface Trauma &amp; Reconstruction<span class="filter_amount"> (18)</span>
                                        </label>
                                      </li>
                                    <li class="checkbox">
                                        <label> <input class="sr-only sublevel" type="checkbox" name="fq:hierarchy" value="Craniomaxillofacial~Midface~Orthognathic Reconstruction~"><span class="styled_checkbox"></span> Orthognathic Reconstruction<span class="filter_amount"> (7)</span>
                                        </label>
                                      </li>
                                    <li class="checkbox">
                                        <label> <input class="sr-only sublevel" type="checkbox" name="fq:hierarchy" value="Craniomaxillofacial~Midface~TRUMATCH® CMF Personalized Solutions~"><span class="styled_checkbox"></span> TRUMATCH® CMF Personalized Solutions<span class="filter_amount"> (4)</span>
                                        </label>
                                      </li>
                                    </ul>
                              </div>
                            </div>
                          </div>
                      <div class="panel panel-default">
                          <div class="checkbox panel-heading capitalize">
                            <a class="check_collapse pull-right collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                              <span class="glyphicon icon-caret-down"></span></a>
                            <label> <input class="sr-only" type="checkbox" name="fq:hierarchy" value="Craniomaxillofacial~Neuro Trauma &amp; Reconstruction~"><span class="styled_checkbox"></span> Neuro Trauma &amp; Reconstruction
                            </label>
                          </div>

                          <div id="collapse3" class="panel-collapse collapse">
                              <div class="panel-body">
                                <ul class="filter-prodecure-sublist">
                                  <li class="checkbox">
                                        <label> <input class="sr-only sublevel" type="checkbox" name="fq:hierarchy" value="Craniomaxillofacial~Neuro Trauma &amp; Reconstruction~Cranial Closure/Bone Fixation~"><span class="styled_checkbox"></span> Cranial Closure/Bone Fixation<span class="filter_amount"> (12)</span>
                                        </label>
                                      </li>
                                    <li class="checkbox">
                                        <label> <input class="sr-only sublevel" type="checkbox" name="fq:hierarchy" value="Craniomaxillofacial~Neuro Trauma &amp; Reconstruction~Cranial Trauma Repair &amp; Reconstruction"><span class="styled_checkbox"></span> Cranial Trauma Repair &amp; Reconstruction<span class="filter_amount"> (11)</span>
                                        </label>
                                      </li>
                                    <li class="checkbox">
                                        <label> <input class="sr-only sublevel" type="checkbox" name="fq:hierarchy" value="Craniomaxillofacial~Neuro Trauma &amp; Reconstruction~Dura Repair"><span class="styled_checkbox"></span> Dura Repair<span class="filter_amount"> (1)</span>
                                        </label>
                                      </li>
                                    <li class="checkbox">
                                        <label> <input class="sr-only sublevel" type="checkbox" name="fq:hierarchy" value="Craniomaxillofacial~Neuro Trauma &amp; Reconstruction~Pediatric~"><span class="styled_checkbox"></span> Pediatric<span class="filter_amount"> (1)</span>
                                        </label>
                                      </li>
                                    <li class="checkbox">
                                        <label> <input class="sr-only sublevel" type="checkbox" name="fq:hierarchy" value="Craniomaxillofacial~Neuro Trauma &amp; Reconstruction~Small Cranial Defect/Bone Substitute~"><span class="styled_checkbox"></span> Small Cranial Defect/Bone Substitute<span class="filter_amount"> (6)</span>
                                        </label>
                                      </li>
                                    <li class="checkbox">
                                        <label> <input class="sr-only sublevel" type="checkbox" name="fq:hierarchy" value="Craniomaxillofacial~Neuro Trauma &amp; Reconstruction~TRUMATCH® CMF Personalized Solutions~"><span class="styled_checkbox"></span> TRUMATCH® CMF Personalized Solutions<span class="filter_amount"> (2)</span>
                                        </label>
                                      </li>
                                    </ul>
                              </div>
                            </div>
                          </div>
                      </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="pull-right btn button-lg button-modal gray closeBtn" data-dismiss="modal">Close</button>
                  <button type="button" class="pull-left btn button-lg button-modal" data-dismiss="modal" onclick="applyProcedureFilters();">
                    Filter Results<span class="glyphicon icon-caret-right"></span>
                  </button>
                </div>
              </div>
            </div>
          </div>

          <!-- Modal content types -->
          <div class="modal fade filterBox" id="contentTypes" tabindex="-1" role="dialog">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span><span class="sr-only">Close</span>
                  </button>
                  <h2 class="modal-title">Content Types</h2>
                </div>
                <div class="modal-body">
                  <div class="panel-group selection_accordion" id="accordion2">
                    <div class="panel panel-default">
                      <div class="checkbox panel-heading">
                        <label> <input class="sr-only" type="checkbox" value="" name="contentTypesAll"><span class="styled_checkbox"></span> View all<span class="filter_amount"> (58)</span>
                        </label>
                      </div>
                    </div>
                    <div class="panel panel-default">
                          <div class="checkbox panel-heading capitalize">
                            <label> <input class="sr-only" type="checkbox" name="fq:assetType_s" value="pdf"><span class="styled_checkbox"></span> pdf<span class="filter_amount"> (54)</span>
                            </label>
                          </div>
                        </div>
                      <div class="panel panel-default">
                          <div class="checkbox panel-heading capitalize">
                            <label> <input class="sr-only" type="checkbox" name="fq:assetType_s" value="video"><span class="styled_checkbox"></span> video<span class="filter_amount"> (4)</span>
                            </label>
                          </div>
                        </div>
                      </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="pull-right btn button-lg button-modal gray closeBtn" data-dismiss="modal">Close</button>
                  <button type="button" class="pull-left btn button-lg button-modal" data-dismiss="modal" onclick="applyContentTypeFilters();">
                    Filter Results<span class="glyphicon icon-caret-right"></span>
                  </button>
                </div>
              </div>
            </div>
          </div></div>
            </div>



        <?php include '../templates/footer.php';?>
      </div>
    </div>
    <?php include '../templates/scripts.php';?>
  </body>
</html>
