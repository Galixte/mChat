<?php

/**
 *
 * @package phpBB Extension - mChat
 * @copyright (c) 2016 dmzx - http://www.dmzx-web.net
 * @copyright (c) 2016 kasimi
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 *
 */

namespace dmzx\mchat\migrations;

class mchat_2_0_0_rc4 extends \phpbb\db\migration\migration
{
	/** @const string */
	const MCHAT_VERSION = '2.0.0-RC4';

	static public function depends_on()
	{
		return array(
			'\dmzx\mchat\migrations\mchat_2_0_0_rc3',
		);
	}

	public function effectively_installed()
	{
		return isset($this->config['mchat_version']) && version_compare($this->config['mchat_version'], self::MCHAT_VERSION, '>=');
	}

	public function update_data()
	{
		return array(
			array('config.update', array('mchat_version', self::MCHAT_VERSION)),
		);
	}
}