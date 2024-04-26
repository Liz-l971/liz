

var dataProd = [];
let select = document.getElementById('sortInput');
fetch('/list')
    .then(response => response.json())
    .then(data => {
        let products = [...data]; // Создаем копию исходного массива данных
        let withOutSort = data;
        outPutProducts(data);

        select.addEventListener('change', function() {
            switch(select.value){
                case "ask":
                    products = [...data].sort((a,b)=>a.price-b.price); // Создаем копию и сортируем
                    outPutProducts(products);
                    break;
                case "desk":
                    products = [...data].sort((a,b)=>b.price-a.price); // Создаем копию и сортируем
                    outPutProducts(products);
                    break;
                default:
                    outPutProducts(withOutSort); // Выводим исходный массив данных
            }
        });
    });

function outPutProducts(data){
    let productList = document.querySelector(".product__list");
    productList.innerHTML ='';
for(let i = 0; i< data.length; i++){
    let productCart = `   <div class="product__cart">
                    <img src="/storage/app/${data[i].img}" alt="" class="product__img">
                    <div class="product__item">
                        <a href="/product/${data[i].id}/show"><p class="product__name">${data[i].name}</p></a>
                        <div class="cost__basket">
                            <p class="product__cost">${data[i].price} $</p>
                            
                        </div>
                    </div>
                </div>`;
    // console.log(1)/
    productList.insertAdjacentHTML('beforeend',productCart)
}   
}