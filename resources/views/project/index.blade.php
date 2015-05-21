@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 id="panel-title" class="panel-title">Project Application</h3>
				</div>

				<div class="panel-body">
				{!! Form::open(array('url' => 'project')) !!}
				    <div class="form-group">
				    {!!Form::label('project_title', 'Project Title')!!}
				    {!!Form::text('project_title', array('class'=>'form-control','placeholder'=>'Project Title'))!!}
				  </div>
				  <div class="form-group">
				    {!!Form::label('full_name', 'Full Namme')!!}
				    {!!Form::text('full_name', array('class'=>'form-control','placeholder'=>'Full Name'))!!}
				  </div>
				  <div class="form-group">
				    {!!Form::label('full_name', 'Full Namme')!!}
				    {!!Form::text('full_name', array('class'=>'form-control','placeholder'=>'Full Name'))!!}
				  </div>
				  <div class="form-group">
				    {!!Form::label('email', 'Email')!!}
				    {!!Form::text('email', array('class'=>'form-control','placeholder'=>'Email'))!!}
				  </div>
				  <div class="form-group">
				    {!!Form::label('mobile_no', 'Mobile')!!}
				    {!!Form::text('mobile_no', array('class'=>'form-control','placeholder'=>'Mobile'))!!}
				  </div>
				  <div class="form-group">
				    {!!Form::label('project_need', 'Project Need')!!}
				    {!!Form::text('project_need', array('class'=>'form-control','placeholder'=>'Project Need'))!!}
				  </div>
				  <div class="form-group">
				    {!!Form::label('project_support', 'Project Support')!!}
				    {!!Form::text('project_support', array('class'=>'form-control','placeholder'=>'Project Support'))!!}
				  </div>
				  <div class="form-group">
				    {!!Form::label('project_complement', 'Project Complement')!!}
				    {!!Form::text('project_complement', array('class'=>'form-control','placeholder'=>'Project Complement'))!!}
				  </div>	
				  <div class="form-group">
				    {!!Form::label('project_description', 'Project Description')!!}
				    {!!Form::text('project_description', array('class'=>'form-control','placeholder'=>'Project Description'))!!}
				  </div>	
				  <div class="form-group">
				    {!!Form::label('project_objective', 'Project Objective')!!}
				    {!!Form::text('project_objective', array('class'=>'form-control','placeholder'=>'Project Objective'))!!}
				  </div>
				  <div class="form-group">
				    {!!Form::label('project_activities', 'Project Activities')!!}
				    {!!Form::text('project_activities', array('class'=>'form-control','placeholder'=>'Project Activities'))!!}
				  </div>
				  <div class="form-group">
				    {!!Form::label('project_audience', 'Project Audience')!!}
				    {!!Form::text('project_audience', array('class'=>'form-control','placeholder'=>'Project Audience'))!!}
				  </div>
				  <div class="form-group">
				    {!!Form::label('project_location', 'Project Location')!!}
				    {!!Form::text('project_location', array('class'=>'form-control','placeholder'=>'Project Location'))!!}
				  </div>
				  <div class="form-group">
				    {!!Form::label('project_short_term', 'Project Short Term')!!}
				    {!!Form::text('project_short_term', array('class'=>'form-control','placeholder'=>'Project Short Term'))!!}
				  </div>
				  <div class="form-group">
				    {!!Form::label('project_long_term', 'Project Long Term')!!}
				    {!!Form::text('project_long_term', array('class'=>'form-control','placeholder'=>'Project Long Term'))!!}
				  </div>
				  <div class="form-group">
				    {!!Form::label('project_national', 'Project National')!!}
				    {!!Form::text('project_national', array('class'=>'form-control','placeholder'=>'Project National'))!!}
				  </div>
				  <div class="form-group">
				    {!!Form::label('project_partners', 'Project Partners')!!}
				    {!!Form::text('project_partners', array('class'=>'form-control','placeholder'=>'Project Partners'))!!}
				  </div>
				  <div class="form-group">
				    {!!Form::label('project_roles', 'Project Roles')!!}
				    {!!Form::text('project_roles', array('class'=>'form-control','placeholder'=>'Project Roles'))!!}
				  </div>
				  <div class="form-group">
				    {!!Form::label('project_sustainability', 'Project Sustainability')!!}
				    {!!Form::text('project_sustainability', array('class'=>'form-control','placeholder'=>'Project Sustainability'))!!}
				  </div>
				  <div class="form-group">
				    {!!Form::label('project_work_plan', 'Project Work Plan')!!}
				    {!!Form::text('project_work_plan', array('class'=>'form-control','placeholder'=>'Project Work Plan'))!!}
				  </div>
				  <div class="form-group">
				    {!!Form::label('project_budget_requirement', 'Project Budget Requirement')!!}
				    {!!Form::text('project_budget_requirement', array('class'=>'form-control','placeholder'=>'Project Budget Requirement'))!!}
				  </div>
				  <div class="form-group">
				    {!!Form::label('project_estimation', 'Project Estimation')!!}
				    {!!Form::text('project_estimation', array('class'=>'form-control','placeholder'=>'Project Estimation'))!!}
				  </div>


				{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>

@endsection