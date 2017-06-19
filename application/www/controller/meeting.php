<?php

namespace app\www\controller;

use app\www\helper\StaticInit;
use think\Controller;
use think\Request;

class meeting extends Controller
{
    use StaticInit;

    /**
     * 前置操作
     * @param \think\Request $request
     */
    public function _initialize()
    {
        parent::_initialize();
        $_request = Request::instance();
        $page     = strtolower($_request->controller().'.'.$_request->action() );
        $this->assign('options', $this->options($page));
    }

    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        return $this->fetch('index',['title'=>'中国高等教育学会-分支机构']);
    }

    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}