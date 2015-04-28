<?php

namespace Revolution;
if(!defined('IN_INDEX')) { die('Sorry, you cannot access this file.'); }
class template implements iTemplate
{

	public $tpl;
	
	private $params = array();

	final public function Initiate()
	{
		global $_CONFIG, $users, $engine, $core, $template;
		$this->setParams('difiName', $_CONFIG['difi']['name']);
		$this->setParams('difiDesc', $_CONFIG['difi']['desc']);
		$this->setParams('url', $_CONFIG['difi']['url']);
		$this->setParams('online', $core->getOnline());
		$this->setParams('status', $core->getStatus());
		$this->setParams('web_build', $_CONFIG['difi']['web_build']);
		$this->setParams('external_vars', $_CONFIG['difi']['external_vars']);
		$this->setParams('external_texts', $_CONFIG['difi']['external_texts']);
		$this->setParams('swf_folder', $_CONFIG['difi']['swf_folder']);
		$this->setParams('furni_data', $_CONFIG['difi']['furni_data']);
		$this->SetParams('product_data', $_CONFIG['difi']['product_data']);
	
		
		$this->setParams('skin', $_CONFIG['template']['style']);
		
		if($users->isLogged())
		{	
		    $this->setParams('id', $users->getInfo($_SESSION['user']['id'], 'id'));
			$this->setParams('username', $users->getInfo($_SESSION['user']['id'], 'username'));
			$this->setParams('rank', $users->getInfo($_SESSION['user']['id'], 'rank'));
			$this->setParams('motto', $users->getInfo($_SESSION['user']['id'], 'motto'));
			$this->setParams('email', $users->getInfo($_SESSION['user']['id'], 'mail'));
			$this->setParams('coins', $users->getInfo($_SESSION['user']['id'] ,'credits'));
			$this->setParams('activitypoints', $users->getInfo($_SESSION['user']['id'], 'activity_points'));
			$this->setParams('figure', $users->getInfo($_SESSION['user']['id'], 'look'));
			$this->setParams('ip_last', $users->getInfo($_SESSION['user']['id'], 'ip_last'));
			
			if($this->params['rank'] > 3)
			{
				$this->setParams('housekeeping', '<li><a href="ase/">Housekeeping</a></li>'); 
			}
			else
			{
				$this->setParams('housekeeping', ''); 
			}
			
			if($_GET['url'] == 'me' || $_GET['url'] == 'account' || $_GET['url'] == 'home' || $_GET['url'] == 'settings' || $_GET['url'] == 'community')
			{
				$template->form->getPageHome();				
			}
			
			if($_GET['url'] == 'news' || $_GET['url'] == 'articles')
			{
				$template->form->getPageNews();
			}		
		}
		
	}
	
	final public function setParams($key, $value)
	{	
		$this->params[$key] .= $value; 
	}
	
	final public function filterParams($str)
    {
        foreach($this->params as $key => $value)
        {
            $str = str_ireplace('{' . $key . '}', $value, $str);
        }

        return $str;
	}
   	
	final public function write($str)
	{
		$this->tpl .= $str;
	}
	
	final public function outputTPL()
	{
		echo $this->filterParams($this->tpl);
		unset($this->tpl);
	}
}
?>