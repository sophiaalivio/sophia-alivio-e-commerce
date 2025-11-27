<x-mail::message>
# Order Placed Successfully!

Thank you for your order. Your number is: {{ $order->id }}.

<x-mail::button :url=" $url">
    View Order
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
