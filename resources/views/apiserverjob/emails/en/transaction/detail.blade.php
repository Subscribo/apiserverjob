Transaction details: Amount: {!! $currencySymbol !!} {{ $transaction->amount }} Transaction hash: {{ $transaction->hash }} Processed via: {{ $gatewayName }} On: {{ $processingDate->format('Y-m-d H:i:s') }}