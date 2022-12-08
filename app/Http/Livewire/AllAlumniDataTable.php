<?php

namespace App\Http\Livewire;

use App\Models\Faculty;
use App\Models\PersonalInformation;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class AllAlumniDataTable extends Component
{
    public $faculties;

    public $selectedFaculty;
    public $search;

    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    protected $queryString = [
        'search' => ['except' => ''],
        'selectedFaculty' => ['except' => ''],
    ];

    public function mount()
    {
        $this->faculties = Faculty::query()->latest()->get();
    }

    public function booted()
    {
        $this->selectedFaculty = $this->selectedFaculty ?? optional(auth()->user()->personalInformation)->faculty;
    }

    public function render()
    {
        $students = PersonalInformation::with(['myFaculty', 'user'])
            ->where('user_id', '!=', auth()->id())
            ->when($this->search, function (Builder $builder) {
                $builder->where(function (Builder $builder) {
                    $builder->whereHas('user', function (Builder $builder) {
                        $builder->where('first_name', 'LIKE', '%' . $this->search . '%')
                            ->orWhere('last_name', 'LIKE', '%' . $this->search . '%')
                            ->orWhere('phone_number', 'LIKE', '%' . $this->search . '%');
                    })->orWhereHas('myFaculty', function (Builder $builder) {
                        $builder->where('name', 'LIKE', '%' . $this->search . '%');
                    });
                });
            })
            ->when($this->selectedFaculty, function (Builder $builder) {
                $builder->where('faculty', '=', $this->selectedFaculty);
            })
            ->latest()
            ->paginate();

        return view('livewire.all-alumni-data-table', [
            'students' => $students
        ]);
    }
}
