<?php
// +----------------------------------------------------------------------
// | ThinkPHP
// +----------------------------------------------------------------------
// | Copyright (c) 2008 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id$

/**
 +------------------------------------------------------------------------------
 * 委托数据库的Dao对象验证用户信息
 +------------------------------------------------------------------------------
 * @category   ORG
 * @package  ORG
 * @subpackage  RBAC
 * @author    liu21st <liu21st@gmail.com>
 * @version   $Id$
 +------------------------------------------------------------------------------
 */
class DaoAuthentictionProvider extends ProviderManager
{//类定义开始

    /**
     +----------------------------------------------------------
     * 数据库认证的表名
     +----------------------------------------------------------
     * @var integer
     * @access protected
     +----------------------------------------------------------
     */
    protected $authTable;

    /**
     +----------------------------------------------------------
     * 数据库表主键名
     +----------------------------------------------------------
     * @var integer
     * @access protected
     +----------------------------------------------------------
     */
    protected $pk =   'id';

    /**
     +----------------------------------------------------------
     * 数据库表主键名
     +----------------------------------------------------------
     * @var integer
     * @access protected
     +----------------------------------------------------------
     */
    protected $authType =   array();


    /**
     +----------------------------------------------------------
     * 架构函数
     +----------------------------------------------------------
     * @static
     * @access public
     +----------------------------------------------------------
     */
    public function authenticate($map,$daoClass='User')
    {
        $dao    = D($daoClass);
        $result = $dao->find($map);
        if($result) {
            $this->data =   $result;
            return true;
        }else {
            return false;
        }
    }

}//类定义结束
?>