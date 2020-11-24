<?php


class Dish
{
    private string $model;

    public function setDish($model){
        $this->model = $model;
    }

    public function getDish(){
        return $this->model;
    }
}