<?php
namespace Qwel_Theme;

/**
 * テーマの全般設定を取得する関数群
 */
trait Base {
	use \Qwel_Theme\Base_Settings;

	/**
	 * デフォルト設定を取得
	 */
	public static function get_default_data($section, $key = false) {
		// $data を上書きするHook
		$data = apply_filters('qwel_theme_defaults', self::$data);

		$theme_settings  = $data;
		$section         = $theme_settings[$section];

		// キーを指定している場合
		if ($key) {		
			// セクションが存在しなければ、falseを返す
			if (!isset($section)) return false;
			$data            = $section[$key];

			// 設定が存在しなければ、falseを返す
			if (!isset($data)) return false;
			return $data;

		// キーを指定していない場合
		} else {
			// セクションが存在していればセクションを返す
			if (isset($section)) {
				return $section;
			} else {
				return false;
			}
		}
	}

	/**
	 * カスタマイザーの設定を取得
	 */
	public static function get_data($section, $key = false, $default = false) {
		// デフォルト値
		if (!$default) $default = self::get_default_data($section, $key);

		$theme_settings  = get_theme_mod(self::$db_name);
		$section         = $theme_settings[$section];

		// キーを指定している場合
		if ($key) {	
			// セクションが存在しなければ、デフォルト値を返す
			if (!isset($section)) return $default;
			$data = $section[$key];

			// 設定が存在しなければ、デフォルト値を返す
			if (!isset($data)) return $default;
			return $data;

		// キーを指定していない場合
		} else {
			// セクションが存在していればセクションを返す
			if (isset($section)) {
				return $section;
			} else {
				return $default;
			}
		}
	}
}
