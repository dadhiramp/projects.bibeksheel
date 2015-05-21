<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Http\Requests\ProjectRequest;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Input;
use Session;
use App\Models\Project;

class ProjectController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view("project.create");
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(ProjectRequest $request)
	{
		$project = new Project;
		$project->project_title = Input::get('project_title');
		$project->full_name = Input::get('full_name');
		$project->email = Input::get('email');
		$project->mobile_no = Input::get('mobile_no');
		$project->project_need = Input::get('project_need');
		$project->project_support = Input::get('project_support');
		$project->project_complement = Input::get('project_complement');
		$project->project_description = Input::get('project_description');
		$project->project_objective = Input::get('project_objective');
		$project->project_activities = Input::get('project_activities');
		$project->project_audience = Input::get('project_audience');
		$project->project_location = Input::get('project_location');
		$project->project_short_term = Input::get('project_short_term');
		$project->project_long_term = Input::get('project_long_term');
		$project->project_national = Input::get('project_national');
		$project->project_partners = Input::get('project_partners');
		$project->project_roles = Input::get('project_roles');
		$project->project_sustainability = Input::get('project_sustainability');
		$project->project_work_plan = Input::get('project_work_plan');
		$project->project_budget_requirement = Input::get('project_budget_requirement');
		$project->project_estimation = Input::get('project_estimation');
		$project->save();

		// redirect
		Session::flash('message', 'Successfully created Project');
		return Redirect::to('/project/create');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
