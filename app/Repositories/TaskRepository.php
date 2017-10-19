<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/10/19
 * Time: 下午 06:00
 */
namespace App\Repositories;

use App\User;
use App\Task;

class TaskRepository
{
    /**
     * 取得給定使用者的所有任務。
     *
     * @param  User  $user
     * @return Collection
     */
    public function forUser(User $user)
    {
        return Task::where('user_id', $user->id)
            ->orderBy('created_at', 'asc')
            ->get();
    }
}