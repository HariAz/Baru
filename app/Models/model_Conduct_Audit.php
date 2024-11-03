<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class model_Conduct_Audit extends Model
{
    protected $table = 'audit_checklist';

    protected $fillable = [
        'i_id_audit_cklsnmbr',
        'i_id_aud_plnnbr',
        'n_aud_type',
        'i_id_prgm_code',
        'n_aud_plan',
        'd_actl_start',
        'i_id_area_mngr',
        'i_id_cncrnc',
    ];

    public $timestamps = false;

    protected $primaryKey = 'i_id_audit_cklsnmbr';
    public $incrementing = false;
    protected $keyType = 'string';
}
