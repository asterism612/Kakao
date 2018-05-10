https://github.com/SocialiteProviders/Kakao 의 수정버전
- email은 필수가 아니게 바뀜.

```composer require asterism612/kakao```

```
\SocialiteProviders\Manager\SocialiteWasCalled::class => [
  // add your listeners (aka providers) here
  'Asterism612\\Kakao\\KakaoExtendSocialite@handle',
  ] 
```
