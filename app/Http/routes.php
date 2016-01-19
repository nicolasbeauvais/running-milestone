<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function (\Illuminate\Http\Request $request, Illuminate\Contracts\Cache\Repository $cache) use ($app) {

    $api = new Iamstuartwilson\StravaApi(
        env('STRAVA_CLIENT_ID'),
        env('STRAVA_CLIENT_SECRET')
    );

    $api->setAccessToken(env('STRAVA_TOKEN'));

    $activities = $cache->remember('activities', 60, function () use ($api) {
        return $api->get('athlete/activities', ['after' => strtotime('01/01/' . date('Y')), 'per_page' => 200]);
    });

    $distance = 0;
    $time = 0;
    $calories = 0;

    foreach ($activities as $activity) {

        $activity = $cache->remember('activity.' . $activity->id, 60 * 24 * 30, function () use ($api, $activity) {
            return $api->get('activities/' . $activity->id);
        });

        $distance += (int) $activity->distance;
        $calories += (int) $activity->calories;
        $time += (int) $activity->elapsed_time;
    }

    $time = round(($time / 60) / 60, 2);
    $average_distance_by_week = round(($distance / 1000) / (date('z') / 7), 2);
    $distance = (string)str_pad($distance, 7, '0', STR_PAD_LEFT);// add trailing zeros
    $distance = substr($distance, 0, 1) . ' ' . substr($distance, 1, 3) . ' ' . substr($distance, 4, 3);

    return view('home', compact('distance', 'time', 'calories', 'average_distance_by_week'));
});
