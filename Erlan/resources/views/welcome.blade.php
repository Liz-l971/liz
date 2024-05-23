
   
    
    
    @extends('loyauts.app')
    @section('title')
    Erlan
    @endsection
    @section('content')
   
    
    <img src=" {{asset('public/assets/img/background/banner.png')}}" class="banner_img" alt="">
    <main>
        <div class="banner">
            <div class="container">
                <div class="banner_content">
                    <h1 class="banner_main_text">
                        Вдали от дома
                    </h1>
                    <h3 class="banner_text">
                        "Это небольшой шаг для человека, но гигантский скачок для человечества" - Нил Армстронг
                    </h3>
                    <form action="" class="banner_form">
                        
                        <select name=""  class="banner_inp_one" id="">
                            <option value disabled selected>Откуда</option>
                            <option>байконур</option>
                            <option>Starbase</option>
                            <option>Вэньчан</option>
                            <option>Канаверал</option>
                        </select>
                        <select name=""  class="banner_inp_one" id="">
                            <option value disabled selected>Куда</option>
                            <option>луна</option>
                            <option>Международная космическая станция (МКС)</option>
                            <option>Китайская модульная космическая станция (cms)</option>
                            <option>Космическая станция Axiom Space</option>
                        </select>
            
                        <input type="date" class="banner_inp_two" placeholder="период вылета">
                        <input type="text" class="banner_inp_three" placeholder="ночей">
                        <input type="text" class="banner_inp_three" placeholder="чел">
                        <a href="./src/pages/catalog_hotel.html" class="banner_btn">найти</a>
                    </form>
                </div>
            </div>
        </div> 
    </main>
  
@endsection('content');