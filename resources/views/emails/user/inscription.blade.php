@component('mail::message')
<h1 class="text-center">Bienvenue {{ $user->name }}</h1>
<h4 class="texte">Merci de vous être enregistrée avec l'addresse {{ $user->email }}</h4>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
