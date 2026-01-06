<?php
/**
*	Description: Class Model : Manages all connection methods to the main table.
*	Version: 1.0
*	Author:
*/
class Modelnewletter
{
	protected $_name_table = "wpnk_contact";
	protected $_table_save = "";
	protected $_ip_server = NULL;

	public function __construct()
	{
		global $wpdb;
		$this -> _ip_server = $_SERVER["REMOTE_ADDR"];
		$this -> _table_save = $this -> _name_table;
	}

	public function get_registros($fi = "",$ff = "", $paginate = 0)
	{
		global $wpdb;

		if(empty($fi))
		{
			$QueryStr =
			"
				SELECT wpnk_contact.*
				FROM wpnk_contact
				ORDER BY wpnk_contact.id desc
				Limit {$paginate}, 50
				";
		}
		else
		{
			$fi = explode("/",$fi);
			$fi = $fi[2]."-".$fi[1]."-".$fi[0];

			$ff = explode("/",$ff);
			$ff = $ff[2]."-".$ff[1]."-".$ff[0];

			$QueryStr = "
			SELECT wpnk_contact.*
			FROM wpnk_contact
			Where wpnk_contact.date_add between '".$fi." 00:00:00' and '".$ff." 23:59:59'
			ORDER BY wpnk_contact.id desc
			Limit {$paginate}, 50
			";
		}
		return $pageposts = $wpdb->get_results($QueryStr, OBJECT);
	}

	public function get_registros_excel($fi = "",$ff = "")
	{
		global $wpdb;

		if(empty($fi))
		{
			$QueryStr =
			"
				SELECT wpnk_contact.*
				FROM wpnk_contact
				ORDER BY wpnk_contact.id desc
				";
		}
		else
		{
			$fi = explode("/",$fi);
			$fi = $fi[2]."-".$fi[1]."-".$fi[0];

			$ff = explode("/",$ff);
			$ff = $ff[2]."-".$ff[1]."-".$ff[0];

			$QueryStr = "
			SELECT wpnk_contact.*
			FROM wpnk_contact
			Where wpnk_contact.date_add between '".$fi." 00:00:00' and '".$ff." 23:59:59'
			ORDER BY wpnk_contact.id desc
			";
		}
		return $pageposts = $wpdb->get_results($QueryStr, OBJECT);
	}

	public function get_registros_c($fi = "",$ff = "")
	{
		global $wpdb;

		if(empty($fi))
		{
			$QueryStr =
			"
				SELECT wpnk_contact.*
				FROM wpnk_contact
				ORDER BY wpnk_contact.id desc
				";
		}
		else
		{
			$fi = explode("/",$fi);
			$fi = $fi[2]."-".$fi[1]."-".$fi[0];

			$ff = explode("/",$ff);
			$ff = $ff[2]."-".$ff[1]."-".$ff[0];

			$QueryStr = "
			SELECT wpnk_contact.*
			FROM wpnk_contact
			Where wpnk_contact.date_add between '".$fi." 00:00:00' and '".$ff." 23:59:59'
			ORDER BY wpnk_contact.id desc
			";
		}
		return $pageposts = $wpdb->get_results($QueryStr, OBJECT);
	}

}