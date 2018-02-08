@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Exame
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($exame, ['route' => ['exames.update', $exame->id], 'method' => 'patch']) !!}

                        @include('exames.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection