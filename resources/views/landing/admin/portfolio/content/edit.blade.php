<div class="content-wrapper">
    <section class="content-header">
        <h1>Text Editors <small>Advanced form element</small></h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Portfolio</a></li>
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
                        <h3 class="box-title">Edit Portfolio</h3>
                    </div>
                    @include('landing.includes.errors')

                    @if ($portfolio)
                    <!-- form start -->
                    <form role="form" action="{{ route('portfolio.update', $portfolio->id) }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}
                        <div class="box-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Portfolio Name</label>
                                        <input type="text" class="form-control" name="name" value="{{ $portfolio->name }}"
                                            id="name" placeholder="Enter Name">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Portfolio Filter</label>
                                        <select name="type" class="form-control">
                                            <option value="web" @if($portfolio->filter == 'web') selected @endif>
                                                Web</option>
                                            <option value="android" @if($portfolio->filter == 'android') selected @endif>
                                                Android</option>
                                            <option value="design" @if($portfolio->filter == 'design') selected @endif>
                                                Design</option>
                                            <option value="appleIOS" @if($portfolio->filter == 'appleIOS') selected @endif>
                                                AppleIOS</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="image">Portfolio Image</label>
                                        <p>
                                            <input class="form-control" type="text" id="image" name="image" value="{{ $portfolio->image }}">
                                            <img src="{{ asset($portfolio->image) }}" alt="" width="100">
                                        </p>
                                        <p>
                                            <a href="" class="popup_selector btn btn-info" data-inputid="image">
                                                Select Portfolio Image
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div><br>

                            <div class="box-footer col-lg-12">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <br/><br/>
                                <a href="{{ route('portfolio.index') }}" class="btn btn-warning">Back</a>
                            </div>
                        </div>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </section>
</div>
