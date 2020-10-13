<div class="h-100">
    <div class="row h-100 no-gutters">
    	<div class="col-3">
    		<div class="form-group">
    			<input type="text" name="buscar_nombre" class="form-control-sm col" placeholder="Buscar usuario...">
    		</div>
    		<ul class="list-group">
    			@foreach($usuarios as $usuario)
    				<a href="#" class="list-group-item list-group-item-action mt-1 {{ ($usuario_activo === $usuario->id)?'active':'' }}" wire:click="activo({{ $usuario->id }})">
    					<img src="https://www.shareicon.net/data/2016/09/01/822711_user_512x512.png" class="img-thumbnail rounded-circle" width="100px">
					    <div class="d-flex w-100 justify-content-between">
					    	<h5 class="mb-1">{{ $usuario->name }}</h5>
					    	<small>{{ $usuario->created_at }}</small>
					    </div>
					    <small>{{ $usuario->email }}</small>
					</a>
    			@endforeach
    		</ul>
    	</div>
    	<div class="col-9 h-100">
    		@if($usuario_activo !== 0)
    			<div class="card h-100">
    				<div class="card-header">
    					Conversación Activa con: {{ $usuario_activo_nombre }}
    				</div>
    				<div class="card-body">
    					<ul class="list-unstyled">
							<li class="media mb-2">
						    	<img src="https://www.shareicon.net/data/2016/09/01/822711_user_512x512.png" class="img-thumbnail rounded-circle" class="align-self-center mr-3" alt="..." width="33px">
						    	<div class="media-body card">
						      		<h5 class="mt-0 mb-1">List-based media object</h5>
						      		Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
						    	</div>
						  	</li>
							<li class="media mb-2">
							    <div class="media-body card">
							      <h5 class="mt-0 mb-1 ml-auto">List-based media object</h5>
							      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
							    </div>
							    <img src="https://www.shareicon.net/data/2016/09/01/822711_user_512x512.png" class="img-thumbnail rounded-circle" class="align-self-center mr-3" alt="..." width="33px">
							</li>
						</ul>
    				</div>
    				<div class="card-footer">
    					<div class="form-group row">
    						<input type="text" name="" class="form-control col" placeholder="Escribe un mensaje...">
    						<button class="btn btn-success col-auto">Enviar</button>
    					</div>
    				</div>
    			</div>
    		@endif
    	</div>
    </div>

</div>
