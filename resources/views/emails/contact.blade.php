<!-- contact.blade.php -->
@component('mail::message')
# Yeni İletişim Talebi Miramare Hotels

**Name:** {{ $data['name'] }}

**Email:** {{ $data['email'] }}

**Message:**

{{ $data['message'] }}
@endcomponent
