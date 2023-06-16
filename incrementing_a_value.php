DB::table('userflags')
    ->where('user_id', $userId)
    ->increment('credit', $creditToAdd);
