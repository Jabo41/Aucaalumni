@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('personal.information.store')}}" method="post" id="submissionForm" class="submissionForm" enctype="multipart/form-data">
            @csrf
            <div class="row pt-5 justify-content-center">
                <div class="col-lg-6">
                    <div class="d-flex flex-row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">a.</label>
                        <div class="col-6">
                            <div id="filePhoto"
                                 class="border rounded-3 d-flex justify-content-center align-items-center tw-h-24 tw-cursor-pointer mb-4">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.32 21.16V14.28H0.56V7.56H7.32V0.679998H14.28V7.56H21.04V14.28H14.28V21.16H7.32Z"
                                        fill="#A6A6A6"/>
                                </svg>
                                <em class="text-muted ms-2">Add your Photo</em>
                            </div>
                            <div class="col-sm-10 mb-4">
                                <input type="file" class="file d-none col-5" name="photo" id="photo" placeholder="Add your Photo"/>
                            </div>

                        </div>
                    </div>
                    <div class="d-flex flex-row col-9">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">b.</label>
                        <div class="col-sm-10 mb-4">
                            <input type="text" class="bg-light tw-text-left form-control border-0" name="phone_number"
                                   placeholder="Phone Number"/>
                        </div>
                    </div>
                    <div class="d-flex flex-row col-9">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">c.</label>
                        <div class="col-sm-10 mb-4">
                            <input type="text" class="bg-light tw-text-left form-control border-0" name="email"
                                   placeholder="Email"/>
                        </div>
                    </div>
                    <div class="d-flex flex-row col-9">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">d.</label>
                        <div class="col-sm-10 mb-4">
                            <input type="text" class="bg-light tw-text-left form-control border-0 " name="faculty"
                                   placeholder="Faculty"/>
                        </div>
                    </div>
                    <div class="d-flex flex-row col-9">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">e.</label>
                        <div class="col-sm-10 mb-4">
                            <span class="">Bio</span>
                            <textarea class="bg-light tw-text-left form-control" name="bio"></textarea>
                        </div>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="col-9 row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">f.</label>
                        <div class="col-sm-10 mb-4">
                            <input type="text" class="bg-light tw-text-left form-control border-0" name="current_employer"
                                   placeholder="Current Employer"/>
                        </div>
                    </div>
                    <div class="d-flex flex-row col-9">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">g.</label>
                        <div class="col-sm-10 mb-4">
                            <select class="form-select text-muted bg-light border-0" name="self_employed">
                                <option>self employed</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex flex-row col-9">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">g.</label>
                        <div class="col-sm-10 mb-4">
                            <select class="form-select text-muted bg-light border-0" name="self_employed">
                                <option>Profession</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex flex-row col-9">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">g.</label>
                        <div class="col-sm-10 mb-4">
                            <select class="form-select text-muted bg-light border-0" name="self_employed">
                                <option>Latest Education</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex flex-row col-9">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">j.</label>
                        <div class="col-sm-10 mb-4">
                            <input type="text" class="bg-light tw-text-left form-control border-0" name="address"
                                   placeholder="Location, Address, Street Number"/>
                        </div>
                    </div>
                    <div class="d-flex text-center col-8 flex-column mt-2">

                        <button class="btn btn btn-primary btn-lg shadow tw-tracking-wider mt-10  border-3">Save information</button>
                        <a href="#" class=" mt-3 text-decoration-none text-muted  fw-bold"> click here to <span class="text-primary">review</span></a>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <!-- Laravel Javascript Validation -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest(\App\Http\Requests\ValidatePersonalInformation::class,'.submissionForm') !!}

    <script>

        document.querySelector('#filePhoto').addEventListener('click',function(e){
            document.querySelector('#photo').click();
        });
    </script>
@endsection
