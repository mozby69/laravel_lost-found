<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\FoundItem;

class FoundPage extends Component
{
    use WithFileUploads;

    public $category;
    public $date;
    public $contactnumber;
    public $email;
    public $description;
    public $image;

    protected $rules = [
        'category' => 'required|string|max:255',
        'date' => 'required|date',
        'contactnumber' => 'required|string|max:15',
        'email' => 'required|email|max:255',
        'description' => 'required|string',
        'image' => 'required|image|max:1024', // max 1MB
    ];

    public function submit()
    {
        $this->validate();

        $imagePath = $this->image->store('found-items', 'public');

        FoundItem::create([
            'category' => $this->category,
            'date' => $this->date,
            'contactnumber' => $this->contactnumber,
            'email' => $this->email,
            'description' => $this->description,
            'image' => $imagePath,
        ]);

        session()->flash('message', 'Item successfully reported as found.');

        // Reset form fields
        $this->reset();
    }

    public function render()
    {
        return view('livewire.found-page');
    }
}
