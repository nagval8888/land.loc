<div class="content-wrapper">
    <section class="content-header">
        <h1>Text Editors <small>Advanced form element</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Menu</a></li>
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
                        <h3 class="box-title">Menu</h3>
                        <a class="col-lg-offset-1 btn btn-success" href="{{ route('menu.create') }}">
                            Add New Menu Item
                        </a>
                    </div>
                    <div class="box">
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead>
                                <tr class="active">
                                    <th>№</th>
                                    <th>Titile</th>
                                    <th>Alias</th>
                                    <th>Created At</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($menus as $menu)
                                    <tr class="success">
                                        <td class="warning">{{ $menu->id }}</td>
                                        <td>{{ $menu->title }}</td>
                                        <td>{{ $menu->alias }}</td>
                                        <td>{{ $menu->created_at }}</td>
                                        <td>
                                            <a class="btn btn-warning" href="{{ route('menu.edit', $menu->id) }}">
                                                <i class="fa fa-fw fa-edit"></i> Edit
                                            </a>
                                        </td>
                                        <td>
                                            <form id="delete-form-{{ $menu->id }}" action="{{ route('menu.destroy', $menu->id) }}"
                                                method="post" style="display: none">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                            </form>
                                            <a onclick="
                                                if ( confirm('Are you sure, You want to delete this ?') ) {
                                                    event.preventDefault();
                                                    document.getElementById('delete-form-{{ $menu->id }}').submit();
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
                                    <th>Title</th>
                                    <th>Alias</th>
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
