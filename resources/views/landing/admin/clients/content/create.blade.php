<div class="content-wrapper">
    <section class="content-header">
        <h1>Text Editors <small>Advanced form element</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Client</a></li>
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
                        <h3 class="box-title">Titles</h3>
                    </div>
                    @include('landing.includes.errors')
                    <!-- form start -->
                    <form role="form" action="{{ route('client.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">
                            <div class="col-lg-12">

                                <div class="form-group col-lg-6">
                                    <label for="name">Client Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                        id="name" placeholder="Enter Name">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label for="image">Client Image</label>
                                    <p>
                                        <input class="form-control" type="text" id="image" name="image"
                                            placeholder="Image" value="{{ old('image') }}">
                                    </p>
                                    <p>
                                        <a href="" class="popup_selector btn btn-info" data-inputid="image">
                                            Select Client Image
                                        </a>
                                    </p>
                                </div><br><br>

                                <div class="form-group col-lg-12">
                                    <button type="submit" class="btn btn-primary">Submit</button><br/><br/>
                                    <a href="{{ route('client.index') }}" class="btn btn-warning">Back</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
