<?php
namespace Vshswy\alidayu\Requests;

/**
 * 阿里大于 - 流量直充档位表
 *
 * @author Vshswy <2017年11月21日 14:01:49>
 * @link   http://open.taobao.com/docs/api.htm?apiId=26312
 */
class AlibabaAliqinFcFlowGrade extends Request implements IRequest
{
    /**
     * 接口名称
     * @var string
     */
    protected $method = 'alibaba.aliqin.fc.flow.grade';

    /**
     * 初始化
     */
    public function __construct()
    {
        $this->params = [];
    }
}
