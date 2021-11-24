var image1 = document.getElementById("image1");
var image2 = document.getElementById("image2");
var image3 = document.getElementById("image3");
var image4 = document.getElementById("image4");
var price = document.getElementById("price");
var text = document.getElementById("text");
var char = document.getElementById("char");
var city = document.getElementById("city");
var title = document.getElementById("title");
var imgs = new Array('1.webp', '2.webp', '3.webp', '4.webp');
var prices = new Array('8 000 000 $', '50 000 $', '800 000 $');
var titles = new Array(
  "«Дніпрова хвиля»",
  "«Бзов – загородная усадьба с чистым Озером»",
  "«Дніпрова хвиля»",
);
var citys = new Array(
  "Київ",
  "Львів",
  "Одеса",
);
var texts = new Array(
  "Опис: 8 спалень, вітальня 154,6 м², камінний зал, їдальня, бібліотека, ігрова кімната, 2 кімнати загального користування, хол 45 м², 10 с/вузлів, 5 балконів, кімната для зберігання продуктів з низькою температурою , басейн, СПА зона, Стан: Авторський дизайн у класичному. Будинок повністю укомплектований меблями та оснащений побутовою технікою",
  "Предлагаем Вашему вниманию жилой дом в Бзове, Барышевского района – 39 км от Киева. Расположен на участке 50 соток, со своим озером, в котором разведён белый амур. Огорожен по периметру забором.",
  "Второй этаж второй санузел, большая комната  квадратных метра, которая подойдёт под бильярд, зону отдыха, спортивный зал, библиотеку, домашний кинотеатр."
);
var chars = new Array(
  [
    "КМ «Дніпрова хвиля», Дамба, 7й км, Конча-Заспа",
    "Обухівський р-н",
    "1 га",
    "У власності",
    "Введено в експлуатацію",
    "2",
    "882,9 м²",
  ],
  [
    "«Бзов, Дамба, 7й км, ЛЬвів",
    "Обухівський р-н",
    "5 га",
    "У власності",
    "Введено в експлуатацію",
    "3",
    "1882,9 м²",
  ],
  [
    "КМ «Дніпрова хвиля», Одеса",
    "Одеський р-н",
    "10 га",
    "У власності",
    "Введено в експлуатацію",
    "1",
    "82,9 м²",
  ],
);
var j = imgs.length;

function img(l) {
  image1.src = './image/' + l + "/" + imgs[0];
  image2.src = './image/' + l + "/" + imgs[1];
  image3.src = './image/' + l + "/" + imgs[2];
  image4.src = './image/' + l + "/" + imgs[3];
  price.innerHTML = prices[l - 1];
  title.innerHTML = titles[l - 1];
  text.innerHTML = texts[l - 1];
  city.innerHTML = citys[l - 1];
  char.innerHTML = "";
  for (var i = 0; i < chars[l-1].length; i++) {
    char.innerHTML += "<p>" + chars[l-1][i] + "</p>";
  }

}
