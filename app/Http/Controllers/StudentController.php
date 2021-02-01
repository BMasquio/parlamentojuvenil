<?php

namespace App\Http\Controllers;

use App\Data\Models\Seeduc;
use App\Data\Models\Student;
use App\Data\Repositories\Data;
use App\Http\Requests\LoginSeeducUser;
use Illuminate\Support\Facades\Input;
use App\Services\SocialLogin\SocialUserService;

class StudentController extends Controller
{
    protected $socialUserService;

    public function __construct(
        Data $dataRepository,
        SocialUserService $socialUserService
    ) {
        parent::__construct($dataRepository);

        $this->socialUserService = $socialUserService;
    }

    protected function findSeeducStudentByRegistrationAndBirth($data)
    {
        return Seeduc::where('matricula', $data['registration'])
            ->where('nascimento', $data['birthdate'])
            ->first();
    }

    protected function findStudentByRegistrationAndBirth($data)
    {
        return Student::where('registration', $data['registration'])
            ->where('birthdate', $data['birthdate'])
            ->first();
    }

    /**
     * @return array
     */
    protected function getUserData()
    {
        return [
            'registration' => Input::get('registration'),
            'birthdate' => string_to_date(Input::get('birthdate')),
        ];
    }

    protected function getUserEmail($user)
    {
        return strpos($user->email, config('app.domain')) == false
            ? $user->email
            : '';
    }

    public function login(LoginSeeducUser $request)
    {
        $userData = $this->getUserData();

        if (
            !($student = $this->findStudentBySeeduc(
                $userData,
                loggedUser()->user
            ))
        ) {
            return redirect()
                ->back()
                ->withErrors(Subscriptions::MATRICULA_E_DATA_DE_NASCIMENTO);
        }

        $this->socialUserService->loginSocialUser($student);

        return redirect()->intended();
    }

    public function findStudentBySeeduc($data, $user = null)
    {
        if (
            is_null($student = $this->findStudentByRegistrationAndBirth($data))
        ) {
            if (
                is_null(
                    $seeduc = $this->findSeeducStudentByRegistrationAndBirth(
                        $data
                    )
                )
            ) {
                return null;
            }

            $student = Student::createStudent([
                'registration' => $seeduc->matricula,
                'birthdate' => $seeduc->nascimento,
                'name' => $seeduc->nome,
                'school' => $seeduc->escola,
                'city' => $seeduc->municipio,
                'regional' => $seeduc->regional,
                'email' => $user ? $this->getUserEmail($user) : null,
            ]);
        }

        return $student;
    }

    public function identify()
    {
        return view(
            get_current_year() .
                '.partials.subscribe-form-register-and-birthdate'
        );
    }

    public function wrongAge()
    {
        return view(config('app.year') . '.students.wrong-age');
    }
}
