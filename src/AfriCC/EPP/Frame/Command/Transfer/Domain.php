<?php
/**
 *
 * @author Gavin Brown <gavin.brown@nospam.centralnic.com>
 * @author Gunter Grodotzki <gunter@afri.cc>
 * @license GPL
 */
namespace AfriCC\EPP\Frame\Command\Transfer;

use AfriCC\EPP\Frame\Command\Transfer;

class Domain extends Transfer
{
    protected $mapping_name = 'domain';

    public function setPeriod($period, $units='y')
    {
        $el = $this->createObjectPropertyElement('period');
        $el->setAttribute('unit', $units);
        $el->appendChild($this->createTextNode($period));
        $this->payload->appendChild($el);
    }
}