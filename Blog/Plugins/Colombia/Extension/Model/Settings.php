<?php

namespace FacturaScripts\Plugins\Colombia\Extension\Model;

use FacturaScripts\Plugins\Colombia\Fe\ClientFE;

class Settings
{
    /**
     * Save before
     *
     * @return boolean
     */
    public function saveBefore()
    {
        return function () {
            if ($this->name != 'fe') {
                return true;
            }

            if (ClientFE::client($this->token)->send('PUT', 'config/company', [
                'json' => [
                    'pin' => $this->pin,
                    'set_test' => $this->set_test,
                    'identifier' => $this->identifier,
                    'password' => $this->certificatepassword,
                    'certificate_base64' => $this->certificatebase64,
                    'type_environment_id' => $this->type_environment_id,
                ],
            ])) {
                $this->certificatebase64 = null;
                $this->certificatepassword = null;

                return true;
            }

            return false;
        };
    }
}
