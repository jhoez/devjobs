@component('mail::message')
# Order Shipped
Your order has been shipped!

manda menseja que no existe mail
@component('mail::button', ['url' => $mailinfo['url'],'color'=>'success'])
View Order
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent