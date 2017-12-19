(function(){
"use strict";

const surveyPopupStartBtn = document.getElementById('surveyPopupStartBtn');
const surveyPopupCloseBtn = document.getElementById('surveyPopupCloseBtn');


setTimeout(function(){ // wait before showing modal
  surveyPopupCloseBtn.parentNode.classList.toggle('aside__popup--slide-up');
}, 5000);


surveyPopupCloseBtn.onclick = () => {

  surveyPopupCloseBtn.parentNode.classList.toggle('aside__popup--slide-up');
  surveyPopupCloseBtn.parentNode.classList.toggle('aside__popup--slide-down');

}

surveyPopupStartBtn.onclick = () => openSurvey();

function openSurvey() {

  get('survey.php').then(function(txt) { // AJAX start

    surveyPopupCloseBtn.parentNode.remove();

    document.body.innerHTML += txt; //add HTML

    //define varibels

    //Personlig info
    const nameInput = document.getElementById('nameInput');
    const emailInput = document.getElementById('emailInput');
    const newsletterInput = document.getElementById('newsletterInput');

    //top section
    const closeSurveyModal = document.getElementById('closeSurveyModal');
    const surveyHeadline = document.getElementById('surveyHeadline');

    const surveyForm = document.getElementById('aside__survey__form');
    const surveyOptions = document.getElementById('surveyOptions');
    const submit = document.getElementById('submit');


    const questionBoxAnwer = document.getElementsByClassName("question-box__answer");
    const questAnswers = document.getElementsByClassName('question-box__radio-input');

    const counter = document.getElementById('counter');
    const sectionSurvey = document.getElementById('survey');
    const questBox = document.getElementsByClassName('question-box');

    let i = 0;

    submit.style.display = "none";
    sessionStorage.setItem("i", i);//reset on reload

    counter.innerText = i +' / '+ (questBox.length - 1);
    questBox[i].classList.add('survey__checkbox--slide-up');

    onYouTubeIframeAPIReady(); //mute YT video

    sectionSurvey.onclick = function(e) {

      if(e.target.nodeName === "LABEL"){
        let siblings = e.target.parentNode.children;

        for (let i = 0; i < siblings.length; i++) {
          if (siblings[i].nodeName === "LABEL") {

            for (let ii = 0; ii < siblings[i].children.length; ii++) {

            if (siblings[i].children[ii].classList.contains('survey__radio-btn')) {

                siblings[i].children[ii].classList.remove('survey__radio-btn--active');

            }
          }
        }
      }

      for (let i = 0; i < e.target.children.length; i++) {
        if (e.target.children[i].classList.contains('survey__radio-btn')) {

            e.target.children[i].classList.toggle('survey__radio-btn--active')

        }
      }
    }

      if(e.target.nodeName === "DIV"){

        let siblings = e.target.parentNode.parentNode.children;

        for (let i = 0; i < siblings.length; i++) {

          for (let ii = 0; ii < siblings[i].children.length; ii++) {

            if (siblings[i].children[ii].classList.contains('survey__radio-btn--active')) {

                siblings[i].children[ii].classList.remove('survey__radio-btn--active');

          }
        }
      }

        e.target.classList.add('survey__radio-btn--active');

      }


      let i = Number(sessionStorage.getItem("i"));
      if(e.target.nodeName === "INPUT"
      && e.target.checked === true
      && i !== (questBox.length - 1)){

        questBox[i].classList.add('survey__checkbox--slide-down');
        questBox[i].classList.remove('survey__checkbox--slide-up');

        i++;

        counter.innerText = i +' / '+ (questBox.length - 1);

        if(i !== questBox.length){
          questBox[i].classList.add('survey__checkbox--slide-up');
          questBox[i].classList.remove('survey__checkbox--slide-down');
          sessionStorage.setItem("i", i);
        }else {
          sessionStorage.setItem("i", i);
        }
        if (i == (questBox.length - 1)) {
          submit.style.display = "block";
        }

    }
    }



    submit.onclick = () => {
      checkEmailForm();
    };

    function checkEmailForm() {
      let nameRegex = /[a-z]/g;
      let emailRegex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

      if (nameRegex.test(nameInput.value) === false) {

        alert('udfyld venligst dit navn');

      }else if (emailRegex.test(emailInput.value) === false) {

        alert('udfyld venligst din emai');

      }else {

        get('php/survey_send-email.php' // send mail with following info recived with $_GET[]
            +'?name='+       nameInput.value
            +'&email='+      emailInput.value
            +'&checkbox='+   newsletterInput.checked // returns true or false
        );

        getResult();
      }
    }

  function getResult() {

    let answerValues = [];

      for (let i = 0; i < questAnswers.length; i++) {

        if (questAnswers[i].checked) {

          answerValues.push(questAnswers[i].value);

        }
    }
    console.log('answer values to claculate: ' +answerValues);

    switch(mostRepeated(answerValues)){

          case "J":
            sectionSurvey.style.backgroundImage = "url('img/result_jæger.jpg')";
            surveyHeadline.innerText = 'Tillykke - Du blev jæger';
            surveyForm.innerHTML = `

            <div class="question-result__animation">
              <p>Du kan godt lide at sidde ude i naturen lidt i skjul og iagttage dyrene. Du har intet imod at stå tidligt op og tage ud at jage et par timer inden arbejdet kalder. Du er en rolig og opmærksom person, der bruger tiden i naturen til at filosofere over hverdagen.</p>
              <p>Har du brug for råd og vejledning, kan du kontakte vores jagtekspert <a href="#">Frederik<a></p>
              <a class="survey__result-btn" href="shop_main.php">Gå til webshoppens jægerafdeling</a>
              <button class="survey__result-btn">Del dit resultat på facebook</button>
            </div>`;
          break;

          case "F":
            sectionSurvey.style.backgroundImage = "url('img/result_fisker.jpg')";
            surveyHeadline.innerText = 'Tillykke - Du blev fisker';
            surveyForm.innerHTML = `

            <div class="question-result__animation">
              <p>Du kan godt lide at være tæt på vandet, enten i vandkanten eller i en båd. Tålmodighed er en dyd, som du i den grad besidder. Desuden er du god til at bruge dine hænder, særligt når det gælder fluebinding. </p>
              <p>Har du brug for råd og vejledning, kan du kontakte vores fiskeriekspert: <a href="#">Mikael</a></p>
              <a class="survey__result-btn" href="shop_main.php">Gå til webshoppens fiskeriafdeling</a>
              <button class="survey__result-btn">Del dit resultat på facebook</button>
            <div>`;
          break;

          case "O":
            sectionSurvey.style.backgroundImage = "url('img/result_outdoor.jpg')";
            surveyHeadline.innerText = 'Tillykke - Du blev outdoor-menneske';
            surveyForm.innerHTML = `

            <div class="question-result__animation">
              <p>Du elsker at være i naturen på alle tider af døgnet og gerne flere dage af gangen. Med et par solide vandresko og en pakke rygsæk er du klar til at opleve naturen på egen hånd. Som person kan du godt lide at prøve grænser af, og er ikke bange for nye udfordringer.</p>
              <p>Har du brug for råd og vejledning, kan du kontakte vores outdooransvarlige <a href="#">Helle<a></p>
              <a class="survey__result-btn" href="shop_main.php">Gå til webshoppens outdoorafdeling</a>
              <button class="survey__result-btn">Del dit resultat på facebook</button>
            </div>`;
          break;

          default:
              surveyHeadline.innerText = 'Dit resultat ilgger midt imellem';
              surveyForm.innerHTML = `

              <div class="question-result__animation">
                <p>Dit svar ligger på flere forskellige punker af vores kategorier. Er du i tvivl kan du besøge butikken og spørge nogle af vores dedikerede medarbejdere</p>
                <a class="survey__result-btn" href="shop_main.php">Find inspiration på webshoppen</a>
                <button class="survey__result-btn">Del dit resultat på facebook</button>
              </div>`;
          break;
        }
    }

    function mostRepeated(valuesArray){

      if(valuesArray.length === 0) return;

        let valuesCounted = {};
        let maxEl = valuesArray[0];

        for(let i = 0; i < valuesArray.length; i++) {

            let el = valuesArray[i];

            if(valuesCounted[el] === undefined){

              valuesCounted[el] = 1;

            }else{

              valuesCounted[el]++
            }

        }

        let sortHigest = [];

        for (let val in valuesCounted) {
            sortHigest.push([val, valuesCounted[val]]);
        }

        sortHigest.sort(function(a, b) {
            return b[1] - a[1];
        });

        maxEl = sortHigest[0][0];

        console.log("higest value is: " +maxEl);

        let values = Object.values(valuesCounted); // array with object values

          if (compare(values) === true) {maxEl = false};

          return maxEl;
        }


        function compare(arr) {

          let val;
          let bool = false;

          for (let i = 0; i < arr.length; i++) {

            if (arr[i] === val) {

              return bool = true;

            }else {

              val = arr[i];

            }
          }
          return bool;
        }

        // remove the modal
        closeSurveyModal.onclick = (e) => {
          e.target.parentNode.parentNode.remove();
        }

  });//AJAX finish
}


function get(url) {//ajax promise call

  return new Promise(function(resolve, reject) {

    var req = new XMLHttpRequest();

    req.open('GET', url);

    req.onload = function() {
      if (req.status == 200) {

        resolve(req.response);

        }else {

        reject(Error(req.statusText));

      }
    };

    req.onerror = function() {
      reject(Error("Network Error"));
    };

    req.send();
  });
}

})();
