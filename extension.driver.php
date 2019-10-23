<?php
	
	class extension_param_admin_path extends Extension {
		
		public function about() {
			return array(
				'name'			=> 'Param Admin-Path',
				'version'		=> '1.0',
				'release-date'	=> '2019-10-23',
				'author'		=> array(
					'name'			=> 'Stefan Wiegmann'
				),
				'description' => 'Adds the Admin-Path to XML-Parameters.'
			);
		}
		
		public function uninstall() {
			return true;
		}
		
		public function install() {
			return true;
		}
		
		public function getSubscribedDelegates() {
			return array(
				array(
					'page'		=> '/frontend/',
					'delegate'	=> 'FrontendParamsResolve',
					'callback'	=> 'doLogic'
				)
			);
		}
		
		public function doLogic(&$context) {
			$context['params']['admin-path'] = Symphony::Configuration()->get('admin-path', 'symphony');
		}
	}