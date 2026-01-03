<?php
declare(strict_types=1);

return [
    'app_name'     => getenv('APP_NAME') ?: 'BaldwinIT',
    'app_url'      => getenv('APP_URL') ?: 'https://baldwinit.tech',
    'contact_email'=> getenv('CONTACT_EMAIL') ?: 'support@baldwinit.tech',
    'ticket_url'   => getenv('TICKET_URL') ?: 'https://mspguild.tech/modules/frontdesk/create.php',
    'booking_url'  => getenv('BOOKING_URL') ?: '',
];
