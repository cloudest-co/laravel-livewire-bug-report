<?php

use Livewire\Volt\Component;

new class extends Component {
    public $count = 0;

    public function mount()
    {
        
    }

    public function increment()
    {
        $this->count++;
    }
} ?>

<div>
    <h1>{{ $count }}</h1>
    {{ $notDefined }}
    <button wire:click="increment">+</button>
</div>
