<!DOCTYPE html>
<html>
<head>
    <title>{{$message->subject ?? 'Email'}}</title>
</head>
<body>
    <div>
        {!! $emailMessage->message_text ?? '' !!}
        <p>{{ $emailMessage->message_text ?? 'Empty mail' }}</p>
    </div>
</body>
</html>
