<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('project_title');
			$table->string('full_name');
			$table->string('email');
			$table->string('mobile_no');
			$table->string('project_need');
			$table->string('project_support');
			$table->string('project_complement');
			$table->string('project_description');
			$table->string('project_objective');
			$table->string('project_activities');
			$table->string('project_audience');
			$table->string('project_location');
			$table->string('project_short_term');
			$table->string('project_long_term');
			$table->string('project_national');
			$table->string('project_partners');
			$table->string('project_roles');
			$table->string('project_sustainability');
			$table->string('project_work_plan');
			$table->string('project_budget_requirement');
			$table->string('project_estimation');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('projects');
	}

}
