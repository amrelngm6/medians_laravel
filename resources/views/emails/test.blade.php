<!DOCTYPE html>
<html>
<head>
    <title>{{$message->subject ?? 'Email'}}</title>
</head>
<body>
    <div>
        {!! $message->message_text ?? '' !!}
    </div>
</body>
</html>
