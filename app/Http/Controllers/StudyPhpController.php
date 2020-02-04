<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudyPhpController extends Controller
{
    public function phpinfo()
    {
      return view('studyPhp.phpinfo');
    }
    public function gettype()
    {
     // $type=  gettype('pi');
     $type=['lll',1,2.3];
     // unset($type[1]);
     $type[]=6;
     $type[1]=0;

      return view('studyPhp.gettype',compact('type'));
    }
}
