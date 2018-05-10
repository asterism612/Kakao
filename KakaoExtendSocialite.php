<?php

namespace Asterism612\Kakao;

use SocialiteProviders\Manager\SocialiteWasCalled;

class KakaoExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('kakao', KakaoProvider::class);
    }
}
