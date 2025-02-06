<!DOCTYPE html>
<html>
<head>
    <title>{{$emailMessage->subject ?? 'Email'}}</title>
</head>
<body>
    <div>
        {!! $emailMessage->message_text ?? '' !!}
        <p>{{ $emailMessage->message_text ?? 'Empty mail' }}</p>
    </div>
</body>
</html>
