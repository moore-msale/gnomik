@component('mail::message')
    <html>
    <body>
    <div class="text-fut-bold" style="padding:7%; border:1px #d91500 solid; border-radius:30px;">
        <img src="" style="width:50px; height:60px;" alt="">
        <br>
        <span class="text-fut-bold" style="font-size:40px; color:#d90003">Гномик</span>
        <br>
        <h2 class="text-fut-bold"><strong>Новый запрос о стоимости</strong></h2>
        <br>
        Информация о новом клиенте
        <br>
        <br>
        <strong class="text-fut-bold">Имя:</strong> {{ $formData['name'] }}<br>
        <strong class="text-fut-bold">Телефон:</strong> {{ $formData['phone'] }}<br>
        <strong class="text-fut-bold">Сообщение:</strong> {{ $formData['message'] }}<br>


        <br>
    </div>
    </body>
    </html>
@endcomponent
