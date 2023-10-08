<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'userinfo';

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id_user';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name_user',
        'last_name',
        'email',
        'username',
        'github_id',
        'github_token',
        'github_refresh_token',
        'github_avatar',
        'github_creation_date',
        'github_last_update',
        'register_time',
        'slug',
        'photo_profile',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }    
}
