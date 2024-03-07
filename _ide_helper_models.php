<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Vehicule> $vehicule
 * @property-read int|null $vehicule_count
 * @method static \Illuminate\Database\Eloquent\Builder|Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Category query()
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Category whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperCategory {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Images> $images
 * @property-read int|null $images_count
 * @property-read \App\Models\Vehicule|null $vehicule
 * @property-read \App\Models\Videos|null $video
 * @method static \Illuminate\Database\Eloquent\Builder|Galeries newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Galeries newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Galeries query()
 * @method static \Illuminate\Database\Eloquent\Builder|Galeries whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Galeries whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Galeries whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperGaleries {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $image
 * @property int|null $galeries_id
 * @property \Illuminate\Support\Carbon $updated_at
 * @property \Illuminate\Support\Carbon $created_at
 * @property-read \App\Models\Galeries|null $galerie
 * @method static \Illuminate\Database\Eloquent\Builder|Images newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Images newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Images query()
 * @method static \Illuminate\Database\Eloquent\Builder|Images whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Images whereGaleriesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Images whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Images whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Images whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperImages {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Vehicule> $vehicule
 * @property-read int|null $vehicule_count
 * @method static \Illuminate\Database\Eloquent\Builder|Marque newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Marque newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Marque query()
 * @method static \Illuminate\Database\Eloquent\Builder|Marque whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marque whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marque whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Marque whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperMarque {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $total_price
 * @property int $user_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\ReservationItem> $items
 * @property-read int|null $items_count
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reservation whereUserId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperReservation {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $start_date
 * @property string $end_date
 * @property int $quantity
 * @property string $total_price
 * @property int $vehicule_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property int $reservation_id
 * @property-read \App\Models\Reservation $reservation
 * @property-read \App\Models\Vehicule $vehicule
 * @method static \Illuminate\Database\Eloquent\Builder|ReservationItem newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReservationItem newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ReservationItem query()
 * @method static \Illuminate\Database\Eloquent\Builder|ReservationItem whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReservationItem whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReservationItem whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReservationItem whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReservationItem whereReservationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReservationItem whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReservationItem whereTotalPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReservationItem whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ReservationItem whereVehiculeId($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperReservationItem {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperUser {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $price
 * @property string $matricule
 * @property string $year
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $category_id
 * @property int|null $marque_id
 * @property int|null $galeries_id
 * @property int $total_quantity
 * @property int $available_quantity
 * @property-read \App\Models\Category|null $category
 * @property-read \App\Models\Galeries|null $galerie
 * @property-read \App\Models\Marque|null $marque
 * @property-read \App\Models\ReservationItem|null $reservationItem
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicule newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicule newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicule query()
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicule whereAvailableQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicule whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicule whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicule whereGaleriesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicule whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicule whereMarqueId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicule whereMatricule($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicule whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicule wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicule whereTotalQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicule whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Vehicule whereYear($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperVehicule {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $video
 * @property int|null $galeries_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property-read \App\Models\Galeries|null $galerie
 * @method static \Illuminate\Database\Eloquent\Builder|Videos newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Videos newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Videos query()
 * @method static \Illuminate\Database\Eloquent\Builder|Videos whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Videos whereGaleriesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Videos whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Videos whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Videos whereVideo($value)
 * @mixin \Eloquent
 */
	#[\AllowDynamicProperties]
	class IdeHelperVideos {}
}

