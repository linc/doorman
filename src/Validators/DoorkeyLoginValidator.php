<?php

/**
 *  This file is part of reflar/doorman.
 *
 *  Copyright (c) 2018 .
 *
 *
 *  For the full copyright and license information, please view the LICENSE.md
 *  file that was distributed with this source code.
 */

namespace Reflar\Doorman\Validators;

use Flarum\Foundation\AbstractValidator;
use Symfony\Component\Translation\TranslatorInterface;

class DoorkeyLoginValidator extends AbstractValidator
{
    protected $translator;

    /**
     * {@inheritdoc}
     */
    protected $rules = [
        'reflar-doorkey' => [
            'required',
            'reflar-doorkey',
        ],
    ];

    /**
     * {@inheritDoc}
     */
    protected function getMessages()
    {
        return [
            'reflar-doorkey' => app('translator')->trans('reflar-doorkey.admin.invalid_doorkey')
        ];
    }
}
