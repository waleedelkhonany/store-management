<?php

namespace Modules\Customers\Enums;

use Illuminate\Validation\Rules\Enum;


final class CustomerType extends Enum
{
    const PENDING = 'pending';
    const APPROVED = 'approved';
    const REJECTED = 'rejected';
}
