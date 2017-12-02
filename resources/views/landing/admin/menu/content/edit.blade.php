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
                        <h3 class="box-title">Edit Menu</h3>
                    </div>
                    @include('landing.includes.errors')

                    @if ($menu)
                    <!-- form start -->
                    <form role="form" action="{{ route('menu.update', $menu->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="box-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="title">Menu Title</label>
                                        <input type="text" class="form-control" name="title" value="{{ $menu->title }}"
                                            id="title" placeholder="Enter Title">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="alias">Menu Icon</label>
                                        <input type="text" class="form-control" name="alias" value="{{ $menu->alias }}"
                                            id="alias" placeholder="Enter Alias">
                                    </div>
                                </div>
                            </div>

                            <div class="box-footer col-lg-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <br/><br/>
                                <a href="{{ route('menu.index') }}" class="btn btn-warning">Back</a>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
