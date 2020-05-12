<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\User;

class ConnectedUser extends Component
{
    /**
     * The connected user
     * 
     * @var App\User
     */
    public $user;

    /**
     * Create a new component instance.
     *
     * @param  \App\User $user
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.connected-user');
    }

    /**
     * Determine if the user is connected
     * 
     * @return bool
     */
    public function isConnected()
    {
        return ($this->user === User::class);
    }
}
