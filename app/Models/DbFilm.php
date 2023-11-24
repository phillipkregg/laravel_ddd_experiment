<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\DbFilm
 *
 * @property int $film_id
 * @property string $title
 * @property string|null $description
 * @property string|null $release_year
 * @property int $language_id
 * @property int|null $original_language_id
 * @property int $rental_duration
 * @property string $rental_rate
 * @property int|null $length
 * @property string $replacement_cost
 * @property string|null $rating
 * @property mixed|null $special_features
 * @property string $last_update
 * @method static \Illuminate\Database\Eloquent\Builder|DbFilm newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DbFilm newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DbFilm query()
 * @method static \Illuminate\Database\Eloquent\Builder|DbFilm whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbFilm whereFilmId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbFilm whereLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbFilm whereLastUpdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbFilm whereLength($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbFilm whereOriginalLanguageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbFilm whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbFilm whereReleaseYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbFilm whereRentalDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbFilm whereRentalRate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbFilm whereReplacementCost($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbFilm whereSpecialFeatures($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DbFilm whereTitle($value)
 * @mixin Eloquent
 */
class DbFilm extends Model
{
    protected $table = 'film';
    protected $primaryKey = 'film_id';
}
