<?php

class JsonTransformer extends Decorator
{
    public function render()
    {
        $output = $this->wapper->render();

        return json_encode($output);
    }
}
