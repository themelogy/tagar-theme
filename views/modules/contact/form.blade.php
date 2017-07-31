{!! Form::open(['route' => 'contact.send', 'class' => 'contact-form', 'method'=>'post']) !!}
{!! Form::hidden('from', Request::path()) !!}

@if (session()->has('contact_form_message'))
    <div class="alert alert-success">
        {!! session('contact_form_message') !!}
    </div>
@endif

    <div class="row">
        <div class="col-md-6">
            <div class="input-field">
                {!! Form::text('first_name', old('first_name')) !!}
                {!! Form::label('first_name', trans('contact::contacts.form.first_name')) !!}
                {!! $errors->first("first_name", '<span class="help-block txt-red">:message</span>') !!}
            </div>

        </div><!-- /.col-md-6 -->

        <div class="col-md-6">
            <div class="input-field">
                {!! Form::text('last_name', old('last_name')) !!}
                {!! Form::label('last_name', trans('contact::contacts.form.last_name')) !!}
                {!! $errors->first("last_name", '<span class="help-block txt-red">:message</span>') !!}
            </div>
        </div><!-- /.col-md-6 -->
    </div><!-- /.row -->

    <div class="row">
        <div class="col-md-6">
            <div class="input-field">
                {!! Form::text('email', old('email')) !!}
                {!! Form::label('email', trans('contact::contacts.form.email')) !!}
                {!! $errors->first("email", '<span class="help-block txt-red">:message</span>') !!}
            </div>
        </div><!-- /.col-md-6 -->

        <div class="col-md-6">
            <div class="input-field">
                {!! Form::text('phone', old('phone')) !!}
                {!! Form::label('phone', trans('contact::contacts.form.phone')) !!}
                {!! $errors->first("phone", '<span class="help-block txt-red">:message</span>') !!}
            </div>
        </div><!-- /.col-md-6 -->
    </div><!-- /.row -->

    <div class="input-field">
        {!! Form::textarea('enquiry', old('enquiry'), ['class'=>'materialize-textarea']) !!}
        {!! Form::label('enquiry', trans('contact::contacts.form.enquiry')) !!}
        {!! $errors->first("enquiry", '<span class="help-block txt-red">:message</span>') !!}
    </div>

    <button type="submit" name="submit" class="waves-effect waves-light btn submit-button pink mt-30">{{ trans('contact::contacts.form.submit') }}</button>

{!! Form::close() !!}

@push('js_inline')
{!! Captcha::scriptWithCallback(['captcha_guestbook','captcha_contact', 'captcha_ask']) !!}
@endpush