<div class="content-wrapper">
    <section class="content-header">
        <h1>Text Editors <small>Advanced form element</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Team</a></li>
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
                        <h3 class="box-title">Team</h3>
                        <a class="col-lg-offset-1 btn btn-success" href="{{ route('team.create') }}">
                            Add New Team Agent
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
                                    <th>Position</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($teams as $team)
                                    <tr class="success">
                                        <td class="warning">{{ $team->id }}</td>
                                        <td>{{ $team->name }}</td>
                                        <td>{{ $team->position }}</td>
                                        <td>
                                            <img src="{{ asset($team->image) }}" alt="" width="100">
                                        </td>
                                        <td>{{ $team->created_at }}</td>
                                        <td>
                                            <a class="btn btn-warning" href="{{ route('team.edit', $team->id) }}">
                                                <i class="fa fa-fw fa-edit"></i> Edit
                                            </a>
                                        </td>
                                        <td>
                                            <form id="delete-form-{{ $team->id }}" action="{{ route('team.destroy', $team->id) }}"
                                                method="post" style="display: none">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>
                                            <a onclick="
                                                if ( confirm('Are you sure, You want to delete this ?') ) {
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $team->id }}').submit();
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
                                    <th>Position</th>
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
