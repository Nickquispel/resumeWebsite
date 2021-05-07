<?php

namespace App\Models;




use Illuminate\Support\Facades\Storage;

class LinkedinResume
{
    /**
     * @var $resume
     */
    public $resume;

    public function __construct()
    {
        $this->resume = json_decode(Storage::disk('local')->get('/public/json/Nick_Quispel.resume.json'),false);
    }

    public function GetFullName() : string
    {
        return $this->resume->basics->name;
    }

    public function GetFirstName() : string
    {
        $name = explode(' ',$this->resume->basics->name);
        return $name[0];
    }

    public function GetLastName() : string
    {
        $name = explode(' ',$this->resume->basics->name);
        return $name[1];
    }

    public function GetEmail() : string
    {
        return $this->resume->basics->email;
    }

    public function GetPhone() : string
    {
        return $this->resume->basics->phone;
    }

    public function GetWork() : array
    {
        return $this->resume->work;
    }

    public function GetEducation() : array
    {
        return $this->resume->education;
    }

    public function GetSkills() : array
    {
        return $this->resume->skills;
    }

}
