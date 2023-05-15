<!-- contact.blade.php -->
@component('mail::message')
# Yeni İletişim Talebi Portnature 

**Name:** {{ $data['name'] }}

**Email:** {{ $data['email'] }}

**Message:**

{{ $data['message'] }}
@endcomponent
