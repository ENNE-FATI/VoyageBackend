<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Planification extends Model
{
    protected $fillable = ['dates_souhaitees', 'nom', 'email', 'destination', 'PréférencesHébergement', 'DemandesSpéciales', 'client_id'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}

