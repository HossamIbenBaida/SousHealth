@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading"><span><h4>contact informations</h4></span></div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="post" action="{{route('newPro')}}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Spesiality</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="speciality" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Sub Spesiality</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="sub_speciality" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="adresse" class="col-md-4 control-label">telephone</label>

                                <div class="col-md-6">
                                    <input id="adresse" type="adresse" class="form-control" name="tel" required></input>

                                    @if ($errors->has('tel'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('telephone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>



                            <div class="form-group{{ $errors->has('adresse') ? ' has-error' : '' }}">
                                <label for="adresse" class="col-md-4 control-label">adresse</label>

                                <div class="col-md-6">
                                    <textarea id="adresse" type="adresse" class="form-control" name="adresse" required></textarea>

                                    @if ($errors->has('adresse'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('adresse') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('zip  ') ? ' has-error' : '' }}">
                                <label for="zip" class="col-md-4 control-label">zip code</label>

                                <div class="col-md-6">
                                    <input id="zip" type="zip" class="form-control" name="zip" required>

                                    @if ($errors->has('zip'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('text  ') ? ' has-error' : '' }}">
                                <label for="description" class="col-md-4 control-label">description</label>

                                <div class="col-md-6">
                                    <textarea id="desctiption" type="text" class="form-control" name="description" required></textarea>

                                    @if ($errors->has('text'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            </div>
                    <br><br>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        submit
                                    </button>

                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
