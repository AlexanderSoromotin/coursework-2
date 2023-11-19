<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FilesGroup extends Model
{
    use HasFactory;

    public function scopeGroupOwner($query, $groupId, $employeeId)
    {
        return $query->where('files_group_id', $groupId)->where('employee_id', $employeeId);
    }
}
