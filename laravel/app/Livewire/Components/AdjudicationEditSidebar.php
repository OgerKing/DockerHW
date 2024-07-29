<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Models\Adjudication;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use App\Exceptions\ValidationException;
use Exception;


class AdjudicationEditSidebar extends Component
{
    public $adjudicationId;
    public $title;
    public $prefix;
    public $nickname;
    public $status;
    public $bureau;
    public $mapping_zone_west;
    public $mapping_zone_central;
    public $mapping_zone_east;

    public $datum = 'NAD 27';
    public $boundary_link;
    public $isEditable = false;

    protected $listeners = ['editAdjudication'];

    protected $rules = [
        'title' => 'required|string|max:255',
        'prefix' => 'required|string|max:255',
        'nickname' => 'required|string|max:255',
        // 'status' => 'required|integer',
        // 'bureau' => 'required|integer',
        // 'mapping_zone_west' => 'boolean',
        // 'mapping_zone_central' => 'boolean',
        // 'mapping_zone_east' => 'boolean',
        'boundary_link' => 'required|string|max:255',
    ];

    // Listen for editAdjudication, grab the adjudicationId and load it.
    public function editAdjudication($adjudicationId)
    {
        try {
            $this->adjudicationId = $adjudicationId;
            $this->loadAdjudication();
            $this->dispatch('show-offcanvas');
        } catch (ModelNotFoundException $e) {
            session()->flash('status', 'Adjudication not found.');
            session()->flash('status_type', 'error');
            $this->dispatch('flashMessage', session('status'), session('status_type'));

     
        } catch (Exception $e) {
            session()->flash('status', 'An error occurred: ' . $e->getMessage());
            session()->flash('status_type', 'error');
            $this->dispatch('flashMessage', session('status'), session('status_type'));
        }
    }

    // Load the single adjudication by id.
    public function loadAdjudication()
    {
        try {
            $adjudication = Adjudication::findOrFail($this->adjudicationId);
            $this->title = $adjudication->adjudication_name;
            $this->prefix = $adjudication->prefix;
            $this->nickname = $adjudication->adjudication_nickname;
            $this->status = $adjudication->adjudication_status_id;
            $this->bureau = $adjudication->bureau_id;
            // $this->mapping_zone_west = $adjudication->mapping_zone_west;
            // $this->mapping_zone_central = $adjudication->mapping_zone_central;
            // $this->mapping_zone_east = $adjudication->mapping_zone_east;
            $this->boundary_link = $adjudication->adjudication_boundary_map_link;
        } catch (ModelNotFoundException $e) {
            session()->flash('status', 'Adjudication not found.');
            session()->flash('status_type', 'error');
            $this->dispatch('flashMessage', session('status'), session('status_type'));
        } catch (Exception $e) {
              session()->flash('status', 'An error occurred while loading the adjudication: ' . $e->getMessage());
            session()->flash('status_type', 'error');
            $this->dispatch('flashMessage', session('status'), session('status_type'));
            
        }
    }

    public function toggleEdit()
    {
        $this->isEditable = !$this->isEditable;
    }

    // Submit edit form.
    public function submit()
    {

        $this->validate();
        try {

            $userId = auth()->user()->id;
            $adjudication = Adjudication::findOrFail($this->adjudicationId);

            $adjudication->update([
                'adjudication_name' => $this->title,
                'prefix' => $this->prefix,
                'adjudication_nickname' => $this->nickname,
                'adjudication_status_id' => 1,
                'bureau_id' => 1,
                // 'mapping_zone_west' => $this->mapping_zone_west,
                // 'mapping_zone_central' => $this->mapping_zone_central,
                // 'mapping_zone_east' => $this->mapping_zone_east,
                'adjudication_boundary_map_link' => $this->boundary_link,
                'updated_by' => $userId,
            ]);

            session()->flash('success', 'Adjudication successfully updated.');
            $this->dispatch('flashMessage', session('success'), 'success');

            $this->isEditable = false;
            $this->dispatch('refreshComponent');

            // Close the offcanvas sidebar
            $this->dispatch('close-offcanvas');
        } catch (ModelNotFoundException $e) {
            session()->flash('error', 'Adjudication not found.');
            $this->dispatch('flashMessage', session('error'), 'error');
        } catch (QueryException $e) {
            session()->flash('error', 'Database error: ' . $e->getMessage());
            $this->dispatch('flashMessage', session('error'), 'error');
        }  catch (ValidationException $e) {
            session()->flash('error', 'Validation error: ' . $e->getMessage());
            $this->dispatch('flashMessage', session('error'), 'error');
        } catch (Exception $e) {
             session()->flash('error', 'An error occurred: ' . $e->getMessage());
            $this->dispatch('flashMessage', session('error'), 'error');

            
        }
    }
    public function render()
    {
        return view('livewire.components.adjudication-edit-sidebar');
    }
}
