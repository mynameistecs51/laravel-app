{{-- <form id="formValidationExamples" class="row g-3" method="post">

    <!-- Account Details -->

    <div class="col-12">
        <h5 class="fw-semibold">1. ข้อมูลพื้นฐาน</h5>
        <hr class="mt-0" />
    </div>

    <div class="col-md-6">
        <label class="form-label" for="formValidationSTDID">รหัสนักศึกษา</label>
        <input type="text" id="formValidationSTDID" class="form-control" placeholder="12345678901" name="studentID"
            required />
    </div>

    <div class="col-md-6">
        <label class="form-label" for="formValidationSubject">สาขาวิชา</label>
        <select id="formValidationSubject" name="formValidationSubject" class="form-select select2"
            data-allow-clear="true">
            <option value="">Select</option>
            <option value="คอมพิวเตอร์ศึกษา">คอมพิวเตอร์ศึกษา</option>
            <option value="วิทยาศาสตร์">วิทยาศาสตร์</option>
            <option value="พละศึกษา">พละศึกษา</option>
            <option value="คณิตศาสตร์">คณิตศาสตร์</option>
            <option value="ปฐมวัย">ปฐมวัย</option>
        </select>
    </div>

    <div class="col-md-6">
        <label class="form-label" for="formValidationName">ชื่อ - นามสกุล</label>
        <input type="text" id="formValidationName" class="form-control" placeholder="ใจดี ขยันเรียน" name="fullName"
            required />
    </div>

    <div class="col-md">
        <small class="fw-semibold d-block">เพศสภาพ</small>
        <div class="form-check form-check-inline mt-3">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio1"
                value="male" />
            <label class="form-check-label" for="inlineRadio1">ชาย</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="gender" id="inlineRadio2"
                value="female" />
            <label class="form-check-label" for="inlineRadio2">หญิง</label>
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label" for="formValidationEmail">Email</label>
        <input class="form-control" type="email" id="formValidationEmail" name="formValidationEmail"
            placeholder="john.doe" />
    </div>

    <div class="col-md-6">
        <div class="form-password-toggle">
            <label class="form-label" for="formValidationPass">Password</label>
            <div class="input-group input-group-merge">
                <input class="form-control" type="password" id="formValidationPass" name="formValidationPass"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="multicol-password2" />
                <span class="input-group-text cursor-pointer" id="multicol-password2"><i class="bx bx-hide"></i></span>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-password-toggle">
            <label class="form-label" for="formValidationConfirmPass">Confirm
                Password</label>
            <div class="input-group input-group-merge">
                <input class="form-control" type="password" id="formValidationConfirmPass"
                    name="formValidationConfirmPass"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="multicol-confirm-password2" />
                <span class="input-group-text cursor-pointer" id="multicol-confirm-password2"><i
                        class="bx bx-hide"></i></span>
            </div>
        </div>
    </div>


    <!-- Personal Info -->

    <div class="col-12">
        <h5 class="mt-2 fw-semibold">2. Personal Info</h5>
        <hr class="mt-0" />
    </div>

    <div class="col-md-6">
        <label for="formValidationFile" class="form-label">Profile Pic</label>
        <input class="form-control" type="file" id="formValidationFile" name="formValidationFile"
            placeholder="Choose profile pic">
    </div>
    <div class="col-md-6">
        <label class="form-label" for="formValidationDob">DOB</label>
        <input type="text" class="form-control flatpickr-validation" name="formValidationDob"
            id="formValidationDob" required />
    </div>


    <div class="col-md-6">
        <label class="form-label" for="formValidationLang">Languages</label>
        <input type="text" value="" class="form-control" name="formValidationLang"
            id="formValidationLang" />
    </div>

    <div class="col-md-6">
        <label class="form-label" for="formValidationTech">Tech</label>
        <input class="form-control typeahead" type="text" id="formValidationTech" name="formValidationTech"
            autocomplete="off" />
    </div>
    <div class="col-md-6">
        <label class="form-label" for="formValidationHobbies">Hobbies</label>
        <select class="selectpicker hobbies-select w-100" id="formValidationHobbies" data-style="btn-default"
            data-icon-base="bx" data-tick-icon="bx-check text-white" name="formValidationHobbies" multiple>
            <option>Sports</option>
            <option>Movies</option>
            <option>Books</option>
        </select>
    </div>

    <div class="col-md-6">
        <label class="form-label" for="formValidationBio">Bio</label>
        <textarea class="form-control" id="formValidationBio" name="formValidationBio" rows="3"></textarea>
    </div>


    <!-- Choose Your Plan -->

    <div class="col-12">
        <h5 class="mt-2 fw-semibold">3. Choose Your Plan</h5>
        <hr class="mt-0" />
    </div>
    <div class="row">
        <div class="col-xl-3 col-md-5 col-sm-6 col-12">
            <div class="form-check custom-option custom-option-icon">
                <label class="form-check-label custom-option-content" for="basicPlanMain1">
                    <span class="custom-option-body">
                        <i class="bx bx-rocket"></i>
                        <span class="custom-option-title"> Starter </span>
                        <small> Get 5gb of space and 1 team member. </small>
                    </span>
                    <input name="formValidationPlan" class="form-check-input" type="radio" value=""
                        id="basicPlanMain1" />
                </label>
            </div>
        </div>
        <div class="col-xl-3 col-md-5 col-sm-6 col-12">
            <div class="form-check custom-option custom-option-icon">
                <label class="form-check-label custom-option-content" for="basicPlanMain2">
                    <span class="custom-option-body">
                        <i class="bx bx-user"></i>
                        <span class="custom-option-title"> Personal </span>
                        <small> Get 15gb of space and 5 team member. </small>
                    </span>
                    <input name="formValidationPlan" class="form-check-input" type="radio" value=""
                        id="basicPlanMain2" />
                </label>
            </div>
        </div>
        <div class="col-xl-3 col-md-5 col-sm-6 col-12">
            <div class="form-check custom-option custom-option-icon">
                <label class="form-check-label custom-option-content" for="basicPlanMain3">
                    <span class="custom-option-body">
                        <i class="bx bx-crown"></i>
                        <span class="custom-option-title"> Premium </span>
                        <small> Get 25gb of space and 15 members. </small>
                    </span>
                    <input name="formValidationPlan" class="form-check-input" type="radio" value=""
                        id="basicPlanMain3" />
                </label>
            </div>
        </div>
    </div>

    <div class="col-12">
        <label class="switch switch-primary">
            <input type="checkbox" class="switch-input" name="formValidationSwitch" />
            <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
            </span>
            <span class="switch-label">Send me related emails</span>
        </label>
    </div>
    <div class="col-12">
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="formValidationCheckbox"
                name="formValidationCheckbox" />
            <label class="form-check-label" for="formValidationCheckbox">Agree to
                our terms and conditions</label>
        </div>
    </div>
    <div class="col-12">
        <button type="submit" name="submitButton" class="btn btn-primary">Submit</button>
    </div>
</form> --}}

<div class="card mb-4">
    <h5 class="card-header">ข้อมูลพื้นฐาน</h5>
    <!-- Account -->
    {{-- <div class="card-body">
      <div class="d-flex align-items-start align-items-sm-center gap-4">
        <img
          src="../assets/img/avatars/1.png"
          alt="user-avatar"
          class="d-block rounded"
          height="100"
          width="100"
          id="uploadedAvatar"
        />
        <div class="button-wrapper">
          <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
            <span class="d-none d-sm-block">Upload new photo</span>
            <i class="bx bx-upload d-block d-sm-none"></i>
            <input
              type="file"
              id="upload"
              class="account-file-input"
              hidden
              accept="image/png, image/jpeg"
            />
          </label>
          <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
            <i class="bx bx-reset d-block d-sm-none"></i>
            <span class="d-none d-sm-block">Reset</span>
          </button>

          <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
        </div>
      </div> 
    </div>--}}
    <hr class="my-0" />
    <div class="card-body">
      <form id="formAccountSettings" method="POST" onsubmit="return false">
        <div class="row">
          <div class="mb-3 col-md-6">
            <label for="firstName" class="form-label">First Name</label>
            <input
              class="form-control"
              type="text"
              id="firstName"
              name="firstName"
              value="John"
              autofocus
            />
          </div>
          <div class="mb-3 col-md-6">
            <label for="lastName" class="form-label">Last Name</label>
            <input class="form-control" type="text" name="lastName" id="lastName" value="Doe" />
          </div>
          <div class="mb-3 col-md-6">
            <label for="email" class="form-label">E-mail</label>
            <input
              class="form-control"
              type="text"
              id="email"
              name="email"
              value="john.doe@example.com"
              placeholder="john.doe@example.com"
            />
          </div>
          <div class="mb-3 col-md-6">
            <label for="organization" class="form-label">Organization</label>
            <input
              type="text"
              class="form-control"
              id="organization"
              name="organization"
              value="ThemeSelection"
            />
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label" for="phoneNumber">Phone Number</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text">US (+1)</span>
              <input
                type="text"
                id="phoneNumber"
                name="phoneNumber"
                class="form-control"
                placeholder="202 555 0111"
              />
            </div>
          </div>
          <div class="mb-3 col-md-6">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" id="address" name="address" placeholder="Address" />
          </div>
          <div class="mb-3 col-md-6">
            <label for="state" class="form-label">State</label>
            <input class="form-control" type="text" id="state" name="state" placeholder="California" />
          </div>
          <div class="mb-3 col-md-6">
            <label for="zipCode" class="form-label">Zip Code</label>
            <input
              type="text"
              class="form-control"
              id="zipCode"
              name="zipCode"
              placeholder="231465"
              maxlength="6"
            />
          </div>
          <div class="mb-3 col-md-6">
            <label class="form-label" for="country">Country</label>
            <select id="country" class="select2 form-select">
              <option value="">Select</option>
              <option value="Australia">Australia</option>
              <option value="Bangladesh">Bangladesh</option>
              <option value="Belarus">Belarus</option>
              <option value="Brazil">Brazil</option>
              <option value="Canada">Canada</option>
              <option value="China">China</option>
              <option value="France">France</option>
              <option value="Germany">Germany</option>
              <option value="India">India</option>
              <option value="Indonesia">Indonesia</option>
              <option value="Israel">Israel</option>
              <option value="Italy">Italy</option>
              <option value="Japan">Japan</option>
              <option value="Korea">Korea, Republic of</option>
              <option value="Mexico">Mexico</option>
              <option value="Philippines">Philippines</option>
              <option value="Russia">Russian Federation</option>
              <option value="South Africa">South Africa</option>
              <option value="Thailand">Thailand</option>
              <option value="Turkey">Turkey</option>
              <option value="Ukraine">Ukraine</option>
              <option value="United Arab Emirates">United Arab Emirates</option>
              <option value="United Kingdom">United Kingdom</option>
              <option value="United States">United States</option>
            </select>
          </div>
          <div class="mb-3 col-md-6">
            <label for="language" class="form-label">Language</label>
            <select id="language" class="select2 form-select">
              <option value="">Select Language</option>
              <option value="en">English</option>
              <option value="fr">French</option>
              <option value="de">German</option>
              <option value="pt">Portuguese</option>
            </select>
          </div>
          <div class="mb-3 col-md-6">
            <label for="timeZones" class="form-label">Timezone</label>
            <select id="timeZones" class="select2 form-select">
              <option value="">Select Timezone</option>
              <option value="-12">(GMT-12:00) International Date Line West</option>
              <option value="-11">(GMT-11:00) Midway Island, Samoa</option>
              <option value="-10">(GMT-10:00) Hawaii</option>
              <option value="-9">(GMT-09:00) Alaska</option>
              <option value="-8">(GMT-08:00) Pacific Time (US & Canada)</option>
              <option value="-8">(GMT-08:00) Tijuana, Baja California</option>
              <option value="-7">(GMT-07:00) Arizona</option>
              <option value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</option>
              <option value="-7">(GMT-07:00) Mountain Time (US & Canada)</option>
              <option value="-6">(GMT-06:00) Central America</option>
              <option value="-6">(GMT-06:00) Central Time (US & Canada)</option>
              <option value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</option>
              <option value="-6">(GMT-06:00) Saskatchewan</option>
              <option value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</option>
              <option value="-5">(GMT-05:00) Eastern Time (US & Canada)</option>
              <option value="-5">(GMT-05:00) Indiana (East)</option>
              <option value="-4">(GMT-04:00) Atlantic Time (Canada)</option>
              <option value="-4">(GMT-04:00) Caracas, La Paz</option>
            </select>
          </div>
          <div class="mb-3 col-md-6">
            <label for="currency" class="form-label">Currency</label>
            <select id="currency" class="select2 form-select">
              <option value="">Select Currency</option>
              <option value="usd">USD</option>
              <option value="euro">Euro</option>
              <option value="pound">Pound</option>
              <option value="bitcoin">Bitcoin</option>
            </select>
          </div>
        </div>
        <div class="mt-2">
          <button type="submit" class="btn btn-primary me-2">Save changes</button>
          <button type="reset" class="btn btn-outline-secondary">Cancel</button>
        </div>
      </form>
    </div>
    <!-- /Account -->
  </div>
<script>
    // alertMsg();


    // function alertMsg() {
    //     alert("OK");
    // }
</script>
