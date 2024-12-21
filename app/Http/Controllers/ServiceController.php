<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function Service(){
        return view('services.service');
    }

    public function NursingCare(){
        return view('services.nursing-care');
    }

    public function CriticalCare(){
        return view('services.critical-care');
    }

    public function ICUNursing(){
        return view('services.icu-nursing');
    }

    public function AdvanceCare(){
        return view('services.advance-care');
    }
    
    public function BasicCare(){
        return view('services.basic-care');
    }

    public function ClinicalAttendant(){
        return view('services.clinical-attendant');
    }

    public function ShortTerm(){
        return view('services.short-term');
    }

    public function RehabilitationTherapies(){
        return view('services.rehabilitation-therapies');
    }

    public function Physiotherapy(){
        return view('services.physiotherapy');
    }

    public function STherapy(){
        return view('services.s-therapy');
    }

    public function HealthTests(){
        return view('services.health-tests');
    }

    public function Polysomnography (){
        return view('services.polysomnography');
    }

    public function ABG (){
        return view('services.abg');
    }

    public function AVPM (){
        return view('services.avpm');
    }

    public function XRay (){
        return view('services.x-ray');
    }

    public function Holter (){
        return view('services.holter');
    }

    public function Telemedicine (){
        return view('services.telemedicine');
    }

    public function Hospice (){
        return view('services.hospice');
    }

    public function SeniorCare (){
        return view('services.senior-care');
    }

    public function SampleCollection (){
        return view('services.sample-collection');
    }
}
