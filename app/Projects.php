<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    public function complete_project() {
        $this->completed_at = date("Y-m-d H:i:s");
        $this->save();
    }
}
