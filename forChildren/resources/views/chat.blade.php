@extends('loyauts.app')
@section('title')
    Все задания
@endsection
@section('content')
    {{-- <form action="" id="form" method="POST">
        @csrf
        <label for="input-message">Message:</label>
        <input type="text" id="input-message">
    </form>
    <ul id="list-messages"></ul> --}}
    <input type="hidden" value="{{auth()->user()->id}}" id="user_id">
    <section class="chat1">
        <div class="chat_content">
                    
        <div class="chat_messages_content">
            <div class="chat_mesagess" id="messages">
               @foreach ($messages as $item)
                   @if (auth()->user()->id==$item->UserId)
                   <div class="messege set" id="message">
                    <h5 class="h5" >{{$item->Message}}</h5>
                 </div>
                   @endif
                   @if (auth()->user()->id!=$item->UserId)
                   <div class="messege get" id="message">
                    <h5 class="h5" >{{$item->Message}}</h5>
                 </div>
                   @endif
                
               @endforeach
            </div>
            <div class="write_chat_form">
                <form action="" id="form" method="POST" class="write_message_chat">
                    @csrf
                    <input type="text" id="input-message" class="write_message_chat_input"  placeholder="Напишите...">
                    <label for="" class="input_icon_send">
                    <input type="submit" id="btnSend" class="btn_send_chat" value="submit">
                    </label>
                </form>
            </div>
        </div>
    </div>
    
     </section>


    <script src="{{mix('js/app.js')}}" ></script>
@endsection('content')
