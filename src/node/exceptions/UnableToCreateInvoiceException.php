<?php

namespace lnpay\node\exceptions;

class UnableToCreateInvoiceException extends \yii\base\Exception
{
    /**
     * Constructor.
     *
     * @param string     $path
     * @param int        $code
     * @param \Exception $previous
     */
    public function __construct($program_name, $code = 0, \yii\base\Exception $previous = null)
    {
        parent::__construct('Unable to create LN Invoice: ' . $program_name, $code, $previous);
    }
}