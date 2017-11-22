<?php
namespace Vshswy\alidayu\Requests;

/**
 * 阿里大于 - 请求接口类
 *
 * @author Vshswy <2017年11月21日 14:01:49>
 */
Interface IRequest
{
    /**
     * 获取接口名称
     * @return string
     */
    public function getMethod();

    /**
     * 获取请求参数
     * @return array 
     */
    public function getParams();
}
