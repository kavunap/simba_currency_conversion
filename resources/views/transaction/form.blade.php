<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('amount') }}
            {{ Form::number('amount', $transaction->amount, ['min'=>0, 'class' => 'form-control' . ($errors->has('amount') ? ' is-invalid' : ''), 'placeholder' => 'Amount']) }}
            {!! $errors->first('amount', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('currency') }}
            {{ Form::select('currency', ['USD'=>'USD', 'EUR'=>'EUR','NGN'=>'NGN'], $transaction->currency, ['class' => 'form-control','id' => 'currency']) }}
            {{-- {{ Form::select('currency', $transaction->currency, ['class' => 'form-control' . ($errors->has('currency') ? ' is-invalid' : ''), 'placeholder' => 'Currency']) }} --}}
            {!! $errors->first('currency', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        {{-- <div class="form-group">
            {{ Form::label('sender_id') }} --}}
            {{ Form::hidden('sender_id', Auth::user()->id, ['class' => 'form-control' . ($errors->has('sender_id') ? ' is-invalid' : ''), 'placeholder' => 'Sender Id']) }}

            {{-- {!! $errors->first('sender_id', '<div class="invalid-feedback">:message</div>') !!}
        </div> --}}
        <div class="form-group">
            {{ Form::label('recipient') }}
            {{-- {{ Form::text('recipient_id', $transaction->recipient_id, ['class' => 'form-control' . ($errors->has('recipient_id') ? ' is-invalid' : ''), 'placeholder' => 'Recipient Id']) }} --}}
            {{ Form::select('recipient_id', $users, $transaction->recipient_id, ['class' => 'form-control', 'placeholder' => 'Select a receiver']) }}
            {!! $errors->first('recipient_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>