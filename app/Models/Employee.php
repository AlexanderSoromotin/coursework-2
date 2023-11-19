<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'bank_account_number',
        'bank_id',
        'birthdate',
        'first_name',
        'gender',
        'hire_date',
        'inn',
        'last_name',
        'passport_number',
        'passport_serial',
        'patronymic',
        'personal_phone_number',
        'snils_number',
        'work_phone_number',
        'avatar',
    ];

    public function leaves()
    {
        return $this->hasMany(EmployeeLeave::class, 'employee_id');
    }

    public function position()
    {
        return $this->hasMany(EmployeePosition::class, 'employee_id')
            ->whereNull('end_date')
            ->with('position'); // связь с positions
    }

    public function fileGroups()
    {
        return $this->hasMany(File::class, 'employee_id')->groupBy('file_group_id');
    }

    /**
     * Получить все файлы для данного сотрудника, сгруппированные по группам
     */
    public function allFiles()
    {
        return $this->hasMany(File::class, 'employee_id');
    }
}
