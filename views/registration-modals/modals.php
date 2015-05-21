<!DOCTYPE html>
<html lang="en">
  <?php include '../templates/head.php';?>
  <body>

    <!-- Sign In Modal -->
    <div class="modal fade sign-in-modal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <div class="row">
              <div class="col-xs-6">
                <h4 class="modal-title">
                  Sign in
                </h4>
              </div>
              <div class="col-xs-6">
                <a href="#" class="pull-right">
                  Register
                </a>
              </div>
            </div>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-xs-12">
                <label>
                  EMAIL ADDRESS
                </label>
                <input type="text" placeholder="email@address.org">
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <label>
                  PASSWORD
                </label>
                <input type="text" placeholder="password">
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <input type="checkbox">
                <label>
                  Remember me on this computer
                </label>
              </div>
            </div>
            <div class="row forgot-pass-row">
              <div class="col-xs-7">
                <a href="#">
                  <p>
                    Forgot password?
                  </p>
                </a>
              </div>
              <div class="col-xs-5">
                <button class="btn btn-info">
                  Sign In
                </button>
              </div>
            </div>
          </div><!-- end modal body -->
          <div class="modal-footer">
            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <p>
                  <strong>
                    Are you a Johnson & Johnson Employee?
                  </strong>
                </p>
                <p>
                  <a href="#">
                    Click here to sign in using your WWID.
                  </a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Additional Steps Required -->
    <div class="modal fade additional-steps" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">
                ×
              </span>
              <span class="sr-only">
                Close
              </span>
            </button>
            <div class="row">
              <div class="col-xs-12 modal-header-left">
                <h2 class="modal-title">
                  Additional Steps Required
                </h2>
              </div>
            </div>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12">
                <p>
                  Thank you for previously registering on the DePuy Synthes Institute website. In order to participate in the new Future Leaders online educational program, we need to collect some additional information from you and verify that you are associated with a Residency Program. If you have any questions please feel free to contact us any time at futureleaders@its.jnj.com.
                </p>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="pull-right btn button-lg button-modal">
                Next<span class="glyphicon icon-caret-right"></span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Registration Required 1 -->
    <div class="modal fade reg-req-one" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="?" method="post" onsubmit="return checkRegister1(this);">
            <input type="hidden" name="amid" value="registration">
            <input type="hidden" name="requestType" value="reqBuild">
            <input type="hidden" name="actionName" value="Register">
            <input type="hidden" name="sbActionId" value="c0a80241b7139e30186fd3b0749eb907">
            <input type="hidden" name="registerSubmittalId" value="">
            <input type="hidden" name="postProcess" value="">
            <input type="hidden" name="page" value="2">
            <input type="hidden" name="notifyAdminFlg" value="0">
            <input type="hidden" name="finalPage" value="">
            <input type="hidden" name="apprReg" value="0">
            <input type="hidden" name="dealerLocationId" value="">
            <input type="hidden" name="redirectURL" value="">
            <input type="hidden" name="printerFriendlyTheme" value="">
            <input type="hidden" name="hidePf" value="">
            <input type="hidden" name="formFields" value="7f000001427b18842a834a598cdeafa">
            <input type="hidden" name="formFields" value="7f000001447b18842a834a598cdeafa">
            <input type="hidden" name="formFields" value="7f000001397b18842a834a598cdeafa">
            <input type="hidden" name="formFields" value="7f000001407b18842a834a598cdeafa">
            <input type="hidden" name="formFields" value="7f000001537b18842a834a598cdeafa">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">
                  ×
                </span>
                <span class="sr-only">
                  Close
                </span>
              </button>
              <div class="row">
                <div class="col-xs-6 col-sm-6 modal-header-left">
                  <h2 class="modal-title">
                    Registration (Required)
                  </h2>
                </div>
                <div class="col-xs-6 col-sm-6">
                  <a href="#" class="pull-right">
                    Sign In
                  </a>
                </div>
              </div>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <p>
                    We will use this information to update you on DePuy Synthes Institute offerings. To unsubscribe from email communications, visit your profile page to update preferences. By registering, you acknowledge that you have reviewed and agree to our
                    <a href="/privacy"> Privacy Policy</a>.
                  </p>
                  <p class="hide" id="errMsg"></p>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="First_Name">
                      LEGAL FIRST NAME
                    </label>
                    <input type="text" class="form-control" id="First_Name" name="reg_enc|FIRST_NM|7f000001427b18842a834a598cdeafa" placeholder="legal first name" value="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="Last_Name">
                      MIDDLE NAME
                    </label>
                    <input type="text" class="form-control" id="Middle_Name" name="reg_enc|LAST_NM|7f000001447b18842a834a598cdeafa" placeholder="middle name" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="Last_Name">
                      LEGAL LAST NAME
                    </label>
                    <input type="text" class="form-control" id="Last_Name" name="reg_enc|LAST_NM|7f000001447b18842a834a598cdeafa" placeholder="legal last name" value="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <div class="dropdown">
                      <label for="Last_Name">
                        DEGREE
                      </label>
                      <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                        Select Degree
                        <span class="caret pull-right"></span>
                      </button>
                      <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">MD</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">DO</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">DPM</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">DVM</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">DMD</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Other</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="Email_Address">
                      EMAIL ADDRESS
                    </label>
                    <input type="email" class="form-control" id="Email_Address" name="reg_enc|EMAIL_ADDRESS_TXT|7f000001397b18842a834a598cdeafa" placeholder="email@address.org" value="">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="Email_Address">
                      CONFIRM EMAIL ADDRESS
                    </label>
                    <input type="email" class="form-control" id="Email_Address" name="reg_enc|EMAIL_ADDRESS_TXT|7f000001397b18842a834a598cdeafa" placeholder="email@address.org" value="">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="password">
                      CHOOSE A PASSWORD
                    </label>
                    <input type="password" class="form-control" id="password" name="reg_|PASSWORD_TXT|7f000001407b18842a834a598cdeafa" placeholder="at least 8 characters" value="">
                  </div>
                  <div class="help-block password">
                    (minimum 8 characters, containing a number)
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="~passwordConfirm">
                        CONFIRM PASSWORD
                      </label>
                      <input type="password" class="form-control" id="~passwordConfirm" name="passwordConfirm" placeholder="confirm password" value="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div class="checkbox">
                    <input type="hidden" name="allowCommFlgSet" value="1">
                    <label>
                      <input class="sr-only" type="checkbox" value="1" name="orgConsentStatement">
                      <span class="styled_checkbox"></span>
                      I agree to the
                      <a href="#"> terms and conditions</a>.
                    </label>
                  </div>
                  <div class="checkbox">
                    <input type="hidden" name="allowCommFlgSet" value="1">
                    <label>
                      <input class="sr-only" type="checkbox" value="1" name="orgConsentStatement">
                      <span class="styled_checkbox"></span>
                      If you check this box we may send you information through email communication about our products and services. You agree that the information you provide will be governed by our
                      <a href="/privacy"> Privacy Policy</a>.
                    </label>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="submit" class="pull-right btn button-lg button-modal">
                  Next<span class="glyphicon icon-caret-right"></span>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Registration Required 2 -->
    <div class="modal fade reg-req-two" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <form action="?" method="post" onsubmit="return checkRegister2(this);">
            <input type="hidden" name="amid" value="registration">
            <input type="hidden" name="requestType" value="reqBuild">
            <input type="hidden" name="actionName" value="Register">
            <input type="hidden" name="sbActionId" value="c0a80241b7139e30186fd3b0749eb907">
            <input type="hidden" name="registerSubmittalId" value="c0a8023768eed761a7dd558cc07f6753">
            <input type="hidden" name="postProcess" value="">
            <input type="hidden" name="page" value="3">
            <input type="hidden" name="notifyAdminFlg" value="0">
            <input type="hidden" name="finalPage" value="1">
            <input type="hidden" name="apprReg" value="0">
            <input type="hidden" name="dealerLocationId" value="">
            <input type="hidden" name="redirectURL" value="">
            <input type="hidden" name="printerFriendlyTheme" value="">
            <input type="hidden" name="hidePf" value="">
            <input type="hidden" name="formFields" value="c0a80241b71c9d40a59dbd6f4b621260">
            <input type="hidden" name="formFields" value="c0a80241b71d27b038342fcb3ab567a0">
            <input type="hidden" name="formFields" value="c0a80241fe190db1672ee7fc804922b1">
            <input type="hidden" name="formFields" value="c0a802378dc21c56c15b1c38f9c3831d">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">
                <span aria-hidden="true">
                  ×
                </span>
                <span class="sr-only">
                  Close
                </span>
              </button>
              <div class="row">
                <div class="col-sm-6 modal-header-left">
                  <h2 class="modal-title">
                    Registration Required
                  </h2>
                </div>
              </div>
            </div>
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-12">
                  <p class="hide" id="errMsg"></p>
                  <div class="form-group">
                    <label>
                      PROFESSION
                    </label>
                    <br>
                    <select name="reg_||c0a80241b71c9d40a59dbd6f4b621260" class="form-control">
                      <option>Select Specialty</option>
                      <option value="Resident">
                        Resident
                      </option>
                      <option value="Fellow">
                        Fellow
                      </option>
                      <option value="Chief Resident">
                        Chief Resident
                      </option>
                      <option value="Residency Director">
                        Residency Director
                      </option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-xs-12">
                  <div class="radio-group">
                    <label>
                      SPECIALTY
                    </label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="radio">
                    <label>
                      <input class="" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Acute Care Surgery">
                      Acute Care Surgery
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input class="" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Anesthesiology">
                      Anesthesiology
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input class="" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Diagnostic Radiology">
                      Diagnostic Radiology
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input class="" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="General Surgery">
                      General Surgery
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input class="" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Interventional Radiology">
                      Interventional Radiology
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input class="" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Neurosurgery">
                      Neurosurgery
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input class="" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Neurology">
                      Neurology
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input class="" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Oral and Maxillofacial Surgery">
                      Oral and Maxillofacial Surgery
                    </label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="radio">
                    <label class="">
                      <input class="ortho-unhide" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Orthopaedic Surgery">
                      Orthopaedic Surgery
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input class="" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Otolaryngology">
                      Otolaryngology
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input class="" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Pain Management">
                      Pain Management
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input class="" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Physiatry">
                      Physiatry
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input class="" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Plastic Surgery">
                      Plastic Surgery
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input class="" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Plastic Surgery">
                      Podiatric Medicine
                    </label>
                  </div>
                  <div class="radio">
                    <label>
                      <input class="" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Veterinary Medicine">
                      Veterinary Medicine
                    </label>
                  </div>
                </div>
              </div>

              <div class="hidden flying-ashtrays">
                <div class="row subspecialty heading">
                  <div class="col-xs-12">
                    <div class="radio-group">
                      <label>
                        SUB-SPECIALTY
                      </label>
                    </div>
                  </div>
                </div>
                <div class="row subspecialty ortho">
                  <div class="col-sm-6">
                    <div class="radio">
                      <label>
                        <input class="" type="checkbox" name="reg_||c0a80241fe190db1672ee7fc804922b1" value="Joint Reconstruction">
                        Joint Reconstruction
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="" type="checkbox" name="reg_||c0a80241fe190db1672ee7fc804922b1" value="Sports Medicine">
                        Sports Medicine
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="" type="checkbox" name="reg_||c0a80241fe190db1672ee7fc804922b1" value="Trauma">
                        Trauma
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="" type="checkbox" name="reg_||c0a80241fe190db1672ee7fc804922b1" value="Spine">
                        Spine
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input class="" type="checkbox" name="reg_||c0a80241fe190db1672ee7fc804922b1" value="Hip and Pelvis">
                        Hip and Pelvis
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="radio Pedia">
                      <label>
                        <input class="" type="checkbox" name="reg_||c0a80241fe190db1672ee7fc804922b1" value="Pediatric">
                        Pediatric
                      </label>
                    </div>
                    <div class="radio Foot ">
                      <label>
                        <input class="" type="checkbox" name="reg_||c0a80241fe190db1672ee7fc804922b1" value="Foot and Ankle">
                        Foot and Ankle
                      </label>
                    </div>
                    <div class="radio Hand ">
                      <label>
                        <input class="" type="checkbox" name="reg_||c0a80241fe190db1672ee7fc804922b1" value="Hand and Wrist">
                        Hand and Wrist
                      </label>
                    </div>
                    <div class="radio Gener">
                      <label>
                        <input class="" type="checkbox" name="reg_||c0a80241fe190db1672ee7fc804922b1" value="General">
                        General
                      </label>
                    </div>
                    <div class="radio Shoul">
                      <label>
                        <input class="" type="checkbox" name="reg_||c0a80241fe190db1672ee7fc804922b1" value="Shoulder and Elbow">
                        Shoulder and Elbow
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="pull-right btn button-lg button-modal">
                Next <span class="glyphicon icon-caret-right"></span>
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Registration Required 3 -->
    <div class="modal fade reg-req-three-one" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">
                &times;
              </span>
            </button>
            <div class="row">
              <div class="col-xs-8">
                <h4 class="modal-title">
                  Registration Required
                </h4>
              </div>
              <div class="col-xs-4">
                <a href="#" class="pull-right">
                  Sign In
                </a>
              </div>
            </div>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-xs-12">
                <p>
                  Optional text area. Might say something like this about why DePuy Synthes needs this information.
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12 col-sm-6">
                <label>
                  IDENTIFICATION NUMBER
                </label>
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                    NPI Number
                    <span class="caret pull-right"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">NPI Number</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">State License Number</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">I don't have either</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="row npi-number-options">
              <div class="col-xs-10 col-sm-5">
                <input type="text" placeholder="10-digit NPI Number">
              </div>
              <div class="col-xs-2 col-sm-2">
                icon
              </div>
            </div>
            <div class="row hidden state-license-number-options">
              <div class="col-xs-3">
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                    State
                    <span class="caret pull-right"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <li role="presentation">
                      <a role="menuitem" tabindex="-1" href="#">
                        AL
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-5">
                <input type="text" placeholder="License Number">
              </div>
              <div class="col-xs-2">
                icon
              </div>
            </div>
            <div class="row hidden identification-number-options">
              <div class="col-xs-12">
                <textarea placeholder="Why don't you have an NPI Number or State License?"></textarea>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <label class="dark">
                  ACADEMIC MEDICAL CENTER
                </label>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <label>
                  NAME
                </label>
                <input type="text" placeholder="Medical Center Name">
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <label>
                  STREET ADDRESS
                </label>
                <input type="text" placeholder="Medical Center Address">
              </div>
            </div>
            <div class="row">
              <div class="col-xs-4 col-sm-8">
                <label>
                  CITY
                </label>
                <input type="text" placeholder="City">
              </div>
              <div class="col-xs-4 col-sm-2">
                <label>
                  STATE
                </label>
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                    State
                    <span class="caret pull-right"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <li role="presentation">
                      <a role="menuitem" tabindex="-1" href="#">
                        AL
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-4 col-sm-2">
                <label>
                  ZIP CODE
                </label>
                <input type="text" placeholder="Zip Code">
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <p>
                  Are you working in a Military Hospital?
                </p>
              </div>
            </div>
            <div class="row radio-yes-no">
              <div class="col-xs-5 col-sm-3 col-lg-2">
                <input type="radio" name="sequenced" checked value="yes">
                Yes
              </div>
              <div class="col-xs-5 col-sm-3 col-lg-2">
                <input type="radio" name="sequenced" value="no">
                No
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <span class="warning">
                  <p>
                    In order to participate in the redemption program your ethics officer must sign a Proffer Letter. A DS Program Manager will contact you with further details.
                  </p>
                </span>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-6 year-residency">
                <label>
                  YEAR IN RESIDENCY
                </label>
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                    PGY
                    <span class="caret pull-right"></span>
                  </button>
                  <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">1</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">2</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">3</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">4</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">5</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">6</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">7</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">8</a></li>
                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">9</a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-6 graduation-date">
                <label>
                  GRADUATION DATE
                </label>
                <br>
                <input type="text" placeholder="MM">
                <input type="text" placeholder="YYYY">
              </div>
            </div>
          </div><!-- end modal body -->
          <div class="modal-footer">
            <button type="submit" class="pull-right btn button-lg button-modal">
              Next <span class="glyphicon icon-caret-right"></span>
            </button>
          </div>
        </div>
      </div>
    </div>



    <div class="main_wrapper container-fluid">
      <div id="smt_col1Wrapper">
        <div id="smt_col1" class="padding-wrap">
          <div class="modSpacer">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".sign-in-modal">
              Sign In Modal
            </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".additional-steps">
              Additional Steps Required
            </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".reg-req-one">
              Registration Required 1
            </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".reg-req-two">
              Registration Required 2
            </button>
            <h1>
              If Resident:
            </h1>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".reg-req-three-one">
              Registration Required 3.1
            </button>
          </div>
        </div>
      </div>
    </div>
    <?php include '../templates/scripts.php';?>
  </body>
</html>
