<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Comments extends Component
{
    public $comments = [
        [
            'id' => 1,
            'body' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aperiam consequuntur laudantium voluptatibus blanditiis exercitationem, repudiandae, consequatur facilis sint in non magni veritatis cupiditate enim tempore minima alias recusandae nam nulla.',
            'created_at' => '3 min ago',
            'creator' => 'Htoo Maung Thait',
            'image' => ''
        ]
    ];

    public $image = "";


    public function render()
    {
        return view('livewire.comments');
    }
}
