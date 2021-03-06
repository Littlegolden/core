<?php

/*
 * This file is part of Flarum.
 *
 * For detailed copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */

namespace Flarum\Notification;

use Symfony\Contracts\Translation\TranslatorInterface;

interface MailableInterface
{
    /**
     * Get the name of the view to construct a notification email with.
     *
     * @return string
     */
    public function getEmailView();

    /**
     * Get the subject line for a notification email.
     *
     * @param TranslatorInterface $translator
     *
     * @return string
     */
    // Uncomment beta 17. Commented as temporary BC layer since Symfony changed
    // the namespace of their translator interface
    // public function getEmailSubject(TranslatorInterface $translator);
}
