<?php


class AccessToken
{
	/**
     * http://mp.weixin.qq.com/wiki/14/9f9c82c1af308e3b14ba9b973f99a8ba.html
     */
    const ACCESS_TOKEN = 'https://api.weixin.qq.com/cgi-bin/token';

    /**
     * 构造方法
     */
    public function __construct($appid, $appsecret)
    {
        $this->set('appid',     $appid);
        $this->set('appsecret', $appsecret);
    }

}