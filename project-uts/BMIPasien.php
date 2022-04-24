<?php

class Pasien
{
    public $name;
    public $pob;
    public $dob;
    public $email;
    public $gender;

    public function __construct($name, $pob, $dob, $email, $gender)
    {
        $this->name = $name;
        $this->pob = $pob;
        $this->dob = $dob;
        $this->email = $email;

        if ($gender === 'male') {
            $this->gender = "L";
        } else {
            $this->gender = "P";
        }
    }
}

class BMI
{
    public $weight;
    public $height;
    public $bmi;
    public $status;

    public function __construct($weight, $height)
    {
        $this->weight = $weight;
        $this->height = $height;
        $this->bmi = $this->getBmi();
        $this->status = $this->getStatus();
    }

    public function getBmi()
    {
        $weight = $this->weight;
        $height = $this->height;

        $cmToM = $height * 0.01;
        $kuadrat = $cmToM * $cmToM;
        $bagi = $weight / $kuadrat;

        return number_format($bagi, 2);
    }

    public function getStatus()
    {
        if ($this->bmi >= 30.0) {
            $status = "Kegemukan (Obesitas)";
        } elseif ($this->bmi >= 25.0 && $this->bmi <= 29.0) {
            $status = "Kelebihan Berat Badan";
        } elseif ($this->bmi >= 18.5 && $this->bmi <= 24.9) {
            $status = "Normal (Ideal)";
        } elseif ($this->bmi <= 18.4) {
            $status = "Kekurangan Berat Badan";
        }

        return $status;
    }
}

class BMIPasien
{
    public $bmi;
    public $pasien;

    public function __construct($name, $pob, $dob, $email, $gender, $weight, $height)
    {
        $this->bmi = new BMI($weight, $height);
        $this->pasien = new Pasien($name, $pob, $dob, $email, $gender);
    }
}