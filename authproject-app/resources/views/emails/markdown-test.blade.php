@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => $url,'color' => 'succes'])
cliquez ici 
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
