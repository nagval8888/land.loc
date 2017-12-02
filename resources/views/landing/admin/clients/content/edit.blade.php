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
                        <h3 class="box-title">Edit Client</h3>
                    </div>
                    @include('landing.includes.errors')

                    @if ($client)
                    <!-- form start -->
                    <form role="form" action="{{ route('client.update', $client->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Client Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $client->name }}"
                                            id="name" placeholder="Enter Name">
                                    </div>
                                </div>
                                <div class="col-md-6 pull-right">
                                    <div class="form-group">
                                        <label for="image">Client Image</label>
                                        <p>
                                            <input class="form-control" type="text" id="image" name="image" value="{{ $client->image }}">
                                            <img src="{{ asset($client->image) }}" alt="" width="100">
                                        </p>
                                        <p>
                                            <a href="" class="popup_selector btn btn-info" data-inputid="image">
                                                Select Client Image
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="box-footer col-lg-8">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <br/><br/>
                                <a href="{{ route('client.index') }}" class="btn btn-warning">Back</a>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
