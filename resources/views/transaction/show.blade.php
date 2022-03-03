@extends('layouts.app')

@section('template_title')
    {{ $transaction->name ?? 'Show Transaction' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Transaction</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('transactions.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Amount:</strong>
                            {{ $transaction->amount }}
                        </div>
                        <div class="form-group">
                            <strong>Currency:</strong>
                            {{ $transaction->currency }}
                        </div>
                        <div class="form-group">
                            <strong>Sender Id:</strong>
                            {{ $transaction->sender_id }}
                        </div>
                        <div class="form-group">
                            <strong>Recipient Id:</strong>
                            {{ $transaction->recipient_id }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
