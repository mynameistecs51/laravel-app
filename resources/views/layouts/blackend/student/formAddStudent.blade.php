<form id="formValidationExamples" class="row g-3" method="post">

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
</form>
<script>
    // alertMsg();


    // function alertMsg() {
    //     alert("OK");
    // }
</script>
