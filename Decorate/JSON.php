<?php
require_once './Decorator.php';
class JSON extends Decorator
{
    public function render()
    {
        $output = $this->wapper->render();

        return json_encode($output);
    }
}
