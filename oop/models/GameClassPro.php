<?php

class GameClassPro extends GameClass
{

    function GameClassPro() {
        $this->speed = 40;
    }

    public function render() {
        $this->color = 'red';

        parent::render();
    }

}