<div>
    <div class="row">
        <div class="col-12">
            <button class="btn btn-primary">Nuevo cliente</button>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre</th>
                                <th>Telefono</th>
                                <th>Correo</th>
                                <th>RFC</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($clients as $client)
                                <td>{{ $client->id }}</td>
                                <td>{{ $client->first_name }} {{ $client->last_name }}</td>
                                <td>{{ $client->phone }}</td>
                                <td>{{ $client->email }}</td>
                                <td>{{ $client->rfc }}</td>
                                <td>
                                    <button class="btn btn-xs btn-primary" title="Editar cliente">
                                        <span class="fas fa-edit my-tooltip" title="Editar cliente"></span>
                                    </button>
                                </td>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
