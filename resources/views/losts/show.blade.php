 @extends('main')

    @section('title', '| Lost Object Check-out')

    @section('assets')
    <link rel='stylesheet' href='/css/parsley.css' />
    @endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Object View</div>
                <div class="panel-body">
                  {!! Form::model($lost, array('method'=>'PATCH','class'=>'form-horizontal', 'role'=> 'form', 'route' => array('losts.update', $lost->idLostFound))) !!}

                      <div class="form-group{{ $errors->has('finderName') ? ' has-error' : '' }}">
                            <label for="finderName" class="col-md-4 control-label">Finder Name:</label>

                            <div class="col-md-6">
                                <input id="finderName" type="text" class="form-control" name="finderName" disabled="true" value="{{ $lost->finderName }}" required autofocus>

                                @if ($errors->has('finderName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('finderName') }}</strong>
                                    </span>
                                @endif
                            </div>
                       </div>

                       <div class="form-group{{ $errors->has('finderPhone') ? ' has-error' : '' }}">
                            <label for="finderPhone" class="col-md-4 control-label">Finder Phone:</label>

                            <div class="col-md-6">
                                <input id="finderPhone" type="text" class="form-control" name="finderPhone" disabled="true" value="{{ $lost->finderPhone }}" required autofocus>

                                @if ($errors->has('finderPhone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('finderPhone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('finderName') ? ' has-error' : '' }}">
                            <label for="receiverName" class="col-md-4 control-label">Receiver Name:</label>

                            <div class="col-md-6">
                                <input id="finderName" type="text" class="form-control" name="receiverName" disabled="true" value="{{ $lost->finderName }}" required autofocus>

                                @if ($errors->has('receiverName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('receiverName') }}</strong>
                                    </span>
                                @endif
                            </div>
                       </div>

                       <div class="form-group{{ $errors->has('receiverPhone') ? ' has-error' : '' }}">
                            <label for="receiverPhone" class="col-md-4 control-label">Receiver Phone:</label>

                            <div class="col-md-6">
                                <input id="receiverPhone" type="text" class="form-control" name="receiverPhone" disabled="true" value="{{ $lost->receiverPhone }}" required autofocus>

                                @if ($errors->has('receiverPhone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('receiverPhone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lostFoundDescription') ? ' has-error' : '' }}">
                            <label for="lostFoundDescription" class="col-md-4 control-label"> Description:</label>

                            <div class="col-md-6">
                                <textarea rows="4" cols="" class="form-control" disabled="true" name="lostFoundDescription">{{ $lost->itemDescription }}</textarea>                               

                                @if ($errors->has('lostFoundDescription'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lostFoundDescription') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lostFoundItemSize') ? ' has-error' : '' }}">
                            <label for="lostFoundItemSize" class="col-md-4 control-label">Item:</label>
                             <div class="col-md-6">
                                <label class="radio-inline"><input type="radio" name="lostFoundItemSize" disabled="true"  checked="checked" value="">{{ $lost->itemSize}}</label>
                                

                                @if ($errors->has('lostFoundItemSize'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lostFoundItemSize') }}</strong>
                                    </span>
                                @endif
                             </div>
                        </div>

                        <div class="form-group{{ $errors->has('lostFoundImportance') ? ' has-error' : '' }}">
                            <label for="lostFoundImportance" class="col-md-4 control-label">Importance:</label>

                            <div class="col-md-6" >
                            <p>
                                <select class="form-control" name="lostFoundImportance" disabled="true">
                                  <option value="">{{ $lost->itemImportance }}</option>
                                  
                                </select>

                                @if ($errors->has('lostFoundImportance'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lostFoundImportance') }}</strong>
                                    </span>
                                @endif
                            </p>
                            </div>
                        </div>

                        <div class="form-group">
                        <label for="image" class="col-md-4 control-label" >Photo Upload:</label>
                        <div class="col-md-6">
                        <img src="{{ asset('images/'. $lost->photo)}}" height="300" width="400">
                        </div>
                        </div>


                                                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Check-out
                                </button>
                                <a href="{{ route('losts.index') }}" class="btn btn-primary">Cancel</a>
                            </div>
                        </div>
                     {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection