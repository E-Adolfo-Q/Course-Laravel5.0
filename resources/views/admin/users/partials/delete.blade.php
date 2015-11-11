{!! Form::open(['route' => ['admin.users.destroy', $user->id],'method' => 'DELETE' ]) !!}
  {!! Form::submit('Borrar Usuario',['class'=>'btn btn-danger','onclick'=>"return confirm('Seguro que desea Eliminar')"]) !!} 
{!! Form::close() !!}