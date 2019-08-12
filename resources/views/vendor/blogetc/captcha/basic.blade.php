<label for="captcha">Captcha</label>
       {!! NoCaptcha::renderJs() !!}
       {!! NoCaptcha::display() !!}
<span class="text-danger">{{ $errors->first('recaptcha') }}</span>