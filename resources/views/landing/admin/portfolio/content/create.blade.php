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
                        <h3 class="box-title">Titles</h3>
                    </div>
                    @include('landing.includes.errors')
                    <!-- form start -->
                    <form role="form" action="{{ route('portfolio.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="box-body">

                            <div class="row">

                                <div class="form-group col-lg-6">
                                    <label for="name">Portfolio Name</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}"
                                        id="name" placeholder="Enter Name">
                                </div>

                                <div class="form-group col-lg-6">
                                    <label>Portfolio Filter</label>
                                        <select name="filter" id="filter" class="form-control">
                                            <option selected disabled>Select Portfolio Filter</option>
                                            <option value="web">Web</option>
                                            <option value="android">Android</option>
                                            <option value="design">Design</option>
                                            <option value="appleIOS">AppleIOS</option>
                                        </select>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-lg-6">
                                    <label for="image">Portfolio Image</label>
                                    <p>
                                        <input class="form-control" type="text" id="image" name="image"
                                            placeholder="Image" value="{{ old('image') }}">
                                    </p>
                                    <p>
                                        <a href="" class="popup_selector btn btn-info" data-inputid="image">
                                            Select Portfolio Image
                                        </a>
                                    </p>
                                </div>
                            </div><br>

                            <div class="form-group col-lg-12">
                                <button type="submit" class="btn btn-primary">Submit</button><br/><br/>
                                <a href="{{ route('portfolio.index') }}" class="btn btn-warning">Back</a>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</div>
