<?php

namespace App\Livewire;

use App\Models\Team;
use Livewire\Component;

class ShowTeam extends Component
{
    public function render()
    {
        $team = Team::latest()->get();
        // dd($team);
        return view('livewire.show-team', [
            'team' => $team,
        ]);
    }
}