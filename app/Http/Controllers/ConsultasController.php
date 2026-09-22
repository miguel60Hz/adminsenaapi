<?php

namespace App\Http\Controllers;
use App\Models\Apprentice;
use App\Models\Computer;
use App\Models\Course;
use App\Models\TrainingCenter;
use App\Models\Teacher;
use App\Models\Area;

use Illuminate\Http\Request;

class ConsultasController extends Controller
{

    public function consultasAreaTeacher()
    {
        $area = Area::with(['teachers'])->get();

        return $area;
    }

    public function consultasTeacherArea()
    {
        $teacher = Teacher::with(['area'])->get();

        return $teacher;
    }

    public function consultasTrainingCenterTeacher()
    {
        $trainingCenter = TrainingCenter::with(['teachers'])->get();

        return $trainingCenter;
    }

    public function consultasTeacherTrainingCenter()
    {
        $teacher = Teacher::with(['trainingCenter'])->get();

        return $teacher;
    }

    public function consultasTrainingCenterCourse()
    {
        $trainingCenter = TrainingCenter::with(['courses'])->get();

        return $trainingCenter;
    }

    public function consultasCourseTrainingCenter()
    {
        $course = Course::with(['trainingCenter'])->get();

        return $course;
    }

    public function consultasComputerApprentice()
    {
        $computer = Computer::with(['apprentice'])->get();

        return $computer;
    }

    public function consultasApprenticeComputer()
    {
        $apprentice = Apprentice::with(['computer'])->get();

        return $apprentice;
    }

    public function consultasCourseApprentice()
    {
        $course = Course::with(['apprentices'])->get();

        return $course;
    }

    public function consultasApprenticeCourse()
    {
        $apprentice = Apprentice::with(['course'])->get();

        return $apprentice;
    }

    public function consultasAreaCourse()
    {
        $area = Area::with(['courses'])->get();

        return $area;
    }

    public function consultasCourseArea()
    {
        $course = Course::with(['area'])->get();

        return $course;
    }

    public function consultasCourseTeacher()
    {
        $course = Course::with(['teachers'])->get();

        return $course;
    }

    public function consultasTeacherCourse()
    {
        $teacher = Teacher::with(['courses'])->get();

        return $teacher;
    }
}