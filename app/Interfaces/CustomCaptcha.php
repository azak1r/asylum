<?php 

namespace App\Interfaces;

use WebDevEtc\BlogEtc\Interfaces\CaptchaInterface;
use Illuminate\Http\Request;
use WebDevEtc\BlogEtc\Models\BlogEtcPost;

use Illuminate\Routing\Controller as BaseController;

class CustomCaptcha implements CaptchaInterface
{
    /**
     * What should the field name be (in the <input type='text' name='????'>)
     *
     * @return string
     */
    public function captcha_field_name()
    {
        return 'g-recaptcha-response';
    }

    /**
     * What view file should we use for the captcha field?
     *
     * @return string
     */
    public function view()
    {
        return 'blogetc::captcha.basic';
    }

    /**
     * What rules should we use for the validation for this field?
     *
     * @return array
     */
    public function rules()
    {
            return [
                'required',
                'captcha'
        ];
    }

    public function runCaptchaBeforeShowingPosts(Request $request, BlogEtcPost $blogEtcPost)
    {
    }

    public function runCaptchaBeforeAddingComment(Request $request, BlogEtcPost $blogEtcPost)
    {
    }
}