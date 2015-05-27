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


            <div class="modSpacer add-a-resident">
              <div class="row">
                <div class="col-xs-12">
                  <h2>
                    Add a Resident
                  </h2>
                  <p>
                    By adding residents, you can assign material to them. You may add residents by serching for existing accounts or by email addres. Residents must agree to recieve assignments from you.
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-9">
                  <input type="text" placeholder="First Name">
                </div>
                <div class="col-xs-3">
                  <button type="button" class="btn btn-info pull-right">Find</button>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  or
                </div>
              </div>
              <div class="row">
                <div class="col-xs-7">
                  <input type="text" placeholder="Resident Email Address">
                </div>
                <div class="col-xs-5">
                  <button type="button" class="btn btn-info pull-right">Send Invite</button>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <p class="invitation-sent-notification"><strong>Invitation send to scrow@abchospital.com.</strong></p>
                </div>
              </div>
            </div>

            <div class="modSpacer current-residents">
              <div class="row">
                <div class="col-xs-12">
                  <h2>
                    You have 20 Residents
                  </h2>
                </div>
              </div>

              <div class="row resident-accordion">
                <div class="col-xs-12">

                  <div class="panel-group resident-panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <p>
                              PGY 1 <span class="tiny-grey">(5)</span>
                              <span class="pull-right glyphicon icon-caret-down pull-right"></span>
                            </p>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-xs-9">
                              <p><strong>Michelle Nguyen</strong></p>
                              <p class="tiny-grey">mnguyen@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <span class="glyphicon icon-trash pull-right"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <hr />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-9">
                              <p><strong>Lauren Jackson</strong></p>
                              <p class="tiny-grey">ljackson@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <span class="glyphicon icon-trash pull-right"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <hr />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-9">
                              <p><strong>Maria Tucker</strong></p>
                              <p class="tiny-grey">mtucker@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <span class="glyphicon icon-trash pull-right"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <hr />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-9">
                              <p><strong>Samuel Marshall</strong></p>
                              <p class="tiny-grey">smarshall@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <span class="glyphicon icon-trash pull-right"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <hr />
                            </div>
                          </div>
                          <div class="row invited-resident">
                            <div class="col-xs-9">
                              <p><strong>Patricia Butler</strong></p>
                              <p class="tiny-grey">pbutler@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <button type="button" class="btn btn-info pull-right">Invite Again</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <p>
                              PGY 2 <span class="tiny-grey">(5)</span>
                              <span class="pull-right glyphicon icon-caret-down pull-right"></span>
                            </p>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-xs-9">
                              <p><strong>Michelle Nguyen</strong></p>
                              <p class="tiny-grey">mnguyen@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <span class="glyphicon icon-trash pull-right"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <hr />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-9">
                              <p><strong>Lauren Jackson</strong></p>
                              <p class="tiny-grey">ljackson@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <span class="glyphicon icon-trash pull-right"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <hr />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-9">
                              <p><strong>Maria Tucker</strong></p>
                              <p class="tiny-grey">mtucker@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <span class="glyphicon icon-trash pull-right"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <hr />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-9">
                              <p><strong>Samuel Marshall</strong></p>
                              <p class="tiny-grey">smarshall@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <span class="glyphicon icon-trash pull-right"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <hr />
                            </div>
                          </div>
                          <div class="row invited-resident">
                            <div class="col-xs-9">
                              <p><strong>Patricia Butler</strong></p>
                              <p class="tiny-grey">pbutler@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <button type="button" class="btn btn-info pull-right">Invite Again</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <p>
                              PGY 3 <span class="tiny-grey">(5)</span>
                              <span class="pull-right glyphicon icon-caret-down pull-right"></span>
                            </p>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-xs-9">
                              <p><strong>Michelle Nguyen</strong></p>
                              <p class="tiny-grey">mnguyen@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <span class="glyphicon icon-trash pull-right"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <hr />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-9">
                              <p><strong>Lauren Jackson</strong></p>
                              <p class="tiny-grey">ljackson@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <span class="glyphicon icon-trash pull-right"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <hr />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-9">
                              <p><strong>Maria Tucker</strong></p>
                              <p class="tiny-grey">mtucker@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <span class="glyphicon icon-trash pull-right"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <hr />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-9">
                              <p><strong>Samuel Marshall</strong></p>
                              <p class="tiny-grey">smarshall@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <span class="glyphicon icon-trash pull-right"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <hr />
                            </div>
                          </div>
                          <div class="row invited-resident">
                            <div class="col-xs-9">
                              <p><strong>Patricia Butler</strong></p>
                              <p class="tiny-grey">pbutler@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <button type="button" class="btn btn-info pull-right">Invite Again</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <p>
                              PGY 4 <span class="tiny-grey">(5)</span>
                              <span class="pull-right glyphicon icon-caret-down pull-right"></span>
                            </p>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-xs-9">
                              <p><strong>Michelle Nguyen</strong></p>
                              <p class="tiny-grey">mnguyen@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <span class="glyphicon icon-trash pull-right"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <hr />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-9">
                              <p><strong>Lauren Jackson</strong></p>
                              <p class="tiny-grey">ljackson@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <span class="glyphicon icon-trash pull-right"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <hr />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-9">
                              <p><strong>Maria Tucker</strong></p>
                              <p class="tiny-grey">mtucker@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <span class="glyphicon icon-trash pull-right"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <hr />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-9">
                              <p><strong>Samuel Marshall</strong></p>
                              <p class="tiny-grey">smarshall@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <span class="glyphicon icon-trash pull-right"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <hr />
                            </div>
                          </div>
                          <div class="row invited-resident">
                            <div class="col-xs-9">
                              <p><strong>Patricia Butler</strong></p>
                              <p class="tiny-grey">pbutler@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <button type="button" class="btn btn-info pull-right">Invite Again</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <p>
                              PGY 5 <span class="tiny-grey">(0)</span>
                              <span class="pull-right glyphicon icon-caret-down pull-right"></span>
                            </p>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                        </div>
                      </div>
                    </div>
                    <div class="panel panel-default">
                      <div class="panel-heading" role="tab" id="headingSix">
                        <h4 class="panel-title">
                          <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <p>
                              Unknown <span class="tiny-grey">(6)</span>
                              <span class="pull-right glyphicon icon-caret-down pull-right"></span>
                            </p>
                          </a>
                        </h4>
                      </div>
                      <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                        <div class="panel-body">
                          <div class="row">
                            <div class="col-xs-9">
                              <p><strong>Michelle Nguyen</strong></p>
                              <p class="tiny-grey">mnguyen@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <span class="glyphicon icon-trash pull-right"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <hr />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-9">
                              <p><strong>Lauren Jackson</strong></p>
                              <p class="tiny-grey">ljackson@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <span class="glyphicon icon-trash pull-right"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <hr />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-9">
                              <p><strong>Maria Tucker</strong></p>
                              <p class="tiny-grey">mtucker@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <span class="glyphicon icon-trash pull-right"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <hr />
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-9">
                              <p><strong>Samuel Marshall</strong></p>
                              <p class="tiny-grey">smarshall@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <span class="glyphicon icon-trash pull-right"></span>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-xs-12">
                              <hr />
                            </div>
                          </div>
                          <div class="row invited-resident">
                            <div class="col-xs-9">
                              <p><strong>Patricia Butler</strong></p>
                              <p class="tiny-grey">pbutler@generalhospital.edu</p>
                            </div>
                            <div class="col-xs-3">
                              <button type="button" class="btn btn-info pull-right">Invite Again</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>

            </div>

            <div class="modSpacer">
            </div>


          </div>
        </div>




        <?php include '../templates/footer.php';?>
      </div>
    </div>
    <?php include '../templates/scripts.php';?>
  </body>
</html>
