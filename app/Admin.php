<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    public function InsertUserData() {
        $this->rank = "Example Rank";
        $this->name = "Example Rank";
        $this->email = "Example Rank";
        $this->password = "Example Rank";
        $this->updated_at = date("Y-m-d H:i:s");
    }
}

