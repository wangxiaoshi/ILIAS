<?php
require_once("/Library/WebServer/Documents/dev/4_4_generali2_new_wbd/Services/GEV/WBD/classes/Success/class.gevWBDSuccessVvErstanlage.php");
class GevWBDSuccessVvErstanlageTest extends SuccessTestBase {

	public function setUp() {
		$this->success = new gevWBDSuccessVvErstanlage(simplexml_load_string('<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope">'
												.'<soap:Body>'
													.'<ns1:putResponse xmlns:ns1="http://erstanlage.stammdaten.external.service.wbd.gdv.de/">'
														.'<ErstanlageRueckgabewert>'
															.'<TpInterneVermittlerId>7665</TpInterneVermittlerId>'
															.'<VermittlerId>20150728-100390-74</VermittlerId>'
															.'<AnlageDatum>2015-07-28T00:00:00+02:00</AnlageDatum>'
															.'<BeginnZertifizierungsPeriode>2015-07-28T00:00:00+02:00</BeginnZertifizierungsPeriode>'
														.'</ErstanlageRueckgabewert>'
													.'</ns1:putResponse>'
												.'</soap:Body>'
											.'</soap:Envelope>'
									));
	}

	public function success_xml_error() {
		return array(array(simplexml_load_string('<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope">'
												.'<soap:Body>'
													.'<ns1:putResponse xmlns:ns1="http://erstanlage.stammdaten.external.service.wbd.gdv.de/">'
														.'<ErstanlageRueckgabewert>'
															.'<TpInterneVdermittlerId>7665</TpInterneVdermittlerId>'
															.'<VermittlerId>20150728-100390-74</VermittlerId>'
															.'<AnlageDatum>2015-07-28T00:00:00+02:00</AnlageDatum>'
															.'<BeginnZertifizierungsPeriode>2015-07-28T00:00:00+02:00</BeginnZertifizierungsPeriode>'
														.'</ErstanlageRueckgabewert>'
													.'</ns1:putResponse>'
												.'</soap:Body>'
											.'</soap:Envelope>'
									)
						)
				);
	}

	public function test_isWBDSuccessVvErstanlage() {
		$this->assertInstanceOf("gevWBDSuccessVvErstanlage",$this->success);
	}

	/*
	* @dataProvider success_xml_error
	* @expectedException LogicException
	*/
	public function test_cantCreateSuccessObject() {
		$success = new gevWBDSuccessVvErstanlage(simplexml_load_string('<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope">'
												.'<soap:Body>'
													.'<ns1:putResponse xmlns:ns1="http://erstanlage.stammdaten.external.service.wbd.gdv.de/">'
														.'<ErstanlageRueckgabewert>'
															.'<TpInterneVdermittlerId>7665</TpInterneVdermittlerId>'
															.'<VermittlerId>20150728-100390-74</VermittlerId>'
															.'<AnlageDatum>2015-07-28T00:00:00+02:00</AnlageDatum>'
															.'<BeginnZertifizierungsPeriode>2015-07-28T00:00:00+02:00</BeginnZertifizierungsPeriode>'
														.'</ErstanlageRueckgabewert>'
													.'</ns1:putResponse>'
												.'</soap:Body>'
											.'</soap:Envelope>'
									));
		$this->assertNotInstanceOf("gevWBDSuccessVvErstanlage",$success);
	}
}