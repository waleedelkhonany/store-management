<?php

namespace Modules\Customers\Enums;

use Illuminate\Validation\Rules\Enum;


enum CustomerStatus {}

final class CustomerStatus extends Enum
{
    const PENDING = 'pending';
    const APPROVED = 'approved';
    const REJECTED = 'rejected';
}
