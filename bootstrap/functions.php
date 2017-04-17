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
    $curl->put($url, $data);
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

function modifyEnv(array $data)
{
    $envPath = base_path() . DIRECTORY_SEPARATOR . '.env';

    $contentArray = collect(file($envPath, FILE_IGNORE_NEW_LINES));

    $contentArray->transform(function ($item) use ($data) {
        foreach ($data as $key => $value) {
            if (str_contains($item, $key)) {
                return $key . '=' . $value;
            }
        }

        return $item;
    });

    $content = implode($contentArray->toArray(), "\n");

    \File::put($envPath, $content);
}


/**
 * 发送短信方法
 *
 * @param int $type     发送短信的类型（必须）
 * @param str $phone    接收短信的号码（必须）
 * @param int $power    电量（必须）
 * @param int $num      该企业电源不足的设备id（必须）
 * @param int $switch   ups开关状态（必须）
 * @return string
 *
 * Author: 钱霄宇
 * Date: 2017/4/12
 */
function takeMessage($type,$phone,$power,$num,$switch)
{
    //定义默认返回信息
    $jsonData = ['status'=>'200','message'=>'发送成功'];

    //判断号码是否合法
//    $checkPhone = \Illuminate\Support\Facades\DB::table('enterprises')->where('phone',$phone)->value('phone');
//    if($checkPhone == null){
//        $jsonData = ['status'=>'404','message'=>'该号码不合法'];
//        return response()->json($jsonData);
//    }

    //阿里大于参数配置
    $config = [
        'app_key'    => env('MESSAGE_APP_KEY'),
        'app_secret' => env('MESSAGE_APP_SECRET'),
    ];

    //初始化
    $client = new Flc\Alidayu\Client(new Flc\Alidayu\App($config));
    $req    = new Flc\Alidayu\Requests\AlibabaAliqinFcSmsNumSend;

    //设置号码以及签名
    $req->setRecNum($phone)
        ->setSmsFreeSignName(env('MESSAGE_SIGNNAME'));
    //通过判断是什么情况（1是电源不足，2是ups开关状态）来设置模板及参数
    if($type==1) $req->setSmsTemplateCode(env('MESSAGE_FIRST_TEMPLATE'))->setSmsParam(['str'=>$num,'time' => $power]);
    if($type==2) $req->setSmsTemplateCode(env('MESSAGE_SECOND_TEMPLATE'))->setSmsParam(['switch'=>$switch]);

    //执行发送短信
    $resp = $client->execute($req);

    //判断发送结果
    if($resp->result->success != true) $jsonData = ['status'=>'300','message'=>'发送失败'];

    //返回发送结果
    return response()->json($jsonData);
}