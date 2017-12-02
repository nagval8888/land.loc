<div class="content-wrapper">
    <section class="content-header">
        <h1>Text Editors <small>Advanced form element</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Service</a></li>
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
                        <h3 class="box-title">Edit Service</h3>
                    </div>
                    @include('landing.includes.errors')

                    @if ($service)
                    <!-- form start -->
                    <form role="form" action="{{ route('service.update', $service->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="box-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Service Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $service->name }}"
                                            id="name" placeholder="Enter Name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="icon">Service Icon</label>
                                        <input type="text" class="form-control" name="icon" value="{{ $service->icon }}"
                                            id="icon" placeholder="Enter Icon">
                                    </div>
                                </div>
                            </div>

                            <div class="box-body pad col-lg-12">
                                <label>Service Text</label>
                                <textarea id="editor1" name="text"
                                    style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                    {{ $service->text }}
                                </textarea>
                            </div><br><br>

                            <div class="box-footer col-lg-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <br/><br/>
                                <a href="{{ route('service.index') }}" class="btn btn-warning">Back</a>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
