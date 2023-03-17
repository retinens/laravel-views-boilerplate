@include('admin.layout.alerts')
<div class="row">
    <div class="mb-3 col-md">
        {{ Form::label('first_name','Prénom') }}
        {{ Form::text('first_name',$adminUser->first_name ?? '',['class'=> 'form-control','required']) }}
    </div>
    <div class="mb-3 col-md">
        {{ Form::label('last_name','Nom') }}
        {{ Form::text('last_name',$adminUser->last_name ?? '',['class'=> 'form-control','required']) }}
    </div>
</div>
<div class="mb-3">
    {{ Form::label('email','Email') }}
    {{ Form::email('email',$adminUser->email ?? '',['class'=> 'form-control','required']) }}
</div>
<div class="mb-3">
    {{ Form::label('type','Accès CMS') }}
    {{ Form::select('type',['admin'=> 'Oui','default'=> 'Non'],$adminUser->type ?? 'admin',['class'=> 'form-select','required']) }}
</div>
