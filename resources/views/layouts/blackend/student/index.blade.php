@extends('layouts.blackend.master')
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card mb-4">
            <h5 class="card-header">จัดการข้อมูลนักศึกษา</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="demo-inline-spacing mt-3">
                            <div class="list-group list-group-horizontal-md text-md-center">
                                <a class="list-group-item list-group-item-action active" id="home-list-item"
                                    data-bs-toggle="list" href="#horizontal-addstudent-one">เพิ่มทีละคน</a>
                                <a class="list-group-item list-group-item-action" id="profile-list-item"
                                    data-bs-toggle="list" href="#horizontal-addStudent-template">เพิ่มจากไฟล์Template</a>
                            </div>
                            <div class="tab-content px-0 mt-0">
                                <div class="tab-pane fade show active" id="horizontal-addstudent-one">
                                    <div class="row">
                                        
                                        @include('layouts.blackend.student.formAddStudent')
                                     
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="horizontal-addStudent-template">

                                    @include('layouts.blackend.student.formAddStudent_template')

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
