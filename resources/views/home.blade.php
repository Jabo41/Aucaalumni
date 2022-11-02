@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="mb-3 row">
                    <div class="col-md-6 d-flex">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">a.</label>
                        <div class="col-sm-10">
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
                            <input type="file" class="file d-none" name="photo" id="photo" placeholder="Add your Photo"/>
                        </div>
                    </div>
                          <div class="col-md-6 d-flex">
                             <label for="colFormLabel" class="col-sm-2 col-form-label">f.</label>
                            <div class="col-sm-10">
                            <input type="text" class="bg-light tw-text-left form-control border-0 mb-4" name="current_employer"
                                   placeholder="Current employer"/>

                                <input type="text" class="bg-light tw-text-left form-control border-0 mb-4" name="current_employer"
                                   placeholder="Current employer"/>
                             </div>
                          </div>
                    </div>

                <div class="mb-3 row">
                    <div class="col-md-6 d-flex">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">b.</label>
                        <div class="col-sm-10">
                            <input type="text" class="bg-light tw-text-left form-control border-0 mb-4"
                                   name="current_employer"
                                   placeholder="Phone Number"/>
                        </div>
                    </div>

                    <div class="col-md-6 d-flex">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">f.</label>
                        <div class="col-sm-10">
                            <input type="text" class="bg-light tw-text-left form-control border-0 mb-4"
                                   name="current_employer"
                                   placeholder="Current employer"/>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex">
                        <label for="colFormLabel" class="col-sm-2 col-form-label">g.</label>
                        <div class="col-sm-10">
                            <input type="text" class="bg-light tw-text-left form-control border-0 mb-4"
                                   name="current_employer"
                                   placeholder="Current employer"/>
                        </div>
                    </div>



                </div>



                <div class="col-md-6 d-flex">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">c.</label>
                    <div class="col-sm-10">
                        <input type="text" class="bg-light tw-text-left form-control border-0 mb-4"
                               name="current_employer"
                               placeholder="Email"/>
                    </div>
                </div>

                <div class="col-md-6 d-flex">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">d.</label>
                    <div class="col-sm-10">
                        <input type="text" class="bg-light tw-text-left form-control border-0 mb-4"
                               name="current_employer"
                               placeholder="Faculty"/>
                    </div>
                </div>

                <div class="col-md-6 d-flex">
                    <label for="colFormLabel" class="col-sm-2 col-form-label">e.</label>
                    <div class="col-sm-10">
                        <span class="">Bio</span>
{{--                        <input type="text" class="bg-light tw-text-left form-control border-0 mb-4"--}}
{{--                               name="current_employer"--}}
{{--                               placeholder="Faculty"/>--}}

                        <textarea class="bg-light tw-text-left form-control" name="current_employer"
                                  required></textarea>
                    </div>
                </div>


            </div>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>


                </div>

            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        document.querySelector('#filePhoto').addEventListener('click',function(e){
            document.querySelector('#photo').click();
        });
    </script>
@endsection
