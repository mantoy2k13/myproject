@extends('layout')

@section('content')
  <div class="container">
    <h2 class="form_title">代理店様用入力フォーム</h2>
    <div class="make_center">
     {{-- エラーの表示 --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    {!! Form::open(['url' => 'registration_agency/confirm',
                'class' => 'form-horizontal']) !!}
    
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('agency_name', '代理店', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            {!! Form::text('agency_name', null, ['class' => 'form-control']) !!}

            @if ($errors->has('agency_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('agency_name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('program') ? ' has-error' : '' }}">
        {!! Form::label('program', 'プログラム', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-12">
            @foreach($programs as $key => $value)
                <label class="checkbox-inline">
                    {!! Form::radio('program', $value) !!}
                    {{ $value }}
                </label>
            @endforeach
            @if ($errors->has('program'))
                <span class="help-block">
            <strong>{{ $errors->first('program') }}</strong>
        </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('term') ? ' has-error' : '' }}">
        {!! Form::label('term', '期間', ['class' => 'col-sm-2 control-label']) !!}
        <div class="col-sm-12">
            @foreach($terms as $key => $value)
                <label class="checkbox-inline">
                    {!! Form::radio('term', $value) !!}
                    {{ $value }}
                </label>
            @endforeach
            @if ($errors->has('term'))
                <span class="help-block">
            <strong>{{ $errors->first('term') }}</strong>
        </span>
            @endif
        </div>
    </div>

    <label for="program" class="col-sm-2 control-label">値段</label>
    <div class="col-sm-12">
       <p id="amount"></p>
    </div>

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('student_name', '生徒氏名', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            {!! Form::text('student_name', null, ['class' => 'form-control']) !!}

            @if ($errors->has('student_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('student_name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('parent_name', '保護者氏名　*ファミリーキャンプのみ', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            {!! Form::text('parent_name', null, ['class' => 'form-control']) !!}

            @if ($errors->has('parent_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('parent_name') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('nationality', '国籍', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            {!! Form::text('nationality', null, ['class' => 'form-control']) !!}

            @if ($errors->has('nationality'))
                <span class="help-block">
                    <strong>{{ $errors->first('nationality') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('student_age', '年齢(生徒)', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            {!! Form::text('student_age', null, ['class' => 'form-control']) !!}

            @if ($errors->has('student_age'))
                <span class="help-block">
                    <strong>{{ $errors->first('student_age') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('parent_age', '年齢（保護者）　*ファミリーキャンプのみ', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            {!! Form::text('parent_age', null, ['class' => 'form-control']) !!}

            @if ($errors->has('parent_age'))
                <span class="help-block">
                    <strong>{{ $errors->first('parent_age') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('residence', '住所', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            {!! Form::text('residence', null, ['class' => 'form-control']) !!}

            @if ($errors->has('residence'))
                <span class="help-block">
                    <strong>{{ $errors->first('residence') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('phone_number', '電話番号', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}

            @if ($errors->has('phone_number'))
                <span class="help-block">
                    <strong>{{ $errors->first('phone_number') }}</strong>
                </span>
            @endif
        </div>
    </div>

    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        {!! Form::label('email', 'メールアドレス', ['class' => 'col-sm-12 control-label']) !!}
        <div class="col-sm-12">
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>
    
    <div class="form-group">
        <div class="col-sm-12" style="text-align: center;">
            {!! Form::submit('確認', ['class' => 'btn btn-primary button_width']) !!}
        </div>
    </div>

    {!! Form::close() !!}
    </div>
  </div>

<script>
$('input[name="program"], input[name="term"]').change(function() {
    console.log($(this).val())
    // console.log($('input[name="term"]'))
    var programs = document.getElementsByName( "program" ) ;
    var terms = document.getElementsByName( "term" ) ;
    // 選択状態の値を取得
    for ( var program="", i=programs.length; i--; ) {
        if ( programs[i].checked ) {
            var program = programs[i].value ;
            break ;
        }
    }
    for ( var term="", i=terms.length; i--; ) {
        if ( terms[i].checked ) {
            var term = terms[i].value ;
            break ;
        }
    }
    if (program == "{{ $programs[0] }}") {
        console.log( "jr" );
        if (term == "{{ $terms[0] }}") {
            console.log( "2 weeks" );
            document.getElementById("amount").innerText = "$2,000";
        } else if (term == "{{ $terms[1] }}") {
            console.log( "3 weeks" );
            document.getElementById("amount").innerText = "$2,500";
        } else if (term == "{{ $terms[2] }}") {
            console.log( "4 weeks" );
            document.getElementById("amount").innerText = "$3,000";
        } else {
            console.log( "no" );
        }
    } else if (program == "{{ $programs[1] }}") {
        console.log( "family" );
                console.log( "jr" );
        if (term == "{{ $terms[0] }}") {
            console.log( "2 weeks" );
            document.getElementById("amount").innerText = "$3,000";
        } else if (term == "{{ $terms[1] }}") {
            console.log( "3 weeks" );
            document.getElementById("amount").innerText = "$3,500";
        } else if (term == "{{ $terms[2] }}") {
            console.log( "4 weeks" );
            document.getElementById("amount").innerText = "$4,000";
        } else {
            console.log( "no" );
        }
    } else {
        console.log( "no" );
    }
})

</script>
@endsection