<?php
namespace mindpowered\invoices;

use \maglev\MagLev;
use \maglev\MagLevPhp;
use \invoices\Invoices as Invoices_Library;

/**
 * Copyright Mind Powered Corporation 2020
 * 
 * https://mindpowered.dev/
 */


/**
 * An Library for Creating Invoices
 */
class Invoices
{
	/**
	 * Invoices
	 */
	function __construct() {
		$bus = MagLev::getInstance('default');
		$lib = new Invoices_Library($bus);
	}

	/**
	 * Create a new invoice
	 * @param string $clientId 
	 * @param string $invoiceNumber 
	 * @param string $date 
	 * @param string $dueDate 
	 * @param string $notes 
	 * @return string New invoice id
	 */
	public function CreateInvoice($clientId, $invoiceNumber, $date, $dueDate, $notes)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$clientId, $invoiceNumber, $date, $dueDate, $notes];
		$ret = null;
		$phpbus->call('Invoices.CreateInvoice', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Delete an invoice
	 * @param string $invoiceId 
	 * @return void
	 */
	public function DeleteInvoice($invoiceId)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$invoiceId];
		$phpbus->call('Invoices.DeleteInvoice', $args, function($async_ret){});
	}

	/**
	 * 
	 * @param string $invoiceId 
	 * @param string $clientId 
	 * @param string $invoiceNumber 
	 * @param string $date 
	 * @param string $dueDate 
	 * @param string $notes 
	 * @return void
	 */
	public function ChangeInvoice($invoiceId, $clientId, $invoiceNumber, $date, $dueDate, $notes)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$invoiceId, $clientId, $invoiceNumber, $date, $dueDate, $notes];
		$phpbus->call('Invoices.ChangeInvoice', $args, function($async_ret){});
	}

	/**
	 * 
	 * @param string $invoiceId 
	 * @return object 
	 */
	public function GetInvoiceSummary($invoiceId)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$invoiceId];
		$ret = null;
		$phpbus->call('Invoices.GetInvoiceSummary', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * 
	 * @param string $invoiceId 
	 * @return array Line items for invoice
	 */
	public function GetLineItems($invoiceId)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$invoiceId];
		$ret = null;
		$phpbus->call('Invoices.GetLineItems', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * 
	 * @param string $invoiceId 
	 * @param string $accountId 
	 * @param string $description 
	 * @param object $taxes 
	 * @param float $quantity 
	 * @param float $price 
	 * @return float lineNumber
	 */
	public function AddLineItem($invoiceId, $accountId, $description, $taxes, $quantity, $price)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$invoiceId, $accountId, $description, $taxes, $quantity, $price];
		$ret = null;
		$phpbus->call('Invoices.AddLineItem', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * 
	 * @param string $invoiceId 
	 * @param float $lineNumber 
	 * @param string $accountId 
	 * @param string $description 
	 * @param object $taxes 
	 * @param float $quantity 
	 * @param float $price 
	 * @return void
	 */
	public function ChangeLineItem($invoiceId, $lineNumber, $accountId, $description, $taxes, $quantity, $price)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$invoiceId, $lineNumber, $accountId, $description, $taxes, $quantity, $price];
		$phpbus->call('Invoices.ChangeLineItem', $args, function($async_ret){});
	}

	/**
	 * 
	 * @param string $invoiceId 
	 * @param float $lineNumber 
	 * @return void
	 */
	public function RemoveLineItem($invoiceId, $lineNumber)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$invoiceId, $lineNumber];
		$phpbus->call('Invoices.RemoveLineItem', $args, function($async_ret){});
	}

	/**
	 * 
	 * @param string $clientId 
	 * @return array 
	 */
	public function GetInvoicesByClient($clientId)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$clientId];
		$ret = null;
		$phpbus->call('Invoices.GetInvoicesByClient', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * 
	 * @param float $page 
	 * @param float $perpage 
	 * @return array 
	 */
	public function GetAllInvoices($page, $perpage)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$page, $perpage];
		$ret = null;
		$phpbus->call('Invoices.GetAllInvoices', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

	/**
	 * Returns the Invoice ID or null
	 * @param string $invoiceNumber 
	 * @return mixed 
	 */
	public function FindInvoiceByNumber($invoiceNumber)
	{
		$phpbus = MagLevPhp::getInstance('default');
		$args = [$invoiceNumber];
		$ret = null;
		$phpbus->call('Invoices.FindInvoiceByNumber', $args, function($async_ret) use (&$ret) { $ret = $async_ret; });
		return $ret;
	}

}
