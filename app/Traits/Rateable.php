<?php namespace App\Traits;

trait Rateable
{
    /**
     * This model has many ratings.
     *
     * @return Rating
     */
    public function ratings()
    {
        return $this->morphMany('App\Rating', 'rateable');
    }

    public function averageRating()
    {
        return round($this->ratings()->avg('value')*2)/2;
    }

    public function sumRating()
    {
        return $this->ratings()->sum('value');
    }

    public function userAverageRating()
    {
        return $this->ratings()->where('user_id', \Auth::id())->avg('value');
    }

    public function userSumRating()
    {
        return $this->ratings()->where('user_id', \Auth::id())->sum('value');
    }

    public function ratingPercent($max = 5)
    {
        $quantity = $this->ratings()->count();
        $total = $this->sumRating();

        return ($quantity * $max) > 0 ? $total / (($quantity * $max) / 100) : 0;
    }

    public function getAverageRatingAttribute()
    {
        return $this->averageRating();
    }

    public function getSumRatingAttribute()
    {
        return $this->sumRating();
    }

    public function getUserAverageRatingAttribute()
    {
        return $this->userAverageRating();
    }

    public function getUserSumRatingAttribute()
    {
        return $this->userSumRating();
    }
}