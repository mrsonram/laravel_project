@extends('theme/default')

@section('title', 'This is title of this page')


@section('content')
<h2>Section Content</h2>
<div>
นี่คือส่วน content / header และ footer ของ page จะถูกระบุไว้แล้วใน template ซึ่งเรียกใช้โดยการ extends template.blade.php (ซึ่งคล้ายกับการ include file)
</div>
@endsection