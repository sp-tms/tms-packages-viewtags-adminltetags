<?php

namespace Apps\Tms\Packages\Adminltetags;

use System\Base\BasePackage;

class Adminltetags extends BasePackage
{
    //protected $modelToUse = ::class;

    protected $packageName = 'adminltetags';

    public $adminltetags;

    public function getAdminltetagsById($id)
    {
        $adminltetags = $this->getById($id);

        if ($adminltetags) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function addAdminltetags($data)
    {
        //
    }

    public function updateAdminltetags($data)
    {
        $adminltetags = $this->getById($id);

        if ($adminltetags) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }

    public function removeAdminltetags($data)
    {
        $adminltetags = $this->getById($id);

        if ($adminltetags) {
            //
            $this->addResponse('Success');

            return;
        }

        $this->addResponse('Error', 1);
    }
}