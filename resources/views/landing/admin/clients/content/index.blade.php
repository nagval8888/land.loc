<div class="content-wrapper">
    <section class="content-header">
        <h1>Text Editors <small>Advanced form element</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Clients</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">Editors</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Clients</h3>
                        <a class="col-lg-offset-1 btn btn-success" href="{{ route('client.create') }}">
                            Add New Client
                        </a>
                    </div>
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr class="active">
                                    <th>№</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($clients as $client)
                                    <tr class="success">
                                        <td class="warning">{{ $client->id }}</td>
                                        <td>{{ $client->name }}</td>
                                        <td>
                                            <img src="{{ asset($client->image) }}" alt="" width="100">
                                        </td>
                                        <td>{{ $client->created_at }}</td>
                                        <td>
                                            <a class="btn btn-warning" href="{{ route('client.edit', $client->id) }}">
                                                <i class="fa fa-fw fa-edit"></i> Edit
                                            </a>
                                        </td>
                                        <td>
                                            <form id="delete-form-{{ $client->id }}" action="{{ route('client.destroy', $client->id) }}"
                                                method="post" style="display: none">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>
                                            <a onclick="
                                                if ( confirm('Are you sure, You want to delete this ?') ) {
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $client->id }}').submit();
                                                } else {
                                                    event.preventDefault();
                                                }" class="btn btn-danger" href="">
                                                <i class="fa fa-fw fa-trash"></i> Delete
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr class="active">
                                    <th>№</th>
                                    <th>Name</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div>
            </div>
        </div>
    </section>
</div>
