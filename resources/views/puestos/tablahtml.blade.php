
<a href="{{route('puestos.create')}}" class="btn button btn-dark" style="margin-bottom: 15px;" role="button">Insertar</a>
<div class="table-md">
    <table class="table table-primary">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">ID Puesto</th>
                <th scope="col">Nombre Puesto</th>
                <th scope="col">Tipo</th>
                <th>EDITAR</th>
                <th>ELIMINAR</th>
                <th>VER</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($puestos as $puesto)
            <tr>
                <td scope="row">{{ $puesto->id }}</td>
                <td>{{ $puesto->idpuesto }}</td>
                <td>{{ $puesto->nombrepuesto }}</td>
                <td>{{ $puesto->tipo }}</td>
                <td><a href="{{route('puestos.edit',$puesto->id)}}" class="btn button btn-success">Editar</a></td>
                <td><a href="{{route('puestos.show',$puesto->id)}}" class="btn button btn-danger">Eliminar</a></td>
                <td><a href="{{route('puestos.show',$puesto->id)}}" class="btn button btn-primary">Ver</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>