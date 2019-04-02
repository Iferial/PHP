<?php

class Driver extends Worker {
    private $experience;
    private $category;

    public function setExperience($experience): void
    {
        $this->experience = $experience;
    }
    public function getExperience()
    {
        return $this->experience;
    }
    public function setCategory($category): void
    {
        $this->category = $category;
    }
    public function getCategory()
    {
        return $this->category;
    }
}