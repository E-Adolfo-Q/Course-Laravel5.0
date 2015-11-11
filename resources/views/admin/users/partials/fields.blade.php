                 
                 <div class="form-group">
                   {!! Form::label('email','Correo Electrónico',['class' => 'control-label']) !!}
                   {!! Form::text('email',null,['class'=>'form-control','placeholder'=>'Por favor Introduzca su E-mail']) !!}
                  </div>
                  <div class="form-group">
                   {!! Form::label('password','contraseña',['class' => 'control-label']) !!}
                   {!! Form::password('password',['class'=>'form-control']) !!}
                  </div>
                  <div class="form-group">
                   {!! Form::label('first_name','Primer Nombre',['class' => 'control-label']) !!}
                   {!! Form::text('first_name',null,['class'=>'form-control']) !!}
                  </div>
                  <div class="form-group">
                   {!! Form::label('last_name','Apellido',['class' => 'control-label']) !!}
                   {!! Form::text('last_name',null,['class'=>'form-control']) !!}
                  </div>
                <div class="form-group">
                   {!! Form::label('Tipo_Usuario','Tipo_usuario',['class' => 'control-label'])!!}
                   {!! Form::select('type',[''=>'seleccione tipo','user'=>'Usuario','admin'=>'Administrador'],null,['class'=>'form-control']) !!}
                </div>