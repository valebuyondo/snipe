{{-- <!-- Company -->
<div id="{{ $fieldname }}" class="form-group{{ $errors->has($fieldname) ? ' has-error' : '' }}">
    {{ Form::label($fieldname, $translated_name, array('class' => 'col-md-3 control-label')) }}
    <div class="col-md-7">
        <select class="js-data-ajax" data-endpoint="companies" data-placeholder="{{ trans('general.select_company') }}" name="{{ $fieldname }}" style="width: 100%" id="company_select">
                <option value="{{trans('muni') }}" selected="selected"></option>
           
                <option value="">{{ trans('general.select_company') }}</option>
            
        </select>
    </div>


    {!! $errors->first($fieldname, '<div class="col-md-8 col-md-offset-3"><span class="alert-msg"><i class="fa fa-times"></i> :message</span></div>') !!}

</div> --}}
