<div class="content-wrapper">
    <section class="content-header">
        <h1>Text Editors <small>Advanced form element</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
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
                        <h3 class="box-title">Edit Home</h3>
                    </div>
                    @include('landing.includes.errors')

                    <!-- form start -->
                    <form role="form" action="{{ route('home.update', $home->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="box-body">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name">Home Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ $home->name }}"
                                        id="name" placeholder="Enter Name">
                                </div>

                                <div class="form-group">
                                    <label for="alias">Home Alias</label>
                                    <input type="text" class="form-control" name="alias" value="{{ $home->alias }}"
                                        id="alias" placeholder="Enter Alias">
                                </div>

                            </div>

                            {{--<div class="col-lg-6"><br>
                                <div class="form-group pull-right">
                                    <label for="image">File input</label>
                                    <input type="file" name="image" id="image">
                                </div>
                                <div class="clearfix"></div>
                            </div>--}}
                            <div class="col-lg-4 pull-right">
                                <div class="form-group">
                                <label for="image">Home Image</label>
                                <p>
                                    <input type="text" id="image" name="image" value="{{ $home->image }}">
                                    <img src="{{ asset($home->image) }}" alt="" width="100">
                                </p>
                                <p>
                                    <a href="" class="popup_selector btn btn-info" data-inputid="image">
                                        Select Home Image
                                    </a>
                                </p>
                            </div>
                            </div>
                        </div><br>

                        <div class="box">
                            <div class="box-header">
                                <h3 class="box-title">Write Home Text</h3>
                                <div class="pull-right box-tools">
                                    <button type="button" class="btn btn-default btn-sm" data-widget="collapse"
                                        data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="box-body pad">
                                <textarea id="editor1" name="text"
                                    style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                    {{ $home->text }}
                                </textarea>
                            </div>
                        </div>

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <br/><br/>
                            <a href="{{ route('home.index') }}" class="btn btn-warning">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
