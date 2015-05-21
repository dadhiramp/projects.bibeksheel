<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProjectRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'project_title'=>'required',
			'full_name'=>'required',
			'email'=>'required|email',
			'mobile_no'=>'required',
			'project_need'=>'required',
			'project_support'=>'required',
			'project_complement'=>'required',
			'project_description'=>'required',
			'project_objective'=>'required',
			'project_activities'=>'required',
			'project_audience'=>'required',
			'project_location'=>'required',
			'project_short_term'=>'required',
			'project_long_term'=>'required',
			'project_national'=>'required',	
			'project_partners'=>'required',	
			'project_roles'=>'required',	
			'project_sustainability'=>'required',	
			'project_budget_requirement'=>'required',	
			'project_estimation'=>'required',	

		];
	}

}
