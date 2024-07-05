<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Book;

class BookPolicy
{
    /**
     * Determine whether the user can update the book.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Book  $book
     * @return mixed
     */
    public function update(User $user, Book $book)
    {
        return $user->id === $book->user_id || $user->admin === true;
    }

    /**
     * Determine whether the user can delete the book.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Book  $book
     * @return mixed
     */
    public function delete(User $user, Book $book)
    {
        return $user->id === $book->user_id || $user->admin === true;
    }
}
