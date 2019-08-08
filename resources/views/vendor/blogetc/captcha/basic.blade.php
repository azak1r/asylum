<label id="captcha_label"
           for="captcha">Captcha: {{ config("blogetc.captcha.basic_question", "[error - undefined captcha question]" )}} </label>
<div class="youplay-textarea">
       <div class="youplay-input">
              <input type="text" required name='captcha' id="captcha" placeholder="Your Answer..." value="{{old("captcha")}}">
       </div>
</div>