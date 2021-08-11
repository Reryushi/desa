@extends('layouts.admin')
@section('style')
    @parent
@endsection
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="card">
                        <div class="header">
                            <h4 class="title">Edit Room Type</h4>
                        </div>
                        <div class="content">
                            {!! Form::open(array('url' => 'admin/room_type/'.$room_type->id, 'id' => 'room_type-add-form')) !!}
                            {{ Form::hidden('_method', 'PUT') }}
                            {{ csrf_field() }}

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Nama Kegiatan<star>*</star></label>
                                        <input type="text" name="name" class="form-control border-input" value="{{ $room_type->name }}">
                                    </div>
                                </div>
                            </div>
                            
                                <!-- <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Size</label>
                                        <input type="text" name="size" class="form-control border-input"
                                               placeholder="Ex: 500" value="{{ $room_type->size }}">
                                    </div>
                                </div> -->
                            </div>
                            <!-- <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Discount: <input class="form-control border-input" type="text" id="discount" disabled></label>
                                        <input type="hidden" name="discount_percentage" id="discount_percentage" value="{{ $room_type->discount_percentage  }}">
                                        <div id="slider-default" class="slider-info"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Maximum Number of Adult<star>*</star></label>
                                        <input type="text" name="max_adult" class="form-control border-input"
                                               placeholder="2" value="{{ $room_type->max_adult }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Maximum Number of Children<star>*</star></label>
                                        <input type="text" name="max_child" class="form-control border-input"
                                               placeholder="2" value="{{ $room_type->max_child }}">
                                    </div>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Isi Kegiatan</label>
                                        <textarea name="description" rows="5" class="form-control border-input"
                                                  placeholder="Ex: The Royal Suite are the luxurious hotel rooms you can book.">{{ $room_type->description }}</textarea>
                                    </div>
                                </div>
                            </div>

                           
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Status</label>
                                        <select name="status" id="status" class="form-control">
                                            <option value="1"
                                                    @if ($room_type->status == '1') selected="selected" @endif>Active
                                            </option>
                                            <option value="0"
                                                    @if ($room_type->status == '0') selected="selected" @endif>
                                                Inactive
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-info btn-fill btn-wd">Update Room Type</button>
                            </div>
                            <div class="clearfix"></div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    @parent

    <!--  Forms Validations Plugin -->
    <script src="{{asset("backend/js/jquery.validate.min.js")}}"></script>

    <!--  Checkbox, Radio, Switch and Tags Input Plugins -->
    <script src="{{ asset("backend/js/bootstrap-checkbox-radio-switch-tags.js") }}"></script>

    <!--  Plugin for Date Time Picker and Full Calendar Plugin-->
    <script src="{{asset("backend/js/moment.min.js")}}"></script>

    <!--  Date Time Picker Plugin is included in this js file -->
    <script src="{{asset('/backend/js/bootstrap-datetimepicker.js')}}"></script>
    <script>
        // Init DatetimePicker
        demo.initFormExtendedDatetimepickers();
    </script>

    <script>
        $().ready(function () {

            demo.initFormExtendedSliders();
            var $validator = $("#room_type-add-form").validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 5,
                        maxlength: 50
                    },
                    description: {
                        maxlength: 800
                    },
                    gender: {
                        required: true
                    }
                }
            });
        });
    </script>
@endsection
