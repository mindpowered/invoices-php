<?php
/**
 * Generated by Haxe 4.1.1
 */

namespace invoices;

use \maglev\MagLevString;
use \maglev\MagLevFunction;
use \php\Boot;
use \maglev\MagLevResult;
use \maglev\MagLev;
use \maglev\MagLevError;
use \maglev\MagLevArray;

class Invoices {
	/**
	 * @var MagLev
	 */
	public $maglev;

	/**
	 * @param MagLev $maglev
	 * 
	 * @return void
	 */
	public function __construct ($maglev) {
		#/src/invoices/Invoices.hx:12: characters 3-23
		$this->maglev = $maglev;
		#/src/invoices/Invoices.hx:13: characters 3-22
		$this->registerMyMethods();
	}

	/**
	 * @return void
	 */
	public function registerMyMethods () {
		#/src/invoices/Invoices.hx:17: characters 3-25
		$bus = $this->maglev;
		#/src/invoices/Invoices.hx:19: lines 19-28
		$this->maglev->register("Invoices.CreateInvoice", MagLevFunction::fromFunction(function ($args) use (&$bus) {
			#/src/invoices/Invoices.hx:20: characters 4-48
			$data = MagLevArray::create();
			#/src/invoices/Invoices.hx:21: characters 4-59
			$data->push(MagLevString::fromString("_not_implemented_"));
			#/src/invoices/Invoices.hx:22: characters 4-64
			$data->push(MagLevString::fromString("Invoices.CreateInvoice"));
			#/src/invoices/Invoices.hx:23: characters 4-50
			$data->push(MagLevString::fromString("invoices"));
			#/src/invoices/Invoices.hx:24: characters 4-48
			$bus->call("MindPowered.Telemetry.Send", $data);
			#/src/invoices/Invoices.hx:25: characters 4-220
			$err = MagLevError::create(-20000, "You are trying to use the 'Invoices.CreateInvoice' method but it's not quite done yet. Please email support@mindpowered.dev to find out when it will be done.", $data);
			#/src/invoices/Invoices.hx:26: characters 4-58
			$result = MagLevResult::fromError($err);
			#/src/invoices/Invoices.hx:27: characters 4-17
			return $result;
		}));
		#/src/invoices/Invoices.hx:30: lines 30-39
		$this->maglev->register("Invoices.DeleteInvoice", MagLevFunction::fromFunction(function ($args) use (&$bus) {
			#/src/invoices/Invoices.hx:31: characters 4-48
			$data = MagLevArray::create();
			#/src/invoices/Invoices.hx:32: characters 4-59
			$data->push(MagLevString::fromString("_not_implemented_"));
			#/src/invoices/Invoices.hx:33: characters 4-64
			$data->push(MagLevString::fromString("Invoices.DeleteInvoice"));
			#/src/invoices/Invoices.hx:34: characters 4-50
			$data->push(MagLevString::fromString("invoices"));
			#/src/invoices/Invoices.hx:35: characters 4-48
			$bus->call("MindPowered.Telemetry.Send", $data);
			#/src/invoices/Invoices.hx:36: characters 4-220
			$err = MagLevError::create(-20000, "You are trying to use the 'Invoices.DeleteInvoice' method but it's not quite done yet. Please email support@mindpowered.dev to find out when it will be done.", $data);
			#/src/invoices/Invoices.hx:37: characters 4-58
			$result = MagLevResult::fromError($err);
			#/src/invoices/Invoices.hx:38: characters 4-17
			return $result;
		}));
		#/src/invoices/Invoices.hx:41: lines 41-50
		$this->maglev->register("Invoices.ChangeInvoice", MagLevFunction::fromFunction(function ($args) use (&$bus) {
			#/src/invoices/Invoices.hx:42: characters 4-48
			$data = MagLevArray::create();
			#/src/invoices/Invoices.hx:43: characters 4-59
			$data->push(MagLevString::fromString("_not_implemented_"));
			#/src/invoices/Invoices.hx:44: characters 4-64
			$data->push(MagLevString::fromString("Invoices.ChangeInvoice"));
			#/src/invoices/Invoices.hx:45: characters 4-50
			$data->push(MagLevString::fromString("invoices"));
			#/src/invoices/Invoices.hx:46: characters 4-48
			$bus->call("MindPowered.Telemetry.Send", $data);
			#/src/invoices/Invoices.hx:47: characters 4-220
			$err = MagLevError::create(-20000, "You are trying to use the 'Invoices.ChangeInvoice' method but it's not quite done yet. Please email support@mindpowered.dev to find out when it will be done.", $data);
			#/src/invoices/Invoices.hx:48: characters 4-58
			$result = MagLevResult::fromError($err);
			#/src/invoices/Invoices.hx:49: characters 4-17
			return $result;
		}));
		#/src/invoices/Invoices.hx:52: lines 52-61
		$this->maglev->register("Invoices.GetInvoiceSummary", MagLevFunction::fromFunction(function ($args) use (&$bus) {
			#/src/invoices/Invoices.hx:53: characters 4-48
			$data = MagLevArray::create();
			#/src/invoices/Invoices.hx:54: characters 4-59
			$data->push(MagLevString::fromString("_not_implemented_"));
			#/src/invoices/Invoices.hx:55: characters 4-68
			$data->push(MagLevString::fromString("Invoices.GetInvoiceSummary"));
			#/src/invoices/Invoices.hx:56: characters 4-50
			$data->push(MagLevString::fromString("invoices"));
			#/src/invoices/Invoices.hx:57: characters 4-48
			$bus->call("MindPowered.Telemetry.Send", $data);
			#/src/invoices/Invoices.hx:58: characters 4-224
			$err = MagLevError::create(-20000, "You are trying to use the 'Invoices.GetInvoiceSummary' method but it's not quite done yet. Please email support@mindpowered.dev to find out when it will be done.", $data);
			#/src/invoices/Invoices.hx:59: characters 4-58
			$result = MagLevResult::fromError($err);
			#/src/invoices/Invoices.hx:60: characters 4-17
			return $result;
		}));
		#/src/invoices/Invoices.hx:63: lines 63-72
		$this->maglev->register("Invoices.GetLineItems", MagLevFunction::fromFunction(function ($args) use (&$bus) {
			#/src/invoices/Invoices.hx:64: characters 4-48
			$data = MagLevArray::create();
			#/src/invoices/Invoices.hx:65: characters 4-59
			$data->push(MagLevString::fromString("_not_implemented_"));
			#/src/invoices/Invoices.hx:66: characters 4-63
			$data->push(MagLevString::fromString("Invoices.GetLineItems"));
			#/src/invoices/Invoices.hx:67: characters 4-50
			$data->push(MagLevString::fromString("invoices"));
			#/src/invoices/Invoices.hx:68: characters 4-48
			$bus->call("MindPowered.Telemetry.Send", $data);
			#/src/invoices/Invoices.hx:69: characters 4-219
			$err = MagLevError::create(-20000, "You are trying to use the 'Invoices.GetLineItems' method but it's not quite done yet. Please email support@mindpowered.dev to find out when it will be done.", $data);
			#/src/invoices/Invoices.hx:70: characters 4-58
			$result = MagLevResult::fromError($err);
			#/src/invoices/Invoices.hx:71: characters 4-17
			return $result;
		}));
		#/src/invoices/Invoices.hx:74: lines 74-83
		$this->maglev->register("Invoices.AddLineItem", MagLevFunction::fromFunction(function ($args) use (&$bus) {
			#/src/invoices/Invoices.hx:75: characters 4-48
			$data = MagLevArray::create();
			#/src/invoices/Invoices.hx:76: characters 4-59
			$data->push(MagLevString::fromString("_not_implemented_"));
			#/src/invoices/Invoices.hx:77: characters 4-62
			$data->push(MagLevString::fromString("Invoices.AddLineItem"));
			#/src/invoices/Invoices.hx:78: characters 4-50
			$data->push(MagLevString::fromString("invoices"));
			#/src/invoices/Invoices.hx:79: characters 4-48
			$bus->call("MindPowered.Telemetry.Send", $data);
			#/src/invoices/Invoices.hx:80: characters 4-218
			$err = MagLevError::create(-20000, "You are trying to use the 'Invoices.AddLineItem' method but it's not quite done yet. Please email support@mindpowered.dev to find out when it will be done.", $data);
			#/src/invoices/Invoices.hx:81: characters 4-58
			$result = MagLevResult::fromError($err);
			#/src/invoices/Invoices.hx:82: characters 4-17
			return $result;
		}));
		#/src/invoices/Invoices.hx:85: lines 85-94
		$this->maglev->register("Invoices.ChangeLineItem", MagLevFunction::fromFunction(function ($args) use (&$bus) {
			#/src/invoices/Invoices.hx:86: characters 4-48
			$data = MagLevArray::create();
			#/src/invoices/Invoices.hx:87: characters 4-59
			$data->push(MagLevString::fromString("_not_implemented_"));
			#/src/invoices/Invoices.hx:88: characters 4-65
			$data->push(MagLevString::fromString("Invoices.ChangeLineItem"));
			#/src/invoices/Invoices.hx:89: characters 4-50
			$data->push(MagLevString::fromString("invoices"));
			#/src/invoices/Invoices.hx:90: characters 4-48
			$bus->call("MindPowered.Telemetry.Send", $data);
			#/src/invoices/Invoices.hx:91: characters 4-221
			$err = MagLevError::create(-20000, "You are trying to use the 'Invoices.ChangeLineItem' method but it's not quite done yet. Please email support@mindpowered.dev to find out when it will be done.", $data);
			#/src/invoices/Invoices.hx:92: characters 4-58
			$result = MagLevResult::fromError($err);
			#/src/invoices/Invoices.hx:93: characters 4-17
			return $result;
		}));
		#/src/invoices/Invoices.hx:96: lines 96-105
		$this->maglev->register("Invoices.RemoveLineItem", MagLevFunction::fromFunction(function ($args) use (&$bus) {
			#/src/invoices/Invoices.hx:97: characters 4-48
			$data = MagLevArray::create();
			#/src/invoices/Invoices.hx:98: characters 4-59
			$data->push(MagLevString::fromString("_not_implemented_"));
			#/src/invoices/Invoices.hx:99: characters 4-65
			$data->push(MagLevString::fromString("Invoices.RemoveLineItem"));
			#/src/invoices/Invoices.hx:100: characters 4-50
			$data->push(MagLevString::fromString("invoices"));
			#/src/invoices/Invoices.hx:101: characters 4-48
			$bus->call("MindPowered.Telemetry.Send", $data);
			#/src/invoices/Invoices.hx:102: characters 4-221
			$err = MagLevError::create(-20000, "You are trying to use the 'Invoices.RemoveLineItem' method but it's not quite done yet. Please email support@mindpowered.dev to find out when it will be done.", $data);
			#/src/invoices/Invoices.hx:103: characters 4-58
			$result = MagLevResult::fromError($err);
			#/src/invoices/Invoices.hx:104: characters 4-17
			return $result;
		}));
		#/src/invoices/Invoices.hx:107: lines 107-116
		$this->maglev->register("Invoices.GetInvoicesByClient", MagLevFunction::fromFunction(function ($args) use (&$bus) {
			#/src/invoices/Invoices.hx:108: characters 4-48
			$data = MagLevArray::create();
			#/src/invoices/Invoices.hx:109: characters 4-59
			$data->push(MagLevString::fromString("_not_implemented_"));
			#/src/invoices/Invoices.hx:110: characters 4-70
			$data->push(MagLevString::fromString("Invoices.GetInvoicesByClient"));
			#/src/invoices/Invoices.hx:111: characters 4-50
			$data->push(MagLevString::fromString("invoices"));
			#/src/invoices/Invoices.hx:112: characters 4-48
			$bus->call("MindPowered.Telemetry.Send", $data);
			#/src/invoices/Invoices.hx:113: characters 4-226
			$err = MagLevError::create(-20000, "You are trying to use the 'Invoices.GetInvoicesByClient' method but it's not quite done yet. Please email support@mindpowered.dev to find out when it will be done.", $data);
			#/src/invoices/Invoices.hx:114: characters 4-58
			$result = MagLevResult::fromError($err);
			#/src/invoices/Invoices.hx:115: characters 4-17
			return $result;
		}));
		#/src/invoices/Invoices.hx:118: lines 118-127
		$this->maglev->register("Invoices.GetAllInvoices", MagLevFunction::fromFunction(function ($args) use (&$bus) {
			#/src/invoices/Invoices.hx:119: characters 4-48
			$data = MagLevArray::create();
			#/src/invoices/Invoices.hx:120: characters 4-59
			$data->push(MagLevString::fromString("_not_implemented_"));
			#/src/invoices/Invoices.hx:121: characters 4-65
			$data->push(MagLevString::fromString("Invoices.GetAllInvoices"));
			#/src/invoices/Invoices.hx:122: characters 4-50
			$data->push(MagLevString::fromString("invoices"));
			#/src/invoices/Invoices.hx:123: characters 4-48
			$bus->call("MindPowered.Telemetry.Send", $data);
			#/src/invoices/Invoices.hx:124: characters 4-221
			$err = MagLevError::create(-20000, "You are trying to use the 'Invoices.GetAllInvoices' method but it's not quite done yet. Please email support@mindpowered.dev to find out when it will be done.", $data);
			#/src/invoices/Invoices.hx:125: characters 4-58
			$result = MagLevResult::fromError($err);
			#/src/invoices/Invoices.hx:126: characters 4-17
			return $result;
		}));
		#/src/invoices/Invoices.hx:129: lines 129-138
		$this->maglev->register("Invoices.FindInvoiceByNumber", MagLevFunction::fromFunction(function ($args) use (&$bus) {
			#/src/invoices/Invoices.hx:130: characters 4-48
			$data = MagLevArray::create();
			#/src/invoices/Invoices.hx:131: characters 4-59
			$data->push(MagLevString::fromString("_not_implemented_"));
			#/src/invoices/Invoices.hx:132: characters 4-70
			$data->push(MagLevString::fromString("Invoices.FindInvoiceByNumber"));
			#/src/invoices/Invoices.hx:133: characters 4-50
			$data->push(MagLevString::fromString("invoices"));
			#/src/invoices/Invoices.hx:134: characters 4-48
			$bus->call("MindPowered.Telemetry.Send", $data);
			#/src/invoices/Invoices.hx:135: characters 4-226
			$err = MagLevError::create(-20000, "You are trying to use the 'Invoices.FindInvoiceByNumber' method but it's not quite done yet. Please email support@mindpowered.dev to find out when it will be done.", $data);
			#/src/invoices/Invoices.hx:136: characters 4-58
			$result = MagLevResult::fromError($err);
			#/src/invoices/Invoices.hx:137: characters 4-17
			return $result;
		}));
	}
}

Boot::registerClass(Invoices::class, 'invoices.Invoices');