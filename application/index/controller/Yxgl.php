<?php
namespace app\index\controller;
// use app\index\controller\Base;
use think\Controller;
class Yxgl extends Controller
{
    public function index()
    {
    	
        return $this->fetch();
    }
     public function sbpz()
    {
    	
        return $this->fetch('sbpz');
    }
     public function wlxx()
    {
    	
        return $this->fetch('wlxx');
    }
    public function zzbz()
    {
        
        return $this->fetch('zzbz');
    }
    public function zxzd()
    {
        
        return $this->fetch('zxzd');

       
    }
    
    public function zx_aqzd()
    {
        
        return $this->fetch('zx_aqzd');

       
    }
     public function zx_gzry_zz()
    {
        
        return $this->fetch('zx_gzry_zz');

       
    }
     public function zx_gzry_px()
    {
        
        return $this->fetch('zx_gzry_px');

       
    }
    public function zx_sysz()
    {
        
        return $this->fetch('zx_sysz');

       
    }
    public function zx_sb_glzd()
    {
        
        return $this->fetch('zx_sb_glzd');

       
    }
    public function zx_sb_glbf()
    {
        
        return $this->fetch('zx_sb_glbf');

       
    }
    public function zx_js_zz()
    {
        
        return $this->fetch('zx_js_zz');

       
    }

}
