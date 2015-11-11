@extends('app')

@section('content')
 <div class="container">
 	<div class="row">
       <div class="col-md-10 col-md-offset-1">
       	 <div class="panel panel-default">
            <div class="panel-heading">Usuario</div> 
             @if (Session::has('message'))
               <p class="alert alert-success">{{ Session::get('message') }} </p>             
             @endif

            <div class="panel-body">
             <p>
               <a class="btn btn-info" href="{{ route('admin.users.create') }}" role="button">
                   Nuevo Usuario
               </a>
             </p> 	
                <p>Hay {{ $users->total() }} Usuarios </p> 
                 @include('admin.users.partials.table') 
               {!! $users->render() !!}
            </div>
       	 </div>
       </div>
 	</div>
 </div>
 {!! Form::open(['route' => ['admin.users.destroy',':USER_ID'],'method' => 'DELETE','id'=>'form-delete']) !!}
 {!! Form::close() !!} 
@endsection  
