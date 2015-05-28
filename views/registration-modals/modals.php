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
                <label class="dark">
                  EMAIL ADDRESS
                </label>
                <input type="text" placeholder="email@address.org">
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <label class="dark">
                  PASSWORD
                </label>
                <input type="text" placeholder="password">
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <input type="checkbox">
                <label class="agree">
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
                  Thank you for previously registering on the DePuy Synthes Institute website. In order to participate in the new Future Leaders online educational program, we need to collect some additional information from you and verify that you are associated with a Residency Program. If you have any questions please feel free to contact us any time at <a href="#">futureleaders@its.jnj.com</a>.
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
                <span aria-hidden="true">×</span>
                <span class="sr-only">Close</span>
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
                    <label for="degree">
                      DEGREE
                    </label>
                    <div class="dropdown">
                      <select class="modalSelection">
                        <option>Select Degree</option>
                        <option>MD</option>
                        <option>DO</option>
                        <option>DPM</option>
                        <option>DVM</option>
                        <option>DMD</option>
                        <option>Other</option>
                      </select>
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
                      <p>I agree to the
                      <a href="#"> terms and conditions</a>.</p>
                    </label>
                  </div>
                  <div class="checkbox">
                    <input type="hidden" name="allowCommFlgSet" value="1">
                    <label>
                      <input class="sr-only" type="checkbox" value="1" name="orgConsentStatement">
                      <span class="styled_checkbox"></span>
                      <p>If you check this box we may send you information through email communication about our products and services. You agree that the information you provide will be governed by our
                      <a href="/privacy"> Privacy Policy</a>.</p>
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
                <span aria-hidden="true">×</span>
                <span class="sr-only">Close</span>
              </button>
              <div class="row">
                <div class="col-xs-6 col-sm-6 modal-header-left">
                  <h2 class="modal-title">
                    Registration
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
                  <p class="hide" id="errMsg"></p>
                  <div class="form-group">
                    <label>
                      PROFESSION
                    </label>
                    <br>
                    <select class="modalSelection form-control">
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
                    <label class="dark">
                      <input class="aa" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Acute Care Surgery">
                      Acute Care Surgery
                    </label>
                  </div>
                  <div class="radio">
                    <label class="dark">
                      <input class="aa" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Anesthesiology">
                      Anesthesiology
                    </label>
                  </div>
                  <div class="radio">
                    <label class="dark">
                      <input class="aa" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Diagnostic Radiology">
                      Diagnostic Radiology
                    </label>
                  </div>
                  <div class="radio">
                    <label class="dark">
                      <input class="aa" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="General Surgery">
                      General Surgery
                    </label>
                  </div>
                  <div class="radio">
                    <label class="dark">
                      <input class="aa" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Interventional Radiology">
                      Interventional Radiology
                    </label>
                  </div>
                  <div class="radio">
                    <label class="dark">
                      <input class="aa" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Neurosurgery">
                      Neurosurgery
                    </label>
                  </div>
                  <div class="radio">
                    <label class="dark">
                      <input class="aa" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Neurology">
                      Neurology
                    </label>
                  </div>
                  <div class="radio">
                    <label class="dark">
                      <input class="aa" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Oral and Maxillofacial Surgery">
                      Oral and Maxillofacial Surgery
                    </label>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="radio">
                    <label class="dark">
                      <input class="ortho-unhide" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Orthopaedic Surgery">
                      Orthopaedic Surgery
                    </label>
                  </div>
                  <div class="radio">
                    <label class="dark">
                      <input class="aa" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Otolaryngology">
                      Otolaryngology
                    </label>
                  </div>
                  <div class="radio">
                    <label class="dark">
                      <input class="aa" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Pain Management">
                      Pain Management
                    </label>
                  </div>
                  <div class="radio">
                    <label class="dark">
                      <input class="aa" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Physiatry">
                      Physiatry
                    </label>
                  </div>
                  <div class="radio">
                    <label class="dark">
                      <input class="aa" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Plastic Surgery">
                      Plastic Surgery
                    </label>
                  </div>
                  <div class="radio">
                    <label class="dark">
                      <input class="aa" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Plastic Surgery">
                      Podiatric Medicine
                    </label>
                  </div>
                  <div class="radio">
                    <label class="dark">
                      <input class="aa" type="radio" name="reg_||c0a80241b71d27b038342fcb3ab567a0" value="Veterinary Medicine">
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
                      <label class="dark">
                        <input class="" type="checkbox" name="reg_||c0a80241fe190db1672ee7fc804922b1" value="Joint Reconstruction">
                        Joint Reconstruction
                      </label>
                    </div>
                    <div class="radio">
                      <label class="dark">
                        <input class="" type="checkbox" name="reg_||c0a80241fe190db1672ee7fc804922b1" value="Sports Medicine">
                        Sports Medicine
                      </label>
                    </div>
                    <div class="radio">
                      <label class="dark">
                        <input class="" type="checkbox" name="reg_||c0a80241fe190db1672ee7fc804922b1" value="Trauma">
                        Trauma
                      </label>
                    </div>
                    <div class="radio">
                      <label class="dark">
                        <input class="" type="checkbox" name="reg_||c0a80241fe190db1672ee7fc804922b1" value="Spine">
                        Spine
                      </label>
                    </div>
                    <div class="radio">
                      <label class="dark">
                        <input class="" type="checkbox" name="reg_||c0a80241fe190db1672ee7fc804922b1" value="Hip and Pelvis">
                        Hip and Pelvis
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="radio Pedia">
                      <label class="dark">
                        <input class="" type="checkbox" name="reg_||c0a80241fe190db1672ee7fc804922b1" value="Pediatric">
                        Pediatric
                      </label>
                    </div>
                    <div class="radio Foot ">
                      <label class="dark">
                        <input class="" type="checkbox" name="reg_||c0a80241fe190db1672ee7fc804922b1" value="Foot and Ankle">
                        Foot and Ankle
                      </label>
                    </div>
                    <div class="radio Hand ">
                      <label class="dark">
                        <input class="" type="checkbox" name="reg_||c0a80241fe190db1672ee7fc804922b1" value="Hand and Wrist">
                        Hand and Wrist
                      </label>
                    </div>
                    <div class="radio Gener">
                      <label class="dark">
                        <input class="" type="checkbox" name="reg_||c0a80241fe190db1672ee7fc804922b1" value="General">
                        General
                      </label>
                    </div>
                    <div class="radio Shoul">
                      <label class="dark">
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

    <!-- Registration Required 3.1 if Resident -->
    <div class="modal fade reg-req-three-one if-resident" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                  <select class="modalSelection" id="whatNumber">
                    <option id="npiNumber">NPI Number</option>
                    <option id="slNumber">State License Number</option>
                    <option id="noNumber">I don't have either</option>
                  </select>
                </div>
              </div>
            </div>


            <div class="row npi-number-options">
              <div class="col-xs-10 col-sm-5">
                <input type="text" placeholder="10-digit NPI Number">
              </div>
              <div class="col-xs-2 col-sm-2">
                <a href="#"><span class="glyphicon icon-search"></span></a>
              </div>
            </div>


            <div class="row hidden state-license-number-options">
              <div class="col-xs-3">
                <div class="dropdown">
                  <select class="modalSelection">
                    <option>State</option>
                    <option>AL</option>
                    <option>AZ</option>
                    <option>RI</option>
                    <option>TN</option>
                    <option>TX</option>
                  </select>
                </div>
              </div>
              <div class="col-xs-5">
                <input type="text" placeholder="License Number">
              </div>
              <div class="col-xs-2">
                <a href="#"><span class="glyphicon icon-search"></span></a>
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
                  <select class="modalSelection">
                    <option>State</option>
                    <option>AL</option>
                    <option>AZ</option>
                    <option>RI</option>
                    <option>TN</option>
                    <option>TX</option>
                  </select>
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
                <div class="checkbox">
                  <input type="hidden" name="allowCommFlgSet" value="1">
                  <label>
                    <input class="sr-only" type="checkbox" value="1" name="complianceEligible">
                    <span class="styled_checkbox"></span>
                    <p>I understand my academic institution/department compliance policies and I am <strong>fully eligible</strong> to participate in the DePuy Synthes Future Leaders program including value transfers. (i.e, textbooks, etc)</p>
                  </label>
                </div>
                <div class="checkbox">
                  <input type="hidden" name="allowCommFlgSet" value="1">
                  <label>
                    <input class="sr-only" type="checkbox" value="1" name="complianceNotEligible">
                    <span class="styled_checkbox"></span>
                    <p> I understand my academic institution/department compliance policies and I am <strong>not eligible</strong> to participate in the DePuy Synthes Future Leaders program including value transfers. (i.e,  textbooks, etc).</p>
                  </label>
                </div>
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
                <input id="yesMili" type="radio" name="sequenced" value="yes">
                Yes
              </div>
              <div class="col-xs-5 col-sm-3 col-lg-2">
                <input id="noMili" type="radio" name="sequenced" value="no" checked="checked">
                No
              </div>
            </div>
            <div id="proffer" class="hidden row">
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
                  <select class="modalSelection">
                    <option>PGY</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                  </select>
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

    <!-- Registration Required 3.2 if Chief Resident -->
    <div class="modal fade reg-req-three-two if-chief" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                  <select class="modalSelection" id="whatNumber">
                    <option id="npiNumber">NPI Number</option>
                    <option id="slNumber">State License Number</option>
                    <option id="noNumber">I don't have either</option>
                  </select>
                </div>
              </div>
            </div>


            <div class="row npi-number-options">
              <div class="col-xs-10 col-sm-5">
                <input type="text" placeholder="10-digit NPI Number">
              </div>
              <div class="col-xs-2 col-sm-2">
                <a href="#"><span class="glyphicon icon-search"></span></a>
              </div>
            </div>


            <div class="row hidden state-license-number-options">
              <div class="col-xs-3">
                <div class="dropdown">
                  <select class="modalSelection">
                    <option>State</option>
                    <option>AL</option>
                    <option>AZ</option>
                    <option>RI</option>
                    <option>TN</option>
                    <option>TX</option>
                  </select>
                </div>
              </div>
              <div class="col-xs-5">
                <input type="text" placeholder="License Number">
              </div>
              <div class="col-xs-2">
                <a href="#"><span class="glyphicon icon-search"></span></a>
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
                  <select class="modalSelection">
                    <option>State</option>
                    <option>AL</option>
                    <option>AZ</option>
                    <option>RI</option>
                    <option>TN</option>
                    <option>TX</option>
                  </select>
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
                <div class="checkbox">
                  <input type="hidden" name="allowCommFlgSet" value="1">
                  <label>
                    <input class="sr-only" type="checkbox" value="1" name="complianceEligible">
                    <span class="styled_checkbox"></span>
                    <p>I understand my academic institution/department compliance policies and I am <strong>fully eligible</strong> to participate in the DePuy Synthes Future Leaders program including value transfers. (i.e, textbooks, etc)</p>
                  </label>
                </div>
                <div class="checkbox">
                  <input type="hidden" name="allowCommFlgSet" value="1">
                  <label>
                    <input class="sr-only" type="checkbox" value="1" name="complianceNotEligible">
                    <span class="styled_checkbox"></span>
                    <p> I understand my academic institution/department compliance policies and I am <strong>not eligible</strong> to participate in the DePuy Synthes Future Leaders program including value transfers. (i.e,  textbooks, etc).</p>
                  </label>
                </div>
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
                <input id="yesMili" type="radio" name="sequenced" value="yes">
                Yes
              </div>
              <div class="col-xs-5 col-sm-3 col-lg-2">
                <input id="noMili" type="radio" name="sequenced" value="no">
                No
              </div>
            </div>
            <div id="proffer" class="hidden row">
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
                  <select class="modalSelection">
                    <option>PGY</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                  </select>
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
            <div class="row">
              <div class="col-xs-12">
                <label class="dark">
                  MY ASSIGNMENTS
                </label>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <p>
                  As a Chief Resident, you may assign content and curricula to residents in your program through the My Assignments section. Learn more.
                </p>
                <p>
                  Would you like to participate?
                </p>
              </div>
            </div>
            <div class="row radio-yes-no">
              <div class="col-xs-5 col-sm-3 col-lg-2">
                <input id="yesAssign" type="radio" name="myAssign" value="yes">
                Yes
              </div>
              <div class="col-xs-5 col-sm-3 col-lg-2">
                <input id="noAssign" type="radio" name="myAssign" value="no">
                No
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

    <!-- Registration Required 3.3 if Fellow -->
    <div class="modal fade reg-req-three-three if-fellow" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                  <select class="modalSelection" id="whatNumber">
                    <option id="npiNumber">NPI Number</option>
                    <option id="slNumber">State License Number</option>
                    <option id="noNumber">I don't have either</option>
                  </select>
                </div>
              </div>
            </div>


            <div class="row npi-number-options">
              <div class="col-xs-10 col-sm-5">
                <input type="text" placeholder="10-digit NPI Number">
              </div>
              <div class="col-xs-2 col-sm-2">
                <a href="#"><span class="glyphicon icon-search"></span></a>
              </div>
            </div>


            <div class="row hidden state-license-number-options">
              <div class="col-xs-3">
                <div class="dropdown">
                  <select class="modalSelection">
                    <option>State</option>
                    <option>AL</option>
                    <option>AZ</option>
                    <option>RI</option>
                    <option>TN</option>
                    <option>TX</option>
                  </select>
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
                  <select class="modalSelection">
                    <option>State</option>
                    <option>AL</option>
                    <option>AZ</option>
                    <option>RI</option>
                    <option>TN</option>
                    <option>TX</option>
                  </select>
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
                <div class="checkbox">
                  <input type="hidden" name="allowCommFlgSet" value="1">
                  <label>
                    <input class="sr-only" type="checkbox" value="1" name="complianceEligible">
                    <span class="styled_checkbox"></span>
                    <p>I understand my academic institution/department compliance policies and I am <strong>fully eligible</strong> to participate in the DePuy Synthes Future Leaders program including value transfers. (i.e, textbooks, etc)</p>
                  </label>
                </div>
                <div class="checkbox">
                  <input type="hidden" name="allowCommFlgSet" value="1">
                  <label>
                    <input class="sr-only" type="checkbox" value="1" name="complianceNotEligible">
                    <span class="styled_checkbox"></span>
                    <p> I understand my academic institution/department compliance policies and I am <strong>not eligible</strong> to participate in the DePuy Synthes Future Leaders program including value transfers. (i.e,  textbooks, etc).</p>
                  </label>
                </div>
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
                <input id="yesMili" type="radio" name="sequenced" value="yes">
                Yes
              </div>
              <div class="col-xs-5 col-sm-3 col-lg-2">
                <input id="noMili" type="radio" name="sequenced" value="no" checked="checked">
                No
              </div>
            </div>
            <div id="proffer" class="hidden row">
              <div class="col-xs-12">
                <span class="warning">
                  <p>
                    In order to participate in the redemption program your ethics officer must sign a Proffer Letter. A DS Program Manager will contact you with further details.
                  </p>
                </span>
              </div>
            </div>
            <div class="row">
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

    <!-- Registration Required 3.4 if Resident Director/Coordinator -->
    <div class="modal fade reg-req-three-four if-director" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                  <select class="modalSelection">
                    <option>State</option>
                    <option>AL</option>
                    <option>AZ</option>
                    <option>RI</option>
                    <option>TN</option>
                    <option>TX</option>
                  </select>
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
                <div class="checkbox">
                  <input type="hidden" name="allowCommFlgSet" value="1">
                  <label>
                    <input class="sr-only" type="checkbox" value="1" name="complianceEligible">
                    <span class="styled_checkbox"></span>
                    <p>I understand my academic institution/department compliance policies and I am <strong>fully eligible</strong> to participate in the DePuy Synthes Future Leaders program including value transfers. (i.e, textbooks, etc)</p>
                  </label>
                </div>
                <div class="checkbox">
                  <input type="hidden" name="allowCommFlgSet" value="1">
                  <label>
                    <input class="sr-only" type="checkbox" value="1" name="complianceNotEligible">
                    <span class="styled_checkbox"></span>
                    <p> I understand my academic institution/department compliance policies and I am <strong>not eligible</strong> to participate in the DePuy Synthes Future Leaders program including value transfers. (i.e,  textbooks, etc).</p>
                  </label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <label class="dark">
                  MY ASSIGNMENTS
                </label>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <p>
                  As a Chief Resident, you may assign content and curricula to residents in your program through the My Assignments section. Learn more.
                </p>
                <p>
                  Would you like to participate?
                </p>
              </div>
            </div>
            <div class="row radio-yes-no">
              <div class="col-xs-5 col-sm-3 col-lg-2">
                <input id="yesAssign" type="radio" name="myAssign" value="yes">
                Yes
              </div>
              <div class="col-xs-5 col-sm-3 col-lg-2">
                <input id="noAssign" type="radio" name="myAssign" value="no">
                No
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

    <!-- Registration Required 4.1 -->
    <div class="modal fade reg-req-four-one" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                  For compliance purposes, please provide one of the following forms of documentation that you are currently a resident enrolled in a residency program.
                </p>
                <p>
                  Institution’s web link featuring the list of current residents enrolled in the residency program:
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <input type="text" placeholder="Program website URL">
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
                <label class="dark">
                  OR
                </label>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
                <p>
                  Your residency director or residency coordinators email address so that we can request confirmation:
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <input type="text" placeholder="Director/Coordinator email address">
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
                <label class="dark">
                  OR
                </label>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
                <p>
                  A letter on institution letterhead from your residency director or residency coordinator confirming your enrollment in the program:
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <input type="file" placeholder="Upload...">
              </div>
              <div class="col-xs-7">
                <button class="btn btn-black">
                  Browse
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <label class="dark">
                  OR
                </label>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-1">
                <div class="checkComplete">
                  <div class="squaredFour">
                    <label><input type="checkbox" value="none" id="squaredFour0" name="check"></label>
                  </div>
                </div>
              </div>
              <div class="col-xs-11">
                <p>
                  I will contact the DePuy Synthes Institute Future Leaders team at <a href="#">futureleaders@its.jnj.com</a>.
                </p>
              </div>
            </div>
          </div><!-- end modal body -->
          <div class="modal-footer">
            <button type="submit" class="pull-right btn button-lg button-modal">
              Submit Registration <span class="glyphicon icon-caret-right"></span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Registration Required 4.2 -->
    <div class="modal fade reg-req-four-two" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                  For compliance purposes, please provide one of the following forms of documentation that you are currently a fellow enrolled in a fellowship program.
                </p>
                <p>
                  Institution’s web link featuring the list of current fellows enrolled in the fellowship program:
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <input type="text" placeholder="Program website URL">
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
                <label class="dark">
                  OR
                </label>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
                <p>
                  Your fellowship director or fellowship coordinators email address so that we can request confirmation:
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <input type="text" placeholder="Director/Coordinator email address">
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
                <label class="dark">
                  OR
                </label>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
                <p>
                  A letter on institution letterhead from your fellowship director or fellowship coordinator confirming your enrollment in the program:
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <input type="file" placeholder="Upload...">
              </div>
              <div class="col-xs-7">
                <button class="btn btn-black">
                  Browse
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <label class="dark">
                  OR
                </label>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-1">
                <div class="checkComplete">
                  <div class="squaredFour">
                    <label><input type="checkbox" value="none" id="squaredFour0" name="check"></label>
                  </div>
                </div>
              </div>
              <div class="col-xs-11">
                <p>
                  I will contact the DePuy Synthes Institute Future Leaders team at futureleaders@its.jnj.com.
                </p>
              </div>
            </div>
          </div><!-- end modal body -->
          <div class="modal-footer">
            <button type="submit" class="pull-right btn button-lg button-modal">
              Submit Registration <span class="glyphicon icon-caret-right"></span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Registration Required 4.3 -->
    <div class="modal fade reg-req-four-three" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
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
                  For compliance purposes, please provide one of the following forms of documentation that you are currently associated with a residency program.
                </p>
                <p>
                  Institution’s web link featuring your name and association to the program:
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <input type="text" placeholder="Program website URL">
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
                <label class="dark">
                  OR
                </label>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-12">
                <p>
                  A letter on institution letterhead from the chairman of your department confirming your enrollment in the program:
                </p>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-7">
                <input type="file" placeholder="Upload...">
              </div>
              <div class="col-xs-7">
                <button class="btn btn-black">
                  Browse
                </button>
              </div>
            </div>
            <div class="row">
              <div class="col-xs-12">
                <label class="dark">
                  OR
                </label>
              </div>
            </div>

            <div class="row">
              <div class="col-xs-1">
                <div class="checkComplete">
                  <div class="squaredFour">
                    <label><input type="checkbox" value="none" id="squaredFour0" name="check"></label>
                  </div>
                </div>
              </div>
              <div class="col-xs-11">
                <p>
                  I will contact the DePuy Synthes Institute Future Leaders team at futureleaders@its.jnj.com.
                </p>
              </div>
            </div>
          </div><!-- end modal body -->
          <div class="modal-footer">
            <button type="submit" class="pull-right btn button-lg button-modal">
              Submit Registration <span class="glyphicon icon-caret-right"></span>
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Confirmation Modal -->
    <div class="modal fade thank-you" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">
              <span aria-hidden="true">×</span>
              <span class="sr-only">Close</span>
            </button>
            <div class="row">
              <div class="col-xs-12 modal-header-left">
                <h2 class="modal-title">Thank You</h2>
              </div>
            </div>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-12">
                <p>Thank you for registering for the DePuy Synthes Institute Future Leaders online educational program. You now have access to all content and may earn credits. You may not redeem credits until we review your registration and activate your account in 1–2 business days. If you have any questions please feel free to contact us any time at <a href="#">futureleaders@its.jnj.com</a>.</p>
              </div>
            </div>
            <div class="modal-footer">
              <button type="submit" class="pull-right btn button-lg button-modal">Okay<span class="glyphicon icon-caret-right"></span></button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="main_wrapper container-fluid">
      <div id="smt_col1Wrapper">
        <div id="smt_col1" class="padding-wrap">
          <div class="modSpacer">
            <h1>
              If Not Registered:
            </h1>
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
              If Registered:
            </h1>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".reg-req-three-one">
              Registration Required 3.1
            </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".reg-req-three-two">
              Registration Required 3.2
            </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".reg-req-three-three">
              Registration Required 3.3
            </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".reg-req-three-four">
              Registration Required 3.4
            </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".reg-req-four-one">
              Registration Required 4.1
            </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".reg-req-four-two">
              Registration Required 4.2
            </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".reg-req-four-three">
              Registration Required 4.3
            </button>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".thank-you">
              Confirmation
            </button>
          </div>
        </div>
      </div>
    </div>
    <?php include '../templates/scripts.php';?>
  </body>
</html>
