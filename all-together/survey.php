
<aside class="aside__survey">

<section id="survey" class="section-survey">

       <svg class="aside__survey__close" id="closeSurveyModal" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
           <path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"/>
           <path d="M0 0h24v24H0z" fill="none"/>
       </svg>

  <h3 id="surveyHeadline" class="aside__survey__headline">Hvilken type er du?</h3>

  <section id="aside__survey__form" method="post">

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

    <h4 class="question-box__text">Hvordan ser dit yndlings outfit ud?</h4>

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
      <input id="nameInput" type="text" name="name">

      <p for="email">E-mail</p>
      <input id="emailInput" type="text" name="email">

      <label class="question-box__news-letter">
        Modtag vores nyhedsbrev
        <div class="survey__radio-btn">
        <input id="newsletterInput" type="checkbox" class="question-box__radio-input">
      </label>

    </section>

    <aside id="surveyOptions" class="survey_options">

      <p id="counter"></p>

      <button  id="backward" class="survey-options__btn" type="button" name="tilbage">tilbage</button>
      <button id="forward" class="survey-options__btn" type="button" name="frem">frem</button>

      <button id="submit" class="survey-options__btn" type="submit">Få resultat</button>

    </aside>

  </section>

</section>

</aside>
