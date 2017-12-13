<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Demo</title>
    <link rel="stylesheet" href="css/master.css">

  </head>
  <body>
<aside class="aside__survey">

<section id="survey" class="section-survey">

       <svg class="aside__survey__close" id="closeSurveyModal" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
           <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
           <path d="M0 0h24v24H0z" fill="none"/>
       </svg>

  <h3 id="surveyHeadline" class="aside__survey__headline">Hvem er du?</h3>

  <form id="aside__survey__form" action="index.html" method="post">

    <section class="question-box">

      <h4 class="question-box__text" >Hvordan har du det med at bruge dine hænder</h4>
      <label class="question-box__answer">
        Jeg har intet imod at partere og flå ting, men fingersnilde er ikke lige mig
        <div class="survey__radio-btn"></div>
        <input name="rad" type="radio" class="question-box__radio-input" value="J">
      </label>
      <label class="question-box__answer">
        Jeg har altid været god til at sysle med småting
        <div class="survey__radio-btn"></div>
        <input name="rad" type="radio" class="question-box__radio-input" value="F">
      </label>
      <label class="question-box__answer">
        Mine hænder bruger jeg kun til store ting, som f.eks. hugge brænde
        <div class="survey__radio-btn"></div>
        <input name="rad" type="radio" class="question-box__radio-input" value="O">
    </label>
  </section>

    <section class="question-box">
      <h4 class="question-box__text">Hvornår står du op?</h4 class="question-box__text">
      <label class="question-box__answer">
        Når min alarm ringer og jeg skal på arbejde
        <div class="survey__radio-btn"></div>
        <input name="rad" type="radio" class="question-box__radio-input" value="F">
      </label>
      <label class="question-box__answer">
        Når solen står op og jeg bliver vækket af naturens lyde
        <div class="survey__radio-btn"></div>
        <input name="rad" type="radio" class="question-box__radio-input" value="O">
      </label>
      <label class="question-box__answer">
        Jeg står altid op før solen, og er et udpræget A-menneske
        <div class="survey__radio-btn"></div>
        <input name="rad" type="radio" class="question-box__radio-input" value="J">
      </label>
    </section>

    <section class="question-box">
      <h4 class="question-box__text">Hvilke omgivelser sætter du mest pris på?</h4 class="question-box__text">
      <label class="question-box__answer">
      Jeg foretrækker det åbne landskab, hvor jeg kan se mine omgivelser
      <div class="survey__radio-btn"></div>
      <input name="rad" type="radio" class="question-box__radio-input" value="O">
    </label>
    <label class="question-box__answer">
      Jeg foretrækker at sidde lidt i skjul og iagttage omgivelserne
      <div class="survey__radio-btn"></div>
      <input name="rad" type="radio" class="question-box__radio-input" value="J">
    </label>
    <label class="question-box__answer">
      Jeg foretrækker at sidde nær vandet, hvor jeg finder ro
      <div class="survey__radio-btn"></div>
      <input name="rad" type="radio" class="question-box__radio-input" value="F">
    </label>
  </section>

    <section class="question-box">
      <h4 class="question-box__text">Hvordan tilbereder du en fisk</h4 class="question-box__text">
      <label class="question-box__answer">
      Jeg starter med at rense fisken, dernæst fileterer jeg den og til sidst steger jeg den
      <div class="survey__radio-btn"></div>
      <input name="rad" type="radio" class="question-box__radio-input" value="F">
    </label>
    <label class="question-box__answer">
      Jeg renser den og dernæst prøver jeg at skære den ud, lidt ligesom jeg gør med større dyr
      <div class="survey__radio-btn"></div>
      <input name="rad" type="radio" class="question-box__radio-input" value="J">
    </label>
    <label class="question-box__answer">
      Jeg renser fisken så godt jeg kan, spidder den og sætter den over bålet
      <div class="survey__radio-btn"></div>
      <input name="rad" type="radio" class="question-box__radio-input" value="O">
    </label>
  </section>

    <section class="question-box">
    <h4 class="question-box__text">Hvordan ser dit yndlings outfit ud?</h4 class="question-box__text">
    <label class="question-box__answer">
      Jeg er iført camouflage fra top til tå
      <div class="survey__radio-btn"></div>
      <input name="rad" type="radio" class="question-box__radio-input" value="J">
    </label>
      <label class="question-box__answer">
      Et par gode vandrestøvler og godt pakket ind
      <div class="survey__radio-btn"></div>
      <input name="rad" type="radio" class="question-box__radio-input" value="O">
    </label>
    <label class="question-box__answer">
      Mine gummistøvler og en regnjakke i højeste kvalitet
      <div class="survey__radio-btn"></label>
      <input name="rad" type="radio" class="question-box__radio-input" value="F">
    </label>
  </section>

    <section id="survey__email-form" class="question-box">
      <h4>Personlig info</h4>
      <p for="name">Navn</p>
      <input type="text" name="name">
      <p for="email">E-mail</p>
      <input type="text" name="name">

      <label class="question-box__news-letter">
        OMFG HELL YEAR GI MIG DET NYHEDSBREV MAINNN
        <div class="survey__radio-btn">
        <input type="radio" class="question-box__radio-input">
      </label>
    </section>

    <aside id="surveyOptions" class="survey_options">
      <p id="counter"></p>
      <button  id="backward" class="survey-options__btn" type="button" name="tilbage">tilbage</button>
      <button id="forward" class="survey-options__btn" type="button" name="frem">frem</button>
      <button id="submit" class="survey-options__btn" type="submit">Done</button>
    </aside>

    </form>

  </section>

</aside>

    <script type="text/javascript">
      const closeSurveyModal = document.getElementById('closeSurveyModal');
      const surveyHeadline = document.getElementById('surveyHeadline');
      const surveyForm = document.getElementById('aside__survey__form');
      const backward = document.getElementById('backward')
      const forward = document.getElementById('forward')
      const surveyOptions = document.getElementById('surveyOptions');
      const btn = document.getElementById('submit');
      const questAnswers = document.getElementsByClassName('question-box__radio-input');

      var counter = document.getElementById('counter');
      var sectionSurvey = document.getElementById('survey');
      var questBox = document.getElementsByClassName('question-box');
      let i = 0;

      checkOptions(i);

      sessionStorage.setItem("i", i);//reset on reload

      counter.innerText = i +' / '+ (questBox.length - 1);
      questBox[i].classList.add('survey__checkbox--slide-up');

      sectionSurvey.onclick = function(e) {


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
        checkOptions(i)
      }

      if (e.target.name === "tilbage" || e.target.name === "frem") {
        let i = Number(sessionStorage.getItem("i"));
        questBox[i].classList.remove('survey__checkbox--slide-up');
        questBox[i].classList.add('survey__checkbox--slide-down');
        if (e.target.name === "tilbage") {
          i--
        }else {
          i++
        }
        counter.innerText = (questBox.length - 1)+' / '+i;
        questBox[i].classList.add('survey__checkbox--slide-up');
        questBox[i].classList.remove('survey__checkbox--slide-down');
        sessionStorage.setItem("i", i);
        checkOptions(i)
      }
    }

  function checkOptions(i) {
    if(i === 0){
      backward.style.display = "none";
    }else {
      backward.style.display = "inline-block";
    }

    if(i === (questBox.length - 1)){
      forward.style.display = "none";
      btn.style.display = 'inline-block';
    }else {
      forward.style.display = "inline-block";
      btn.style.display = 'none';
    }
  }

      btn.onclick = () => getResult();

      function getResult() {
      var answerValues = [];

        for (let i = 0; i < questAnswers.length; i++) {

          if (questAnswers[i].checked === true) {

            answerValues.push(questAnswers[i].value);

          }

      }

      switch(mostRepeated(answerValues)){

            case "O":
            sectionSurvey.style.backgroundImage = "url('img/result_jæger.jpg')";
            surveyHeadline.innerText = 'Tillykke - Du blev jæger';
            surveyForm.innerHTML = `<div class="question-result__animation">
              <p>Du kan godt lide at sidde ude i naturen lidt i skjul og iagttage dyrene. Du har intet imod at stå tidligt op og tage ud at jage et par timer inden arbejdet kalder. Du er en rolig og opmærksom person, der bruger tiden i naturen til at filosofere over hverdagen.</p>
              <a class="survey__result-btn" href="#">Gå til</a><button class="survey__result-btn">Del dit resultat på facebook</button>
            </div>`
            break;

            case "F":
            sectionSurvey.style.backgroundImage = "url('img/result_fisker.jpg')";
            surveyHeadline.innerText = 'Tillykke - Du blev fisker';
            surveyForm.innerHTML = `<div class="question-result__animation">
              <p>Du kan godt lide at være tæt på vandet, enten i vandkanten eller i en båd. Tålmodighed er en dyd, som du i den grad besidder. Desuden er du god til at bruge dine hænder, særligt når det gælder fluebinding. </p>
              <a class="survey__result-btn" href="#">Gå til</a><button class="survey__result-btn">Del dit resultat på facebook</button>
            <div>`
            break;

            case "J":
            sectionSurvey.style.backgroundImage = "url('img/result_outdoor.jpg')";
            surveyHeadline.innerText = 'Tillykke - Du blev outdoor-menneske';
            surveyForm.innerHTML = `<div class="question-result__animation">
              <p>Du elsker at være i naturen på alle tider af døgnet og gerne flere dage af gangen. Med et par solide vandresko og en pakke rygsæk er du klar til at opleve naturen på egen hånd. Som person kan du godt lide at prøve grænser af, og er ikke bange for nye udfordringer.</p>
              <a class="survey__result-btn" href="#">Gå til</a><button class="survey__result-btn">Del dit resultat på facebook</button>
            </div>`
            break;

            default:  surveyHeadline.innerText = 'Dit resultat ilgger midt imellem';
                surveyForm.innerHTML = `<div class="question-result__animation">
                <p>Dit svar ligger på flere forskellige punker af vores kategorier. Er du i tvivl kan du besøge butikken og spørge nogle af vores dedikerede medarbejdere<p>
                <a class="survey__result-btn">Del dit resultat på facebook</a>
                </div>`;
            break;
          }
      }

      function mostRepeated(array){

        if(array.length === 0) return;
          var modeMap = {};
          var maxEl = array[0];
          var maxCount = 1;

          for(let i = 0; i < array.length; i++) {
              var el = array[i];
              if(modeMap[el] === undefined){
                modeMap[el] = 1;
              }else{
                modeMap[el]++
              }
              if(modeMap[el] > maxCount){
                maxEl = el;
              }
          }

          var values = Object.values(modeMap); // array with object values

            if (compare(values) === true) {maxEl = false};
            return maxEl;
          }

          function compare(arr) {
            var val;
            var bool = false;
            for (var i = 0; i < arr.length; i++) {
              if (arr[i] === val) {

                return bool = true;
              }else {
                val = arr[i];
              }
            }
            return bool;
          }

          // remove the modal
          closeSurveyModal.onclick = function(){
            this.parentNode.parentNode.remove();
          }
    </script>

  </body>
</html>
