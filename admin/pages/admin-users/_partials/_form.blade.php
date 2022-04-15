@include('admin.layout.alerts')
<div class="row">
    <div class="mb-3 col-md">
        {{ Form::label('title','Titre') }}
        {{ Form::select('title',['Monsieur'=> 'Monsieur','Madame'=> 'Madame'],$adminUser->title ?? '',['class'=> 'form-control','required']) }}
    </div>
    <div class="mb-3 col-md">
        {{ Form::label('first_name','Prénom') }}
        {{ Form::text('first_name',$adminUser->first_name ?? '',['class'=> 'form-control','required']) }}
    </div>
    <div class="mb-3 col-md">
        {{ Form::label('last_name','Nom de famille') }}
        {{ Form::text('last_name',$adminUser->last_name ?? '',['class'=> 'form-control','required']) }}
    </div>
</div>

<div class="mb-3">
    {{ Form::label('email','Email') }}
    {{ Form::email('email',$adminUser->email ?? '',['class'=> 'form-control','required']) }}
</div>

<div class="mb-3">
    {{ Form::label('type','Type de compte') }}
    {{ Form::select('type',['admin'=> 'Administrateur','default'=> 'Utilisateur'],$adminUser->type ?? '',['class'=> 'form-control','required']) }}
</div>
