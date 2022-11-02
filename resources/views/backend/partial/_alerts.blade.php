@if(session()->has("success"))
    <div class="container">
        <div class="alert alert-custom alert-light-primary fade show mb-5 p-4" role="alert">
            <div class="alert-icon"><i class="flaticon-warning"></i></div>
            <div class="alert-text">{{session("success")}}</div>
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="ki ki-close"></i></span>
                </button>
            </div>
        </div>
    </div>
@endif


<!--end::Subheader-->
<!--begin::Entry-->
@if(session()->has("warning"))

    <div class="container">
        <div class="alert alert-custom alert-warning fade show mb-5 p-4" role="alert">
            <div class="alert-icon"><i class="flaticon-warning"></i></div>
            <div class="alert-text">{{session("warning")}}</div>
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="ki ki-close"></i></span>
                </button>
            </div>
        </div>
    </div>
@endif
<!--end::Subheader-->
<!--begin::Entry-->
@if(session()->has("error"))
    <div class="container">
        <div class="alert alert-custom alert-light-danger fade show mb-5 p-4" role="alert">
            <div class="alert-icon"><i class="flaticon-warning"></i></div>
            <div class="alert-text">{{session("error")}}</div>
            <div class="alert-close">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true"><i class="ki ki-close"></i></span>
                </button>
            </div>
        </div>
    </div>
@endif



@if ($errors->any())
    <div class="container">
        <div class="alert alert-danger rounded-0">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
