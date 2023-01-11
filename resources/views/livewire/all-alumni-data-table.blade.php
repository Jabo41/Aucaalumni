<div>
    <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
            <label for="faculty" class="sr-only">Filter</label>
            <select name="faculty" id="faculty" class="form-select" wire:model="selectedFaculty">
                <option value="">Select faculty</option>
                @foreach($faculties as $item)
                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="search" class="sr-only">Search</label>
            <input type="search" id="search" wire:model="search" placeholder="Search.." class="form-control"/>

        </div>
    </div>

    @if($students->count() >0)
        <div class="table-responsive rounded-3 mt-3 border overflow-hidden">
            <table class="table mb-0 table-striped " id="myTable">
                {{--                    <table class="table table-striped" id="kt_datatable">--}}
                <thead>
                <tr>
                    <th class="text-muted text-uppercase bg-light">Image</th>
                    <th class="text-muted text-uppercase bg-light">Name</th>
                    <th class="text-muted text-uppercase bg-light">Phone</th>
                    <th class="text-muted text-uppercase bg-light">Faculty</th>
                    <th class="text-muted text-uppercase bg-light">Address</th>
                </tr>
                </thead>
                <tbody>
                @foreach($students as $item)
                    <tr>
{{--                        <td>--}}
{{--                            <div--}}
{{--                                class="rounded-circle d-flex justify-content-center align-items-center tw-w-6 tw-h-6 tw-bg-blue-100 tw-p-4 tw-text-xs text-primary fw-bold">--}}
{{--                                <span>{{ \Illuminate\Support\Str::of($item->user->name)->substr(0,2) }}</span>--}}
{{--                            </div>--}}
{{--                        </td>--}}
                        <td>
                            <img src="{{$item->personal_information_url}}" alt="no_image"
                                 class="img-fluid img-thumbnail rounded-circle tw-h-10 tw-w-10"/>
                        </td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->user->phone_number }}</td>
                        <td>{{ optional($item->myFaculty)->name }}</td>
                        <td>{{ $item->address }}</td>
                    </tr>
                @endforeach

                </tbody>
            </table>
           <div class="mt-4 d-flex justify-content-between align-items-center px-4 pb-4">
            <div>Showing {{ $students->firstItem() }} to {{ $students->lastItem() }} of {{ $students->total() }}</div>
            <div>
                {{ $students->links() }}
            </div>
           </div>
        </div>
    @else
        <div class="alert alert-info">
            No records available
        </div>
    @endif


</div>
