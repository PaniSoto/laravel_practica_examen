<?php

namespace App\Livewire;

use App\Models\Dieta;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class DietaComponent extends Component
{
    public $dieta = [];
    public $user_id;
    public $title;
    public $description;
    public $totalCalories;
    public $date;

    public $miDieta;
    public $modal = false;

    public $viewModal = false;
    public $viewDieta = [];


    public function mount()
    {
        $this->dieta = Dieta::where('user_id', Auth::id())->get();
    }

    public function render()
    {
        return view('livewire.dieta-component');
    }

    public function clearFields()
    {
        $this->title = '';
        $this->description = '';
        $this->totalCalories = '';
        $this->date = '';
        $this->user_id = '';
    }

    public function openCreateModal(Dieta $dietas = null)
    {
        if ($dietas) {
            $this->miDieta = $dietas;

            $this->user_id = $dietas->user_id;
            $this->title = $dietas->title;
            $this->description = $dietas->description;
            $this->totalCalories = $dietas->totalCalories;
            $this->date = $dietas->date;
        } else {
            $this->clearFields();
        }

        $this->modal = true;
    }

    public function closeCreateModal()
    {
        $this->clearFields();
        $this->modal = false;
    }

    //Funcion para obtener dietas
    public function getDietas()
    {
        return Dieta::where('user_id', Auth::user()->id)->get();
    }
    //Funcion para crear dieta
    public function createorUpdateDieta()
    {

        if ($this->miDieta->id) {
            $dieta = Dieta::find($this->miDieta->id);
            $dieta->update([
                'user_id' => $this->user_id,
                'title' => $this->title,
                'description' => $this->description,
                'totalCalories' => $this->totalCalories,
                'date' => $this->date
            ]);
        } else {
            $newDieta = new Dieta();

            $newDieta->title = $this->title;
            $newDieta->description = $this->description;
            $newDieta->totalCalories = $this->totalCalories;
            $newDieta->date = $this->date;
            $newDieta->user_id = $this->user_id;

            $newDieta->save();
        }

        $this->clearFields();

        $this->modal = false;

        $this->dieta = $this->getDietas();
    }

    public function deleteDieta(Dieta $dieta)
    {
        $dieta->delete();
        $this->dieta = $this->getDietas()->sortByDesc('id');
    }

    public function openViewModal(Dieta $dieta)
    {

        $this->viewDieta = [
            'user_id' => $dieta->id,
            'title' => $dieta->title,
            'description' => $dieta->description,
            'totalCalories' => $dieta->totalCalories,
            'date' => $dieta->date
        ];

        $this->viewModal = true;
    }

    public function closeViewModal()
    {
        $this->viewModal = false;
        $this->viewDieta = [];
    }
}
