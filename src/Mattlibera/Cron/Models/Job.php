<?php

namespace Mattlibera\Cron\Models;

class Job extends \Illuminate\Database\Eloquent\Model{
    
    protected $table;
    public $timestamps = false;

    public function __construct() {
        $this->table = config('cron.tables.Job');
    }

    public function manager() {
        $managerClass = config('cron.classes.Manager');
        return $this->belongsTo($managerClass, 'cron_manager_id');
    }
    
    
}
