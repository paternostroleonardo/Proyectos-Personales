<?php

namespace FacturaScripts\Plugins\Colombia\Controller;

use FacturaScripts\Core\Controller\SendMail as ParentSendMail;

class SendMail extends ParentSendMail
{
    /**
     * Return the URL of the actual controller.
     *
     * @return string
     */
    public function url()
    {
        $sendParams = ['fileName' => $this->request->get('fileName', '')];
        if (empty($sendParams['fileName'])) {
            return parent::url();
        }

        if ($this->request->get('fileNameXML')) $sendParams['fileNameXML'] = $this->request->get('fileNameXML');

        if ($this->request->get('modelClassName') && $this->request->get('modelCode')) {
            $sendParams['modelClassName'] = $this->request->get('modelClassName');
            $sendParams['modelCode'] = $this->request->get('modelCode');
        }

        return parent::url() . '?' . http_build_query($sendParams);
    }

    /**
     * Set attachment
     */
    protected function setAttachment()
    {
        if ($this->request->get('fileNameXML')) {
            $this->newMail->addAttachment(\FS_FOLDER . '/MyFiles/' . $this->request->get('fileNameXML'), $this->request->get('fileNameXML'));
        }

        parent::setAttachment();
    }

    /**
     * Remove old files.
     */
    protected function removeOld()
    {
        parent::removeOld();

        foreach (glob(\FS_FOLDER . '/MyFiles/*_mail_*.xml') as $fileName) {
            $parts = explode('_', $fileName);
            $time = (int) substr(end($parts), 0, -4);
            if ($time < (time() - self::MAX_FILE_AGE)) {
                unlink($fileName);
            }
        }
    }
}
