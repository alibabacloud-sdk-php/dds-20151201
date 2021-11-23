<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribeKernelReleaseNotesResponseBody\releaseNotes;

use AlibabaCloud\Tea\Model;

class releaseNote extends Model
{
    /**
     * @var string
     */
    public $kernelVersion;

    /**
     * @var string
     */
    public $releaseNote;
    protected $_name = [
        'kernelVersion' => 'KernelVersion',
        'releaseNote'   => 'ReleaseNote',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kernelVersion) {
            $res['KernelVersion'] = $this->kernelVersion;
        }
        if (null !== $this->releaseNote) {
            $res['ReleaseNote'] = $this->releaseNote;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return releaseNote
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KernelVersion'])) {
            $model->kernelVersion = $map['KernelVersion'];
        }
        if (isset($map['ReleaseNote'])) {
            $model->releaseNote = $map['ReleaseNote'];
        }

        return $model;
    }
}
