@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{route('registration.personal.information.store')}}" method="post" id="submissionForm"
              class="submissionForm" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-center">
                <div class="col-lg-6">

                    <div class="mb-3 col-8 m-5 mt-1">
                       <div class="col-sm-10">
                            <div id="filePhoto" title="Add your Photo"
                                 data-bs-toggle="tooltip" data-bs-placement="bottom"
                                 class="border rounded-3 d-flex justify-content-center align-items-center tw-h-24 tw-w-32 tw-cursor-pointer mb-4 tw-bg-cover tw-bg-no-repeat">

                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M7.32 21.16V14.28H0.56V7.56H7.32V0.679998H14.28V7.56H21.04V14.28H14.28V21.16H7.32Z"
                                        fill="#A6A6A6"/>
                                </svg>
                           </div>
                            <input type="file" class="file d-none col-5" name="photo" id="photo"/>
                        </div>
                    </div>

{{--                    <div class="mb-3 col-7 m-5 mt-1">--}}
{{--                        <label for="colFormLabel" class="col-form-label">Full Names</label>--}}
{{--                        <input type="text" class="form-control border-0 bg-light" name="full_names">--}}
{{--                    </div>--}}

                    <div class="mb-3 col-7 m-5 mt-1">
                        <label for="colFormLabel" class="col-form-label">Date of Birth</label>
                        <input type="date" class="form-control border-0 bg-light" name="dob">
                    </div>

                    <div class="mb-3 col-7 m-5 mt-1">
                        <label for="colFormLabel" class="col-form-label">Address</label>
                        <input type="email" class="form-control border-0 bg-light" name="address">
                    </div>

{{--                    <div class="mb-3 col-7 m-5 mt-1">--}}
{{--                        <label for="colFormLabel" class="col-form-label">Phone Number</label>--}}
{{--                        <input type="text" class="form-control border-0 bg-light" name="phone_number">--}}
{{--                    </div>--}}

{{--                    <div class="mb-3 col-7 m-5 mt-1">--}}
{{--                        <label for="colFormLabel" class="col-form-label">Email</label>--}}
{{--                        <input type="email" class="form-control border-0 bg-light" name="email">--}}
{{--                    </div>--}}

                    <div class="mb-3 col-7 m-5 mt-1">
                        <label for="colFormLabel" class="col-form-label">Faculty</label>
                        <input type="email" class="form-control border-0 bg-light" name="faculty">
                    </div>

                    <div class="mb-3 col-7 m-5 mt-1">
                        <div class="row ">
                            <div class="col-lg-6">
                                <div class="mb-3 mt-1">
                                    <label for="startDate" class="form-label">Start Date</label>
                                    <input type="date"
                                           class="bg-light tw-text-left form-control border-0"
                                           name="start_date"/>
                                </div>
                            </div>
                            <div class="col-lg-6">

                                <div class="mb-3 mt-1">
                                    <label for="endDate" class="form-label">End Date</label>
                                    <input type="date"
                                           class="bg-light tw-text-left form-control border-0"
                                           name="end_date"/>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="mb-3 col-7 m-5 mt-1">
                        <label for="colFormLabel" class="col-form-label">Bio</label>
                        <textarea class="bg-light tw-text-left form-control" name="bio"></textarea>
                    </div>
                </div>
                <div class="col-lg-6">

                    <div class="mb-3 col-7 m-5 mt-1">
                        <label for="colFormLabel" class="col-form-label">Current Employer</label>
                        <input type="email" class="form-control border-0 bg-light" name="current_employer">
                    </div>

                    <div class="mb-3 col-7 m-5 mt-1">
                        <label for="colFormLabel" class="col-form-label">Self employed</label>
                        <select class="form-select text-muted bg-light border-0" name="current_employer">
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                        </select>
                    </div>

                    <div class="mb-3 col-7 m-5 mt-1">
                        <label for="colFormLabel" class="col-form-label">Profession</label>
                        <select class="form-select text-muted bg-light border-0" name="profession_id">
                            @foreach(App\Models\Profession::all() as $profession)
                                <option value="{{$profession->id}}">{{$profession->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-6 col-7 m-5 mt-1">
                        <label for="colFormLabel" class="col-form-label">Latest education level</label>
                        <select class="form-select text-muted bg-light border-0" name="latest_education_level">
                            <option value="bachelor’s_degree">Bachelor’s Degree (Bcs)</option>
                            <option value="masters_degree">Masters Degree</option>
                            <option value="phd">PhD</option>
                        </select>
                    </div>




                    <div class="mb-3 col-6 m-5 mt-1">
                        <div class="col-sm-10 mb-4 offset-sm-2">
                            <button class="btn btn btn-primary w-100 btn-lg shadow tw-tracking-wider mt-10  border-3">
                                Save
                                information
                            </button>
                        </div>
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

        document.querySelector('#filePhoto').addEventListener('click', function (e) {
            document.querySelector('#photo').click();
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#filePhoto').css("background-image", "url(" + e.target.result + ")");
                    // $('#imagePreview').attr('src', e.target.result).removeClass('d-none');
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $('#photo').on('change', function (e) {
            readURL(this);
        });
    </script>
@endsection
