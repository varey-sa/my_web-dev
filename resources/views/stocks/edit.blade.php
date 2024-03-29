@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Stock
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($stock, ['route' => ['stocks.update', $stock->id], 'method' => 'patch' , 'enctype'=>'multipart/form-data']) !!}

                        @include('stocks.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection
