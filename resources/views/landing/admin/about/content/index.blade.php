<div class="content-wrapper">
    <section class="content-header">
        <h1>Text Editors <small>Advanced form element</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> About</a></li>
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
                        <h3 class="box-title">About - Page</h3>
                    </div>
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr class="active">
                                    <th>№</th>
                                    <th>Name</th>
                                    <th>Alias</th>
                                    <th>Image</th>
                                    <th>Created At</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr class="success">
                                        <td class="warning">{{ $about->id }}</td>
                                        <td>{{ $about->name }}</td>
                                        <td>{{ $about->alias }}</td>
                                        <td>
                                            <img src="{{ asset($about->image) }}" alt="" width="100">
                                        </td>
                                        <td>{{ $about->created_at }}</td>
                                        <td>
                                            <a class="btn btn-warning" href="{{ route('about.edit', $about->id) }}">
                                                <i class="fa fa-fw fa-edit"></i> Edit
                                            </a>
                                        </td>
                                        <td>
                                                <form id="delete-form-{{ $about->id }}" action="{{ route('home.destroy', $about->id) }}"
                                                    method="post" style="display: none">
                                                    {{ csrf_field() }}
                                                    {{ method_field('DELETE') }}
                                                </form>
                                                <a onclick="
                                                    if ( confirm('Are you sure, You want to delete this ?') ) {
                                                        event.preventDefault();
                                                        document.getElementById('delete-form-{{ $about->id }}').submit();
                                                    } else {
                                                        event.preventDefault();
                                                    }" class="btn btn-danger" href="">
                                                    <i class="fa fa-fw fa-trash"></i> Delete
                                                </a>
                                            </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                <tr class="active">
                                    <th>№</th>
                                    <th>Name</th>
                                    <th>Alias</th>
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
