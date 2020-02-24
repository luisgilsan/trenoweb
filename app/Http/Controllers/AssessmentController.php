<?php

namespace App\Http\Controllers;

use App\User;
use App\Assessment;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Webmozart\Assert\Assert;

class AssessmentController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:assessment.create')->only(['create','store']);
        $this->middleware(['can:assessment.index','verified'])->only(['index']);
        $this->middleware('can:assessment.edit')->only(['edit','update']);
        $this->middleware('can:assessment.show')->only(['show']);
        $this->middleware('can:assessment.destroy')->only(['destroy']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assessments = Assessment::paginate();

        return view('assessments.index', compact('assessments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        $users = User::where('email_verified_at','!=',null)->get();


        $vect = [];
        
        foreach ($users as $user)
        { 
            $vect += [ $user->id => $user->name ];
        }
        
        // $vect = [0 => 'Jose Angel'];
        return view('assessments.create',compact('vect'));
    
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $obj_to_save = $request->all();
        $current_date_time = Carbon::now()->toDateTimeString();

        $obj_to_save += [ 'measurement_date' => $current_date_time ];
        $assessment = Assessment::create($obj_to_save);
        echo "guardado en bd";
        echo "no guardado";
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function show(Assessment $assessment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assessment $assessment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assessment $assessment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Assessment  $assessment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assessment $assessment)
    {
        //
    }
}