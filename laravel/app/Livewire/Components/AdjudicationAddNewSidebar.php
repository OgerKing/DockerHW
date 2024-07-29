<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\Adjudication;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\QueryException;
use App\Exceptions\ValidationException;
use Exception;




class AdjudicationAddNewSidebar extends Component
{
    public $title;
    public $prefix;
    public $nickname;
    public $status;
    public $bureau;
    public $mapping_zones = [];
    public $datum = 'NAD 27';
    public $boundary_link;

    protected $listeners = ['addAdjudicationStatus', 'addAdjudicationBureau'];

    protected $rules = [
        'title' => 'required|string|max:255',
        'prefix' => 'required|string|max:255',
        'nickname' => 'required|string|max:255',
        // 'status' => 'required|integer',
        // 'bureau' => 'required|integer',
        // 'mapping_zones' => 'array',
        'boundary_link' => 'required|string|max:255',
    ];

    //status dropdown select
    public function addAdjudicationStatus($value)
    {
        $this->status = $value;
    }

    //bureau dropdown select
    public function addAdjudicationBureau($value)
    {
        $this->bureau = $value;
    }

    //submit form
    public function submit()
    {
        try {
            $this->validate();

            $userId = auth()->user()->id;

            Adjudication::create([
                'adjudication_name' => $this->title,
                'prefix' => $this->prefix,
                'adjudication_nickname' => $this->nickname,
                'adjudication_status_id' => 1,
                'adjudication_district_id' => 1,
                'bureau_id' => 1,
                'coordinate_system' => 'test coord system',
                // 'mapping_zone_west' => in_array('West', $this->mapping_zones),
                // 'mapping_zone_central' => in_array('Central', $this->mapping_zones),
                // 'mapping_zone_east' => in_array('East', $this->mapping_zones),
                // 'datum' => $this->datum,
                'adjudication_boundary_map_link' => $this->boundary_link,
                'created_by' => $userId,
                'updated_by' => $userId,
                // 'adjudication_courts_id' => 1,
                // 'adjudication_document_id' => 1,
                // 'adjudication_document_type_id' => 1,
                // 'adjudication_hydro_boundary_type_id' => 1,
                // 'adjudication_section_status_id' => 1,
                // 'adjudication_section_type_id' => 1,
                // 'adjudication_sections_id' => 1,
                // 'court_id' => 1,
                'hydrographic_survey_description' => 'test description',
            ]);

            
            session()->flash('status', 'Adjudication successfully created.');
            session()->flash('status_type', 'success'); // Flash success type
            $this->dispatch('flashMessage', session('status'), session('status_type'));

            $this->reset();
        } catch (ValidationException $e) {
            session()->flash('error', 'Validation error: ' . $e->getMessage());
            $this->dispatch('flashMessage', session('error'), 'error');
        } catch (QueryException $e) {
            // Catch specific database query exceptions
            session()->flash('error', 'Database error: ' . $e->getMessage());
            $this->dispatch('flashMessage', session('error'), 'error');
        } catch (Exception $e) {
            // Catch any other general exceptions
            session()->flash('error', 'An error occurred: ' . $e->getMessage());
            $this->dispatch('flashMessage', session('error'), 'error');
        }
    }
    public function render()
    {
        return view('livewire.components.adjudication-add-new-sidebar');
    }
}
