@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Prescrição
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($prescricao, ['route' => ['prescricaos.update', $prescricao->id], 'method' => 'patch']) !!}

                        @include('prescricaos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
