<?php
/**
 * Created by PhpStorm.
 * User: xshaitt
 * Date: 2017/4/10
 * Time: 下午4:09
 */
function getApiData($url, $token)
{
    $curl = new Curl\Curl();
    $curl->setHeader('Api-Token', $token);
    $curl->get($url);
    return $curl->response;
}

function putApiData($url, $data, $token)
{
    $curl = new Curl\Curl();
    $curl->setHeader('Api-Token', $token);
    return $curl->response;
}

function postApiData($url, $data, $token)
{
    $curl = new Curl\Curl();
    $curl->setHeader('Api-Token', $token);
    $curl->post($url, $data);
    return $curl->response;
}

function deleteApiData($url, $token)
{
    $curl = new Curl\Curl();
    $curl->setHeader('Api-Token', $token);
    $curl->delete($url);
    return $curl->response;
}