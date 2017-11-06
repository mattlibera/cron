<?php

namespace Mattlibera\Cron\Models;

class Manager extends \Illuminate\Database\Eloquent\Model{
    
    protected $table;
    public $timestamps = false;

    public function __construct() {
        $this->table = config('cron.tables.Manager');
    }

    public function cronJobs() {
        $jobClass = config('cron.classes.Job');
        return $this->hasMany($jobClass, 'cron_manager_id');
    }
    
    
}
