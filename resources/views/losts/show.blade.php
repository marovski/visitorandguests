 @extends('main')

    @section('title', '| View Lost and Found')

    @section('assets')
    <link rel='stylesheet' href='/css/parsley.css' />
    @endsection

@section('content')
<div class="container"  ng-app="MyApp">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default" ng-controller="showInputController">
                <div class="panel-heading"><b>Lost and Found Report</b></div>
                                                <!-- LOADING ICON -->
            <!-- show loading icon if the loading variable is set to true -->
        <div ng-show="loading == false"  ><p class="text-center" ><span class="loader"></span></p></div>
                  <div class="panel-body" ng-show="loading == true" >


                  {!! Form::model($lost, array('method'=>'PATCH','class'=>'form-horizontal', 'role'=> 'form')) !!}

                      <div class="form-group{{ $errors->has('finderName') ? ' has-error' : '' }}" >
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
                                <input id="finderName" type="text" class="form-control" name="receiverName" disabled="true" value="{{ $lost->receiverName }}" required autofocus>

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
                         <div class="form-group{{ $errors->has('itemCategory') ? ' has-error' : '' }}">
                            <label for="itemCategory" class="col-md-4 control-label">Category: </label>

                            <div class="col-md-6">

                      <select class="form-group" name="itemCategory" disabled="" readonly="" required style="margin-left: 4px; margin-top:9px;">
                                    @if ($lost->itemCategory==1)
                                    <option value="1"> Electronic</option>
                                    @elseif($lost->itemCategory==2)
                                      <option value="2"> Document</option>
                                      @elseif ($lost->itemCategory==3) 
                                      <option value="3"> Money</option> 
                                       @elseif ($lost->itemCategory==4)
                                      <option value="4"> Gadget</option>
                                      @elseif (empty($lost->itemCategory))
                                      <option value=""> </option>
                                      @else
                                      <option value="5"> Cloth</option>
                                   
                                    @endif
                                </select>                                

                                @if ($errors->has('itemCategory'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('itemCategory') }}</strong>
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
                                 
                                @if ($lost->itemImportance==3)
                                  <option value="">High</option>
                                  @elseif ($lost->itemImportance==2)
                                  <option value="">Medium</option>
                                  @else
                                  <option value="">Small</option>
                                  @endif
                                  
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
                        <label for="image" class="col-md-4 control-label" >Item Image:</label>
                        <div class="col-md-6">
                          <div class="thumbnail">
                                    <div class="image">
    
                        <img  src="{{ asset('images/'. $lost->photo)}}" height="150"  width="400" alt="Some awesome text"/>
                                        </div>
                                            </div>
                        </div>
                        </div>


                                                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                               
                                <a href="{{ route('losts.index') }}" class="btn btn-default btn-sm btn-block">Return</a>
                            </div>
                        </div>
                     {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection