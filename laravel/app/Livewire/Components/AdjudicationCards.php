<?php

namespace App\Livewire\Components;
use App\Models\AdjudicationStatus; 
use App\Models\Adjudication;
use App\Models\AdjudicationCourt;
use App\Models\Bureau; 
use App\Models\Court;




use Livewire\Component;

class AdjudicationCards extends Component
{
    public $adjudication;
    public $adjudicationStatus;
    public $bureau;
    public $courtName;

    public $listeners = ['refreshComponent' => '$refresh'];

    public function mount($adjudication)
    {
        $this->adjudication = $adjudication;
        $this->adjudicationStatus =  $adjudication->adjudicationStatus;
        $this->bureau = $adjudication->bureau;
        $this->courtName = 'NM Fifth Judicial District Court';
        // $this->courtName = $adjudication->adjudicationCourts->court->court_name;

     
    }

    //on click of edit in menu, emit the adjudicationId to the editAdjudication listener in AdjudicationEditSidebar.php
    public function emitId($adjudicationId)
    {
        $this->dispatch('editAdjudication', $adjudicationId);
    }

 
    public function render()
    {
        return view('livewire.components.adjudication-cards');
    }
}
