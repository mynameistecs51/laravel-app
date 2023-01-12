@extends('layouts.blackend.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            {{-- <h5 class="card-header">อัพเดทสมรรถนะนักศึกษา</h5>
            <hr class="mt-0" /> --}}
            <div class="card-body">
                <div class="col-12">
                    <h5 class="mt-2 fw-semibold">1. ข้อมูลสมรรถนะ</h5>
                    <hr class="mt-0" />
                </div>
                {{-- form --}}
                <form id="formValidationExamples" class="row g-3" method="post">

                    <div class="col-md-6">
                        <label class="form-label" for="formValidationSTDID">ชื่อโครงการ</label>
                        <input type="text" id="formValidationSTDID" class="form-control" placeholder="12345678901"
                            name="studentID" required />
                    </div>

                    <div class="col-md-6">
                        <label for="formFile" class="form-label">แนบเอกสารโครงการ (ถ้ามี) </label>
                        <input class="form-control" type="file" id="formFile" accept=".docx, .pdf, .doc" />
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
                        <label class="form-label" for="formValidationName">รหัสห้อง</label>
                        <input type="text" id="formValidationName" class="form-control"
                            placeholder="{{ substr(date('Y') + 543, 2) }}xxxx2" name="fullName" required />
                    </div>

                    <div class="col-md-6">
                        <label class="form-label" for="formValidationSubject">สมรรถนะ</label>
                        <select id="formValidationSubject" name="formValidationSubject" class="form-select select2"
                            data-allow-clear="true">
                            <option value="">Select</option>
                            <option value="คิดวิเคราะห์สร้างสรรค์">คิดวิเคราะห์สร้างสรรค์</option>
                            <option value="บุคลิกภาพความเป็นครู">บุคลิกภาพความเป็นครู</option>
                            <option value="จิตอาสา">จิตอาสา</option>
                            <option value="สอนได้สอนเป็น">สอนได้สอนเป็น</option>
                            <option value="คุณธรรมจริยธรรม">คุณธรรมจริยธรรม</option>
                        </select>
                    </div>

                    <div class="col-md-12 alert-info">
                        <div class="p-2 col-sm-2 mx-auto d-flex justify-content-center">
                            <button type="button" class="btn btn-primary">ยืนยัน</button>
                            {{-- <button type="button" class="btn rounded-pill btn-secondary">ยกเลิก</button> --}}
                        </div>
                    </div>

                    <div class="col-md-12">
                        <hr class="mt-1" />
                    </div>

                    <!-- Personal Info -->
                    <div class="col-12">
                        <h5 class="mt-2 fw-semibold">2. ข้อมูลนักศึกษา</h5>
                        {{-- <hr class="mt-0" /> --}}
                    </div>

                    <!-- Striped Rows -->
                    <div class="card">
                        <div class="table-responsive text-nowrap">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ชื่อ-นามสกุล</th>
                                        <th>ฐานสมรรถนะ</th>
                                        {{-- <th>Users</th> --}}
                                        <th>สถานะ</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">
                                    <tr>
                                        <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>Angular
                                                Project</strong></td>
                                        <td>Albert Cook</td>
                                        {{-- <td>
                                            <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar"
                                                        class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Sophia Wilkerson">
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar"
                                                        class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Christina Parker">
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar"
                                                        class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </td> --}}
                                        <td><span class="badge bg-label-primary me-1">Active</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React
                                                Project</strong></td>
                                        <td>Barry Hunter</td>
                                        {{-- <td>
                                            <ul
                                                class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar"
                                                        class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Sophia Wilkerson">
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar"
                                                        class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Christina Parker">
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar"
                                                        class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </td> --}}
                                        <td><span class="badge bg-label-success me-1">Completed</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i> <strong>VueJs
                                                Project</strong></td>
                                        <td>Trevor Baker</td>
                                        {{-- <td>
                                            <ul
                                                class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar"
                                                        class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Sophia Wilkerson">
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar"
                                                        class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Christina Parker">
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar"
                                                        class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </td> --}}
                                        <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i> <strong>Bootstrap
                                                Project</strong>
                                        </td>
                                        <td>Jerry Milton</td>
                                        {{-- <td>
                                            <ul
                                                class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Lilian Fuller">
                                                    <img src="../assets/img/avatars/5.png" alt="Avatar"
                                                        class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Sophia Wilkerson">
                                                    <img src="../assets/img/avatars/6.png" alt="Avatar"
                                                        class="rounded-circle" />
                                                </li>
                                                <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                    data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                    title="Christina Parker">
                                                    <img src="../assets/img/avatars/7.png" alt="Avatar"
                                                        class="rounded-circle" />
                                                </li>
                                            </ul>
                                        </td> --}}
                                        <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                    data-bs-toggle="dropdown">
                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                            class="bx bx-trash me-1"></i> Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!--/ Striped Rows -->
                </form>
                {{-- /end form --}}
            </div>
        </div>
    </div>
@endsection
