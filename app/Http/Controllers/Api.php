<?php

namespace App\Http\Controllers;

use DB;
use Validator;
use App\Data\Repositories\Data;
use App\Data\Repositories\Subscriptions;
use App\Http\Controllers\Controller as BaseController;
use App\Services\SeeducImporter\Service as SeeducImporterService;

class Api extends BaseController
{
    /**
     * @var Data
     */
    protected $dataRepository;

    /**
     * @var Subscriptions
     */
    protected $subscriptionsRepository;

    public function __construct(
        Data $dataRepository,
        Subscriptions $subscriptionsRepository
    ) {
        parent::__construct($dataRepository);

        $this->dataRepository = $dataRepository;

        $this->subscriptionsRepository = $subscriptionsRepository;
    }

    public function getTimeline($year)
    {
        return $this->dataRepository->getTimeline($year);
    }

    public function getCongressmen($year)
    {
        return $this->dataRepository->getCongressmen($year);
    }

    public function getElected($year = null)
    {
        return $this->subscriptionsRepository->getElectedOn1and2($year);
    }

    public function getVoteStatistics()
    {
        $totalVotes = DB::select(
            DB::raw(
                <<<SQL
            SELECT
                count(*) total_votes
            FROM votes
            WHERE year = 2017 and is_valid = true
                ;
SQL
            )
        );

        $byTime = DB::select(
            DB::raw(
                <<<SQL
            SELECT
                to_timestamp(floor((extract('epoch' from created_at) / 3600 )) * 3600) AT TIME ZONE 'UTC' as date_time,
                (select count(*) from votes) as total_votes,
                count(*) time_votes,
                round((count(*)  * 100.00) / (select count(*) from votes), 2) as percentage
            FROM votes
            WHERE votes.year = 2017 and votes.is_valid = true
            GROUP BY date_time
            ORDER BY date_time desc
                ;
SQL
            )
        );

        $byCity = DB::select(
            DB::raw(
                <<<SQL
            SELECT
                students.city,            
                (select count(*) from votes) as total_votes,
                count(*) city_votes,
                round((count(*)  * 100.00) / (select count(*) from votes), 2) as percentage
            FROM votes
            JOIN subscriptions on subscriptions.id = votes.subscription_id
            JOIN students on subscriptions.student_id = students.id
            WHERE votes.year = 2017 and votes.is_valid = true
            GROUP BY students.city
            ORDER BY students.city
            ;
SQL
            )
        );

        return [
            'total_votes' => $totalVotes[0]->total_votes,
            'by_time' => $byTime,
            'by_city' => $byCity,
        ];
    }

    public function validateType($type)
    {
        if ($type == 'email') {
            return $this->validateEmail();
        }
    }

    protected function validateEmail()
    {
        $validator = Validator::make(request()->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->fails()) {
            return ['success' => false];
        }

        return ['success' => true];
    }

    public function seeducUpload()
    {
        info([
            'SeeducImport - START',
            ($pathName = request()->file->getPathname()),
        ]);

        $importer = app(SeeducImporterService::class);

        if (!$importer->isValid($pathName)) {
            return response('Formato inválido', 405);
        }

        $importer->import($pathName);

        info('SeeducImport - END');

        return response('Importado com sucesso');
    }
}
