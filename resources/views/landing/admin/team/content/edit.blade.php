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
                        <h3 class="box-title">Edit Team</h3>
                    </div>
                    @include('landing.includes.errors')

                    @if ($team)
                    <!-- form start -->
                    <form role="form" action="{{ route('team.update', $team->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="box-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Team Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $team->name }}"
                                            id="name" placeholder="Enter Name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="position">Team Position</label>
                                        <input type="text" class="form-control" name="position" value="{{ $team->position }}"
                                            id="position" placeholder="Enter Position">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Team Image</label>
                                        <p>
                                            <input class="form-control" type="text" id="image" name="image" value="{{ $team->image }}">
                                            <img src="{{ asset($team->image) }}" alt="" width="100">
                                        </p>
                                        <p>
                                            <a href="" class="popup_selector btn btn-info" data-inputid="image">
                                                Select Team Image
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div><br>

                            <div class="box-body pad col-lg-12">
                                <label>Team Text</label>
                                <textarea id="editor1" name="text"
                                    style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                    {{ $team->text }}
                                </textarea>
                            </div><br><br>

                            <div class="box-footer col-lg-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <br/><br/>
                                <a href="{{ route('team.index') }}" class="btn btn-warning">Back</a>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
