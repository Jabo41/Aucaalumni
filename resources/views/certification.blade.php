@extends('layouts.app')

@section('content')
    <div class="container p-5 pt-0">

        @include('partials.frontend._alerts')

        <h5 class="fw-bold mt-5">Certification</h5>

        <button type="button" class="btn btn btn-outline-primary fw-bold text-[#1866B6] col-3 border-3"
                data-bs-toggle="modal" data-bs-target="#exampleModal"><span><i class="bi bi-plus"></i></span>
            Add certificate
        </button>

        <div class="card my-4">
            <div class="card-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Certificate Photo</th>
                        <th>Certificate Name</th>
                        <th>Year</th>
                        <th>Type</th>
                        <th>Description</th>
                        <th>Options</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($certifications as $key=> $item)
                        <tr>
                            <td>{{++$key}}</td>
{{--                            <td>{{ $item->image }}</td>--}}
                            <td><img src="{{$item->certificate_url}}" width="50px" height="50px" alt="no_image" class="img-fluid img-thumbnail"></td>
                            <td>{{ $item->year }}</td>
                            <td>{{ $item->type }}</td>
                            <td>{{ $item->description }}</td>

                            <td>
                                <div class="btn-group btn-group-sm">
                                    <a href="#" data-company="{{$item->image}}" data-url="{{ route('registration.certification.update') }}"
                                       data-id="{{$item->id}}"
                                       data-year="{{$item->year}}"
                                       data-image="{{url($item->certificate_url)}}"
                                       data-type="{{$item->type}}"
                                       data-description="{{$item->description}}"
                                       class="btn btn-primary js-edit"><span><i class="bi bi-pencil-square"></i></span></a>
                                    <a href="{{route('registration.certification.delete',$item->id)}}" class="btn btn-danger js-delete"><span><i class="bi bi-trash"></i></span></a>
                                </div>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>


        <div class="text-center">
            <a class="text-decoration-none fw-bold  text-muted col" href="{{route('welcome')}}"> Go Back <span
                    class="text-primary justify-content-center">home</span></a>
            <div class="float-end col">
                <a href="https://twitter.com/AUCA_Rwanda" target="_blank">
                    <span>
                <svg width="17" height="13" viewBox="0 0 17 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17 1.54204C16.3748 1.80262 15.7033 1.97869 14.9972 2.05828C15.7257 1.64824 16.2707 1.00289 16.5306 0.242638C15.8461 0.625055 15.0971 0.894236 14.3159 1.03848C13.7906 0.510874 13.0948 0.161171 12.3366 0.0436601C11.5784 -0.0738508 10.8001 0.0474051 10.1226 0.388602C9.44514 0.729799 8.90638 1.27185 8.58996 1.93059C8.27354 2.58934 8.19718 3.32792 8.37272 4.03167C6.98589 3.96617 5.6292 3.6271 4.3907 3.03646C3.1522 2.44581 2.05956 1.6168 1.1837 0.60323C0.884216 1.08918 0.712014 1.65261 0.712014 2.25266C0.71168 2.79284 0.853094 3.32474 1.12371 3.80118C1.39432 4.27762 1.78577 4.68386 2.26332 4.98386C1.70949 4.96728 1.16788 4.82651 0.683564 4.57327V4.61552C0.683508 5.37315 0.962105 6.10746 1.47208 6.69385C1.98206 7.28025 2.69201 7.68262 3.48146 7.83268C2.96769 7.96348 2.42904 7.98274 1.90619 7.88902C2.12893 8.54092 2.5628 9.11097 3.14706 9.51938C3.73133 9.9278 4.43674 10.1541 5.16454 10.1667C3.92906 11.079 2.40325 11.5739 0.832555 11.5717C0.554324 11.5718 0.276328 11.5565 0 11.5259C1.59434 12.4902 3.45027 13.002 5.34572 13C11.7621 13 15.2698 8.001 15.2698 3.66545C15.2698 3.52459 15.266 3.38232 15.2593 3.24147C15.9416 2.77733 16.5305 2.20258 16.9985 1.54415L17 1.54204Z"
                        fill="#A6A6A6"/>
                </svg>
                </span>
                </a>
                <a href="https://www.linkedin.com/company/adventist-university-of-central-africa/" target="_blank">
                    <span>
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M1.85495e-07 1.25318C1.85495e-07 0.920819 0.132031 0.602067 0.367049 0.36705C0.602066 0.132033 0.920817 1.67067e-06 1.25318 1.67067e-06H13.7455C13.9102 -0.000267342 14.0733 0.0319537 14.2255 0.0948199C14.3778 0.157686 14.5161 0.249963 14.6327 0.366367C14.7492 0.482772 14.8416 0.621018 14.9047 0.77319C14.9677 0.925363 15.0001 1.08847 15 1.25318V13.7455C15.0002 13.9102 14.9679 14.0734 14.9049 14.2256C14.842 14.3778 14.7497 14.5162 14.6332 14.6327C14.5167 14.7492 14.3784 14.8417 14.2262 14.9047C14.074 14.9677 13.9109 15.0001 13.7461 15H1.25318C1.08855 15 0.92554 14.9676 0.773452 14.9045C0.621365 14.8415 0.483185 14.7492 0.366807 14.6327C0.25043 14.5163 0.158135 14.378 0.0951972 14.2259C0.032259 14.0738 -8.93834e-05 13.9108 1.85495e-07 13.7461V1.25318ZM5.93727 5.71909H7.96841V6.73909C8.26159 6.15273 9.01159 5.625 10.1386 5.625C12.2993 5.625 12.8114 6.79296 12.8114 8.93591V12.9055H10.6248V9.42409C10.6248 8.20364 10.3316 7.515 9.58704 7.515C8.55409 7.515 8.12455 8.2575 8.12455 9.42409V12.9055H5.93727V5.71909ZM2.18727 12.812H4.37455V5.625H2.18727V12.8114V12.812ZM4.6875 3.28091C4.69162 3.46819 4.6583 3.6544 4.58948 3.82862C4.52066 4.00285 4.41774 4.16157 4.28675 4.29548C4.15576 4.42938 3.99934 4.53578 3.82667 4.60841C3.65401 4.68105 3.46857 4.71847 3.28125 4.71847C3.09393 4.71847 2.90849 4.68105 2.73583 4.60841C2.56316 4.53578 2.40674 4.42938 2.27575 4.29548C2.14476 4.16157 2.04184 4.00285 1.97302 3.82862C1.9042 3.6544 1.87088 3.46819 1.875 3.28091C1.88309 2.91331 2.03481 2.5635 2.29765 2.30638C2.56049 2.04926 2.91356 1.90529 3.28125 1.90529C3.64894 1.90529 4.00201 2.04926 4.26485 2.30638C4.52769 2.5635 4.67941 2.91331 4.6875 3.28091Z"
                          fill="#A6A6A6"/>
                </svg>
                </span>
                </a>
                <a href="https://www.instagram.com/aucarwanda/" target="_blank">
                    <span>
                <svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.49798 4.99894C6.12083 4.99894 4.99697 6.12282 4.99697 7.5C4.99697 8.87718 6.12083 10.0011 7.49798 10.0011C8.87514 10.0011 9.999 8.87718 9.999 7.5C9.999 6.12282 8.87514 4.99894 7.49798 4.99894ZM14.9992 7.5C14.9992 6.4643 15.0085 5.43798 14.9504 4.40416C14.8922 3.20335 14.6183 2.13763 13.7402 1.25953C12.8603 0.379564 11.7964 0.107505 10.5956 0.049341C9.55996 -0.00882328 8.53366 0.000558085 7.49986 0.000558085C6.46418 0.000558085 5.43788 -0.00882328 4.40408 0.049341C3.20329 0.107505 2.13759 0.38144 1.25951 1.25953C0.379557 2.1395 0.107503 3.20335 0.0493401 4.40416C-0.00882312 5.43986 0.000558074 6.46618 0.000558074 7.5C0.000558074 8.53382 -0.00882312 9.56202 0.0493401 10.5958C0.107503 11.7967 0.381433 12.8624 1.25951 13.7405C2.13946 14.6204 3.20329 14.8925 4.40408 14.9507C5.43976 15.0088 6.46606 14.9994 7.49986 14.9994C8.53554 14.9994 9.56184 15.0088 10.5956 14.9507C11.7964 14.8925 12.8621 14.6186 13.7402 13.7405C14.6202 12.8605 14.8922 11.7967 14.9504 10.5958C15.0104 9.56202 14.9992 8.5357 14.9992 7.5ZM7.49798 11.3482C5.36846 11.3482 3.64983 9.62956 3.64983 7.5C3.64983 5.37044 5.36846 3.65177 7.49798 3.65177C9.62751 3.65177 11.3461 5.37044 11.3461 7.5C11.3461 9.62956 9.62751 11.3482 7.49798 11.3482ZM11.5037 4.3929C11.0065 4.3929 10.605 3.99138 10.605 3.49417C10.605 2.99696 11.0065 2.59544 11.5037 2.59544C12.0009 2.59544 12.4025 2.99696 12.4025 3.49417C12.4026 3.61223 12.3795 3.72917 12.3343 3.83827C12.2892 3.94738 12.223 4.04651 12.1396 4.13C12.0561 4.21348 11.9569 4.27968 11.8478 4.32479C11.7387 4.3699 11.6218 4.39305 11.5037 4.3929Z"
                        fill="#A6A6A6"/>
                </svg>
                </span>
                </a>
                <a href="https://www.facebook.com/AUCAofficial" target="_blank">
                    <span>
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M0 8.04467C0 12.022 2.88867 15.3293 6.66667 16V10.222H4.66667V8H6.66667V6.222C6.66667 4.222 7.95533 3.11133 9.778 3.11133C10.3553 3.11133 10.978 3.2 11.5553 3.28867V5.33333H10.5333C9.55533 5.33333 9.33333 5.822 9.33333 6.44467V8H11.4667L11.1113 10.222H9.33333V16C13.1113 15.3293 16 12.0227 16 8.04467C16 3.62 12.4 0 8 0C3.6 0 0 3.62 0 8.04467Z"
                          fill="#A6A6A6"/>
                </svg>
                </span>
                </a>
            </div>
        </div>


    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header pt-lg-5 px-lg-5 border-bottom-0">
                    <h1 class="modal-title fs-5 " id="exampleModalLabel">
                        Certification
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('registration.certification.store')}}" method="post" class="submitForm" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body px-lg-5">
                        <div class="row justify-content-center mt-3 mb-3">
                            <div class="col-lg-6 ">
                                <div id="filePhoto" title="Add your Certificate Photo"
                                     data-bs-toggle="tooltip" data-bs-placement="bottom"
                                     class="border rounded-3 d-flex justify-content-center align-items-center tw-h-24 tw-w-36 tw-cursor-pointer mb-4 tw-bg-contain tw-bg-no-repeat tw-bg-center">

                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.32 21.16V14.28H0.56V7.56H7.32V0.679998H14.28V7.56H21.04V14.28H14.28V21.16H7.32Z"
                                            fill="#A6A6A6"/>
                                    </svg>
                                </div>
                                <input type="file" class="file d-none col-5 photo" name="image" id="photo" />
                            </div>
                            <div class="col-lg-6">

                            </div>

                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <label for="CertificateName" class="form-label">Certificate Name</label>
                                <input type="text" class="bg-light tw-text-left form-control border-0" name="certificate_name"/>
                            </div>
                            <div class="col-lg-6">
                                <label for="Year" class="form-label">Year</label>
                                <input type="number" class="bg-light tw-text-left form-control border-0 mb-4" name="year"/>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="">
                                <label for="JobTitle" class="form-label">Type</label>
                                <select class="bg-light tw-text-left form-control border-0 mb-4" name="type" >
                                    <option>--select type--</option>
                                    <option value="Certificate">Certificate</option>
                                    <option value="Training">Training</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label>Description</label>
                            <textarea class="form-control" name="description" id="exampleFormControlTextarea1"
                                      rows="3"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer border-top-0 px-lg-5">
                        <button type="submit" class="btn btn-primary">Save information</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Update-->
    <div class="modal fade" id="modalUpdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header pt-lg-5 px-lg-5 border-bottom-0">
                    <h1 class="modal-title fs-5 " id="exampleModalLabel">
                        Certification
                    </h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="{{route('registration.certification.update')}}" method="post" id="submissionFormEdit" class="submitFormEdit" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" value="0"  id="WorkId" name="WorkId">
                    <div class="modal-body px-lg-5">
                        <div class="row justify-content-center mt-3 mb-3">
                            <div class="col-lg-6 ">
                                <div  id="editFilePhoto" title="Add your Certificate Photo"
                                      data-bs-toggle="tooltip" data-bs-placement="bottom"
                                      class="border rounded-3 d-flex justify-content-center align-items-center tw-h-24 tw-w-36 tw-cursor-pointer mb-4 tw-bg-contain tw-bg-no-repeat tw-bg-center">

                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7.32 21.16V14.28H0.56V7.56H7.32V0.679998H14.28V7.56H21.04V14.28H14.28V21.16H7.32Z"
                                            fill="#A6A6A6"/>
                                    </svg>
                                </div>
                                <input type="file" class="file d-none col-5 photo" name="image" id="edit-photos" />
                            </div>
                            <div class="col-lg-6">

                            </div>

                        </div>
                        <div class="row mb-2">
                            <div class="col-lg-6">
                                <label for="CertificateName" class="form-label">Certificate Name</label>
                                <input type="text" class="bg-light tw-text-left form-control border-0" name="certificate_name" id="edit_certificate_name"/>
                            </div>
                            <div class="col-lg-6">
                                <label for="Year" class="form-label">Year</label>
                                <input type="number" class="bg-light tw-text-left form-control border-0 mb-4" name="year" id="edit_year"/>
                            </div>

                        </div>
                        <div class="row mb-3">
                            <div class="">
                                <label for="JobTitle" class="form-label">Type</label>
                                <select class="bg-light tw-text-left form-control border-0 mb-4" name="type" id="edit_type">
                                    <option>--select type--</option>
                                    <option value="Certificate">Certificate</option>
                                    <option value="Training">Training</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label>Description</label>
                            <textarea class="form-control" name="description" id="edit_description"
                                      rows="3"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer border-top-0 px-lg-5">
                        <button type="submit" class="btn btn-primary">Update information</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script>
        document.querySelector('#filePhoto').addEventListener('click',function(e){
            document.querySelector('#photo').click();
        });

        document.querySelector('#editFilePhoto').addEventListener('click',function(e){
            document.querySelector('#edit-photos').click();
        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {

                    $('#filePhoto').css("background-image", "url(" + e.target.result + ")");
                    $('#editFilePhoto').css("background-image", "url(" + e.target.result + ")");
                    // $('#imagePreview').attr('src', e.target.result).removeClass('d-none');
                }

                reader.readAsDataURL(input.files[0]);
                console.log(input.files[0])
            }
        }

        $('#photo, #edit-photos').on('change', function (e) {
            readURL(this);
        });
    </script>

    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js')}}"></script>
    {!! JsValidator::formRequest(\App\Http\Requests\CertificateRequest::class,'.submitForm') !!}
    {!! JsValidator::formRequest(\App\Http\Requests\EditCertificateRequest::class,'.submitFormEdit') !!}
    <script>
        $('.submissionForm').validate();

        $(document).on('click', '.js-edit', function (e) {
            e.preventDefault();
            $("#modalUpdate").modal('show');
            console.log($(this).data('id'));
            console.log($(this).data('name'));
            console.log($(this).data('description'));
            var url = $(this).data('url');
            $("#WorkId").val($(this).data('id'));
            $("#edit_certificate_name").val($(this).data('name'));
            $("#edit_year").val($(this).data('year'));
            $("#edit_image").val($(this).data('image'));
            $('#editFilePhoto').css("background-image", "url(" + $(this).data('image') + ")");
            $("#edit_type").val($(this).data('type'));
            $("#edit_description").val($(this).data('description'));
            $('#submissionFormEdit').attr('action', url);
        });
        $(document).on('click', '.js-delete', function (e) {
            e.preventDefault();
            var href = this.href;
            Swal.fire({
                title: "Are you sure?",
                text: "Delete this ?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                confirmButtonColor: "#1866B6",
                reverseButtons: true
            }).then((willDelete) => {
                if (willDelete.value) {
                    window.location = href;
                } else {
                    //swal("Your imaginary file is safe!");
                }
            });
        });

        $('#exampleModal').on('hidden.bs.modal', function (e) {
            $('#WorkId').val(0);
        });

    </script>

@endsection


