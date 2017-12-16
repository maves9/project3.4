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

  switch (e.target.nodeName) {
    case 'LI':
      animalListBtnClick(e.target);
    break;
    case 'svg':
      animalListBtnClick(e.target.parentNode);
    break;
    case 'use':
      animalListBtnClick(e.target.parentNode.parentNode);
    break;

  }

}, true);


function animalListBtnClick(el) {
  let siblings = el.parentNode.children;

  for (let i = 0; i < siblings.length; i++) {
    siblings[i].classList.remove('animal-list--active');
    siblings[i].children[0].children[0].style.fill = "#333";
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


  //multiple AJAX from both produkter and jagt-dyr JSON files
  /*Promise.all([get(productURL),get(animalURL)]).then(function(val) {

    //val is the array return on them promises
    const dyrObj = JSON.parse(val[1]);
    const produkterObj = JSON.parse(val[0]);
    let animal = dyrObj;
    let products = produkterObj.produkter;
    let recommendedProducts;

    for (let i in dyrObj) {
        for (let ii in dyrObj[i]) {
        if (dyrObj[i][ii].navn === str) {
          descTag.innerHTML = `<article>
                                  <img src="img/dyr/${dyrObj[i][ii].billede}">
                                  <h2>${firstToUpperCase(str)}</h2>
                                  <p>Beskrivelse: <br>${dyrObj[i][ii].beskrivelse}</p>
                                  <p>Lokation: ${dyrObj[i][ii].lokation}</p>
                                  <p>jagt season:
                                    <br> fra: ${dyrObj[i][ii].jagt_season.fra}
                                    <br> Til: ${dyrObj[i][ii].jagt_season.til}
                                  </p>
                            </article>`;

          recommendedProducts = dyrObj[i][ii].anbefalede_produkter;
        }
      }
    }
    aside.innerHTML = "";

      for (let x in products){
        for (let xx in products[x]) {
          for (let xxx /*(0w0) in products[x][xx]) {//rifler og tilbehør
            for(let xxxx in products[x][xx][xxx]){

                checkIfRecommendet(products[x][xx][xxx][xxxx], xxxx);//Rifler

              for (let xxxxx in products[x][xx][xxx][xxxx]) {

                checkIfRecommendet(products[x][xx][xxx][xxxx][xxxxx], xxxxx);//rens og pleje

              }
            }
          }
        }
      }

      function checkIfRecommendet(obj, x) {
        for (let i = 0; i < recommendedProducts.length; i++) {
          if (obj.produkt_nr === recommendedProducts[i]) {
                aside.innerHTML +=  `<article>
                                      <p>${firstToUpperCase(obj.navn)}</p>
                                      <img src="img/produkter/${obj.billede}" alt="${obj.navn}">
                                    </article>`
          }
        }
      }

      let asideHeadline = document.createElement("h3");
      let headlineText;

      if (aside.children.length === 0) {
        headlineText = document.createTextNode('Ingen relavante produkter fundet');

      }else {
        headlineText = document.createTextNode('Relavante produkter');
      }

      asideHeadline.append(headlineText);
      aside.insertBefore(asideHeadline, aside.children[0]);

      }).catch(function(error) {//all erros returns here
        console.error(error)
      });*/
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




/// tilføjer lige noget her Martin
//go back
function goBack() {
    window.history.back();
}
