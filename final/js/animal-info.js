(function(){

  "use strict";
  const backBtn = document.getElementById('animal-info__backBtn');
  const descTag = document.getElementById('description');
  const animalList = document.getElementById('animalList');
  const aside = document.getElementById('productAside');

  const productURL = 'data/produkter.json';
  const animalURL = 'data/fisk_og_dyr.json';


  function firstToUpperCase(str) {
    return str[0].toUpperCase() + str.slice(1, str.length)
  }

  backBtn.onclick = () =>  window.history.back();

  get(animalURL).then(function(response) { // create the list items
    let obj = JSON.parse(response);
    for (let i in obj) {
      for (let ii in obj[i]) {

        animalList.innerHTML += `
            <li data-dyr="${obj[i][ii].navn}">${obj[i][ii].navn}
              <svg class="animal-list_icon"  viewBox="0 0 100 100">
                <use xlink:href="img/dyr/ikoner/${obj[i][ii].svg_ikon}#${obj[i][ii].svg_ikon}"></use>
              </svg>
            </li>`
        }
      }
    }
  );

  animalList.addEventListener('click',function(e) {

        animalListBtnClick(e.target.closest('li'));

  }, true);


  function animalListBtnClick(el) {
    let siblings = el.parentNode.children;

    for (let i = 0; i < siblings.length; i++) {

      siblings[i].classList.remove('animal-list--active');
      siblings[i].children[0].children[0].style.fill = "#274047";

    }

    el.classList.toggle('animal-list--active');

    getAnimal(el.dataset.dyr);

    el.children[0].children[0].style.fill = "#fff";

  }


  function getAnimal(str) {

    get('php/animal_decription.php?animal='+str).then(function(html) {
      descTag.innerHTML = html;
    });


    get('php/relevant_products.php?animal='+str).then(function(html) {
      aside.innerHTML = html;
    });

  }

    function get(url) {//ajax promise call

      return new Promise(function(resolve, reject) {

        var req = new XMLHttpRequest();
        req.open('GET', url);

        req.onload = function() {
          if (req.status == 200) {
            resolve(req.response);
          }
          else {
            reject(Error(req.statusText));
          }
        };
        req.onerror = function() {
          reject(Error("Network Error"));
        };

        req.send();
      });
    }

  //go back
  function goBack() {
      window.history.back();
  }

})();
