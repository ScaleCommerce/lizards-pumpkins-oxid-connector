<?php
/** 
 * PAYONE OXID Connector is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * PAYONE OXID Connector is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with PAYONE OXID Connector.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.payone.de
 * @copyright (C) Payone GmbH
 * @version   OXID eShop CE
 */
 
$sLangName  = "Deutsch";
// -------------------------------
// RESOURCE IDENTITFIER = STRING
// -------------------------------
$aLang = array(
'charset'                                       => 'ISO-8859-15',
'FCPO_IBAN_INVALID'                             => 'Bitte geben Sie eine korrekte IBAN ein.',
'FCPO_BIC_INVALID'                              => 'Bitte geben Sie eine korrekte BIC ein.',
'FCPO_BLZ_INVALID'                              => 'Bitte geben Sie eine korrekte Bankleitzahl ein.',
'FCPO_KTONR_INVALID'                            => 'Bitte geben Sie eine korrekte Kontonummer ein.',
'FCPO_ERROR'                                    => 'Es ist ein Fehler aufgetreten:<br>',
'FCPO_ERROR_BLOCKED'                            => 'Kontodaten inkorrekt.',
'FCPO_CC_NUMBER_INVALID'                        => 'Bitte geben Sie eine korrekte Kreditkarten-Nummer ein.',
'FCPO_CC_DATE_INVALID'                          => 'Bitte geben Sie ein korrektes Gültigkeits-Datum an.',
'FCPO_CC_CVC2_INVALID'                          => 'Bitte geben Sie eine korrekte Prüfziffer an.',
'fcpo_so_ktonr'                                 => 'Kontonummer:',
'fcpo_so_blz'                                   => 'BLZ:',
'FCPO_MANIPULATION'                             => 'Verdacht auf Manipulation',
'FCPO_REMARK_APPOINTED_MISSING'                 => 'Der Shop hat den Transaktionsstatus APPOINTED nicht erhalten. Bitte prüfen Sie diese Bezahlung sorgfältig!',
'FCPO_THANKYOU_APPOINTED_ERROR'                 => 'Es ist ein Problem im Bezahl-Prozess aufgetreten. Die Bestellung wird von uns gepr&uuml;ft und Sie werden gegebenenfalls kontaktiert.',
'FCPO_CARDSEQUENCENUMBER'                       => 'Card Sequence Number',
'FCPO_ADDRESSCHECK_FAILED1'                     => 'Ihre Adresse konnte nicht verifiziert werden.<br> Grund: "',
'FCPO_ADDRESSCHECK_FAILED2'                     => '"<br>Bitte überprüfen Sie Ihre Eingaben.<br>Wenn die Daten dennoch korrekt sind kontaktieren Sie bitte den Kundendienst.',
'FCPO_ADDRESSCHECK_PPB'                         => 'Vor- & Nachname bekannt',
'FCPO_ADDRESSCHECK_PHB'                         => 'Nachname bekannt',
'FCPO_ADDRESSCHECK_PAB'                         => 'Vor- & Nachname nicht bekannt',
'FCPO_ADDRESSCHECK_PKI'                         => 'Mehrdeutigkeit bei Name zu Anschrift',
'FCPO_ADDRESSCHECK_PNZ'                         => 'nicht (mehr) zustellbar',
'FCPO_ADDRESSCHECK_PPV'                         => 'Person verstorben',
'FCPO_ADDRESSCHECK_PPF'                         => 'Adresse postalisch falsch',
'FCPO_ONLINE_UEBERWEISUNG_TYPE'                 => 'Typ:',
'FCPO_BANKGROUPTYPE'                            => 'Bankgruppe:',
'FCPO_BANKACCOUNTHOLDER'                        => 'Kontoinhaber:',
'FCPO_VOUCHER'                                  => 'Gutschein',
'FCPO_DISCOUNT'                                 => 'Rabatt',
'FCPO_WRAPPING'                                 => "Geschenkverpackung",
'FCPO_GIFTCARD'                                 => "Grußkarte",
'FCPO_SURCHARGE'                                => 'Aufschlag',
'FCPO_DEDUCTION'                                => 'Abschlag',
'FCPO_PAYMENTTYPE'                              => "Zahlungsart:",
'FCPO_SHIPPINGCOST'                             => "Versandkosten",

'FCPO_BANK_COUNTRY'                             => 'Land der Bank:',
'FCPO_BANK_IBAN'                                => 'IBAN:',
'FCPO_BANK_BIC'                                 => 'BIC:',
'FCPO_BANK_CODE'                                => 'BLZ:',
'FCPO_BANK_ACCOUNT_NUMBER'                      => 'Kto.Nr.:',
'FCPO_BANK_GER_OLD'                             => 'oder bezahlen Sie wie gewohnt mit Ihren bekannten Kontodaten<br>(nur für Deutsche Kontoverbindungen).',
'FCPO_CREDITCARD'                               => "Karte:",
'FCPO_CARD_VISA'                                => "Visa",
'FCPO_CARD_MASTERCARD'                          => "Mastercard",
'FCPO_NUMBER'                                   => "Nummer:",
'FCPO_FIRSTNAME'                                => "Vorname:",
'FCPO_LASTNAME'                                 => "Nachname:",
'FCPO_BANK_ACCOUNT_HOLDER_2'                    => "Kontoinhaber:",
'FCPO_IF_DEFERENT_FROM_BILLING_ADDRESS'         => "Falls abweichend von der Rechnungsadresse.",
'FCPO_VALID_UNTIL'                              => "Gültig bis:",
'FCPO_CARD_SECURITY_CODE'                       => "Prüfziffer:",
'FCPO_CARD_SECURITY_CODE_DESCRIPTION'           => "Diese befindet sich auf der Rückseite Ihrer Kreditkarte. Die Prüfziffer<br>sind die letzten drei Ziffern im Unterschriftsfeld.",
'FCPO_TYPE_OF_PAYMENT'                          => "Zahlungsart",
'FCPO_MIN_ORDER_PRICE'                          => "Mindestbestellwert",
'FCPO_PREVIOUS_STEP'                            => "Zurück",
'FCPO_CONTINUE_TO_NEXT_STEP'                    => "Weiter zum nächsten Schritt",
'FCPO_PAYMENT_INFORMATION'                      => "Bezahlinformation",
'FCPO_PAGE_CHECKOUT_PAYMENT_EMPTY_TEXT'         => '<p>Derzeit ist keine Versandart für dieses Land definiert.</p> <p>Wir werden versuchen, Liefermöglichkeiten zu finden und Sie über die Versandkosten informieren.</p>',

'FCPO_EMAIL_BANK_DETAILS'                       => 'Bankdetails',
'FCPO_EMAIL_BANK'                               => 'Bankname:',
'FCPO_EMAIL_ROUTINGNUMBER'                      => 'BLZ:',
'FCPO_EMAIL_ACCOUNTNUMBER'                      => 'Kto.Nr.:',
'FCPO_EMAIL_BIC'                                => 'BIC:',
'FCPO_EMAIL_IBAN'                               => 'IBAN:',
    
'FCPO_KLV_CONFIRM'                              => 'Mit der Übermittlung der für die Abwicklung der gewählten Klarna Zahlungsmethode und einer Identitäts- und Bonitätsprüfung erforderlichen Daten an Klarna bin ich einverstanden. Meine <a target="_blank" style="text-decoration: underline;" href="https://cdn.klarna.com/1.0/shared/content/legal/terms/%s/%s/consent">Einwilligung</a> kann ich jederzeit mit Wirkung für die Zukunft widerrufen. Es gelten die AGB des Händlers.<br><br>Weitere Informationen zum Rechnungskauf finden Sie in den <a target="_blank" style="text-decoration: underline;" href="https://cdn.klarna.com/1.0/shared/content/legal/terms/%s/%s/invoice?fee=0">Rechnungsbedingungen</a>.',
'FCPO_KLV_TELEPHONENUMBER'                      => 'Telefonnummer',
'FCPO_KLV_TELEPHONENUMBER_INVALID'              => 'Bitte geben Sie eine korrekte Telefonnummer ein.',
'FCPO_KLV_BIRTHDAY'                             => 'Geburtstag',
'FCPO_KLV_BIRTHDAY_INVALID'                     => 'Bitte geben Sie ein korrektes Geburtsdatum ein.',
'FCPO_KLV_ADDINFO'                              => 'Zus. Info',
'FCPO_KLV_ADDINFO_INVALID'                      => 'Bitte füllen Sie das Feld aus.',
'FCPO_KLV_ADDINFO_DEL'                          => 'Zus. Info Lieferadresse',
'FCPO_KLV_SAL'                                  => 'Anrede',
'FCPO_KLV_PERSONALID'                           => 'Personenkennziffer',
'FCPO_KLV_PERSONALID_INVALID'                   => 'Bitte füllen Sie das Feld aus.',
'FCPO_KLV_INFO_NEEDED'                          => 'Um den Kauf mit Klarna Rechnung durchführen zu können, benötigen wir noch ein paar Angaben von Ihnen.',
'FCPO_KLV_CONFIRMATION_MISSING'                 => 'Sie müssen noch Ihr Einverständnis mit der Übermittlung der Daten erklären.',

'FCPO_KLS_CHOOSE_CAMPAIGN'                      => 'Bitte w&auml;hlen Sie die entsprechende Kampagne',
'FCPO_KLS_CAMPAIGN_INVALID'                     => 'Sie m&uuml;ssen eine Kampagne ausw&auml;hlen.',
'FCPO_KLS_NO_CAMPAIGN'                          => 'F&uuml;r Ihre aktuelle Kombination aus Lieferland, Sprache und W&auml;hrung gibt es keine Ratenkauf-Optionen.<br>Bitte w&auml;hlen Sie eine andere Zahlart.',
    
'FCPO_ORDER_MANDATE_HEADER'                     => 'SEPA-Lastschrift',
'FCPO_ORDER_MANDATE_INFOTEXT'                   => 'Damit wir die SEPA-Lastschrift von Ihrem Konto einziehen können, benötigen wir von Ihnen ein SEPA-Lastschriftmandat.',
'FCPO_ORDER_MANDATE_CHECKBOX'                   => 'Ich möchte das Mandat erteilen<br>(elektronische Übermittlung)',
'FCPO_ORDER_MANDATE_ERROR'                      => 'Sie müssen das SEPA-Lastschriftmandat bestätigen.',
    
'FCPO_THANKYOU_PDF_LINK'                        => 'Ihr SEPA-Mandat als PDF',
'FCPO_MANAGEMANDATE_ERROR'                      => 'Es ist ein Problem aufgetreten. Bitte überprüfen Sie Ihre Eingaben oder wählen Sie eine andere Zahlart.',
    
'FCPO_PAYPALEXPRESS_USER_SECURITY_ERROR'        => 'Bitte loggen Sie sich im Shop ein und führen Sie den PayPal Express Checkout nochmal durch. Ihre PayPal-Lieferadresse stimmt nicht mit den im Shop hinterlegten Adressdaten &uuml;berein.',
    
'FCPO_YAPITAL_HEADER'                           => 'Bezahlung mit Yapital',
'FCPO_YAPITAL_TEXT'                             => 'Sie haben zwei M&ouml;glichkeiten mit Yapital zu bezahlen. Entweder &ouml;ffnen Sie die Yapital-App, w&auml;hlen Bezahlen aus dem App-Men&uuml; und scannen den unten aufgef&uuml;hrten QR-Code. Oder Sie loggen sich mit Ihren Yapital-Zugangsdaten &uuml;ber den orangen LOG IN Button auf dieser Seite ein. Nach erfolgreicher Transaktion gelangen Sie automatisch zur&uuml;ck in den Shop.<br><br>Alle Transaktionen werden in Echtzeit &uuml;ber Ihren Yapital-Account abgewickelt. Ihre Bankdaten werden nicht von Yapital weitergeleitet, sondern lediglich die erforderlichen Transaktionsdaten.<br><br>Sollten Sie per QR-Code bezahlen, klicken Sie bitte <b>NICHT</b> auf die Links in dem Fenster! Sie werden automatisch weitergeleitet.',
    
'FCPO_CC_IFRAME_HEADER'                         => 'Bezahlung mit Kreditkarte',
'FCPO_OR'                                       => 'oder',
);

/*
[{oxmultilang ident="GENERAL_YOUWANTTODELETE"}]
*/
