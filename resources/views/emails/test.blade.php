<!DOCTYPE html>
<html>
<head>
    <title>{{$message->subject ?? 'Email'}}</title>
</head>
<body>
    <div>
        {!! $message->message_text ?? '' !!}
        <p>{{ $message->message_text ?? 'Empty mail' }}</p>
    </div>
</body>
</html>
